<?php
session_start();
require("isdk.php");
require_once('class.phpmailer.php');

$name 		= 	$_POST['name'];
$email		= 	$_POST['email'];
$phone 		= 	$_POST['phone'];
$add		=	$_POST['address'];
$pin		=	$_POST['pin'];
$city		=	$_POST['city'];
$state		=	$_POST['state'];

$total 		= 	$_POST['totalc1'];
$_SESSION['total']= $total;

$app = new iSDK;
if ($app->cfgCon("connectionName")) 
{

	$contactId = $app->addWithDupCheck(array('FirstName' => $name, 'Email' => $email,'Phone1' => $phone), 'EmailAndName');
	$_SESSION["contactId"] 	= 	$contactId;
	$_SESSION["name"]	=	$name;
	$_SESSION["email"]	=	$email;
	$_SESSION["phone"]	=	$phone;
	
	$grp = array('StreetAddress1'  => $add, 'PostalCode' => $pin , 'City' => $city ,'State' => $state);
	$query = $app->dsUpdate("Contact", $contactId, $grp);
	
	$groupId = 2513;
	$result = $app ->grpAssign($contactId, $groupId);
	
	if(isset($_POST['bump-offer']))
	{
		$groupId2 = 2515;		//Extra ticket
		$result2 = $app->grpAssign($contactId, $groupId2);
		$_SESSION["offer"] = 3500;	//Offer Session
	}
	
	$groupId = 2519;
	$result = $app ->grpAssign($contactId, $groupId);
	
	$dateObj = date(' d-m-Y');
	$oDate = $app->infuDate("$dateObj");
	$offerb = '';
	$invoiceId = $app->blankOrder($contactId,"Cash on Delivery Order Details (SMB ELITE VIP)", $oDate, 0, 0);
	$_SESSION['invoice'] = $invoiceId;
	$result = $app->addOrderItem($invoiceId, 89, 4, 4800.00, 1, "General Ticket", "SMB Seminar Elite General Ticket");
	if($_SESSION['offer']== 3500)
	{		
			$result = $app->addOrderItem($invoiceId, 97, 4, 3500.00, 1, "Extra General Ticket", "SMB Seminar Elite General Ticket");
			
			$offerb = '<tr>
					<td style="font-family:HelveticaNeueLT Pro 45 Lt;color:#1a1a1a;">The Secret Millionaire Blueprint Seminar Elite Extra Ticket</td>
					<td style="font-family:HelveticaNeueLT Pro 45 Lt;font-size:20px;color:#1a1a1a;text-align:center;">Rs.'.$_SESSION['offer'].'</td>
				</tr>';
	}
	$result = $app->addOrderItem($invoiceId, 93, 4, 200.00, 1, "COD Charges", "COD Charges");
		
	$info = $offerb;
	
	$returnFields = array('ContactId','Contact.FirstName','Contact.Email','Contact.Phone1','Contact.StreetAddress1','Contact.StreetAddress2','Contact.PostalCode','Contact.State','Contact.City','Contact.Country');
	$query = array('ContactID' => $contactId);
	$contactgroupassign = $app->dsQuery("ContactGroupAssign",10,0,$query,$returnFields);
	$arr=$contactgroupassign[0];
 		
	$mail = new PHPMailer(true); // the true param means it will throw exceptions on     errors, which we need to catch
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host = 'mail.arfeenkhan.com';  // Specify main and backup server
	$mail->Port = '26';
	$mail->SMTPAuth = 'true';                               // Enable SMTP authentication
	$mail->Username = 'arfeenkhan@arfeenkhan.com';                            // SMTP username
	$mail->Password = 'rNX7zSKSCnev';                           // SMTP password
	$mail->SMTPSecure = 'SSL/TLS';

	try 
	{
		$mail->SetFrom('Arfeenkhan@arfeenkhan.com', 'Arfeen Khan');
		//$mail->AddAddress('avisingh.singh2011@gmail.com', '');
		$mail->AddAddress($arr['Contact.Email'], $arr['Contact.FirstName']);
		$mail->AddAddress('harsh@arfeenkhan.com', '');
		$mail->AddAddress('ajay@arfeenkhan.com', '');
		$mail->AddAddress('cod@arfeenkhan.com', '');
            
		$mail->Subject = 'Cash On Delivery Ticket Confirmation (SMB ELITE VIP)';
		$mail->Body= '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cash On Delivery Confirmation </title>
<style>
*{
	padding:0px;
	margin:0px;
}
table tr td {padding:1%;}
table tr th {padding:1%;}
</style>
</head>
<body>
<div id="body-wrapper" style="margin:1% auto;width:95%;border:3px solid #ff4800;border-radius:20px;padding:2%;">
<h1 style="font-size:30px;margin-bottom:5px;text-align:center;color:#00387e">Thank You for Purchasing the Ticket</h1>
		
    <p style="font-family:HelveticaNeueLT Pro 45 Lt;
	font-size:25.42px;
	color:#2c2b2b;
	text-align:left;
	padding:2% 1% 1% 2%;">Someone will come to the given address to collect the payment.<br></p>
	<h1 style="font-family:HelveticaNeueLT Pro 67 MdCn;
	font-style:italic;
	font-size:39.42px;
	color:#03489d;
	margin:2%;">Order Summary</h1>
	<div id ="body" style = "width:80%;margin: 1% auto;text-align:center;">
	<table id = "table2" style = "width:100%;border:1px solid #666666;">
		<tr style="background-color:#f3f3f3;font-family:HelveticaNeueLT Pro 45 Lt;font-size:20px;color:#1a1a1a;">
			<th>Items</th>
			<th>Price</th>
		</tr>
		<tr>
			<td style="font-family:HelveticaNeueLT Pro 45 Lt;color:#1a1a1a;">The Secret Millionaire Blueprint Seminar(ELITE) Ticket</td>
			<td style="font-family:HelveticaNeueLT Pro 45 Lt;font-size:20px;color:#1a1a1a;text-align:center;">Rs.'.$_SESSION['product'].'</td>
		</tr>
		'.$info.'
		<tr>
			<td style="font-family:HelveticaNeueLT Pro 45 Lt;color:#1a1a1a;">Cash on Delivery Charges</td>
			<td style="font-family:HelveticaNeueLT Pro 45 Lt;font-size:20px;color:#1a1a1a;text-align:center;">Rs.0</td>
		</tr>
		<tr>
			<th style="background-color:#999;font-family:HelveticaNeueLT Pro 45 Lt; font-size:20px;color:#1a1a1a;">Total</th>
			<th style="background-color:#999;font-family:HelveticaNeueLT Pro 45 Lt;font-size:20px; color:#1a1a1a;">Rs.'.$_SESSION['total'].'</th>
		</tr>
	</table>
	<div style="clear:both;"></div>
    <table border="1" id="Table1" style="width:100%;
    margin-top:3%;
	text-align:left;">
    <tr>
		<th colspan = "2" style="font-size:25px;text-align:center;">YOUR DETAILS</th>
    </tr>
	<tr>
		<th>Class : </th><td style="font-size:20px;">VIP</td>
    </tr>    
	<tr>
		<th>Name : </th><td style="font-size:20px;">'.$arr['Contact.FirstName'].'</td>
    </tr>
    <tr>
		<th>Email-Id : </th><td style="font-size:20px;">'.$arr['Contact.Email'].'</td>
    </tr>
	<tr>
		<th>Contact No : </th><td style="font-size:20px;">'.$arr["Contact.Phone1"].'</td>
    </tr>
    <tr>
		<th>Address : </th><td style="font-size:20px;">'.$arr['Contact.StreetAddress1'].$arr['Contact.StreetAddress2'].'<br>'.$arr['Contact.City'].'-'.$arr['Contact.PostalCode'].'<br>'.$arr['Contact.Country'].'</td>
    </tr>
    </table>
	</div>
    <h2 style="font-family:HelveticaNeueLT Pro 55 Cn;text-align:Center;margin-top:3%;font-size:18px;clear:both;
	margin-left:5px;">I will Send You Some More Details About The Event So Keep an Eye Out For Follow-up Emails.</h2>	 
</div>
</body>
</html>'
;

		$mail->IsHTML(true);
		$mail->Send();
	} 
	catch (phpmailerException $e) 
	{
		echo $e->errorMessage(); //Pretty error messages from PHPMailer
	} 
	catch (Exception $e) 
	{
		echo $e->getMessage(); //Boring error messages from anything else!
	}
?>  
		<script>window.location = "thankyoucod.php";</script>
<?php
}
?>