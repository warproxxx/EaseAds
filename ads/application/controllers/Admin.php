<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function __construct()
{
    parent::__construct();

    $this->load->model(array('admin_model','blog_model','publisher_model',
    'campaign_model','advertiser_model','pages_model','user_model'));
    $this->load->helper(array('url','form_helper','blog_helper','page_helper'));
    $this->load->library(array('form_validation','session'));

 if ((!isset($this->session->admin_name)) ||(!isset($this->session->admin_logged_in)))
 {
   show_page("ch_admin");
 }
    $this->siteName = $this->advertiser_model->get_system_variable("site_name");
      $this->author = $this->advertiser_model->get_system_variable("author");
      $this->keywords = $this->advertiser_model->get_system_variable("keywords");
      $this->description= $this->advertiser_model->get_system_variable("description");
      $this->noindex = '<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">';
      $this->tagLine =$this->advertiser_model->get_system_variable("tagline");

}





//callback function
public function index() {



      $data["title"] =$this->siteName." | Admin Dashboard";
      $data["keywords"] = $this->keywords;
      $data["author"] = $this->author;
     $data["description"] = $this->description;

$data["noindex"] = $this->noindex;
$data['num_of_publishers_24'] = count($this->user_model->count_publishers_reg_at_time(86400));
$data['num_of_advertisers_24'] = count($this->user_model->count_advertisers_reg_at_time(86400));
$data['num_of_publishers_7d'] = count($this->user_model->count_publishers_reg_at_time(86400*7));
$data['num_of_advertisers_7d'] = count($this->user_model->count_advertisers_reg_at_time(86400*7));
$data['num_of_publishers_30d'] = count($this->user_model->count_publishers_reg_at_time(2592000));
$data['num_of_advertisers_30d'] = count($this->user_model->count_advertisers_reg_at_time(2592000));

//users online within a period of time
$data['num_of_advertisers_online_24'] = count($this->user_model->count_advertisers_online_at_time(86400));
$data['num_of_advertisers_online_30d'] = count($this->user_model->count_advertisers_online_at_time(2592000));
$data['num_of_publishers_online_24'] = count($this->user_model->count_publishers_online_at_time(86400));
$data['num_of_publishers_online_30d'] = count($this->user_model->count_publishers_online_at_time(2592000));
$data['no_spaces'] = count($this->user_model->get_no_spaces());
$data['no_campaigns'] = count($this->user_model->get_no_campaigns());



$data['num_of_spaces_24'] = count($this->user_model->count_spaces_at_time(86400));
$data['num_of_spaces_7d'] = count($this->user_model->count_spaces_at_time(86400 *7));
$data['num_of_spaces_30d'] = count($this->user_model->count_spaces_at_time(2592000));

$data['num_of_campaigns_24'] = count($this->user_model->count_campaigns_at_time(86400));
$data['num_of_campaigns_7d'] = count($this->user_model->count_campaigns_at_time(86400*7));
$data['num_of_campaigns_30d'] = count($this->user_model->count_campaigns_at_time(2592000));
//exchange rate naira
// $data['naira_rate'] = $this->publisher_model->get_naira_xrate();
//other block here
$data['num_of_views_24'] = count($this->admin_model->count_views_at_time(86400));
$data['num_of_views_7d'] = count($this->admin_model->count_views_at_time(86400 *7));
$data['num_of_views_30d'] = count($this->admin_model->count_views_at_time(2592000));

$data['num_of_clicks_24'] = count($this->admin_model->count_clicks_at_time(86400));
$data['num_of_clicks_7d'] = count($this->admin_model->count_clicks_at_time(86400*7));
$data['num_of_clicks_30d'] = count($this->admin_model->count_clicks_at_time(2592000));


$data['num_total_clicks'] = count($this->admin_model->count_total_clicks());
$data['num_total_views'] = count($this->admin_model->count_total_views());




//add pagination here later
$data['pending_campaigns'] = $this->admin_model->get_pending_campaigns();
$data['no_publishers'] = count($this->publisher_model->get_publishers());
	$data['no_advertisers'] = count($this->advertiser_model->get_advertisers());

$data['countries'] = $this->admin_model->get_supported_countries();
  $this->load->view('/admin/header_view',$data);
	$this->load->view('admin/sidebar_view',$data);
	$this->load->view('admin/first_view',$data);
	$this->load->view('admin/footer_view');




}
public function pending_account_profile($id= NULL)
{


$data['title'] =$this->siteName." | User Profile";
$data['description'] ="Admin Dashboard";

$data["noindex"] = $this->noindex;
$limit = NULL;
$data['user'] = $this->user_model->get_user_by_its_id($id,"publishers");


  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/pending_publisher_profile_view',$data);
  $this->load->view('admin/footer_view');

}
public function view_accounting_details_by_country()
{

  if (isset($_POST['submit'])) {

//users earning
$pending_array = $this->admin_model->get_users_earning('publisher',$this->input->post('country'));
$data['pending_earning'] = 0;
$data['country_details'] = $this->admin_model->get_country_details_by_select_value($this->input->post('country'));


for ($i=0; $i < count($pending_array) ; $i++) {

$data['pending_earning'] = $data['pending_earning'] + $pending_array[$i]['pending_bal'];


}





//users earning
$bal_array = $this->admin_model->get_users_earning('publisher',$this->input->post('country'));
$data['bal_earning'] = 0;


for ($i=0; $i < count($bal_array) ; $i++) {

$data['bal_earning'] = $data['bal_earning'] + $bal_array[$i]['account_bal'];

}
//users earning
$bal_array = $this->admin_model->get_users_earning('advertiser',$this->input->post('country'));
$data['adv_bal_earning'] = 0;


for ($i=0; $i < count($bal_array) ; $i++) {

$data['adv_bal_earning'] = $data['adv_bal_earning'] + $bal_array[$i]['account_bal'];


}


$data['title'] =$this->siteName." | Accounting By Countries";
$data['description'] ="Admin Dashboard";

$data["noindex"] = $this->noindex;


  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/view_accounting_details_view',$data);
  $this->load->view('admin/footer_view');


}


}
public function pending_publishers_list($offset = 0)
{
  
    $limit = 8;
      $this->load->library('pagination');

        $data['items'] = $this->user_model->get_pending_publishers($offset,$limit);




    $config['base_url'] = site_url("admin/pending_publishers_list");

  $config['total_rows'] = count($this->user_model->get_pending_publishers(null,null));
  //$config['total_rows'] = $this->db->count_all('pages');

    $config['per_page'] = $limit;

   //$config['uri_segment'] = 4;
  $config['first_tag_open'] = '<span class="w3-btn w3-blue w3-text-white">';
  $config['first_tag_close'] = '</span>';
  $config['last_tag_open'] = '<br><span class="w3-btn w3-blue w3-text-white">';
  $config['last_tag_close'] = '</span>';
  $config['first_link'] = 'First';

  $config['prev_link'] = 'Prev';
  $config['next_link'] = 'Next';
  $config['next_tag_open'] = '<span style="margin-left:20%" class="w3-btn w3-blue w3-text-white">';
  $config['next_tag_close'] = '</span><br>';
  $config['prev_tag_open'] = '<span style="" class="w3-btn w3-blue w3-text-white">';
  $config['prev_tag_close'] = '</span>';
  $config['last_link'] = 'Last';
  $config['display_pages'] = false;

       $this->pagination->initialize($config);
  $data['pagination'] = $this->pagination->create_links();

$data['title'] = "Pending Publishers List | Admin Area";

$this->load->view('/admin/header_view',$data);

      $this->load->view('admin/sidebar_view',$data);
      $this->load->view('admin/pending_userslist_view',$data);
      $this->load->view('admin/footer_view');



}

