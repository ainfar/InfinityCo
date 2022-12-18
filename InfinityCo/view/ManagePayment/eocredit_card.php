<?php
include '../ManageSupplier/cheader.php';
?>
<script>
h2 {
    width:500px;
    margin:  auto;
    background: gray;
    text-align: center;
}
</script>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<div>
	<p >&nbsp;<a href="cart.php"> Cart&nbsp;</a>|<a href="payment_history.php">&nbsp; View Purchase History</a></p> 
	
	

	<h2><b>Credit Card Payment</b></h2>
		<div id="credit card" class="content2">
				<form action="../../controller/manage_payment_controller.php?ye=cardit_card" method="POST">
				<span>
					<p><br>
						<label for="cardNum">Card number</label>
						<input type="hidden" name="ye" value="cardit_card">
						<input name="cardNum" type="text" maxlength="16" class="cardBox" required="required">
					</p>
					
					<p>
						<label for="cardName">Name on card</label>
						<input name="cardName" type="text" class="cardBox" required="required">
					</p>
					
					<p>
						<label for="expiryMM">Expiration Month</label>
						<select name="cardEXPMM" class="EXPBox" required="required"> 
							<option selected="selected" value="">MM</option> 
							<option value="01">Jan (01)</option> 
							<option value="02">Feb (02)</option> 
							<option value="03">Mar (03)</option> 
							<option value="04">Apr (04)</option> 
							<option value="05">May (05)</option> 
							<option value="06">Jun (06)</option> 
							<option value="07">Jul (07)</option> 
							<option value="08">Aug (08)</option> 
							<option value="09">Sep (09)</option> 
							<option value="10">Oct (10)</option> 
							<option value="11">Nov (11)</option> 
							<option value="12">Dec (12)</option> 
						</select>
						</br>
						<label for="expiryYY">Expiration Year</label>
						<select name="cardEXPYY" class="EXPBox" required="required"> 
							<option selected="selected" value="">YYYY</option> 
							<option value="2020">2020</option> 
							<option value="2021">2021</option> 
							<option value="2022">2022</option> 
							<option value="2023">2023</option> 
							<option value="2024">2024</option> 
							<option value="2025">2025</option> 
							<option value="2026">2026</option> 
							<option value="2027">2027</option> 
							<option value="2028">2028</option> 
							<option value="2029">2029</option> 
							<option value="2030">2030</option> 
							<option value="2031">2031</option> 
							<option value="2032">2032</option> 
							<option value="2033">2033</option> 
						</select>
						<br>
						<label for="cvv">CVV</label>
						<input name="cvv" class="EXPBox" maxlength="3" type="password" required="required">
					</p>
					
					
					<input style="margin-top:39px; margin-left:434px;" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="CreditCard"><br>
					</span>
				</form>
				</div>	
</div>
</p>
    
<?php include 'footer.php' ?>