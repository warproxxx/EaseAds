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

<table>
	<tr>
		<td>Username</td>
		<td>Amount</td>
		<td>Message</td>
		<td>Approve</td>
		<td>Disapprove</td>
	</tr>

	
		<?php

		foreach ($items as $item)
		{
			echo("<tr>");
			echo "<td>".$item['email']."</td>";
			echo "<td>".$item['amount']." $</td>";
			echo "<td>".$item['message']."</td>";
			echo '<td><a href='. site_url('admin/payment_requests/approve/'.$item['id'].'/'.$item['amount']) .' class="w3-btn w3-green">Approve</a></td>';
			echo '<td><a href="'. site_url('admin/payment_requests/disapprove/'.$item['id']) .'" class="w3-btn w3-red">Disapprove</a></td>';
			echo("</tr>");
		}

		?>
</table>




</ul>
</div>
