<?php
	$clinic					=	$array['clinic'];
	$user					=	$array['user'];
	$clinic_id				=	$clinic['user_id'];
	$user_image				=	$clinic['user_image'];
	$eligible_to_comment	=	$array['eligible_to_comment'];
	$comment				=	$array['comment'];
	//echo $eligible_to_comment; 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WishABaby Expert <?= ucwords($clinic['user_fname']." ".$clinic['user_sname']);?></title>
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
		p{
			margin-top: -25px;	
			font-size:14px;
		}
		.checked {
		    color: orange;
		}
	</style>

	</head>
	<body>
	<?php
		include('includes/header.php');
		//include('includes/header2.php');
 
 
	 
?>
  
	<br>
	<br>
	<br>
	<br>
 
	<section id="fh5co-team" data-section="team" style="padding-top:0px;">
		<div class="fh5co-team">
			<div class="container-fluid">
				<div class="row">
					 <ol class="breadcrumb pull-right" style="font-size:12px;">
						  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
						  
						  <li class="breadcrumb-item"><a href="<?= base_url('Consult-An-Expert/Expert-Directory');?>">Find An Expert</a></li>
						  <li class="breadcrumb-item active"><?= ucwords($clinic['user_fname']." ".$clinic['user_sname']);?></li>
					</ol>
				 
				</div>
				<div class="col-md-10 col-md-offset-1" style="    padding: 30px; background: #fff;
     
    -ms-border-radius: 5px;
    border-radius: 5px;
    margin-bottom: 40px;
    position: relative;">
				
				<div class="col-md-3 col-sm-3 sidebar" style="">		 
					 <img class="img img-reponsive img-thumbnail img-rounded" <?php if($clinic['user_image']==''){ ?> src="<?= base_url('img/expert.jpg');?>" <?php } else { ?>src="<?= base_url('img/user/'.$clinic_id.'/'.$user_image);?>" <?php } ?> alt="<?= $clinic['user_clinic_name'];?>" style="width:100%;">
					<br>
					<br>
					<button onclick="callback('<?= $clinic_id; ?>','<?= ucwords($clinic['user_fname']." ".$clinic['user_sname']);?>');" class="btn btn-success btn-block">Request A Callback</button>

					<?php
						if(isset($_COOKIE['wish_user_id']))
						{
							?>
							<a href="#" onClick="bookanappointment('<?= $clinic['user_id'];?>','<?= $clinic['user_fname']." ".$clinic['user_sname'];?>')" class="btn btn-block btn-success">Book An Appointment</a>
							<?php
							if($eligible_to_comment ==1)
							{
								?>
								<button class="btn btn-block btn-danger" data-toggle="modal" data-target="#commentmodal" >Add a Review</button>
								<?php
							}
						}
						else
						{
							?>
								 
								<a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-success btn-block">Book An Appointment</a>
							<?php
						}
					?>
				</div>
				<div class="col-md-9 col-sm-9">
					<h3 style="font-size:40px;"><?= ucwords($clinic['user_fname']." ".$clinic['user_sname']);?></h3>
					<?php
						if($clinic['user_count_rated']!=0)
						{	
							$totalrating1 = $clinic['user_rating']/$clinic['user_count_rated'];
							$totalratings = number_format($clinic['user_rating']/$clinic['user_count_rated'],1);
							//echo $totalratings;
							$starrating = 1;
							//echo $totalratings;
							$lastrating  = 5-ceil($totalratings);
							while($starrating<= $totalratings)
							{
								?>
									<span class="fa fa-star checked" title="<?= $totalratings;?> ratings from <?= $clinic['user_count_rated'];?> reviews"></span>
								<?php
								$starrating++;
							}
							if (strpos($totalrating1,'.') !== false) { 
								?> 							 
								<span class="fa fa-star-half-o checked"  title="<?= $totalratings;?> ratings from <?= $clinic['user_count_rated'];?> reviews"></span>
								<?php 
							} 
							while($lastrating!=0)
							{
								?>
									<span class="fa fa-star"  title="<?= $totalratings;?> ratings from <?= $clinic['user_count_rated'];?> reviews"></span>
								<?php
								$lastrating--;
							}
						
						
											 
											
										  
					?>
					<span style="font-size: 14px;">(<?= $totalratings;?> ratings from <?= $clinic['user_count_rated'];?> reviews)</span>
					<?php
						}
					?>
					<table class="table table-responsive" style="font-size:14px;border:0px;">
						<tr>
							<th>Location</th>
							<td><?= $clinic['user_city'];?> <?= $clinic['user_state'];?></td>							
						</tr>
					
					 
				
					<?php
						if($clinic['user_service']!='')
						{
							?>
							<tr>
								<th>Service</th>
								<td><?= implode(", ",explode(",",$clinic['user_service']));?></td>							
							</tr>
							<?php
						}
						if($clinic['user_clinic_website']!='')
						{
							?>
							<tr>
								<th>Webiste</th>
								<td><a href="<?= $clinic['user_clinic_website'];?>" target="_blank"><?= $clinic['user_clinic_website'];?> </a></td>							
							</tr>
							<?php
						}
						if($clinic['user_expert_qualification']!='')
						{
							?>
							<tr>
								<th>Qualifications</th>
								<td><?= $clinic['user_expert_qualification'];?> </td>							
							</tr>
							 
							<?php
						}
						if($clinic['user_expert_job']!='')
						{
							?>
							<tr>
								<th>Job Title</th>
								<td><?= $clinic['user_expert_job'];?> </td>							
							</tr>
							 
							<?php
						}
					?>
					</table>
						<hr style="border:.5px solid #3f5267;">
						<?php
							if($clinic['user_about']!='')
							{
								?>
								<h4><b>About:</b></h4>
								<p class="text text-justify" style="font-size:14px;"><?= $clinic['user_about'];	?></p>
								 
								<?php
							}
						?>
						 
						 
						
				</div>
				<div class="col-md-12">
					<?php
						if(count($comment))
						{
							?>	
								<hr>
								<h3 class="text text-success">Parent Reviews </h3>
								<hr>
								<?php
								foreach($comment as $x)
								{
									?>
									<div class="col-sm-12">
										<img src="<?php if($x['user_image']!=''){?> <?= base_url('img/user/'.$x['user_id'].'/'.$x['user_image']);?> <?php }else{?>  <?= base_url('img/naimage.png');?>   <?php } ?>" class="img img-responsive img-circle" style="width:50px; float:left"/>&nbsp;&nbsp; <span style="font-size: 14px;"><?= $x['user_fname']." ".$x['user_sname']; ?></span>
									</div>	 
									<div class="col-sm-12">
										<?php
											$starrating = 1;
											$lastrating  = 5-$x['ratings'];
											while($starrating<= $x['ratings'])
											{
												?>
													<span class="fa fa-star checked"></span>
												<?php
												$starrating++;
											}
											 
												while($lastrating!=0)
												{
													?>
														<span class="fa fa-star"></span>
													<?php
													$lastrating--;
												}
											 
											
										?>
										
										 
										<span  style="font-size: 14px;"><br>
										<?= date('d-M-y',strtotime($x['created_at']));?></span>
										<br>
										<br>
										<p class="text text-justify"><?= $x['comment'];?><p>
										<br>
									<hr> 
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
	<script>	 
		function bookanappointment(user_id,clinic_name)
		{
			$('#clinicname').html(clinic_name);
			$('#ap_clinic_id').val(user_id);
			$('#bookanappointmentbtn').click();
		}
		function callback(user_id,clinic_name)
		{
			$('#clinic_name').html(clinic_name);
			$('#call_clinic_id').val(user_id);
			$('#callbackmodalbtn').click();
		}
		
		function storeappointment()
		{
			var ap_date			=	$('#ap_date').val();
			var ap_time			=	$('#ap_time').val();
			var ap_clinic_id	=	$('#ap_clinic_id').val();
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
					url		:	"<?= base_url('findaclinic/storeappointments');?>",
					data	:	{
								'ap_date'			:	ap_date,
								'ap_time'			:	ap_time,
								'ap_clinic_id'		:	ap_clinic_id,
									
					},
					beforeSend : function(){$('.loadingDiv').show();},
					success	:	function(data)
					{
						data= data.trim();
						$('.loadingDiv').hide();
						if(data)
						{
							$('#appointment_form').trigger("reset");
							$('#ap_error').html('<div class="alert alert-success"><p><b>Your appointment request has been submitted. We will notify you when our expert/clinic approves the appointment.</b></p></div>').slideDown().delay(3000).slideUp();
							
							 setTimeout(function() {
							$('#bookanappointment').modal('toggle'); 
							}, 3000);
							
						}
						else
						{
							$('#ap_error').html('<div class="alert alert-danger"><b>we are facing some technical issue. Please come after some time.</b></div>').slideDown().delay(1000).slideUp();

						}
					}
				});
				
			}
		}
		function storecallback()
		{
			var call_name		=	$('#user_name').val();
			var call_mobile		=	$('#user_mob').val();
			var call_clinic_id	=	$('#call_clinic_id').val();
			var user_msg		=	$('#user_msg').val();
			if(call_name	=='')
			{
				$('#callback_error').html('<div class="alert alert-danger"><b>Please enter your name.</b></div>').slideDown().delay(1000).slideUp();
			}
			else if(call_mobile	==	'')
			{
				$('#callback_error').html('<div class="alert alert-danger"><b>Please enter your mobile number.</b></div>').slideDown().delay(1000).slideUp();

			}
			else if(call_mobile.length	!=	10)
			{
				$('#callback_error').html('<div class="alert alert-danger"><b>Invalid mobile number.</b></div>').slideDown().delay(1000).slideUp();

			}
			else if(isNaN(call_mobile)){
				$('#callback_error').html('<div class="alert alert-danger"><b>Invalid mobile number.</b></div>').slideDown().delay(1000).slideUp();

			}
			else{
				$.ajax({
					type	:	"POST",
					url		:	"<?= base_url('findaclinic/storecallback');?>",
					data	:	{
								'call_mobile'		:	call_mobile,
								'call_name'			:	call_name,
								'call_clinic_id'	:	call_clinic_id,									
								'call_body'			:	user_msg,									
					},
					beforeSend : function(){$('.loadingDiv').show();},
					success	:	function(data)
					{
						data = data.trim();
						$('.loadingDiv').hide();
						 if(data!=	'0')
						 {
							 $('#callback_error').html('<div class="alert alert-success"><b>Request submitted. Expert will get back to you soon.</b></div>').slideDown().delay(2000).slideUp();
							 setTimeout(function() {
							$('#callbackmodal').modal('toggle'); 
							}, 2000);
						}
					}
				});
				
			}
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
			<h4 class="modal-title">Book an Appointment with <span id="clinicname"></span></h4>
		  </div>
		  <div class="modal-body">
				<div id="ap_error"></div>
				<form id="appointment_form">
				<div class="form-group">
					<label>Select Date (mm/dd/yy)</label>
					<input type="text" placeholder="Select a date" name="ap_date" id="ap_date" class="form-control"/>					
				</div>
				<div class="form-group">
					<label>Select Time</label>
					<input type="time" name="ap_time" id="ap_time" value="10:00:00" class="form-control"/>					
					<input type="hidden" name="ap_clinic_id" id="ap_clinic_id" class="form-control"/>					
				</div>
				</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" onClick="storeappointment();" class="btn btn-success" >Submit</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	<!-- Trigger the book an appointment modal with a button -->
	<!-- Trigger the book an appointment modal with a button -->
	<button type="button" id="callbackmodalbtn" class="hidden" data-toggle="modal" data-target="#callbackmodal">Open Modal</button>

	<!-- Modal -->
	<div id="callbackmodal" style="font-size:12px;" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Request a Callback from <span id="clinic_name"></span></h4>
		  </div>
		  <div class="modal-body">
				<div id="callback_error"></div>
				<form id="callback_form">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="user_name" placeholder="Your Name" id="user_name" value="<?php if(isset($_COOKIE['wish_user_id'])) echo $user['user_fname']." ".$user['user_sname']; ?>" class="form-control"/>					
				</div>
				<div class="form-group">
					<label>Mobile</label>
					<input type="text" maxlength="10" name="user_mob" placeholder="Your Mobile" id="user_mob" value="<?php if(isset($_COOKIE['wish_user_id'])) echo $user['user_mobile'];?>" class="form-control"/>					
					<input type="hidden" maxlength="10" name="call_clinic_id" id="call_clinic_id" class="form-control"/>					
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea name="user_msg" placeholder="Your Message" id="user_msg" class="form-control"></textarea>				
					 					
				</div>
				 
				</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" onClick="storecallback();" class="btn btn-success" >Submit</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	<!-- Trigger the book an appointment modal with a button -->
	<div id="commentmodal" style="font-size:12px;" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Add Your Review</h4>
		  </div>
		  <div class="modal-body">
				<div id="reviewmsg"></div>
				
				<form id="">
				 
				<div class="form-group" id="commentbox">
					<center>
					<span class="fa fa-star checked fa-5x" onclick="rate('1');" id="star1"></span>
					<span class="fa fa-star fa-5x  " onclick="rate('2');"id="star2"></span>
					<span class="fa fa-star fa-5x  " onclick="rate('3');" id="star3"></span>
					<span class="fa fa-star fa-5x  " onclick="rate('4');" id="star4"></span>
					<span class="fa fa-star fa-5x  " onclick="rate('5');" id="star5"></span>
					</center>
					<input type="hidden" id="ratings" value="1">
					<input type="hidden" id="clinic_id" value="<?= $clinic['user_id'];?>">
					<input type="hidden" id="patient_id"  value="<?php if(isset($_COOKIE['wish_user_id'])) echo $user['user_id']; ?>">
					<br>
					<br>
					<textarea id="comment" style="border-radius:0px;" placeholder="Add A Review" id="comment" class="form-control"></textarea>				
					 					
				</div>
				 
				</form>
		  </div>
		  <div class="modal-footer">
			<button type="button"  class="btn btn-success" onClick="saveratings();">Submit</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	<script type="text/javascript">
		function rate(ratings){
			
			var star=1;
			$('#ratings').val(ratings);
			$('.fa-star').removeClass('checked');
			while (star <=ratings)
			{
				$('#star'+star).addClass('checked');
				star++;
			}
			//$(this).addClass('checked');
		}
		function saveratings(){
			var ratings 	= $('#ratings').val();
			var clinic_id 	= $('#clinic_id').val();
			var patient_id 	= $('#patient_id').val();
			var comment 	= $('#comment').val();
			$.ajax({
				type	:   'POST',
				url     :   '<?= base_url('action/storeratings');?>',
				data    :   {
								"ratings"		: 	ratings, 
								"clinic_id"		: 	clinic_id, 
								"patient_id"	: 	patient_id, 
								"comment"		: 	comment, 
				},
				beforeSend : function(){$('.loadingDiv').show();},
				success:	function(data)
				{
						 $('.loadingDiv').hide();
						  data = data.trim();
						  if(data == '1')
						  {
						  		$('#commentbox').html('<div class="alert alert-success"><p><b>Your comment added successfully.</b></p></div>');
						  }
						  else if(data == '2')
						  {
						  	$('#commentbox').html('<div class="alert alert-danger"><p><b>We are facing some technical issues. Please try later.</b></p> </div>');
						  }
						  setTimeout(function(){ location.reload(); }, 2000);
				}


			});

		}
	</script>

	</body>
</html>

