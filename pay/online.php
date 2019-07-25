<?php
session_start();
include("isdk.php");
$name 		= 	$_POST['name'];
$email		= 	$_POST['email'];
$phone 		= 	$_POST['phone'];
$add		=	$_POST['address'];
$pin		=	$_POST['pin'];
$city		=	$_POST['city'];
$state		=	$_POST['state'];
$total 		= 	$_POST['price'];

$_SESSION['total']= $total;

$app = new iSDK;
if ($app->cfgCon("connectionName")) 
{
	
	$contactId = $app->addWithDupCheck(array('FirstName' => $name, 'Email' => $email,'Phone1' => $phone), 'Email');
	$_SESSION["contactId"]	= 	$contactId;
	
	$_SESSION["name"]	=	$name;
	$_SESSION["email"]	=	$email;
	$_SESSION["phone"]	=	$phone;
	
	$_SESSION["address"]	=	$add;
	$_SESSION["pin"]	=	$pin;
	$_SESSION["city"]	=	$city;
	
	$_SESSION["state"]	=	$state;
	
	
	$groupId = 5314; 					// Registration speaktofortune.com/payment/
	$result = $app->grpAssign($contactId, $groupId);
   	
   	$grp = array('StreetAddress1'  => $add, 'PostalCode' => $pin , 'City' => $city ,'State' => $state);
	$query = $app->dsUpdate("Contact", $contactId, $grp);
	
	
	
}
?>  

<form method="post" name="customerData" action="Checkout1.php">
    <input type="hidden" value="<?php echo $_SESSION['total']; ?>" name="amount" />
</form>
<script language='javascript'>document.customerData.submit();</script>
<!--<script>window.location = "Checkout1.php";</script>-->