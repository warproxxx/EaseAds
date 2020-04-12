

<div class="w3-container w3-center">


<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="<?php echo base_url('assets/js/datamaps.world.min.js'); ?>"></script>

<span class="w3-text-indigo w3-large w3-serif">Campaign Details (<?= $campaign_item['name']?>)</span><br>

<center>
  <div id="container" style="width: 1500px; height: 800px;"></div>
    <script>
        


        var map = new Datamap({
                element: document.getElementById('container'),
                fills: 
                {
                    HIGH: '#afafaf',
                    LOW: '#123456',
                    MEDIUM: '#9ec2f7',
                    UNKNOWN: 'rgb(0,0,0)',
                    defaultFill: '#b4b4b7'
                },

                data: {
                  <?php 
                    $countryCode = array("BD"=> "BGD", "BE"=> "BEL", "BF"=> "BFA", "BG"=> "BGR", "BA"=> "BIH", "BB"=> "BRB", "WF"=> "WLF", "BL"=> "BLM", "BM"=> "BMU", "BN"=> "BRN", "BO"=> "BOL", "BH"=> "BHR", "BI"=> "BDI", "BJ"=> "BEN", "BT"=> "BTN", "JM"=> "JAM", "BV"=> "BVT", "BW"=> "BWA", "WS"=> "WSM", "BQ"=> "BES", "BR"=> "BRA", "BS"=> "BHS", "JE"=> "JEY", "BY"=> "BLR", "BZ"=> "BLZ", "RU"=> "RUS", "RW"=> "RWA", "RS"=> "SRB", "TL"=> "TLS", "RE"=> "REU", "TM"=> "TKM", "TJ"=> "TJK", "RO"=> "ROU", "TK"=> "TKL", "GW"=> "GNB", "GU"=> "GUM", "GT"=> "GTM", "GS"=> "SGS", "GR"=> "GRC", "GQ"=> "GNQ", "GP"=> "GLP", "JP"=> "JPN", "GY"=> "GUY", "GG"=> "GGY", "GF"=> "GUF", "GE"=> "GEO", "GD"=> "GRD", "GB"=> "GBR", "GA"=> "GAB", "SV"=> "SLV", "GN"=> "GIN", "GM"=> "GMB", "GL"=> "GRL", "GI"=> "GIB", "GH"=> "GHA", "OM"=> "OMN", "TN"=> "TUN", "JO"=> "JOR", "HR"=> "HRV", "HT"=> "HTI", "HU"=> "HUN", "HK"=> "HKG", "HN"=> "HND", "HM"=> "HMD", "VE"=> "VEN", "PR"=> "PRI", "PS"=> "PSE", "PW"=> "PLW", "PT"=> "PRT", "SJ"=> "SJM", "PY"=> "PRY", "IQ"=> "IRQ", "PA"=> "PAN", "PF"=> "PYF", "PG"=> "PNG", "PE"=> "PER", "PK"=> "PAK", "PH"=> "PHL", "PN"=> "PCN", "PL"=> "POL", "PM"=> "SPM", "ZM"=> "ZMB", "EH"=> "ESH", "EE"=> "EST", "EG"=> "EGY", "ZA"=> "ZAF", "EC"=> "ECU", "IT"=> "ITA", "VN"=> "VNM", "SB"=> "SLB", "ET"=> "ETH", "SO"=> "SOM", "ZW"=> "ZWE", "SA"=> "SAU", "ES"=> "ESP", "ER"=> "ERI", "ME"=> "MNE", "MD"=> "MDA", "MG"=> "MDG", "MF"=> "MAF", "MA"=> "MAR", "MC"=> "MCO", "UZ"=> "UZB", "MM"=> "MMR", "ML"=> "MLI", "MO"=> "MAC", "MN"=> "MNG", "MH"=> "MHL", "MK"=> "MKD", "MU"=> "MUS", "MT"=> "MLT", "MW"=> "MWI", "MV"=> "MDV", "MQ"=> "MTQ", "MP"=> "MNP", "MS"=> "MSR", "MR"=> "MRT", "IM"=> "IMN", "UG"=> "UGA", "TZ"=> "TZA", "MY"=> "MYS", "MX"=> "MEX", "IL"=> "ISR", "FR"=> "FRA", "IO"=> "IOT", "SH"=> "SHN", "FI"=> "FIN", "FJ"=> "FJI", "FK"=> "FLK", "FM"=> "FSM", "FO"=> "FRO", "NI"=> "NIC", "NL"=> "NLD", "NO"=> "NOR", "NA"=> "NAM", "VU"=> "VUT", "NC"=> "NCL", "NE"=> "NER", "NF"=> "NFK", "NG"=> "NGA", "NZ"=> "NZL", "NP"=> "NPL", "NR"=> "NRU", "NU"=> "NIU", "CK"=> "COK", "XK"=> "XKX", "CI"=> "CIV", "CH"=> "CHE", "CO"=> "COL", "CN"=> "CHN", "CM"=> "CMR", "CL"=> "CHL", "CC"=> "CCK", "CA"=> "CAN", "CG"=> "COG", "CF"=> "CAF", "CD"=> "COD", "CZ"=> "CZE", "CY"=> "CYP", "CX"=> "CXR", "CR"=> "CRI", "CW"=> "CUW", "CV"=> "CPV", "CU"=> "CUB", "SZ"=> "SWZ", "SY"=> "SYR", "SX"=> "SXM", "KG"=> "KGZ", "KE"=> "KEN", "SS"=> "SSD", "SR"=> "SUR", "KI"=> "KIR", "KH"=> "KHM", "KN"=> "KNA", "KM"=> "COM", "ST"=> "STP", "SK"=> "SVK", "KR"=> "KOR", "SI"=> "SVN", "KP"=> "PRK", "KW"=> "KWT", "SN"=> "SEN", "SM"=> "SMR", "SL"=> "SLE", "SC"=> "SYC", "KZ"=> "KAZ", "KY"=> "CYM", "SG"=> "SGP", "SE"=> "SWE", "SD"=> "SDN", "DO"=> "DOM", "DM"=> "DMA", "DJ"=> "DJI", "DK"=> "DNK", "VG"=> "VGB", "DE"=> "DEU", "YE"=> "YEM", "DZ"=> "DZA", "US"=> "USA", "UY"=> "URY", "YT"=> "MYT", "UM"=> "UMI", "LB"=> "LBN", "LC"=> "LCA", "LA"=> "LAO", "TV"=> "TUV", "TW"=> "TWN", "TT"=> "TTO", "TR"=> "TUR", "LK"=> "LKA", "LI"=> "LIE", "LV"=> "LVA", "TO"=> "TON", "LT"=> "LTU", "LU"=> "LUX", "LR"=> "LBR", "LS"=> "LSO", "TH"=> "THA", "TF"=> "ATF", "TG"=> "TGO", "TD"=> "TCD", "TC"=> "TCA", "LY"=> "LBY", "VA"=> "VAT", "VC"=> "VCT", "AE"=> "ARE", "AD"=> "AND", "AG"=> "ATG", "AF"=> "AFG", "AI"=> "AIA", "VI"=> "VIR", "IS"=> "ISL", "IR"=> "IRN", "AM"=> "ARM", "AL"=> "ALB", "AO"=> "AGO", "AQ"=> "ATA", "AS"=> "ASM", "AR"=> "ARG", "AU"=> "AUS", "AT"=> "AUT", "AW"=> "ABW", "IN"=> "IND", "AX"=> "ALA", "AZ"=> "AZE", "IE"=> "IRL", "ID"=> "IDN", "UA"=> "UKR", "QA"=> "QAT", "MZ"=> "MOZ");
                    foreach($country_click_details as $key)
                    {
                      echo($countryCode[$key['country']] . ": {
                        fillKey: 'MEDIUM',
                        views: " . strval($key['views']) . ",
                        clicks: " . strval($key['clicks']) . "

                      },");
                    }
                  
                  ?>



                },

                geographyConfig: {
                popupTemplate: function(geo, data) {
                    return ['<div class="hoverinfo"><font size=1><b>',
                            geo.properties.name + '</b><br/>Views: ' + data.views + '<br/>Clicks: ' + data.clicks,
                            '</font></div>'].join('');
                }
            }

        });
    </script>
