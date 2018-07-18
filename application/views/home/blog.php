<?php
	//$blogs	=	$array['blogs'];
	$blog	=	$array['blog'];
	
	 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $blog['blog_title'];?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=<?= $blog['blog_description'];?>"" />
	<meta name="keywords" content="<?= $blog['blog_keyword'];?>" />
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
						  <li class="breadcrumb-item"><a href="<?= base_url('blogs');?>">Blogs</a></li>
						  
						  <li class="breadcrumb-item active"><?= $blog['blog_name'];?></li>
					</ol>
					 
				</div>
				<div class="row">				 
					<div class="col-md-10 col-md-offset-1" style="padding-right:40px;" >
						 
						<div class="row advertise" style="background:white;padding:30px;margin-bottom:30px;">
							<h2><?= $blog['blog_name'];?></h2>
							 
							<div class="col-md-12">
								<?php
									if($blog['blog_image']!='')
									{
										?>
										<img src="<?= base_url('img/blogs/'.$blog['blog_id'].'/'.$blog['blog_image']);?>" class="img img-responsive" alt="<?= $blog['blog_name'];?>" style="width:100%;"/>
										<?php
									}
								?>
								 <?php echo $blog['blog_content'];?> 
								 
							</div>
							 
						</div>
									 
					 
						 
					</div>
					 <!-- <div class="col-md-4" style="padding:20px 30px;font-size:14px;font-weight:bold;">
						<h3 class="text text-center text text-success"><b>Latest Articles</b></h3>
						<?php
							if(count($blogs))
							{
								foreach ($blogs as $x)
								{
									$blog_id	=	$x['blog_id'];
									$blog_image	=	$x['blog_image'];
									?>
										<div class="row" style="background:white;margin-bottom:30px;padding:20px 0px;border-radius:5px;border:1px solid gray;">
											 
											<div class="col-md-5">
												<img class="img img-reponsive img-circle img-thumbnail" style="width:100%;height:100px;" <?php if($x['blog_image']==''){ ?> src="<?= base_url('img/blog.jpg');?>" <?php } else { ?>src="<?= base_url('img/blogs/'.$blog_id.'/'.$blog_image);?>" <?php } ?> alt="<?= $x['blog_name'];?>">
												<br>
											</div>
											<div class="col-md-7">
												<h4><?= ucwords($x['blog_name']);?></h4>
												 <br>
												 
												<a href="<?= base_url('blog/'.$x['blog_slug']);?>" class="btn btn-success">View Article</a> 	
												 
												 
											</div>
											 
											 
										</div>
									<?php
								}
							}
						?>
					 </div> -->
					 
				 
				</div>
			</div>
		</div>
	</section>
	 
	 <!-- <div class="btn-group btn-group-justified hidden-xs" style="">
	  <a href="#" class="btn btn-primary " style="background:#1fb5f6;height:100px;">Consult An Expert <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
	  <a href="<?= base_url('findaclinic');?>" class="btn btn-primary "  style="background:#1fb5f6;height:100px;"> Find A Clinic <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
	  <a href="<?= base_url('askaquestion');?>" class="btn btn-primary " style="background:#1fb5f6;height:100px;">Ask a Free Question <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
	  <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#getaquote" style="background:#1fb5f6;height:100px;">Get A quote <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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

