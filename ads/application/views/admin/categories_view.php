<div class="w3-twothird">


<div class="w3-center">

<b class="w3-center w3-text-grey w3-xlarge">Categories</b><br>

<br>

<?php

if (!empty($categories))
{


foreach ($categories as $category)
{
echo "<a href='".$category['name']."'>".$category['name']."</a>";
echo '<a href='. site_url('admin/categories/delete/'.$category['id']) .' class="w3-btn w3-red">Delete</a>';
}





}else{
echo "No Categories";

}
?>



</ul>
</div>


<form method="POST">
	Category Name: <input type="text" name="category" id="category">
	<input type="submit" name="submit" value="Add">
</form>