<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/excellentexport.js'); ?>"></script>

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
<div id = "transactionsList">
	<h2> Transactions: </h2>

	

	<center>

	<table border=1 style='max-width:80%;/*overflow-x: scroll;*/' class='w3-table w3-striped w3-center w3-responsive' id="transactionstable">
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
		<?php
		echo('<td> <button type="button" onclick="myFunction(' . $payment['id'] . ',\'' . $payment['method'] . '\',' . $payment['amount'] . ',\'' . $payment['status'] . '\',' . $payment['time'] . ')">Show</button></td>');
		?>
	</tr>


	<?php
	}
	?>



	</center>
	</table>
</div>
<a download="transactions.xls" href="#" onclick="return ExcellentExport.excel(this, 'transactionstable', 'Transactions');">Download Transactions</a>


<?php
foreach ($payments as $payment)
{
?>

<div id="receipt" style="display:none">
	<center>
	<table id="receipttable">
		<tr>
			<td><b>Status:</b></td>
			<td id="receipt_status"></td>
		</tr>
		<tr>
			<td><b>Date:</b></td>
			<td id="receipt_date"></td>
		</tr>
		<tr>
			<td><b>Transaction ID:</b></td>
			<td id="receipt_transaction_id"></td>
		</tr>
		<tr>
			<td><b>Method:</b></td>
			<td id="receipt_method"></td>
		</tr>
		<tr>
			<td><b>Amount:</b></td>
			<td id="receipt_amount"></td>
		</tr>
	</table>
	<a download="receipt.xls" href="#" onclick="return ExcellentExport.excel(this, 'receipttable', 'Receipt');">Export to Excel</a>
	</center>
</div>


<?php
}
?>

<script>

function myFunction(id, method, amount, status, time)
{
	var x = document.getElementById("receipt");

	if (x.style.display === "none") 
	{
		x.style.display = "block";
	}

	document.getElementById("receipt_transaction_id").innerHTML = id;
	document.getElementById("receipt_method").innerHTML = method;
	document.getElementById("receipt_amount").innerHTML = amount;
	document.getElementById("receipt_status").innerHTML = status;
	document.getElementById("receipt_date").innerHTML = time;
}


 

function download(filename, text) {
  var element = document.createElement('a');
  element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
  element.setAttribute('download', filename);

  element.style.display = 'none';
  document.body.appendChild(element);

  element.click();

  document.body.removeChild(element);
}


$('#transactionspdf').click(function () {
	download("transactions.html", $('#transactionsList').html());
});

$('#cmd').click(function () {
	download("receipt.html", $('#receipt').html());
});

</script>