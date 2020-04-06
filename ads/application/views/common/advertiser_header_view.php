<!DOCTYPE html>
<html>
<title><?php echo $title; ?></title>
<meta charset="UTF-8">
<link rel="icon" href="<?php echo base_url('assets/media/images/favicon.png'); ?>" type="image/x-icon"/>

<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php
echo $keywords;
?>">


<meta property="og:image" content="<?php

base_url('assets/media/images/faviconsocial.png');


?>
" />

<meta property="og:description" content="<?php echo $description; ?>" />

<meta property="og:url"content="<?php echo current_url(); ?>" />

<meta property="og:title" content="<?php echo $title; ?>" />

<meta name="author" content="<?php echo $author;?>">

<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet"  href="<?php echo base_url('assets/cj/fontawesome-4.6.3.min.css'); ?>">

<link rel="stylesheet"  href="<?php echo base_url('assets/cj/w3mobile.css'); ?>">


<link rel="stylesheet"  href="<?php echo base_url('assets/cj/w3.css'); ?>">


<style>


@media screen and (min-width:400px){
#list_div {
display:block;
margin-bottom:4%;
width:70%;
float:center;
}

#to_hide_large {
display: none;

}


#cinput {
width:50%;/*
height:50%;*/



}
.flinklist {
display:inline;
margin-left:2%;

}

#shop_image {
height:8%;
width:60%;
align:center;
}

#long_div,#short_div {
width:100%;
align:center;
}


#price_id{
float:center;


}
#slider_image{
width:70%;
height:70%;


}

#shop_price{
margin-left:20%;


}

}




@media screen and (max-width:400px){

#price_id{
float:right;


}


#to_hide_small {
display: none;
}

.flinklist {
display:block;
text-decoration:none;
}
#shop_image {
height:8%;
width:60%;
align:center;
}


}







a {
text-decoration:none;
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

.dropbtn_red {
  background-color: #f44336;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropbtn_green {
  background-color: #009688;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #f44336;}

</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
    <a id="to_hide_large" class="w3-bar-item w3-button w3-right w3-padding-large w3-h2  4BYNMover-white w3-large w3-blue w3-text-white w3-hover-text-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu">Menu<i class="fa fa-bars w3-text-white w3-hover-text-black"></i></a>
    <a href="<?php echo site_url('advertiser_dashboard'); ?>" class="w3-bar-item w3-button w3-padding-large w3-white">Dashboard</a>
         <a href="<?php echo site_url("advertiser_dashboard/Affilate") ; ?>" class="w3-bar-item w3-button w3-padding-large">Refer & Earn</a>

    <a id="to_hide_small" href="<?php echo site_url("logout"); ?>" class="w3-bar-item w3-button to-hide-small w3-padding-large w3-hover-white">Logout</a>
    <!-- <a id="to_hide_small" href="<?php echo site_url("How_it_Works"); ?>" class="w3-bar-item w3-button to-hide-small w3-padding-large w3-hover-white">How it Works</a> -->
   <!-- <a id="to_hide_small" href="<?php echo site_url("Disclaimer"); ?>" class="w3-bar-item w3-button to-hide-small w3-padding-large w3-hover-white">Disclaimer</a>-->
     <!-- <a id="to_hide_small" href="<?php echo site_url("Blog"); ?>" class="w3-bar-item w3-button to-hide-small w3-padding-large w3-hover-white">Our Blog</a> -->
    <a id="to_hide_small" href="<?php echo site_url("contact_us") ; ?>" class="w3-bar-item w3-button to-hide-small w3-padding-large w3-hover-white">Contact Us</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
     <a href="<?php echo site_url("Logout"); ?>" class="w3-bar-item w3-button w3-padding-large">Logout</a>


     <a href="<?php echo site_url("advertiser_dashboard/Affilate") ; ?>" class="w3-bar-item w3-button w3-padding-large">Affilate</a>

     <a href="<?php echo site_url("How_it_Works") ; ?>" class="w3-bar-item w3-button w3-padding-large">How it Works</a>
         <!-- <a href="<?php echo site_url("Disclaimer") ; ?>" class="w3-bar-item w3-button w3-padding-large">Disclaimer</a>-->
    <a href="<?php echo site_url("Blog"); ?>" class="w3-bar-item w3-button w3-padding-large">Our Blog</a>
    <a href="<?php echo site_url("contact_us") ; ?>" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
  </div>
</div>



<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var n = document.getElementById("navDemo");
    if (n.className.indexOf("w3-show") == -1) {
        n.className += " w3-show";
    } else {
        n.className = n.className.replace(" w3-show", "");
    }
}
</script>
<noscript>Pls turn on JavaScript!</noscript>
