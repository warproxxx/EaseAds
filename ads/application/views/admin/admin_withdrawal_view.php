<div class="w3-container w3-twothird w3-center"><br>
<span class="w3-text-blue-grey w3-xlarge">
Withdrawal Requests</span>

<div class="w3-container">
	<?php
if(!empty($withdrawls))
{
foreach ($withdrawls as $withdraw) {

$approve_link = site_url('admin/process_withdrawal/approve/'.$withdraw['id']).'/'.$withdraw['user_id'];
$deny_link = site_url('admin/process_withdrawal/deny/'.$withdraw['id']).'/'.$withdraw['user_id'];

$p_button = "<a class='w3-btn w3-green w3-margin' href='".$approve_link."'>Approve Withdrawl</a>";
$deny_button = "<a class='w3-btn w3-red w3-margin' href='".$deny_link."'>Deny Withdrawl</a>";
echo "<div class='w3-border w3-border-black'>";
echo $withdraw['firstname']." ".$withdraw['lastname']."(".$withdraw['email'].") <br> <span class='w3-small'>Amount:$".$withdraw['amount']."</span><br/><br/>";

// echo("<Message: <br/><textarea rows='5' cols='60' name='message'></textarea><br/><br/>");
#make it a form so message gets sent too
if ($withdraw['payment_type'] == "western_union")
{
	echo "<div class='w3-small w3-serif'> Manual Type:".$withdraw['other_name'];
	echo "<div class='w3-small w3-serif'> Manual Details:".$withdraw['other_detail'];
}
else if ($withdraw['payment_type'] == "bank")
{
	echo "<div class='w3-small w3-serif'> Payment Type:".$withdraw['payment_type'];
	echo "<br>";
	echo "Bank Name:".$withdraw['bank_name'];
	echo "<br>";
	echo "Bank Account Name:".$withdraw['account_name'];
	echo "<br>";
	echo "Bank Account Number:".$withdraw['account_number'];
	echo "<br>";
	echo "SWIFT:".$withdraw['bank_no'];
	echo "<br>";
}
else if ($withdraw['payment_type'] == "paypal")
{
	echo "<div class='w3-small w3-serif'> Payment Type:".$withdraw['payment_type'];
	echo "<br>";
	echo "Email:".$withdraw['payment_type'];
	echo "<br>";
}

echo("<br/><br/>$p_button $deny_button<br>");
echo "</div>";



}


}else{

echo "No Withdrawal Requests";



}
	




?>




<br><br>
</div>







</div>
