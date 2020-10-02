<div class="w3-container w3-center">
<br><br>
  <b class="w3-serif w3-large w3-text-indigo">Create New Popunder</b><br>

<br>
<div class="w3-text-red w3-small"><?= validation_errors()."<br>".$error ?>

<?= form_open_multipart("advertiser_dashboard/submit_banner/") ?>

<div class="w3-container">
  <input type="hidden" name="cpa_name" value="<?php 
if(isset($campaign_name))
{
  echo $campaign_name;
}
  ?>">
  <div class="w3-third">
    
<span class="w3-serif w3-text-indigo w3-small">Campaign Name (Title for the campaign)</span><br>
<?php if(!empty($this->uri->segment(3)))
{
echo "<span class='w3-gray w3-padding w3-text-white'>";
echo $campaign_name."--";
echo "</span>";
} ?>
<input type="text" value='<?php

echo set_value('campaign_name');
 ?>' name="campaign_name" class="w3-padding w3-border w3-border-blue w3-round w3-margin" placeholder="Title for the campaign" required/>
<br><br>
 </div>
  <div class="w3-third">


<span class="w3-text-indigo w3-small">Campaign  Category (Target audiences according to their category):</span><br><br>

<?php
 echo '<div class="w3-card w3-border w3-border-indigo w3-center" style="max-width: 300px;height:250px; margin-left:200px; overflow: scroll;">  <span class="">';
 echo '<span class="">';
foreach ($categories as $category)
{


 echo '<input type="checkbox" class="w3-check" value="'.$category['name'].'" name="category[]"><span class="w3-text-grey">'.$category['name'].'</span> </span><br/>';
}
?>
  
     
</div>
</br>

  </div>


  <div class="w3-third">

