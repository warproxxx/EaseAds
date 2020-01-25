<div class="w3-container w3-twothird w3-center"><br>
<span class="w3-text-blue-grey w3-xlarge">
Admins</span>

<form method="POST">
	Username: <input type="text" name="username" id="username">
	<br/><br/>
	First Name: <input type="text" name="firstname" id="firstname">
	<br/><br/>
	Last Name: <input type="text" name="lastname" id="lastname">
	<br/><br/>
	Email: <input type="text" name="email" id="email">
	<br/><br/>
	Password: <input type="password" name="password" id="password">
	<br/><br/>
	<input type="submit" name="submit" value="Add">
</form>

<table>
	<tr>
		<td>Username</td>
		<td>Email</td>
		<td>Remove</td>
	</tr>

	<?php

foreach ($admins as $admin) {

$remove_link = site_url('admin/admins/remove_admin/'.$admin['id']);
echo "<tr>";
echo "<td>".$admin['username']."</td>";
echo "<td>".$admin['email']."</td>";
echo "<td><a href=". $remove_link . ">Remove</a></td>";
echo "<br>";

echo "</tr>";



}



	




?>




<br><br>






</div>
