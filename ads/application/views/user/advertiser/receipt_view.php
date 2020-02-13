<div class="w3-container w3-center">
<h2>Receipt</h2>
Prepayment for Media Delivery

<br/>

Transaction ID : <?= $receipt['transaction_id'] ?> <br/>
Date : <?= date("Y-m-d H:i:s", $receipt['time']) ?> <br/>
Amount : <?= $receipt['amount'] ?> $ <br/>
Method : <?= $receipt['method'] ?> <br/>

Name : <?= $receipt['firstname'] ?> <?= $receipt['lastname'] ?><br/>
Country : <?= $receipt['country'] ?> <br/>
Email : <?= $receipt['email'] ?> <br/>
Phone : <?= $receipt['phone'] ?> <br/>

</div>
