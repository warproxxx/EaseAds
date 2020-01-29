<div class="w3-container w3-twothird w3-center"><br>
Ads Specified in this page will be displayed if no ads meet the provided condition.
<br/>
<span class="w3-text-blue-grey w3-xlarge">Default Banner</span>
<br/>


<form method="POST" name="banner" enctype="multipart/form-data">
	<input type="hidden" name="default_banner_id" value="<?=$default_banner_id?>">
	<input type="hidden" name="current_banner" value="<?=$default_banner_image?>">
	Image: <input type="file" name="default_banner_file">

	<?php
		if ($default_banner_image != "")
		{
			echo("Current Banner: <br/><img src='" . base_url('assets/campaigns/'.$default_banner_image) . "'>");
		}
	?>

	<br/><br/>
	Destination: <input type="text" name="default_banner_destination" value="<?=$default_banner_destination?>">
	<br/>
	<input type="submit" name="submit" value="Update Banner">
</form>

<br/>
<span class="w3-text-blue-grey w3-xlarge">Default Text</span>
<br/>


<form method="POST" name="text">
	<input type="hidden" name="default_text_id" value="<?=$default_text_id?>">
	Text: <input type="text" name="default_text_text" value="<?=$default_text_text?>">
	<br/><br/>
	Display Link: <input type="text" name="default_text_display" value="<?=$default_text_display?>">
	<br/><br/>
	Destination Link: <input type="text" name="default_text_destination" value="<?=$default_text_destination?>">
	<input type="submit" name="submit" value="Update Text">
</form>

<br/>
<span class="w3-text-blue-grey w3-xlarge">Default Popup</span>
<br/>


<form method="POST" name="native">
	<input type="hidden" name="default_popup_id" value="<?=$default_popup_id?>">
	URL: <input type="text" name="default_popup_destination" value="<?=$default_popup_destination?>">
	
	<input type="submit" name="submit" value="Update Popup">
</form>
