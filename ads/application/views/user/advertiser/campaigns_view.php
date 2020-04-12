<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="<?php echo base_url('assets/js/datamaps.world.min.js'); ?>"></script>

<div class="w3-container w3-center">
<br>
<span class="w3-text-indigo w3-large w3-serif">Campaigns</span><br>


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
	
<?php
if(!empty($items))
{
echo("<table border=1>");
echo("<tr>
		<td>Campaign Name</td>
		<td>Campaign Status</td>
		<td>Campaign Budget</td>
		<td>Total impressions</td>
		<td>Total clicks</td>
		<td>eCPM</td>
		<td>eCPC</td>
		<td>Review campaign</td>
	
	 <tr/>	");

foreach ($items as $item) {

echo("<tr>");
echo("<td><a href='".site_url('advertiser_dashboard/view_details/'.$item['ref_id'])."'>" . $item['name'] . "</a></td>");
echo("<td>" . $item['status'] . "</td>");
echo("<td>" . $item['budget'] . "$</td>");
echo("<td>" . $item['views'] . "</td>");
echo("<td>" . $item['clicks'] . "</td>");
echo("<td>" . $item['per_view'] * ($item['views']/100) . "$</td>");
echo("<td>" . $item['per_click'] * ($item['clicks']/100) . "$</td>");
echo("<td><a href='".site_url('advertiser_dashboard/view_details/'.$item['ref_id'])."'>Click Here</a></td>");
echo("</tr>");
}
echo("</table>");
}else{

	echo "No campaign available yet";
}
?>
</center>

</div>