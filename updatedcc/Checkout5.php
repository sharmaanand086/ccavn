<?php
session_start();
echo $_SESSION["contactId"];
?>
<html>
<head>
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>
</head>
<body>
	<form method="post" name="customerData" action="ccavRequestHandler5.php">
		<table width="40%" height="100" border='1' align="center"><caption><font size="4" color="blue"><b>Integration Kit</b></font></caption></table>
			<table width="40%" height="100" border='1' align="center">
				<tr>
					<td>Parameter Name:</td><td>Parameter Value:</td>
				</tr>
				<tr>
					<td colspan="2"> Compulsory information</td>
				</tr>
				<tr>
					<td>TID	:</td><td><input type="text" name="tid" id="tid" readonly /></td>
				</tr>
				<tr>
					<td>Merchant Id	:</td><td><input type="text" name="merchant_id" value="6017"/></td>
				</tr>
				<tr>
					<td>Order Id	:</td><td><input type="text" name="order_id" value="<?php echo $_SESSION["contactId"]."_".rand(10,100); ?>"/></td>
				</tr>
				<!--<tr>-->
				<!--	<td>customer_identifier	:</td><td><input type="text" name="customer_identifier" value="bhavseh@arfeenkhan.com"/></td>-->
				<!--</tr>-->
				<!--<tr>-->
				<!--	<td>vault	:</td><td><input type="text" name="vault" value="Y"/></td>-->
				<!--</tr>-->
				<tr>
					<td>si_type	:</td><td><input type="text" name="si_type" value="FIXED"/></td>
				</tr>
					<tr>
					<td>si_mer_ref_no	:</td><td><input type="text" name="si_mer_ref_no" value="<?php echo $_SESSION["contactId"]."_".rand(10,100); ?>"/></td>
				</tr>
					<tr>
					<td>si_is_setup_amt	:</td><td><input type="text" name="si_is_setup_amt" value="Y"/></td>
				</tr>
				<tr>
					<td>si_amount	:</td><td><input type="text" name="si_amount" value="<?php echo $_SESSION["total"]; ?>"/></td>
				</tr>
				<tr>
					<td>amount	:</td><td><input type="text" name="amount" value="<?php echo $_SESSION["total"]; ?>"/></td>
				</tr>
				<tr>
					<td>si_start_date	:</td><td><input type="text" name="si_start_date" value="07-02-2020"/></td>
				</tr>
				<tr>
					<td>si_frequency	:</td><td><input type="text" name="si_frequency" value="1"/></td>
				</tr>
				<tr>
					<td>si_frequency_type	:</td><td><input type="text" name="si_frequency_type" value="MONTH"/></td>
				</tr>
				<tr>
					<td>si_bill_cycle	:</td><td><input type="text" name=" si_bill_cycle" value="2"/></td>
				</tr>
			
				<tr>
					<td>Currency	:</td><td><input type="text" name="currency" value="<?php echo $_SESSION["radios"]; ?>"/></td>
				</tr>
				<tr>
					<td>Redirect URL	:</td><td><input type="text" name="redirect_url" value="http://arfeenkhan.com/incredibleyou/pay/ccavResponseHandler5.php"/></td>
				</tr>
			 	<tr>
			 		<td>Cancel URL	:</td><td><input type="text" name="cancel_url" value="http://arfeenkhan.com/incredibleyou/pay/ccavResponseHandler5.php"/></td>
			 	</tr>
			 	<tr>
					<td>Language	:</td><td><input type="text" name="language" value="EN"/></td>
				</tr>
		     	<tr>
		     		<td colspan="2">Billing information(optional):</td>
		     	</tr>
		        <tr>
		        	<td>Billing Name	:</td><td><input type="text" name="billing_name" value="<?php echo$_SESSION["name"] ?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Address	:</td><td><input type="text" name="billing_address" value=""/></td>
		        </tr>
		        <tr>
		        	<td>Billing City	:</td><td><input type="text" name="billing_city" value=""/></td>
		        </tr>
		        <tr>
		        	<td>Billing State	:</td><td><input type="text" name="billing_state" value=""/></td>
		        </tr>
		        <tr>
		        	<td>Billing Zip	:</td><td><input type="text" name="billing_zip" value=""/></td>
		        </tr>
		        <tr>
		        	<td>Billing Country	:</td><td><input type="text" name="billing_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Tel	:</td><td><input type="text" name="billing_tel" value="<?php echo$_SESSION["phone"] ?>"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Email	:</td><td><input type="text" name="billing_email" value="<?php echo$_SESSION["email"] ?>"/></td>
		        </tr>
		        <tr>
		        	<td colspan="2">Shipping information(optional)</td>
		        </tr>
		        <tr>
		        	<td>Shipping Name	:</td><td><input type="text" name="delivery_name" value="Chaplin"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Address	:</td><td><input type="text" name="delivery_address" value="room no.701 near bus stand"/></td>
		        </tr>
		        <tr>
		        	<td>shipping City	:</td><td><input type="text" name="delivery_city" value="Hyderabad"/></td>
		        </tr>
		        <tr>
		        	<td>shipping State	:</td><td><input type="text" name="delivery_state" value="Andhra"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Zip	:</td><td><input type="text" name="delivery_zip" value="425001"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Country	:</td><td><input type="text" name="delivery_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Tel	:</td><td><input type="text" name="delivery_tel" value="9876543210"/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param1	:</td><td><input type="text" name="merchant_param1" value="additional Info."/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param2	:</td><td><input type="text" name="merchant_param2" value="additional Info."/></td>
		        </tr>
				<tr>
					<td>Merchant Param3	:</td><td><input type="text" name="merchant_param3" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param4	:</td><td><input type="text" name="merchant_param4" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param5	:</td><td><input type="text" name="merchant_param5" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Promo Code	:</td><td><input type="text" name="promo_code" value=""/></td>
				</tr>
				<tr>
					<td>Vault Info.	:</td><td><input type="text" name="customer_identifier" value=""/></td>
				</tr>
		        <tr>
		        	<td></td><td><INPUT TYPE="submit" value="CheckOut"></td>
		        </tr>
	      	</table>
	      </form>
	      <script language='javascript'>document.customerData.submit();</script>
	</body>
</html>


