  <!-- main content start-->
  <div id="page-wrapper">
			<div class="main-page login-page ">
      <br>
    <br>
    <br>
    <br>
    <br>
    <br>
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
            <form action="#" method="post" action='<?php echo site_url('login'); ?>'>
            <div class='w3-text-red'><?php echo validation_errors();
 if(isset($_SESSION['err_msg']))
 {

  echo $_SESSION['err_msg'];

 }
  ?></div>
<div><?php if(isset($_SESSION['action_status_report']))
 {

  echo $_SESSION['action_status_report'];

 }
  ?></div>
							<input type="email" class="user" name="email" placeholder="Enter Your Email" required="">
              <input type="password" name="password" class="lock" placeholder="Password" required="">
              <span class="w3-text-blue w3-small">Account Type</span>
              <div class='w3-row'>
                 <i  style='margin-right:3%' class="fa fa-dash
                   w3-large w3-text-blue w3-center"></i>
                    <select name="accounttype" class="w3-padding">
                <option value="Advertiser" <?php if ($type == 'advertiser') echo('selected'); ?>>Advertiser</option>
                <option value="Publisher" <?php if ($type == 'publisher') echo('selected'); ?>>Publisher</option>
                  </select>
                </div><br>
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="<?=site_url('forget_password') ?>">Forget Password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="submit" value="Sign In">
							<div class="registration">
              
								Don't have an account ?
              </div>
              <?php
 echo "<a href='";
 echo site_url('register');
 echo "'>Create New Account Here</a>";
 ?></span></div>

						</form>
					</div>
				</div>
				
			</div>
		</div>
  
  
  <!--
  <div  id="login" class="w3-margin-top w3-padding-jumbo">

    <form class='w3-center w3-margin-top' method='POST' action='<?php echo site_url('login'); ?>'>
    <br>
    <br>
    <br>
    <br>
 <h4 class='w3-text-blue'><b>Sign In</b></h4>

 <div class='w3-text-red'><?php echo validation_errors();
 if(isset($_SESSION['err_msg']))
 {

  echo $_SESSION['err_msg'];

 }
  ?></div>
<div><?php if(isset($_SESSION['action_status_report']))
 {

  echo $_SESSION['action_status_report'];

 }
  ?></div>


 <div class='w3-row'>
     <i  style='margin-right:3%' class="fa fa-at
      w3-large w3-text-blue w3-center"></i>
      <input class='w3-center w3-padding' type='email' name='email' placeholder='Email'/>
 </div>

 <br>

 <div class='w3-row'>
     <i  style='margin-right:3%' class="fa fa-unlock-alt
      w3-large w3-text-blue w3-center"></i>
      <input class='w3-center w3-padding' type='password' name='password' placeholder='Password'/>
 </div>


<span class="w3-text-blue w3-small">Account Type</span>
   <div class='w3-row'>
       <i  style='margin-right:3%' class="fa fa-dash
        w3-large w3-text-blue w3-center"></i>
  <select name="accounttype" class="w3-padding">
          <option value="Advertiser" <?php if ($type == 'advertiser') echo('selected'); ?>>Advertiser</option>
          <option value="Publisher" <?php if ($type == 'publisher') echo('selected'); ?>>Publisher</option>
        </select>
   </div><br>


 <input class='w3-center w3-button w3-blue w3-margin-top w3-margin-bottom w3-hover-white w3-hover-text-blue w3-border w3-border-blue' type='submit' name='submit' value='Sign In'/>


</form>


 <center>
  <span><a class="w3-text-blue" href="<?=site_url('forget_password') ?>">Forget Password?</a> </span>
    <div class="w3-text- w3-small w3-margin-bottom w3-margin-bottom">Don't have account yet? <span class="w3-text-blue"><?php
 echo "<a href='";
 echo site_url('register');
 echo "'>Create New Account Here</a>";

      ?></span></div>
 </center>


</div>

