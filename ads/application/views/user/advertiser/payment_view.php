<div class="w3-container w3-center">
<span class="w3-text-indigo w3-large w3-serif">Account Deposit</span><br>
<?php
if(isset($_SESSION['action_status_report']))
{

	echo $_SESSION['action_status_report']."<br>";
}

?>
<?= form_open('advertiser_dashboard/payment') ?>
<br/>
<select name="currency" class="w3-padding">
	<option value="usd">US Dollar</option>


</select><br><br>
<span>Amount</span><br>
<input type="number" name="amount" min="<?=$general_details['minimum_deposit'] ?>" class="w3-padding"/>$
<br>
<input type="submit" name="submit" class="w3-btn w3-indigo w3-margin" value="Next" />
<br>

<h2> Transactions: </h2>
<center>
<table border=1 style='max-width:80%;/*overflow-x: scroll;*/' class='w3-table w3-striped w3-center w3-responsive'>
<tr>
	<td>Transaction ID</td>
	<td>Time</td>
	<td>Method</td>
	<td>Amount</td>
	<td>Status</td>
	<td>Receipt</td>
</tr>
<?php
foreach ($payments as $payment)
{
?>

<tr>
	<td><?= $payment['id'] ?></td>
	<td><?= date("Y-m-d H:i:s", $payment['time']) ?></td>
	<td><?= $payment['method'] ?></td>
	<td><?= $payment['amount'] ?> $</td>
	<td><?= $payment['status'] ?></td>
	<td><a href="./receipt/<?= $payment['id'] ?>">Generate</a></td>
</tr>
<?php
}
?>
</center>
</table>
	