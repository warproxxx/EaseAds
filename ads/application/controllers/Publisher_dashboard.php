<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/***
 * Name:      AdNetwork
 * Package:     publisher_dashboard.php
 * About:        A controller that handles publisher operation
 * Copyright:  (C) 2018,
 * Author:     Ojeyinka Philip Olaniyi
 * License:    closed /propietry
 ***/





class Publisher_dashboard extends CI_Controller {

public function __construct()
{
     parent::__construct();
     $this->load->model(array('blog_model','publisher_model','advertiser_model','user_model', 'admin_model'));
    $this->load->library(array('session','form_validation','user_agent'));
     $this->load->helper(array('url','form','page_helper','blog_helper'));

    // session_start();
      if($_SESSION["accounttype"] != "Publisher")
      {
        show_page('page/logout');
      }
      //check for account approval
      if($_SESSION['account_status'] == "pending")
      {
        show_page('page/pending_account_alert');
      }

      //check for account approval
      if($_SESSION['account_status'] == "suspended")
      {
        show_page('page/suspended_account_alert');
      }

    
      $this->siteName = $this->advertiser_model->get_system_variable("site_name");
      $this->author = $this->advertiser_model->get_system_variable("author");
      $this->keywords = $this->advertiser_model->get_system_variable("keywords");
      $this->description= $this->advertiser_model->get_system_variable("description");
      $this->noindex = '<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">';



}

public function report()
{


  $data['title'] = $this->siteName." | Generate Report";
  $data['author'] =  $this->author;
  $data['keywords'] =  $this->keywords;
  $data['description'] =  $this->description;
  $data["noindex"] =  $this->noindex;
  $data["count_spaces"] = $this->publisher_model->count_publishers_spaces();
  $data['user'] = $this->publisher_model->get_publisher_by_id();

  //get country details by user's country

  $campaign = $this->input->post('campaign');

  if ($campaign != "")
  {

    $report = $this->input->post('report');
    $start_date = new DateTime($this->input->post('start'));
    $end_date = new DateTime($this->input->post('end'));

    if ($report == 'day')
    {
      $interval = DateInterval::createFromDateString('1 day');
      $period = new DatePeriod($start_date, $interval, $end_date);
      $report_details = array();

      
      $total_views = 0;
      $total_clicks = 0;
      $avg_cpm = 0;
      $avg_cpc = 0;
      $total = 0;

      foreach ($period as $dt) 
      {
        $dt->modify('+2 day');
        $view_details = $this->publisher_model->get_campaign_at_time_views($campaign, $dt->getTimestamp(),24);
        $click_details = $this->publisher_model->get_campaign_at_time_clicks($campaign, $dt->getTimestamp(),24);
          $curr_array = array("Time" => $dt->modify('-1 day')->format("Y-m-d"), 
                              "Views" => $view_details['total_views'],
                              "eCPM" => $view_details['eCPM'],
                              "Clicks" => $click_details['total_clicks'],
                              "eCPC" => $click_details['eCPC']
                            );
          $report_details[] = $curr_array;

          $total = $total + 1;
          $total_views = $total_views + $view_details['total_views'];
          $total_clicks = $total_clicks + $click_details['total_clicks'];
          $avg_cpm = $avg_cpm + $view_details['eCPM'];
          $avg_cpc = $avg_cpc + $click_details['eCPC'];
      }

      if ($total == 0)
      {
        $total = 1;
      }

      $avg_cpm = $avg_cpm / $total;
      $avg_cpc =$avg_cpc / $total;

      $total_array = array("Time" => "Total", 
                              "Views" => $total_views,
                              "eCPM" => $avg_cpm,
                              "Clicks" => $total_clicks,
                              "eCPC" => $avg_cpc
                            );

      $report_details[] = $total_array;

      $json = json_decode(json_encode($report_details));
      $data['day_report'] = $json;

    }
    else
    {
      $end_date->modify('+2 day');
      #also send campaign id. Check report sending value AND space_id = "'.$ref_id.'";'
      $start_date = $start_date->getTimestamp();
      $end_date = $end_date->getTimestamp();
      $data['view_report'] = $this->publisher_model->get_other_view_report($report, $start_date, $end_date, $campaign);
      $data['click_report'] = $this->publisher_model->get_other_click_report($report, $start_date, $end_date, $campaign);     
    }    

    
  }

  $data['items'] =  $this->publisher_model->spaces(0,NULL);

  $this->load->view('/common/publisher_header_view',$data);
  $this->load->view('/common/publisher_top_tiles',$data);
  $this->load->view('/user/publisher/publisher_report',$data);
  $this->load->view('/common/users_footer_view',$data);

}

public function index()
{

  $email_verified = $this->publisher_model->get_email_verified();
  if ($email_verified['email_verified'] == 0)
  {
    unset($_SESSION["id"]);
    unset($_SESSION["logged_in"]);
    unset($_SESSION["accounttype"]);

    $_SESSION['action_status_report'] = '<span class="w3-text-red">You must verify your email to login</span>';
    $this->session->mark_as_flash('action_status_report');

    show_page("page/login?type=publisher");
  }

      $data['title'] = $this->siteName." | Publisher Dashboard";
            $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;


      $data['user'] = $this->publisher_model->get_publisher_by_id();

      $data['country_details'] = $this->advertiser_model->get_country_details($data['user']['country']);
      $data['general_details'] = $this->advertiser_model->get_general_details();

      $data["count_spaces"] = $this->publisher_model->count_publishers_spaces();
      $data["pending_campaigns"] = $this->publisher_model->count_publisher_pending_spaces();
      $data["blocked_campaigns"] = $this->publisher_model->count_publisher_blocked_campaigns();
      $data["active_campaigns"] = $this->publisher_model->count_publisher_active_campaigns();
      $data["inactive_campaigns"] = $this->publisher_model->count_publisher_inactive_campaigns();
      $data['no_clicks'] = $this->publisher_model->get_no_affilate_clicks("publisher");
      $data['no_reg'] = $this->publisher_model->get_no_affilate_reg("publisher");
      $data['announcements'] = $this->admin_model->get_active_announcements();
      $data['notifications'] = $this->user_model->get_notifications('publisher');


    $this->load->view('/common/publisher_header_view',$data);
      $this->load->view('/common/publisher_top_tiles',$data);

    $this->load->view('/user/publisher/dashboard_view',$data);
     $this->load->view('/common/users_footer_view',$data);


}

public function settings()
{



      $data['title'] = $this->siteName." |  Publisher Settings";
            $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;
$data['user'] = $this->publisher_model->get_publisher_by_id();
$data["count_spaces"] = $this->publisher_model->count_publishers_spaces();

    $this->load->view('/common/publisher_header_view',$data);
      $this->load->view('/common/publisher_top_tiles',$data);

    $this->load->view('/user/publisher/settings_view',$data);
     $this->load->view('/common/users_footer_view',$data);




}



