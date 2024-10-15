<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html lang="en">
<head>

<title>Car Rental Portal | Page details</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<style>
    #sse{
       /* border: 2px solid rgba(0, 0, 0, .1); */
       padding: 0 2rem 2.5rem 2rem;
       box-shadow: 2px solid rgba(0, 0, 0, .1);
    }
    li span, p span{
        font-weight: bold;
    }
    .flame{
        font-weight: bold;
        font-size: 2rem;
    }
    .wrapper{
    width: 100%;
    margin: 0 15px;
    font-size: 16.5px;
  }
  ul li{
    font-size: 16.5px;
  }
  .wrapper h3{
    padding: 8px 0;
  }
  .inform{
    padding: 15px 0px;
  }
</style>
</head>
<body>
<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>

<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Term of use</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Term of use</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<section class="about_us section-padding">
  <div class="container">
    <div class="section-header">


      <h2 class="text-center">Term of use</h2>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12" id="sse">
            <div class="wrapper">
            <div>
            <p>Welcome to Car Rental! These Terms of Use govern your access to and use of our website and services. By using our website, you agree to these terms. Please read them carefully before proceeding.</p>
            </div> 
            <h3>Acceptance of Terms</h3>
            <p>By accessing or using the website, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use and any applicable laws. If you do not agree to these terms, please do not use our website or services.</p>
            <h3>Services Offered</h3>
            <p>Car Rental provides vehicle rental services, subject to availability and terms outlined in individual rental agreements. Our services include:</p>
            <ul>
                <li><span>Vehicle Reservations:</span> You can browse available vehicles, make reservations, and confirm bookings.</li>
                <li><span>Payment Processing:</span> Secure online payments for rental fees and deposits.</li>
                <li><span>Customer Support:</span> Assistance with bookings, cancellations, and inquiries.</li>
            </ul>
            <h3>User Eligibility</h3>
            <p>To use our services, you must:</p>
            <ul>
                <li>Be at least 18 years of age.</li>
                <li>Hold a valid driver’s license in Pakistan (or internationally recognized license for foreign users).</li>
                <li>Provide accurate and complete information during the registration and booking process.</li>
                <li>Comply with all local traffic laws and regulations when operating a rented vehicle</li>
            </ul>
            <h3>Account Registration</h3>
            <p>To make a booking, you may be required to create an account by providing your name, contact information, and payment details. You are responsible for maintaining the confidentiality of your account information and for all activities that occur under your account.</p>
            <div>
            <p>You agree to notify us immediately of any unauthorized use of your account or any breach of security.</p>
            </div>
            <h3>Reservations and Cancellations</h3>
            <p class="flame">a. Reservation Process</p>
            <p>When you make a reservation through our website, it is subject to availability. Car Rental reserves the right to decline or cancel any booking for reasons including but not limited to vehicle availability or incomplete payment.</p>
            <p class="flame">b. Cancellations</p>
            <ul>
                <li><span>User-Initiated Cancellations:</span> You may cancel a reservation in accordance with our cancellation policy, which is available during the booking process.</li>
                <li><span>Company-Initiated Cancellations:</span> We reserve the right to cancel bookings due to unforeseen circumstances, safety issues, or non-compliance with these Terms of Use.</li>
            </ul>
            <h3>Payments and Fees</h3>
            <p class="flame">a. Payment Methods</p>
            <p></p>
            <p class="flame">b. Rental Charges</p>
            <p>Rental charges, including applicable taxes, fees, and security deposits, will be displayed during the booking process. You agree to pay all charges associated with the rental, including damages, late return fees, or traffic violations.</p>
            <h3>Vehicle Use and Restrictions</h3>
            <p>By renting a vehicle from us, you agree to the following conditions:</p>
            <ul>
                <li>You will operate the vehicle in accordance with local traffic laws and safety standards.</li>
                <li>You will not use the vehicle for unlawful purposes, such as transporting illegal goods or engaging in unsafe driving practices.</li>
                <li>You are responsible for the care of the vehicle during the rental period and agree to return it in the same condition as when you received it, subject to normal wear and tear.</li>
                <li>You are responsible for all traffic fines, parking tickets, and any other violations incurred during the rental period.</li>
            </ul>
            <h3>Limitation of Liability</h3>
            <p>Car Rental is not liable for any damages or injuries arising from the use of our vehicles, including but not limited to:</p>
            <ul>
                <li>Personal injury or property damage caused by accidents.</li>
                <li>Loss of personal belongings left in the vehicle.</li>
                <li>Delays or cancellations due to vehicle unavailability or technical issues.</li>
            </ul>
            <p>You acknowledge that vehicle use is at your own risk and agree to indemnify Car Rental from any claims, damages, or losses arising from your rental.</p>
            <h3>Intellectual Property</h3>
            <p>All content on the Car Rental website, including logos, text, graphics, images, and software, is the property of Car Rental or its licensors. You are not permitted to reproduce, distribute, or otherwise use our content without prior written permission.</p>
            <h3>Privacy</h3>
            <p>Your use of our website is also governed by our <a href="privacy.php">Privacy Policy</a>, which explains how we collect, use, and protect your personal information.</p>
            <h3>Third-Party Links</h3>
            <p>Our website may contain links to third-party websites. These links are provided for convenience, and we are not responsible for the content, privacy practices, or availability of these external sites. We recommend reviewing the terms and conditions of any third-party websites you visit.</p>
            <h3>Governing Law</h3>
            <p>These Terms of Use are governed by and construed in accordance with the laws of Pakistan. Any disputes arising under these terms will be subject to the exclusive jurisdiction of the courts in Pakistan.</p>
            <h3>Changes to These Terms</h3>
            <p>Car Rental reserves the right to modify or update these Terms of Use at any time without prior notice. The most current version will be posted on our website, and continued use of the website after any changes signifies your acceptance of the updated terms.</p>
            <h3>Contact Information</h3>
            <p>If you have any questions or concerns about these Terms of Use, please contact us at:</p>
            <div class="inform">
              <p>Car Rental</p>
              <p>Email: <a href="mailto:stormfront641@gmail.com">stormfront641@gmail.com</a> </p>
              <p>Phone: 03430380905</p>
            </div>

              </div>

          </div>

        
          

        </div>
      </div>
    </div>
  </div>
</section>
<!-- /About-us--> 





<<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:12 GMT -->
</html>