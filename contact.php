<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Website Contact Form'; 
		$to = 'music@monashclubs.org'; 
		$subject = 'Message from Website Contact Form ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{page.title}}</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Amatic+SC:400,700|Dancing+Script:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="magnific-popup/magnific-popup.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="magnific-popup/jquery.magnific-popup.min.js"></script>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>

</head>

<body>

<!--NAVBAR-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img id="headerlogo" src="https://cloud.githubusercontent.com/assets/13402275/8978758/7df873c4-36e8-11e5-9f08-3c703bf99316.png" style="height: 80px;" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#signup" class="open-popup-link"><b>Sign Up</b></a></li>
        <li><a href="index.html">About Us</a></li>
        <li><a href="events.html">Events</a></li>
	<li><a href="news.html">News</a></li>
	<li><a href="promote.html">Promote Your Band and Gigs</a></li>
	<li><a href="sponsors.html">Sponsors</a></li>
	<li><a href="contact.php">Contact</a></li>
      </ul>
	<ul class="nav navbar-nav navbar-right">
        <li><a href="https://www.facebook.com/monashmss" target="_blank">
        	<!-- <img src="https://cloud.githubusercontent.com/assets/13402275/9187195/14d1648c-4011-11e5-832a-7e2d09a5f8e3.png" style="height: 54px;"> -->
        	<i class="fa fa-facebook-official" style="color: #FFF;"></i>
        </a></li>
        <li><a href="#" target="_blank">
        	<i class="fa fa-twitter" style="color: #FFF;"></i>
        </a></li>
      </ul>
    </div>
  </div>
</nav>
<!--NAVBAR END-->

<div id="signup" class="white-popup mfp-hide">
  <p>You don't have to be a student to join the MMSS, but in order to become a member and get connected with the Monash University music community, the easiest way to sign up is to <b>attend one of our events</b>. Membership is $7 or $2 if you're a MSA Card Holder. To be notified of future events, feel free to sign up to our mailing list below.</p>
  
  <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//facebook.us11.list-manage.com/subscribe/post?u=1d497063712df1f8ca7206041&amp;id=c3789e9515" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address </label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_1d497063712df1f8ca7206041_c3789e9515" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

</div>


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6 col-md-4" id="frontpagenews">



  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="https://cloud.githubusercontent.com/assets/13402275/9187567/90bf8994-4015-11e5-99ba-47c3103f3b7c.jpg" alt="Chania" width="100%" height="100%">
      </div>

      <div class="item">
        <img src="https://cloud.githubusercontent.com/assets/13402275/9187573/97b55fda-4015-11e5-8431-9ac3ea206a4c.jpg" alt="Chania" width="100%" height="100%">
      </div>

      <div class="item">
        <img src="https://cloud.githubusercontent.com/assets/13402275/9187584/b16dbfb2-4015-11e5-89f4-88e2ffcb6292.jpg" alt="Flower" width="100%" height="100%">
      </div>

      <div class="item">
        <img src="main-page-layout.jpg" alt="Flower" width="100%" height="100%">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    	<i class="fa fa-angle-left" style="position: absolute; top: 50%; z-index: 5; font-size: 150%;"></i>
      <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
      <i class="fa fa-angle-right" style="position: absolute; top: 50%; z-index: 5; font-size: 150%;"></i>
      <span class="sr-only">Next</span>
    </a>
  </div>






  	</div>




    <div class="col-sm-6 col-md-8" id="innercontainer">
    	<div id="content">

            <!-- CONTACT FORM START -->
        <form class="form-horizontal" role="form" method="post" action="contact.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
<!-- END CONTACT FORM -->

      </div>
    </div>
	</div>

	<div class="row">
		<div class="col-sm-12" id="footer">
			<footer id="copyright"></footer>
		</div>
	</div>
</div>


<script>
document.getElementById("copyright").innerHTML =
"<p>Copyright &copy;  " + new Date().getFullYear() + " Monash Music Students' Society. All rights reserved.</p>";
$('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
});
</script>





</body>
</html>
