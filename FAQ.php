<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html lang="en">
<head>

<title>Car Rental Portal | FAQ</title>
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
  .wrapper{
    width: 75%;
    margin: 0 auto;
  }
  .accordion{
    background-color: white;
    color: rgba(0,0,0,0.8);
    cursor: pointer;
    font-size: 1.5rem;
    width: 100%;
    padding: 2rem 2.5rem;
    border: none;
    outline: none;
    transition: 0.4s;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: bold;
  }
  .accordion i{
    font-size: 1.6rem;
  }
  .active, .accordion:hover{
    background-color: #f1f7f5;
  }
  .pannel{
    padding: 0 2rem 2.5rem 2rem;
    background-color: white;
    overflow: hidden;
    background-color: #f1f7f5;
    display: none;
  }
  .pannel p{
    color: rgba(0,0,0,0.7);
    font-size: 1.2rem;
    line-height: 1.4;
    padding-top: 10px;
  }
  .faq{
    border: 1px solid rgba(0,0,0,0.2);
    margin: 10px 0;

  }
  .faq.active{
    border: none;
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
        <h1>FAQ</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>FAQ</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<section class="about_us section-padding">
  <div class="container">
    <div class="section-header">


      <h2 class="text-center">FAQ</h2>
      
      <div class="wrapper">
      <div class="faq">
        <button class="accordion">What is car rental? <i class="fa fa-angle-down" aria-hidden="true"></i></button>
      <div class="pannel">
        <p>the car rental system is very good</p>
      </div>
      </div>

      <div class="faq">
        <button class="accordion">how do i book the car? <i class="fa fa-angle-down" aria-hidden="true"></i></button>
      
      <div class="pannel">
        <p>the car rental system is very good</p>
      </div>
      </div>
      
      <div class="faq">
        <button class="accordion">Are there any age restrictions for renting a car? <i class="fa fa-angle-down" aria-hidden="true"></i></button>
      
      <div class="pannel">
        <p>the car rental system is very good</p>
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
<script>
 var acc = document.getElementsByClassName("accordion"); 
var i;
for(i = 0; i < acc.length; i++){
  acc[i].addEventListener("click", function(){
    this.classList.toggle("active");  // corrected classList
    this.parentElement.classList.toggle("active");  // corrected classList

    var pannel = this.nextElementSibling;
    if(pannel.style.display === "block"){  // corrected comparison
      pannel.style.display = "none";
    }
    else{
      pannel.style.display = "block";
    }
  });
}

</script>
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