<span class="w3-serif w3-text-indigo w3-small">Popunder Link (Campaign URL) (Start with http:// or https://.)</span>
<br>
<input type="text" value='<?php
if(!empty($this->uri->segment(3)))
{
echo $campaign_dest;
}else{
echo set_value('destination_link');
}

  ?>' name="destination_link" class="w3-padding w3-border w3-border-blue w3-round w3-margin" placeholder="http://example.com/landing_page" required <?php
  if(!empty($this->uri->segment(3)))
{
echo 'readonly';
}?>/>
<br><br>


  </div>
  </div>

  </div>
   <input type="hidden" name="campaign_type" value="popup" />

   <br><span class="w3-text-indigo">Ad Vertical</span><br>
<select name="vertical" class="w3-padding w3-border w3-border-blue">
    <option value="mainstream">Mainstream</option>
    <option value="adult"">Adult</option>

   <!-- <option value="720X90">720 X 90 (Banner Only)</option>
    <option value="160X600">160 X 600 (Banner Only)</option>-->
</select>
<br/>




<span class="w3-text-indigo w3-xlarge w3-serif">Targeting Options</span><br>

<div class="w3-small">You can leave these three empty. Then your campaign will be mark as GENERAL CAMPAIGN(Visible in all category)</div>

<div class="w3-container w3-center"> 
	     <i class="w3-text-green">Browser Targeting: (Target audiences according to Browsers) </i><br>      

<center>
<div style="width:60%" class="w3-container w3-card w3-padding-large w3-center">
    
 <input type="checkbox" class="w3-check" value="opera" name="browser[]"><span class="w3-label"> <i class="fa fa-opera w3-text-red"></i>Opera mini</span>
      <input type="checkbox" class="w3-check" value="chrome" name="browser[]"><span class="w3-label"> <i class="fa fa-chrome w3-text-yellow"></i>Google Chrome</span>

     <input type="checkbox" class="w3-check" value="firefox" name="browser[]"><span class="w3-label"> <i class="fa fa-firefox w3-text-blue"></i>Mozilla Firefox</span>

     <input type="checkbox" class="w3-check" value="safari" name="browser[]"><span class="w3-label"> <i class="fa fa-safari w3-text-indigo"></i>Safari Browser</span>

    <input type="checkbox" class="w3-check" value="uc" name="browser[]"><span class="w3-label"> <i class="fa fa-uc-browser w3-text-blue"></i>UC Browser/Uc web</span> 

    <input type="checkbox" class="w3-check" value="ie" name="browser[]"><span class="w3-label"> <i class="fa fa-internet-explorer w3-text-blue"></i>Internet Explorer </span>


</div>
</center>


</div><!--browser div end here --->
     <br>     
  <div class="w3-container">
     
     <i class="w3-text-green">Platform Targeting: (Target audiences according to devices) </i><br>
     
<center>
<div style="width:60%" class="w3-container w3-card w3-padding-large w3-center">
<input type="checkbox" class="w3-check" value="windows" name="platform[]"><span class="w3-label"> <i class="fa fa-desktop w3-text-blue-grey"></i>Desktop Windows</span>
<input type="checkbox" class="w3-check" value="linux" name="platform[]"><span class="w3-label"> <i class="fa fa-desktop w3-text-blue-grey"></i>Desktop Linux</span>
<input type="checkbox" class="w3-check" value="mac" name="platform[]"><span class="w3-label"> <i class="fa fa-desktop w3-text-blue-grey"></i>Desktop Mac</span>
<input type="checkbox" class="w3-check" value="mobile" name="platform[]"><span class="w3-label"> <i class="fa fa-mobile w3-text-blue-grey"></i> Feature Phone</span> 
<input type="checkbox" class="w3-check" value="android" name="platform[]"><span class="w3-label"> <i class="fa fa-android w3-text-green"></i>Android Mobile</span>
 <input type="checkbox" class="w3-check" value="ios" name="platform[]"><span class="w3-label"> <i class="fa fa-apple w3-text-blue"></i>Ios(iphone,ipad) </span> 
</div>

</center>
</div>
        
     
     <br>
  <!--   <div>
     <i class="w3-text-green">Category Targeting</i><br>
         
<center>
<div style="width:60%" class="w3-container w3-card w3-padding-large w3-center">
     <input type="checkbox" class="w3-check" value="advertising" name="tcategory[]"><span class="w3-label">Advertising</span>

 <input type="checkbox" class="w3-check" value="agriculture" name="tcategory[]"><span class="w3-label">Agriculture</span> 


 <input type="checkbox" class="w3-check" value="banking" name="tcategory[]"><span class="w3-label">Banking & Finance</span> 
<input type="checkbox" class="w3-check" value="Computers" name="tcategory[]"><span class="w3-label">Computers & Internet</span>

       <input type="checkbox" class="w3-check" value="e-commerce" name="tcategory[]"><span class="w3-label">E-commerce & Trading</span>
       <input type="checkbox" class="w3-check" value="education" name="tcategory[]"><span class="w3-label">Education & Learning</span> 
       <input type="checkbox" class="w3-check" value="entertainment" name="tcategory[]"><span class="w3-label">Entertainment & Social</span> 
<input type="checkbox" class="w3-check" value="food" name="tcategory[]"><span class="w3-label">Food & Nutrition</span>
<input type="checkbox" class="w3-check" value="gambling" name="tcategory[]"><span class="w3-label">Gambling & Betting</span>
 <input type="checkbox" class="w3-check" value="motoring" name="tcategory[]"><span class="w3-label">Motoring</span>
 <input type="checkbox" class="w3-check" value="marketing" name="tcategory[]"><span class="w3-label">Marketing & Affilate</span>

 <input type="checkbox" class="w3-check" value="manufacturing" name="tcategory[]"><span class="w3-label">Manufacturing & Industry</span>


 <input type="checkbox" class="w3-check" value="news" name="tcategory[]"><span class="w3-label">News & Media</span>


     <input type="checkbox" class="w3-check" value="sport" name="tcategory[]"><span class="w3-label">Sport</span>


     <input type="checkbox" class="w3-check" value="science" name="tcategory[]"><span class="w3-label">Science & Technology</span>

     <input type="checkbox" class="w3-check" value="product" name="tcategory[]"><span class="w3-label">Products & Services</span>
     <input type="checkbox" class="w3-check" value="politics" name="tcategory[]"><span class="w3-label">Politics</span>
     <input type="checkbox" class="w3-check" value="others" name="tcategory[]"><span class="w3-label">Others</span>

 
 



</div></center></div>-->

      


<style type="text/css">
    
#african-countries{

    width: 200px;
    height: 80%;

}

</style>
<br><br>
<center>
         <i class="w3-text-green">Country Targeting: (Target audiences according to Geos)</i><br>

