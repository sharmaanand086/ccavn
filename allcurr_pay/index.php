<?php
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
	<title>Coach To A Fortune Foundation Program Level 1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/Fevicon.png">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab|Oswald|Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bumper.css">
  
	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--<link rel="stylesheet" href="css/style.css">-->
	
<!--<img src="//events.genndi.com/tracker?action=sale&webicode=a2d72afe17&productID=112835" style="visibility:hidden; height:0px; width:0px; border:none;">-->
<!--<img src="//events.genndi.com/tracker?action=sale&webicode=7ca3b5f009&productID=120662" style="visibility:hidden; height:0px; width:0px; border:none;">	-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109138999-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109138999-10');
</script>
<!-- Hotjar Tracking Code for http://arfeenkhan.com/smb/go/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:882828,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '346234542534734');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=346234542534734&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->



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
	if(p.length<3)
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
  
<img src="https://event.webinarjam.com/t/sale/m02oqc04i8?price=0.00" style="visibility:hidden; height:0px; width:0px; border:none;">


 
	<div class="wrapper">
		<div class="header" style="text-align: center;">
				<img style="margin:0;width: 332px;height: 200px;" src="images/ctflogol1.png">
		</div>
		<div class="go-timer" style="color: #f87700;">
			 <div class="aftertime" style="display:none;"><span>00:00</span></div>
			 <div><span id="timer"></span></div>
			 <div class="timer-title">Time Left</div>
		</div>
		
		<div class="webinar-countdown cf" id="countdown-container">
				
		
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
								<input type="text" placeholder = "Enter Contact No" name = "phone" id = "phone"   title = "It must contain a valid 10 digits mobile number! e.g.9836193498"   >
								<div class="clearfix"></div>
							</div>
							
							
							<h3 style="text-decoration: underline;font-weight: bold;padding: 10px;text-align: center;">Select Currency</h3>
							<div class="currency" style="margin: 2% 0;">
                                <span class="curcls" id="inrcur" onclick="inrclick()" style="color: #f87700;">₹</span>
                                <span class="curcls" id="usdcur" onclick="usdclick()">$</span>
                                <span class="curcls" id="gbpcur" onclick="gbpclick()">£</span>
                                <span class="curcls" id="zarcur" onclick="zarclick()">R</span>
                            </div>
        
							<h3 style="text-decoration: underline;font-weight: bold;padding: 10px;text-align: center;">Payment Plan</h3>
							    	<div class="mainrad">
									    <div class="radlef">
									        <label>One Time Payment:*</label>
									    </div>
									  
                                                <div class="some-class">
                                                 <input type="radio" class="inr" id="inr" name="radios"  value="Rs20000"  style="margin-left: 5%;" checked>
                                                <label id="toplabel">₹ 14,997 Only</label>
                                                </div>
                                    </div>
						    	<p style="text-align:center;padding: 10px;">OR</p>
									<div class="mainrad2">
									    <div class="radlef">
									        <label>Part Payment*</label>
									    </div>
									  
                                                <div class="some-class">
                                                    <input type="radio" class="inr2" id="inr2" name="radios"  value="Rs8000"  style="margin-left: 5%;" >
                                                <label id="bottomlabel">₹ 8,000 x (2 months)</label>
                                                    <span class="caution" style="display:block;margin-top: 5%;margin-left:0;"> </span>
                                                </div> 
                                    </div>
								<div class="clearfix"></div>
						</div>

					</div>
					<div class="clearfix"></div>
					<div class="stp-2">
							<div class="">
								<div class="form-input">
								<input type="hidden" name="price" placeholder="enter amount"  id="myamount" value="14997" title="Enter amount." required="" autofocus="">
								<input type="hidden" name="mycurr" placeholder="enter amount"  id="mycurr" value="Rs" title="Enter amount." required="" autofocus="">
								<input type="hidden" name="topprice" placeholder="enter amount"  id="topprice" value="14997">
								<input type="hidden" name="topgst" placeholder="enter amount"  id="topgst" value="2699">
								<input type="hidden" name="specal" placeholder="enter amount"  id="specal" value="0">
								<input type="hidden" name="bottomprice" placeholder="enter amount"  id="bottomprice" value="8000">
								<div class="clearfix"></div>
								</div>
								
							</div>				
					</div>
                      <div class="ship-bump-offer" style="background-color: #fff;">
                        				<div class="ship-bump-offer-head" style="background-color: #fff;">
                        					<input type="checkbox" name="bump-offer" id="bump-offer" class="bump-offer" onchange="toggleCheckbox()">	
                        					<label style="line-height: 21px;font-size: 16px;display:unset;color:#000;"> Check the box to also add The Instant Millionaire System. The #1 Make money online System: How I’ve sold 10,000+ products online and made millions.
