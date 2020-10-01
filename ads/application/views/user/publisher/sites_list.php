<div class="w3-container w3-center">

<h3>Approved Sites:</h3>
<center>

<?php
if(!empty($approved_sites))
{
	echo("<table class='w3-table w3-striped sortable' border='1'>");
	echo("<tr>
			<th>Site URL</th>
		 <tr/>	");

		 
foreach ($approved_sites as $item) {
	if ($item['approved'] == 1)
	{
		echo("<tr>");
		echo("<td>" . $item['website'] . "</td>");
		echo("</tr>");
	}
	
}
echo("</table>");
}
else
{

	echo "No Approved sites available";
}

?>
</center>


<h3>Pending Sites:</h3>
<center>

<?php
if(!empty($pending_sites))
{
	echo("<table class='w3-table w3-striped sortable' border='1'>");
	echo("<tr>
			<th>Site URL</th>
		 <tr/>	");

		 
foreach ($pending_sites as $item) {
	if ($item['approved'] == 0)
	{
		echo("<tr>");
		echo("<td>" . $item['website'] . "</td>");
		echo("</tr>");
	}
	
}
echo("</table>");
}
else
{

	echo "No Pending sites available<br/><br/>";
}

?>



</div>