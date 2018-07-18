<?php
	$clinic		=	$array['clinic'];
	$user		=	$array['user'];
	$service	=	$array['service'];
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
	 	.checked {
		    color: orange;
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
 
	$states	=	$array['states'];
	 
?>

<div class="getting-started getting-started-2 "  style="background-image: url(<?= base_url();?>img/4.jpg);background-size:cover;">
	<div class="container-fluid">
		<div class="row">
			<br>	<br>
			<br>	<br>
			
			<div class="col-sm-12">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="col-sm-4 ">
						<select name="user_state" id="user_state" onchange="showcity(this.value);"  required style="border:10px solid gray;color:black;opacity: 0.7;filter: alpha(opacity=70);height:80px;font-size:16px;margin-bottom:10px; " class="form-control col-sm-6">
							<option value=''>Please select state</option>							
									<?php
										if(count($states))
										{
											foreach($states as $x)
											{
												?>
												<option  value="<?= $x['city_state'];?>"><?= $x['city_state'];?></option>
												<?php
											}
										}
									?>
						</select>
					</div>
					<div class="col-sm-4">
						<select name="user_city"  id="user_city" required style="border:10px solid gray;color:black;opacity: 0.7;filter: alpha(opacity=70);height:80px;font-size:16px;margin-bottom:10px;" class="form-control col-sm-6">
							<option style="padding:100px;" value="">Select City</option>
						 
						</select>
					</div>
					<div class="col-sm-4">
						<select name="user_service"  id="user_service"  required style="border:10px solid gray;color:black;opacity: 0.7;filter: alpha(opacity=70);height:80px;font-size:16px;margin-bottom:10px;" class="form-control col-sm-6">
							<option style="padding:100px;" value="">Select Services</option>
							<?php
								if(count($service))
								{
									foreach($service as $x)
									{
										?>
											<option value="<?= $x['service_name'];?>"><?= $x['service_name'];?></option>
										<?php
									}
								}
							?>
							
							 
							 
				 
						</select>
					</div>
				</div>
			</div>
			 
			 <div class="col-md-4 col-sm-offset-4">
				<br>
				<button type="submit" onClick="findexperts();" style="border:1px solid white;opacity:0.8;font-size:16px;margin-top: 20px;padding: 18px 60px;border-radius: 4px;" class="btn btn-primary btn-block  btn-select-plan btn-sm pull-right">Find Experts</button>
			</div>
			<br><br><br><br>
		</div>
	</div>
</div> 
<script>
	 
  function showcity(str)
  {
	  if(str=='')
	  {
		  alert('Please select a state first');
	  }
	  else
	  {
		  $.ajax({
			  type	:	'POST',
			  url	:	'<?= base_url('findaclinic/showcities');?>',
			  data	:	'city_state='+str,
			  success	:	function(data){
							$('#user_city').html(data);
			  }
		  });
	  }
  }
 function findexperts()
 {
	 var user_city		=	$('#user_city').val();
	 var user_state		=	$('#user_state').val();
	 var service	=	$('#user_service').val();
	 var user_service = [];
     user_service.push(service);
            
	 var user_type		=	3; //For clinic user_type is 2
	 if(user_service	=="")
	 {
		 alert('Please select a service first');
	 }
	 else 
	 {
		var count	=	0; 
		 $.ajax({
			  
			 type	:	'POST',
			// data	:	'user_city='+user_city+'&user_state='+user_state+'&user_service='+user_service+'&user_type='+user_type+'&count='+count,
			 data	:	{
							user_city		:	user_city,
							user_state		:	user_state,
							user_service	:	user_service,
							user_type		:	user_type,
							count			:	count,
						},
			 url	:	'<?= base_url('search/findexpert');?>',
			 beforeSend : function(){$('.loadingDiv').show();},
			 success:	function(data)
			 {
				$('.loadingDiv').hide(); 
				 
				 $('#count').val(1);
				 if(data	!=	0)
				 {
					$('#mainarea').html(data);
					$("#loadmore").removeClass("hidden");
					$("#loadmorefilter").addClass("hidden");
				 }	
				else
				{
					$('#mainarea').html('<div class="alert alert-danger">OOps!.. No results found.	</div>');
				}
			 }
		 });
	 }
 }
 function applyfilter()
 {
	 var user_city		=	$('#user_city').val();
	 var user_state		=	$('#user_state').val(); 
	 var user_service = [];
            $.each($("input[name='services']:checked"), function(){            
                user_service.push($(this).val());
            });
	  if(user_service	=="")
	 {
		 alert('Please select a service first');
	 }	  
	 else 
	 {
		 var count	=	0; 
		 $.ajax({
			  
			 type	:	'POST',
			// data	:	'user_city='+user_city+'&user_state='+user_state+'&user_service='+user_service+'&user_type='+user_type+'&count='+count,
			 data	:	{
							user_city		:	user_city,
							user_state		:	user_state,
							user_service	:	user_service,
							user_type		:	3,
							count			:	count,
						},
			 url	:	'<?= base_url('search/findexpert');?>',
			 beforeSend : function(){$('.loadingDiv').show();},
			 success:	function(data)
			 {
				 $('.loadingDiv').hide();
				 $('#mainarea').html(data);
				 $('#count').val(1);
				 if(data	!=	0)
				 {
					  $("#loadmorefilter").removeClass("hidden");
					  $("#loadmore").addClass("hidden");
				 }	
				else
				{
					alert('No Results');
					 $("#loadmorefilter").addClass("hidden");
					  $("#loadmore").addClass("hidden");
				}
			 }
		 });
	 }
	 
 }
 function loadmore()
 {
	 var count			=	 $('#count').val();
	 var user_city		=	$('#user_city').val();
	 var user_state		=	$('#user_state').val();
	 var service		=	$('#user_service').val();
	 var user_service   = [];
     user_service.push(service);	 
	 var user_type		=	3; //For expert user_type is 3
	 $.ajax({		  
		 type	:	'POST',			
		 data	:	{
						user_city		:	user_city,
						user_state		:	user_state,
						user_service	:	user_service,
						user_type		:	user_type,
						count			:	count,
					},
		 url	:	'<?= base_url('search/findexpert');?>',
		 beforeSend : function(){$('.loadingDiv').show();},
		 success:	function(data)
		 {	
			$('.loadingDiv').hide();
			if(data	!=0)
			{
				$('#mainarea').append(data);
				count	=	(count*10	+	1*10)/10;
				$('#count').val(count);
				 
				$("#loadmore").removeClass("hidden");
				$("#loadmorefilter").addClass("hidden");
				  
			}
			else
			{
				alert('No results');
				$("#loadmore").addClass("hidden");
			}
		 }
	 });
 }
 function loadmorefilter()
 {
	 var count			=	 $('#count').val();
	 var user_city		=	$('#user_city').val();
	 var user_state		=	$('#user_state').val();
	 var user_service = [];
            $.each($("input[name='services']:checked"), function(){            
                user_service.push($(this).val());
            });	 
	 var user_type		=	3; //For clinic user_type is 2
	 $.ajax({		  
		 type	:	'POST',			
		 data	:	{
						user_city		:	user_city,
						user_state		:	user_state,
						user_service	:	user_service,
						user_type		:	user_type,
						count			:	count,
					},
		 url	:	'<?= base_url('search/findexpert');?>',
		 beforeSend : function(){$('.loadingDiv').show();},
		 success:	function(data)
		 {	
			$('.loadingDiv').hide();
			if(data	!=0)
			{
				$('#mainarea').append(data);
				count	=	(count*10	+	1*10)/10;
				$('#count').val(count);
				$("#loadmorefilter").removeClass("hidden");
				$("#loadmore").addClass("hidden");
			}
			else
			{
				alert('No More Results');
				$("#loadmorefilter").addClass("hidden");
			}
		 }
	 });
 }
 
</script>
 
	<section id="fh5co-team" data-section="team" style="padding-top:0px;">
		<div class="fh5co-team">
			<div class="container-fluid">
				<div class="row">
					 <ol class="breadcrumb pull-right" style="font-size:12px;">
						  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
						  
						  <li class="breadcrumb-item active">Consult An Expert</li>
					</ol>
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Expert Directory</h2>						 
					</div>
				</div>
				<div class="row">
				<div class="col-md-3 col-sm-3 sidebar" style="font-size:12px;">		 
					<div class="mini-submenu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
					<div class="list-group">
						<span href="#" class="list-group-item active">
							Services							 
						</span>
						<?php
								if(count($service))
								{
									foreach($service as $x)
									{
										?>
											<label class="list-group-item">
												<i class="fa fa-shield"></i> <?= $x['service_name'];?> <input type="checkbox" value="<?= $x['service_name'];?>" name="services" class="pull-right"/>
											</label>
										<?php
									}
								}
							?> 
						
						 
						 
						<label class="list-group-item">
							<button class="btn btn-success btn-block btn-sm" onClick="applyfilter();">Apply Filters</button>
						</label>
						 
						 
					</div>
				</div>
				<div class="col-md-9 col-sm-9">
				<div class="col-md-12 col-sm-12" id="mainarea">
					<?php
						 
						if(count($clinic))
						{
							$i=0;
							foreach($clinic as $x)
							{
								
								$clinic_id		=	$x['user_id'];
								$user_image		=	$x['user_image'];
								if($i==0 || $i%3==0)
								{
									?>
									<div class="row">
									<?php
								}
								?>
								<div class="col-md-4" style="margin-bottom:100px;">
									
									<div class="team-box text-center to-animate-2" style="padding:5px;padding-top:80px;min-height:520px;">
										<div class="user"><img class="img-reponsive" <?php if($x['user_image']==''){ ?> src="<?= base_url('img/expert.jpg');?>" <?php } else { ?>src="<?= base_url('img/user/'.$clinic_id.'/'.$user_image);?>" <?php } ?> alt="<?= $x['user_clinic_name'];?>"></div>
										<h3>
											<?= $x['user_fname'];?>
											<?= $x['user_sname'];?>										
										</h3>
										<?php
											if($x['user_count_rated']!=0)
											{	
												$totalrating1 = $x['user_rating']/$x['user_count_rated'];
												$totalratings = number_format($x['user_rating']/$x['user_count_rated'],1);
												//echo $totalratings;
												$starrating = 1;

												$lastrating  = 5-ceil($totalratings);
												while($starrating<= $totalratings)
												{
													?>
														<span class="fa fa-star checked" title="<?= $totalratings;?> ratings from <?= $x['user_count_rated'];?> reviews"></span>
													<?php
													$starrating++;
												}
												if (strpos($totalrating1,'.') !== false) { 
													?> 							 
													<span class="fa fa-star-half-o checked"  title="<?= $totalratings;?> ratings from <?= $x['user_count_rated'];?> reviews"></span>
													<?php 
												} 
												while($lastrating!=0)
												{
													?>
														<span class="fa fa-star"  title="<?= $totalratings;?> ratings from <?= $x['user_count_rated'];?> reviews"></span>
													<?php
													$lastrating--;
												}
											}
											else{
												echo "<br>";
											}									
															  
										?>
										<table class="table table-responsive" style="width:100%;font-size:14px;">
											<tr>
												<th style="width:50%">Location:</th>
												<th style="width:50%"><?= $x['user_city'];?>, <?= $x['user_state'];?></th>
											</tr>
											<tr>
												<th style="width:50%">Service:</th>
												<th style="width:50%" ><?= substr(implode(", ",explode(",",$x['user_service'])),0,100); ?></th>
											</tr>
											<tr>
												<th style="width:50%">Education:</th>
												<th style="width:50%"><?= substr($x['user_expert_qualification'],0,25);  ?></th>
											</tr>
											<tr>
												<th style="width:50%">Website:</th>
												<th style="width:50%"><a href="" target="_blank">
												<?php 
													if( $x['user_clinic_website']!=''){
														echo substr($x['user_clinic_website'],0,25);
													}
													else
													{
														echo "http://www.wishababy.com";
													}
													?></a>
													</th>
											</tr>
											<tr>
												<td colspan="2" style="width:100%">
												<p class="text text-justify" style="font-size:12px;"><?= substr($x['user_about'],0,180);?></p></td>
											</tr>
										</table>
										 
										<a style="position: absolute;bottom: 71px;right:63px;" href="<?= base_url('Consult-An-Expert/Expert-Details/'.$x['user_id']);?>" class="btn btn-success btn-sm">View Profile</a>
										<button style="position: absolute;bottom: 38px;right:37px;" onclick="callback('<?= $x['user_id'];?>','<?= strtoupper($x['user_fname']);?> <?= strtoupper($x['user_sname']);?>');" class="btn btn-success btn-sm">Request A Callback</button>

										<?php
											if(isset($_COOKIE['wish_user_id']))
											{
												?>
												<a href="#" style="position: absolute;bottom: 5px;right:30px;"	 onClick="bookanappointment('<?= $x['user_id'];?>','<?= $x['user_fname']." ".$x['user_sname'];?>')" class="btn btn-success btn-sm">Book An Appointment</a>
												<?php
											}
											else
											{
												?>
													 
													<a href="#" style="position: absolute;bottom: 5px;right:30px;" data-toggle="modal" " data-target="#loginmodal" class="btn btn-success btn-sm">Book An Appointment</a>
												<?php
											}
										?>
										<br>
									</div>
								</div>
								
								<?php
								$i++;
								if($i%3==0)
								{
									?>
									</div>
									<?php
								}
							}
						}
						
					?>	
					<div class="clearfix"></div>
					<div class="row">
							<?php echo $this->pagination->create_links();?>
					</div>
					</div>
					
					
					</div>
					
				</div>
				<div class="col-md-9 col-md-offset-3 " >
					<input type="hidden" id="count"/>
					<button onclick="loadmore();" id="loadmore" style="border-radius:0px;padding:10px 20px;" class="btn btn-success btn-block btn-lg hidden">Load More</button>
				 
					 
					<button onclick="loadmorefilter();" id="loadmorefilter" style="border-radius:0px;padding:10px 20px;" class="btn btn-success btn-block btn-lg hidden">Load More</button>
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
					},
					beforeSend : function(){$('.loadingDiv').show();},
					 success:	function(data)
					 {
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
					<input type="time" name="ap_time" value="10:00:00" id="ap_time" class="form-control"/>					
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
					<input type="hidden" name="call_clinic_id" id="call_clinic_id" class="form-control"/>					
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

	</body>
</html>

