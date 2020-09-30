<div class="w3-container w3-center">

Pending Sites:
<center>

<?php
if(!empty($pending_sites))
{
	echo("<table class='w3-table w3-striped sortable'>");
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

	echo "No Approved sites available";
}

?>


Approved Sites:
<center>

<?php
if(!empty($approved_sites))
{
	echo("<table class='w3-table w3-striped sortable' border='1'>");
	echo("<tr>
			<td>Site URL</td>
			<td>Total impressions</td>
			<td>Total clicks</td>
		 <tr/>	");

		 
foreach ($approved_sites as $item) {
	if ($item['approved'] == 1)
	{
		echo("<tr>");
		echo("<th>" . $item['website'] . "</th>");
		echo("<th>" . $item['total_views'] . "</th>");
		echo("<th>" . $item['total_clicks'] . "</th>");
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
</div>