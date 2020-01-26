<div  class="w3-container w3-center">
    <span class="w3-text-indigo w3-xlarge w3-serif">Targeting Options</span><br>

    <a href="<?=site_url("advertiser_dashboard/skip_targeting/".$this->uri->segment(3)) ?>" class="w3-btn w3-indigo">Skip This</a><br>
    <div class="w3-small">By skipping your Campaign will be mark as GENERAL CAMPAIGN(Visible in all category)</div>

<?= form_open("advertiser_dashboard/campaign_target_action/".$this->uri->segment(3)) ?>
<div class="w3-container w3-center"> 
	     <i class="w3-text-green">Browser Targeting </i><br>      

<center>
<div style="width:60%" class="w3-container w3-card w3-padding-large w3-center">
    
 <input type="checkbox" class="w3-check" value="opera" name="browser[]"><span class="w3-label"> <i class="fa fa-opera w3-text-red"></i>Opera mini</span>
      <input type="checkbox" class="w3-check" value="chrome" name="browser[]"><span class="w3-label"> <i class="fa fa-chrome w3-text-yellow"></i>Google Chrome</span>

     <input type="checkbox" class="w3-check" value="firefox" name="browser[]"><span class="w3-label"> <i class="fa fa-firefox w3-text-blue"></i>Mozilla Firefox</span>

     <input type="checkbox" class="w3-check" value="sefari" name="browser[]"><span class="w3-label"> <i class="fa fa-safari w3-text-indigo"></i>Safari Browser</span>

    <input type="checkbox" class="w3-check" value="uc" name="browser[]"><span class="w3-label"> <i class="fa fa-uc-browser w3-text-blue"></i>UC Browser/Uc web</span> 

    <input type="checkbox" class="w3-check" value="ie" name="browser[]"><span class="w3-label"> <i class="fa fa-internet-explorer w3-text-blue"></i>Internet Explorer </span>


</div>
</center>


</div><!--browser div end here --->
     <br>     
  <div class="w3-container">
     
     <i class="w3-text-green">Platform Targeting </i><br>
     
<center>
<div style="width:60%" class="w3-container w3-card w3-padding-large w3-center">
<input type="checkbox" class="w3-check" value="desktop" name="platform[]"><span class="w3-label"> <i class="fa fa-desktop w3-text-blue-grey"></i>Desktop</span>
<input type="checkbox" class="w3-check" value="mobile" name="platform[]"><span class="w3-label"> <i class="fa fa-mobile w3-text-blue-grey"></i> Feature Phone</span> 
<input type="checkbox" class="w3-check" value="android" name="platform[]"><span class="w3-label"> <i class="fa fa-android w3-text-green"></i>Android Mobile</span>
 <input type="checkbox" class="w3-check" value="ios" name="platform[]"><span class="w3-label"> <i class="fa fa-apple w3-text-blue"></i>Ios(iphone,ipad) </span> 
 <input type="checkbox" class="w3-check" value="windows" name="platform[]"><span class="w3-label"> <i class="fa fa-windows w3-text-blue"></i>Windows Mobile</span> 
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
         <i class="w3-text-green">Country Targeting</i><br>

