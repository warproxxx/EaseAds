<div class="w3-twothird">


<div class="w3-center">

<b class="w3-center w3-text-grey w3-xlarge">Edit Announcement</b><br>

<br>
<form method="POST">
	Title: <input type="text" name="title" id="title" value="<?php echo($announcement['title']) ?>">
	<br/>
	Announcement:
	<br/>
	<textarea rows=10 cols=80 name="body"><?php echo($announcement['message']) ?></textarea>
	<br/>
	<input type="submit" name="submit" value="Update">
</form>

<br/>



</div>


