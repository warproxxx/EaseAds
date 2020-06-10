<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

<div class="w3-twothird"><br>
<span class="w3-serif w3-margin w3-text-indigo w3-large">Spaces</span>

<div>
<br>



<?php
if(!empty($spaces))
{
	echo("<table border = 1 class = 'sortable' style='margin-left:-50px'>
	<thead>
	<tr>
		<td> Space Name </td>
		<td> Clicks </td>
		<td> Views </td>
		<td> Campaign Status </td>
		<td> Details </td>
	</tr>
	</thead>
	<tbody>
	");

foreach ($spaces as $item) {
	echo "<tr>";
	echo "";
	echo "<td><a href='".site_url('admin/view_space_details/'.$item['ref_id'])."'><b>".$item['name']."</b>
	</a></td>";
	echo "<td>".ucfirst($item['clicks'])."</td>";
	echo "<td>".ucfirst($item['views'])."</td>";

	
	
	echo "<td>".ucfirst($item['status'])."</td>";
	
	echo "<td><a href='".site_url('admin/view_space_details/'.$item['ref_id'])."'>More info</a></td>";
	echo "</div>";
	echo "</tr>";
}
}else{

	echo "No campaign available yet";
}
?>


</tbody>
</table>
</div>
</div>

<script>

$(document).ready( function () {
    $('.sortable').DataTable();
} );

</script>