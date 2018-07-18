<?php
	$country	=	$array['country'];
	$me			=	$array['me'];
	$eligible_to_edit =	$array['eligible_to_edit'];
	 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Profile</title>
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
			height:auto;
			margin:10px;
			margin-bottom:40px;
			padding:10px;
			box-shadow: 10px 10px 5px #888888;
		}
		.homeservice h3{
			font-size:25px;
		}
		#fh5co-explore{
			padding:0px;
		}
 	</style>
	</head>
	<body>
	<?php
		include('includes/header.php');
		include('includes/header2.php');
	?>
	 
	<section id="fh5co-explore" data-section="explore">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<ol class="breadcrumb pull-right" style="font-size:12px;">
						  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
						   
						  <li class="breadcrumb-item active">My Profile</li>
					</ol>
					<div class="clearfix"></div>
					<h2 class="to-animate">My Profile</h2>
					 <div class="container-fluid">
						<div class="row">
							<div class="col-md-3 col-sm-4 "  >
								<div class="homeservice">
									<img src="<?php if($me['user_image']!=''){?> <?= base_url('img/user/'.$me['user_id'].'/'.$me['user_image']);?> <?php }else{?>  <?= base_url('img/naimage.png');?>   <?php } ?>" class="img img-responsive img-rounded"/>
									<br>
									 
									<button data-toggle="modal" data-target="#imagemodal" class="btn btn-primary btn-sm pull-left">Change</button>
									<button data-toggle="modal" data-target="#delimagemodal"  class="btn btn-danger btn-sm pull-right">Delete</button>
									<br>
									<br>
								</div>
							</div>
							<div class="col-sm-8 col-md-6 "  >
								<div class="homeservice" style="text-align:left;font-size:14px;">
								<?php
									if($eligible_to_edit ==0)
									{
										?>
										<a href="<?= base_url('myprofile/edit');?>" class="btn btn-primary pull-right btn-sm">Edit</a>
										<?php
									}
								?>
								
								<table class="table table-responsive table-compressed">
									<tr>
										<td>Name</td>
										<th><?= ucwords($me['user_fname'])." ".ucwords($me['user_sname']);?></th>
									</tr>
									<tr>
										<td>Email</td>
										<th><?= $me['user_email'];?></th>
									</tr>
									<?php
										if ($me['user_mobile']!='')
										{
											?>
											<tr>
												<td>Mobile</td>
												<th>+91-<?= $me['user_mobile'];?></th>
											</tr>
											<?php
										}
									?>
									<?php
										if ($me['user_tel']!='')
										{
											?>
											<tr>
												<td>Alt. Number</td>
												<th>+91-<?= $me['user_tel'];?></th>
											</tr>
											<?php
										}
									?>
									
									
									
									 
									
												<tr>
													<td>Gender</td>
													<th><?= $me['user_gender'];?></th>
												</tr>
												<tr>
													<td>Date of Birth</td>
													<th><?= $me['user_dob'];?></th>
												</tr>
												<tr>
													<td>Country</td>
													<th><?= $me['user_country'];?></th>
												</tr>
												
												
												<tr>
													<td>Sexuality</td>
													<th><?= $me['user_sexuality'];?></th>
												</tr>
												 
												<tr>
													<td>Education</td>
													<th><?= $me['user_education'];?></th>
												</tr>
												<tr>
													<td>Profession</td>
													<th><?= $me['user_profession'];?></th>
												</tr>
												<tr>
													<td>Religion</td>
													<th><?= $me['user_religion'];?></th>
												</tr>												
												<tr>
													<td>Application Type</td>
													<th><?= $me['user_application'];?></th>
												</tr>
												<tr>
													<td>Address</td>
													<th><?= $me['user_adl1']."<br>".$me['user_adl2']."<br>".$me['user_city']."<br>".$me['user_state']."<br>".$me['user_country']."<br>".$me['user_pin'];?></th>
												</tr>
												<tr>
													<td>About Me</td>
													<th><?= $me['user_about'];?></th>
												</tr>
												<tr>
													<td>Interests</td>
													<th><?= $me['user_interest'];?></th>
												</tr>
												
									
									 
								</table>
								</div>
							</div>
							<div class="col-md-3 col-sm-12 "  >
								<?php
									//include('includes/registered_clinics.php');
								?>
							</div> 
							 
							 
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>
	 
	 

	<div class="getting-started getting-started-2 parallax" style="background-image: url(<?= base_url();?>img/4.jpg);background-size:cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 to-animate">
					<h3>Ask a Question</h3>
					<p>Ask your doubts with our expert. </p>
				</div>
				<div class="col-md-6 to-animate-2">
					<div class="call-to-action text-right">
						<a href="<?= base_url('askaquestion');?>" class="sign-up">Ask A Free Question</a>
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
		 
		<div id="imagemodal" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-sm">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Change Profie Pic</h4>
			  </div>
			  <div class="modal-body">
				<form class="form-horizontal" method="post" action="<?= base_url('myprofile/storepic');?>" enctype="multipart/form-data">
					<label>Upload Image	</label>
					<input type="file" required class="form-control" name="user_image" />
				
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>				
				</form>
			  </div>
			</div>

		  </div>
		</div>
		<div id="delimagemodal" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-sm">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Confirm Delete</h4>
			  </div>
			  <div class="modal-body">
					<p><b>Are you sure?</b></p>
			  </div>
			  <div class="modal-footer">
				<button type="submit" onclick="delprofilepic();" class="btn btn-danger">Yes</button>
				<button type="reset" class="btn btn-default" data-dismiss="modal">No</button>				
				 
			  </div>
			</div>

		  </div>
		</div>
		<script>
			function delprofilepic()
			{
				$.ajax({
					type	:	'POST',
					url		:	'<?= base_url('myprofile/delprofilepic');?>',
					success	:	function(data){
								location.reload();
					},
				});
			}
		</script>
	</body>
</html>