<div style="overflow:scroll;height:150px" class="w3-container w3-label w3-border w3-cente w3-card" id="african-countries">
<input type="checkbox" name="tcountry[]"  value="afghanistan">Afghanistan</input><br>
<input type="checkbox" name="tcountry[]"  value="albania">Albania</input><br>
<input type="checkbox" name="tcountry[]"  value="algeria">Algeria</input><br>
<input type="checkbox" name="tcountry[]"  value="american samoa">American Samoa</input><br>
<input type="checkbox" name="tcountry[]"  value="andorra">Andorra</input><br>
<input type="checkbox" name="tcountry[]"  value="angola">Angola</input><br>
<input type="checkbox" name="tcountry[]"  value="anguilla">Anguilla</input><br>
<input type="checkbox" name="tcountry[]"  value="antarctica">Antarctica</input><br>
<input type="checkbox" name="tcountry[]"  value="antigua and barbuda">Antigua and Barbuda</input><br>
<input type="checkbox" name="tcountry[]"  value="argentina">Argentina</input><br>
<input type="checkbox" name="tcountry[]"  value="armenia">Armenia</input><br>
<input type="checkbox" name="tcountry[]"  value="aruba">Aruba</input><br>
<input type="checkbox" name="tcountry[]"  value="australia">Australia</input><br>
<input type="checkbox" name="tcountry[]"  value="austria">Austria</input><br>
<input type="checkbox" name="tcountry[]"  value="azerbaijan">Azerbaijan</input><br>
<input type="checkbox" name="tcountry[]"  value="bahamas">Bahamas</input><br>
<input type="checkbox" name="tcountry[]"  value="bahrain">Bahrain</input><br>
<input type="checkbox" name="tcountry[]"  value="bangladesh">Bangladesh</input><br>
<input type="checkbox" name="tcountry[]"  value="barbados">Barbados</input><br>
<input type="checkbox" name="tcountry[]"  value="belarus">Belarus</input><br>
<input type="checkbox" name="tcountry[]"  value="belgium">Belgium</input><br>
<input type="checkbox" name="tcountry[]"  value="belize">Belize</input><br>
<input type="checkbox" name="tcountry[]"  value="benin">Benin</input><br>
<input type="checkbox" name="tcountry[]"  value="bermuda">Bermuda</input><br>
<input type="checkbox" name="tcountry[]"  value="bhutan">Bhutan</input><br>
<input type="checkbox" name="tcountry[]"  value="bolivia">Bolivia</input><br>
<input type="checkbox" name="tcountry[]"  value="bosnia and herzegovina">Bosnia and Herzegovina</input><br>
<input type="checkbox" name="tcountry[]"  value="botswana">Botswana</input><br>
<input type="checkbox" name="tcountry[]"  value="bouvet island">Bouvet Island</input><br>
<input type="checkbox" name="tcountry[]"  value="brazil">Brazil</input><br>
<input type="checkbox" name="tcountry[]"  value="british antarctic territory">British Antarctic Territory</input><br>
<input type="checkbox" name="tcountry[]"  value="british indian ocean territory">British Indian Ocean Territory</input><br>
<input type="checkbox" name="tcountry[]"  value="british virgin islands">British Virgin Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="brunei">Brunei</input><br>
<input type="checkbox" name="tcountry[]"  value="bulgaria">Bulgaria</input><br>
<input type="checkbox" name="tcountry[]"  value="burkina faso">Burkina Faso</input><br>
<input type="checkbox" name="tcountry[]"  value="burundi">Burundi</input><br>
<input type="checkbox" name="tcountry[]"  value="cambodia">Cambodia</input><br>
<input type="checkbox" name="tcountry[]"  value="cameroon">Cameroon</input><br>
<input type="checkbox" name="tcountry[]"  value="canada">Canada</input><br>
<input type="checkbox" name="tcountry[]"  value="canton and enderbury islands">Canton and Enderbury Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="cape verde">Cape Verde</input><br>
<input type="checkbox" name="tcountry[]"  value="cayman islands">Cayman Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="central african republic">Central African Republic</input><br>
<input type="checkbox" name="tcountry[]"  value="chad">Chad</input><br>
<input type="checkbox" name="tcountry[]"  value="chile">Chile</input><br>
<input type="checkbox" name="tcountry[]"  value="china">China</input><br>
<input type="checkbox" name="tcountry[]"  value="christmas island">Christmas Island</input><br>
<input type="checkbox" name="tcountry[]"  value="cocos [keeling] islands">Cocos [Keeling] Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="colombia">Colombia</input><br>
<input type="checkbox" name="tcountry[]"  value="comoros">Comoros</input><br>
<input type="checkbox" name="tcountry[]"  value="congo - brazzaville">Congo - Brazzaville</input><br>
<input type="checkbox" name="tcountry[]"  value="congo - kinshasa">Congo - Kinshasa</input><br>
<input type="checkbox" name="tcountry[]"  value="cook islands">Cook Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="costa rica">Costa Rica</input><br>
<input type="checkbox" name="tcountry[]"  value="croatia">Croatia</input><br>
<input type="checkbox" name="tcountry[]"  value="cuba">Cuba</input><br>
<input type="checkbox" name="tcountry[]"  value="cyprus">Cyprus</input><br>
<input type="checkbox" name="tcountry[]"  value="czech republic">Czech Republic</input><br>
<input type="checkbox" name="tcountry[]"  value="côte d’ivoire">Côte d’Ivoire</input><br>
<input type="checkbox" name="tcountry[]"  value="denmark">Denmark</input><br>
<input type="checkbox" name="tcountry[]"  value="djibouti">Djibouti</input><br>
<input type="checkbox" name="tcountry[]"  value="dominica">Dominica</input><br>
<input type="checkbox" name="tcountry[]"  value="dominican republic">Dominican Republic</input><br>
<input type="checkbox" name="tcountry[]"  value="dronning maud land">Dronning Maud Land</input><br>
<input type="checkbox" name="tcountry[]"  value="east germany">East Germany</input><br>
<input type="checkbox" name="tcountry[]"  value="ecuador">Ecuador</input><br>
<input type="checkbox" name="tcountry[]"  value="egypt">Egypt</input><br>
<input type="checkbox" name="tcountry[]"  value="el salvador">El Salvador</input><br>
<input type="checkbox" name="tcountry[]"  value="equatorial guinea">Equatorial Guinea</input><br>
<input type="checkbox" name="tcountry[]"  value="eritrea">Eritrea</input><br>
<input type="checkbox" name="tcountry[]"  value="estonia">Estonia</input><br>
<input type="checkbox" name="tcountry[]"  value="ethiopia">Ethiopia</input><br>
<input type="checkbox" name="tcountry[]"  value="falkland islands">Falkland Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="faroe islands">Faroe Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="fiji">Fiji</input><br>
<input type="checkbox" name="tcountry[]"  value="finland">Finland</input><br>
<input type="checkbox" name="tcountry[]"  value="france">France</input><br>
<input type="checkbox" name="tcountry[]"  value="french guiana">French Guiana</input><br>
<input type="checkbox" name="tcountry[]"  value="french polynesia">French Polynesia</input><br>
<input type="checkbox" name="tcountry[]"  value="french southern territories">French Southern Territories</input><br>
<input type="checkbox" name="tcountry[]"  value="french southern and antarctic territories">French Southern and Antarctic Territories</input><br>
<input type="checkbox" name="tcountry[]"  value="gabon">Gabon</input><br>
<input type="checkbox" name="tcountry[]"  value="gambia">Gambia</input><br>
<input type="checkbox" name="tcountry[]"  value="georgia">Georgia</input><br>
<input type="checkbox" name="tcountry[]"  value="germany">Germany</input><br>
<input type="checkbox" name="tcountry[]"  value="ghana">Ghana</input><br>
<input type="checkbox" name="tcountry[]"  value="gibraltar">Gibraltar</input><br>
<input type="checkbox" name="tcountry[]"  value="greece">Greece</input><br>
<input type="checkbox" name="tcountry[]"  value="greenland">Greenland</input><br>
<input type="checkbox" name="tcountry[]"  value="grenada">Grenada</input><br>
<input type="checkbox" name="tcountry[]"  value="guadeloupe">Guadeloupe</input><br>
<input type="checkbox" name="tcountry[]"  value="guam">Guam</input><br>
<input type="checkbox" name="tcountry[]"  value="guatemala">Guatemala</input><br>
<input type="checkbox" name="tcountry[]"  value="guernsey">Guernsey</input><br>
<input type="checkbox" name="tcountry[]"  value="guinea">Guinea</input><br>
<input type="checkbox" name="tcountry[]"  value="guinea-bissau">Guinea-Bissau</input><br>
<input type="checkbox" name="tcountry[]"  value="guyana">Guyana</input><br>
<input type="checkbox" name="tcountry[]"  value="haiti">Haiti</input><br>
<input type="checkbox" name="tcountry[]"  value="heard island and mcdonald islands">Heard Island and McDonald Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="honduras">Honduras</input><br>
<input type="checkbox" name="tcountry[]"  value="hong kong sar china">Hong Kong SAR China</input><br>
<input type="checkbox" name="tcountry[]"  value="hungary">Hungary</input><br>
<input type="checkbox" name="tcountry[]"  value="iceland">Iceland</input><br>
<input type="checkbox" name="tcountry[]"  value="india">India</input><br>
<input type="checkbox" name="tcountry[]"  value="indonesia">Indonesia</input><br>
<input type="checkbox" name="tcountry[]"  value="iran">Iran</input><br>
<input type="checkbox" name="tcountry[]"  value="iraq">Iraq</input><br>
<input type="checkbox" name="tcountry[]"  value="ireland">Ireland</input><br>
<input type="checkbox" name="tcountry[]"  value="isle of man">Isle of Man</input><br>
<input type="checkbox" name="tcountry[]"  value="israel">Israel</input><br>
<input type="checkbox" name="tcountry[]"  value="italy">Italy</input><br>
<input type="checkbox" name="tcountry[]"  value="jamaica">Jamaica</input><br>
<input type="checkbox" name="tcountry[]"  value="japan">Japan</input><br>
<input type="checkbox" name="tcountry[]"  value="jersey">Jersey</input><br>
<input type="checkbox" name="tcountry[]"  value="johnston island">Johnston Island</input><br>
<input type="checkbox" name="tcountry[]"  value="jordan">Jordan</input><br>
<input type="checkbox" name="tcountry[]"  value="kazakhstan">Kazakhstan</input><br>
<input type="checkbox" name="tcountry[]"  value="kenya">Kenya</input><br>
<input type="checkbox" name="tcountry[]"  value="kiribati">Kiribati</input><br>
<input type="checkbox" name="tcountry[]"  value="kuwait">Kuwait</input><br>
<input type="checkbox" name="tcountry[]"  value="kyrgyzstan">Kyrgyzstan</input><br>
<input type="checkbox" name="tcountry[]"  value="laos">Laos</input><br>
<input type="checkbox" name="tcountry[]"  value="latvia">Latvia</input><br>
<input type="checkbox" name="tcountry[]"  value="lebanon">Lebanon</input><br>
<input type="checkbox" name="tcountry[]"  value="lesotho">Lesotho</input><br>
<input type="checkbox" name="tcountry[]"  value="liberia">Liberia</input><br>
<input type="checkbox" name="tcountry[]"  value="libya">Libya</input><br>
<input type="checkbox" name="tcountry[]"  value="liechtenstein">Liechtenstein</input><br>
<input type="checkbox" name="tcountry[]"  value="lithuania">Lithuania</input><br>
<input type="checkbox" name="tcountry[]"  value="luxembourg">Luxembourg</input><br>
<input type="checkbox" name="tcountry[]"  value="macau sar china">Macau SAR China</input><br>
<input type="checkbox" name="tcountry[]"  value="macedonia">Macedonia</input><br>
<input type="checkbox" name="tcountry[]"  value="madagascar">Madagascar</input><br>
<input type="checkbox" name="tcountry[]"  value="malawi">Malawi</input><br>
<input type="checkbox" name="tcountry[]"  value="malaysia">Malaysia</input><br>
<input type="checkbox" name="tcountry[]"  value="maldives">Maldives</input><br>
<input type="checkbox" name="tcountry[]"  value="mali">Mali</input><br>
<input type="checkbox" name="tcountry[]"  value="malta">Malta</input><br>
<input type="checkbox" name="tcountry[]"  value="marshall islands">Marshall Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="martinique">Martinique</input><br>
<input type="checkbox" name="tcountry[]"  value="mauritania">Mauritania</input><br>
<input type="checkbox" name="tcountry[]"  value="mauritius">Mauritius</input><br>
<input type="checkbox" name="tcountry[]"  value="mayotte">Mayotte</input><br>
<input type="checkbox" name="tcountry[]"  value="metropolitan france">Metropolitan France</input><br>
<input type="checkbox" name="tcountry[]"  value="mexico">Mexico</input><br>
<input type="checkbox" name="tcountry[]"  value="micronesia">Micronesia</input><br>
<input type="checkbox" name="tcountry[]"  value="midway islands">Midway Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="moldova">Moldova</input><br>
<input type="checkbox" name="tcountry[]"  value="monaco">Monaco</input><br>
<input type="checkbox" name="tcountry[]"  value="mongolia">Mongolia</input><br>
<input type="checkbox" name="tcountry[]"  value="montenegro">Montenegro</input><br>
<input type="checkbox" name="tcountry[]"  value="montserrat">Montserrat</input><br>
<input type="checkbox" name="tcountry[]"  value="morocco">Morocco</input><br>
<input type="checkbox" name="tcountry[]"  value="mozambique">Mozambique</input><br>
<input type="checkbox" name="tcountry[]"  value="myanmar [burma]">Myanmar [Burma]</input><br>
<input type="checkbox" name="tcountry[]"  value="namibia">Namibia</input><br>
<input type="checkbox" name="tcountry[]"  value="nauru">Nauru</input><br>
<input type="checkbox" name="tcountry[]"  value="nepal">Nepal</input><br>
<input type="checkbox" name="tcountry[]"  value="netherlands">Netherlands</input><br>
<input type="checkbox" name="tcountry[]"  value="netherlands antilles">Netherlands Antilles</input><br>
<input type="checkbox" name="tcountry[]"  value="neutral zone">Neutral Zone</input><br>
<input type="checkbox" name="tcountry[]"  value="new caledonia">New Caledonia</input><br>
<input type="checkbox" name="tcountry[]"  value="new zealand">New Zealand</input><br>
<input type="checkbox" name="tcountry[]"  value="nicaragua">Nicaragua</input><br>
<input type="checkbox" name="tcountry[]"  value="niger">Niger</input><br>
<input type="checkbox" name="tcountry[]"  value="nigeria">Nigeria</input><br>
<input type="checkbox" name="tcountry[]"  value="niue">Niue</input><br>
<input type="checkbox" name="tcountry[]"  value="norfolk island">Norfolk Island</input><br>
<input type="checkbox" name="tcountry[]"  value="north korea">North Korea</input><br>
<input type="checkbox" name="tcountry[]"  value="north vietnam">North Vietnam</input><br>
<input type="checkbox" name="tcountry[]"  value="northern mariana islands">Northern Mariana Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="norway">Norway</input><br>
<input type="checkbox" name="tcountry[]"  value="oman">Oman</input><br>
<input type="checkbox" name="tcountry[]"  value="pacific islands trust territory">Pacific Islands Trust Territory</input><br>
<input type="checkbox" name="tcountry[]"  value="pakistan">Pakistan</input><br>
<input type="checkbox" name="tcountry[]"  value="palau">Palau</input><br>
<input type="checkbox" name="tcountry[]"  value="palestinian territories">Palestinian Territories</input><br>
<input type="checkbox" name="tcountry[]"  value="panama">Panama</input><br>
<input type="checkbox" name="tcountry[]"  value="panama canal zone">Panama Canal Zone</input><br>
<input type="checkbox" name="tcountry[]"  value="papua new guinea">Papua New Guinea</input><br>
<input type="checkbox" name="tcountry[]"  value="paraguay">Paraguay</input><br>
<input type="checkbox" name="tcountry[]"  value="people's democratic republic of yemen">People's Democratic Republic of Yemen</input><br>
<input type="checkbox" name="tcountry[]"  value="peru">Peru</input><br>
<input type="checkbox" name="tcountry[]"  value="philippines">Philippines</input><br>
<input type="checkbox" name="tcountry[]"  value="pitcairn islands">Pitcairn Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="poland">Poland</input><br>
<input type="checkbox" name="tcountry[]"  value="portugal">Portugal</input><br>
<input type="checkbox" name="tcountry[]"  value="puerto rico">Puerto Rico</input><br>
<input type="checkbox" name="tcountry[]"  value="qatar">Qatar</input><br>
<input type="checkbox" name="tcountry[]"  value="romania">Romania</input><br>
<input type="checkbox" name="tcountry[]"  value="russia">Russia</input><br>
<input type="checkbox" name="tcountry[]"  value="rwanda">Rwanda</input><br>
<input type="checkbox" name="tcountry[]"  value="réunion">Réunion</input><br>
<input type="checkbox" name="tcountry[]"  value="saint barthélemy">Saint Barthélemy</input><br>
<input type="checkbox" name="tcountry[]"  value="saint helena">Saint Helena</input><br>
<input type="checkbox" name="tcountry[]"  value="saint kitts and nevis">Saint Kitts and Nevis</input><br>
<input type="checkbox" name="tcountry[]"  value="saint lucia">Saint Lucia</input><br>
<input type="checkbox" name="tcountry[]"  value="saint martin">Saint Martin</input><br>
<input type="checkbox" name="tcountry[]"  value="saint pierre and miquelon">Saint Pierre and Miquelon</input><br>
<input type="checkbox" name="tcountry[]"  value="saint vincent and the grenadines">Saint Vincent and the Grenadines</input><br>
<input type="checkbox" name="tcountry[]"  value="samoa">Samoa</input><br>
<input type="checkbox" name="tcountry[]"  value="san marino">San Marino</input><br>
<input type="checkbox" name="tcountry[]"  value="saudi arabia">Saudi Arabia</input><br>
<input type="checkbox" name="tcountry[]"  value="senegal">Senegal</input><br>
<input type="checkbox" name="tcountry[]"  value="serbia">Serbia</input><br>
<input type="checkbox" name="tcountry[]"  value="serbia and montenegro">Serbia and Montenegro</input><br>
<input type="checkbox" name="tcountry[]"  value="seychelles">Seychelles</input><br>
<input type="checkbox" name="tcountry[]"  value="sierra leone">Sierra Leone</input><br>
<input type="checkbox" name="tcountry[]"  value="singapore">Singapore</input><br>
<input type="checkbox" name="tcountry[]"  value="slovakia">Slovakia</input><br>
<input type="checkbox" name="tcountry[]"  value="slovenia">Slovenia</input><br>
<input type="checkbox" name="tcountry[]"  value="solomon islands">Solomon Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="somalia">Somalia</input><br>
<input type="checkbox" name="tcountry[]"  value="south africa">South Africa</input><br>
<input type="checkbox" name="tcountry[]"  value="south georgia and the south sandwich islands">South Georgia and the South Sandwich Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="south korea">South Korea</input><br>
<input type="checkbox" name="tcountry[]"  value="spain">Spain</input><br>
<input type="checkbox" name="tcountry[]"  value="sri lanka">Sri Lanka</input><br>
<input type="checkbox" name="tcountry[]"  value="sudan">Sudan</input><br>
<input type="checkbox" name="tcountry[]"  value="suriname">Suriname</input><br>
<input type="checkbox" name="tcountry[]"  value="svalbard and jan mayen">Svalbard and Jan Mayen</input><br>
<input type="checkbox" name="tcountry[]"  value="swaziland">Swaziland</input><br>
<input type="checkbox" name="tcountry[]"  value="sweden">Sweden</input><br>
<input type="checkbox" name="tcountry[]"  value="switzerland">Switzerland</input><br>
<input type="checkbox" name="tcountry[]"  value="syria">Syria</input><br>
<input type="checkbox" name="tcountry[]"  value="são tomé and príncipe">São Tomé and Príncipe</input><br>
<input type="checkbox" name="tcountry[]"  value="taiwan">Taiwan</input><br>
<input type="checkbox" name="tcountry[]"  value="tajikistan">Tajikistan</input><br>
<input type="checkbox" name="tcountry[]"  value="tanzania">Tanzania</input><br>
<input type="checkbox" name="tcountry[]"  value="thailand">Thailand</input><br>
<input type="checkbox" name="tcountry[]"  value="timor-leste">Timor-Leste</input><br>
<input type="checkbox" name="tcountry[]"  value="togo">Togo</input><br>
<input type="checkbox" name="tcountry[]"  value="tokelau">Tokelau</input><br>
<input type="checkbox" name="tcountry[]"  value="tonga">Tonga</input><br>
<input type="checkbox" name="tcountry[]"  value="trinidad and tobago">Trinidad and Tobago</input><br>
<input type="checkbox" name="tcountry[]"  value="tunisia">Tunisia</input><br>
<input type="checkbox" name="tcountry[]"  value="turkey">Turkey</input><br>
<input type="checkbox" name="tcountry[]"  value="turkmenistan">Turkmenistan</input><br>
<input type="checkbox" name="tcountry[]"  value="turks and caicos islands">Turks and Caicos Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="tuvalu">Tuvalu</input><br>
<input type="checkbox" name="tcountry[]"  value="u.s. minor outlying islands">U.S. Minor Outlying Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="u.s. miscellaneous pacific islands">U.S. Miscellaneous Pacific Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="u.s. virgin islands">U.S. Virgin Islands</input><br>
<input type="checkbox" name="tcountry[]"  value="uganda">Uganda</input><br>
<input type="checkbox" name="tcountry[]"  value="ukraine">Ukraine</input><br>
<input type="checkbox" name="tcountry[]"  value="union of soviet socialist republics">Union of Soviet Socialist Republics</input><br>
<input type="checkbox" name="tcountry[]"  value="united arab emirates">United Arab Emirates</input><br>
<input type="checkbox" name="tcountry[]"  value="united kingdom">United Kingdom</input><br>
<input type="checkbox" name="tcountry[]"  value="united states">United States</input><br>
<input type="checkbox" name="tcountry[]"  value="unknown or invalid region">Unknown or Invalid Region</input><br>
<input type="checkbox" name="tcountry[]"  value="uruguay">Uruguay</input><br>
<input type="checkbox" name="tcountry[]"  value="uzbekistan">Uzbekistan</input><br>
<input type="checkbox" name="tcountry[]"  value="vanuatu">Vanuatu</input><br>
<input type="checkbox" name="tcountry[]"  value="vatican city">Vatican City</input><br>
<input type="checkbox" name="tcountry[]"  value="venezuela">Venezuela</input><br>
<input type="checkbox" name="tcountry[]"  value="vietnam">Vietnam</input><br>
<input type="checkbox" name="tcountry[]"  value="wake island">Wake Island</input><br>
<input type="checkbox" name="tcountry[]"  value="wallis and futuna">Wallis and Futuna</input><br>
<input type="checkbox" name="tcountry[]"  value="western sahara">Western Sahara</input><br>
<input type="checkbox" name="tcountry[]"  value="yemen">Yemen</input><br>
<input type="checkbox" name="tcountry[]"  value="zambia">Zambia</input><br>
<input type="checkbox" name="tcountry[]"  value="zimbabwe">Zimbabwe</input><br>
<input type="checkbox" name="tcountry[]"  value="åland islands">Åland Islands</input><br>
</div>                          
                        
    
               </center>     
           
<input type="submit" name="submit" class="w3-btn w3-indigo w3-margin" value="Next"/>
           </form>         
                        
</div>

<br>
<!--<div class="w3-container w3-center">
Need Help? Please read this page documentation <a class="w3-text-indigo" href="<?= site_url('blog/page-documentation-campaign-targeting') ?>">HERE</a>

</div>-->
<br>