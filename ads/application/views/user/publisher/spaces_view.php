<div class="w3-container w3-center">

<span class="w3-text-indigo w3-xlarge w3-serif">Spaces</span><br>

<center>
<?php
if(!empty($items))
{
	echo("<table border=1>");
	echo("<tr>
			<td>Ad Space Name</td>
			<td>Category</td>
			<td>Space</td>
			<td>Status</td>
			<td>Total impressions</td>
			<td>Total clicks</td>
			<td>Total earnings</td>	
			<td>Review Space</td>
		 <tr/>	");

		 
foreach ($items as $item) {

	echo("<tr>");
	echo("<td><a href='".site_url('publisher_dashboard/view_details/'.$item['ref_id'])."'>" . $item['name'] . "</a></td>");
	echo("<td>" . $item['category'] . "</td>");
	echo("<td>" . $item['type'] . "</td>");
	echo("<td>" . $item['status'] . "</td>");
	echo("<td>" . $item['views'] . "$</td>");
	echo("<td>" . $item['clicks'] . "$</td>");
	echo("<td>" . $item['gained'] . "$</td>");
	echo("<td><a href='".site_url('publisher_dashboard/view_details/'.$item['ref_id'])."'>Click Here</a></td>");
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
}else{

	echo "No campaign available yet";
}
?>
</center>
</div>