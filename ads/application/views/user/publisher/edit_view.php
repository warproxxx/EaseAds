<div class="w3-container w3-center">
<br><br>
  <b class="w3-serif w3-large w3-text-indigo">Edit Campaign</b><br>

<br>

<!-- Campaign Type: <?= $detail['type'] ?>
<br/> -->

<?= form_open_multipart("publisher_dashboard/edit/".$this->uri->segment(3)) ?>

Campaign Name:
<input type="text" name="campaign_name" class="w3-padding w3-border w3-border-blue w3-round w3-margin" placeholder="Campaign Name" value="<?= $detail['name'] ?>" required/>
<br/>
<br/>
<center>
Category:
<?php

$curr_categories = (json_decode($detail['category']));

 echo '<div class="w3-card w3-border w3-border-indigo w3-center" style="max-width: 300px;height:250px;	 overflow: scroll;">  <span class="">';
 echo '<span class="">';
foreach ($categories as $category)
{
	if( in_array($category['name'] ,$curr_categories ))
	{
		echo '<input type="checkbox" class="w3-check" value="'.$category['name'].'" name="category[]" checked><span class="w3-text-grey">'.$category['name'].'</span> </span><br/>';
	}
	else
	{
		echo '<input type="checkbox" class="w3-check" value="'.$category['name'].'" name="category[]"><span class="w3-text-grey">'.$category['name'].'</span> </span><br/>';
	}

 
}
?>
</div>


<br>
<input class="w3-btn w3-indigo w3-margin" type="submit" name="submit" value="Update">
</center>

</form>