<div style="overflow:scroll;height:150px" class="w3-container w3-label w3-border w3-cente w3-card" id="african-countries">
<input type="checkbox" name="tcountry[]"  value="AF">Afghanistan</input><br>
<input type="checkbox" name="tcountry[]"  value="AX">Åland Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="AL">Albania</input><br>
<input type="checkbox" name="tcountry[]"  value="DZ">Algeria</input><br>
<input type="checkbox" name="tcountry[]"  value="AS">American Samoa</input><br>
<input type="checkbox" name="tcountry[]"  value="AD">Andorra</input><br>
<input type="checkbox" name="tcountry[]"  value="AO">Angola</input><br>
<input type="checkbox" name="tcountry[]"  value="AI">Anguilla</input><br>
<input type="checkbox" name="tcountry[]"  value="AQ">Antarctica</input><br>
<input type="checkbox" name="tcountry[]"  value="AG">Antigua and Barbuda</input><br>
<input type="checkbox" name="tcountry[]"  value="AR">Argentina</input><br>
<input type="checkbox" name="tcountry[]"  value="AM">Armenia</input><br>
<input type="checkbox" name="tcountry[]"  value="AW">Aruba</input><br>
<input type="checkbox" name="tcountry[]"  value="AU">Australia</input><br>
<input type="checkbox" name="tcountry[]"  value="AT">Austria</input><br>
<input type="checkbox" name="tcountry[]"  value="AZ">Azerbaijan</input><br>
<input type="checkbox" name="tcountry[]"  value="BS">Bahamas</input><br>
<input type="checkbox" name="tcountry[]"  value="BH">Bahrain</input><br>
<input type="checkbox" name="tcountry[]"  value="BD">Bangladesh</input><br>
<input type="checkbox" name="tcountry[]"  value="BB">Barbados</input><br>
<input type="checkbox" name="tcountry[]"  value="BY">Belarus</input><br>
<input type="checkbox" name="tcountry[]"  value="BE">Belgium</input><br>
<input type="checkbox" name="tcountry[]"  value="BZ">Belize</input><br>
<input type="checkbox" name="tcountry[]"  value="BJ">Benin</input><br>
<input type="checkbox" name="tcountry[]"  value="BM">Bermuda</input><br>
<input type="checkbox" name="tcountry[]"  value="BT">Bhutan</input><br>
<input type="checkbox" name="tcountry[]"  value="BO">Bolivia, Plurinational State of</input><br>
<input type="checkbox" name="tcountry[]"  value="BQ">Bonaire, Sint Eustatius and Saba</input><br>
<input type="checkbox" name="tcountry[]"  value="BA">Bosnia and Herzegovina</input><br>
<input type="checkbox" name="tcountry[]"  value="BW">Botswana</input><br>
<input type="checkbox" name="tcountry[]"  value="BV">Bouvet Island</input><br>
<input type="checkbox" name="tcountry[]"  value="BR">Brazil</input><br>
<input type="checkbox" name="tcountry[]"  value="IO">British Indian Ocean Territory</input><br>
<input type="checkbox" name="tcountry[]"  value="BN">Brunei Darussalam</input><br>
<input type="checkbox" name="tcountry[]"  value="BG">Bulgaria</input><br>
<input type="checkbox" name="tcountry[]"  value="BF">Burkina Faso</input><br>
<input type="checkbox" name="tcountry[]"  value="BI">Burundi</input><br>
<input type="checkbox" name="tcountry[]"  value="KH">Cambodia</input><br>
<input type="checkbox" name="tcountry[]"  value="CM">Cameroon</input><br>
<input type="checkbox" name="tcountry[]"  value="CA">Canada</input><br>
<input type="checkbox" name="tcountry[]"  value="CV">Cape Verde</input><br>
<input type="checkbox" name="tcountry[]"  value="KY">Cayman Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="CF">Central African Republic</input><br>
<input type="checkbox" name="tcountry[]"  value="TD">Chad</input><br>
<input type="checkbox" name="tcountry[]"  value="CL">Chile</input><br>
<input type="checkbox" name="tcountry[]"  value="CN">China</input><br>
<input type="checkbox" name="tcountry[]"  value="CX">Christmas Island</input><br>
<input type="checkbox" name="tcountry[]"  value="CC">Cocos (Keeling) Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="CO">Colombia</input><br>
<input type="checkbox" name="tcountry[]"  value="KM">Comoros</input><br>
<input type="checkbox" name="tcountry[]"  value="CG">Congo</input><br>
<input type="checkbox" name="tcountry[]"  value="CD">Congo, the Democratic Republic of the</input><br>
<input type="checkbox" name="tcountry[]"  value="CK">Cook Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="CR">Costa Rica</input><br>
<input type="checkbox" name="tcountry[]"  value="CI">Côte d'Ivoire</input><br>
<input type="checkbox" name="tcountry[]"  value="HR">Croatia</input><br>
<input type="checkbox" name="tcountry[]"  value="CU">Cuba</input><br>
<input type="checkbox" name="tcountry[]"  value="CW">Curaçao</input><br>
<input type="checkbox" name="tcountry[]"  value="CY">Cyprus</input><br>
<input type="checkbox" name="tcountry[]"  value="CZ">Czech Republic</input><br>
<input type="checkbox" name="tcountry[]"  value="DK">Denmark</input><br>
<input type="checkbox" name="tcountry[]"  value="DJ">Djibouti</input><br>
<input type="checkbox" name="tcountry[]"  value="DM">Dominica</input><br>
<input type="checkbox" name="tcountry[]"  value="DO">Dominican Republic</input><br>
<input type="checkbox" name="tcountry[]"  value="EC">Ecuador</input><br>
<input type="checkbox" name="tcountry[]"  value="EG">Egypt</input><br>
<input type="checkbox" name="tcountry[]"  value="SV">El Salvador</input><br>
<input type="checkbox" name="tcountry[]"  value="GQ">Equatorial Guinea</input><br>
<input type="checkbox" name="tcountry[]"  value="ER">Eritrea</input><br>
<input type="checkbox" name="tcountry[]"  value="EE">Estonia</input><br>
<input type="checkbox" name="tcountry[]"  value="ET">Ethiopia</input><br>
<input type="checkbox" name="tcountry[]"  value="FK">Falkland Islands (Malvinas)</input><br>
<input type="checkbox" name="tcountry[]"  value="FO">Faroe Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="FJ">Fiji</input><br>
<input type="checkbox" name="tcountry[]"  value="FI">Finland</input><br>
<input type="checkbox" name="tcountry[]"  value="FR">France</input><br>
<input type="checkbox" name="tcountry[]"  value="GF">French Guiana</input><br>
<input type="checkbox" name="tcountry[]"  value="PF">French Polynesia</input><br>
<input type="checkbox" name="tcountry[]"  value="TF">French Southern Territories</input><br>
<input type="checkbox" name="tcountry[]"  value="GA">Gabon</input><br>
<input type="checkbox" name="tcountry[]"  value="GM">Gambia</input><br>
<input type="checkbox" name="tcountry[]"  value="GE">Georgia</input><br>
<input type="checkbox" name="tcountry[]"  value="DE">Germany</input><br>
<input type="checkbox" name="tcountry[]"  value="GH">Ghana</input><br>
<input type="checkbox" name="tcountry[]"  value="GI">Gibraltar</input><br>
<input type="checkbox" name="tcountry[]"  value="GR">Greece</input><br>
<input type="checkbox" name="tcountry[]"  value="GL">Greenland</input><br>
<input type="checkbox" name="tcountry[]"  value="GD">Grenada</input><br>
<input type="checkbox" name="tcountry[]"  value="GP">Guadeloupe</input><br>
<input type="checkbox" name="tcountry[]"  value="GU">Guam</input><br>
<input type="checkbox" name="tcountry[]"  value="GT">Guatemala</input><br>
<input type="checkbox" name="tcountry[]"  value="GG">Guernsey</input><br>
<input type="checkbox" name="tcountry[]"  value="GN">Guinea</input><br>
<input type="checkbox" name="tcountry[]"  value="GW">Guinea-Bissau</input><br>
<input type="checkbox" name="tcountry[]"  value="GY">Guyana</input><br>
<input type="checkbox" name="tcountry[]"  value="HT">Haiti</input><br>
<input type="checkbox" name="tcountry[]"  value="HM">Heard Island and McDonald Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="VA">Holy See (Vatican City State)</input><br>
<input type="checkbox" name="tcountry[]"  value="HN">Honduras</input><br>
<input type="checkbox" name="tcountry[]"  value="HK">Hong Kong</input><br>
<input type="checkbox" name="tcountry[]"  value="HU">Hungary</input><br>
<input type="checkbox" name="tcountry[]"  value="IS">Iceland</input><br>
<input type="checkbox" name="tcountry[]"  value="IN">India</input><br>
<input type="checkbox" name="tcountry[]"  value="ID">Indonesia</input><br>
<input type="checkbox" name="tcountry[]"  value="IR">Iran, Islamic Republic of</input><br>
<input type="checkbox" name="tcountry[]"  value="IQ">Iraq</input><br>
<input type="checkbox" name="tcountry[]"  value="IE">Ireland</input><br>
<input type="checkbox" name="tcountry[]"  value="IM">Isle of Man</input><br>
<input type="checkbox" name="tcountry[]"  value="IL">Israel</input><br>
<input type="checkbox" name="tcountry[]"  value="IT">Italy</input><br>
<input type="checkbox" name="tcountry[]"  value="JM">Jamaica</input><br>
<input type="checkbox" name="tcountry[]"  value="JP">Japan</input><br>
<input type="checkbox" name="tcountry[]"  value="JE">Jersey</input><br>
<input type="checkbox" name="tcountry[]"  value="JO">Jordan</input><br>
<input type="checkbox" name="tcountry[]"  value="KZ">Kazakhstan</input><br>
<input type="checkbox" name="tcountry[]"  value="KE">Kenya</input><br>
<input type="checkbox" name="tcountry[]"  value="KI">Kiribati</input><br>
<input type="checkbox" name="tcountry[]"  value="KP">Korea, Democratic People's Republic of</input><br>
<input type="checkbox" name="tcountry[]"  value="KR">Korea, Republic of</input><br>
<input type="checkbox" name="tcountry[]"  value="KW">Kuwait</input><br>
<input type="checkbox" name="tcountry[]"  value="KG">Kyrgyzstan</input><br>
<input type="checkbox" name="tcountry[]"  value="LA">Lao People's Democratic Republic</input><br>
<input type="checkbox" name="tcountry[]"  value="LV">Latvia</input><br>
<input type="checkbox" name="tcountry[]"  value="LB">Lebanon</input><br>
<input type="checkbox" name="tcountry[]"  value="LS">Lesotho</input><br>
<input type="checkbox" name="tcountry[]"  value="LR">Liberia</input><br>
<input type="checkbox" name="tcountry[]"  value="LY">Libya</input><br>
<input type="checkbox" name="tcountry[]"  value="LI">Liechtenstein</input><br>
<input type="checkbox" name="tcountry[]"  value="LT">Lithuania</input><br>
<input type="checkbox" name="tcountry[]"  value="LU">Luxembourg</input><br>
<input type="checkbox" name="tcountry[]"  value="MO">Macao</input><br>
<input type="checkbox" name="tcountry[]"  value="MK">Macedonia, the former Yugoslav Republic of</input><br>
<input type="checkbox" name="tcountry[]"  value="MG">Madagascar</input><br>
<input type="checkbox" name="tcountry[]"  value="MW">Malawi</input><br>
<input type="checkbox" name="tcountry[]"  value="MY">Malaysia</input><br>
<input type="checkbox" name="tcountry[]"  value="MV">Maldives</input><br>
<input type="checkbox" name="tcountry[]"  value="ML">Mali</input><br>
<input type="checkbox" name="tcountry[]"  value="MT">Malta</input><br>
<input type="checkbox" name="tcountry[]"  value="MH">Marshall Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="MQ">Martinique</input><br>
<input type="checkbox" name="tcountry[]"  value="MR">Mauritania</input><br>
<input type="checkbox" name="tcountry[]"  value="MU">Mauritius</input><br>
<input type="checkbox" name="tcountry[]"  value="YT">Mayotte</input><br>
<input type="checkbox" name="tcountry[]"  value="MX">Mexico</input><br>
<input type="checkbox" name="tcountry[]"  value="FM">Micronesia, Federated States of</input><br>
<input type="checkbox" name="tcountry[]"  value="MD">Moldova, Republic of</input><br>
<input type="checkbox" name="tcountry[]"  value="MC">Monaco</input><br>
<input type="checkbox" name="tcountry[]"  value="MN">Mongolia</input><br>
<input type="checkbox" name="tcountry[]"  value="ME">Montenegro</input><br>
<input type="checkbox" name="tcountry[]"  value="MS">Montserrat</input><br>
<input type="checkbox" name="tcountry[]"  value="MA">Morocco</input><br>
<input type="checkbox" name="tcountry[]"  value="MZ">Mozambique</input><br>
<input type="checkbox" name="tcountry[]"  value="MM">Myanmar</input><br>
<input type="checkbox" name="tcountry[]"  value="NA">Namibia</input><br>
<input type="checkbox" name="tcountry[]"  value="NR">Nauru</input><br>
<input type="checkbox" name="tcountry[]"  value="NP">Nepal</input><br>
<input type="checkbox" name="tcountry[]"  value="NL">Netherlands</input><br>
<input type="checkbox" name="tcountry[]"  value="NC">New Caledonia</input><br>
<input type="checkbox" name="tcountry[]"  value="NZ">New Zealand</input><br>
<input type="checkbox" name="tcountry[]"  value="NI">Nicaragua</input><br>
<input type="checkbox" name="tcountry[]"  value="NE">Niger</input><br>
<input type="checkbox" name="tcountry[]"  value="NG">Nigeria</input><br>
<input type="checkbox" name="tcountry[]"  value="NU">Niue</input><br>
<input type="checkbox" name="tcountry[]"  value="NF">Norfolk Island</input><br>
<input type="checkbox" name="tcountry[]"  value="MP">Northern Mariana Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="NO">Norway</input><br>
<input type="checkbox" name="tcountry[]"  value="OM">Oman</input><br>
<input type="checkbox" name="tcountry[]"  value="PK">Pakistan</input><br>
<input type="checkbox" name="tcountry[]"  value="PW">Palau</input><br>
<input type="checkbox" name="tcountry[]"  value="PS">Palestinian Territory, Occupied</input><br>
<input type="checkbox" name="tcountry[]"  value="PA">Panama</input><br>
<input type="checkbox" name="tcountry[]"  value="PG">Papua New Guinea</input><br>
<input type="checkbox" name="tcountry[]"  value="PY">Paraguay</input><br>
<input type="checkbox" name="tcountry[]"  value="PE">Peru</input><br>
<input type="checkbox" name="tcountry[]"  value="PH">Philippines</input><br>
<input type="checkbox" name="tcountry[]"  value="PN">Pitcairn</input><br>
<input type="checkbox" name="tcountry[]"  value="PL">Poland</input><br>
<input type="checkbox" name="tcountry[]"  value="PT">Portugal</input><br>
<input type="checkbox" name="tcountry[]"  value="PR">Puerto Rico</input><br>
<input type="checkbox" name="tcountry[]"  value="QA">Qatar</input><br>
<input type="checkbox" name="tcountry[]"  value="RE">Réunion</input><br>
<input type="checkbox" name="tcountry[]"  value="RO">Romania</input><br>
<input type="checkbox" name="tcountry[]"  value="RU">Russian Federation</input><br>
<input type="checkbox" name="tcountry[]"  value="RW">Rwanda</input><br>
<input type="checkbox" name="tcountry[]"  value="BL">Saint Barthélemy</input><br>
<input type="checkbox" name="tcountry[]"  value="SH">Saint Helena, Ascension and Tristan da Cunha</input><br>
<input type="checkbox" name="tcountry[]"  value="KN">Saint Kitts and Nevis</input><br>
<input type="checkbox" name="tcountry[]"  value="LC">Saint Lucia</input><br>
<input type="checkbox" name="tcountry[]"  value="MF">Saint Martin (French part)</input><br>
<input type="checkbox" name="tcountry[]"  value="PM">Saint Pierre and Miquelon</input><br>
<input type="checkbox" name="tcountry[]"  value="VC">Saint Vincent and the Grenadines</input><br>
<input type="checkbox" name="tcountry[]"  value="WS">Samoa</input><br>
<input type="checkbox" name="tcountry[]"  value="SM">San Marino</input><br>
<input type="checkbox" name="tcountry[]"  value="ST">Sao Tome and Principe</input><br>
<input type="checkbox" name="tcountry[]"  value="SA">Saudi Arabia</input><br>
<input type="checkbox" name="tcountry[]"  value="SN">Senegal</input><br>
<input type="checkbox" name="tcountry[]"  value="RS">Serbia</input><br>
<input type="checkbox" name="tcountry[]"  value="SC">Seychelles</input><br>
<input type="checkbox" name="tcountry[]"  value="SL">Sierra Leone</input><br>
<input type="checkbox" name="tcountry[]"  value="SG">Singapore</input><br>
<input type="checkbox" name="tcountry[]"  value="SX">Sint Maarten (Dutch part)</input><br>
<input type="checkbox" name="tcountry[]"  value="SK">Slovakia</input><br>
<input type="checkbox" name="tcountry[]"  value="SI">Slovenia</input><br>
<input type="checkbox" name="tcountry[]"  value="SB">Solomon Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="SO">Somalia</input><br>
<input type="checkbox" name="tcountry[]"  value="ZA">South Africa</input><br>
<input type="checkbox" name="tcountry[]"  value="GS">South Georgia and the South Sandwich Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="SS">South Sudan</input><br>
<input type="checkbox" name="tcountry[]"  value="ES">Spain</input><br>
<input type="checkbox" name="tcountry[]"  value="LK">Sri Lanka</input><br>
<input type="checkbox" name="tcountry[]"  value="SD">Sudan</input><br>
<input type="checkbox" name="tcountry[]"  value="SR">Suriname</input><br>
<input type="checkbox" name="tcountry[]"  value="SJ">Svalbard and Jan Mayen</input><br>
<input type="checkbox" name="tcountry[]"  value="SZ">Swaziland</input><br>
<input type="checkbox" name="tcountry[]"  value="SE">Sweden</input><br>
<input type="checkbox" name="tcountry[]"  value="CH">Switzerland</input><br>
<input type="checkbox" name="tcountry[]"  value="SY">Syrian Arab Republic</input><br>
<input type="checkbox" name="tcountry[]"  value="TW">Taiwan, Province of China</input><br>
<input type="checkbox" name="tcountry[]"  value="TJ">Tajikistan</input><br>
<input type="checkbox" name="tcountry[]"  value="TZ">Tanzania, United Republic of</input><br>
<input type="checkbox" name="tcountry[]"  value="TH">Thailand</input><br>
<input type="checkbox" name="tcountry[]"  value="TL">Timor-Leste</input><br>
<input type="checkbox" name="tcountry[]"  value="TG">Togo</input><br>
<input type="checkbox" name="tcountry[]"  value="TK">Tokelau</input><br>
<input type="checkbox" name="tcountry[]"  value="TO">Tonga</input><br>
<input type="checkbox" name="tcountry[]"  value="TT">Trinidad and Tobago</input><br>
<input type="checkbox" name="tcountry[]"  value="TN">Tunisia</input><br>
<input type="checkbox" name="tcountry[]"  value="TR">Turkey</input><br>
<input type="checkbox" name="tcountry[]"  value="TM">Turkmenistan</input><br>
<input type="checkbox" name="tcountry[]"  value="TC">Turks and Caicos Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="TV">Tuvalu</input><br>
<input type="checkbox" name="tcountry[]"  value="UG">Uganda</input><br>
<input type="checkbox" name="tcountry[]"  value="UA">Ukraine</input><br>
<input type="checkbox" name="tcountry[]"  value="AE">United Arab Emirates</input><br>
<input type="checkbox" name="tcountry[]"  value="GB">United Kingdom</input><br>
<input type="checkbox" name="tcountry[]"  value="US">United States</input><br>
<input type="checkbox" name="tcountry[]"  value="UM">United States Minor Outlying Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="UY">Uruguay</input><br>
<input type="checkbox" name="tcountry[]"  value="UZ">Uzbekistan</input><br>
<input type="checkbox" name="tcountry[]"  value="VU">Vanuatu</input><br>
<input type="checkbox" name="tcountry[]"  value="VE">Venezuela, Bolivarian Republic of</input><br>
<input type="checkbox" name="tcountry[]"  value="VN">Viet Nam</input><br>
<input type="checkbox" name="tcountry[]"  value="VG">Virgin Islands, British</input><br>
<input type="checkbox" name="tcountry[]"  value="VI">Virgin Islands, U.S.</input><br>
<input type="checkbox" name="tcountry[]"  value="WF">Wallis and Futuna</input><br>
<input type="checkbox" name="tcountry[]"  value="EH">Western Sahara</input><br>
<input type="checkbox" name="tcountry[]"  value="YE">Yemen</input><br>
<input type="checkbox" name="tcountry[]"  value="ZM">Zambia</input><br>
<input type="checkbox" name="tcountry[]"  value="ZW">Zimbabwe</input><br>
</div>                          
</center>     
<br/><br/>

