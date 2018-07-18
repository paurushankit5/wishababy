 <?php

	$appointments	=	$array['appointments'];
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Appointments | Wishababy</title>
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
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  var $x	=	jQuery.noConflict();
  $x( function() {
    $x( "#ap_date" ).datepicker({
		minDate: "+1",
		maxDate: "1M",
	});
	
  } );
  </script>
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
						  
						  <li class="breadcrumb-item active">My Appointments</li>
					</ol>
				 
				</div>
				<div class="row">				 
					<div class="col-md-10 col-md-offset-1 advertise" style="background:white;padding:30px;font-size:13px;">
						
						<h3  class="text text-center text-success">My Appointments</h3>
						<?php
							if($this->session->flashdata('askmsg'))
							{
								echo $this->session->flashdata('askmsg');
							}
						?>
						 <table class="table table-responsive">
							<thead>
								<tr>
									<th>Clinic / Expert</th>
									<th>App Id</th>
									<th>Date & Time</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									if(count($appointments))
									{
										foreach($appointments as $x)
										{
											?>
											<tr>
												<th>
													<?php
														if($x['user_type']=='2')
														{
															?>
																<a href="<?= base_url('clinic/member/'.$x['user_id']);?>"><?= $x['user_clinic_name'];?></a>
															<?php
														}
														else if($x['user_type']=='3')
														{
															?>
															<a href="<?= base_url('Consult-An-Expert/Expert-Details/'.$x['user_id']);?>"><?= $x['user_fname']." ".$x['user_sname'];?></a>
															<?php
														}
													?>
												</th>
												<th><?= $x['ap_id'];?></th>
												<th>
													<?= date('d-M-Y',strtotime($x['ap_date']));?><br>
													<?= date('h:i:A',strtotime($x['ap_time']));?>
												</th>
												 
												<th>
													<?php
														if($x['ap_status']==0)
														{
															echo "Waiting for clinic confirmation";
														}
														else if($x['ap_status']==1)
														{
															echo "Appointment confirmed by clinic/expert";
														}
														else if($x['ap_status']==3)
														{
															echo "Appointment cancelled by you.";
														}
														else if($x['ap_status']==4)
														{
															echo "Appointment cancelled by expert/clinic.";
														}
														
															
														
													?>
												</th>
												<th>
													<?php
														$today = strtotime($x['ap_date']); 
														$date  =  strtotime(date('Y-m-d')); 
														if($date<=$today)
														{
															if($x['ap_status']==0 || $x['ap_status']==1)
															{
																?>
																<a href="#" onClick="cancel('<?= $x['ap_id'];?>');" class="btn btn-primary btn-sm">Cancel</a>
																<a href="#" onClick="reschedule('<?= $x['ap_id'];?>');" class="btn btn-info btn-sm">Reschedule</a>
																<?php
															}
														}
														
													?>
												</th>
											</tr>
											<?php
										}
										?>
										<tr>
											<th colspan="5"><?= $this->pagination->create_links();?></th>
										</tr>
										<?php
									}
								?>
							</tbody>
						 </table>
					</div>
					 
					 
					 
				 
				</div>
			</div>
		</div>
	</section>
	 
	 

	 
	<?php
		include('includes/footer.php');
	?>
	
	 <script>
		function reschedule(ap_id)
		{
			$('#ap_id').val(ap_id);
			$('#bookanappointmentbtn').click();
		}
		function cancel(ap_id)
		{
			$('#cancel_ap_id').val(ap_id);
			$('#cancelbtn').click();
		}
		
		function rescheduleappointment()
		{
			var ap_date			=	$('#ap_date').val();
			var ap_time			=	$('#ap_time').val();
			var ap_id			=	$('#ap_id').val();
			if(ap_date	=='')
			{
				$('#ap_error').html('<div class="alert alert-danger"><b>Please select a date.</b></div>').slideDown().delay(1000).slideUp();
			}
			else if(ap_time	==	'')
			{
				$('#ap_error').html('<div class="alert alert-danger"><b>Please select a time.</b></div>').slideDown().delay(1000).slideUp();

			}
			else{
				$.ajax({
					type	:	"POST",
					url		:	"<?= base_url('findaclinic/updateappointment2');?>",
					data	:	{
								'ap_date'			:	ap_date,
								'ap_time'			:	ap_time,
								'ap_id'				:	ap_id,
								'ap_status'			:	0,
					},
					success	:	function(data)
					{
						if(data)
						{
							 
							alert('Appointment reschedued');
							location.reload();
							
						}
						else
						{
							$('#ap_error').html('<div class="alert alert-danger"><b>we are facing some technical issue. Please come after some time.</b></div>').slideDown().delay(1000).slideUp();

						}
					}
				});
				
			}
		}
		function cancelappointment()
		{
			$('#cancelappointment').modal('toggle');
			var ap_id			=	$('#cancel_ap_id').val();			 
			$.ajax({
				type	:	"POST",
				url		:	"<?= base_url('findaclinic/updateappointment2');?>",
				data	:	{							 
							'ap_id'					:	ap_id,
							'ap_status'				:	3,
							},
				success	:	function(data)
				{
					//console.log(data);
					 if(data)
					{						 
						alert('Appointment Cancelled');
						location.reload();						
					}
					else
					{
						 alert('System Failure');
					} 
				}
			});			 
		}
	 </script>
	 <!-- Trigger the book an appointment modal with a button -->
	<button type="button" id="bookanappointmentbtn" class="hidden" data-toggle="modal" data-target="#bookanappointment">Open Modal</button>

	<!-- Modal -->
	<div id="bookanappointment" style="font-size:12px;" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Reschedule Appointment </h4>
		  </div>
		  <div class="modal-body">
				<div id="ap_error"></div>
				<form id="appointment_form">
				<div class="form-group">
				
					<label>Select Date (mm/dd/yy)</label>
					<input type="text" placeholder="Select a Date" name="ap_date" id="ap_date" class="form-control"/>					
				</div>
				<div class="form-group">
					<label>Select Time</label>
					<input type="time" name="ap_time" id="ap_time" value="10:00:00" class="form-control"/>					
					<input type="hidden" name="ap_id" id="ap_id" class="form-control"/>					
				</div>
				</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" onClick="rescheduleappointment();" class="btn btn-success" >Submit</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	<!-- Trigger the book an appointment modal with a button -->
	<!-- Trigger the cancel appointment modal with a button -->
	<button type="button" id="cancelbtn" class="hidden" data-toggle="modal" data-target="#cancelappointment">Open Modal</button>

	<!-- Modal -->
	<div id="cancelappointment" style="font-size:12px;" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-sm">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Cancel Appointment </h4>
		  </div>
		  <div class="modal-body">
			<p>Are You sure?</p>
				<input type="hidden" id="cancel_ap_id"/>
		  </div>
		  <div class="modal-footer">
			<button type="button" onClick="cancelappointment();" class="btn btn-primary" >Yes</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
		  </div>
		</div>

	  </div>
	</div>
	<!-- Trigger the book an appointment modal with a button -->
	
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