public function pending_websites_list($table_type = NULL,$id = NULL, $user_id = NULL, $offset = 0)
{


  if ($table_type != NULL)
  {
    if ($table_type == 'approve')
    {
      $str = 1;
      $this->admin_model->insert_notification($user_id, 'publisher', 'Your website has been approved');
    }
    elseif ($table_type == 'disapprove')
    {
      $str = -1;
      $this->admin_model->insert_notification($user_id, 'publisher', 'Your website has been disapproved');
    }

    $this->admin_model->update_single_website("publishers_websites",array("approved" => $str),$id);
    

  }

    $limit = 8;
      $this->load->library('pagination');

        $data['items'] = $this->user_model->get_pending_websites($offset,$limit);




    $config['base_url'] = site_url("admin/pending_websites_list");

  $config['total_rows'] = count($this->user_model->get_pending_websites(null,null));
  //$config['total_rows'] = $this->db->count_all('pages');

    $config['per_page'] = $limit;

   //$config['uri_segment'] = 4;
  $config['first_tag_open'] = '<span class="w3-btn w3-blue w3-text-white">';
  $config['first_tag_close'] = '</span>';
  $config['last_tag_open'] = '<br><span class="w3-btn w3-blue w3-text-white">';
  $config['last_tag_close'] = '</span>';
  $config['first_link'] = 'First';

  $config['prev_link'] = 'Prev';
  $config['next_link'] = 'Next';
  $config['next_tag_open'] = '<span style="margin-left:20%" class="w3-btn w3-blue w3-text-white">';
  $config['next_tag_close'] = '</span><br>';
  $config['prev_tag_open'] = '<span style="" class="w3-btn w3-blue w3-text-white">';
  $config['prev_tag_close'] = '</span>';
  $config['last_link'] = 'Last';
  $config['display_pages'] = false;

       $this->pagination->initialize($config);
  $data['pagination'] = $this->pagination->create_links();

$data['title'] = "Pending Websites List | Admin Area";

$this->load->view('/admin/header_view',$data);

      $this->load->view('admin/sidebar_view',$data);
      $this->load->view('admin/pending_websites_view',$data);
      $this->load->view('admin/footer_view');



}

public function send_email($detail)
{
  $name = $detail[0];
  $token = $detail[1];
  $address = $detail[2];

  $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.zoho.com',
    'smtp_port' => 465,
    'smtp_user' => 'admin@mayrasales.com',
    'smtp_pass' => '7Px!wHBwQgx%Tt',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1',
    'smtp_crypto' => 'ssl'
  );
  
  $this->load->library('email', $config);
  $this->email->set_newline("\r\n");

  $this->email->from('admin@mayrasales.com', 'Waterbot');
  $this->email->to($address); 

  $this->email->subject('Verify your registration at EaseAds');
  $this->email->message('Hello ' . $name . "<br/>Than you for registering with EaseAds! Click on the link below to confirm your registration https://easeads.com/confirm?token=" . $token . "&email=" . $email . "<br/>We look forward for a succesful parternship.<br/>Thank you,<br/>EaseAds Team");  

  $result = $this->email->send();

  echo("alert('" . $name . $token . $address . "');");
}

public function email_test()
{
  $this->send_email(array());
}



public function payment_requests($table_type = NULL,$user_id = NULL, $id=NULL, $amt=NULL, $method=NULL)
{


  if ($table_type != NULL)
  {
    if ($table_type == 'approve')
    {
      $str = "CONFIRMED";
      $user=$this->advertiser_model->get_advertiser_by_id($user_id);
      $previous_bal = $user['account_bal'];
      $new_bal = $amt+$previous_bal;
      $this->advertiser_model->credit_balance_with_id(array('account_bal' =>$new_bal ), $user_id);      
      $this->admin_model->insert_notification($user_id, 'advertiser', 'The payment request of '. $amt . 'has been approved');
    }
    elseif ($table_type == 'disapprove')
    {
      $str = "DENIED";
      $this->admin_model->insert_notification($user_id, 'advertiser', 'The payment request of '. $amt . 'has been denied');
    }

    $this->admin_model->update_single_website("payments",array("status" => $str),$id);

  }


  $data['items'] = $this->user_model->get_pending_payment_request();

  $data['title'] = "Pending Payment Requests | Admin Area";

  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);
  $this->load->view('admin/pending_requets_view',$data);
  $this->load->view('admin/footer_view');
}

public function transactions()
{
  $data['items'] = $this->admin_model->get_transactions();

  $data['title'] = "Transactions | Admin Area";

  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);
  $this->load->view('admin/transactions_view',$data);
  $this->load->view('admin/footer_view');
}

