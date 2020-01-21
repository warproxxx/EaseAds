<div class="w3-twothird">


<div class="w3-center">

<b class="w3-center w3-text-grey w3-xlarge">Pending Websites</b><br>

<div class="w3-text-red"><?php
if(isset($_SESSION['err_msg']))
{
	echo 
 $_SESSION['err_msg'];
}



?>
</div>
<br>

<?php

if (!empty($items))
{



foreach ($items as $item)
{

 echo "<a href='".$item['website']."'>".$item['website']."</a>";
 echo '<a href='. site_url('admin/pending_websites_list/approve/'.$item['id']) .' class="w3-btn w3-green">Approve</a>';
 echo '<a href="'. site_url('admin/pending_websites_list/disapprove/'.$item['id']) .'" class="w3-btn w3-red">Disapprove</a>';
}



echo $pagination;

}else{
echo "No Pending Websites";

}


?>


</ul>
</div>
