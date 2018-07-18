<?php
	$user	=	$array['user'];
	 
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
	 <ol class="breadcrumb pull-right" style="font-size:12px;">
		  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
		  
		  <li class="breadcrumb-item active">Member List</li>
		  <li class="breadcrumb-item active">Member Profile</li>
	</ol>
	 

	 
	
	

	 
	 
	 
	<section id="fh5co-faq" data-section="faq">
		<div class="fh5co-faq">
			<div class="container">
				<div class="row">
					<h1 class="to-animate text-center"><?= ucwords($user['user_fname']." ".$user['user_sname']);?></h1>
					 
				</div>
				<div class="row">
					<div class="col-md-3">
						 <?php
							if($user['user_image']!='')
							{
								?>
									<img style="height:300px;width:100%;" class="img-responsive img-rounded" src="<?= base_url('img/user/'.$user['user_id'].'/'.$user['user_image']);?>" alt="<?= ucwords($user['user_fname']." ".$user['user_sname']);?>">
								<?php
							}
							else
							{
								?>
									<img style="height:300px;width:100%;" class="img-responsive img-rounded" src="<?= base_url('img/naimage.png');?>" alt="<?= ucwords($user['user_fname']." ".$user['user_sname']);?>">
								<?php
							}
						?>
						<br>
						<a href="#" data-toggle="modal" data-target="#msgmodal"   class="btn btn-primary btn-block btn-primary">Send Message</a>
					</div>

					<div class="col-md-6">
						<div class="box-faq to-animate-2">
							<hr>
							<h3>About:</h3>
							<p>
								<?php
									if($user['user_about']!='')
									{
										echo $user['user_about'];
									}
									else
									{
										echo "User has not given this details";
									}
								?>
							</p>
							<h3>Interests:</h3>
							<p>
								<?php
									if($user['user_interest']!='')
									{
										echo $user['user_interest'];
									}
									else
									{
										echo "User has not given this details";
									}
								?>
							</p>
							<hr>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<table class="table table-responive table-condensed" style="font-size:12px;">
									<tr>
										<td>Profile Type</td>
										<th><?= $user['user_type'];?></th>
									</tr>
									<tr>
										<td>Age</td>
										<th>
											<?php
												$dob='1981-10-07';
												$diff = (date('Y') - date('Y',strtotime($user['user_dob'])));
												echo $diff;
											?> Yr
										</th>
									</tr>
									<tr>
										<td>Gender</td>
										<th><?= $user['user_gender'];?></th>
									</tr>
									<tr>
										<td>Ethnicity</td>
										<th><?= $user['user_ethnicity'];?></th>
									</tr>
									 
									<tr>
										<td>Religion</td>
										<th><?= $user['user_religion'];?></th>
									</tr>
									<tr>
										<td>Eye Color</td>
										<th><?= $user['user_eye'];?></th>
									</tr>
									<tr>
										<td>Hair Color</td>
										<th><?= $user['user_hair'];?></th>
									</tr>
									<tr>
										<td>Height</td>
										<th><?= $user['user_height'];?></th>
									</tr>
									<tr>
										<td>Weight</td>
										<th><?= $user['user_weight'];?></th>
									</tr>
									<tr>
										<td>Body Type</td>
										<th><?= $user['user_body'];?></th>
									</tr>
									
								</table>
							</div>
							<div class="col-sm-6">
								<table class="table table-responive table-condensed" style="font-size:12px;">
									<tr>
										<td>Application Type</td>
										<th><?= $user['user_application'];?></th>
									</tr>
									 
									<tr>
										<td>Blood Type</td>
										<th><?= $user['user_blood'];?></th>
									</tr>
									<tr>
										<td>Previously Donated</td>
										<th><?= $user['user_donated'];?></th>
									</tr>
									<tr>
										<td>Donation Type</td>
										<th><?= $user['user_donate_type'];?></th>
									</tr>
									<tr>
										<td>Already has children</td>
										<th><?= $user['user_child'];?></th>
									</tr>
									<tr>
										<td>Relationship Status</td>
										<th><?= $user['user_relationship'];?></th>
									</tr>
									<tr>
										<td>Looking for</td>
										<th><?= $user['user_looking'];?></th>
									</tr>
									<tr>
										<td>Sexuality</td>
										<th><?= $user['user_sexuality'];?></th>
									</tr>
									<tr>
										<td>Contact With Child</td>
										<th><?= $user['user_contact_child'];?></th>
									</tr>
									<tr>
										<td>Education</td>
										<th><?= $user['user_education'];?></th>
									</tr>
									<tr>
										<td>Profession</td>
										<th><?= $user['user_profession'];?></th>
									</tr>
									 
									
								</table>
							</div>
						</div>
						 
					</div>
					<div class="col-md-3">
						<?php
							echo "<pre>";
							print_r($user);
							echo "</pre>";
						?>
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
		<div id="msgmodal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Send Message to <?= ucwords($user['user_fname']." ".$user['user_sname']);?></h4>
			  </div>
			  <div class="modal-body"> 
				<form action="<?= base_url('action/storemessage');?>" method="post">
					<input type="hidden" name="message_sender_id" value="<?= $_COOKIE['wish_user_id'];?>"/>
					<input type="hidden" name="message_rx_id" value="<?= $user['user_id'];?>"/>
					<textarea required name="message_body" class="form-control"></textarea>
				   
					<div class="clearfix"></div>
			  </div>
			  <div class="modal-footer">
				<button type="submit"  class="btn btn-primary">Submit</button>				
				<button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			  </div>
			</div>

		  </div>
		</div>

	</body>
</html>

