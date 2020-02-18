<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<form method="post">
    Start Date:
    <input type="date" name="start" value="2019-01-01">
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
<button type="button" id="transactionspdf">Download Report</button>

<div id = "fullreport">
<?php
        if (!empty($day_report)) {
            echo("<center><table border=1>
                    <tr>
                        <td>Time</td>
                        <td>Views</td>
                        <td>Clicks</td>
                        <td>eCPM</td>
                        <td>eCPC</td>
                    </tr>");

            foreach($day_report as $key=>$val)
            {
                echo("<tr>");
                echo("<td>" . $val->Time . "</td>");
                echo("<td>" . $val->Views . "</td>");
                echo("<td>" . $val->Clicks . "</td>");
                echo("<td>" . $val->eCPM . "</td>");
                echo("<td>" . $val->eCPC . "</td>");
                echo("</tr>");
            }

            echo("</table></center>");
    }
    else if (!empty($view_report))
    {
        echo("<h3>Views</h3>");
        $keys = array_keys($view_report[0]);
        echo("<center><table border=1>
                <tr>
                    <td>". $keys[0] ."</td>
                    <td>". $keys[1] ."</td>
                    <td>". $keys[2] ."</td>
                </tr>");

            foreach($view_report as $key=>$val)
            {
                echo("<tr>");
                echo("<td>" . $val[$keys[0]]. "</td>");
                echo("<td>" . $val[$keys[1]] . "</td>");
                echo("<td>" . $val[$keys[2]] . "</td>");
                echo("</tr>");
            }
            echo("</table></center>");

            echo("<h3>Clicks</h3>");
            $keys = array_keys($click_report[0]);
            echo("<center><table border=1>
                <tr>
                    <td>". $keys[0] ."</td>
                    <td>". $keys[1] ."</td>
                    <td>". $keys[2] ."</td>
                </tr>");

            foreach($click_report as $key=>$val)
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
</div>

<script>
function download(filename, text) {
  var element = document.createElement('a');
  element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
  element.setAttribute('download', filename);

  element.style.display = 'none';
  document.body.appendChild(element);

  element.click();

  document.body.removeChild(element);
}

$('#transactionspdf').click(function () {
	download("report.html", $('#fullreport').html());
});


</script>