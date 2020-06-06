<!DOCTYPE html>
<html>
<title><?php echo $title; ?></title>
<meta charset="UTF-8">
<link rel="icon" href="<?php echo base_url('assets/media/images/favicon.png'); ?>" type="image/x-icon"/>
<link href="<?php echo base_url('assets/media/images/favicon.png'); ?>" rel="apple-touch-icon">

<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php
echo $keywords;
?>">
<meta property="og:image" content="<?php

echo base_url('assets/media/images/faviconsocial.png');
?>
" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:url"content="<?php echo current_url(); ?>" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta name="author" content="<?php echo $author;?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="<?php echo base_url('assets/cj/fontawesome-4.6.3.min.css'); ?>"/>

<link rel="stylesheet"  href="<?php echo base_url('assets/cj/w3mobile.css'); ?>"/>


<link rel="stylesheet"  href="<?php echo base_url('assets/cj/w3.css'); ?>"/>

<link rel="stylesheet"  href="<?php echo base_url('assets/cj/w3mobile.css'); ?>"

    <!--apple 180X180-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File --> <!--added code-->
  <link href="<?php echo base_url('assets/cj/lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/cj/lib/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/cj/lib/animate/animate.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/cj/lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/cj/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/cj/lib/lightbox/css/lightbox.min.css'); ?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/cj/css/style.css'); ?>" rel="stylesheet">

  <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?php echo base_url('assets/css/style.css');?>" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts end added--> 

<style>

#intro {
  width: 100%;
  position: relative;
  background: url("<?php echo base_url('assets/media/images/intro-bg.png') ?>") center bottom no-repeat;
  background-size: cover;
  padding: 200px 0 120px 0;
}

@media screen and (min-width:400px){
#to_hide_large {
  display: none;
}
}




@media screen and (max-width:400px){

#to_hide_small {
  display: none;
}

}

a {
text-decoration:none;
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>
