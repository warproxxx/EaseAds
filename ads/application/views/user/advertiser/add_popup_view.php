<div class="w3-container w3-center">
<br><br>
  <b class="w3-serif w3-large w3-text-indigo">Create New Popunder</b><br>
  <button onclick="goForward()" style="float: right;">Forward</button>

<script>
function goForward() {
  window.history.forward();
}
</script>

<br>
<div class="w3-text-red w3-small"><?= validation_errors()."<br>".$error ?>

<?= form_open_multipart("advertiser_dashboard/add_campaign/".$this->uri->segment(3)) ?>

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

<select type="dropdown" name="category" class="w3-padding w3-border w3-border-blue w3-round" id="category">
<option value=null selected>Choose...</option>
<?php
foreach ($categories as $category)
{
 echo '<option value="'.$category['name'].'">'.$category['name'].'</option>';
}
?>

</select>
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






<br>




<br>
 <input type="submit" name="submit" value="Next" class="w3-btn w3-indigo w3-large w3-round-xlarge w3-margin"/>
</form>

</div>
<br><!--
<div class="w3-container w3-center">
Need Help? Please read this page documentation <a class="w3-text-indigo" href="<?= site_url('blog/page-documentation-creating-new-campaign') ?>">HERE</a>

</div>-->
<br>