<div class="w3-twothird">


<div class="w3-center">

<b class="w3-center w3-text-grey w3-xlarge">Add Announcement</b><br>

<br>

<form method="POST">
	Title: <input type="text" name="title" id="title">
	<br/>
	Announcement:
	<br/>
	<textarea rows=10 cols=80 name="body"></textarea>
	<input type="hidden" name="receiver" id="receiver" value=0>
	<br/>
	<input type="submit" name="submit" value="Add">
</form>

<br/>
<center>
<table border=1>
<tr>
	<td>Date</td>
	<td>Title</td>
	<td>Announcement</td>
	<td>Change Status</td>
</tr>
<?php
	if (!empty($announcements))
	{
		foreach ($announcements as $announcement)
		{
			echo "<tr>";
			echo "<td>".$announcement['posted_date']."</td>";
			echo "<td>".$announcement['title']."</td>";
			echo "<td>".$announcement['message']."</td>";
			echo "<td>";
			if ($announcement['active'] == 1)
				echo '<a href='. site_url('admin/announcements/inactive/'.$announcement['id']) .' class="w3-btn w3-red">Make Inactive</a>';
			else
				echo '<a href='. site_url('admin/announcements/active/'.$announcement['id']) .' class="w3-btn w3-green">Make Active</a>';
			echo "</td>";
			echo "</tr>";
		}
	}
?>
</table>
</center>


</ul>
</div>


