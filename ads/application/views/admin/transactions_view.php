<div class="w3-twothird">


<div class="w3-center">

<b class="w3-center w3-text-grey w3-xlarge">Transactions</b><br>
</div>
<br>

<table border=1>
	<tr>
		<td>Transaction ID</td>
		<td>Time</td>
		<td>User</td>
		<td>Method</td>
		<td>Amount</td>
		<td>Paypal Transaction ID</td>
		<td>Paypal Payer ID</td>
		<td>Paypal Payment Token</td>
	</tr>

	
		<?php

		foreach ($items as $item)
		{
			echo("<tr>");
			echo "<td>".$item['transaction_id']."</td>";
			echo "<td>".$item['transaction_time']."</td>";
			echo "<td>".$item['user']."</td>";
			echo "<td>".$item['method']."</td>";
			echo "<td>".$item['amount']."</td>";
			echo "<td>".$item['paypal_id']."</td>";
			echo "<td>".$item['paypal_payer_id']."</td>";
			echo "<td>".$item['paypal_payment_token']."</td>";
			echo("</tr>");
		}

		?>
</table>

