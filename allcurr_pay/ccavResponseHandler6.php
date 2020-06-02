<?php 
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
	//	var_dump($information[1]);
		if($i==0)	$OrderId=$information[1];
		if($i==9)	$curr=$information[1];
		if($i==3)	$order_status=$information[1];
		if($i==10)	$Amount=$information[1];
	}
        $contactId = substr($OrderId, 0, strpos($OrderId, '_'));
         $_SESSION["contactId"] = $contactId;
         
    
    $url = "https://api.hubapi.com/contacts/v1/contact/vid/".$withtagid."/profile?hapikey=050a7606-f202-4c31-9cec-8aeaea345a63"; 
					$ch = curl_init();  
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
					curl_setopt($ch, CURLOPT_URL, $url); 
					$result = curl_exec($ch); 
					$manage = json_decode($result);
					foreach($manage as $row){
					     $_SESSION["email"] = $row->email->value;
                         $_SESSION["name"] = $row->firstname->value;
                         $_SESSION["phone"] = $row->phone->value;
					}

	if($order_status === "Success")
	{
	    
	    $_SESSION['total'] = $Amount;
	    $_SESSION['curr'] = $curr;
		 $email = $_SESSION["email"];
        $name = $_SESSION["name"];
        $phone = $_SESSION["phone"];
         $arr = array(
            'fields' => array(
                array(
                    'name' => 'firstname',
                    'value' => $name
                ),
                array(
                    'name' => 'email',
                    'value' => $email
                ),
                array(
                    'name' => 'phone',
                    'value' => $phone
                )
            )
        );
        $post_json = json_encode($arr);
        $endpoint = 'https://api.hsforms.com/submissions/v3/integration/submit/6714858/21ae1886-198b-4749-aa8b-adca143146f5?hapikey=050a7606-f202-4c31-9cec-8aeaea345a63';
        $ch = @curl_init();
        @curl_setopt($ch, CURLOPT_POST, true);
        @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
        @curl_setopt($ch, CURLOPT_URL, $endpoint);
        @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        echo $response = @curl_exec($ch);
        $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_errors = curl_error($ch);
        @curl_close($ch);

		echo $Amount;
		if($Amount == 9440){
		    
		    
                
		}
		if($Amount == 106){
		    
		     
		    
		}
		if($Amount == 90){
		    
		     
		    
		}
		if($Amount == 1856){
		    
		     
		    
		}
		?>
		<script>window.location.href = "http://coachtofortune.com/webinar/pay/thankyou/";</script>
		<?php
	}
	
	else if($order_status==="Aborted")
	{
	    	
		   
        	
	?>  
        <script>window.location = "failpayment.php";</script>
<?php
	}
	else if($order_status==="Failure")
	{
	    	
		    
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
