<?php
session_start();
require("isdk.php");
$contactId = $_SESSION["contactId"];
$app = new iSDK;
if ($app->cfgCon("connectionName")) 
{
	$returnFields = array('Contact.FirstName','Contact.Email','Contact.Phone1','Contact.StreetAddress1','Contact.StreetAddress2','Contact.PostalCode','Contact.State','Contact.City','Contact.Country');
	$query = array('ContactID' => $contactId);
    $contactgroupassign = $app->dsQuery("ContactGroupAssign",10,0,$query,$returnFields);
    $arr=$contactgroupassign[0];
}
?>
<html>
<head>
<title> Checkout</title>
<!-- Facebook Pixel Code - General Retargeting Code HRA -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '363160880504868');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=363160880504868&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>
<center>
<?php include('adler32.php')?>
<?php include('Aes.php')?>
<?php   
error_reporting(0);
$merchant_id	=	"M_arf36554_36554";  // Merchant id(also User_Id) 
$amount			=	$_SESSION['total'];            // your script should substitute the amount here in the quotes provided here
$order_id		=	$contactId."_".rand(10,100); //substitute the order description here in the quotes provided here
$url			=	'http://speaktofortune.com/go/redirecturl.php';
//$url			=	'http://localhost/ttt/redirecturl.php';
$name 		= 	$arr['Contact.FirstName'];
$email 		= 	$arr['Contact.Email'];
$phone 		=  	$_SESSION['phone'];
$addr 		=  	$arr['Contact.StreetAddress1'].",".$arr['Contact.StreetAddress2'];
$city 		= 	$arr['Contact.City'];
$state 		= 	$arr['Contact.State'];
$zip 		=	$arr['Contact.PostalCode'];
$country 	= 	$arr['Contact.Country'];


$working_key='igfmsjzfl0vdotgq4979b51fkf1ppxal';	//Put in the 32 bit alphanumeric key in the quotes provided here.
$checksum=getchecksum($merchant_id,$amount,$order_id,$url,$working_key); // Method to generate checksum


$merchant_data= 'Merchant_Id='.$merchant_id.'&Amount='.$amount.'&Order_Id='.$order_id.'&Redirect_Url='.$url.'&billing_cust_name='.$name.'&billing_cust_address='.$addr.'&billing_cust_country='.$country.'&billing_cust_state='.$state.'&billing_cust_city='.$city.'&billing_zip_code='.$zip.'&billing_cust_tel='.$phone.'&billing_cust_email='.$email.'&delivery_cust_name='.$name.'&delivery_cust_address='.$addr.'&delivery_cust_country='.$country.'&delivery_cust_state='.$state.'&delivery_cust_city='.$city.'&delivery_zip_code='.$zip.'&delivery_cust_tel='.$phone.'&billing_cust_notes='.$delivery_cust_notes.'&Checksum='.$checksum  ;

$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
?>

<form method="post" name="redirect" action="http://www.ccavenue.com/shopzone/cc_details.jsp"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=Merchant_Id value=$merchant_id>";
?>
</form>

</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>