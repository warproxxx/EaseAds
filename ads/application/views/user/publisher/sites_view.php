<div class="w3-container w3-center">


Approved Sites:
<ul>


<?php foreach($sites as $get): ?>
    <li><?= $get['website'] ?></li>
<?php endforeach; ?>
</ul>

<form method="POST" name="add_site">
    Site Name:
    <input type="text" name="site_name">

    <input type="submit" name="submit" value="Add Site">
</form>

</div>