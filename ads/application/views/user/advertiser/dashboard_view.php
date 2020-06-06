
<center>
 <?php
if(isset($_SESSION['err_msg']))
{
echo $_SESSION['err_msg'];

}

if (!empty($announcements))
{
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
<table class="w3-table w3-striped" border=1>
    <thead>
    <tr>
      <th scope="col"><i class="fa fa-calendar-o w3-text-green w3-large">Date</i></th>
      <th scope="col">Title</th>
      <th scope="col">Announcement</th>

</tr>
</thead>
   
  <tbody>
<?php
  foreach ($announcements as $announcement)
  {
    echo "<tr>";
    echo "<td>".$announcement['posted_date']."</td>";
    echo "<td>".$announcement['title']."</td>";
    echo "<td>".$announcement['message']."</td>";
    echo "</tr>";
  }
  echo('</table>');

}
?> 




</center>


<div>
    <div class="w3-panel w3-small">
    <div class="w3-row-padding" style="margin:0 -16px">

    <div class="w3-third">
    <h5>Account Details</h5>
    
       <br>

        <table class="w3-table w3-striped w3-white">
          <!-- <tr>
            <td><i class="fa fa-gavel w3-text-purple w3-large"></i></td>
            <td>Minimum Paid CPA</td>
            <td><i> <?=$general_details['currency_code'].' '.$general_details['minimum_paid_cpa']?></i></td>
          </tr> -->
      
          <tr>
            <td><i class="fa fa-credit-card w3-text-yellow w3-large"></i></td>
            <td>Total Account balance.</td>
            <td><i><?php
        echo $general_details['currency_code']." ".$user['account_bal'];
             ?></i></td>
          </tr>

          <tr>
            <td><i class="fa fa-credit-card w3-text-yellow w3-large"></i></td>
            <td>Total Views</td>
            <td><i><?php
        echo $today_views;
             ?></i></td>
          </tr>

          <tr>
            <td><i class="fa fa-credit-card w3-text-yellow w3-large"></i></td>
            <td>Total Clicks</td>
            <td><i><?php
        echo $today_clicks;
             ?></i></td>
          </tr>

          <!-- <tr>
            <td><i class="fa fa-credit-card w3-text-yellow w3-large"></i></td>
            <td>Spent Today</td>
            <td><i><?php
        echo $general_details['currency_code']." ".$user['account_bal'];
             ?></i></td>
          </tr> -->
      
      <tr>
        <td><i class="fa fa-hand-pointer-o w3-text-blue w3-large"></i></td>
        <td>Referrel Link Clicks.</td>
        <td><i><?php
echo $no_clicks;
         ?></i></td>
      </tr>
                  <td><i class="fa fa-user-plus w3-text-red w3-large"></i></td>
        <td>Total Registration.</td>
        <td><i><?php
echo $no_reg;
         ?></i></td>
      </tr>


      <!-- <tr>
        <td><i class="fa fa-bookmark w3-text-green w3-large"></i></td>
        <td> Total Approved  Referrels</td>
        <td><i><?php
echo $campaign_act;
         ?></i></td>
      </tr> -->
       
        </table>
      </div>



    
            <div class="w3-third">
              <h5>Account Details</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>Account Name.</td>
            <td><i><?php
echo $user['firstname']." ".$user['lastname']
             ?></i></td>
          </tr>
          <td><i class="fa fa-at w3-text-red w3-large"></i></td>
            <td>Account Email.</td>
            <td><i><?php
echo $user['email'];
             ?></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-flag w3-text-blue w3-large"></i></td>
            <td>Account Country</td>
            <td><i><?php
echo strtoupper(str_replace('-',' ',$user['country']));
             ?></i></td>
          </tr>

                    <tr>
                      <td><i class="fa fa-skype w3-text-green w3-large"></i></td>
                      <td>Account Skype/IM</td>
                      <td><i><?php
        echo $user['phone'];
                       ?></i></td>
                    </tr>



          <tr>
            <td><i class="fa fa-check w3-text-yellow w3-large"></i></td>
            <td>Account Status</td>
            <td><i><?php
        echo $user['account_status'];
             ?></i></td>
          </tr>
          

         
          <tr>
            <td><i class="fa fa-calendar-o w3-text-green w3-large"></i></td>
            <td>Registration Time.</td>
            <td><i>
<?php echo date( "F j, Y, g:i a",$user['time']); ?>
               </i></td>
          </tr>
          <tr>
            <td><i class="fa fa-calendar-o w3-text-yellow w3-large"></i></td>
            <td>Last login Time.</td>
            <td><i>
<?php echo date( "F j, Y, g:i a",$user['lastlog']); ?>
               </i></td>
          </tr>
 </table>

      </div>
      
      <div class="w3-third">
              <h4>Campaign & Affilate Statistics</h4>
        <table class="w3-table w3-striped w3-white">
         
          <tr>
            <td><i class="fa fa-bullhorn w3-text-blue w3-large"></i></td>
            <td>Total Campaigns</td>
            <td><i><?php
echo $count_campaigns;
             ?></i></td>
          </tr>

          <tr>
            <td><i class="fa fa-check w3-text-yellow w3-large"></i></td>
            <td>Pending Campaigns</td>
            <td><i><?php
echo $pending_campaigns;
             ?></i></td>
          </tr>


          <tr>
            <td><i class="fa fa-eye w3-text-red w3-large"></i></td>
            <td>Total Blocked Campaigns</td>
            <td><i><?php
echo $blocked_campaigns;
             ?></i></td>
          </tr>




          <tr>
            <td><i class="fa fa-bookmark-o w3-text-indigo w3-large"></i></td>
            <td>Number of Inactive Campaigns</td>
            <td><i><?php
echo $count_campaigns-$active_campaigns;
             ?></i></td>
          </tr>


          <tr>
            <td><i class="fa fa-bookmark w3-text-green w3-large"></i></td>
            <td> Number of Active Campaigns</td>
            <td><i><?php
echo $active_campaigns;
             ?></i></td>
          </tr>

 <tr>
            <td><i class="fa fa-hand-pointer-o w3-text-green w3-large"></i></td>
            <td>Minimum CPC</td>
            <td><i> <?= $general_details['currency_code'].' '.$general_details['minimum_cpc'] ?></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-eye w3-text-teal w3-large"></i></td>
            <td>Minimum CPM</td>
            <td><i><?= $general_details['currency_code'].' '.$general_details['minimum_cpm'] ?></i></td>
          </tr>
          <!-- <tr>
            <td><i class="fa fa-gavel w3-text-indigo w3-large"></i></td>
            <td>Minimum CPA</td>
            <td><i> <?=$general_details['currency_code'].' '.$general_details['minimum_cpa']?></i></td>
          </tr> -->
          <!-- <tr>
        <td><i class="fa fa-money w3-text-blue w3-large"></i></td>
        <td>Total Earnings.</td>
        <td><i><?php
  //echo $click;
       // echo "89";
         ?></i></td>
      </tr>
           -->


 </table>

      </div>
      </div>

         
  </div>
  <hr>

</div>



