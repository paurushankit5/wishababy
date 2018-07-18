<?php
	$users	=	$array['users'];
	 
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
		.radio label, .checkbox label
		{
			font-size: 14px;
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
		  
		  <li class="breadcrumb-item active">Search Members</li>
		</ol>
		<section id="fh5co-team" data-section="team">
		<div class="fh5co-team">
		<div class="container">
			<?php
				if(count($users))
				{
					$i=0;
					foreach($users as $x)
					{
						$i++;
						if($i%3==0)
						{
							echo "<div class='row'>";
						}						 
						?>							 
							<div class="col-md-4">
								<div class="team-box text-center to-animate-2">
									<div class="user">
									<?php
											if($x['user_image']!='')
											{
												?>
													<img class="img-reponsive" src="<?= base_url('img/user/'.$x['user_id'].'/'.$x['user_image']);?>" alt="<?= ucwords($x['user_fname']." ".$x['user_sname']);?>">
												<?php
											}
											else
											{
												?>
													<img class="img-reponsive" src="<?= base_url('img/naimage.png');?>" alt="<?= ucwords($x['user_fname']." ".$x['user_sname']);?>">
												<?php
											}
										?>
									 
									</div>
									<h3><?= ucwords($x['user_fname']." ".$x['user_sname']);?></h3>
									<span class="position"><?= $x['user_type'];?></span>
									<table class="table-responsive" style="width:100%">
										<tr>
											<th style="width:50%">Location:</th>
											<th style="width:50%"><?= $x['user_country'];?></th>
										</tr>
										<tr>
											<th style="width:50%">Age:</th>
											<th style="width:50%">
												<?php
													$dob='1981-10-07';
													$diff = (date('Y') - date('Y',strtotime($x['user_dob'])));
													echo $diff;
												?> Yr
											</th>
										</tr>
										<tr>
											<th style="width:50%">Ethnicity:</th>
											<th style="width:50%"><?= $x['user_ethnicity'];?></th>
										</tr>
										<tr>
											<th style="width:50%">Heigt:</th>
											<th style="width:50%"><?= $x['user_height'];?></th>
										</tr>
										<tr>
											<th style="width:50%">Hair Color:</th>
											<th style="width:50%"><?= $x['user_hair'];?></th>
										</tr>
										
									</table>
									
									<ul class="social-media">
										<li><a href="#" class="facebook"><i class="icon-like"></i></a></li>
										<li><a href="#" class="twitter"><i class="icon-star"></i></a></li>
										<li><a href="#" class="dribbble"><i class="icon-envelope"></i></a></li>
										 
									</ul>
									<a href="<?= base_url('members/viewprofile/'.$x['user_id']);?>" target="_blank" class="btn btn-primary">View Profile</a>
								</div>
							</div>
						<?php
						if($i%3==0)
						{
							echo "</div>";
						}
						 
					}
					echo $this->pagination->create_links();
					
				}
					
			?>
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

