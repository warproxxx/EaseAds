

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!--<h1 class="text-light"><a href="#header"><span>Easeads</span></a></h1>-->
        <a href="/"><img src="<?=base_url("assets/media/images/logo.png") ?>"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?=site_url() ?>">Home</a></li>
          <li><a href="<?php echo site_url("How_it_Works") ; ?>">About Us</a></li>
          </li>
          <li><a href="<?php echo site_url("Register"); ?>">Register</a></li>
          <li><a href="<?php echo site_url("Login?type=advertiser"); ?>">Advertisers</a></li>
          <li><a href="<?php echo site_url("Login?type=publisher"); ?>">Publisher</a></li>
         <!-- <li><a href="<?php echo site_url("about_us") ; ?>">About Us</a></li>-->
          
          <li><a href="<?php echo site_url("contact_us") ; ?>">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->


