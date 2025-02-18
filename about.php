<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!-- Css Link -->
<!-- FOR MORE PROJECTS visit: codeastro.com -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Title -->
<title>Real Estate PHP</title>
</head>
<body>

<!--	Page Loader -->
<!-- <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div> -->
<!-- FOR MORE PROJECTS visit: codeastro.com -->
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>About US</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
         <!--	Banner   --->
		 <!-- FOR MORE PROJECTS visit: codeastro.com -->
        <!--	About Our Company -->
        <div class="full-row">
            <div class="container">
                
				
				<?php 
					
					$query=mysqli_query($con,"SELECT * FROM about");
					while($row=mysqli_fetch_array($query))
					{
				?>
				<div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4"><?php echo $row['1'];?></h3>
                    </div>
                </div>
                <div class="row about-company">
                    <div class="col-md-12 col-lg-7">
                        <P>Welcome to Real Estate, where your real estate aspirations come to life with our top-rated services and unparalleled expertise. With a wealth of experience in the real estate industry, our dedicated team of professionals is committed to providing exceptional service and personalized attention to every client.<br>

At Real Estate, we understand that buying, selling, or renting a property is more than just a transaction it's a significant life event that requires careful consideration and expert guidance. Our seasoned agents are equipped with in-depth market knowledge and a keen understanding of the latest trends, ensuring you make informed decisions that align with your goals.<br>

Our client-first approach sets us apart. We take the time to listen to your needs, preferences, and concerns, crafting tailored solutions that meet your unique requirements. Whether you’re a first-time homebuyer, looking to sell your property, or seeking lucrative investment opportunities, we are here to support you every step of the way.<br>

Our comprehensive range of services includes detailed market analysis, strategic marketing plans, and seamless transaction management. We leverage cutting-edge technology and innovative marketing strategies to give your property maximum exposure and attract the right buyers or renters. For buyers, we offer a curated selection of properties that match your criteria, ensuring you find the perfect home or investment.<br>

We pride ourselves on our integrity, professionalism, and dedication to excellence. Our commitment to transparent communication and ethical practices has earned us a reputation for reliability and trustworthiness in the industry. We build lasting relationships with our clients, many of whom return to us for their future real estate needs and refer us to their friends and family.<br>

At Real Estate, we believe in making the real estate process as smooth and enjoyable as possible. Our team is passionate about helping you achieve your real estate dreams and is always ready to go the extra mile to ensure your satisfaction. Discover the difference of working with a team that genuinely cares about your success and is dedicated to delivering outstanding results.<br>

Thank you for considering  for your real estate needs. We look forward to the opportunity to work with you and help you navigate the exciting journey of buying, selling, or renting property.

</P>
                    </div>
                    <div class="col-md-12 col-lg-5 mt-5">
                        <div class="about-img"> <img src="admin/upload/<?php echo $row['3'];?>" alt="about image"> </div>
                    </div>
                </div>
				
				<?php } ?>
				
            </div>
        </div>
        <!--	About Our Company -->        
        
       <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
</body>

</html>