

<form method="post">
    Start Date:
    <input type="date" name="start">
    <br/>

    End Date:
    <input type="date" name="end">
    <br/>

    Report Type:
    <select name="report">
        <option value="day">By Day</option>
    </select> 
    <br/>
    Campaign:
    <select name="campaign">
        <!-- <option value="all">All</option> -->
        <?php
            foreach ($items as $item) 
            {
                echo "<option value='".$item['id']."'>" .$item['name']. "</option>";
            }
        ?>
    </select> 
    
    <br/>
    <input type="submit" value="Generate">
</form>

<h3> Report </h3>
<?php
   foreach($report as $key=>$val)
   {
       echo($val->Time);
       echo($val->Views);
       echo($val->Clicks);
   }
?>




