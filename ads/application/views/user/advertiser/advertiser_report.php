

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
        <option value="country">By Country</option>
        <option value="platform">By Platform</option>
        <option value="browser">By Browser</option>
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
    if (!empty($report)) {
        echo("<center><table border=1>
                <tr>
                    <td>Time</td>
                    <td>Views</td>
                    <td>Clicks</td>
                </tr>");

        foreach($report as $key=>$val)
        {
            echo("<tr>");
            echo("<td>" . $val->Time . "</td>");
            echo("<td>" . $val->Views . "</td>");
            echo("<td>" . $val->Clicks . "</td>");
            echo("</tr>");
        }

        echo("</table></center>");
   }
   else
   {
       echo("Empty");
   }

   
?>




