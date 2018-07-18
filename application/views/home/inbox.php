<?php
	$message	=	$array['message'];
	 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Proud Parents</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
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
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/list.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/new.css">
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
		.parallax { 
   
   

 
 
	 
 	</style>
	</head>
	<body>
	<?php
		include('includes/header.php');
		include('includes/header2.php');
	?>
	 
	<section id="fh5co-faq" data-section="faq" style="margin-top:-100px;">
		
		<div class="fh5co-pricing">
			<div class="container-fluid">
				 <ol class="breadcrumb pull-right" style="font-size:12px;">
					  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
					  
					  <li class="breadcrumb-item active">Inbox</li>
				</ol>
				<div class="row">
					<div class="col-md-3" >
						<div class="pricing" style="width: 100%;">
							<div>
								<div class="price-box to-animate-2 popular" style="background-image:url(<?= base_url('assets/front/sidebar/sidebar-1.jpg');?>);background-size:cover;width:100%;text-align:left;">
									<ul class="nav nav-pills nav-stacked" style="font-size:14px;">
										<li class="active" style="border:1px solid white;border-radius:4px;"><a style="color:white;" href="<?= base_url('Message/inbox');?>"><b>Inbox</b></a></li>
										<li    style="border:1px solid white;border-radius:4px;"><a style="color:white;" href="<?= base_url('Message/sentbox');?>"><b>Sentbox</b></a></li>
										 
									 </ul>
								</div>
							</div>						
						</div>
					</div>
					<div class="col-md-7">
						<h1 class="to-animate text-center">Inbox</h1>
					 
						<?php
							if(count($message))
							{
								?>
									<table class="table table-responsive table-striped" style="font-size:14px;">
									<?php
										foreach($message as $x)
										{
											 
											?>
											<tr>
												<th>
													<?= ucwords($x['user_fname']." ".$x['user_sname']);?>
												</th>
												<td>
													<a href="<?= base_url('Message/viewconverstaion/'.$x['message_sender_id']); ?>" >
														<?= $x['message_body'];?>
													</a>
												</td>
												<td><?=date(' d-M-y',strtotime($x['message_add_time']));?></td>
												 
											</tr>
											<?php
										}
									?>
									</table>
								<?php
							}
							else
							{
								
							}
						?>
					</div> 
					<div class="col-sm-2">
						 
					</div> 
				</div>
			</div>
		</div>
	</section>

	<hr>
	 

	 
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