public function announcements($table_type = NULL,$id = NULL)
{

  if ($table_type == 'inactive')
  {
    $dat =array('active' => 0);
    $this->admin_model->update_user('announcements',$dat,$id);
  }
  else if ($table_type == 'active')
  {
    $dat =array('active' => 1);
    $this->admin_model->update_user('announcements',$dat,$id);
  }

  $form_data = $this->input->post();
  $title = $this->input->post("title");
  $body = $this->input->post("body");
  $receiver = $this->input->post("receiver");

  if ($title != "")
  {
        $array = array("title"=> $title, "message"=>$body, "receiver"=>$receiver, "active"=>1, "posted_date"=>$date = date('Y-m-d H:i:s'));
        $this->admin_model->add_announcement($array);
  }

  $data['title'] =$this->siteName." | Announcement";
  $data['description'] ="Admin Dashboard";
  $data['announcements'] = $this->admin_model->get_announcements();

  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/announcement_view.php',$data);
  $this->load->view('admin/footer_view');



}

public function edit_announcement($id)
{

  $title = $this->input->post("title");
  $body = $this->input->post("body");

  if ($title != "")
  {
        $array = array("title"=> $title, "message"=>$body);
        $this->admin_model->edit_announcement($array, $id);
  }

  $data['title'] =$this->siteName." | Edit Announcement";
  $data['description'] ="Admin Dashboard";
  $data['announcement'] = $this->admin_model->get_announcement($id);

  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/edit_announcement',$data);
  $this->load->view('admin/footer_view');



}

public function categories($table_type = NULL,$id = NULL)
{

  if ($table_type == 'delete')
  {
    $this->user_model->delete_category($id);
  }

  $form_data = $this->input->post();
  $category = $this->input->post("category");

  if ($category != "")
  {
        $this->user_model->add_category($category);
  }

  $data['title'] =$this->siteName." | Categories";
  $data['description'] ="Admin Dashboard";
  $data['user'] = $this->user_model->get_user_by_its_id(NULL,"publishers");
  $data['categories'] = $this->user_model->get_categories();

  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/categories_view.php',$data);
  $this->load->view('admin/footer_view');



}

public function publishers_list($offset = 0) {

  $website = $this->input->post('website');


  if ($website != "")
  {
    $reg = array(

      'firstname' =>  $this->input->post('firstname'),
      'lastname' =>  $this->input->post('lastname'),
      'password' =>  md5(md5($this->input->post('password'))),
      'phone' => $this->input->post('phone'),
      'email' => $this->input->post('email'),
      "account_status" => "active",
      "country" => $this->input->post('country'),
      "total_earned" => "0.00",
      "pending_bal" => "0.00",
      "account_bal" => "0.00",
      "referral_id" => NULL,
      "websites" => json_encode(array($this->input->post('website'))),
      'time' => time()
      
      );
      
    
    
      $this->user_model->custom_publisher($reg, $this->input->post('website'));

    }

  	$limit = 8;
  		$this->load->library('pagination');




        $data['items'] = $this->user_model->get_publishers($offset,$limit);




  	$config['base_url'] = site_url("admin/publishers_list");



  $config['total_rows'] = count($this->user_model->get_publishers(null,null));
  //$config['total_rows'] = $this->db->count_all('pages');

  	$config['per_page'] = $limit;

   //$config['uri_segment'] = 4;
  $config['first_tag_open'] = '<span class="w3-btn w3-blue w3-text-white">';
  $config['first_tag_close'] = '</span>';
  $config['last_tag_open'] = '<br><span class="w3-btn w3-blue w3-text-white">';
  $config['last_tag_close'] = '</span>';
  $config['first_link'] = 'First';



  $config['prev_link'] = 'Prev';
  $config['next_link'] = 'Next';
  $config['next_tag_open'] = '<span style="margin-left:20%" class="w3-btn w3-blue w3-text-white">';
  $config['next_tag_close'] = '</span><br>';
  $config['prev_tag_open'] = '<span style="" class="w3-btn w3-blue w3-text-white">';
  $config['prev_tag_close'] = '</span>';
  $config['last_link'] = 'Last';
  $config['display_pages'] = false;

$data["noindex"] = $this->noindex;

  	   $this->pagination->initialize($config);
  $data['pagination'] = $this->pagination->create_links();

$data['title'] = "Publishers List | Admin Area";

$this->load->view('/admin/header_view',$data);

  		$this->load->view('admin/sidebar_view',$data);

  		$this->load->view('admin/publishers_list_view',$data);
  		$this->load->view('admin/footer_view');



}



public function advertisers_list($offset = 0) {

  $firstname = $this->input->post('firstname');


  if ($firstname != "")
  {
    $reg = array(

      'firstname' =>  $this->input->post('firstname'),
      'lastname' =>  $this->input->post('lastname'),
      'password' =>  md5(md5($this->input->post('password'))),
      'phone' => $this->input->post('phone'),
      'email' => $this->input->post('email'),
      "account_status" => "active",
      "country" => $this->input->post('country'),
      "total_spent" => "0.00",
      "account_bal" => "0.00",
      "referral_id" => NULL,
      "websites" => json_encode(array($this->input->post('website'))),
      'time' => time()
      
      );
      
    
    
      $this->user_model->custom_advertiser($reg);

    }

    $limit = 8;
      $this->load->library('pagination');




        $data['items'] = $this->user_model->get_advertisers($offset,$limit);




    $config['base_url'] = site_url("admin/advertisers_list");



  $config['total_rows'] = count($this->user_model->get_advertisers(null,null));
  //$config['total_rows'] = $this->db->count_all('pages');

    $config['per_page'] = $limit;

   //$config['uri_segment'] = 4;
  $config['first_tag_open'] = '<span class="w3-btn w3-blue w3-text-white">';
  $config['first_tag_close'] = '</span>';
  $config['last_tag_open'] = '<br><span class="w3-btn w3-blue w3-text-white">';
  $config['last_tag_close'] = '</span>';
  $config['first_link'] = 'First';



  $config['prev_link'] = 'Prev';
  $config['next_link'] = 'Next';
  $config['next_tag_open'] = '<span style="margin-left:20%" class="w3-btn w3-blue w3-text-white">';
  $config['next_tag_close'] = '</span><br>';
  $config['prev_tag_open'] = '<span style="" class="w3-btn w3-blue w3-text-white">';
  $config['prev_tag_close'] = '</span>';
  $config['last_link'] = 'Last';
  $config['display_pages'] = false;

       $this->pagination->initialize($config);
  $data['pagination'] = $this->pagination->create_links();

$data["noindex"] = $this->noindex;

$data['title'] = "Advertisers List | Admin Area";


$this->load->view('/admin/header_view',$data);

      $this->load->view('admin/sidebar_view',$data);

      $this->load->view('admin/advertisers_list_view',$data);
      $this->load->view('admin/footer_view');



}



