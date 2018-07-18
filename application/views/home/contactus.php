<?php
	//$country	=	$array['country'];
	$seo		=	$array['seo'];
	 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $seo['seo_title'];?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= $seo['seo_description'];?>" />
	<meta name="keywords" content="<?= $seo['seo_keyword'];?>" />
	<meta name="author" content="Wishababy.com" />

  
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/owl.theme.default.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/hover.css">

	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/list.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/new.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/hover.css">
	<link rel="shortcut icon" href="<?= base_url('img/logo2.png');?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Modernizr JS -->
	<script src="<?= base_url('assets/front/');?>js/modernizr-2.6.2.min.js"></script>
	 
	<style>
		.navbar-default .navbar-nav > li.dropdown:hover > a, 
		.navbar-default .navbar-nav > li.dropdown:hover > a:hover,
		.navbar-default .navbar-nav > li.dropdown:hover > a:focus {
			background-color: rgb(231, 231, 231);
			color: rgb(85, 85, 85);
		}
		li.dropdown:hover > .dropdown-menu {
			display: block;
		}
		.inputfield{
			border:3px solid gray;
			border-radius:30px;
			height:50px;
		} 
     	
 	</style>
	</head>
	<body>
	<?php
		include('includes/header.php');
		//include('includes/slider.php');
	?>
 
	 
	 
 
	<br>
	<br>
	<section id="fh5co-explore" data-section="explore">
		 
		<div class="container">
			<div class="row">
				<h1 class="text text-justify text-center" style="color:#3f5267;text-align:center"><b>CONTACT US</b></h1>
				<hr>
				<div class="col-md-4 col-sm-4 col-xs-12" >
					<p>WISHABABY PVT. LTD.</p>
					<p>
						<i class="fa fa-map-marker" aria-hidden="true"></i> Patel Nagar, A-316 <br>
						Near Rajeev Chawk Metro Station,<br>
						New Delhi - 560100 , INDIA 
					 	<br>
						<i class="fa fa-envelope" aria-hidden="true"></i> <b>info@wishabbay.com</b><br>
						<i class="fa fa-phone aria-hidden="true"></i> <b>+91-99993-18757</b><br>
					</p>
				</div>
			 	<div class="col-md-8 col-sm-8 col-xs-12" style="border-left:2px solid #3f5267;padding:20px 10px 50px 10px;">
			 		<form class="form-horizontal" method="post" action="<?= base_url('home/contactform');?>">
			 			<div class="row">
			 				<div class="col-sm-4">
			 					<input type="text" name="contactname" class="form-control inputfield" placeholder=" Name"/>
			 				</div>
			 				<div class="col-sm-4">
			 					<input type="email" name="contactemail" class="form-control inputfield" placeholder=" Email"/>
			 				</div>
			 				<div class="col-sm-4">
			 					<input type="text" class="form-control inputfield" placeholder="Mobile" name="contactmobile">
			 				</div>
			 			</div>
			 			<div class="row">
			 				<div class="col-sm-12">
			 					<br>
			 				 	
			 					<textarea rows="6"class="form-control inputfield" name="contactmessage" placeholder="Message"></textarea>
			 					<br>
			 					<input type="submit" style="border-radius:30px;background: #3f5267" class="btn btn-primary btn-block"/>
			 				</div>
			 			</div>
			 		</form>
			 	</div>
				 
				
			</div>
			  
		</div>		
	</section>
	
	

 
	 
	<?php
		include('includes/footer.php');
	?>
	
	 
	
	<!-- jQuery -->
	<script src="<?= base_url('assets/front/');?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?= base_url('assets/front/');?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url('assets/front/');?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?= base_url('assets/front/');?>js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?= base_url('assets/front/');?>js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="<?= base_url('assets/front/');?>js/owl.carousel.min.js"></script>
	 
	<script src="<?= base_url('assets/front/');?>js/main.js"></script>

	</body>
</html>