<br>
Discover how to set up your online business and start building income through the Internet. Every day thousands of people are losing their jobs, their income, and their security—perhaps you are one of them. However, with the right strategies, you can easily achieve financial independence.</span></label>
                        				</div>
                    		    	</div>
					
					<div class="stp-4">
						<h2>Product Details </h2>
						<hr>
						<div class="product_name bonushead">Coach To A Fortune Foundation Program Level 1:</div>
						<div class="price" ><label id="ptotal">₹ 14,997</label></div>
                            <div class="addons conclusion" >
                               <!--  <ul  class="conclusion">
                                    <li>The incredible you 10 weeks coaching program</li>
                                    <p class="bonushead">Plus Special Bonuses*</p>
                                    </ul> -->
                            </div>
                            	<!-- <div class="conclusion"> -->
						<div class="clearfix" style="padding: 10px;" ></div>
						<hr>
					  <div class="product_name ">Total Price:</div>
						<div class="price" style="font-weight:900;"><label id="total">
							<span class="rupe totalamt" id="totalamt">₹ 14,997</span></label>
						</div> 
						<div id="hidediv">
						    <div id="newdivhidw">
						        <div class="product_name ">GST:</div>
						<div class="price" style="font-weight:900;"><label id="total"><span class="rupe totgst" id="totgst">₹ 2699</span></label></div> 
						    </div>
						
						<div class="product_name ">Total :</div>
						<div class="price" style="font-weight:900;"><label id="total"><span class="rupe pstotal12" id="pstotal12">₹ 17696</span></label></div> 
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="button-section">
					<div class="clearfix"></div>
				</div>
					<!--<img src="images/incredibleu.png" style="width: 95%;" />-->
					
					<div class="button-section">
					
					<span class="cart-style"><img src="http://speaktofortune.com/go/images/cart-icon.png"></span>
						<input type="hidden" id="totalo1" name="totalo1" value="<?php echo $ototal;?>">
						<input type="submit" class="pay-button" value="Yes I Want The Coach To A Fortune Foundation Program NOW!!" onclick="return OnButton1();" style="background-color:#f87700">	
						
						<div class="clearfix"></div>
					</div>
					
					<div class="images-wrap1">	
					
						<div class="img1"><img src="http://speaktofortune.com/go/images/visa-cards.png"></div>
						<div class="img2"><img src="http://speaktofortune.com/go/images/master-cards.png"></div>
						<div class="img3"><img src="http://speaktofortune.com/go/images/american-icon.png"></div>										
			    	</div> 
					 
				</form>
			
			   
              
			</div>

	<div class="section-rth">
			<!--<div class="section-rght-sec1">-->
			<!--	<div class="rght-Title">The Incredible You System</div>-->
			<!--	<p style="font-weight: bold; float:right;  font-size: 17px;color:#FF0000">(Value ₹ 90,997 )</p>-->
			<!--	<div class="rght-text">-->
			<!--		<ul style="margin: 5% 0 0;">-->
			<!--			<li>The incredible you 10 weeks coaching system -->
			<!--			</li>-->
			<!--			</ul>-->
			<!--		</div>-->
			<!--		<div class="rght-text" style="float: left;margin-top: 3%;">-->
			<!--		<ul>-->
			<!--			<h4 style="color:#FF0000;font-weight: bold;letter-spacing: 1px;font-size: 20px;padding: 10px 0px;">Special Bonuses</h4>-->
			<!--			<li><span style="width: 60%;float:left;">Weekly Mastermind Meetings</span> <span style="width: 40%;float:left;color:#FF0000">(Value ₹ 50,000)</span></li>-->
			<!--			<li><span style="width: 60%;float:left;">Power Session</span> <span style="width: 40%;float:left;color:#FF0000">(Value ₹ 10,000)</span></li>-->
			<!--			<li><span style="width: 60%;float:left;">The Action Guides</span> <span style="width: 40%;float:left;color:#FF0000">(Value ₹ 18,000)</span></li>-->
			<!--			</ul>-->
			<!--		</div>-->
						
			<!--		<div class="rght-text" style="float: left;margin-top: 3%;background: #fbc5c7;    padding: 3%;">-->
			<!--		<ul>-->
			<!--			<h4 style="color:#FF0000;font-weight: bold;letter-spacing: 1px;font-size: 20px;padding: 10px 0px;">1<sup>st</sup> Ten people to Register </h4>-->
			<!--			<li><span style="width: 60%;float:left;">Live Coaching</span> <span style="width: 40%;float:left;color:#FF0000">(Value ₹ 2.5 lacs)</span></li>-->
			<!--			<li><span style="width: 60%;float:left;">AMX Mastermind Meetings</span> <span style="width: 40%;float:left;color:#FF0000">(Value ₹ 20,000)</span></li>-->
			<!--			<li><span style="width: 60%;float:left;">The Action Guides</span> <span style="width: 40%;float:left;color:#FF0000">(Value ₹ 18,000)</span></li>-->
			<!--		</ul>-->
			<!--		</div>-->
			<!--	<div style="text-align:center;padding: 30px 0px 20px;font-weight: 400;color: #FF0000;font-size: 25px;width: 100%; display: inline-block;">Total Value: ₹ 1,68,997</div>-->
			<!--	</div>-->
			
			
			<div class="testimonials">
			    <h2>Testimonials</h2>
			    <h4> “One of the biggest things that worked for me in this program is that I have now been able to st my outcomes for this year in a way that I know I will achieve them beacuse they're in sync with my baseline and beliefs!”</h4>
			    <p style="color: #f87700;">- Rohit Kamble</p>
			    
			    <h4> “The best part of doing this program together is that apart from all the learning we're getting on how to coach, we're getting coached ourselves and we're now able to understand each other in a totally different way as a couple!we have understood what we've committed ourselves at and work on it! ”</h4>
			    <p style="color: #f87700;">- Ram & Aishwarya</p>
			    
			    <h4>“All I can say is,apart from the incredible system, I've made soe amazing friendsin the matermind meets!This is the real treasure!”</h4>
			    <p style="color: #f87700;">- Anant Singh</p>
			    
			</div>

				<div class="side-sec">
					<div clss="side-img1"> <img src="http://speaktofortune.com/go/images/secure.png"></div>
					<div class="side-Title">	
						<div class="side-txt1">Secure Payment</div>
						<div class="side-txt2">All orders are through a very secure network. Your credit card information is never stored in any way. We respect your privacy</div>
					</div>
					
				</div>	
				<div class="images-wrap">	
					
						<div class="img1"><img src="images/identity2.png"></div>
						<div class="img2"><img src="images/identity.png"></div>
						<div class="img3"><img src="images/identity1.png"></div>									
				</div>
				<div class="side-sec">
					<div class="side-Title">	
					<h3>need help?</h3>	
					<p>Email us Anytime: <a href="#" style="color: #FF0000;">support@arfeenkhan.com</a></p>
					</div>
				</div>	
				</div>	
			</div>
			<div class="clearfix"></div>
		</div>
		
	</div>


