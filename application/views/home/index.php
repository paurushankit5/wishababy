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
		#fh5co-home .text-inner
		{
			vertical-align: top;
			padding-top:100px;
		}
		
		.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.hovereffect:hover .overlay {
  background-color: rgba(170,170,170,0.4);
}

.hovereffect h2, .hovereffect img {
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}

.hovereffect:hover img {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(1.5);
  -ms-transform: scale(1.5);
  transform: scale(1.5);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
  font-weight: normal;
  height: 85%;
  width: 85%;
  position: absolute;
  top: -20%;
  left: 8%;
  padding: 70px;
}

.hovereffect:hover a.info {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  background-color: rgba(0,0,0,0.4);
}
 	</style>
	</head>
	<body>
	<?php
		include('includes/header.php');
		include('includes/slider.php');
	?>
	  
	 <div class="btn-group btn-group-justified hidden-xs" style="">
	  <a href="<?= base_url('Consult-An-Expert/Expert-Directory');?>" class="btn btn-primary " style="background:#3f5267;height:100px;">Consult An Expert <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
	  <a href="<?= base_url('findaclinic');?>" class="btn btn-primary "  style="background:#3f5267;height:100px;"> Find A Clinic <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
	  <a href="<?= base_url('askaquestion');?>" class="btn btn-primary " style="background:#3f5267;height:100px;">Ask a Free Question <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
	  <a href="<?= base_url('getaquote');?>" class="btn btn-primary"  style="background:#3f5267;height:100px;">Get A quote <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
	</div>
	 
	<section id="fh5co-explore" data-section="explore">
		 
		<div class="container">
			<div class="row">
				<h4 class="text text-justify text-center" style="color:#3f5267;text-align:center"><b>WHERE ARE YOU IN YOUR JOURNEY TO PARENTHOOD?</b></h4>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom:50px;" >
					<div class="hovereffect">
						<img class="img-responsive"  style="height:200px;" src="<?= base_url('img/a.jpg');?>" alt="Dealing With Infertiity">
						<div class="overlay">
						   <h2>Dealing With Infertiity</h2>
						   <a class="info" href="<?= base_url('wish/information-desk/infertility');?>"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom:50px;">
					<div class="hovereffect">
						<img class="img-responsive"  style="height:200px;" src="<?= base_url('img/b.jpg');?>" alt="Fertility Health">
						<div class="overlay">
						   <h2>Fertility Health</h2>
						   <a class="info" href="<?= base_url('wish/information-desk/natural-fertility');?>"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom:50px;">
					<div class="hovereffect">
						<img class="img-responsive" style="height:200px;" src="<?= base_url('img/c.jpg');?>" alt="Getting Pregnant">
						<div class="overlay">
						   <h2>Getting Pregnant</h2>
						   <a class="info" href="<?= base_url('wish/pregnancy/pregnancy-important-aspects');?>"></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="margin-bottom:50px;">
					<div class="hovereffect">
						<img class="img-responsive"  style="height:200px;" src="<?= base_url('img/d.jpg');?>" alt="New to IVF">
						<div class="overlay">
						   <h2>New to IVF</h2>
						   <a class="info" href="<?= base_url('wish/clinics-and-services/role-of-ivf-centers-fertility-clinics');?>"></a>
						</div>
					</div>
				</div>
				
			</div>
			<div class="row">
				<h4 class="text text-justify text-center" style="color:#3f5267;text-align:center"><b>What's New?</b></h4>
				<div class="col-sm-7">
					<iframe width="100%" height="435px;"
					src="https://www.youtube.com/embed/TTFKFe6Ttzo">
					</iframe>
				</div>
				<div class="col-sm-5">
					<div class="row">
						<div class="hovereffect" style="margin-bottom:30px;">
							<img class="img-responsive"  style="height:200px;width:100%;" src="<?= base_url('img/e.jpg');?>" alt="Fertility Health">
							<div class="overlay">
							   <h2>Understanding Fertility treatment Options</h2>
							   <a class="info" href="<?=base_url('wish/information-desk/infertility-causes-and-treatment');?>"></a>
							</div>
						</div>
						 
						<div class="hovereffect"> 
							<img class="img-responsive"  style="height:200px;width:100%;" src="<?= base_url('img/f.png');?>" alt="Fertility Health">
							<div class="overlay">
							   <h2>Supporting Your spouse during IVF treatment</h2>
							   <a class="info" href="#"></a>
							</div>
						</div>
					</div>
				</div>
			</div>	 
		</div>		
	</section>
	

	<div class="getting-started getting-started-1 parallax" >
		<div class="container">
			<div class="row">
				<div class="col-md-6 to-animate" style="margin-bottom:20px;">
					 <div class="col-sm-10 col-sm-offset-1" style="background-color:#3f5267;padding:20px;40px;">
						<p class="text text-center">Over 100+ clinics across various cities in India</p>
						<div class="call-to-action">
							<center><a href="<?= base_url('findaclinic');?>" style="padding:15px;border-radius:0px;margin-bottom:20px;"  class="btn btn-success">Find a Clinic</a></center>
						</div>
					 </div>
				</div>
				<div class="col-md-6 to-animate">
					 <div class="col-sm-10 col-sm-offset-1" style="background-color:#3f5267;padding:20px;40px;">
						<p class="text text-center">Over 1000+ questions anwered within minutes</p>
						<div class="call-to-action">
							<center><a href="<?= base_url('Questions/ViewQuestions');?>" style="padding:15px;border-radius:0px;margin-bottom:20px;"  class="btn btn-primary">View Questions</a>
							<a href="<?= base_url('askaquestion');?>" style="padding:15px;border-radius:0px;margin-bottom:20px;"   class="btn btn-primary">Ask a Question</a></center>
						</div>
					 </div>
				</div>
				 
			</div>
		</div>
	</div>
	
	

	<section id="fh5co-services" data-section="services">
		<div class="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">The WAB Advantage</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">
									At WishABaby, we always strive to ensure happiness for you, which is far beyond supporting you in realizing your dream of parenthood. 
									While we assure you to provide you our best, the following are our USPs to help you make an informed decision.
								</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="box-services">
							<i class="fa fa-desktop to-animate-2"></i>
							
							<div class="fh5co-post to-animate">
								<h3>A Reliable and Dedicated Platform</h3>
								<p class="text text-justify">
								We’re not a statistics-based team that focuses on building numbers and profits. For us, it is your happiness and satisfaction that we count as our ROI. At WishABaby, 
								our primary focus is getting you in touch with the best IVF experts so as to take your chances of successful conception to the maximum possible.
								</p>
							</div>
						</div>

						<div class="box-services">
							<i class="icon-energy to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>A One-Stop Solution </h3>
								<p  class="text text-justify">
									Right from the phase you start planning your baby till the time your baby starts going to school, and even after that, 
									WishABaby will stand strong with you at every single step along the path. Whether it is about connecting you to the best of IVF experts,
									providing you with the important know-how on your journey to parenthood, guiding you on the necessary pre and post-natal nutrition, 
									or supplying you with the necessary products for your baby and yourselfx.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-services">
							<i class="fa fa-user-md to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Informed Experts</h3>
								<p  class="text text-justify">
								While we help you conceive, we also help you understand the entire phase in detail with our informative write-ups especially prepared upon consultation with experts. You can look up to WishABaby for any and all information you need.
								We will help you stay informed about all the necessary aspects you should be aware of to ensure good health for your baby 
								as well as yourself.
								</p>
							</div>
						</div>

						<div class="box-services">
							<i class="fa fa-handshake-o to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Hand-Holding Support and Guidance </h3>
								<p  class="text text-justify">Our job does not end at just connecting you with IVF experts. At WishABaby,
								we take it as our duty to support you with thorough hand-holding guidance throughout the path – Be it while searching for an IVF expert, during the 9 months of your pregnancy, 
								or upon arrival of your little bundle of joy, your baby.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-services">
							<i class="fa fa-cloud to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Help You Know Your Baby Better</h3>
								<p  class="text text-justify">Parenthood is indeed a beautiful feeling, and to make you experience this special bliss right from the very first day you come to know about your pregnancy, we provide you with regular updates about the baby’s development in the womb. We will keep you posted with various milestones that your baby will touch upon as it grows. You’ll be in a better position to understand as well as track the growth of your baby.  </p>
							</div>
						</div>

						<div class="box-services">
							<i class="fa fa-shopping-bag to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Exclusive Discounts and Offers</h3>
								<p  class="text text-justify">At WishABaby, you can shop for the most popular and the finest of products for you as well as your baby. Whether it is the nutritional supplements and the other essential items for the new mother, or the diapers, skin care products, toys, or any other supplies for the baby, you can avail all from our Store at exclusively discounted prices that are extended to all our dear members. </p>
							</div>
						</div>
					</div>
				</div>
				<div class="call-to-action text-center to-animate"><a href="<?= base_url('wish/information-desk/faqs');?>" class="btn btn-learn">Learn More</a></div>
			</div>
		</div>
	</section>	
	
	<section id="fh5co-explore" data-section="explore" style="margin-top:-50px;">
		 
		<div class="container">
			 
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="text text-justify text-center" style="color:#3f5267;text-align:center"><b>How We Work</b></h2>
					 <div class="container-fluid">
						<div class="row">
							 
							 
							<div class="col-md-4  "  >
								 <div class="item item-type-double" style="background-image:url('<?= base_url('img/devbaby.jpg');?>');background-size:cover;">
									<a class="item-hover" href="<?= base_url('track-your-baby-development');?>">
										<br>
										<br>
										<div class="item-info col-md-12">
											 			
											<div class="line col-md-12"></div>			
											<div class="headline col-md-12">Track Your Baby's Development</div>
											<div class="line col-md-12"></div>
										</div>
										 
									</a>
									
								</div>
								<h4 class="text text-center"><b>Track Your Baby's Development</b></h4>
							</div>
							<div class="col-md-4  "  >
								 <div class="item item-type-double" style="background-image:url('<?= base_url('img/how_does_it_work.jpg');?>');background-size:cover;">
									<a class="item-hover" href="#">
										<br>
										<br>
										<div class="item-info col-md-12">
											 			
											<div class="line col-md-12"></div>			
											<div class="headline col-md-12">How Does It work?</div>
											<div class="line col-md-12"></div>
										</div>
										 
									</a>
									
								</div>
								<h4 class="text text-center"><b>How Does It work?</b></h4>
							</div>
							<div class="col-md-4  "  >
								 <div class="item item-type-double" style="background-image:url('<?= base_url('img/road.jpg');?>');background-size:cover;">
									<a class="item-hover" href="">
										<br>
										<br>
										<div class="item-info col-md-12">
											 			
											<div class="line col-md-12"></div>			
											<div class="headline col-md-12">The Road Ahead</div>
											<div class="line col-md-12"></div>
										</div>
										 
									</a>
									
								</div>
								<h4 class="text text-center"><b>The Road Ahead</b></h4>
								
							</div>
							
							 
								
						<div class="clearfix"></div>	
							
							 
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>
	<section id="fh5co-team" data-section="team" style="display:none;">
		<div class="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Latest Members</h2>						 
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="<?= base_url('assets/front/');?>images/person4.jpg" alt="Roger Garfield"></div>
							<h3>Roger Garfield</h3>
							<span class="position">Egg Donor</span>
							<table class="table-responsive" style="width:100%">
								<tr>
									<th style="width:50%">Location:</th>
									<th style="width:50%">India</th>
								</tr>
								<tr>
									<th style="width:50%">Age:</th>
									<th style="width:50%">34 Yr</th>
								</tr>
								<tr>
									<th style="width:50%">Ethnicity:</th>
									<th style="width:50%">Caucasian</th>
								</tr>
								<tr>
									<th style="width:50%">Heigt:</th>
									<th style="width:50%">5'10"(178cm)</th>
								</tr>
								<tr>
									<th style="width:50%">Hair Color:</th>
									<th style="width:50%">Black</th>
								</tr>
								
							</table>
							
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-like"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-star"></i></a></li>
								<li><a href="#" class="dribbble"><i class="icon-envelope"></i></a></li>
								 
							</ul>
							<a href="#" class="btn btn-primary">View Profile</a>
						</div>
					</div>

					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="<?= base_url('assets/front/');?>images/person2.jpg" alt="Roger Garfield"></div>
							<h3>Kevin Steve</h3>
							<span class="position">Sperm Donor</span>
							<table class="table-responsive" style="width:100%">
								<tr>
									<th style="width:50%">Location:</th>
									<th style="width:50%">India</th>
								</tr>
								<tr>
									<th style="width:50%">Age:</th>
									<th style="width:50%">34 Yr</th>
								</tr>
								<tr>
									<th style="width:50%">Ethnicity:</th>
									<th style="width:50%">Caucasian</th>
								</tr>
								<tr>
									<th style="width:50%">Heigt:</th>
									<th style="width:50%">5'10"(178cm)</th>
								</tr>
								<tr>
									<th style="width:50%">Hair Color:</th>
									<th style="width:50%">Black</th>
								</tr>
								
							</table>
							
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-like"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-star"></i></a></li>
								<li><a href="#" class="dribbble"><i class="icon-envelope"></i></a></li>
								 
							</ul>
							<a href="#" class="btn btn-primary">View Profile</a>
						</div>
					</div>

					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="<?= base_url('assets/front/');?>images/person3.jpg" alt="Roger Garfield"></div>
							<h3>Ross Standford</h3>
							<span class="position">Sperm Donor</span>
							<table class="table-responsive" style="width:100%">
								<tr>
									<th style="width:50%">Location:</th>
									<th style="width:50%">India</th>
								</tr>
								<tr>
									<th style="width:50%">Age:</th>
									<th style="width:50%">34 Yr</th>
								</tr>
								<tr>
									<th style="width:50%">Ethnicity:</th>
									<th style="width:50%">Caucasian</th>
								</tr>
								<tr>
									<th style="width:50%">Heigt:</th>
									<th style="width:50%">5'10"(178cm)</th>
								</tr>
								<tr>
									<th style="width:50%">Hair Color:</th>
									<th style="width:50%">Black</th>
								</tr>
								
							</table>
							
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-like"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-star"></i></a></li>
								<li><a href="#" class="dribbble"><i class="icon-envelope"></i></a></li>
								 
							</ul>
							<a href="#" class="btn btn-primary">View Profile</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--<section id="fh5co-testimony" data-section="testimony" class="parallax" style="height:500px;background-image: url(<?= base_url();?>img/3.jpg);background-size:cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 to-animate">
					<div class="wrap-testimony">
						<div class="owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?= base_url('assets/front/');?>images/person2.jpg" alt="user">
									</figure>
									<blockquote>
										<p style="color:white">"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
									</blockquote>
									<span style="color:white">John Doe, via </span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?= base_url('assets/front/');?>images/person3.jpg" alt="user">
									</figure>
									<blockquote >
										<p style="color:white">"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
									</blockquote>
									<span style="color:white">John Doe, via </span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="<?= base_url('assets/front/');?>images/person2.jpg" alt="user">
									</figure>
									<blockquote>
										<p style="color:white">"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
									</blockquote>
									<span style="color:white">John Doe, via</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<section id="fh5co-faq" data-section="faq">
		<div class="fh5co-faq">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Frequently Asked Questions</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Everything you need to know before you get started</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="box-faq to-animate-2">
							<h3>What is WishABaby?</h3>
							<p class="text text-justify">
								WishABaby is a connecting platform where we help the childless couples and single individuals to connect with sperm donors, egg donors, surrogates, and co-parents to bring them rays of hope to embrace a new life. We also maintain a directory of fertility clinics and experts to provide you with timely health screening and quality infertility treatments as per the Indian fertility laws. In short, we are your scientific, healthy, legal and ethical way to happiness as per your individual biology.</p>
						</div>
						<div class="box-faq to-animate-2">
							<h3>What is different about WishABaby? </h3>
							<p class="text text-justify">We are your companion on your journey to parenthood. There are multiple biological and scientific factors that contribute to your health and success in this process. We bring these essential elements under one roof and integrate them into an approach which is individually tailored to meet your needs as perfectly as possible. And this is done with utmost care and compassion.</p>
						</div>
						 
					</div>

					<div class="col-md-6">
						<div class="box-faq to-animate-2">
							<h3>Why knowing about the donor is important?</h3>
							<p class="text text-justify">It is a known fact that the genetic make-up of a donor is always inherited partly by the child. As such, knowing a donor and being aware about his health, can help minimise the chances of passing on a genetic disorder from the donor to the baby. Secondly, in case any general health issues arise in the future, knowing the donating-parent's medical history can help in faster diagnosis, facilitating better and apt treatment of the child.</p>
						</div>
						<div class="box-faq to-animate-2">
							<h3>Is there any personal involvement of WishABaby in finding Donors or Co-Parents?</h3>
							<p class="text text-justify">No, WishABaby will not be personally involved in finding donors for you.
							We believe it is you who has the right to select the donor for yourself,
							and hence all we do is to provide you the detailed profiles of the donors registered with us.
							You can yourself access the profiles, find the ideal match, and accordingly take well-informed decisions yourself.
							</p>
						</div>
						 
					</div>
				</div>
			</div>
		</div>
	</section>

	<hr>
	<!--<section id="fh5co-pricing" data-section="pricing" >
		<div class="fh5co-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate" >Explore Our Products</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">You can buy our products from our store. </h3>
							</div>
						</div>
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
	</section>-->
	<section id="fh5co-trusted" data-section="trusted">
		<div class="fh5co-trusted">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Trusted By</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">We’re trusted by these popular companies</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					 <div class="col-md-2 col-sm-3 col-xs-6 col-sm-offset-0 col-md-offset-1">
					 	<div class="partner-logo to-animate-2">
					 		<img src="<?= base_url('assets/front/');?>images/logo1.png" alt="Partners" class="img-responsive">
					 	</div>
					 </div>
				    <div class="col-md-2 col-sm-3 col-xs-6">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?= base_url('assets/front/');?>images/logo2.png" alt="Partners" class="img-responsive">
						</div>
				    </div>
				    <div class="col-md-2 col-sm-3 col-xs-6">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?= base_url('assets/front/');?>images/logo3.png" alt="Partners" class="img-responsive">
				    	</div>
				    </div>
				    <div class="col-md-2 col-sm-3 col-xs-6">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?= base_url('assets/front/');?>images/logo4.png" alt="Partners" class="img-responsive">
				    	</div>
				    </div>
				    <div class="col-md-2 col-sm-12 col-xs-12">
				    	<div class="partner-logo to-animate-2">
				    		<img src="<?= base_url('assets/front/');?>images/logo5.png" alt="Partners" class="img-responsive">
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</section>

	<!-- <div class="getting-started getting-started-2 parallax" style="background-image: url(<?= base_url();?>img/4.jpg);background-size:cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 to-animate">
					<h3>Get Parental Advice</h3>
					<p>WishABaby is a connecting platform where we help the childless couples and single individuals to connect with sperm donors, egg donors, surrogates, and co-parents to bring them rays of hope to embrace a new life.  </p>
				</div>
				<div class="col-md-4 to-animate-2">
					<div class="call-to-action text-right">
						<a href="<?= base_url('Consult-An-Expert/Expert-Directory');?>" class="sign-up">Consult An Expert</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
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