 public function change_password($slug = null)
 {
       $this->form_validation->set_rules("current_password","Current Password","trim|required");
    $this->form_validation->set_rules("new_password","New Password","trim|required|is_unique[publishers.password]");
    $this->form_validation->set_rules("confirm_password","Confirm New Password","trim|required|matches[new_password]");


    if ($this->form_validation->run() ==  FALSE)
   {


      $data['title'] = $this->siteName." |  Publisher Settings";
            $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;
$data['user'] = $this->publisher_model->get_publisher_by_id();
$data["count_spaces"] = $this->publisher_model->count_publishers_spaces();

    $this->load->view('/common/publisher_header_view',$data);
      $this->load->view('/common/publisher_top_tiles',$data);
    $this->load->view('/user/publisher/settings_view',$data);
     $this->load->view('/common/users_footer_view',$data);



}else{

//change here



     $user_det =   $this->publisher_model->get_publisher_by_id();

       if ($user_det['password'] == md5(md5(trim($this->input->post('current_password')))))
       {

        //change password
          if( $this->publisher_model->insert_new_password())
          {
             //show suc message

            $_SESSION['action_status_report'] = '<b class="w3-text-green">Password changed successfully</b><br>';
              $this->session->mark_as_flash('action_status_report');
              show_page("publisher_dashboard/settings");
          }else{

              //show err message

             $_SESSION['action_status_report'] = '<b class="w3-text-red">uknown error occurred</b>';
              $this->session->mark_as_flash('action_status_report');
              show_page("publisher_dashboard/settings");


          }

       }else{


                   //incorrect password  error page


             $_SESSION["action_status_report"] = '<b class="w3-text-red">The Current Account
             Password you entered is incorrect</b><br>';
              $this->session->mark_as_flash('action_status_report');
              show_page("publisher_dashboard/settings");



       }
}
 }


//functions ends here
public function payment()
{

$this->form_validation->set_rules("payment_type","Payment Type","required");
if($this->form_validation->run())
{

$this->publisher_model->update_payment_details();
    

   $_SESSION["action_status_report"] = '<b class="w3-text-green">Payment 
         details Updated successfully</b><br>';
   $this->session->mark_as_flash('action_status_report');
   show_page("publisher_dashboard/payment");

}else{




      $data['title'] = $this->siteName." |  Publisher Payment Settings";
            $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;
$data['user'] = $this->publisher_model->get_publisher_by_id();
$data["count_spaces"] = $this->publisher_model->count_publishers_spaces();
$data['withdrawals'] = $this->publisher_model->get_withdrawals($_SESSION['id']);
$data['manual_payments'] = $this->advertiser_model->get_manual_payments();



    $this->load->view('/common/publisher_header_view',$data);
    $this->load->view('/common/publisher_top_tiles',$data);
    $this->load->view('/user/publisher/payment_view',$data);
     $this->load->view('/common/users_footer_view',$data);


}

}


public function withdrawl_process()
{
  //later check here for new guidelines also
$data['user'] = $this->publisher_model->get_publisher_by_id();
$data['general_details'] = $this->advertiser_model->get_general_details();
$withdraw_amt = $this->input->post('withdraw_amount');

//check if balance is ok

if(($data['user']['account_bal'] >= $withdraw_amt) && ($withdraw_amt > $data['general_details']['minimum_payout']))
{

//check if there is previous pending balance
if($data['user']['pending_bal'] > 0)
{

//please there is already pending balance

   $_SESSION['err_msg'] = "<script>alert('Please there is already a pending balance');</script>";
    $this->session->mark_as_flash('err_msg');
    show_page("publisher_dashboard");


}
else{
//insert  balance to pending
$ref = ((time()-456788)*9);


$new_pending = $withdraw_amt +
$data['user']['pending_bal'];
  $w_dat =  array('pending_bal' => $new_pending );


  $this->user_model->edit_user_details($w_dat,$data['user']['id'],'publishers');
  //insert to wildrawal

$w_dat =  array(
    'amount' => $withdraw_amt,
    'user_id' => $_SESSION['id'],
    'approval' => "pending",
    'status' => "pending",
    'email' => $data['user']['email'],
    'phone' => $data['user']['phone'],
    'ref'  => $ref,
    'payment_type' => $this->input->post('payment_type'),
    'time' => time()
     );

  $this->user_model->insert_to_with_req($w_dat);
 
  //insert to history
  $details = "You make a withdrawal Request of 
  ".$withdraw_amt." with reference ".$ref;
        $h_dat =  array(
        'details' => $details,
        'action' => 'w_request' ,
        'user_id' => $_SESSION['id'],
        'account_type' => "publisher",
        'time' => time()
        );


  $this->user_model->insert_to_history($h_dat);
 //send email here
  
  //insert 00.00 to account bal


  $w_dat =  array('account_bal' =>  $data['user']['account_bal']-$withdraw_amt);

  $this->user_model->edit_user_details($w_dat,$data['user']['id'],'publishers');



         $_SESSION['err_msg'] = "<script>alert('Your withdrawal Request has been submitted successfully');</script>";
          $this->session->mark_as_flash('err_msg');
          show_page("Publisher_dashboard");

}
//echo success
}else{
         $_SESSION['err_msg'] = "<script>alert('Insufficient Balance');</script>";
          $this->session->mark_as_flash('err_msg');
}
}