<span class="w3-text-indigo w3-xlarge w3-serif">Payment & Budget</span><br>
<br/>
<div class="w3-half">
		<span class="w3-label w3-small">Budget ($)<sup><b class="w3-text-red w3-large">*</b></sup>:<br>
		This is the total budget for campaign. Minimum budget to start a campaign is $10</span><br/>

        <input class="w3-padding w3-border w3-border-indigo" type="number" min='<?=$general_details['minimum_budget'] ?>' placeholder="Budget" value="<?php echo set_value('budget'); ?>" name="budget"  required><br><br>

        <span class="w3-label w3-small">Daily Budget ($)<sup><b class="w3-text-red w3-large">*</b></sup>:<br>
        (This is the daily spending limit you want on the campaign) (minimum is $10) </span><br/>

        <input class="w3-padding w3-border w3-border-indigo" type="number" min='10' placeholder="Daily Budget" value="<?php echo set_value('daily_budget'); ?>" name="daily_budget"  required><br><br>


        <span class="w3-label w3-small">Starting Date:</span><br>

        <select class="w3-padding w3-border w3-border-indigo" name="sdate">
            <option value="now">Now</option>
            <option value="Next Sunday">Next Sunday (12.00 AM)</option>
            <option value="Next Monday">Next Monday (12.00 AM)</option>
            <option value="Next Tuesday">Next Tuesday (12.00 AM)</option>
            <option value="Next Wednesday">Next Wednesday (12.00 AM)</option>
            <option value="Next Thursday">Next Thursday (12.00 AM)</option>
            <option value="Next Friday">Next Friday (12.00 AM)</option>
            <option value="Next Saturday">Next Saturday (12.00 AM)</option>
        </select>
