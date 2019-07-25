<?php
session_unset(); 
unset ($_SESSION["total"]);
session_destroy(); 
session_start();
$ototal = 25000;
$ctotal = 25000;
$_SESSION['product'] = 25000;
$_SESSION['offer'] = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Arfeen Khan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bumper.css">
	<link rel="shortcut icon" href="images/Fevicon.png">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab|Oswald|Lato' rel='stylesheet' type='text/css'>
	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109138999-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109138999-9');
</script>

	<script>
	function checkInput(textbox) 
	{
		var price = document.getElementById(textbox).value;
		document.getElementById('ptotal').innerHTML = price;
		document.getElementById('total').innerHTML = price;
	}
	function validateForm() 
	{
		var x = document.forms["form1"]["price"].value;
		//alert(x);
	}
	</script>
	
	
		<script>
function OnButton1()
{
	var n=document.forms["form1"]["name"].value;
	var e=document.forms["form1"]["email"].value;
	var p=document.forms["form1"]["phone"].value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(n==null || n=="" ||e==null || e=="" ||p==null || p=="")
	{
		alert('Name , Email Id or Contact No field cannot be empty');
		return false;
	}
   	if (!filter.test(e))
	{
		alert('Please enter a valid Email Id');
		return false;
	}
	if(p.length<10)
	{
		alert('Mobile number should be 10 digit or more');
		return false;
	}
	
}
function OnButton2()
{
	var n=document.forms["form1"]["name"].value;
	var e=document.forms["form1"]["email"].value;
	var p=document.forms["form1"]["phone"].value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(n==null || n=="" ||e==null || e=="" ||p==null || p=="")
	{
		alert('Name , Email Id or Contact No field cannot be empty');
		return false;
	}
    if (!filter.test(e))
	{
		alert('Please enter a valid Email Id');
		return false;
	}
	if(p.length<13)
	{
if(p.value==($.isNumeric)){
alert(1);}
		alert('Mobile number should be 10 digit or more');
		return false;
	}
	
	
}
</script>

	
</head>
<body>
	<div class="wrapper">
		<div class="header">
				<h1> Arfeen Khan </h1>
		</div>
		<div class="webinar-countdown cf" id="countdown-container">
				<!--<h4 style="align:center;" class="webinar-countdown__title" id="countdown-title">Pay Rs.30,000/- Right Now and Get Lifetime Membership @10.5Lacs Before The Timer Hits 0</h4>-->
				
                <!--<!-- TIMER -->
						<!--	<div id="countdown-container">
								
								<div id="timer">
									<ul id="countdown"><li>
											<span id="days"></span>
											<div class="count-holder">
												<p class="timeRefDays" data-lb="editable-text" data-lb-id="count-down-text-days" data-lb-name="Countdown Text Days">day</p>
											</div>
										</li>
										<li>
											<span id="hours"></span>
											<div class="count-holder">
												<p class="timeRefHours" data-lb="editable-text" data-lb-id="count-down-text-hours" data-lb-name="Countdown Text Hours">hour</p>
											</div>
										</li>
										<li>
											<span id="minutes"></span>
											<div class="count-holder">
												<p class="timeRefMinutes" data-lb="editable-text" data-lb-id="count-down-min" data-lb-name="Countdown Text Minutes">minute</p>
											</div>
										</li>
										<li>
											<span id="seconds"></span>
											<div class="count-holder">
												<p class="timeRefSeconds" data-lb="editable-text" data-lb-id="count-down-text-sec" data-lb-name="Countdown Text Seconds">second</p>
											</div>
										</li>
									</ul></div>
								<div class="clear"></div>						
							</div>-->
		
			</div>
		<div class="clearfix"></div>
		<div class="main">
			<div class="section-lft">
				<form name="form1" method="POST" id = "form1" action = "online.php" onsubmit="return validateForm()">
					<div class="stp-1">
						<h2>step 1 : contact information </h2>
						<div class="contact-info">
							<div class="form-input">
								<label>First Name:*</label> 
								<input type="text" placeholder = "Enter Full Name" pattern = "[a-zA-Z ]{3,}"  name = "name" id = "name" title="It must contain only letters and a length of minimum 3 characters!"  required autofocus>
								<div class="clearfix"></div>
							</div>	
							<div class="form-input">	
								<label>Email:*</label>
								<input type="email" placeholder = "Enter Email ID" pattern = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$"  name = "email" id = "email" title = "It must contain the email that you have chosen at registration."  required autofocus >
								<div class="clearfix"></div>
							</div>
							<div class="form-input">	
								<label>Phone:*</label>
								<input type="text" placeholder = "Enter Contact No" name = "phone" id = "phone" title = "It must contain a valid 10 digits mobile number! e.g.9836193498"  required autofocus >
								<div class="clearfix"></div>
							</div>	
						</div>

					</div>
					<div class="clearfix"></div>
					<div class="stp-2">
						<h2>step 2 : billing details </h2>
							<div class="contact-info">
								<div class="form-input">
								<label>Address:*</label> 
								<input type="text" name="address" placeholder="Please enter your address" title = "Enter full address with wing/flat if exist." required autofocus>
								<div class="clearfix"></div>
								</div>
								<div class="form-input">
								<label>City:*</label>
								<input type="text" name="city" placeholder="Please enter city name" pattern = "[a-zA-Z ]{3,}" title = "Enter valid city name" required autofocus>
								<div class="clearfix"></div>
								</div>
								<div class="form-input">
								<label>State:*</label>
								<input type="text" name="state" placeholder="Please enter state" pattern = "[a-zA-Z ]{3,}" title = "Enter valid state name" required autofocus >
								<div class="clearfix"></div>
								</div>
								<div class="form-input">
								<label>Zip:*</label>
								<input type="text" name="pin" placeholder="Enter zip/postal code"   title = "Enter valid 6 digit pincode"   autofocus>
								<div class="clearfix"></div>
								</div>
							</div>				
					</div>
					<div class="stp-2">
						<h2>Step 3 : Your payment Amount </h2>
							<div class="contact-info" style="display:flex;">
                                <div class="some-class" style="width:35%">
                                                <input type="radio" class="inr2" name="radios"  value="1000"  style="margin-left: 5%;" onclick="OnChangeRadio (this)" >
                                                <label >$ 1000</label>
                                </div> 
                                <div class="some-class" style="width:35%">
                                                <input type="radio" class="inr2" name="radios"  value="3497"  style="margin-left: 5%;" onclick="OnChangeRadio (this)">
                                                <label >$ 3497</label>
                                </div> 
								<!--<div class="form-input">-->
								<!--<label>Amount:*</label> -->
								<!--<input type="text" name="price1" placeholder="enter amount"  id="myamount" value="0" title="Enter amount." required="" autofocus="">-->
								<input type="hidden" name="price" placeholder="enter amount"  id="myamount123" value="" title="Enter amount." required="" autofocus="">
								<!--<div class="clearfix"></div>-->
								<!--</div>-->
								
							</div>				
					</div>
                    
					
					<div class="stp-4">
						<h2>Product Details </h2>
						<hr>
						<div class="product_name">Coach To Fortune :</div>
						<div class="price" >$<label id="ptotal">0</label></div>
						<div class="clearfix"></div>
						<hr>
						<div class="product_name">Tax :</div>
						<div class="price" >$<label id="gsttotal">0</label></div>
						<div class="clearfix"></div>
						<hr>
						<div class="product_name ">Total Price:</div>
						<div class="price">$<label id="total"><span class="rupe" id="pstotal">0</span></label></div>
						<div class="clearfix"></div>
					</div>
					
					<div class="button-section">
					<!--<section class="pay">
							<h3>Rs.<label id="totalo"><?php echo $ototal;?></label></h3>
							<input type="hidden" id="totalo1" name="totalo1" value="<?php echo $ototal;?>">
							<input type="submit" class="pay-button" value="Online Payment" onclick="return OnButton1();">	
					</section>-->
					<!--<section class="pay">
						<h3>Rs.<label id="totalc"><?php echo $ctotal;?></label></h3>
						<input type="hidden" id="totalc1" name="totalc1" value="<?php echo $ctotal;?>">
						<input type="submit" class="pay-button" value="Cash on Delivery" onclick="return OnButton2();">
						<div class="clear"></div>
					</section>-->
					<div class="clearfix"></div>
				</div>
					
					<div class="button-section">
						<!--<h3>Rs.<label id="totalo"><?php echo $ototal;?></label></h3>-->
							<!--<input type="hidden" id="totalo1" name="totalo1" value="<?php echo $ototal;?>">-->
								<input type="submit" class="pay-button" value="Pay Now" onclick="return OnButton1();">	
						
						<div class="clearfix"></div>
					</div>
				</form>
			</div>

			<div class="section-rth">
				<!--<div class="side-sec">-->
				<!--	<div clss="side-img"><img src="images/money.png"></div>-->
				<!--	<div class="side-txt">-->
				<!--	<h3>100% money back guarantee</h3>-->
				<!--	<p><!--You have a full 60 days to preview . If you decide during that time that it's not right for you, just let us know and you'll be issued a full and prompt refund, no questions asked. In short, you get a great return on your investment, or you get your money back.</p>-->
				<!--	</div>-->
				<!--	<div class="clearfix"></div>-->
				<!--</div>-->
					
						
				<div class="side-sec">
					<div clss="side-img"><img src="images/shil.png"></div>
					<div class="side-txt">
					<h3>your information is safe</h3>									
					<p>We will not sell or rent your personal contact information for any marketing purposes whatsoever.  </p>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="side-sec">
					<div clss="side-img"><img src="images/help.png"></div>
					<div class="side-txt">	
					<h3>secure checkout</h3>									
					<p>All information is encrypted and transmitted without risk using a Secure Sockets Layer protocol. </p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="side-sec">
					<div clss="side-img"> <img src="images/lock.png"></div>
					<div class="side-txt">	
					<h3>need help?</h3>	
					<!--<p>Call Us @ (+91) 70456 55781<br></p>-->
					<p>Email us Anytime:<br><a href="#">support@arfeenkhan.com</a></p>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="images-wrap">	
					
						<img src="images/identity2.png">
						<img src="images/identity.png">
						<img src="images/identity1.png">									
				</div>	
			</div>
			<div class="clearfix"></div>
		</div>
		
	</div>
	<script type="text/javascript">
$("body").mousemove(function(){
//alert('aaaa');

//     var amounts1= $('#myamount').val();
//     var gst = amounts1 * 18 / 100;
//     $('#gsttotal').html(gst);
//     var amounts = parseInt(amounts1) + parseInt(gst);
//     $("#myamount123").val(amounts);
//     $('#totalo').html(amounts);
//     $('#ptotal').html(amounts1);
// $('#pstotal').html(amounts);

});

</script>
<script type="text/javascript">
        function OnChangeRadio (radio) {
            // alert ("The " + radio.value + " radio is selected.");
            
            if(radio.value == 1000){
                $('#ptotal').html('1000');
                $('#gsttotal').html('50');
                $('#pstotal').html('1050');
                document.getElementById("myamount123").value=1050;
            }
            if(radio.value == 3497){
                $('#ptotal').html('3497');
                $('#gsttotal').html('174');
                $('#pstotal').html('3671');
                document.getElementById("myamount123").value=3671;
            }
        }
        $( document ).ready(function() {
            $('input[name=radios]').attr('checked',false);
        });
    </script>
<script src="js/html5shiv.js"></script>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/a.js"></script> 
</body>
</html>