  public function req_withdrawal()
  {





      $data['title'] = $this->siteName." |  Publisher Payment Settings";
            $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;
  $data['user'] = $this->publisher_model->get_publisher_by_id();
  $data["count_spaces"] = $this->publisher_model->count_publishers_spaces();
  $data['withdrawals'] = $this->publisher_model->get_withdrawals($_SESSION['id']);
  $data['manual_payments'] = $this->advertiser_model->get_manual_payments();
  $data['general_details'] = $this->advertiser_model->get_general_details();


    $this->load->view('/common/publisher_header_view',$data);
    $this->load->view('/common/publisher_top_tiles',$data);
    $this->load->view('/user/publisher/withdrawl',$data);
     $this->load->view('/common/users_footer_view',$data);



 }

 public function read($id)
{
  $this->user_model->read($id);
  redirect('/Publisher_dashboard');

}
public function view_details($ref_id)
{




      $data['title'] = $this->siteName." |  Publisher Space Reporting";
            $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;


      

$data['campaign_item'] = $this->publisher_model->get_space_by_id($ref_id);
$data['user'] = $this->publisher_model->get_publisher_by_id();
$data["count_spaces"] = $this->publisher_model->count_publishers_spaces();
$data['item'] = $this->publisher_model->get_space_by_id($ref_id);
$data['item']['clicks'] =$this->publisher_model->get_campaign_at_all_time_clicks($ref_id);
$data['item']['views'] =$this->publisher_model->get_campaign_at_all_time_views($ref_id);




$data['yesterday_views'] = $this->publisher_model->get_campaign_at_time_views($ref_id,strtotime(date("y-m-d")),24);
$data['two_days_ago_views'] = $this->publisher_model->get_campaign_at_time_views($ref_id,(strtotime(date("y-m-d"))-(24*60*60)),48);
$data['three_days_ago_views'] = $this->publisher_model->get_campaign_at_time_views($ref_id,(strtotime(date("y-m-d"))-(48*60*60)),72);
$data['four_days_ago_views'] = $this->publisher_model->get_campaign_at_time_views($ref_id,(strtotime(date("y-m-d"))-(72*60*60)),96);
$data['today_views'] = $this->publisher_model->get_campaign_views($ref_id,strtotime(date("y-m-d")));


$data['yesterday_clicks'] = $this->publisher_model->get_campaign_at_time_clicks($ref_id,strtotime(date("y-m-d")),24);
$data['two_days_ago_clicks'] = $this->publisher_model->get_campaign_at_time_clicks($ref_id,(strtotime(date("y-m-d"))-(24*60*60)),48);
$data['three_days_ago_clicks'] = $this->publisher_model->get_campaign_at_time_clicks($ref_id,(strtotime(date("y-m-d"))-(48*60*60)),72);
$data['four_days_ago_clicks'] = $this->publisher_model->get_campaign_at_time_clicks($ref_id,(strtotime(date("y-m-d"))-(72*60*60)),96);
$data['today_clicks'] = $this->publisher_model->get_campaign_clicks($ref_id,strtotime(date("y-m-d")));

$data['country_click_details'] = $this->publisher_model->country_click_by_pub_space($ref_id);


    $this->load->view('/common/publisher_header_view',$data);
    $this->load->view('/common/publisher_top_tiles',$data);
    $this->load->view('/user/publisher/details_view',$data);
     $this->load->view('/common/users_footer_view',$data);



}

public function campaign_action($action,$ref_id)
{
  $campaign = $this->publisher_model->get_space_by_id($ref_id);
  if($action == "stop")
  {
    $this->publisher_model->edit_space(array('status' => "inactive"),$ref_id);

    $_SESSION['action_status_report'] ="<span class='w3-text-green'>Space STOPPED successfully</span>";
    $this->session->mark_as_flash("action_status_report");
    show_page('publisher_dashboard/view_details/'.$ref_id);

  }
  elseif($action == "start")
  {
    $this->publisher_model->edit_space(array('status' => "active"),$ref_id);
      $_SESSION['action_status_report'] ="<span class='w3-text-green'>Campaign ".$action." successfully</span>";
      $this->session->mark_as_flash("action_status_report");
      show_page('publisher_dashboard/view_details/'.$ref_id);

  }
  elseif ($action == "delete")
  {
    $this->publisher_model->delete_story($ref_id);
    redirect('publisher_dashboard/spaces/');
  }

}

public function edit($ref_id)
{
     $data['title'] = $this->siteName." | Edit Space";
     $data['author'] =  $this->author;
     $data['keywords'] =  $this->keywords;
     $data['description'] =  $this->description;
     $data["noindex"] =  $this->noindex;

     $data['categories'] = $this->user_model->get_categories();
     $data['detail'] = $this->publisher_model->get_space_by_id($ref_id);
     $data['general_details'] = $this->advertiser_model->get_general_details();
     $data["count_spaces"] = $this->publisher_model->count_publishers_spaces();


     

     
     if($this->input->post('campaign_name'))
     { 
       

       $new_details = array("name" => $this->input->post('campaign_name'),
                             "category" => json_encode($this->input->post("category")),
                             "tcategory" => json_encode($this->input->post("category")),
                            );
       


       $this->publisher_model->update_story($ref_id,$new_details);
       show_page("publisher_dashboard/view_details/".$ref_id);

     }

     $this->load->view('/common/publisher_header_view',$data);
       $this->load->view('/common/publisher_top_tiles',$data);
     $this->load->view('/user/publisher/edit_view',$data);
     $this->load->view('/common/users_footer_view',$data);




}


public function affilate()
{



      $data['title'] = $this->siteName." |  Publisher Affilate";
            $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;
$data['user'] = $this->publisher_model->get_publisher_by_id();
$data["count_spaces"] = $this->publisher_model->count_publishers_spaces();


    $this->load->view('/common/publisher_header_view',$data);
      $this->load->view('/common/publisher_top_tiles',$data);
   $this->load->view('/user/publisher/affilate_view',$data);
     $this->load->view('/common/users_footer_view',$data);



}

public function sites()
{

      $form_data = $this->input->post();
      $site_name = $this->input->post("site_name");

      if ($site_name != "")
      {
            $this->user_model->add_single_site($_SESSION['id'], $site_name);
            echo("<script>alert('The website has been submitted and is pending approval')</script>");
      }

      $data['title'] = $this->siteName." |  Sites";
      $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;
      $data['user'] = $this->publisher_model->get_publisher_by_id();
      $data["count_spaces"] = $this->publisher_model->count_publishers_spaces();
      $data["sites"] = $this->publisher_model->get_publisher_sites();
      
      $this->load->view('/common/publisher_header_view',$data);
      $this->load->view('/common/publisher_top_tiles',$data);
      $this->load->view('/user/publisher/sites_view',$data);
      $this->load->view('/common/users_footer_view',$data);



}

public function sites_list()
{

      $form_data = $this->input->post();
      $site_name = $this->input->post("site_name");

      if ($site_name != "")
      {
            $this->user_model->add_single_site($_SESSION['id'], $site_name);
            echo("<script>alert('The website has been submitted and is pending approval')</script>");
      }

      $data['title'] = $this->siteName." |  Sites";
      $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;
      $data['user'] = $this->publisher_model->get_publisher_by_id();
      $data["count_spaces"] = $this->publisher_model->count_publishers_spaces();
      $data["approved_sites"] = $this->publisher_model->get_approved_sites_only();
      $data["pending_sites"] = $this->publisher_model->get_pending_sites();
      
      
      $this->load->view('/common/publisher_header_view',$data);
      $this->load->view('/common/publisher_top_tiles',$data);
      $this->load->view('/user/publisher/sites_list',$data);
      $this->load->view('/common/users_footer_view',$data);



}



