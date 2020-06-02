<?php
session_start();
$conn = mysqli_connect('165.22.210.254', 'anand', 'anand', 'invoicesystem');
require("isdk.php");  
require_once('class.phpmailer.php');
$app = new iSDK;
if ($app->cfgCon("connectionName")) 
{
	$contactId=$_SESSION['contactId'];
	$returnFields = array('ContactId','Contact.FirstName','Contact.Email','Contact.Phone1','Contact.StreetAddress1','Contact.PostalCode','Contact.State','Contact.City','Contact.Country');
	$query = array('ContactID' => $contactId);
	$contactgroupassign = $app->dsQuery("ContactGroupAssign",10,0,$query,$returnFields);
	$arr=$contactgroupassign[0];
			
	$price = '13500';		
	
	$dateObj = date(' d-m-Y');
	$oDate = $app->infuDate("$dateObj");
	$invoiceId = $app->blankOrder($contactId,"Online Order Details (SMB ELITE)", $oDate, 0, 0);
	$_SESSION['invoice'] = $invoiceId;
	$result = $app->addOrderItem($invoiceId, 89, 4, doubleval( $price ), 1, "The Secret Millionaire Blueprint Seminar", "The Secret Millionaire Blueprint Seminar");
	
	$currentDate = date("d-m-Y");
	$pDate = $app->infuDate($currentDate);
	$note = "Paid Rs.".$price;
	$result = $app->manualPmt($invoiceId,doubleval( $price ), $pDate, 'Credit Card',$note, false);
	
   	
	$grp = array('ShipFirstName' => $arr['Contact.FirstName'],
   	'ShipStreet1' => $arr['Contact.StreetAddress1'],
	'ShipPhone'  => $arr['Contact.Phone1'],
	'ShipZip'     => $arr['Contact.PostalCode'],
   	'ShipCity' => $arr['Contact.City'],
   	'ShipState' => $arr['Contact.State'],
   	'ShipCountry' =>'India'
   	);
	$grpID = $invoiceId;
	$grpID = $app->dsUpdate("Job", (int)$grpID, $grp);
	$createdat=date('Y-m-d H:i:s');
                 $name = $arr['Contact.FirstName'];
                 $newemail = $arr['Contact.Email'];
                 $phone = $arr['Contact.Phone1'];
                 $product = 'The Incredible you system';
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  $main ="INSERT INTO `receipt_all`(`name`, `phone`, `email`, `contactid`, `product`, `link`, `createdat`) VALUES ('$name','$phone','$newemail','$contactId','$product','$actual_link','$createdat')";
  $results =$conn->query($main);
	
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
		//$mail->AddAddress($arr['Contact.Email'], $arr['Contact.FirstName']);
		//$mail->AddAddress('harsh@arfeenkhan.com', '');
		$mail->AddAddress('support@arfeenkhan.com', '');
		$mail->AddAddress('arfeenkhan@arfeenkhan.com', '');
		//$mail->AddAddress('onlinepayment@arfeenkhan.com', '');
            
		$mail->Subject = 'The Incredible You System By Arfeen Khan';
		$mail->Body= '<html>
  <head>
  </head>
  <body>
  <table id="mainTable" style="width: 650px;">
    <tbody>
      <tr>
        <td style="font-family: Tahoma, Arial, Verdana, sans-serif;font-size:
        12px;color: #000000;">
          <table style="width: 100%;">
            <tbody>
              <tr>
                <td nowrap="nowrap" style="font-family: Tahoma, Arial,
                Verdana, sans-serif;font-size: 12px;color: #000000;">
                  <img alt="Logo" border="0" src="https://ad129.infusionsoft.com/Logo" />
                <br />
                <br />
                 Smashx Strategies Pvt ltd.<br />
                B-1,003 Ground Floor,<br />
				Kanakia Boomerang , Chandivali<br />
				Mumbai, Maharashtra - 400072<br />
				India<br />
                <br />
                <!--~Company.Phone1~-->
              </td><td align="right" valign="top" style="font-family: Tahoma,
                Arial, Verdana, sans-serif;font-size: 12px;color: #000000;">
                <h1 style="margin: 1px;color: #000000;">
                  Receipt
                </h1>
                <table cellpadding="5" cellspacing="0" id="infoTable" style="border: solid
                #000000 1px;">
                  <tbody>
                    <tr>
                      <td class="info" style="font-family: Tahoma,
                      Arial, Verdana, sans-serif;font-size: 12px;color: #000000;text-align:
                      center;border: solid #000000 1px;">
                       Receipt Date
                      </td><td class="info" style="font-family: Tahoma,
                      Arial, Verdana, sans-serif;font-size: 12px;color: #000000;text-align:
                      center;border: solid #000000 1px;">
                      Receipt No #
                      </td>
                    </tr>
                    <tr>
                      <td class="info" style="font-family: Tahoma,
                      Arial, Verdana, sans-serif;font-size: 12px;color: #000000;text-align:
                      center;border: solid #000000 1px;">
                        '.$currentDate.'
                      </td><td class="info" style="font-family: Tahoma,
                      Arial, Verdana, sans-serif;font-size: 12px;color: #000000;text-align:
                      center;border: solid #000000 1px;">
                      '.$invoiceId.'
                      </td>
                    </tr>
                  </tbody>
                </table>
                </td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                <tr>
                  <td class="spacer" style="font-family: Tahoma, Arial, Verdana,
                  sans-serif;font-size: 12px;color: #000000;height: 15px;">
                  </td>
                </tr>
                <tr>
                  <td style="font-family: Tahoma, Arial, Verdana, sans-serif;font-size:
                  12px;color: #000000;">
                    <table cellpadding="0" cellspacing="0" style="width: 100%;">
                      <tbody>
                        <tr>
                          <td width="200" style="font-family: Tahoma, Arial, Verdana,
                          sans-serif;font-size: 12px;color: #000000;">
                          
                          </td><td width="200" style="font-family: Tahoma, Arial, Verdana,
                          sans-serif;font-size: 12px;color: #000000;">
                          
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
                  </td>
                  </tr>
                    <tr>
                      <td class="spacer" style="font-family: Tahoma, Arial, Verdana,
                      sans-serif;font-size: 12px;color: #000000;height: 15px;">
                      </td>
                    </tr>                                  
                      <!-- new table -->
                              <tr>
                                <table width="100%" id="purchasesTable" style="margin-top:2%">
                                  <tr id="purchaseRowsHeader">
                                    <td><table width="100%" cellpadding="0" cellspacing="0">
                                      <tr style="background-color: #000;color: #fff;font-size: 16px;font-weight: bold; text-align:center">
                                        <td style="text-align:left;padding:5px;">Qty</td>
                                        <td>Description</td>
                                        <td>Unit Price</td>
                                        <td>Total</td>
                                      </tr>
									<tr style="font-size: 14px;">
										<td style="padding:5px;">1</td>
										<td style="text-align:left ; padding: 5px;">The Incredible You System By Arfeen Khan (Monthly)</td>
										<td style="text-align:center; padding: 5px;">Rs.'.$price.'</td>
										<td style="text-align:center; padding: 5px;">Rs.'.$price.'</td>
									</tr>
                                      <tr style="font-size: 14px;">
                                        <td style="padding:5px;"><b>Total</b></td>
                                        <td style="text-align:center; padding: 5px;">&nbsp;</td>
                                        <td style="text-align:center ; padding: 5px;">&nbsp;</td>
                                        <td style="text-align:center ; padding: 5px;">Rs.'.$price.'</td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                </table>
                                <table width="100%" style="margin-top:2%">
                                  <tr>
                                    <td><table width="100%" cellpadding="0" cellspacing="0">
                                      <tr style="background-color: #000;color: #fff;font-size: 16px;font-weight: bold; ">
                                        <td style="padding:5px;">Payments Made</td>
                                        <td style="padding:5px;">&nbsp;</td>
                                        <td style="padding:5px;">&nbsp;</td>
                                      </tr>
                                      <tr style="font-size: 14px;">
                                        <td style="padding: 5px;">'.$currentDate.'</td>
                                        <td style="padding: 5px;">Credit Card/Debit Card</td>
                                        <td style="text-align:right; padding:5px;">Rs.'.$price.'</td>
                                      </tr>
                                      <tr style="font-size: 14px;">
                                        <td style="padding: 5px;"><b>Total  </b></td>
                                        <td style="text-align:center;padding: 5px;">&nbsp;</td>
                                        <td style="text-align:right; padding: 5px;">Rs.'.$price.'</td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                </table>
                                </td>
                                  </tr>
                                </table>
                              </tr>
                      <!-- new table -->
                              </tbody>
                              </table>
                                <p class="spacer" style="font-family: Tahoma, Arial, Verdana, sans-serif;color:
                                #000000;height: 15px;">
                                </p>
                                <p style="font-family: Tahoma, Arial, Verdana, sans-serif;color: #000000;">
                                  Thanks,<br />
                                 Smashx Strategies Pvt ltd.
                                </p>
                <p style="font-weight:500;font-size:14px;text-align: center ;padding: 10px 0 20px 0;border-top: 1px solid #000;margin-right:500px;">Note : The Amount is non-refundable
                <br><b>This is computer generated Receipt No Signature Required.</b>
                </p>
                              </body>
                              </html>';
                              
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
	<script>location.href = "http://www.arfeenkhan.com/incredibleyou/pay/thankyou/";</script>
<?php } ?>