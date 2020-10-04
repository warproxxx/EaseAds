<div class="w3-container w3-twothird w3-center"><br>

<span class="w3-text-blue-grey w3-xlarge">Minimum Size</span>
<br/>


<form method="POST" name="text">
	Minimum CPC: <input type="number" name="minimum_cpc" step="0.001" value="<?=$minimum_cpc?>">
	<br/><br/>
	Minimum CPM: <input type="number" name="minimum_cpm" step="0.001" value="<?=$minimum_cpm?>">
	<br/><br/>
	Minimum Deposit: <input type="number" name="minimum_deposit" step="0.001" value="<?=$minimum_deposit?>">
	<br/><br/>
	Minimum Campaign Budget: <input type="number" name="minimum_budget" step="0.001" value="<?=$minimum_budget?>">
	<br/><br/>
	Minimum Withdrawl: <input type="number" name="minimum_payout" step="0.001" value="<?=$minimum_payout ?>">
	<br/><br/>
	Minimum Daily Budget: <input type="number" name="minimum_daily" step="0.001" value="<?=$minimum_daily?>">
	<br/><br/>
	<input type="submit" name="submit" value="Update Minimum">
</form>