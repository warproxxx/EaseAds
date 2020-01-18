<div class="w3-container w3-twothird">



<b class="w3-center w3-text-grey w3-xlarge">Send Email</b><br>



<div>
<?php

if(isset($_SESSION['action_status_report']))
{
	echo $_SESSION['action_status_report'];
}



echo form_open('admin/email/'.$this->uri->segment(3).'/'.$this->uri->segment(4));

?>	
<br>
<span class="w3-label w3-large">Email Title:</span><br>
<input type="text" class="w3-padding w3-margin-top" name="title" value="<?= set_value('title') ?>" placeholder="Message Title" required style="width:60%"/>


<br><br>
<span class="w3-label w3-large">Email Content:</span><br>
<textarea 
cols="120" 
rows="15" 
class="w3-border w3-margin-top" name="contents"></textarea>
<br>


<select name="type" class="w3-padding">
	
	<option value="personal">Personal</option>

	<option value="general"
<?php

if(empty($this->uri->segment(3)))
{


	echo "selected";
}


?>
	>General</option>
</select>
<br>
<span class="w3-label w3-small"><br><input type="submit" name="submit" class="w3-btn w3-blue" value="Send"/>
</form>

<br>
</div>











</div>
















</div>