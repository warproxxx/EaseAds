<div class="w3-container w3-twothird w3-center"><br>
<span class="w3-text-blue-grey w3-xlarge">
Withdrawal Requests</span>

<div class="w3-container">
	<?php
if(!empty($withdrawls))
{
foreach ($withdrawls as $withdraw) {

$wlink = site_url('admin/process_withdrawal/'.$withdraw['id']).'/'.$withdraw['user_id'];
$p_button = "<a class='w3-btn w3-blue w3-margin' href='".$wlink."'>Process</a>";
echo "<div class='w3-border w3-border-black'>";
echo $withdraw['firstname']." ".$withdraw['lastname']."(".$withdraw['email'].") <br> <span class='w3-small'>Amount:$".$withdraw['amount']."</span>$p_button<br>";
echo "<div class='w3-small w3-serif'> Payment Type:".$withdraw['payment_type'];
echo "<br>";
echo "Withdrawal Account:".$withdraw['bank_acct'];
echo "<br>";
echo "Withdrawal Account Details:".$withdraw['bank_det'];
echo "<br>";
echo "Withdrawal Account Number:".$withdraw['bank_no'];
echo "<br>";

echo "</div>";



}


}else{

echo "No Withdrawal Requests";



}
	




?>




<br><br>
</div>







</div>
