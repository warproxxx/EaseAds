<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/***
 * Name:      EaseAds
 * Package:   Campaign_delivery.php
 * About:    A controller that handles campaign delivery api operation
 * Copyright:  (C) 2018,
 * Author:     Ojeyinka Philip Olaniyi
 * License:    closed /propietry
 ***/


class Campaign_delivery extends CI_Controller {

public function __construct()
{
     parent::__construct();
     $this->load->model(array('blog_model','campaign_model','advertiser_model','publisher_model','user_model'));
    $this->load->library(array('session','form_validation','user_agent'));
     $this->load->helper(array('url','form','page_helper'));
   
}
/*
public function delivery()
{
  
header("Access-Control-Allow-Origin: *");
echo json_encode(array(
    'field' => 'value'
));

  
}
*/

public function deliver_banner_js($space_id = NULL,$size_type)
{
    /*
  box:Box /style ads
  rec: Rectangular image ads style
  sta: Standing ads type
    */
  if($size_type == "box")
  {
    $size_to_get = "300X250";
  }
  elseif($size_type == "rec") 
  {
    $size_to_get = "720X90";
  }
  elseif($size_type == "sta") 
  {
    $size_to_get = "160X600";
  }

  $space = $this->campaign_model->get_space_by_ref_id($space_id);
  $space_categories =[];
  $publisher = $this->publisher_model->get_publisher_by_its_id($space['user_id']);

  for ($i=0; $i < count(json_decode($space['category'])) ; $i++) 
  { 
    
    if(!empty($hold = $this->campaign_model->get_campaign_by_category_banner(json_decode($space['category'])[$i],$size_to_get)))
    {
      array_push($space_categories, $hold[mt_rand(0,count($hold)-1)]['category']);
      unset($hold);
    }
  }

  if(empty($space_categories))
  {
    array_push($space_categories,"AdNetwork");
    //set ads category to show if publisher category is unavailable
  }

  $campaign_to_render = NULL;
  //targetting variable
  $client_browser = $this->agent->browser();
  $client_os = explode(" ", $this->agent->platform())[0];
  $ip = $this->input->ip_address();
  $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
  $client_country = @$ipdat->geoplugin_countryCode;

  $count = 0;


  $category = $space_categories[mt_rand(0,count($space_categories)-1)];
  //var_dump($category);

  $resulted_campaigns = $this->campaign_model->get_campaign_by_category_banner($category,$size_to_get);
  //note the singularity
  if (count($resulted_campaigns) > 0)
  {
    $resulted_campaign = $resulted_campaigns[mt_rand(0,count($resulted_campaigns)-1)];

    if($resulted_campaign['targeting'] == 'false')
    {
      //if general or targetting option is skipped by advertiser
      $campaign_to_render = $resulted_campaign;
    }
    else
    {
      #handle NULL
      if ($resulted_campaign['tplatform'] == NULL)
        $resulted_campaign['tplatform'] = '["' . $client_os  . '"]';
      
      foreach (json_decode($resulted_campaign['tplatform'] ) as $target_platform) 
      {
        if ($resulted_campaign['tbrowser'] == NULL)
          $resulted_campaign['tbrowser'] = '["' . $client_browser  . '"]';

        foreach (json_decode($resulted_campaign['tbrowser'] ) as $target_browser) 
        {
          if ($resulted_campaign['tcountry'] == NULL)
            $resulted_campaign['tcountry'] = '["' . $client_country  . '"]';

          foreach (json_decode($resulted_campaign['tcountry'] ) as $target_country) 
          {
            if ((strtolower($client_os) == strtolower($target_platform)) and (strtolower($client_browser) == strtolower($target_browser)) and(strtolower($client_country) == strtolower($target_country)))
            {
                $campaign_to_render = $resulted_campaign;
                break 3;
            }
          }
        }
      }
    } #works
  }
  else
  {
    $campaign_to_render = NULL;
  }

  if ($campaign_to_render == NULL)
  {
    #set to default
    $campaign_to_render = $this->campaign_model->get_default_campaign('banner')[0];
    $campaign_to_render['click_url'] = site_url('Campaign_delivery/click/');
    $campaign_to_render['banner_url'] = base_url('assets/campaigns/'.$campaign_to_render['img_link']);
    $publisher_id = $space['user_id'];
    $advertiser_id = $campaign_to_render['user_id'];
  }
  else
  {
      //add base url to the array
    $campaign_to_render['click_url'] = site_url('Campaign_delivery/click/');
    //banner url
    $campaign_to_render['banner_url'] = base_url('assets/campaigns/'.$campaign_to_render['img_link']);

    //get both campaign and space here and record its view accordingly
    //deduct for view and credit accordingly and check for duplicate //view deducting and creditng
    $publisher_id = $space['user_id'];
    $advertiser_id = $campaign_to_render['user_id'];
    //check for duplicate view on same ads

    if(empty($this->campaign_model->get_campaign_view(array('ip' => get_client_ip(),'story_id' => $campaign_to_render['ref_id'],'story_pid' => $publisher['id']))))
    {

      $publisher_details = $this->publisher_model->get_publisher_by_its_id($publisher_id);
      //cpm here is the cost per view for advertiser


      //bill advertiser
      if($campaign_to_render['balance'] < 0)
      {
      //mark as inactive
        $this->campaign_model->edit_campaign(array("status" => "inactive"),$campaign_to_render['ref_id']);
      }
      if($campaign_to_render['balance'] >= $campaign_to_render['per_view'])
      {
        $campaign_new_balance = $campaign_to_render['balance'] - $campaign_to_render['per_view'];
        $this->campaign_model->insert_new_balance($campaign_new_balance,$campaign_to_render['ref_id']);
        //credit publisher
        $publisher_new_balance = $publisher_details['account_bal'] + ((70/100) * $campaign_to_render['per_view']);

          $dat_admin =  array(
                'time' => time(),
                'year' => getdate()['year'],
                'weekday' => getdate()['weekday'],
                'month' => getdate()['month'],
                'earning_type' => "view",
                'type' => "banner",
                'amount' => ((30/100) * $campaign_to_render['per_view'])
                );
            
            $this->user_model->insert_admin_noti($dat_admin);

        $this->publisher_model->insert_new_balance($publisher_new_balance,$publisher_id);
      }
      else
      {
      //mark as inactive
        $this->campaign_model->edit_campaign(array("status" => "inactive"),$campaign_to_render['ref_id']);
      }
    }
  }


  
  //insert view here
  $this->campaign_model->insert_view(array("story_pid" => $publisher_id,"story_aid" => $advertiser_id ,"space_id" => $space_id,"browser" => $this->agent->browser(),"story_id" => $campaign_to_render['ref_id'],"ip" => get_client_ip(),"platform" => $this->agent->platform(),"time" => time(),"is_mobile" => $this->agent->is_mobile(), "country" => $client_country));
  $size =  explode('X', $space['size']);


  Header("content-type: application/x-javascript");
  //make_object_unique
  $mou = mt_rand(0,10);
  echo "var imggotten".$mou." = ".json_encode($campaign_to_render).";";

  //image ads here
  echo "$(document).ready(function() {
  $('#".$space['div_id']."').html('<div style=\'max-width:".$size[0]."px;height:".$size[1]."px;\' class=\'w3-display-container\'><a href=\''+imggotten".$mou."['click_url']+imggotten".$mou."['ref_id']+'/".$space_id."\'><img class=\'\' style=\'display:block;width:100%;\' src=\''+imggotten".$mou."['banner_url']+'\'/></a><div class=\'w3-display-topright w3-text-blue w3-tiny w3-serif w3-border w3-border-blue\'><b><a href=\'http://www.easeads.com\'>EaseAds</a></b></div></div>');
    }
      );";

}

