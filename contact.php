<?php
 include("DB.php");
 session_start();
 $token = md5(uniqid(rand(), TRUE));
 $_SESSION['token'] = $token;
 $_SESSION['token_time'] = time();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>Ali Brothers || Accessories and Fashion Solutions || We Bring Design Together with Technology</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">


  <!-- Colors -->
  <!-- <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green">
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="light-red">
  <link rel="stylesheet" type="text/css" href="css/colors/light-blue.css" title="light-blue">
  <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow">
  <link rel="stylesheet" type="text/css" href="css/colors/light-green.css" title="light-green">
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue"> -->
  

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class="preloader">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  

<!--
Fixed Navigation
==================================== -->
<section class="header  navigation">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <nav class="navbar navbar-expand-md">
               <a class="navbar-brand" href="index.html">
                  <img src="images/logo.png" width="120px" alt="logo">
               </a>  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="tf-ion-android-menu"></span>
            </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item dropdown btn-group">
                  <a href="services.html">Services <i class="nav-link dropdown-toggle"
                      style="float: right;padding: 4px 0px;" href="services.html" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </i></a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="services.html#hang">Hang Tag</a>
                                        <a class="dropdown-item" href="services.html#tickets">Price tickets</a>
                                        <a class="dropdown-item" href="services.html#barcode">Barcode Sticker</a>
                                        <a class="dropdown-item" href="services.html#packaging">Packaging</a>
                                        <a class="dropdown-item" href="services.html#label">Label</a>
                                        <a class="dropdown-item" href="services.html#narrow">Narrow Fabric Production</a>
                                        <a class="dropdown-item" href="services.html#elastic">Jaquard Elastic</a>
                                        <a class="dropdown-item" href="services.html#heat">Heat Transfer Labels</a>
                  </div>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="certification.html">Certification</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>

                <li class="nav-item">
                  <a style="color: white;border-radius: 45px;" href="./Ali-Profile.pdf" target="_blank" class="btn btn-main">Company Profile</a>
                </li>
              </ul>
         </div>
      </nav>
      
   </div>
</div>
</div>
</section>

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Contact Us</h2>
				<nav aria-label="breadcrumb mx-auto" role="navigation">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
</section>

<!-- Srart Contact Us
		=========================================== -->		
    <section class="contact-us section bg-gray" id="contact">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="title text-center">
              <h4>Drop us a note</h4>
              <h2>Contact Us.</h2>
              <span class="border"></span>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p> -->
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Contact Details -->
          <div class="col-12 col-md-6">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d904.3521067993371!2d67.06840972919244!3d24.95221509900067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb34098b8dbc085%3A0xf6359c5443fb010e!2sPlot%20CI%2042%2C%20Gulshan-e-Waseem%20Sector%2016%20A%20Buffer%20Zone%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh!5e0!3m2!1sen!2s!4v1632781279117!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
  
          </div>
          <!-- / End Contact Details -->
            
          <!-- Contact Form -->
          <div class="contact-form col-12 col-md-6 " >
          <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <form id="formdb" method="post" action="mail_processor.php" role="form">
            
              <div class="form-group">
                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
              </div>
              
              <div class="form-group">
                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
              </div>
              
              <div class="form-group">
                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
              </div>
              
              <div class="form-group">
                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
              </div>
              
              <div id="mail-success" class="success">
                Thank you. The Mailman is on His Way :)
              </div>
              
              <div id="mail-fail" class="error">
                Sorry, don't know what happened. Try later :(
              </div>
              <input type="hidden" id="token" name="token_contact" value="<?php echo $token; ?>" />
              <div class="g-recaptcha" data-sitekey="6LescdAcAAAAAAjrwHVtlqtJQlWlrw-jiN6dk6fj"></div>
                    
                            <br>
                            <input type="hidden" name="btnsendmessage" value="btnsendmessage" />
              <div id="cf-submit">
                <button type="submit" name="btnsendmessage" value="btnsendmessage" id="contact-submit" class="btn btn-transparent">Send Message</button>
              </div>						
              
            </form>
          </div>
          <!-- ./End Contact Form -->
        </div> <!-- end row -->
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="address-block contact-meta-block">
              <i class="tf-ion-android-pin"></i>
              <h4>Our Location</h4>
              <p>
                Cl-42,Sector 16-A Behind Ali Pride,<br> Buffer Zone,North Karachi              
              </p>
              
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="phone-block contact-meta-block">
              <i class="tf-ion-ios-telephone"></i>
              <h4>Call Us</h4>
              <p>
                +92 300 2378125 <br>
                +92 213 6900042
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="social-icons-block contact-meta-block">
              <i class="tf-ion-ios-contact"></i>
              <h4>E-Mails</h4>
              <p>
                info@ali-brothers.com
              </p>
            </div>
          </div>
        </div>
        
      </div> <!-- end container -->
    </section> <!-- end section -->






