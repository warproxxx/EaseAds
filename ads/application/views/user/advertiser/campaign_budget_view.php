
<div class="w3-container w3-center">
    <span class="w3-text-indigo w3-xlarge w3-serif">Payment & Budget</span><br>

	<button onclick="goBack()" style="float: left;">Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

<?= form_open("advertiser_dashboard/campaign_budget/".$this->uri->segment(3)) ?>

<?php
if(isset($_SESSION['action_status_report']))
{
echo $_SESSION['action_status_report'];
}
?>

<div class="w3-container">
	<div class="w3-half">
		<span class="w3-label w3-small">Budget ($)<sup><b class="w3-text-red w3-large">*</b></sup>:</span><br>

<input class="w3-padding w3-border w3-border-indigo" type="number" min='<?=$general_details['minimum_budget'] ?>' placeholder="Budget" value="<?php echo set_value('budget'); ?>" name="budget"  ><br><br>

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
if(!empty($cpa_form_data))
{
	echo '<option value="cpa">Click Per Action </option>
';
}else{
	if ($type == 'popup')
	{
		echo ('	<option value="cpm">CPM</option>');
	}
	else
	{
		echo '<option value="cpm">CPM</option>';
		echo '<option value="cpc">CPC</option>';
	}
}

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
		
<div  class="<?php
if(empty($cpa_form_data))
{
	echo 'w3-hide';
}

	?>" id="cpa_div">
  <span class="w3-label w3-small">Cost Per Action-CPA( ex:Total Amount  you want to pay per Action in  <?=$general_details['currency_code'] ?>)<sup><b class="w3-text-red w3-large">*</b></sup>:</span><br>
<span class="w3-text-red">min: <?=$general_details['currency_code']." "?><?php
//check if free if not use paid_action minimum
if($cpa_form_data['access_type'] == 'free')
{
	echo $general_details['minimum_cpa'];
}else{
		echo $general_details['minimum_paid_cpa'];

}
        ?>  </span><br>

       <input  class="w3-padding w3-border w3-border-indigo" type="number" step="0.001" min="<?php
//check if free if not use paid_action minimum
if($cpa_form_data['access_type'] == 'free')
{
	echo $general_details['minimum_cpa'];
}else{
		echo $general_details['minimum_paid_cpa'];

}
        ?>" placeholder="Cost Per Action" value="<?php echo set_value('cpa'); ?>" name="cpa"  /><br>
   </div>
		


	<div class="w3-show" id="cpm_div">		
<span class="w3-label w3-small">Cost Per View<sup><b class="w3-text-red w3-large">*</b></sup>:</span><br>
<span class="w3-text-red">min: <?=$general_details['currency_code']." ".$general_details['minimum_cpm'] ?> </span><br>

       <input  class="w3-padding w3-border w3-border-indigo" type="number" step="0.001" min="<?= $general_details['minimum_cpm'] ?>" placeholder="Cost Per View" name="cpm"  /><br><br>
  </div>   
</div>


<span class="w3-label w3-small">Raw Traffic: <br/>(Number of times you want to show to the same IP in 24 hrs)</span><br>

<select class="w3-padding w3-border w3-border-indigo" name="raw_traffic">
	<option value="1">1</option>
	<option value="2" selected>2</option>
	<option value="3">3</option>
</select>


<br>
<input class="w3-btn w3-indigo w3-margin" type="submit" name="submit" value="Submit">
</form>
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


</div>