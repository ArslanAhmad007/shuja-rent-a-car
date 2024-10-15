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

article {
  --img-scale: 1.001;
  --title-color: black;
  --link-icon-translate: -20px;
  --link-icon-opacity: 0;
  position: relative;
  border-radius: 16px;
  box-shadow: none;
  background: #fff;
  transform-origin: center;
  transition: all 0.4s ease-in-out;
  overflow: hidden;
}

article a::after {
  position: absolute;
  inset-block: 0;
  inset-inline: 0;
  cursor: pointer;
  content: "";
}

/* basic article elements styling */
article h2 {
  margin: 0 0 18px 0;
  font-size: 1.9rem;
  letter-spacing: 0.06em;
  transition: color 0.3s ease-out;
}

figure {
  margin: 0;
  padding: 0;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}

article img {
  max-width: 100%;
  transform-origin: center;
  transform: scale(var(--img-scale));
  transition: transform 0.4s ease-in-out;
}

.article-body {
  padding: 24px;
}

article a {
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  color: #28666e;
}

article a:focus {
  outline: 1px dotted #28666e;
}

article a .icon {
  min-width: 24px;
  width: 24px;
  height: 24px;
  margin-left: 5px;
  transform: translateX(var(--link-icon-translate));
  opacity: var(--link-icon-opacity);
  transition: all 0.3s;
}

/* using the has() relational pseudo selector to update our custom properties */
article:has(:hover, :focus) {
  --img-scale: 1.1;
  --title-color: #28666e;
  --link-icon-translate: 0;
  --link-icon-opacity: 1;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}


/************************ 
Generic layout (demo looks)
**************************/

*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 48px 0;
  font-size: 1.2rem;
  line-height: 1.6rem;
  min-height: 100vh;
}

.articles {
  display: grid;
  max-width: 1200px;
  margin-inline: auto;
  padding-inline: 24px;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 24px;
}

@media screen and (max-width: 960px) {
  article {
    container: card/inline-size;
  }
  .article-body p {
    display: none;
  }
}

@container card (min-width: 380px) {
  .article-wrapper {
    display: grid;
    grid-template-columns: 100px 1fr;
    gap: 16px;
  }
  .article-body {
    padding-left: 0;
  }
  figure {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  figure img {
    height: 100%;
    aspect-ratio: 1;
    object-fit: cover;
  }
}

#pia{
    margin-bottom: 50px;
}
.content{
  background: rgba(0, 0, 0, 0.03);
  border-radius: 30px;
  margin-bottom: 80px;
  padding-top: 60px; 
  padding-left: 0px;
  padding-right: 0px;
  padding-bottom: 60px;
  margin-left: 10%;
  margin-right: 10%;
}

  #eress{
    max-width: 100%;
    max-height: 100%;
  }
  #eres{
    width: calc(100%-100px);
    height: 470px;
    border-radius: 30px;
    margin: 30px 60px;
  }
  .dawn p{
    font-size: 17px;
    line-height: 30px;
  }
  #newbtn{
    border-radius: 5px;
    font-size: 14px;
    font-weight: 800;
    line-height: 25px;
    margin-top: 10px;
    padding: 7px 30px;
    cursor: pointer:
  }
  .dawn{
    margin-top: 2%;
  }
  .dawn h3{
    font-size: 30px;
    margin-bottom: 4%;
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
        <h1>About Us</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>About Us</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<section class="about_us section-padding">
  <div class="container">
    <div class="section-header">


      <h2 class="text-center">About Us</h2>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12 dawn">
             <h3>Welcome to Rent a car</h3>
             <p>Welcome to Car Rental, Pakistan’s premier car rental service! We are proud to be the go-to provider for all your vehicle rental needs, offering a wide range of cars that cater to individuals, families, and businesses alike. Whether you're looking for a short-term rental for a quick trip or a long-term vehicle for an extended stay, Car Rental has the perfect car for you.</p>
             <p>At Car Rental, our goal is simple: to provide high-quality, affordable, and convenient car rental services across Pakistan. With a diverse fleet of well-maintained vehicles, ranging from compact cars for urban driving to spacious SUVs for family road trips, we ensure that every journey is comfortable and stress-free.</p>
             <a href="car-listing.php" class="btn btn-xs" id="newbtn">Book Now</a>
          </div>

          <div class="col-lg-6 col-md-6 col-12" id="eress">
            <img src="assets/images/new.jpg" alt="" class="img-fluid" id="eres">
            
          </div>
          

        </div>
      </div>


      
    </div>
  </div>
</section>
<!-- /About-us--> 

<section class="">
  <div class="">
    <div class="content">
    <div class="">
  <div id="pia">
    <h2 class="text-center">Our Awesome Goal's</h2>
  </div>

  <section class="articles">
  <article>
    <div class="article-wrapper">
      <figure>
        <img src="assets/images/vision.jpeg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Our Vision</h2>
        <p>
        With unbeatable rates and a commitment to quality, we cater to all your travel needs, from events to daily commuting.
        </p>
       
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="assets/images/mission.jpeg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Our Mission</h2>
        <p>
        Our mission at Pakistan Car Rentals: Redefine car rental standards with premium vehicles at nominal rates. Your journey our commitment to excellence.
        </p>
      
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="assets/images/strategy.jpeg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Our Strategy</h2>
        <p>
        Quality Fleet, Affordable Prices, 24/7 Support, Customer Satisfaction, Best Car Rental Service in Pakistan.
        </p>
       
      </div>
    </div>
  </article>
</section>

  </div>  
  </div>
  </div>
</section>




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