<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>About</h3>
          <p><span style="color: #494dc2;font-weight: bolder;font-size: large;">Ali-Brothers</span> is a professional name in the development and production of fabric lace trims, threads and brand/care lables, established in 2017</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Our Services</h3>
          <ul>
          <li><a href="services.html#hang">Hang Tag</a></li>
                            <li><a href="services.html#tickets">Price Tickets</a></li>
                            <li><a href="services.html#barcode">Barcode Sticker</a></li>
                            <li><a href="services.html#packaging">Packaging Department</a></li>
                            <li><a href="services.html#label">Labelling Department</a></li>
                            <li><a href="services.html#narrow">Narrow Fabric</a></li>
                            <li><a href="services.html#elastic">Jaqard Elastic</a></li>
                            <li><a href="services.html#heat">Heat Transfer Labels</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="faq.html">FAQ's</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="t&c.html">Terms & Conditions</a></li>
            <li><a href="pp.html">Privacy Policy</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Subscribe Now</h3>
          <form class="subscribe-form">
              <div class="form-group">
                <input type="email" class="form-control" id="emailsub" aria-describedby="emailHelp"
                  placeholder="Enter email">
              </div>
              <button type="button" onclick="subscribe()" class="btn btn-main-sm">Subscribe Now</button>
            </form>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright &copy; <a href="index.html" target="_blank">Ali Brothers</a> <script>document.write(new Date().getFullYear());</script>. All rights reserved.</h5>
    <h6>Design and Developed by <a href="https://nth-x-solution.web.app" target="_blank">Nth-x-Solutions</a></h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->


    
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.7 -->
    <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Portfolio Filtering -->
    <script src="plugins/mixitup/dist/mixitup.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="js/demo.js"></script>
  <script src="js/plugins/bootstrap-notify.js"></script>
    <!-- Custom js -->
    <script src="js/script.js"></script>

    <script>
      $('#formdb').submit(function() {
			// document.getElementById("pd").innerText = document.getElementsByClassName("Editor-editor")[0].innerHTML
			var textreg1 = /^[A-Za-z ]{3,}$/;
			var textreg2 = /^[A-Za-z ]{3,}$/;
			var numberreg = /[0-9]{1,2}/; //2 digit Number
			var cnicreg = /[0-9]{5}-[0-9]{7}-[0-9]{1}/;
			var contactnumberreg = /[0-9]{11}/;
			var addressreg = /[a-zA-Z0-9,-_ ]{1,}/;
			var emailreg = /[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}/;
			var passwordreg = /[a-zA-Z0-9!@#\$%\^&\(*]{8,}/;

			var tsi = document.getElementById('token').value;
			var name = document.getElementById('name').value
			var email = document.getElementById('email').value
			var sub = document.getElementById('subject').value
			var msg = document.getElementById('message').value

			var request;
			var auth = "0";
			var cansubmit = false;
			if (textreg1.test(name)) {

					if (emailreg.test(email)) {

						if (request) {
							request.abort();
						}
						request = $.ajax({
							url: "./php_Scripting.php",
							type: "post",
							data: {
								token_user: tsi,
								contactid: "9898783"
							}
						});

						request.done(function(response, textStatus, jqXHR) {
							if (response == "Authenticated") {
								auth = "1";
							}
							if (response == "notmatch") {
								auth = "2";
							}
							if (response == "sessionexpire") {
								auth = "3";
							}
              
						}).then(function(result) {
							if (auth == "1") {
								
									if (sub != "") {
										if (msg != "") {
											return true;
										} else {
											demo.showNotification("bottom", "right", "<b>Submit Failed :</b> Can't submit without message")
											return false
										}
									} else {
										demo.showNotification("bottom", "right", "<b>Submit Failed :</b> Subject can't be blank")
										return false
									}
								
							} else if (auth == "2") {
								demo.showNotification("bottom", "right", "<b>Submit Failed :</b> Session Not Match")
								return false
							} else if (auth == "3") {
								demo.showNotification("bottom", "right", "<b>Submit Failed :</b> Session Expired refresh page")
								return false
							} else {
								demo.showNotification("bottom", "right", "<b>Submit Failed :</b> Email Already Existed")
								return false
							}
						}).then(function(result) {
							if (result == true) {
								document.getElementById("formdb").submit();
							}
						});


					} else {
						demo.showNotification("bottom", "right", "<b>Submit Failed :</b> Invalid Email ")
						return false
					}
			} else {
				demo.showNotification("bottom", "right", "<b>Submit Failed :</b> Something Wrong at  Name Eg=min 3 characters")
				return false
			}
			return false;
		});
    </script>
  </body>
  </html>