 public function spaces($offset = 0)
 {



    $limit = 5;
      $this->load->library('pagination');

        $data['items'] =  $this->publisher_model->spaces();
    $config['base_url'] = site_url("publisher_dashboard/spaces");
      $data['title'] = $this->siteName." |  Publisher Campaign";
            $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;
$data['user'] = $this->publisher_model->get_publisher_by_id();
$data["count_spaces"] = $this->publisher_model->count_publishers_spaces();
$data['country_click_details'] = $this->publisher_model->country_click_by_pub_id($_SESSION['id']);
 

    $this->load->view('/common/publisher_header_view',$data);
    $this->load->view('/common/publisher_top_tiles',$data);
    $this->load->view('/user/publisher/spaces_view',$data);
     $this->load->view('/common/users_footer_view',$data);


 }


 public function add_space($ref_id = null)
 {
      $this->form_validation->set_rules("space_name","Space Name","trim|required");
    $this->form_validation->set_rules("website_url","Website URL","trim|required");
     //$this->form_validation->set_rules("category","category","trim|required");


    if ($this->form_validation->run() ==  FALSE)
   {


      $data['title'] = $this->siteName." |  Add ADs Space";
            $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;
      $data['user'] = $this->publisher_model->get_publisher_by_id();
      $data["count_spaces"] = $this->publisher_model->count_publishers_spaces();

  
      $code = $this->publisher_model->get_space($ref_id);

      if(!empty($code))
      {
        $data['code'] = $code['code'];
      }

      $data['sites'] = $this->publisher_model->get_publisher_sites();
      $data['categories'] = $this->user_model->get_categories();
      
    $this->load->view('/common/publisher_header_view',$data);
      $this->load->view('/common/publisher_top_tiles',$data);
    $this->load->view('/user/publisher/add_space_view',$data);
     $this->load->view('/common/users_footer_view',$data);



}else{

$ref_id = substr(md5(time()), 8);

$this->publisher_model->insert_space($ref_id);


  $_SESSION['action_status_report'] = '<b class="w3-text-green">Ads Space Generated successfully<br> Copy The Integration Code in the box below</b><br>';
    $this->session->mark_as_flash('action_status_report');
    show_page("publisher_dashboard/add_space/".$ref_id);
}
 }
//function ends here