public function withdrawal()
{


  $data['withdrawls'] = $this->admin_model->get_withdrawal();

  $data['title'] =$this->siteName." | Admin Payment Page";
  $data['description'] = $this->description;
  $data["noindex"] = $this->noindex;
  $limit = NULL;
  // $data['payment_items'] = $this->user_model->get_payment_items($offset,$limit);




  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/admin_withdrawal_view',$data);
  $this->load->view('admin/footer_view');

}



public function admins($account_type = NULL,$id = NULL)
{

  if ($account_type == "remove_admin")
  {
    $this->admin_model->delete_user($id, 'team');
  }

  $username = $this->input->post("username");
  $firstname = $this->input->post("firstname");
  $lastname = $this->input->post("lastname");
  $email = $this->input->post("email");
  $password = $this->input->post("password");

  if ($username != "")
  {
        $array = array("firstname"=> $firstname, "lastname"=>$lastname, "username"=>$username, "perm"=>$username, "email"=>$email, "password"=> $password);
        $this->admin_model->add_admin($array);
  }

  $data['admins'] = $this->admin_model->get_admins();

  $data['title'] =$this->siteName." | Admin Management Page";
  $data['description'] = $this->description;
  $data["noindex"] = $this->noindex;
  $limit = NULL;
  // $data['payment_items'] = $this->user_model->get_payment_items($offset,$limit);

  


  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/admin_management_view',$data);
  $this->load->view('admin/footer_view');

}

public function payments($account_type = NULL,$id = NULL)
{

  if ($account_type == "remove_payment")
  {
    $this->admin_model->delete_user($id, 'manual_payment');
  }

  $payment_method = $this->input->post("payment_method");
  $message = $this->input->post("message");
  $values_used = $this->input->post("values_used");
  $deposit_1_name = $this->input->post("deposit_1_name");
  $deposit_1_value = $this->input->post("deposit_1_value");
  $deposit_2_name = $this->input->post("deposit_2_name");
  $deposit_2_value = $this->input->post("deposit_2_value");
  $deposit_3_name = $this->input->post("deposit_3_name");
  $deposit_3_value = $this->input->post("deposit_3_value");
  $deposit_4_name = $this->input->post("deposit_4_name");
  $deposit_4_value = $this->input->post("deposit_4_value");
  $deposit_5_name = $this->input->post("deposit_5_name");
  $deposit_5_value = $this->input->post("deposit_5_value");

  if ($payment_method != "")
  {
        $array = array("payment_method"=> $payment_method, "message"=>$message,"values_used"=>$values_used, 
                       "deposit_1_name"=>$deposit_1_name, "deposit_1_value"=>$deposit_1_value,
                       "deposit_2_name"=>$deposit_2_name, "deposit_2_value"=>$deposit_2_value,
                       "deposit_3_name"=>$deposit_3_name, "deposit_3_value"=>$deposit_3_value,
                       "deposit_4_name"=>$deposit_4_name, "deposit_4_value"=>$deposit_4_value,
                       "deposit_5_name"=>$deposit_5_name, "deposit_5_value"=>$deposit_5_value);

        $this->admin_model->add_payment($array);
  }

  $data['payments'] = $this->admin_model->get_payments();

  $data['title'] =$this->siteName." | Payments Management Page";
  $data['description'] = $this->description;
  $data["noindex"] = $this->noindex;
  $limit = NULL;

  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/payments_view',$data);
  $this->load->view('admin/footer_view');

}

public function size()
{
 
  $minimum_cpc = $this->input->post("minimum_cpc");
  $minimum_cpm = $this->input->post("minimum_cpm");
  $minimum_deposit = $this->input->post("minimum_deposit");
  $minimum_budget = $this->input->post("minimum_budget");
  $minimum_payout = $this->input->post("minimum_payout");
  $minimum_daily = $this->input->post("minimum_daily");

  if ($minimum_cpc != "")
  {
    $datab = array(
      "minimum_cpc" => $minimum_cpc,
      "minimum_cpm" => $minimum_cpm,
      "minimum_deposit" => $minimum_deposit,
      "minimum_payout" => $minimum_payout,
      "minimum_daily" => $minimum_daily,
      "minimum_budget" => $minimum_budget);

    $this->admin_model->update_defaults($datab);
  }

  $defaults = $this->admin_model->get_default_sizes();

  $data['minimum_cpc'] = $defaults['minimum_cpc'];
  $data['minimum_cpm'] = $defaults['minimum_cpm'];
  $data['minimum_deposit'] = $defaults['minimum_deposit'];
  $data['minimum_budget'] = $defaults['minimum_budget'];
  $data['minimum_payout'] = $defaults['minimum_payout'];
  $data['minimum_daily'] = $defaults['minimum_daily'];
  


  $data['title'] =$this->siteName." | Default Size Management";
  $data['description'] = $this->description;
  $data["noindex"] = $this->noindex;  

  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/default_size_view',$data);
  $this->load->view('admin/footer_view');

}


