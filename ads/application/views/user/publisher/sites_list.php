<div class="w3-container w3-center">


Approved Sites:
<center>

<?php
if(!empty($sites))
{
	echo("<table border=1>");
	echo("<tr>
			<td>Site URL</td>
			<td>Site Status</td>
			<td>Total impressions</td>
			<td>Total clicks</td>
		 <tr/>	");

		 
foreach ($sites as $item) {
    $status = "Pending";
    if ($item['approved'] == 1)
        $status = "Approved";
    else if ($item['approved'] == -1)
        $status = "Disapproved";

	echo("<tr>");
	echo("<td>" . $item['website'] . "</td>");
	echo("<td>" . $status . "</td>");
	echo("<td>" . $item['total_views'] . "</td>");
	echo("<td>" . $item['total_clicks'] . "</td>");
	echo("</tr>");


// echo "<a href='".site_url('publisher_dashboard/view_details/'.$item['ref_id'])."'>";
// echo "<div style='max-width:200px;height:150px;display:inline-block' class='w3-container w3-padding w3-margin w3-text-teal w3-border'>";
// echo "<span class=''><b>".$item['name']."</b>
// </span><hr>";
// echo "<span class='w3-padding w3-border'><span class='w3-small'>".ucfirst($item['status'])."</span></span>";
// echo "</div>";
// echo "</a>";

}
echo("</table>");
}
else
{

	echo "No sites available";
}

?>
</center>
</div>