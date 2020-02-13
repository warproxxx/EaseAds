<div class="w3-twothird">


<div class="w3-center">

<b class="w3-center w3-text-grey w3-xlarge">Pending Requests</b><br>

<div class="w3-text-red"><?php
if(isset($_SESSION['err_msg']))
{
	echo 
 $_SESSION['err_msg'];
}



?>
</div>
<br>

<table border=1>
	<tr>
		<td>Time</td>
		<td>Username</td>
		<td>Amount</td>
		<td>Method</td>
		<td>Message</td>
		<td>Approve</td>
		<td>Disapprove</td>
	</tr>

	
		<?php

		foreach ($items as $item)
		{
			echo("<tr>");
			echo "<td>".$item['time']."</td>";
			echo "<td>".$item['email']."</td>";
			echo "<td>".$item['amount']." $</td>";
			echo "<td>".$item['method']."</td>";
			echo "<td>".$item['message']."</td>";
			echo '<td><a href='. site_url('admin/payment_requests/approve/'.$item['user_id'].'/'.$item['id'].'/'.$item['amount'].'/'.$item['method']) .' class="w3-btn w3-green">Approve</a></td>';
			echo '<td><a href="'. site_url('admin/payment_requests/disapprove/'.$item['user_id'].'/'.$item['id']) .'" class="w3-btn w3-red">Disapprove</a></td>';
			echo("</tr>");
		}

		?>
</table>




</ul>
</div>