 public function change_email($slug = null)
 {
      $this->form_validation->set_rules("current_password","Password","trim|required");
    $this->form_validation->set_rules("new_email","New Email","trim|required|is_unique[publishers.email]");
    $this->form_validation->set_rules("confirm_email","Confirm New Email","trim|required|matches[new_email]");
    if ($this->form_validation->run() ==  FALSE)
   {
     $data['title'] = $this->siteName." |  Publisher Settings";
            $data['author'] = $this->author;
      $data['keywords'] = $this->keywords;
      $data['description'] = $this->description;
      $data["noindex"] = $this->noindex;
$data['user'] = $this->publisher_model->get_publisher_by_id();
$data["count_spaces"] = $this->publisher_model->count_publishers_spaces();

    $this->load->view('/common/publisher_header_view',$data);
      $this->load->view('/common/publisher_top_tiles',$data);
    $this->load->view('/user/publisher/settings_view',$data);
     $this->load->view('/common/users_footer_view',$data);
}else{

//change here
     $user_det =   $this->publisher_model->get_publisher_by_id();

       if ($user_det['password'] == md5(md5(trim($this->input->post('current_password')))))
       {

        //change Email
          if( $this->publisher_model->insert_new_email())
          {
             //show suc message

            $_SESSION['action_status_report'] = '<b class="w3-text-green">Email changed successfully</b><br>';
              $this->session->mark_as_flash('action_status_report');
              show_page("publisher_dashboard/settings");
          }else{

              //show err message

             $_SESSION['action_status_report'] = '<b class="w3-text-red">uknown error occurred</b>';
              $this->session->mark_as_flash('action_status_report');
              show_page("publisher_dashboard/settings");
          }

       }else{
             $_SESSION["action_status_report"] = '<b class="w3-text-red">The Current Account
             Email you entered is incorrect</b><br>';
              $this->session->mark_as_flash('action_status_report');
              show_page("publisher_dashboard/settings");



       }

}

 }

//function ends here

}