</div>

<div class="w3-half">
			<br>
<span class="w3-label">Billing Type:</span><br>
<select onchange="toggleInputDiv(this.value)" class="w3-padding" name="billing" id="billing">
	<?php
echo ('	<option value="cpm">CPM</option>');

	?>
	
</select><BR>
<br>

<div class="<?php
if(!empty($cpa_form_data))
{
	echo 'w3-hide';
}

	?>" id="ppc_div" class="w3-hide">
	<?php

if ($type == 'popup')
{
	echo('<span class="w3-label w3-small">Cost Per Mile-CPM</b></sup>:</span><br>');
	echo('<span class="w3-text-red">min:' . $general_details['currency_code'] . ' ' .$general_details['minimum_cpm'] . '</span><br>');
	echo('<input  class="w3-padding w3-border w3-border-indigo" type="number" step="0.001" min="'.$general_details['minimum_cpm'] .'" name="cpm"  /><br>');
}
else
{
  echo('<span class="w3-label w3-small">Cost Per Click-CPC</b></sup>:</span><br>');
  echo('<span class="w3-text-red">min:' . $general_details['currency_code'] . ' ' .$general_details['minimum_cpc'] . '</span><br>');
  echo('<input  class="w3-padding w3-border w3-border-indigo" type="number" step="0.001" min="'.$general_details['minimum_cpc'] .'" name="cpc"  /><br>');
}
?>

       
   </div>
		
		


	<div class="w3-show" id="cpm_div">		