<script>
  function usdclick(){
    	$('.curcls').css('color','#000');
        $('#usdcur').css('color','#f87700');
        var mainp = 199;
        var partp = 106;
        var spamt = 59;
        var curr ='USD';
        allcurr(mainp,partp,curr,spamt);
    }
    function gbpclick(){
        $('.curcls').css('color','#000');
        $('#gbpcur').css('color','#f87700');
        var mainp = 168;
        var partp = 90;
        var spamt = 48;
        var curr ='GBP';
        allcurr(mainp,partp,curr,spamt);
    }
    function zarclick(){
        $('.curcls').css('color','#000');
        $('#zarcur').css('color','#f87700');
        var mainp = 3479;
        var partp = 1856;
        var spamt = 1107;
        var curr ='ZAR';
        allcurr(mainp,partp,curr,spamt);
    }
    function inrclick(){
        $('.curcls').css('color','#000');
        $('#inrcur').css('color','#f87700');
        var mainp = 14997;
        var partp = 8000;
        var spamt = 4500;
        var curr ='Rs';
        allcurr(mainp,partp,curr,spamt);
    }
    
    
    function allcurr(mainp,partp,curr,spamt){
        
        $('#toplabel').html(curr+' '+mainp+' Only');
        $('#bottomlabel').html(curr+' '+partp+' x (2 months)');
        $('#mycurr').val(curr);
        $("#topprice").val(mainp);
        $("#topgst").val(0);
        $("#bottomprice").val(partp);
        
        var y = document.getElementById("specal").value;
        //alert(y);
        if(y == 1){
             
            var x = document.getElementById("inr2").checked;
            $('#newptotal1').html(curr+' '+spamt);
            if(x==true){
                $('#ptotal').html(curr+' '+partp);
                if(curr == "Rs"){
                    var ttval = 14750;
                         $('#hidediv').show();
                         document.getElementById("myamount").value=ttval;
                         $('#totalamt').html(curr+' '+partp);
                        $('#newptotal1').html(curr+' '+spamt);
                        $('#pstotal').html(curr+' '+14750);
                        $('#totgst').html(curr+' 2250');
                    }else{
                        var ttval = partp + spamt;
                        $('#hidediv').hide();
                    document.getElementById("myamount").value=ttval;
                    $('#totalamt').html(curr+' '+partp);
                    $('#newptotal1').html(curr+' '+spamt);
                    $('#pstotal').html(curr+' '+ttval);
                    }
                
                }else{
                    $('#ptotal').html(curr+' '+mainp);
                    if(curr == "Rs"){
                    var ttval = 23006;
                         $('#hidediv').show();
                         document.getElementById("myamount").value=ttval;
                         $('#totalamt').html(curr+' '+mainp);
                        $('#newptotal1').html(curr+' '+spamt);
                        $('#pstotal').html(curr+' '+23006);
                        $('#totgst').html(curr+' 3509');
                    }else{
                        var ttval = mainp + spamt;
                        $('#hidediv').hide();
                    document.getElementById("myamount").value=ttval;
                    $('#totalamt').html(curr+' '+mainp);
                    $('#newptotal1').html(curr+' '+spamt);
                    $('#pstotal').html(curr+' '+ttval);
                    }
                    
                }
        }else{
          var x = document.getElementById("inr2").checked;
        if(x==true){
            document.getElementById("myamount").value=partp;
            $('#ptotal').html(curr+' '+partp);
             if(curr == "Rs"){
                 
                 $('#totalamt').html(curr+' '+partp);
                $('#pstotal').html(curr+' '+9440);
                 $('#totgst').html(curr+' 1440');
                $('#hidediv').show();
            }else{
                $('#hidediv').hide();
                $('#totalamt').html(curr+' '+partp);
                $('#pstotal').html(curr+' '+partp);
            }
            
        }else{
            document.getElementById("myamount").value=mainp;
            $('#ptotal').html(curr+' '+mainp);
            if(curr == "Rs"){
                 
                 $('#totalamt').html(curr+' '+partp);
                $('#pstotal').html(curr+' '+17696);
                 $('#totgst').html(curr+' 2699');
                $('#hidediv').show();
            }else{
                $('#hidediv').hide();
                $('#totalamt').html(curr+' '+mainp);
            $('#pstotal').html(curr+' '+mainp);
            }
            
        }  
        }
        
    }


