<?php
session_start();
include('Aes.php');
include('adler32.php');
require("isdk.php");
include "Barcode39.php";
require_once('class.phpmailer.php'); 
$price = $_SESSION['total'];
$app = new iSDK;   
if ($app->cfgCon("connectionName")) 
{ 
	//---------------------------------------------------------------------------------------------------------------------------------//
	error_reporting(0);
	$workingKey		=	'ASFDASFD';		//Working Key should be provided here.
	$encResponse	=	$_POST["encResponse"];					//This is the response sent by the CCAvenue Server
	$rcvdString		=	decrypt($encResponse,$workingKey);		//AES Decryption used as per the specified working key.
	$AuthDesc		=	'';
	$MerchantId		=	"ASDFASFD";
	$OrderId		=	$_REQUEST['Order_Id'];
	$Amount			=	$price;
	$Checksum		=	0;
	$veriChecksum	=	false;

	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	
	//******************************    Messages based on Checksum & AuthDesc   **********************************//
	echo "<center>";


	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==0)	$MerchantId=$information[1];	
		if($i==1)	$OrderId=$information[1];
		if($i==2)	$Amount=$information[1];	
		if($i==3)	$AuthDesc=$information[1];
		if($i==4)	$Checksum=$information[1];	
	}

	$rcvdString=$MerchantId.'|'.$OrderId.'|'.$Amount.'|'.$AuthDesc.'|'.$workingKey;
	$veriChecksum=verifyChecksum(genchecksum($rcvdString), $Checksum);
	
	$contactId = substr($OrderId, 0, strpos($OrderId, '_'));
	$_SESSION["contactId"] = $contactId;
	
	if($veriChecksum==TRUE && $AuthDesc==="Y") //change to Y
	{
		
		$_SESSION['total'] = $Amount;
		
		$returnFields = array('ContactId','Contact.FirstName','Contact.Email','Contact.Phone1');
		$query = array('ContactID' => $contactId);
		$contactgroupassign = $app->dsQuery("ContactGroupAssign",10,0,$query,$returnFields);
		$arr = $contactgroupassign[0];
		
		$groupId1 = 5316;			// Success payment Tag
		$result5 = $app->grpAssign($contactId, $groupId1);
		
		$groupId2 = 929;			// Customer Tag
		$result6 = $app->grpAssign($contactId, $groupId2);

		
?>  
        <script>window.location = "invoice.php";</script>
<?php
	}
	else if($veriChecksum==TRUE && $AuthDesc==="B")
	{
		echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
?>  
			<script>window.location = "thankyou.php";</script>
<?php
	}
	else if($veriChecksum==TRUE && $AuthDesc==="N")
	{
		
		$groupId = 5318;
		$result5 = $app->grpAssign($contactId, $groupId);
?>  
        <script>window.location = "failpayment.php";</script>
<?php
          
	}
	else
	{

   		$groupId = 5318;
		$result5 = $app->grpAssign($contactId, $groupId);
?>  
        <script>window.location = "failpayment.php";</script>
<?php          
	}
}
?>