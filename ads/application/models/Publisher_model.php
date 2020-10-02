<?php

class Publisher_model extends CI_Model {


/***
 * Name:       Custch
 * Package:    publisher_model.php
 * About:        A model class that handle Custch's Advertiser model operation
 * Copyright:  (C) 2017,
 * Author:     Ojeyinka Philip Olaniyi
 * License:    closed /propietry
 ***/

 public function __construct()
{
    parent::__construct();
    $this->load->database();

}


//new
public function get_publisher_by_id()
{


    $query = $this->db->get_where('publishers',array("id" => $_SESSION["id"]));
  return $query->row_array();
}

public function get_publishers()
{

  $query = $this->db->get('publishers');
  return $query->result_array();
}

public function get_withdrawals($id)
{
$query= $this->db->get_where('withdrawal',array('user_id' => $id));
return $query->result_array();
}


public function get_email_verified()
{

 $q = "SELECT email_verified
       FROM publishers
       WHERE id= '".$_SESSION['id']."'";
  $query = $this->db->query($q);

  return $query->row_array();

}

//new
public function get_publisher_by_its_id($id)
{


    $query = $this->db->get_where('publishers',array("id" => $id));
  return $query->row_array();
}

//new
public function get_no_affilate_clicks($account_type)
{


    $query = $this->db->get_where('affilate_clicks',array("referral_id" =>$_SESSION['id'],"account_type" => $account_type));
  return count($query->result_array());
}

//new
public function get_no_affilate_reg($account_type)
{
//no of user invited this session id

    $query = $this->db->get_where($account_type.'s',array("referral_id" => $_SESSION['id']));
  return count($query->result_array());
}

//new
public function get_space($ref_id)
{
    $query = $this->db->get_where('pub_story',array("ref_id" =>$ref_id));
  return $query->row_array();
}

public function get_naira_xrate()
{

  $query = $this->db->get_where("system_var",array("variable_name" => "naira_rate"));
  return $query->row_array()['variable_value'];
}


public function get_minimum_value($type)
{

  $query = $this->db->get_where("system_var",array("variable_name" => "minimum_".$type));
  return $query->row_array()['variable_value'];
}

//new
public function insert_new_password()
{

$dab = array(

"password" => md5(md5($this->input->post("new_password")))




)  ;

   if ($this->db->update("publishers",$dab,array("id" => $_SESSION["id"])))
   {


    return true;

   }
    return false;


}

public function insert_new_balance($publisher_new_balance,$publisher_id)
{

$this->db->update("publishers", array("account_bal" => $publisher_new_balance), array("id" => $publisher_id));
}
//New
public function insert_new_email()
{

$dab = array(

"email" => $this->input->post("new_email")

)  ;

   if ($this->db->update("publishers",$dab,array("id" => $_SESSION["id"])))
   {
 return true;

   }
    return false;


}
public function insert_space($ref_id){

  $ch = array('a','A','B','b','C','c','D','d','E','e');
    $div_id =   $ch[mt_rand(0,9)].''.$ch[mt_rand(0,9)].''.mt_rand(0,10);
  if($this->input->post('type') == 'text')
  {
    
    $code = '<script src="'.site_url('campaign_delivery/deliver_text_js/'.$ref_id).'"></script>
<center><div class="w3-margin" id="'.$div_id.'" style="max-width: 70%;" class="">
</div></center>
';
}elseif($this->input->post('type') == 'banner'){
  if(in_array($this->input->post('size'),array('250X250','300X250'))){
$size_to_get = 'box';
  }elseif(in_array($this->input->post('size'),array('720X90','468X60'))){
$size_to_get = 'rec';
  }else{
    $size_to_get = 'sta';

  }


  $code = '<script src="'.site_url('campaign_delivery/deliver_banner_js/'.$ref_id).'/'.$size_to_get.'"></script>
<center><div  class="w3-margin"  id="'.$div_id.'">
</div></center>';

}elseif($this->input->post('type') == "popup")
{
 $code = '<script src="'.site_url('campaign_delivery/deliver_popup_js/'.$ref_id).'"></script>
<div  class="w3-margin"  style="" id="'.$div_id.'">
</div>';

}
/*elseif($this->input->post('type') == "banner_text")
{
 $code = '
<link rel="stylesheet"  href="'.base_url('assets/cj/w3.css').'">
<script src="'.base_url('assets/js/jquery.js').'"></script>
<script src="'.site_url('campaign_delivery/deliver_article_style_js/'.$ref_id).'"></script>
<center><div  class="w3-margin"  style="max-width: 500px;" id="'.$div_id.'">
</div></center>';

}*/

$datab = array(
'name' => $this->input->post("space_name"),
'category' => json_encode($this->input->post("category")),
'tcategory' => json_encode($this->input->post("category")),
'website' => $this->input->post("website_url"),
'type' => $this->input->post("type"),
'vertical' => $this->input->post("vertical"),
'size' => $this->input->post("size"),
'ref_id' => $ref_id,
'user_id' => $_SESSION['id'],
'clicks' => 0,
'div_id' => $div_id,
'code' => $code,
'views' => 0,
"status" => "active",
'time' => time()
);

$this->db->insert('pub_story',$datab);

}

public function update_payment_details()
{

if($_POST['payment_type'] == "bank")
{

$datab = array(
"bank_name" => $_POST['bank_name'],
"bank_acct" => $_POST['account_number'],
"bank_det" => $_POST['account_name'], 
"bank_no" => $_POST['swift_code'], 
"payment_type" =>  $_POST['payment_type']
);


}elseif($_POST['payment_type'] == "paypal")
{

$datab = array(
"bank_acct" => $_POST['paypal_email'],
"payment_type" =>  $_POST['payment_type']
);

  
}elseif($_POST['payment_type'] == "western_union")
{
$datab = array(
"other_name" => $_POST['manual_type'],
"payment_type" =>  $_POST['payment_type'],
"other_detail" => $_POST['withdrawl_details']
);
}

$this->db->update("publishers",$datab,array('id' => $_SESSION['id']));
}

public function spaces()
{

    $this->db->order_by("id","DESC");

    $query = $this->db->get_where("pub_story",array('user_id' => $_SESSION['id']));
    return $query->result_array();


}

public function views_earning($ref_id)
{
  $q =  "SELECT COUNT(v.id) as total_views, SUM(a.per_view) as earned_views
  FROM views v
  LEFT JOIN pub_story p
  ON p.ref_id = v.space_id
  LEFT JOIN adv_story a
  ON a.ref_id = v.story_id
  WHERE v.space_id= '".$ref_id."'";
  $query = $this->db->query($q);

  $res = $query->row_array();

  if ($res['earned_views'] == '')
    return 0;
  return $res['earned_views'];
}


public function clicks_earning($ref_id)
{
  $q = "SELECT COUNT(c.id) as total_clicks, SUM(a.per_click) as earned_clicks
  FROM clicks c
  LEFT JOIN pub_story p
  ON p.ref_id = c.space_id
  LEFT JOIN adv_story a
  ON a.ref_id = c.story_id
  WHERE c.space_id= '".$ref_id."'";
  $query = $this->db->query($q);

  $res2 = $query->row_array();

  if ($res2['earned_clicks'] == '')
    return 0;

  return $res2['earned_clicks'];
}


public function get_earning($ref_id)
{
  $res = $this->views_earning($ref_id);
  $res2 = $this->clicks_earning($ref_id);

 return $res + $res2;
}

public function spaces_advanced()
{
  $q = "SELECT p.ref_id, p.name, p.category, p.type, p.status, p.views, p.clicks, p.gained 
        FROM pub_story p";


  $query = $this->db->query($q);
  return $query->result_array();


}


public function count_advertisers_campaigns()
{


$query = $this->db->get_where("adv_story",array('user_id' => $_SESSION['id']));
return count($query->result_array());


}


public function get_space_by_id($ref_id)
{


$query = $this->db->get_where("pub_story",array('ref_id' =>$ref_id));
return $query->row_array();


}

public function count_publishers_spaces()
{


$query = $this->db->get_where("pub_story",array('user_id' => $_SESSION['id']));
return count($query->result_array());


}

public function get_publisher_sites()
{

$query = $this->db->query('SELECT website FROM publishers_websites WHERE publisher_id = '.$_SESSION['id'] . " AND approved=1");
return $query->result_array();
}

public function get_full_sites()
{

  $q = "SELECT SUM(ps.views) AS total_views, SUM(ps.clicks) AS total_clicks, pw.website, pw.approved
    FROM publishers_websites pw
    LEFT JOIN pub_story ps
    ON ps.website = pw.website
    WHERE pw.publisher_id= ".$_SESSION['id'];


    $query = $this->db->query($q);
    return $query->result_array();
}

public function get_approved_sites_only()
{

  $q = "SELECT website, approved
  FROM publishers_websites
  WHERE approved=1 AND website IS NOT NULL AND publisher_id= ".$_SESSION['id'];


    $query = $this->db->query($q);
    return $query->result_array();
}





public function get_approved_sites()
{

  $q = "SELECT website, pw.approved
    FROM publishers_websites pw
    LEFT JOIN pub_story ps
    ON ps.website = pw.website
    WHERE pw.approved=1 AND pw.website IS NOT NULL AND pw.publisher_id= ".$_SESSION['id'];


    $query = $this->db->query($q);
    return $query->result_array();
}

public function get_pending_sites()
{

  $q = "SELECT * FROM publishers_websites WHERE approved=0 AND publisher_id= ".$_SESSION['id'];


    $query = $this->db->query($q);
    return $query->result_array();
}

public function country_click_by_pub_id($id)
{
  $q = "SELECT 
  * 
  FROM
  (SELECT count(id) AS views, country FROM views WHERE story_pid='$id' GROUP BY country) t1
  INNER JOIN
  (SELECT count(id) AS clicks, country FROM views WHERE story_pid='$id' GROUP BY country) t2
  ON t1.country = t2.country";
  
  $query = $this->db->query($q);
  return $query->result_array();
}

public function country_click_by_pub_space($id)
{
  $q = "SELECT 
  * 
  FROM
  (SELECT count(id) AS views, country FROM views WHERE space_id='$id' GROUP BY country) t1
  INNER JOIN
  (SELECT count(id) AS clicks, country FROM views WHERE space_id='$id' GROUP BY country) t2
  ON t1.country = t2.country";
  
  $query = $this->db->query($q);
  return $query->result_array();
}


public function count_publisher_pending_spaces()
{


$query = $this->db->get_where("pub_story",array('user_id' => $_SESSION['id'],'status' => 'pending'));
return count($query->result_array());


}


public function count_publisher_blocked_campaigns()
{


$query = $this->db->get_where("adv_story",array('user_id' => $_SESSION['id'],'approval' => 'unapproved'));
return count($query->result_array());


}

public function count_publisher_active_campaigns()
{


$query = $this->db->get_where("adv_story",array('user_id' => $_SESSION['id'],'status' => 'active'));
return count($query->result_array());


}

public function count_publisher_inactive_campaigns()
{


$query = $this->db->get_where("adv_story",array('user_id' => $_SESSION['id'],'approval' => 'inactive'));
return count($query->result_array());


}
public function get_campaign_ref_id($ref_id)
{
$query = $this->db->get_where("adv_story",array('ref_id' => $ref_id));
return $query->row_array();

}

/*keep
 $query = $this->db->query('SELECT * FROM admin_earning WHERE time >= '.(time()-$time).' AND story_id = '.$ref_id.' AND story_aid = '.$_SESSION['id'].' ;');


*/
public function get_campaign_at_time_views($ref_id,$today,$time_interval)
{
  $time_interval  = $time_interval * 60 * 60;
    $q = "SELECT COUNT(v.id) as total_views, AVG(a.per_view) * 1000 as eCPM
    FROM views v
    LEFT JOIN pub_story p
    ON p.ref_id = v.space_id
    LEFT JOIN adv_story a
    ON a.ref_id = v.story_id
    WHERE v.time >= ".($today - $time_interval)." AND v.time <= ".$today." AND v.space_id= '".$ref_id."'";


    $query = $this->db->query($q);
    return $query->row_array();

}

public function get_other_report($col, $start_time, $end_time, $ref_id)
{
  $q = "SELECT *
        FROM  (SELECT ". $col .", COUNT(id) AS Views FROM views WHERE time >= ".$start_time." AND time <= ".$end_time. " AND space_id= '" . $ref_id . "' GROUP BY ". $col .") AS a
        JOIN (SELECT ". $col .", COUNT(id) AS Clicks FROM clicks WHERE time >= ".$start_time." AND time <= ".$end_time. " AND space_id= '" . $ref_id . "' GROUP BY ". $col .") AS b
        ON a.".$col." = b.".$col.";";

  $query = $this->db->query($q);
  return $query->result_array();

}

public function get_campaign_at_all_time_views($ref_id)
{

  $query = $this->db->get_where('views',array("space_id" => $ref_id));
 return count($query->result_array());

}

public function get_campaign_at_all_time_clicks($ref_id)
{

  $query = $this->db->get_where('clicks',array("space_id" => $ref_id));
 return count($query->result_array());

}

public function get_campaign_at_time_clicks($ref_id,$today,$time_interval)
{

  $time_interval  = $time_interval * 60 * 60;
  $q = "SELECT COUNT(c.id) as total_clicks, AVG(a.per_click) as eCPC
  FROM clicks c
  LEFT JOIN pub_story p
  ON p.ref_id = c.space_id
  LEFT JOIN adv_story a
  ON a.ref_id = c.story_id
  WHERE c.time >= ".($today - $time_interval)." AND c.time <= ".$today." AND c.space_id= '".$ref_id."'";


  $query = $this->db->query($q);
  return $query->row_array();

}
public function get_campaign_views($ref_id,$today)
{

   

    $query = $this->db->query('SELECT * FROM views WHERE time >= '.$today.' AND space_id = "'.$ref_id.'";');

 return count($query->result_array());

}

public function get_campaign_clicks($ref_id,$today)
{

    $query = $this->db->query('SELECT * FROM clicks WHERE time >= '.$today.' AND space_id = "'.$ref_id.'";');

 return count($query->result_array());

}

public function get_other_view_report($col, $start_time, $end_time, $ref_id)
{
  $q = "SELECT z." . $col . ", AVG(z.per_view) AS eCPM, COUNT(z.space_id) AS Views FROM (SELECT v.platform, v.browser, v.country, v.space_id, a.per_click, a.per_view, v.time
        FROM views v
        LEFT JOIN pub_story p
        ON p.ref_id = v.space_id
        LEFT JOIN adv_story a
        ON a.ref_id = v.story_id
        WHERE v.time >= ".$start_time." AND v.time <= ".$end_time." AND v.space_id= '".$ref_id."') AS z 
        GROUP BY z.".$col;
  $query = $this->db->query($q);
  return $query->result_array();
}

public function get_other_click_report($col, $start_time, $end_time, $ref_id)
{
  $q = "SELECT  z." . $col . ", AVG(z.per_click) AS eCPC, COUNT(z.space_id) AS Clicks FROM (SELECT c.platform, c.browser, c.country, c.space_id, a.per_click, a.per_view, c.time
        FROM clicks c
        LEFT JOIN pub_story p
        ON p.ref_id = c.space_id
        LEFT JOIN adv_story a
        ON a.ref_id = c.story_id
        WHERE c.time >= ".$start_time." AND c.time <= ".$end_time." AND c.space_id= '".$ref_id."') AS z 
        GROUP BY z.".$col;
  $query = $this->db->query($q);
  return $query->result_array();

}


}
