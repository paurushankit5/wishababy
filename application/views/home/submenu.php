<?php
	$cat		=	$array['cat'];
	$singlesubmenu	=	$array['singlesubmenu'];
	$menu	=	$array['menu'];
	 
	if(count($menu))
	{
		$i=	0;
		foreach($menu as $x)
		{
			//echo $x['menu_id']."<br>";
			if($x['menu_id']	==	$singlesubmenu['submenu_menu_id'])
			{
				$j	=	$i;
			}
			$i++;
		}
	}
	//print_r($menu[$j]);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $singlesubmenu['submenu_title'];?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= $singlesubmenu['submenu_description'];?>" />
	<meta name="keywords" content="<?= $singlesubmenu['submenu_keyword'];?>" />
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	 
	

	 
	
	<section id="fh5co-pricing" data-section="pricing">
		 <ol class="breadcrumb pull-right" style="font-size:12px;">
		  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
		  <li class="breadcrumb-item"><a href="<?= base_url('wish/'.$menu[$j]['menu_slug']);?>"><?= $menu[$j]['menu_name'];?></a></li>
		  
		  <li class="breadcrumb-item active"><?= $singlesubmenu['submenu_name'];?></li>
		</ol>
		<div class="fh5co-pricing">
			<div class="container-fluid">
				 
				<div class="row">
					<div class="col-md-3 col-sm-4" >
						<div class="pricing" style="width: 100%;">
							<div class="">
								<div class="price-box to-animate-2 popular" style="background-color:#3f5267;background-size:cover;width:100%;text-align:left;">
									<ul class="nav nav-pills nav-stacked" style="font-size:14px;">
										<li ><a href="<?= base_url('wish/'.$menu[$j]['menu_slug']);?>" style="background-color:#ea574c;color:white"><b><?= $menu[$j]['menu_name'];?></b></a></li>
						
										<?php						 
											if(count($menu[$j]['submenu']))
											{
												foreach($menu[$j]['submenu'] as $y)
												{
													?>
														 <li <?php if($y['submenu_id']==$singlesubmenu['submenu_id']){echo "class='active'";} ?>  style="border:1px solid white;border-radius:4px;"><a style="color:white;" href="<?= base_url('wish/'.$menu[$j]['menu_slug'].'/'.$y['submenu_slug']);?>"><b><?= $y['submenu_name'];?></b></a></li>
													<?php
													/*if(count($y['nestedmenu']))
													{
														foreach($y['nestedmenu'] as $z)
														{
															?>
																<li style="border:1px solid white;border-radius:4px;"><a style="color:white;" href="<?= base_url('wish/'.$menu[$j]['menu_slug'].'/'.$y['submenu_slug'].'/'.$z['nest_slug']);?>"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> <?= $z['nest_name'];?></b></a></li>

															<?php
														}
													}*/												
												}
											}																	 
										  ?>
									 </ul>
									 
								</div>
							</div>						
						</div>
					</div>
					<div class="col-md-9 col-sm-8" >
						<div class="pricing" style="    width: 100%;" >
							<div class="">
								<div class="price-box to-animate-2 popular  " style="width:100%;text-align:left;">
									 <h1 class="text text-center"><b><?= $singlesubmenu['submenu_name'];?></b></h1> 
									 <?= $singlesubmenu['submenu_content'];?>
								</div>
							</div>						
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</section>

	 
	<!-- <div class="getting-started getting-started-2 parallax" style="background-image: url(<?= base_url();?>img/4.jpg);background-size:cover;margin-top:-100px;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 to-animate">
					<h3>Getting Started</h3>
					<p>WishABaby is a connecting platform where we help the childless couples and single individuals to connect with sperm donors, egg donors, surrogates, and co-parents to bring them rays of hope to embrace a new life.  </p>
				</div>
				<div class="col-md-4 to-animate-2">
					<div class="call-to-action text-right">
						<a href="<?= base_url('findaclinic');?>" class="sign-up">Find A Clnic</a>
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

