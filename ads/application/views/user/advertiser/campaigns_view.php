<div class="w3-container w3-center">
<br>
<span class="w3-text-indigo w3-large w3-serif">Campaigns</span><br>


<center>
<?php
if(!empty($items))
{
echo("<table border=1>");
echo("<tr>
		<td>Campaign Name</td>
		<td>Campaign Status</td>
		<td>Campaign Budget</td>
		<td>Total impressions</td>
		<td>Total clicks</td>
		<td>eCPM</td>
		<td>eCPC</td>
		<td>Review campaign</td>
	
	 <tr/>	");

foreach ($items as $item) {

echo("<tr>");
echo("<td><a href='".site_url('advertiser_dashboard/view_details/'.$item['ref_id'])."'>" . $item['name'] . "</a></td>");
echo("<td>" . $item['status'] . "</td>");
echo("<td>" . $item['budget'] . "$</td>");
echo("<td>" . $item['views'] . "</td>");
echo("<td>" . $item['clicks'] . "</td>");
echo("<td>" . $item['per_view'] * ($item['views']/100) . "$</td>");
echo("<td>" . $item['per_click'] * ($item['clicks']/100) . "$</td>");
echo("<td><a href='".site_url('advertiser_dashboard/view_details/'.$item['ref_id'])."'>Click Here</a></td>");
echo("</tr>");
}
echo("</table>");
}else{

	echo "No campaign available yet";
}
?>
</center>

</div>