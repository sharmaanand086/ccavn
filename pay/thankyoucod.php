<?php
session_start();
// var_dump($_SESSION);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thank You</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="css/thankyou.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/Fevicon.png">


<!-- Facebook Conversion Code for SMB Seminar Mumbai free buy checkout -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6034207592088', {'value':'0.00','currency':'INR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6034207592088&amp;cd[value]=0.00&amp;cd[currency]=INR&amp;noscript=1" /></noscript>


<!-- Facebook Pixel Code  no buy ret-->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '363160880504868');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=363160880504868&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>
<div class="blue-row">
	<div class="thankyou-title"><h1>Thank you</h1></div>
</div>
<div class="container">
	<div class="subtitle">
		<!-- <p>Thank you! You have successfully registered for The Secret Millionaire Blueprint Seminar Elite <strong>"VIP"</strong> Class. Someone will come to the given address to collect the payment. Your ticket will be sent to the respective email ID once the payment has been made.</p> -->
<p><b>Note</b> for Cash on Delivery orders Our Customer Care Expert will call you within 24 hours to confirm your order before it gets dispatched. Next Steps We have sent an order confirmation email at<b> <?php echo $_SESSION["email"];?> </b>In case of further clarification you can write us back at support@arfeenkhan.com. </p>
	</div>
	<div class="eventdtl">
		<span class="eventdtl-head">Event Details:</span><span>Date :</span> 21<sup>st</sup>-22<sup>nd</sup> May, 2016 <span>Time:</span>9:00 am to 7:00 pm</span>
	</div>
	<div class="venue">
		<span>Venue</span>: Hall No.2A, Bombay Exhibition and Convention Center, Nesco, Western Express Highway, Goregaon East, Mumbai, Maharashtra 400063
	</div>
</div>

</body>
</html>