<span class="w3-label w3-small">Campaign Bid:<sup><b class="w3-text-red w3-large">*</b></sup>:<br/>
(This is the amount you want to pay per 1000 impressions or views) min: <?=$general_details['currency_code']." 0.01" ?>

</span><br>

       <input  class="w3-padding w3-border w3-border-indigo" type="number" step="0.001" min="<?= $general_details['minimum_cpm'] ?>" placeholder="Campaign Bid" name="cpm"  /><br><br>
  </div>   
</div>


<span class="w3-label w3-small">Raw Traffic: <br/>(Number of times you want to show to the same IP in 24 hrs)</span><br>

<select class="w3-padding w3-border w3-border-indigo" name="raw_traffic">
	<option value="1">1</option>
	<option value="2" selected>2</option>
	<option value="3">3</option>
</select>

<br/><br/>
 <input type="submit" name="submit" value="Submit" class="w3-btn w3-indigo w3-large w3-round-xlarge w3-margin"/>
</form>

</div>
<br><!--
<div class="w3-container w3-center">
Need Help? Please read this page documentation <a class="w3-text-indigo" href="<?= site_url('blog/page-documentation-creating-new-campaign') ?>">HERE</a>

</div>-->
<br>

<script type="text/javascript">
	function toggleInputDiv(input_value) {
		var cpm_div = document.getElementById('cpm_div');
		var ppc_div = document.getElementById('ppc_div');

if (input_value == "ppc")
{//hide cpm 
 cpm_div.className = " w3-hide";
ppc_div.className = " w3-show";
}else if(input_value == "cpm"){

ppc_div.className = " w3-hide";
cpm_div.className = " w3-show";
	}
	else if (input_value == "cpc"){
cpm_div.className = " w3-hide";
ppc_div.className = " w3-show";
	}
	
	else{
cpm_div.className = " w3-show";
ppc_div.className = " w3-show";
	}
}


</script><!--
<div class="w3-container">
Need Help? Please read this page documentation <a class="w3-text-indigo" href="<?= site_url('blog/page-documentation-payment-and-budget') ?>">HERE</a>

</div>-->
<script>
document.addEventListener("DOMContentLoaded", function(){
    toggleInputDiv(document.getElementById('billing').value);
});
 </script>