

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
                echo "<option value='".$item['ref_id']."'>" .$item['name']. "</option>";
            }
        ?>
    </select> 
    
    <br/>
    <input type="submit" value="Generate">
</form>

<h3> Report </h3>
<?php
        if (!empty($day_report)) {
            echo("<center><table border=1>
                    <tr>
                        <td>Time</td>
                        <td>Views</td>
                        <td>Clicks</td>
                    </tr>");

            foreach($day_report as $key=>$val)
            {
                echo("<tr>");
                echo("<td>" . $val->Time . "</td>");
                echo("<td>" . $val->Views . "</td>");
                echo("<td>" . $val->Clicks . "</td>");
                echo("</tr>");
            }

            echo("</table></center>");
    }
    else if (!empty($report))
    {
        $keys = array_keys($report[0]);
        echo("<center><table border=1>
                <tr>
                    <td>". $keys[0] ."</td>
                    <td>". $keys[1] ."</td>
                    <td>". $keys[2] ."</td>
                </tr>");

            foreach($report as $key=>$val)
            {
                echo("<tr>");
                echo("<td>" . $val[$keys[0]]. "</td>");
                echo("<td>" . $val[$keys[1]] . "</td>");
                echo("<td>" . $val[$keys[2]] . "</td>");
                echo("</tr>");
            }
            echo("</table></center>");
    }
    else
    {
        echo("Empty");
    }

    
    ?>