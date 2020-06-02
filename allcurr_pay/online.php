<?php
session_start();
$name 		= 	$_POST['name'];
$email		= 	$_POST['email'];
$phone 		= 	$_POST['phone'];
$total   =   $_POST['price'];
$currency   =   $_POST['mycurr'];
$_SESSION['total']= $total;

	    $arr = array(
            'properties' => array(
                array(
                    'property' => 'firstname',
                    'value' => $name
                ),
                array(
                    'property' => 'phone',
                    'value' => $phone
                )
            )
        );
        $post_json = json_encode($arr);
        $endpoint = 'https://api.hubapi.com/contacts/v1/contact/createOrUpdate/email/'.$email.'/?hapikey=050a7606-f202-4c31-9cec-8aeaea345a63';
        $ch = @curl_init();
        @curl_setopt($ch, CURLOPT_POST, true);
        @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
        @curl_setopt($ch, CURLOPT_URL, $endpoint);
        @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = @curl_exec($ch);
        $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_errors = curl_error($ch);
        @curl_close($ch);
        $newres = json_decode($response);
         $contactId = $newres->vid;
	
	
	$_SESSION["contactId"]	= 	$contactId;
	$_SESSION["name"]	=	$name;
	$_SESSION["email"]	=	$email;
	$_SESSION["phone"]	=	$phone;

	if($currency == 'Rs'){
	    $currency = 'INR';
	    if($total == 14997){
	        
	        
        	$total = 17696;
        	$currency = 'INR';
	    }
	    if($total == 8000){
	        
	        
            
        		$total = 9440;
	    }
	}
	if($currency == 'USD'){
	    if($total == 199){
	        
	        
	        
	    }
	    if($total == 106){
	            
	    }
	}
	if($currency == 'GBP'){
	    if($total == 168){
	        
	    }
	    if($total == 90){
	        
	    }
	}
	if($currency == 'ZAR'){
	    if($total == 3479){
	        
	    }
	    if($total == 1856){
	        
	    }
	}

$_SESSION["radios"]	=	$currency;
$_SESSION["total"]	=	$total;
if($total == 17696 || $total == 199 || $total == 168 || $total == 3479 || $total == 23006 || $total == 258 || $total == 216 || $total == 4586 ){
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
        $endpoint = 'https://api.hsforms.com/submissions/v3/integration/submit/6714858/3a96474b-e286-47ed-9221-02bcc542d8fc?hapikey=050a7606-f202-4c31-9cec-8aeaea345a63';
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
if($total == 9440 || $total == 106 ||  $total == 90 ||  $total == 1856 || $total == 14750 || $total == 165 || $total == 138 || $total == 2963){
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
        $endpoint = 'https://api.hsforms.com/submissions/v3/integration/submit/6714858/e054a7ad-a91a-4420-afd9-771d288e69ce?hapikey=050a7606-f202-4c31-9cec-8aeaea345a63';
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