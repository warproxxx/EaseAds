  <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<div id="page-wrapper"><!--added code-->
<div class="main-page signup-page"> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
				<h2 class="title1">Register Here</h2>
				<div class='w3-text-red w3-tiny'><?php echo validation_errors();
 if(isset($_SESSION['err_msg']))
 {

  echo $_SESSION['err_msg'];

 }
  ?></div>
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>
				<form action="#" method='POST' action='<?php echo
	site_url('page/first_next'); ?>'>
	
					<div class="sign-u">
								<input type="text" name="firstname" placeholder="First Name" value='<?= set_value('firstname') ?>'required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="text" name='lastname' placeholder="Last Name" value='<?= set_value('lastname') ?>'required="">
						<div class="clearfix"> </div>
					</div>
					

					<div class="sign-u">
								<input type="text" placeholder="Skype/IM"  name='phone' value='<?= set_value('phone') ?>' required="">
						<div class="clearfix"> </div>
					</div>
					
					<h6>Login Information :</h6>
					<div class="sign-u">
								<input type="email" placeholder="Email Address" name='email' value='<?= set_value('email') ?>'required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="password" placeholder="Password" name='password' value='<?= set_value('password') ?>' required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="password" placeholder="Confirm Password"  name='cpassword' value='<?= set_value('cpassword') ?>' required="">
						</div>
						<div class="clearfix"> </div>
					<div class="sub_home">
							<input type="submit" name='submit' value='Next'>
						<div class="clearfix"> </div>
					</div>
					<div class="registration">
						Already Registered.
				
						<?php
    echo "<a href='";
    echo site_url('login');
    echo "'>Login Here</a>";

         ?></span></div>
					</div>
				</form>
				</div>
      </div>
</div>
 
 
 
 <!--<div id="reg" class="w3-padding-jumbo w3-center">

    <form class='w3-center' method='POST' action='<?php echo
    site_url('page/first_next'); ?>'>
 <h4 class='w3-text-blue'><b>Registration</b></h4>

 <div class='w3-text-red w3-tiny'><?php echo validation_errors();
 if(isset($_SESSION['err_msg']))
 {

  echo $_SESSION['err_msg'];

 }
  ?></div>

<div class="w3-row">
   <div class='w3-half'>
       <i  style='margin-right:3%' class="fa fa-user
        w3-large w3-text-blue w3-center"><font color="red">*</font></i>
        <input class='w3-center w3-padding' type='text' name='firstname'
        value='<?= set_value('firstname') ?>' placeholder='First Name' required/>
   </div>


   <div class='w3-half'>
       <i  style='margin-right:3%' class="fa fa-user
        w3-large w3-text-blue w3-center"><font color="red">*</font></i>
        <input class='w3-center w3-padding' type='text' name='lastname'
          value='<?= set_value('lastname') ?>'  placeholder='Last Name' required/>
   </div>
</div>
   <br>


 <br>

<div class="w3-row">
 <div class='w3-half'>
     <i  style='margin-right:3%' class="fa fa-envelope
      w3-large w3-text-blue w3-center"><font color="red">*</font></i>
      <input class='w3-center w3-padding' type='email' name='email'
        value='<?= set_value('email') ?>'  placeholder='Email Address' required/>
 </div>


 <div class='w3-half'>
     <i  style='margin-right:3%' class="fa fa-skype
      w3-large w3-text-blue w3-center"><font color="red">*</font></i>
      <input class='w3-center w3-padding' name='phone'
       value='<?= set_value('phone') ?>' placeholder='Skype/IM' required/>
 </div>
</div>
 <br>
<div class="w3-row">
 <div class='w3-half'>
     <i  style='margin-right:3%' class="fa fa-unlock-alt
      w3-large w3-text-blue w3-center"><font color="red">*</font></i>
      <input id="password_box" class='w3-center w3-padding' type='password' name='password'
        value='<?= set_value('password') ?>'  placeholder='Password' required/>
 </div>


 <div class='w3-half'>
     <i  style='margin-right:3%' class="fa fa-unlock-alt
      w3-large w3-text-blue w3-center"><font color="red">*</font></i>
      <input id="password_box" class='w3-center w3-padding' type='password' name='cpassword'
        value='<?= set_value('cpassword') ?>' placeholder='Confirm Password' required/>
 </div></div>-->
<!--<input type="checkbox" id="show_p" name="show_pass" value="checked" class=""/>Show Password<br>
--><script type="text/javascript">

$('document').ready(function(){
var type = $('#password_box').attr('type');
$('#show_p').change(function(){
if (type == "password")
{

  $('#password_box').attr('type','text');

}
else
{

  $('#password_box').attr('type','password');

}
//alert('reed');

}
);

});

</script>



  <!--
  <input class='w3-center w3-button w3-blue w3-margin-top w3-margin-bottom w3-hover-white w3-hover-text-blue w3-border w3-border-blue'
  type='submit' name='submit' value='Next'/>
 


</form> </div>
<div class="w3-text-red w3-center">* All Fields Are Required<br>
Already have Account? <span class="w3-text-blue">--><?php
    echo "<a href='";
    echo site_url('login');
    echo "'>Login Here</a>";

         ?>
         </span>
        </div>

        