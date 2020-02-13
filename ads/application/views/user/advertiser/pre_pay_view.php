
<style>
body {
    font-family: Arial;
    color: #212121;
}

.fa-linkedin {
    background: #007bb5;
    color: white;
}

.fa {
    padding: 20px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
}

#subscription-plan {
    padding: 20px;
    border: #E0E0E0 2px solid;
    text-align: center;
    width: 200px;
    border-radius: 3px;
    margin: 40px auto;
}

.plan-info {
    font-size: 1em;
}

.plan-desc {
    margin: 10px 0px 20px 0px;
    color: #a3a3a3;
    font-size: 0.95em;
}

.price {
    font-size: 1.5em;
    padding: 30px 0px;
    border-top: #f3f1f1 1px solid;
}

.btn-subscribe {
    padding: 10px;
    background: #e2bf56;
    width: 100%;
    border-radius: 3px;
    border: #d4b759 1px solid;
    font-size: 0.95em;
}
</style>




<div id="subscription-plan">
    <div class="plan-info">Pay using Paypal</div>
    <div class="plan-desc">Deposit to your EaseAds Account using Paypal</div>
    <div class="price">$<?= $amount ?></div>

    <div>
        <form action="<?= base_url() ?>/payment/create_payment/<?= $amount ?>" method="post">
            <input type="hidden" name="plan_name" value="Make a Deposit" /> 
            <input type="hidden" name="plan_description" value="" />
            <input type="submit" name="subscribe" value="Pay Now" class="btn-subscribe" />
        </form>
    </div>
    
</div>


<h4>Other Manual Method</h4>


<script>
var details = {}
</script>
<form action="<?= base_url() ?>/advertiser_dashboard/request_payment/<?= $amount ?>" method="post">
Method:

<select id="payment_type" name="payment_type" onchange="changeHTML(this)">
<option value="">Pick One</option>
<?php
foreach ($manual_payments as $payment) 
{
    echo("<option value='" . $payment['payment_method'] . "'>" . $payment['payment_method'] . "</option>");
    $string = $payment['message'] . "<br/>";

    foreach (range(1, $payment['values_used']) as $number) {
        $first = 'deposit_' . strval($number) . '_name';
        $second = 'deposit_' . strval($number) . '_value';

        $string = $string . "<b>" . $payment[$first] . ":</b>";
        $string = $string . $payment[$second] . "</br>";
    }

    echo("<script>details['".$payment['payment_method']."'] = '".$string."';</script>\n");
    
    
}
?>
</select>

    <div id = "details">
    
    </div>

    <script>

    function changeHTML(selectObject) 
    {
        var value = selectObject.value;  
        document.getElementById("details").innerHTML = details[value];
    }
    

    </script>

    <br/><br/>
    
    <textarea cols=50 rows=10 name="request_message" value="" placeholder="Enter Your message here" /></textarea>
    <br/>
    <input type="submit" value="Request Deposit" />
</form>
