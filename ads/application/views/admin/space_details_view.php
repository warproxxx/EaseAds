<div class="w3-container w3-twothird">

	<br>
	<?php
if(isset($_SESSION['action_status_report']))
{
	echo $_SESSION['action_status_report'];
}


	?>
<div class="w3-half">
<table class="w3-striped w3-small">

<a  href="<?=site_url('admin/publisher_profile_details/'.$space['user_id']) ?>" class="w3-btn w3-indigo w3-margin">View Publisher Details</a><br>


<a  href="http://<?=$space['website'] ?>" class="w3-btn w3-indigo w3-margin">Go to Publisher Website</a><br>

	<?php
foreach ($space as $key => $value) {
	if($key != 'code')
	{
echo "<tr>";
echo "<td>".$key."</td>";
echo "<td>".$value."</td>";
echo "</td>";
}
}
?>
	
	
</table>
</div>
<div class="w3-half  w3-center">
        <span class="w3-text-blue-gray w3-serif w3-xxlarge w3-margin">Look</span><br>
<?= $space['code'] ?>

</div>
<!--

--pending = paid need approval
--approved = paid and aproved =active
--disapproved = space disapproved = 
inactive






	--->
<div class="w3-container w3-margin">

<?php 

if($space['status'] == "active")
	{
echo '<a href="'.site_url("admin/space_action/pause/".$space['ref_id']).'" class="w3-btn w3-yellow">Stop</a>';

	}else{
echo '<a href="'.site_url("admin/space_action/start/".$space['ref_id']).'" class="w3-btn w3-green">Start</a>';

	}


?>


	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="<?php echo base_url('assets/js/datamaps.world.min.js'); ?>"></script>


<!--<?=strtotime(date("d-m-y")) ?>
<?= date( "F j, Y, g:i a",strtotime(date("d-m-y"))) ?>

<?=strtotime(date("y-m-d")) ?>
<?= date( "F j, Y, g:i a",strtotime(date("y-m-d"))) ?>
-->
<div class="w3-container w3-center">
<span class="w3-text-indigo w3-xlarge w3-serif">Space Details<br>(<?= $item['name'] ?>)</span><br>

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


<div class="w3-container">
	<div class="w3-half">
<span class="w3-text-indigo"><b>Performance Charts</b></span>
<!--- pie start here-->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Volume'],
          ['Views',     <?=$item['views'] ?>],
          ['Clicks',      <?=$item['clicks'] ?>]
        
        ]);

        var options = {
          title: 'Ads Space Performance'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

  <div id="piechart" style="width: 900px; height: 500px;"></div>
<!--pie ends here-->
</div>
<div class="w3-half">

	
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
    </script>	
       <div id="chart_div" style="width: 100%; height: 500px;"></div> 
	</div>
</div>