</script>

<script>
document.getElementById('timer').innerHTML =
  10 + ":" + 00;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
      $('#timer').hide();
      $('.aftertime').show();
      //alert('timer completed')
      
  }
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script>


	
	
<script type="text/javascript">
$( document ).ready(function() {
    $('.cautioncards').show();
});



$(".inr").click(function(){
    $('.caution').hide();
    $('.cautioncards').hide();
    var checkamount= $('#topprice').val();
    var curr = $('#mycurr').val();
    if(curr == 'Rs'){
        $('#hidediv').show();
    }else{
        $('#hidediv').hide();
    }
    if(checkamount == 14997){
        $('#totgst').html(curr+' 2699');
        $('#pstotal12').html(curr+' 17696');
    }
    if(checkamount == 8000){
        $('#totgst').html(curr+' 1440');
        $('#pstotal12').html(curr+' 9440');
    }
    document.getElementById("myamount").value=checkamount;
    $('#totalamt').html(curr+' '+checkamount);
    $('#ptotal').html(curr+' '+checkamount);
    $('#pstotal').html(curr+' '+checkamount);

});

$(".inr2").click(function(){
    $('.caution2').hide();
    $('.cautioncards').show();
    var checkamount= $('#bottomprice').val();
    var curr = $('#mycurr').val();
    if(curr == 'Rs'){
        $('#hidediv').show();
    }else{
        $('#hidediv').hide();
    }
    if(checkamount == 14997){
        $('#totgst').html(curr+' 2699');
        $('#pstotal12').html(curr+' 17696');
    }
    if(checkamount == 8000){
        $('#totgst').html(curr+' 1440');
        $('#pstotal12').html(curr+' 9440');
    }
    document.getElementById("myamount").value=checkamount;
    $('#totalamt').html(curr+' '+checkamount);
    $('#ptotal').html(curr+' '+checkamount);
    $('#pstotal').html(curr+' '+checkamount);

});


