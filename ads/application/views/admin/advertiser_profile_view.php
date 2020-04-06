<div class='w3-container w3-center w3-twothird'><br>
<br>
<div class="w3-text-red">
<?php
if(isset($_SESSION['action_status_report']))
{


	echo $_SESSION['action_status_report'];
}

?>
</div><span class='w3-large w3-text-blue-grey'>
<?php
echo  $user['firstname'].' '.$user['lastname'];
?></span>
<br>

<a class='w3-small w3-btn w3-green' href='<?php echo site_url('admin/login_to_user_account/advertiser/'.$user['id']); ?>'>Login to this  Account</a>
<br>
<div class="w3-container">
<table class='w3-table w3-striped'>
<tr><td>Account Status</td><td><?= $user['account_status'] ?></td></tr>
<tr><td>Referral Username</td><td><?= $user['referral_id'] ?></td></tr>
<tr><td>Skype/IM</td><td><?= $user['phone'] ?></td></tr>
<tr><td>Website</td><td><a href="http://<?= json_decode($user['websites'])[0] ?>"><?= json_decode($user['websites'])[0] ?></a></td></tr>
<tr><td>Account Email</td><td>
<?= $user['email'] ?>
</td></tr>
</table>
	<table class="w3-table w3-striped w3-small">
	<tr>
<td>
Total Spent</td>


<td>
	<b>USD</b><?= $user['total_spent'] ?>
</td>

</tr>
<tr>
<td>
	Account Balance Now
</td>


<td>
	<b>USD</b><?= $user['account_bal'] ?>
</td>

</tr>




	</table>

</div>


<div class="w3-container">
	<div class="w3-half">
	<br>	
<span class="w3-large w3-text-blue-grey">Credit Account</span><br>
<?php
echo form_open('admin/credit/advertisers/'.$this->uri->segment(3));

?>
<input type="text" name="credit" class="w3-padding" placeholder="Amount" required/><br>
<input type="text" name="message" class="w3-padding" placeholder="Message" required/><br>

<input type="submit" name="submit" class="w3-btn w3-green" value="Credit"/>

</form>

	</div>
	

<div class="w3-half">
	<br>	
<span class="w3-large w3-text-blue-grey">Debit Account</span><br>
<?php
echo form_open('admin/debit/advertisers/'.$this->uri->segment(3));


?>
<input type="text" name="debit" class="w3-padding" placeholder="Amount" required/><br>
<input type="text" name="message" class="w3-padding" placeholder="Message" required/><br>

<input type="submit" name="submit" class="w3-red w3-btn" value="Debit"/>


</form>


	</div>
	




</div>



<div class="w3-container w3-center w3-margin">
	<?php if($user['account_status'] == "suspended")
	{
echo '<a href="'.site_url("admin/resume/advertisers/".$user['id']).'" class="w3-btn w3-green">Resume</a>
';
	}else{
	echo '<a href="'.site_url("admin/suspend/advertisers/".$user['id']).'" class="w3-btn w3-red">
Suspend</a>
';	
	}
?>

<a href="<?php echo site_url("admin/send_msg/advertiser/".$user['id']); ?>" class="w3-btn w3-green">
Send A Message</a>


<a href="<?php echo site_url("admin/email/advertisers/".$user['id']); ?>" class="w3-btn w3-blue">
Email</a>
</div>



<br>


</div>
