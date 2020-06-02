7028<?php 
session_start();
include('Crypto.php');


require("isdk.php");
include "Barcode39.php";
require_once('class.phpmailer.php');
$app = new iSDK; 
	if ($app->cfgCon("connectionName")) 
{
    //echo $order_status;
    	error_reporting(0);
	$workingKey='7F0D3613357345F3F66343725F33E4B7';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	//$order_status="123654799";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		//var_dump($information[1]);
		if($i==0)	$OrderId=$information[1];
		if($i==9)	$curr=$information[1];
		if($i==3)	$order_status=$information[1];
		if($i==10)	$Amount=$information[1];
	}
	$contactId = substr($OrderId, 0, strpos($OrderId, '_'));
	$_SESSION["contactId"] = $contactId;
    

	if($order_status === "Success")
	{
	    
	     $_SESSION['total'] = $Amount;
	    $_SESSION['curr'] = $curr;
		
		$returnFields = array('ContactId','Contact.FirstName','Contact.Email','Contact.Phone1');
		$query = array('ContactID' => $contactId);
		
		$contactgroupassign = $app->dsQuery("ContactGroupAssign",10,0,$query,$returnFields);
		
		$arr = $contactgroupassign[0];
		
		if($Amount == 17700){
		    $groupId1 = 22523;			// Success payment Tag
		$result5 = $app->grpAssign($contactId, $groupId1);
		}
		if($Amount == 210){
		    $groupId1 = 22527;			// Success payment Tag
		$result5 = $app->grpAssign($contactId, $groupId1);
		}
		if($Amount == 160){
		    $groupId1 = 22531;			// Success payment Tag
		$result5 = $app->grpAssign($contactId, $groupId1);
		}
		if($Amount == 3150){
		    $groupId1 = 22535;			// Success payment Tag
		$result5 = $app->grpAssign($contactId, $groupId1);
		}
		
		$groupId2 = 4848;			// Customer Tag
		$result6 = $app->grpAssign($contactId, $groupId2);
		//echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
		?>
		<script>window.location = "invoice5.php";</script>
		<?php
	}
	
	else if($order_status==="Aborted")
	{
	    	$groupId = 8901;
		$result5 = $app->grpAssign($contactId, $groupId);
		//echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	?>  
        <script>window.location = "failpayment.php";</script>
<?php
	}
	else if($order_status==="Failure")
	{
	    	$groupId = 8901;
		$result5 = $app->grpAssign($contactId, $groupId);
		//echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
		?>  
        <script>window.location = "failpayment.php";</script>
<?php
	}
	else
	{
		//echo "<br>Security Error. Illegal access detected";
	
	}
}		
//echo $order_status;
	

?>