public function deliver_popup_js($space_id = NULL)
{
  $space = $this->campaign_model->get_space_by_ref_id($space_id);
  $space_categories =[];
  $publisher = $this->publisher_model->get_publisher_by_its_id($space['user_id']);

  for ($i=0; $i < count(json_decode($space['category'])) ; $i++) 
  {  
    if(!empty($hold = $this->campaign_model->get_campaign_by_category_popup(json_decode($space['category'])[$i])))
    {
      array_push($space_categories, $hold[mt_rand(0,count($hold)-1)]['category']);
      unset($hold);
    }
  }

  //var_dump($space_categories);
  if(empty($space_categories))
  {
    array_push($space_categories,"default");
    //set ads category to show if publisher category is unavailable
  }

  $campaign_to_render = NULL;
  //targetting variable
  $client_browser = $this->agent->browser();
  $client_os = explode(" ", $this->agent->platform())[0];
  $ip = $this->input->ip_address();
  $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
  $client_country = @$ipdat->geoplugin_countryCode;

  $count = 0;

  $category = $space_categories[mt_rand(0,count($space_categories)-1)];
  //var_dump($category);

  $resulted_campaigns = $this->campaign_model->get_campaign_by_category_popup($category);
  //note the singularity
  if (count($resulted_campaigns) > 0)
  {
    $resulted_campaign = $resulted_campaigns[mt_rand(0,count($resulted_campaigns)-1)];
    #
    if($resulted_campaign['targeting'] == 'false')
    {
    //if general or targetting option is skipped by advertiser
      $campaign_to_render = $resulted_campaign;
    }
    else
    {

      if ($resulted_campaign['tplatform'] == NULL)
        $resulted_campaign['tplatform'] = '["' . $client_os  . '"]';
      
      foreach (json_decode($resulted_campaign['tplatform'] ) as $target_platform) 
      {
        if ($resulted_campaign['tbrowser'] == NULL)
          $resulted_campaign['tbrowser'] = '["' . $client_browser  . '"]';

        foreach (json_decode($resulted_campaign['tbrowser'] ) as $target_browser) 
        {
          if ($resulted_campaign['tcountry'] == NULL)
            $resulted_campaign['tcountry'] = '["' . $client_country  . '"]';

          foreach (json_decode($resulted_campaign['tcountry'] ) as $target_country) 
          {
            if ((strtolower($client_os) == strtolower($target_platform)) and (strtolower($client_browser) == strtolower($target_browser)) and(strtolower($client_country) == strtolower($target_country)))
            {
                $campaign_to_render = $resulted_campaign;
                break 3;
            }
          }
        }
      }

    }
  }
  else
  {
    $campaign_to_render == NULL;
  }

  if ($campaign_to_render == NULL)
  {
    #set to default
    $campaign_to_render = $this->campaign_model->get_default_campaign('popup')[0];
    $campaign_to_render['click_url'] = site_url('Campaign_delivery/click/');
    $publisher_id = $space['user_id'];
    $advertiser_id = $campaign_to_render['user_id'];
  }
  else
  {
    //add base url to the array
    $campaign_to_render['click_url'] = site_url('Campaign_delivery/click/');
    //get both campaign and space here and record its view accordingly
    //deduct for view and credit accordingly and check for duplicate //view deducting and creditng
    $publisher_id = $space['user_id'];
    $advertiser_id = $campaign_to_render['user_id'];

    //check for duplicate view on same ads

      if(empty($this->campaign_model->get_campaign_view(array('ip' => get_client_ip(),'story_id' => $campaign_to_render['ref_id'],'story_pid' => $publisher['id']))))
      {
      $publisher_details = $this->publisher_model->get_publisher_by_its_id($publisher_id);
      //cpm here is the cost per view for advertiser


      //bill advertiser
      if($campaign_to_render['balance'] < 0)
      {
      //mark as inactive
        $this->campaign_model->edit_campaign(array("status" => "inactive"),$campaign_to_render['ref_id']);
      }

      if($campaign_to_render['balance'] >= $campaign_to_render['per_view'])
      {

      $campaign_new_balance = $campaign_to_render['balance'] - $campaign_to_render['per_view'];
      $this->campaign_model->insert_new_balance($campaign_new_balance,$campaign_to_render['ref_id']);
      //credit publisher
      $publisher_new_balance = $publisher_details['account_bal'] + ((70/100) * $campaign_to_render['per_view']);

        $dat_admin =  array(
              'time' => time(),
              'year' => getdate()['year'],
              'weekday' => getdate()['weekday'],
              'month' => getdate()['month'],
              'earning_type' => "view",
              'type' => "text",
              'amount' => ((30/100) * $campaign_to_render['per_view'])
              );
          
          $this->user_model->insert_admin_noti($dat_admin);

      $this->publisher_model->insert_new_balance($publisher_new_balance,$publisher_id);
      }else{
      //mark as inactive
        $this->campaign_model->edit_campaign(array("status" => "inactive"),$campaign_to_render['ref_id']);
      }


      }
  }

  //insert view here
  $this->campaign_model->insert_view(array("story_pid" => $publisher_id,"story_aid" => $advertiser_id ,"space_id" => $space_id,"browser" => $this->agent->browser(),"story_id" => $campaign_to_render['ref_id'],"ip" => get_client_ip(),"platform" => $this->agent->platform(),"time" => time(),"is_mobile" => $this->agent->is_mobile()));


  Header("content-type: application/x-javascript");
  if(!empty($campaign_to_render))
  {
  //paint border blue
    $text_style = 'class="w3-card w3-border w3-border-blue w3-padding w3-center"';
  //make_object_unique
    $mou = mt_rand(0,10);
  }else{
  //dont
    $text_style =NULL;

  }
  echo "var gotten".$mou." = ".json_encode($campaign_to_render).";";
  echo "$(document).ready(function() {
    var config = {
      th_zone: 24966,
      th_hours: 12
  },
  currentScript;
currentScript = document.currentScript || document.scripts[document.scripts.length - 1];
currentScript.parentNode.removeChild(currentScript);
! function(d, e) {
  function u(a) {
      a = e.querySelector(\"meta[name='\" + a + \"']\");
      return null !== a ? a.getAttribute(\"content\") : \"\"
  }

  function v(a) {
      var b, f, c, d = e.cookie.split(\";\");
      for (b = 0; b < d.length; b += 1)
          if (f = d[b].substr(0, d[b].indexOf(\"=\")), c = d[b].substr(d[b].indexOf(\"=\") + 1), f = f.replace(/^s+|s+$/g, \"\"), f === a) return decodeURIComponent(c)
  }

  function h(a, b, c) {
      a.addEventListener ? a.addEventListener(b, c, !1) : a.attachEvent ? (a[\"e\" + b + c] = c, a[b + c] = function() {
          a[\"e\" + b + c](d.event)
      }, a.attachEvent(\"on\" + b, a[b + c])) : a[\"on\" + b] = a[\"e\" + b + c]
  }
  var c, g, p = encodeURIComponent((u(\"keywords\") + \" \" + u(\"description\") + \" \" + e.title).replace(/W/g, \" \").replace(/[ ]{2,}/g, \" \").trim()).substring(0, 500),
      q = \"undefined\" != typeof d.config && \"undefined\" != typeof d.config.th_zone && parseInt(d.config.th_zone, 10) ? d.config.th_zone : 32813,
      w = \"undefined\" != typeof d.config && \"undefined\" != typeof d.config.th_hours && parseInt(d.config.th_hours, 10) ? d.config.th_hours : 12,
      n = encodeURI((new Date).getTime()),
      k = gotten".$mou."['click_url']+gotten".$mou."['ref_id']+\"/".$space_id. "?offer=ZS&sub=\" + q + \"&sub2=32813&loc=\" +
      p + \"&cb=\" + n,
      r = \"th-pop-\" + q,
      p = v(r),
      l = null;
  if (Date.prototype.addHours = function(a) {
          return this.setHours(this.getHours() + a), this
      }, c = {
          settings: {
              top: d.screenTop || d.screenY,
              left: d.screenLeft || d.screenX,
              width: d.innerWidth || e.documentElement.clientWidth,
              height: d.innerHeight || e.documentElement.clientHeight
          },
          init: function() {
              var a = c.browser;
              if (l = d.self, d.top !== d.self) try {
                  d.top.document.location.toString() && (l = d.top)
              } catch (b) {}
              return a.isMobile.any(l) ? void c.binders.mobile() : a.is.msie ? void c.binders.firefox() : a.is.firefox ?
                  void c.binders.firefox() : a.is.chrome && a.versionBetween(33, 40) && -1 !== navigator.appVersion.indexOf(\"Mac\") ? void c.binders.chrome31() : a.is.chrome && a.versionBetween(30, 40) && -1 !== navigator.appVersion.indexOf(\"Mac\") ? void c.binders.chrome30_mac() : a.is.chrome && a.versionOlderThan(30) ? void c.binders.chromeUntil30() : a.is.chrome && a.versionIs(30) ? void c.binders.chrome30() : a.is.chrome && a.versionBetween(31, 40) ? void c.binders.chrome31() : a.is.chrome && a.versionFrom(41) ? void c.binders.chrome41() : a.is.safari ? void c.binders.safari() :
                  void c.binders.firefox()
          },
          windowParams: function() {
              return \"width=\" + c.settings.width + \",height=\" + c.settings.height + \",top=\" + c.settings.top + \",left=\" + c.settings.left + \",scrollbars=1,location=1,toolbar=0,menubar=0,resizable=1,statusbar=1\"
          },
          status: {
              opened: !1
          },
          opened: function() {
              return c.status.opened || v(r)
          },
          setAsOpened: function() {
              this.status.opened = !0;
              var a;
              a = new Date;
              a.addHours(w);
              a = encodeURIComponent(1) + \"; expires=\" + a.toUTCString() + \"; domain=\" + d.location.host + \"; path=/\";
              e.cookie = r + \"=\" + a
          },
          preventDefault: function(a) {
              return a.preventDefault &&
                  a.preventDefault(), a.returnValue = !1, !1
          },
          findParentLink: function(a) {
              var b = 0;
              if (null === a.getAttribute(\"target\") && \"html\" !== a.nodeName.toLowerCase())
                  for (; a.parentNode && 4 >= b && \"html\" !== a.nodeName.toLowerCase() && (b += 1, a = a.parentNode, \"a\" !== a.nodeName.toLowerCase() || \"\" === a.href););
              return a
          },
          triggers: {
              firefox: function() {
                  if (c.opened()) return !0;
                  var a = \"about:blank\",
                      b = c.windowParams();
                  (b = l.window.open(a, n, b)) && (b.blur(), -1 < navigator.userAgent.toLowerCase().indexOf(\"applewebkit\") && (l.window.blur(), l.window.focus()),
                      b.Init = function(b) {
                          b.Main = function() {
                              var c;
                              a = b.Params.PopURL;
                              \"undefined\" != typeof d.mozPaintCount ? (c = b.window.open(\"about:blank\"), c.close()) : -1 < navigator.userAgent.toLowerCase().indexOf(\"chrome/2\") && (c = b.window.open(\"about:blank\"), c.close());
                              try {
                                  b.opener.window.focus()
                              } catch (y) {}
                              b.window.location = a;
                              b.window.blur()
                          };
                          b.Main()
                      }, b.Params = {
                          PopURL: k
                      }, b.Init(b));
                  c.setAsOpened()
              },
              chromeUntil30: function() {
                  if (c.opened()) return !0;
                  d.open(\"javascript:window.focus()\", \"_self\");
                  var a = d.open(\"about:blank\", n, c.windowParams()),
                      b = e.createElement(\"a\"),
                      f = e.createEvent(\"MouseEvents\");
                  b.setAttribute(\"href\", \"data:text/html,<script>window.close();\x3c/script>\");
                  b.style.display = \"none\";
                  e.body.appendChild(b);
                  f.initMouseEvent(\"click\", !0, !0, d, 0, 0, 0, 0, 0, !0, !1, !1, !0, 0, null);
                  b.dispatchEvent(f);
                  e.body.removeChild(b);
                  a.document.open().write(\"<script type='text/javascript'>window.location='\" + k + \"';\x3c/script>\");
                  a.document.close();
                  c.setAsOpened()
              },
              chrome30: function(a) {
                  if (c.opened()) return !0;
                  var b = e.createElement(\"a\"),
                      f = e.createEvent(\"MouseEvents\");
                  a = a.target || a.srcElement;
                  b.href = \"javascript:window.open('\" + k + \"','\" + n + \"','\" + c.windowParams() + \"')\";
                  e.body.appendChild(b);
                  b.webkitRequestFullscreen();
                  f.initMouseEvent(\"click\", !0, !0, d, 0, 0, 0, 0, 0, !1, !1, !0, !1, 0, null);
                  b.dispatchEvent(f);
                  e.webkitCancelFullScreen();
                  setTimeout(function() {
                      d.getSelection().empty()
                  }, 250);
                  a.click();
                  c.setAsOpened()
              },
              chrome41: function(a) {
                  if (c.opened()) return !0;
                  var b, f = d.location.href,
                      e = a.target || a.srcElement;
                  \"a\" !== e.nodeName.toLowerCase() && (e = c.findParentLink(e));
                  null !== e.getAttribute(\"href\") &&
                      -1 === e.getAttribute(\"href\").indexOf(\"javascript:\") && (f = e.getAttribute(\"href\"));
                  e = f;
                  return !(e = e.split(\"?\")[0], /^https?:\/\/(?:[a-z0-9\-]+\.)+[a-z0-9]{2,6}(?:\/[^\/#?]+)+\.(?:jpg|gif|png)$/i.test(e)) && (b = d.open(d.location), b.location = f, c.setAsOpened(), l.document.location = k, void 0 !== a.preventDefault && (a.preventDefault(), a.stopPropagation()), void c.setAsOpened())
              },
              safari: function() {
                  if (c.opened()) return !0;
                  var a = l.window.open(k, n, c.windowParams()),
                      b = d.top.window.document.createElement(\"a\"),
                      f = d.top.window.document.createEvent(\"MouseEvents\");
                  a && (a.blur(), a.opener.window.focus(), d.self.window.focus(), d.focus(), b.href = \"data:text/html,<script>window.close();\x3c/script>\", e.getElementsByTagName(\"body\")[0].appendChild(b), f.initMouseEvent(\"click\", !1, !0, d, 0, 0, 0, 0, 0, !0, !1, !1, !0, 0, null), b.dispatchEvent(f), b.parentNode.removeChild(b));
                  c.setAsOpened()
              },
              tab: function() {
                  if (c.opened()) return !0;
                  var a = k ? k : \"data:text/html,<script>window.close();\x3c/script>;\",
                      b = d.top.window.document.createElement(\"a\"),
                      f = e.createEvent(\"MouseEvents\");
                  b.href = a;
                  e.getElementsByTagName(\"body\")[0].appendChild(b);
                  f.initMouseEvent(\"click\", !0, !0, d, 0, 0, 0, 0, 0, !0, !1, !1, !0, 0, null);
                  b.dispatchEvent(f);
                  b.parentNode.removeChild(b);
                  c.setAsOpened()
              },
              mobile: function(a) {
                  if (c.opened()) return !0;
                  var b = null,
                      f = !1;
                  if (\"undefined\" != typeof a) {
                      if (a.target ? b = a.target : a.srcElement && (b = a.srcElement), 3 == b.nodeType || \"A\" != b.tagName) {
                          do b = b.parentNode, \"HTML\" == b.tagName && (f = !0); while (\"A\" != b.tagName && !1 === f)
                      }
                      if (f) return !0;
                      f = !1;
                      if (null !== d.navigator.platform.match(/ipod|iphone|ipad/i) && (f = !0), f && \"undefined\" != typeof b.href && \"\" !== b.href && \"#\" !=
                          b.href && d.open(b.href, \"_blank\").focus(), b.target = \"_blank\", c.setAsOpened(), e.location.assign(k), f) return c.preventDefault(a)
                  }
              }
          },
          binders: {
              explorer: function() {
                  h(e, \"click\", c.triggers.firefox)
              },
              firefox: function() {
                  h(e, \"click\", c.triggers.chrome41)
              },
              chromeUntil30: function() {
                  h(e, \"mousedown\", c.triggers.chromeUntil30)
              },
              chrome30: function() {
                  h(e, \"mousedown\", c.triggers.chrome30)
              },
              chrome31: function() {
                  h(e, \"mousedown\", c.triggers.tab)
              },
              chrome41: function() {
                  h(e, \"mousedown\", c.triggers.chrome41)
              },
              chrome30_mac: function() {
                  h(e,
                      \"mousedown\", c.triggers.chromeUntil30)
              },
              safari: function() {
                  h(e, \"mousedown\", c.triggers.chrome41)
              },
              mobile: function() {
                  h(e, \"click\", c.triggers.mobile)
              }
          },
          browser: {
              is: function() {
                  var a, b = navigator.userAgent.toLowerCase(),
                      c = {
                          webkit: /webkit/.test(b),
                          mozilla: /mozilla/.test(b) && !/(compatible|webkit)/.test(b),
                          chrome: /chrome/.test(b),
                          msie: /msie/.test(b) && !/opera/.test(b) || !!navigator.userAgent.match(/Trident.*rv/),
                          firefox: /firefox/.test(b),
                          safari: /safari/.test(b) && !/chrome/.test(b),
                          opera: /opera/.test(b),
                          ie: !!navigator.userAgent.match(/Trident.*rv/)
                      };
                  return c.safari ? c.version = (b.match(/.+(?:ri)[/: ]([d.]+)/) || [])[1] : c.ie ? (a = new RegExp(/trident.*rv:([0-9]{1,}[.0-9]{0,})/), c.version = null !== a.exec(b) ? parseFloat(RegExp.$1) : null) : c.version = (b.match(/.+(?:ox|me|ra|ie)[/: ]([d.]+)/) || [])[1], c
              }(),
              versionNewerThan: function(a) {
                  return g = parseInt(this.is.version.split(\".\")[0]), g > a
              },
              versionFrom: function(a) {
                  return g = parseInt(this.is.version.split(\".\")[0]), g >= a
              },
              versionOlderThan: function(a) {
                  return g = parseInt(this.is.version.split(\".\")[0]), g < a
              },
              versionIs: function(a) {
                  return g =
                      parseInt(this.is.version.split(\".\")[0]), g === a
              },
              versionBetween: function(a, b) {
                  return g = parseInt(this.is.version.split(\".\")[0]), g >= a && g <= b
              },
              isMobile: {
                  any: function(a) {
                      return a.navigator.userAgent.match(/mmp|midp|wap|symbian|phone|android|mobile|tablet|ipad|playbook|nook|kindle|symbian/i)
                  }
              }
          }
      }, !p) {
      var x = [23002, 24764, 24763, 24762, 24761, 24760, 24759, 24758, 24757, 24756, 24755, 24754],
          m = e.createElement(\"script\"),
          t = d.document.body || d.document.head;
      m.src = \"//cdn1.traffichaus.com/scripts/banner-ad.js\";
      m.onerror = function() {
          c.init();
          t.removeChild(m)
      };
      m.onload = function() {
          -1 !== x.indexOf(q) && c.init();
          t.removeChild(m)
      };
      t.appendChild(m)
  }(function(a) {
      (a = e.getElementById(a)) && a.parentNode.removeChild(a)
  })(\"th_advertisement\")
}(window, document);
      }
      );";


}



public function click($ref_id,$space_id)
{

$space = $this->campaign_model->get_space_by_ref_id($space_id);
$publisher = $this->publisher_model->get_publisher_by_its_id($space['user_id']);

//get details
//check for valid click
//credit publisher
//debit advertiser
//record accordingly
//if debit unsuccessful end campaign

//get both campaign and space here and record its view accordingly
//deduct for view and credit accordingly and check for duplicate //view deducting and creditng
$campaign_rendered = $this->campaign_model->get_campaign_by_ref_id($ref_id);
$publisher_id = $space['user_id'];
$advertiser_id = $campaign_rendered['user_id'];
//check for duplicate view on same ads
$ip = $this->input->ip_address();
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
$client_country = @$ipdat->geoplugin_countryCode;



if(empty($this->campaign_model->get_campaign_click(array('ip' => get_client_ip(),'story_id' => $campaign_rendered['ref_id'],'story_pid' => $publisher['id']))))
{
$publisher_details = $this->publisher_model->get_publisher_by_its_id($publisher_id);


//bill advertiser
if($campaign_rendered['balance'] < 0)
{
//mark as inactive
  $this->campaign_model->edit_campaign(array("status" => "inactive"),$campaign_rendered['ref_id']);
}
if($campaign_rendered['balance'] >= $campaign_rendered['per_click'])
{

$campaign_new_balance = $campaign_rendered['balance'] - $campaign_rendered['per_click'];
$this->campaign_model->insert_new_balance($campaign_new_balance,$campaign_rendered['ref_id']);
//credit publisher
$publisher_new_balance = $publisher_details['account_bal'] + ((70/100) * $campaign_rendered['per_click']);
$dat_admin =  array(
        'time' => time(),
        'year' => getdate()['year'],
        'weekday' => getdate()['weekday'],
        'month' => getdate()['month'],
        'earning_type' => "click",
        'type' =>$campaign_rendered['type'],
        'amount' => ((30/100) * $campaign_to_render['per_click'])
         );
    
    $this->user_model->insert_admin_noti($dat_admin);

$this->publisher_model->insert_new_balance($publisher_new_balance,$publisher_id);

}else{
//mark as inactive
  $this->campaign_model->edit_campaign(array("status" => "inactive"),$campaign_rendered['ref_id']);
}

}

//insert click here
$this->campaign_model->insert_click(array("story_pid" => $publisher_id,"story_aid" => $advertiser_id ,"space_id" => $space_id,"browser" => $this->agent->browser(),"story_id" => $ref_id,"ip" => get_client_ip(),"platform" => $this->agent->platform(),"time" => time(),"is_mobile" => $this->agent->is_mobile(), "country" => $client_country));

if(empty($campaign_rendered['cpa_id']))
{
  //if not cpa
//redirect to destination url
header('Location: http://'.$campaign_rendered['dest_link']);
}else{
  //get cpa slug here
  $cpa = $this->advertiser_model->get_cpa_form_by_ref_id($campaign_rendered['cpa_id']);

  show_page('cpa_form/index/'.$cpa['form_slug'].'/'.$ref_id.'/'.$space_id);
}


}



}