</center>


<?php
if(isset($_SESSION['action_status_report']))
{
echo $_SESSION['action_status_report'];
}
?>


<div class="w3-container w3-center">
	<div class="w3-container w3-padding w3-half w3-center">
			<span class="w3-text-indigo"><b>Campaign Performance</b></span>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
      var data = google.visualization.arrayToDataTable([
          ['Time', 'Clicks', 'Views'],
           ['4Days Ago',   <?= $four_days_ago_clicks ?>,       <?= $four_days_ago_views ?>],
           ['3Days Ago',   <?= $three_days_ago_clicks ?>,       <?= $three_days_ago_views ?>],
          ['2Days Ago',   <?= $two_days_ago_clicks ?>,       <?= $two_days_ago_views ?>],
          ['Yesterday',   <?= $yesterday_clicks ?>,        <?= $yesterday_views ?>],
          ['Today',   <?= $today_clicks ?>,      <?= $today_views ?>]
        ]);


        var options = {
          title: '',
          hAxis: {title: 'Time',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>	    <div id="chart_div" style="width: 100%; height: 500px;"></div>
</div>



	<div class="w3-container w3-padding w3-half w3-small">
		<br><br>

			<span class="w3-text-indigo"><b>Campaign Statistics</b></span>
			<div style="width: 80%" class="w3-container">
  <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-eye w3-text-blue w3-large"></i></td>
            <td>Views Today.</td>
            <td><i><?php
echo $today_views;
             ?></i></td>
          </tr>

<tr>
            <td><i class="fa fa-hand-o-up w3-text-indigo w3-large"></i></td>
            <td>click Today.</td>
            <td><i><?php
echo $today_clicks;
             ?></i></td>
          </tr>
<tr>
            <td><i class="fa fa-eye w3-text-red w3-large"></i></td>
            <td>Total Views.</td>
            <td><i><?php
echo $campaign_item['views'];
             ?></i></td>
          </tr>

<tr>
            <td><i class="fa fa-hand-o-up w3-text-yellow w3-large"></i></td>
            <td>Total click.</td>
            <td><i><?php
echo $campaign_item['clicks'];
             ?></i></td>
          </tr>

</table>
</div>


<div class="w3-half" ><span class="w3-text-indigo w3-small w3-serif"><b>Campaign Demo</b></span><br>

		<?php
if($campaign_item['type'] =="text")
{
  echo "<div class='w3-border w3-border-blue'>";
echo "<span class='w3-text-blue'><b>".$campaign_item['text_title']."</b></span><br>";
echo "<span class='w3-small'>".$campaign_item['text_content']."</span><br>";
echo "<span class='w3-text-blue'><b>".$campaign_item['disp_link']."</b></span><br>";

  echo "</div>";

}elseif ($campaign_item['type'] =="banner") {
   //echo "<div class='w3-container'><b>250px X 350px</b></div>";
    echo "<div class='w3-center'>";
echo "<img class='w3-card' style='max-width:100%;max-height:100%' src='".base_url('assets/campaigns/'.$campaign_item['img_link'])."'/>";
  echo "</div>";
}elseif ($campaign_item['type'] =="recommendation") {

echo "<div class='w3-container w3-row w3-border w3-margin-bottom w3-padding w3-center' ><div class='w3-col s4 m12 w3-padding'><img class='w3-image w3-margin-top' src='".base_url('assets/campaigns/'.$campaign_item['img_link'])."'/></div><div id='text' class='w3-col s8 m12 w3-padding-bottom' style='text-align:justify;'><span class='w3-large' id='text'><b>".$campaign_item['text_title']."</b></span></div></div>";



}/*elseif ($campaign_item['type'] =="banner_text") {
  //echo "<div class='w3-container'><b>250px X 350px</b></div>";
    echo "<div class='w3-center w3-card'>";
echo "<img class='' style='max-width:100%;max-height:100%' src='".base_url('assets/campaigns/'.$campaign_item['img_link'])."'/>";
echo "<center><div style='width:200px;' class='w3-margin w3-center'>".$campaign_item['text_title']."</div>";
    echo "</div></center>";
}*/


	

		 ?>
		</div>
    <div class="w3-half">
      <span class="w3-text-indigo w3-small w3-serif"><b>Budget Details</b></span><br>

      <div style="width: 80%" class="w3-container">
  <table class="w3-table w3-striped w3-white">
          <tr
<?php
if ($campaign_item['per_click'] <= 0) {

echo "style='display:none;'";}

?>
          >
            <td>Cost Per Click</td>
            <td><i> <?= $general_details['currency_code'].' '.$campaign_item['per_click'] ?></i></td>
          </tr>
            <tr
<?php
if ($campaign_item['per_view'] <= 0) {

echo "style='display:none;'";}

?>
  
            >
            <td>Cost Per View</td>
            <td><i> <?= $general_details['currency_code'].' '.$campaign_item['per_view'] ?> </i></td>
          </tr>
            <tr
<?php
if ($campaign_item['per_action'] <= 0) {

echo "style='display:none;'";}

?>
  
            >
            <td>Cost Per Action</td>
            <td><i> <?= $general_details['currency_code'].' '.$campaign_item['per_action'] ?> </i></td>
          </tr>
            <tr
<?php
if ($campaign_item['per_action'] <= 0) {

echo "style='display:none;'";}

?>
  
            >
            <td>Cost Per Paid Action</td>
            <td><i> <?= $general_details['currency_code'].' '.$campaign_item['per_action'] ?> </i></td>
          </tr>
            <tr>
            <td>Budget</td>
            <td><i> <?= $general_details['currency_code'].' '.$campaign_item['budget'] ?> </i></td>
          </tr>
            <tr>
            <td>Balance</td>
            <td><i> <?= $general_details['currency_code'].' '.$campaign_item['balance'] ?></i></td>
          </tr>
            <tr>
            <td>Total Spent</td>
            <td><i> <?= $general_details['currency_code'].' '.($campaign_item['budget']- $campaign_item['balance']) ?></i></td>

          </tr>
        </table>
    </div>
	</div>

</div>




<div class="w3-container">


	<?php
if($campaign_item['status'] == "active")
{
echo "<a  class='w3-button w3-red w3-margin' href='".site_url('advertiser_dashboard/campaign_action/stop/'.$this->uri->segment(3))."'>Stop</a>";


}elseif($campaign_item['status'] == "pending")
{
	echo "<a  class='w3-button w3-grey w3-margin' href=''>Pending</a>";


}elseif($campaign_item['status'] == "inactive")
{
	echo "<a  class='w3-button w3-green w3-margin' href='".site_url('advertiser_dashboard/campaign_action/start/'.$this->uri->segment(3))."'>Start</a>";

}

echo "<a  class='w3-button w3-red w3-margin' href='".site_url('advertiser_dashboard/campaign_action/delete/'.$this->uri->segment(3))."'>Delete</a>";

?>

</div>

<?= form_open('advertiser_dashboard/fund_campaign/'.$this->uri->segment(3)) ?>
<span class="w3-text-indigo">Add Fund From Main Balance</span><br>
<input type="number" name="amount" class="w3-padding" placeholder="0.00"/><br>
<input type="submit" name="submit" class="w3-button w3-indigo" value="Add Fund"/>
</form>
</div>
</div>