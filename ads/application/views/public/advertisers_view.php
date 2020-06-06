
  <main id="main">

   <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

     <div class="intro-img">
        <img src="<?=base_url("assets/media/images/intro-img.svg") ?>" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>Built For Ease<br/>
        A leading Digital Marketing agency!</h2>
        <div>
          <a href="<?= site_url('publishers')?>" class="btn-get-started scrollto">Publisher</a>
          <a href="<?= site_url('advertisers')?>" class="btn-services scrollto">Advertiser</a>
        </div>
      </div>


    </div>
  </section><!-- #intro -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
<div class="" id="Advertisers">
        <header class="section-header">
          <h3>Register Now</h3>
          <br>
          <p>Welcome to the world’s leading advertisement network.
</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
            Signup to our platform to start advertising and monetizing. 
            </p>

          

 <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-level-up"></i></div>
              <h4 class="title" method='POST' action='<?php echo
    site_url('Register'); ?>'>Advertisers</h4>
              <p class="description">We encourage advertisers to Register and create campaign to start receiving traffic</p>
            </div>

            <div class="w3-center w3-margin">
    <form class='w3-center' method='POST' action='<?php echo
    site_url('Register'); ?>'>
<button  class="w3-button w3-padding-large w3-round-jumbo w3-blue w3-margin w3-hover-white w3-hover-text-blue w3-border w3-border-blue"  name="accounttype" value="Advertiser">Create Advertiser Account</button><br>

</form>        
    </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-send"></i></div>
              <h4 class="title">Publishers</h4>
              <p class="description">We encourage publishers to create ad space to start sending traffic.</p>
            </div>

            <div class="w3-center w3-margin">
                  <form class='w3-center' method='POST' action='<?php echo
    site_url('Register'); ?>'>
   <button  class="w3-button w3-padding-large w3-round-jumbo w3-blue w3-margin w3-hover-white w3-hover-text-blue w3-border w3-border-blue"  name="accounttype" value="Publisher">Create Publisher Account</button><br>
      </form>        
      </div>
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="<?=base_url("assets/media/images/about-extra-2.svg") ?>" class="img-fluid" alt="">
          </div>
        </div>
       


</div>

      </div>
    </section><!-- #about -->
 <!--==========================
      Why Us div
    ============================-->
    <div id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="div-header w3-center w3-text-white">
          <h3>Ad Formats</h3>
          <br>
          <p>We've got a wide range of Ad format for you and your business, we have:</p>
        </header>
        <br>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-image"></i>
              <div class="card-body">
                <h5 class="card-title">Banner Campaign</h5>
                <p class="card-text" style="text-align:justify;">We provide advertisement on banners as well. We are working with only two sizes 
                of banners specifically. We are working on developing banners on tag based as well.
                 Please keep in touch for updates. We have huge volume of direct banners available daily.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-font"></i>
              <div class="card-body">
                <h5 class="card-title">Popups</h5>
                <p class="card-text" style="text-align:justify;">Promote your ads with pop under traffic. These types of ads are shown to the audiences when they are browsing through different sites.
                 It will open under the browser window on one click by any visitors to our publisher sites. We have our own trusted groups of publisher with whom we cooperate to provide better traffic at best available rates.
                 The volumes are pretty high for pop under traffic as we serve around billion impressions per month.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-edit"></i>
              <div class="card-body">
                <h5 class="card-title">Text Campaign</h5>
                <p class="card-text">which let you advertise your business/products online with only Text.</p>
              </div>
            </div>
          </div>

      

        </div>

       
      </div>
    </div>













    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Our Targeting</h3>
          <p></p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-user" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Interest Targeting</a></h4>
              <p class="description">With Interest Targeting,Your campaign is shown only to Audience who are likely to React to your Campaign. This is possible with our inteligent Algorithm   </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-flag" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Country Targeting</a></h4>
              <p class="description w3-padding">Our Targeting facilities includes Country targeting which let you choose audience who can see your campaign by country.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-laptop" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Device Targeting</a></h4>
              <p class="description">This let you target your audience by type of device they are using to surf the internet.option includes mobile ,desktop</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-android" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Platform Targeting</a></h4>
              <p class="description">This let you target your audience by type of platform or OS their device is made of.option includes android ,ios,windows etc.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Browser Targeing</a></h4>
              <p class="description">This let you target your audience by type of Browser they are using to surf the internet. .option includes chrome ,safari,opera etc.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-font" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Keyword Targeting</a></h4>
              <p class="description">This let you target your audience by presence of certain keywords on the site or blog they using.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        

      </div>
    </section><!-- #portfolio -->

    
  </main>