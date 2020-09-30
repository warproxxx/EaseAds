<?php

class Campaign_model extends CI_Model {


/***
 * Name:       Custch
 * Package:   campaign_model.php
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
/*
public function get_campaigns()
{

$this->db->select('ref_id, disp_link, img_link ,text_title ,tplatform ,tcategory,tbrowser,tcountry,targeting,category,user_id');
	$query = $this->db->get("adv_story");
	return $query->result_array();
}*/
public function get_campaign_view($conditions)
{
$query = $this->db->get_where('views',$conditions);
return $query->result_array();
}

public function get_campaign_click($conditions)
{
$query = $this->db->get_where('clicks',$conditions);
return $query->result_array();
}
public function get_campaign_by_ref_id($ref_id)
{

	$query = $this->db->get_where("adv_story",array("ref_id" => $ref_id));
	return $query->row_array();
}

public function insert_new_balance($campaign_new_balance,$ref_id)
{
	$this->db->update("adv_story", array("balance" => $campaign_new_balance),array("ref_id" => $ref_id));
}


public function update_campaign($ref_id,$new_details)
{
	$this->db->update("adv_story", $new_details, array("ref_id" => $ref_id));
}

public function get_campaign_by_category_text($category)
{
/*
later check for activation here
*/
$this->db->select('ref_id, disp_link ,dest_link , text_content,text_title ,tplatform ,tcategory,tbrowser,tcountry,targeting,category,user_id,per_view,per_click,balance');
$query = $this->db->get_where("adv_story",array("category" => $category ,"type" => "text","approval" => "true","status" =>"active"));/*
get conuntry at first using country tag
any ads mark as general will be automatically picked
--any ads with empty country targeting
*/
return $query->result_array();


}

public function get_campaign_by_category_popup($category)
{
/*
later check for activation here
*/
$this->db->select('ref_id, disp_link ,dest_link , text_content,text_title ,tplatform ,tcategory,tbrowser,tcountry,targeting,category,user_id,per_view,per_click,balance,billing,raw_traffic');
$query = $this->db->get_where("adv_story",array("category" => $category ,"type" => "popup","approval" => "true","status" =>"active"));/*
get conuntry at first using country tag
any ads mark as general will be automatically picked
--any ads with empty country targeting
*/
return $query->result_array();


}


public function get_campaign_by_ref($ref)
{
	$this->db->select('ref_id,dest_link,size,img_link ,tplatform ,tcategory,tbrowser,tcountry,targeting,category,user_id,per_view,per_click,balance,billing,raw_traffic');
	$res = $this->db->where('ref_id', $ref)->get('adv_story')->row();	
	return $res;
}

public function get_campaign_by_category_banner($category,$size_to_get)
{
	/*
	later check for activation here
	*/
	$this->db->select('ref_id,dest_link,size,img_link ,tplatform ,tcategory,tbrowser,tcountry,targeting,category,user_id,per_view,per_click,balance,billing,raw_traffic');
	$res = $this->db->where('size', $size_to_get)->where('type', 'banner')->where('approval','true')->where('status', 'active')->like('category', $category)->get('adv_story')->result_array();	
	return $res;

}

public function get_default_campaign($type)
{
	/*
	later check for activation here
	*/
	$this->db->select('ref_id,dest_link,size,img_link ,tplatform ,tcategory,tbrowser,tcountry,targeting,category,user_id,per_view,per_click,balance');
	$query = $this->db->get_where("adv_story",array("type" => $type, "user_id"=>0));
	return $query->result_array();


}

//reco = recommendation
public function get_campaigns_ref_id_for_reco($categories,$publisher_country)
{

//split array to string
	$sql_cat_string = "";
	for ($c = 0;$c < count($categories);$c++) {
		if ($c == 0) {
		$sql_cat_string = $sql_cat_string .''.' category="'.$categories[$c].'"';
		}else{
			//add OR 
	$sql_cat_string = $sql_cat_string .''.' OR category="'.$categories[$c].'"';

		}
	}

   $query = $this->db->query('SELECT ref_id,dest_link,text_title,tcategory,tbrowser,tcountry,targeting,category FROM adv_story WHERE (approval = "true" AND status= "active" AND type ="recommendation" AND ( '.$sql_cat_string.')) ;');

	/*
get country at first using country tag
any ads mark as general will be automatically picked
--any ads with empty country targeting
*/
$array_of_ref_id_to_return = [];

foreach ($query->result_array() as $item) {
if(empty($item['tcountry']))
	{
		$item['tcountry']= '[]';
	}
	if (empty(json_decode($item['tcountry'])) || in_array($publisher_country, json_decode($item['tcountry'])) )
	{
		//its either general or publisher qualified targeted advert ;insert to the returning array
		array_push($array_of_ref_id_to_return, $item['ref_id']);

	}
     
}
if(!empty($array_of_ref_id_to_return))
{
	return $array_of_ref_id_to_return;
}else{
	/*what to return if no qualified ads available by country targeting*/
	
}

}
public function get_campaign_by_category_article_style($category,$publisher_country)
{

/*
later check for activation here
*/
$this->db->select('ref_id,dest_link,text_title,disp_link,size,img_link ,tplatform ,tcategory,tbrowser,tcountry,targeting,category,user_id,per_view,per_click,balance');
	$query = $this->db->get_where("adv_story",array("category" => $category ,"type" => "banner_text","approval" => "true","status" =>"active"));/*
get conuntry at first using country tag
any ads mark as general will be automatically picked
--any ads with empty country targetting
*/
$array_to_return= [];
foreach ($query->result_array() as $item) {
	if(empty($item['tcountry']))
	{
		$item['tcountry']= '[]';
	}
	if (empty(json_decode($item['tcountry'])) || in_array($publisher_country, json_decode($item['tcountry'])) )
	{
		//its either general or publisher qualified targetted advert ;insert to the returning array
		array_push($array_to_return, $item);
	}
     
}
if(!empty($array_to_return))
{
	return $array_to_return;
}else{
	/*what to return if no qualified ads available by country targeting*/
	
}

}
public function insert_view($view_details)
{
$this->db->insert("views",$view_details);
}

public function insert_click($click_details)
{
$this->db->insert("clicks",$click_details);
}
public function get_campaign_by_category($category)
{
/*
later check for activation here
*/
$this->db->select('ref_id, disp_link ,dest_link , img_link ,text_title ,tplatform ,tcategory,tbrowser,tcountry,targeting,category,user_id,per_view,per_click');
	$query = $this->db->get_where("adv_story",array("category" => $category ,"approval" => "true","status" =>"active"));
	return $query->result_array();
}
public function get_space_by_ref_id($ref_id)
{

	$query = $this->db->get_where("pub_story",array("ref_id" => $ref_id,'status' => 'active'));
	return $query->row_array();
}
public function edit_campaign($data_array,$ref_id)
{
$this->db->update('adv_story',$data_array,array("ref_id" => $ref_id));
}

public function update_clicks($space_id, $ref_id)
{
	$q = "UPDATE adv_story
		  SET clicks = clicks + 1
		  WHERE ref_id='" . $ref_id . "'";
  
	$query = $this->db->query($q);
	  
	$q = "UPDATE pub_story
		  SET clicks = clicks + 1
		  WHERE ref_id='" . $space_id . "'";

	$query = $this->db->query($q);
}

public function update_views($space_id, $ref_id)
{
	$q = "UPDATE adv_story
		  SET views = views + 1
		  WHERE ref_id='" . $ref_id . "'";
  
	$query = $this->db->query($q);
	  
	$q = "UPDATE pub_story
		  SET views = views + 1
		  WHERE ref_id='" . $space_id . "'";

	$query = $this->db->query($q);
}

public function count_24_hr($space_id, $ip, $table)
{
	$today = strtotime(date("y-m-d"));
	$start_time = $today - 24;

	$q = "SELECT * FROM " . $table . " WHERE
		  ip='" . $ip . "' AND story_id='" . $space_id . "' AND time >= " . $start_time;
  
	$query = $this->db->query($q);
	
	return count($query->result_array());
}



public function delete_campaign($ref_id)
{
	$this->db->where('ref_id', $ref_id);
	$this->db->delete('adv_story');
}

public function edit_space($data_array,$ref_id)
{
$this->db->update('pub_story',$data_array,array("ref_id" => $ref_id));
}
}