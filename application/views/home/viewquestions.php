<?php
	$questions	=	$array['questions'];
	$clinic		=	$array['clinic'];
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
		.form-control{
			border-radius:0px;
			height:35px;
		} 
		.advertise:hover  
		{
			box-shadow: 0 0 20px rgba(0,0,0,0.6);
			-moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
			-webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
			-o-box-shadow: 0 0 10px rgba(0,0,0,0.6);
		}
 
	 
 	</style>
	</head>
	<body>
	<?php
		include('includes/header.php');
		//include('includes/header2.php');
 
	 
	 
?>
 
 
	<section id="fh5co-team" data-section="team" style="padding-top:0px;background:#ecf0f5;">
		<div class="fh5co-team">
			<div class="container">
				<div class="row">
				 
					<br>
					
					<br>
					<br>
					<br>
					 <ol class="breadcrumb pull-right" style="font-size:12px;">
						  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
						  
						  <li class="breadcrumb-item active">View Questions</li>
					</ol>
					
				</div>
				<div class="row">				 
					<div class="col-md-8" style="padding-right:40px;" >
						<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">View Questions</h2>						 
					</div>
						<?php
							if(count($questions))
							{
								foreach ($questions as $x)
								{
									?>
										<div class="row advertise" style="background:white;padding:30px;margin-bottom:30px;">
											<h2><?= $x['q_sub'];?></h2>
											<div class="col-md-1">
												<i class="fa fa-question-circle fa-3x" aria-hidden="true"></i>
											</div>
											<div class="col-md-11">
												<p  class="text text-justify" style="font-size:14px;"><b><?= $x['q_name'];?></b></p>
												<?php
													if(count($x['answers']))
													{
														foreach($x['answers'] as $y)
														{
																						
															?>
																<div class="row" style="background:#ecf0f5;padding:10px;margin-bottom:20px;">
																	
																	<div class="col-md-1">
																		<i class="fa fa-reply fa-2x" aria-hidden="true"></i>
																	</div>
																	<div class="col-md-11">
																		<?php
																		if($y['user_type']==3)
																		{
																			?>
																			<a href="<?= base_url('Consult-An-Expert/Expert-Details/'.$y['user_id']);?>"><?= $y['user_fname']." ".$y['user_sname'];?></a>
																			<?php
																		}
																		else if($y['user_type']==2)
																		{
																			?>
																			<a href="<?= base_url('Consult-A-Clinic/Clinic-Details/'.$y['user_id']);?>"><?= $y['user_clinic_name'];?></a>
																			<?php
																		}
																	?>
																		<p  class="text text-justify" style="font-size:14px;word-break:break-all;"><?= $y['ans_name'];?></p>
																	</div>
																</div>
															<?php
														}
													}

												?>
											</div>
											
											<?php
												
											/*	echo "<pre>";
												print_r($x);
												echo "</pre>";
												*/
											?>
										</div>
									<?php
								}
								?>
								<div class="row advertise" style="padding:0px;font-size:12px;margin-bottom:30px;">
									<?= $this->pagination->create_links(); ?>
								</div>
								<?php
							}
						?>
						 
					 
						 
					</div>
					 <div class="col-md-4" style="padding:20px 30px;font-size:14px;font-weight:bold; background:#1fb5f6;">
						<h3 class="text text-center text text-success"><b>Registered IVF Clinics</b></h3>
						<?php
							if(count($clinic))
							{
								foreach ($clinic as $x)
								{
									$clinic_id	=	$x['user_id'];
									$user_image	=	$x['user_image'];
									?>
										<div class="row" style="background:white;margin-bottom:30px;padding:20px 0px;border-radius:5px;border:1px solid gray;">
											<a href="<?= base_url('clinic/member/'.$x['user_id']);?>">
											<div class="col-md-5">
												<img class="img img-reponsive img-circle img-thumbnail" style="width:100%;height:100px;" <?php if($x['user_image']==''){ ?> src="<?= base_url('img/clinicdemo.jpg');?>" <?php } else { ?>src="<?= base_url('img/user/'.$clinic_id.'/'.$user_image);?>" <?php } ?> alt="<?= $x['user_clinic_name'];?>">
												<br>
											</div>
											<div class="col-md-7">
												<?= ucwords($x['user_clinic_name']);?>
												 	
												<br><i class="fa fa-map-marker" aria-hidden="true"></i>
												<?= ucwords($x['user_city']);?>
												<br>
												<?= substr(ucwords($x['user_service']),0,100);?>
												<br>
												 
											</div>
											 </a>
											 
										</div>
									<?php
								}
							}
						?>
					 </div>
					 
				 
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