public function default()
{
 
  $submit = $this->input->post("submit");

  if ($submit == "Update Banner")
  {
    $config['upload_path'] = "assets/campaigns";
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = '1500';
  
    $this->load->library('upload', $config);
    $this->upload->do_upload('default_banner_file');

    $banner = $this->upload->data("file_name");
    
    if ($banner == "")
      $banner = $this->input->post("current_banner");
    
    $id = $this->input->post("default_banner_id");
    $dest_link = $this->input->post("default_banner_destination");

    if ($id == 0)
    {
      $ref_id =  substr(md5(time()), 12);
      $datab = array(
        "user_id" => 0,
        "clicks" => "0",
        "views" => "0",
        "name" => 'Default Banner',
        "size" => "300X250",
        "type" => "banner",
        "category" => "Admin",
        "disp_link" => NULL,
        "dest_link" => $dest_link,
        "text_content" => NULL,
        "text_title" => NULL,
        "img_link" => $banner,
        "ref_id" => $ref_id,
        "cpa_id" => NULL,
        "edit_status" => "complete",
        "status" => "active",
        "spent" => "0.00",
        "approval" => "true",
        "cr_level" => "1",
        "time" => time(),
        "is_default" => 1
        );
        #change to models
        $this->admin_model->insert_ad($datab);

    }
    else
    {
      $datab = array("dest_link" => $dest_link,
                     "img_link" => $banner);
      $this->admin_model->update_ad($datab, $id);
      
    }


  }
  else if ($submit == "Update Text")
  {
    $id = $this->input->post("default_text_id");
    $text_content = $this->input->post("default_text_text");
    $disp_link = $this->input->post("default_text_display");
    $dest_link = $this->input->post("default_text_destination");

    if ($id == 0)
    {
      $ref_id =  substr(md5(time()), 12);
      $datab = array(
        "user_id" => 0,
        "clicks" => "0",
        "views" => "0",
        "name" => 'Default Banner',
        "size" => "300X250",
        "type" => "text",
        "category" => "Admin",
        "disp_link" => $disp_link,
        "dest_link" => $dest_link,
        "text_content" => $text_content,
        "text_title" => NULL,
        "img_link" => NULL,
        "ref_id" => $ref_id,
        "cpa_id" => NULL,
        "edit_status" => "complete",
        "status" => "active",
        "spent" => "0.00",
        "approval" => "true",
        "cr_level" => "1",
        "time" => time(),
        "is_default" => 1
        );
        #change to models
        $this->admin_model->insert_ad($datab);

    }
    else
    {
      $datab = array("text_content" => $text_content,
                     "disp_link" => $disp_link,
                     "dest_link" => $dest_link);
      $this->admin_model->update_ad($datab, $id);
      
    }
  }
  else if ($submit == "Update Popup")
  { 
    $id = $this->input->post("default_popup_id");
    $dest_link = $this->input->post("default_popup_destination");

    if ($id == 0)
    {
      $ref_id =  substr(md5(time()), 12);
      $datab = array(
        "user_id" => 0,
        "clicks" => "0",
        "views" => "0",
        "name" => 'Default Banner',
        "size" => "300X250",
        "type" => "popup",
        "category" => "Admin",
        "disp_link" => NULL,
        "dest_link" => $dest_link,
        "text_content" => NULL,
        "text_title" => NULL,
        "img_link" => NULL,
        "ref_id" => $ref_id,
        "cpa_id" => NULL,
        "edit_status" => "complete",
        "status" => "active",
        "spent" => "0.00",
        "approval" => "true",
        "cr_level" => "1",
        "time" => time(),
        "is_default" => 1
        );
        #change to models
        $this->admin_model->insert_ad($datab);

    }
    else
    {
      $datab = array("dest_link" => $dest_link);
      $this->admin_model->update_ad($datab, $id);
      
    }

    
  }

  $defaults = $this->admin_model->get_default_campaigns();

  if (count($defaults) != 0)
  {
    foreach ($defaults as $default)
    {
      if ($default['type'] == "banner")
      {
        $data['default_banner_id'] = $default['id'];
        $data['default_banner_destination'] = $default['dest_link'];
        $data['default_banner_image'] = $default['img_link'];
      }
      else if ($default['type'] == "text")
      {
        $data['default_text_id'] = $default['id'];
        $data['default_text_text'] = $default['text_content'];
        $data['default_text_display'] = $default['disp_link'];
        $data['default_text_destination'] = $default['dest_link'];
      }
      else if ($default['type'] == "popup")
      {
        $data['default_popup_id'] = $default['id'];
        $data['default_popup_destination'] = $default['dest_link'];
      }

    }
  }
  #if not set, set to 0
  if (array_key_exists('default_banner_id', $data) == false)
  {
    $data['default_banner_id'] = 0;
    $data['default_banner_destination'] = "";
    $data['default_banner_image'] = "";
  }

  if (array_key_exists('default_text_id', $data) == false)
  {
    $data['default_text_id'] = 0;
    $data['default_text_text'] = "";
    $data['default_text_display'] = "";
    $data['default_text_destination'] = "";
  }

  if (array_key_exists('default_popup_id', $data) == false)
  {
    $data['default_popup_id'] = 0;
    $data['default_popup_destination'] = "";
  }


  $data['title'] =$this->siteName." | Default Ad Management";
  $data['description'] = $this->description;
  $data["noindex"] = $this->noindex;  
  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/default_ad_view',$data);
  $this->load->view('admin/footer_view');

}



  public function credit($table_type = NULL,$id = NULL)
{


#add to logs
$user = $this->user_model->get_user_by_its_id($id,$table_type);

$this->form_validation->set_rules('credit',"Amount","required");

if($this->form_validation->run())
{

//credit account




$user['account_bal'] = $user['account_bal'] + $this->input->post('credit');

//insert to db

if ($user['account_bal']  > 0)
{
  $dat =array('account_bal' => $user['account_bal']);
  $this->admin_model->update_user($table_type,$dat,$id);
  $_SESSION['action_status_report'] = "ACcount Credited $".$this->input->post('credit')." successfully";
  $this->session->mark_as_flash('action_status_report');


  $arr = array("user_id" => $id, "amount" => $this->input->post('credit'), "user_type" => $table_type, "method" => "Manual", "status" => "CONFIRMED", "payment_type" => "MANUAL", "message" => $this->input->post('message'), "time" => time());
  $this->advertiser_model->insert_payment_request($arr);
}
  
if($table_type =="advertisers")
{
show_page('admin/advertiser_profile_details/'.$id);

}else{
show_page('admin/publisher_profile_details/'.$id);
}
}
}






  public function disapprove_pending_publisher($id = NULL)
{

$user = $this->user_model->get_user_by_its_id($id,"publishers");

$this->admin_model->update_user("publishers",array("account_status" => "Disapproved"),$id);
$_SESSION['action_status_report'] = "<span class='w3-text-red'>Account Disapproved</span>";
$this->session->mark_as_flash('action_status_report');
$this->admin_model->delete_user($id,"publishers");

//send email here


$this->load->library('email');

//email start here
$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;

$this->email->initialize($config);


$this->email->from('support@easeads.com', 'System');
$this->email->to($user['email']);

$this->email->subject('easeads | Quality Advertising ');

$this->email->message('Unfortunately,we coudn"t accept Your website/Blog/App Please read our acceptable websites guidelines here /n '.site_url('documentation/pub_guidlines').'\n NOTE: You can always re-register whenever you think you"ve meet our basic Publisher requirement \n thank you');

$this->email->send();





show_page('admin/pending_publishers_list');
}

  public function approve_pending_publisher($id = NULL)
{

$user = $this->user_model->get_user_by_its_id($id,"publishers");


$this->admin_model->update_user("publishers",array("account_status" => "active"),$id);
$this->admin_model->update_websites("publishers_websites",array("approved" => 1),$id);

$_SESSION['action_status_report'] = "<span class='w3-text-red'>Account Approved</span>";

//send email here


$this->load->library('email');

//email start here
$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;

$this->email->initialize($config);


$this->email->from('support@easeads.com', 'System');
$this->email->to($user['email']);

$this->email->subject('easeads | Quality Advertising for Africa');
$this->email->message('Congratulations,Your easeads Publisher Account has been Approved \n You can login to your account using the link below '.site_url('login'));
$this->email->send();

$this->session->mark_as_flash('action_status_report');
show_page('admin/pending_publishers_list');
}


  public function debit($table_type,$id = NULL)
{

$user = $this->user_model->get_user_by_its_id($id,$table_type);

$this->form_validation->set_rules('debit',"Amount","required");

if($this->form_validation->run())
{

//credit account




$user['account_bal'] = $user['account_bal'] - $this->input->post('debit');

if ($user['account_bal']  < 0)
{
  $user['account_bal'] = 0;
  $_SESSION['action_status_report'] = "Account Balance set to 0";
}
else
{
  $_SESSION['action_status_report'] = "Account Debited ".$this->input->post('debit')." successfully";
}

$dat =array('account_bal' => $user['account_bal']);
$this->admin_model->update_user($table_type,$dat,$id);

$this->session->mark_as_flash('action_status_report');


$arr = array("user_id" => $id, "amount" => $this->input->post('debit') * -1, "user_type" => $table_type, "method" => "Manual", "status" => "CONFIRMED", "payment_type" => "MANUAL", "message" => $this->input->post('message'), "time" => time());
$this->advertiser_model->insert_payment_request($arr);



if($table_type =="advertisers")
{
show_page('admin/advertiser_profile_details/'.$id);

}else{
show_page('admin/publisher_profile_details/'.$id);
}
}

}

