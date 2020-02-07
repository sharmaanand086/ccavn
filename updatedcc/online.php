<?php
session_start();
include("isdk.php");
$name 		= 	$_POST['name'];
$email		= 	$_POST['email'];
$phone 		= 	$_POST['phone'];
$total   =   $_POST['price'];
$currency   =   $_POST['mycurr'];

$_SESSION['total']= $total;


$app = new iSDK;
if ($app->cfgCon("connectionName")) 
{
	
	$contactId = $app->addWithDupCheck(array('FirstName' => $name, 'Email' => $email,'Phone1' => $phone), 'Email');
	$_SESSION["contactId"]	= 	$contactId;
	//echo $contactId;
	$_SESSION["name"]	=	$name;
	$_SESSION["email"]	=	$email;
	$_SESSION["phone"]	=	$phone;

	if($currency == 'Rs'){
	    $currency = 'INR';
	    if($total == 39997){
	        $groupId = 22505;
        	$result = $app->grpAssign($contactId, $groupId);
        	$total = 47196;
        	$currency = 'INR';
	    }
	    if($total == 15000){
	        $groupId = 22507;
        	$result = $app->grpAssign($contactId, $groupId);
        		$total = 17700;
	    }
	}
	if($currency == 'USD'){
	    if($total == 560){
	        $groupId = 22509;
        	$result = $app->grpAssign($contactId, $groupId);
	    }
	    if($total == 210){
	        $groupId = 22511;
        	$result = $app->grpAssign($contactId, $groupId);
	    }
	}
	if($currency == 'GBP'){
	    if($total == 430){
	        $groupId = 22513;
        	$result = $app->grpAssign($contactId, $groupId);
	    }
	    if($total == 160){
	        $groupId = 22515;
        	$result = $app->grpAssign($contactId, $groupId);
	    }
	}
	if($currency == 'ZAR'){
	    if($total == 8400){
	        $groupId = 22517;
        	$result = $app->grpAssign($contactId, $groupId);
	    }
	    if($total == 3150){
	        $groupId = 22519;
        	$result = $app->grpAssign($contactId, $groupId);
	    }
	}
}
$_SESSION["radios"]	=	$currency;
$_SESSION["total"]	=	$total;
//echo $total;
if($total == 47196 || $total == 560 || $total == 430 || $total == 8400){
    ?>
    <form action="Checkout1.php" method="post" name="form1">
        <input type="hidden" value="<?php echo $contactId; ?>" name="contact" />
        <input type="hidden" value="<?php echo $name; ?>" name="name" />
        <input type="hidden" value="<?php echo $email; ?>" name="email" />
        <input type="hidden" value="<?php echo $phone; ?>" name="phone" />
        <input type="hidden" value="<?php echo $total; ?>" name="price" />
        <input type="hidden" value="<?php echo $currency; ?>" name=" currency" />
    </form>
    <script language='javascript'>document.form1.submit();</script>
    <?php
    
}
if($total == 17700 || $total == 210 ||  $total == 160 ||  $total == 3150){
    ?>
    <form action="Checkout5.php" method="post" name="form2">
        <input type="hidden" value="<?php echo $contactId; ?>" name="contact" />
        <input type="hidden" value="<?php echo $name; ?>" name="name" />
        <input type="hidden" value="<?php echo $email; ?>" name="email" />
        <input type="hidden" value="<?php echo $phone; ?>" name="phone" />
        <input type="hidden" value="<?php echo $total; ?>" name="price" />
        <input type="hidden" value="<?php echo $currency; ?>" name=" currency" />
    </form>
    <script language='javascript'>document.form2.submit();</script>
    <?php
    
}
?>  
<!--<script>window.location = "Checkout1.php";</script>-->