function toggleCheckbox()
{
    var newabc = 1;
    if(document.getElementById("bump-offer").checked == true){
    $(".conclusion").append("<div class='product_name1' style='float: left;padding: 3% 1%;width: 70%;line-height: 20px;'>Apprentice MillionaireX plus :</div><div class='price' id='price12'><label id='newptotal1'>Rs.4500</label></div>");
   document.getElementById("specal").value=newabc;
    var checkamount= $('#myamount').val();
    var curr = $('#mycurr').val();
    if(checkamount == 14997 || checkamount == 17696){
    $('#totgst').html(curr+' 3509');
    $('#pstotal12').html(curr+' 23006');
    $('#totalamt').html(curr+'19497');
    document.getElementById("myamount").value=23006;    
    }
    if(checkamount == 8000){
    $('#totgst').html(curr+' 2250');
    $('#pstotal12').html(curr+' 14750');
      $('#totalamt').html(curr+'12500');
    document.getElementById("myamount").value=14750;    
    }
    if(checkamount == 199)
    {
        $('#newptotal1').html(curr+' '+59);
         //$('#pstotal12').html(curr+' 258');
          $('#totalamt').html(curr+'258');
         document.getElementById("myamount").value=258;
    }
    if(checkamount == 106)
    {
        $('#newptotal1').html(curr+' '+59);
        // $('#pstotal12').html(curr+' 165');
          $('#totalamt').html(curr+'165');
         document.getElementById("myamount").value=165;
    }
    
    if(checkamount == 90)
    {
        $('#newptotal1').html(curr+' '+48);
        // $('#pstotal12').html(curr+' 138');
          $('#totalamt').html(curr+'138');
         document.getElementById("myamount").value=138;
    }
    if(checkamount == 168)
    {
        $('#newptotal1').html(curr+' '+48);
        // $('#pstotal12').html(curr+' 216');
          $('#totalamt').html(curr+'216');
         document.getElementById("myamount").value=216;
    }
    
    if(checkamount == 3479)
    {
        $('#newptotal1').html(curr+' '+1107);
        // $('#pstotal12').html(curr+' 4586');
          $('#totalamt').html(curr+'4586');
         document.getElementById("myamount").value=4586;
    }
    if(checkamount == 1856 )
    {
        $('#newptotal1').html(curr+' '+1107);
        // $('#pstotal12').html(curr+' 2963');
          $('#totalamt').html(curr+'2963');
         document.getElementById("myamount").value=2963;
    }
    
    }
    else 
    {
        var newabc = 0;
         var curr = $('#mycurr').val();
          $('.product_name1').remove();
          $('#price12').remove();
        document.getElementById("specal").value=newabc; 
        var checkamount= $('#myamount').val();
            if(checkamount == 23006){
            $('#totgst').html(curr+' 2699');
            $('#totalamt').html(curr+' 17696');
            document.getElementById("myamount").value=17696;    
            }
            if(checkamount == 14750){
            $('#totgst').html(curr+' 1440');
            $('#totalamt').html(curr+' 9440');
            document.getElementById("myamount").value=17696;    
            }
            
    }
    
    
}
</script>
<script src="js/html5shiv.js"></script>
</body>
</html>