public function process_withdrawal($status, $id = NULL,$user_id)
{
  $user = $this->user_model->get_user_by_its_id($user_id,"publishers");
  //add to total withdrawn

  if ($status == "approve")
  {
    $new_e_bal = $user['total_earned'] + $user['pending_bal'];

    $this->user_model->edit_user_details(array(

    "total_earned" => $new_e_bal,
    "pending_bal" => 0.00

    ),$user_id,'publishers');


    //change withdrawal status to proccessed

    $this->admin_model->edit_withdrawal_single(array(
    "approval" => "approved",
    "status" => "processed",
    "message" => $_POST['message']
    ),$id);

      //update neccessary details including history

      $this->admin_model->insert_new_history(array(
    "user_id" => $user_id,
    "action" => "w_process",
    'time' => time(),
    "details" => "Your Withdrawal Request Had been Processed because" . $_POST['message'],
    "account_type" => "publisher"
    ),$user_id);




    $_SESSION['action_status_report'] ="<span class='w3-text-green'>processed successfully</span>";
    $this->session->mark_as_flash('action_status_report');
      show_page('/admin/withdrawal');
  }
  else if ($status == "deny")
  {
    $new_balance = $user['account_bal'] + $user['pending_bal'];

    $this->user_model->edit_user_details(array(

    "account_bal" => $new_balance,
    "pending_bal" => 0.00

    ),$user_id,'publishers');


    //change withdrawal status to proccessed

    $this->admin_model->edit_withdrawal_single(array(
    "approval" => "denied",
    "status" => "denied",
    "message" => $_POST['message']
    ),$id);

      //update neccessary details including history

      $this->admin_model->insert_new_history(array(
    "user_id" => $user_id,
    "action" => "w_process",
    'time' => time(),
    "details" => "Your Withdrawal Request Had been Denied because" . $_POST['message'],
    "account_type" => "publisher"
    ),$user_id);




    $_SESSION['action_status_report'] ="<span class='w3-text-green'>denied successfully</span>";
    $this->session->mark_as_flash('action_status_report');
      show_page('/admin/withdrawal');
  }

}


