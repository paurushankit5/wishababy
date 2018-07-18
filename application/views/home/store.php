<?php
	$cat		=	$array['cat'];
	$seo		=	$array['seo'];
	//$singlemenu	=	$array['singlemenu'];
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
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/list.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/new.css">
	<link rel="shortcut icon" href="<?= base_url('img/logo2.png');?>">

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
		.parallax { 
   
   

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.homeservice{
			border:2px solid gray;
			border-radius:20px;
			height:290px;
			margin:10px;
			margin-bottom:40px;
			padding:10px;
			box-shadow: 20px 20px 15px #888888;
		}
		.homeservice h3{
			font-size:25px;
		}
 	</style>
	</head>
	<body>
	<?php
		include('includes/header.php');
		include('includes/header2.php');
	?>
	 <ol class="breadcrumb pull-right" style="font-size:12px;">
	  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
	  <li class="breadcrumb-ite activem">Store</li>
	   
	</ol>
	<section id="fh5co-pricing" data-section="pricing" style="margin-top:0px;" >
		<div class="fh5co-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate" style='font-family: "Goudy Old Style",Garamond,"Big Caslon","Times New Roman",serif;color:#d7634f;'>
						<b>WishABaby Store</b>
						</h2>
						 
					</div>
				</div>

				<div class="row" style="width:100%;">
					<div class="pricing">
						<?php
							if(count($cat))
							{
								$i=0;
								
								foreach($cat as $x)
								{
									if($i%3==0)
									{
										echo "<div class='row'>";
									}
									$i++;
									?>
										<div class="col-md-4" style="padding-left:50px;">
											 
											<div class="price-box to-animate-2 popular" style="height:420px;">
												<h2 class="pricing-plan pricing-plan-offer">	<?= $x['cat_name'];?></h2>
												<a href="<?= base_url('store/'.$x['cat_slug']);?>">
												<img style="width:100%;height:200px;" class="img-reponsive" src="<?= base_url('img/cat/'.$x['cat_id'].'/'.$x['cat_image']);?>" alt="<?= $x['cat_name'];?>">
												</a>
												<p><?= $x['cat_details'];?></p>
												<a href="<?= base_url('store/'.$x['cat_slug']);?>" class="btn btn-select-plan btn-sm">View More</a>
											</div>
											 
										</div>
									<?php
									if($i%3==0)
									{
										echo "</div>";
									}
								}
							}
						?>
						

						 
					</div>
				</div>

				 

			</div>
		</div>
	</section>
	 
	<div class="getting-started getting-started-2 parallax" style="background-image: url(<?= base_url();?>img/4.jpg);background-size:cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 to-animate">
					<h3>Getting Started</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-6 to-animate-2">
					<div class="call-to-action text-right">
						<a href="#" class="sign-up">Sign Up For Free</a>
					</div>
				</div>
			</div>
		</div>
	</div>
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

