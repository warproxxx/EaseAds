<div class="w3-container w3-twothird w3-center"><br>
<span class="w3-text-blue-grey w3-xlarge">
Payment Methods</span>

<form method="POST">
	Name (Example Skrill): 
	<br/>
	<input type="text" name="payment_method" id="payment_method">
	<br/><br/>
	Displays required (1 if you are only using email,3 if you are using SWIFT, Account ID, Bank Name etc upto 5): 
	<br/>
	<input type="number" name="values_used" id="values_used">
	<br/><br/>
	Transaction Message: 
	<br/>
	<textarea cols=50 rows=10 name="message" id="message"></textarea>
	<br/><br/>
	Display 1 (Example email):: 
	<br/>
	<input type="text" name="deposit_1_name" id="deposit_1_name">
	<br/><br/>
	Display 1 Value (Example abc@easeads.com): 
	<br/>
	<input type="text" name="deposit_1_value" id="deposit_1_value">
	<br/><br/>
	Display 2: 
	<input type="text" name="deposit_2_name" id="deposit_2_name">
	<br/>
	Display 2 Value: 
	<input type="text" name="deposit_2_value" id="deposit_2_value">
	<br/>
	Display 3: 
	<input type="text" name="deposit_3_name" id="deposit_3_name">
	<br/>
	Display 3 Value: 
	<input type="text" name="deposit_3_value" id="deposit_3_value">
	<br/>
	Display 4: 
	<input type="text" name="deposit_4_name" id="deposit_4_name">
	<br/>
	Display 4 Value: 
	<input type="text" name="deposit_4_value" id="deposit_4_value">
	<br/>
	Display 5: 
	<input type="text" name="deposit_5_name" id="deposit_5_name">
	<br/>
	Display 5 Value: 
	<input type="text" name="deposit_5_value" id="deposit_5_value">
	<br/><br/>
	<input type="submit" name="submit" value="Add">
</form>
</div>
<table border=1>
	
	<tr>
		<td>Name</td>
		<td>Message</td>
		<td>Values Used</td>
		<td>1 name</td>
		<td>1 value</td>
		<td>2 name</td>
		<td>2 value</td>
		<td>3 name</td>
		<td>3 value</td>
		<td>4 name</td>
		<td>4 value</td>
		<td>5 name</td>
		<td>5 value</td>
		<td>Delete</td>
	</tr>

	<?php

foreach ($payments as $payment) {

$remove_link = site_url('admin/payments/remove_payment/'.$payment['id']);
echo "<tr>";
echo "<td>".$payment['payment_method']."</td>";
echo "<td>".$payment['message']."</td>";
echo "<td>".$payment['values_used']."</td>";
echo "<td>".$payment['deposit_1_name']."</td>";
echo "<td>".$payment['deposit_1_value']."</td>";
echo "<td>".$payment['deposit_2_name']."</td>";
echo "<td>".$payment['deposit_2_value']."</td>";
echo "<td>".$payment['deposit_3_name']."</td>";
echo "<td>".$payment['deposit_3_value']."</td>";
echo "<td>".$payment['deposit_4_name']."</td>";
echo "<td>".$payment['deposit_4_value']."</td>";
echo "<td>".$payment['deposit_5_name']."</td>";
echo "<td>".$payment['deposit_5_value']."</td>";
echo "<td><a href=". $remove_link . ">Remove</a></td>";
echo "<br>";

echo "</tr>";



}



	




?>




<br><br>






</div>