public function email($table_type,$id = NULL)
{




$data['title'] =$this->siteName." | Send Email to user";
$data['description'] ="Admin Dashboard";

$data["noindex"] = $this->noindex;
$limit = NULL;


$this->form_validation->set_rules('title','
  Message Title', 'required');

$this->form_validation->set_rules('contents','
  Message Contents', 'required');





if(!$this->form_validation->run())
{
  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/send_email_view',$data);
  $this->load->view('admin/footer_view');
}else{


$user = $this->user_model->get_user_by_its_id($this->uri->segment(4),$this->uri->segment(3));
$theemail = $user['email'];
  //db


//send email here

$this->load->library('email');

//email start here
$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;

$this->email->initialize($config);


$this->email->from('support@easeads.com.ng', 'System');
$this->email->to($theemail);

$this->email->subject('easeads | '.$this->input->post('title'));
$this->email->message($this->input->post('contents'));

$this->email->send();



  //sucesspage
    $_SESSION['action_status_report'] ='<span class="w3-text-green">The
     Email  has been sent successfully</span>';
    $this->session->mark_as_flash('action_status_report');
    show_page("admin/send_msg/".$this->uri->segment(3));








}



}

public function view_campaign_details($ref_id = NULL)
{




      $data["title"] =$this->siteName." | Admin Dashboard";
      $data["keywords"] = $this->keywords;
      $data["author"] = $this->author;
     $data["description"] = $this->description;

$data["noindex"] = $this->noindex;
$data['campaign'] = $this->admin_model->get_campaign_by_ref_id($ref_id);


//get country details by user's country

$data['general_details'] = $this->advertiser_model->get_general_details();



$data["count_campaigns"] = $this->advertiser_model->count_advertisers_campaigns();
$data["count_cpa"] = $this->advertiser_model->count_advertisers_cpa();

$data['campaign_item'] = $this->advertiser_model->get_campaign_ref_id($ref_id);
$data['today_views'] = $this->advertiser_model->get_campaign_views($ref_id,strtotime(date("y-m-d")));
$data['today_clicks'] = $this->advertiser_model->get_campaign_clicks($ref_id,strtotime(date("y-m-d")));
$data['country_click_details'] = $this->advertiser_model->country_click_by_story_id($ref_id);


$data['yesterday_views'] = $this->advertiser_model->get_campaign_at_time_views($ref_id,strtotime(date("y-m-d")),24)['total_views'];
$data['two_days_ago_views'] = $this->advertiser_model->get_campaign_at_time_views($ref_id,(strtotime(date("y-m-d"))-(24*60*60)),48)['total_views'];
$data['three_days_ago_views'] = $this->advertiser_model->get_campaign_at_time_views($ref_id,(strtotime(date("y-m-d"))-(48*60*60)),72)['total_views'];
$data['four_days_ago_views'] = $this->advertiser_model->get_campaign_at_time_views($ref_id,(strtotime(date("y-m-d"))-(72*60*60)),96)['total_views'];

$data['yesterday_clicks'] = $this->advertiser_model->get_campaign_at_time_clicks($ref_id,strtotime(date("y-m-d")),24)['total_clicks'];
$data['two_days_ago_clicks'] = $this->advertiser_model->get_campaign_at_time_clicks($ref_id,(strtotime(date("y-m-d"))-(24*60*60)),48)['total_clicks'];
$data['three_days_ago_clicks'] = $this->advertiser_model->get_campaign_at_time_clicks($ref_id,(strtotime(date("y-m-d"))-(48*60*60)),72)['total_clicks'];
$data['four_days_ago_clicks'] = $this->advertiser_model->get_campaign_at_time_clicks($ref_id,(strtotime(date("y-m-d"))-(72*60*60)),96)['total_clicks'];

$data['campaign_item']['clicks'] = $this->advertiser_model->get_campaign_at_all_time_clicks($ref_id);
$data['campaign_item']['views'] = $this->advertiser_model->get_campaign_at_all_time_views($ref_id);

 $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/campaign_details_view',$data);
  $this->load->view('admin/footer_view');
}




public function view_space_details($ref_id = NULL)
{




      $data["title"] =$this->siteName." | Admin Dashboard";
      $data["keywords"] = $this->keywords;
      $data["author"] = $this->author;
     $data["description"] = $this->description;

$data["noindex"] = $this->noindex;
$data['space'] = $this->admin_model->get_space_by_ref_id($ref_id);

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

 $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/space_details_view',$data);
  $this->load->view('admin/footer_view');
}



public function campaign_action($action,$ref_id,$user_id="")
{
if($action == "approve")
{
//approve here
$this->campaign_model->edit_campaign(array('approval' => "true","status" => "active"),$ref_id);
$this->admin_model->insert_notification($user_id, 'advertiser', 'Your website has been approved');

}elseif($action == "disapprove")
{//disapprove


  $this->campaign_model->edit_campaign(array('approval' => "false","status" => "inactive"),$ref_id);
//credit advertiser back its balance
  $campaign = $this->admin_model->get_campaign_by_ref_id($ref_id);
  $advertiser = $this->advertiser_model->get_advertiser_by_its_id($campaign['user_id']);
  $advertiser_new_balance = $advertiser['account_bal'] + $campaign['balance'];

  $this->user_model->edit_user_details(array("account_bal" => $advertiser_new_balance),$campaign['user_id'],"advertisers");
  $this->admin_model->insert_notification($user_id, 'advertiser', 'Your website has been disapproved');


}elseif($action == "pause")
{//pause
  $this->campaign_model->edit_campaign(array('status' => "inactive"),$ref_id);

}elseif($action == "start")
{
//start again
    $this->campaign_model->edit_campaign(array('status' => "active"),$ref_id);


}

$_SESSION['action_status_report'] ="<span class='w3-text-green'>Campaign ".$action." successfully</span>";
$this->session->mark_as_flash("action_status_report");
show_page('admin/view_campaign_details/'.$ref_id);

}



public function space_action($action,$ref_id)
{
if($action == "pause")
{//pause
  $this->campaign_model->edit_space(array('status' => "inactive"),$ref_id);

}elseif($action == "start")
{
//start again
    $this->campaign_model->edit_space(array('status' => "active"),$ref_id);


}

$_SESSION['action_status_report'] ="<span class='w3-text-green'>Space ".$action." successfully</span>";
$this->session->mark_as_flash("action_status_report");
show_page('admin/view_space_details/'.$ref_id);

}

public function login_to_user_account($account_type = NULL,$id = NULL)
{
if($account_type == "advertiser")
  {

$_SESSION["id"] = $id;
 $_SESSION["accounttype"] ="Advertiser";
 $_SESSION['account_status'] = $this->user_model->get_user_by_its_id($id,"publishers")['account_status'];
$_SESSION["logged_in"] = true;

show_page("advertiser_dashboard");

  }else{

$_SESSION["id"] = $id;
 $_SESSION["accounttype"] ="Publisher";
  $_SESSION['account_status'] = $this->user_model->get_user_by_its_id($id,"advertisers")['account_status'];

$_SESSION["logged_in"] = true;

show_page("publisher_dashboard");


  }

}

public function suspend($table_type = NULL,$id = NULL)
{

$new_user_details = array('account_status' => "suspended" );

$this->admin_model->update_user($table_type,$new_user_details,$id);
$_SESSION['action_status_report'] = "<span class='w3-text-green'>ACcount
Suspended successfully</span>";
$this->session->mark_as_flash('action_status_report');

if($table_type == "advertisers")
{
$slug = "admin/advertiser_profile_details/".$id;
}else{
$slug = "admin/publisher_profile_details/".$id;

}
show_page($slug);


}



public function resume($table_type = NULL,$id = NULL)
{

$new_user_details = array('account_status' => "active" );

$this->admin_model->update_user($table_type,$new_user_details,$id);
$_SESSION['action_status_report'] = "<span class='w3-text-green'>ACcount
Resumed/Reactivated successfully</span>";
$this->session->mark_as_flash('action_status_report');

if($table_type == "advertisers")
{
$slug = "admin/advertiser_profile_details/".$id;
}else{
$slug = "admin/publisher_profile_details/".$id;

}
show_page($slug);


}



  public function publisher_profile_details($id = NULL)
  {

$data['title'] =$this->siteName." | Publisher Profile";
$data['description'] ="Admin Dashboard";

$data["noindex"] = $this->noindex;
$limit = NULL;
$data['user'] = $this->user_model->get_user_by_its_id($id,"publishers");


  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/publisher_profile_view',$data);
  $this->load->view('admin/footer_view');

}



  public function advertiser_profile_details($id = NULL)
  {

$data['title'] =$this->siteName." | Advertiser Profile";
$data['description'] ="Admin Dashboard";

$data["noindex"] = $this->noindex;
$limit = NULL;
$data['user'] = $this->user_model->get_user_by_its_id($id,"advertisers");


  $this->load->view('/admin/header_view',$data);

  $this->load->view('admin/sidebar_view',$data);

  $this->load->view('admin/advertiser_profile_view',$data);
  $this->load->view('admin/footer_view');

}



  public function search_users($offset = NULL)
  {

  //    $limit = 10;
      $limit = 8;

    $data['items']= $this->admin_model->search_users($limit,$offset);
      $this->load->library('pagination');

    $config['base_url'] = site_url("admin/search_users");

$config['total_rows'] = count($this->admin_model->search_users(NULL,NULL));
    $config['per_page'] = $limit;

   //$config['uri_segment'] = 4;
  $config['first_tag_open'] = '<span class="w3-btn w3-blue w3-text-white">';
  $config['first_tag_close'] = '</span>';
  $config['last_tag_open'] = '<br><span class="w3-btn w3-blue w3-text-white">';
  $config['last_tag_close'] = '</span>';
  $config['first_link'] = 'First';

  $config['prev_link'] = 'Prev';
  $config['next_link'] = 'Next';
  $config['next_tag_open'] = '<span style="margin-left:20%" class="w3-btn w3-blue w3-text-white">';
  $config['next_tag_close'] = '</span><br>';
  $config['prev_tag_open'] = '<span style="" class="w3-btn w3-blue w3-text-white">';
  $config['prev_tag_close'] = '</span>';
  $config['last_link'] = 'Last';
  $config['display_pages'] = false;

       $this->pagination->initialize($config);
  $data['pagination'] = $this->pagination->create_links();







      $this->load->view('/admin/header_view',$data);

      $this->load->view('admin/sidebar_view',$data);

              $this->load->view('admin/user_search_view',$data);
      $this->load->view('admin/footer_view');





  }

public function Campaigns()
{




    $data['campaigns']= $this->admin_model->get_campaigns();

    $config['base_url'] = site_url("admin/Campaigns");





        //check login for admin here later

      $data["title"] =$this->siteName." | Admin Dashboard";
      $data["keywords"] = $this->keywords;
      $data["author"] = $this->author;
     $data["description"] = $this->description;

$data["noindex"] = $this->noindex;
      $this->load->view('/admin/header_view',$data);

      $this->load->view('admin/sidebar_view',$data);

      $this->load->view('admin/campaigns_view',$data);
      $this->load->view('admin/footer_view');

}

public function site_wise()
{

  $data['spaces']= $this->admin_model->get_site_wise();
   


  //check login for admin here later

$data["title"] =$this->siteName." | Admin Dashboard";
$data["keywords"] = $this->keywords;
$data["author"] = $this->author;
$data["description"] = $this->description;

$data["noindex"] = $this->noindex;
$this->load->view('/admin/header_view',$data);

$this->load->view('admin/sidebar_view',$data);

        $this->load->view('admin/sites_view',$data);
$this->load->view('admin/footer_view');

}


public function spaces()
{


    $data['spaces']= $this->admin_model->get_spaces();
   


        //check login for admin here later

      $data["title"] =$this->siteName." | Admin Dashboard";
      $data["keywords"] = $this->keywords;
      $data["author"] = $this->author;
     $data["description"] = $this->description;

$data["noindex"] = $this->noindex;
      $this->load->view('/admin/header_view',$data);

      $this->load->view('admin/sidebar_view',$data);

              $this->load->view('admin/spaces_view',$data);
      $this->load->view('admin/footer_view');

}

  public function messages($offset=0)
  {







  //    $limit = 10;
      $limit = 8;


    $data['items']= $this->admin_model->messages($limit,$offset);
      $this->load->library('pagination');

    $config['base_url'] = site_url("admin/messages");



  $config['total_rows'] = $this->db->count_all('cmessages');

    $config['per_page'] = $limit;

   //$config['uri_segment'] = 4;
  $config['first_tag_open'] = '<span class="w3-btn w3-blue w3-text-white">';
  $config['first_tag_close'] = '</span>';
  $config['last_tag_open'] = '<br><span class="w3-btn w3-blue w3-text-white">';
  $config['last_tag_close'] = '</span>';
  $config['first_link'] = 'First';



  $config['prev_link'] = 'Prev';
  $config['next_link'] = 'Next';
  $config['next_tag_open'] = '<span style="margin-left:20%" class="w3-btn w3-blue w3-text-white">';
  $config['next_tag_close'] = '</span><br>';
  $config['prev_tag_open'] = '<span style="" class="w3-btn w3-blue w3-text-white">';
  $config['prev_tag_close'] = '</span>';
  $config['last_link'] = 'Last';
  $config['display_pages'] = false;

       $this->pagination->initialize($config);
  $data['pagination'] = $this->pagination->create_links();
 //check login for admin here later

      $this->load->view('/admin/header_view',$data);

      $this->load->view('admin/sidebar_view',$data);

              $this->load->view('admin/messages_view',$data);
      $this->load->view('admin/footer_view');



  }
  public function site_settings(){

if (!isset($_POST['submit'])) {
 
$data['title'] =$this->siteName." | Site Settings";
$data['description'] ="Admin Dashboard";

$data["noindex"] = $this->noindex;

$data['site_name']= $this->siteName;
$data['site_keywords']=$this->keywords;
$data['site_author']=$this->author;
$data['site_tagline']=$this->tagLine;
$data['site_descriptions']= $this->description;
  $this->load->view('/admin/header_view',$data);
  $this->load->view('admin/sidebar_view',$data);
  $this->load->view('admin/site_settings_view',$data);
  $this->load->view('admin/footer_view');
}else{
//submit btn is clicked
    if ($this->admin_model->edit_site_details()){
      
$_SESSION['action_status_report']="<span class='w3-text-green'>Changes Saved</span>";
    $this->session->mark_as_flash("action_status_report");


    }else{
    $_SESSION['action_status_report']="<span class='w3-text-red'>Unknown Error Occurred</span>";
    $this->session->mark_as_flash("action_status_report");

    }

    show_page("admin/site_settings");
}


  }


  public function view_message($id = null)
  {



          $data['item'] = $this->admin_model->get_message($id);



  		$this->load->view('/admin/header_view',$data);

  		$this->load->view('admin/sidebar_view',$data);

  						$this->load->view('admin/message_view',$data);
  		$this->load->view('admin/footer_view');






  }

}
