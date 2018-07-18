<?php
	$country	=	$array['country'];
	$seo		=	$array['seo'];
	$states		=	$array['state'];
	 
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
	?>
 
	

	<section id="fh5co-pricing" data-section="pricing" style="margin-bottom:0px;"  >
		<div class="fh5co-pricing parallax"  style="background-image: ur(<?= base_url();?>img/x.jpg);background-size:cover;">
			<div class="container">
				 
				<div class="row to-animate-2">
				<br>
				<br>
				<h2 class="text text-center" style='color:#3f5267;font-size:40px;font-family:font-family: TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif'><b>Register to WishABaby</b><h2>
					
				<!--<div class="col-sm-6 hidden-xs">
				
					<div class="pricing" style="background:white;padding:30px;border-radius:4px;">
						<h2>Get Started</h2>
						<p><b>
							Register with Wishababy to create your own personal profile and search our worldwide database of IVF Clinics and experts.
						</b></p>
						<p><b>
						You can also search clinics/fertility services in your local area. Or why not connect with Experts specialising in fertility, legal services or holistic health from around the world.				
						</b></p>
						<p>
							Become a member today for free and add your profile as a parent.
						</p>
						<p>
							Or add your fertility clinic/service to our database for free or register as an Expert in your specialist field.
						</p>
					</div>
				</div>-->
				<div class="col-sm-8 col-sm-offset-2">
					
					<div class="col-md-12">
						<form method="post" id="regform" action="<?= base_url('register/storeuser');?>"/>
						 <div class=" pricing col-md-12">
							<div class="price-box to-animate-2 popular " >
								<div class="form-group col-sm-12">
									<input type="email" class="form-control" id="user_email" onblur="checkemail(this.value)" name="user_email" placeholder="Email"/>
								</div> 
								<div class="form-group col-sm-6">
									<input type="text" class="form-control" id="user_fname" name="user_fname" placeholder="First Name  "/>
								</div>
								<div class="form-group col-sm-6">
									<input type="text" class="form-control" id="user_sname" name="user_sname" placeholder="Surname"/>
								</div>
								
								<div class="form-group col-sm-6">
									<input type="password" class="form-control" id="user_pwd" name="user_pwd" placeholder="Password"/>
								</div>
								<div class="form-group col-sm-6">
									<input type="password" class="form-control" id="user_pwd2" placeholder="Confirm Password"/>
								</div>
								<div class="form-group">	
								<div class="col-sm-12">	
								<span class="pull-left" style="font-size:14px;"><b>I am a</b></span>
								
								</div> 
								<div class="col-sm-4 col-xs-12">
									<div class="radio">
										<label class="pull-left"><input checked type="radio" id="parent" onClick="shownothing();" value="1" name="user_type">Parent</label>
									</div>
								</div>
								<div class="col-sm-4 col-xs-12">
									<div class="radio">
										<label class="pull-left"><input type="radio" id="clinic" onClick="showclinic();" value="2" name="user_type">Clinic</label>
									</div>
								</div>
								<div class="col-sm-4 col-xs-12">
									<div class="radio">
										<label class="pull-left"><input type="radio" id="expert" onClick="showexpert();" value="3" name="user_type">Expert</label>
									</div>
								</div>
								</div>
								<br>
								
								
								 <div class="clearfix"></div>
								 <br>
								 <div id="newfield" class="col-md-12">
									<div class="form-group">	
									<div class="col-sm-12">
									<span class="pull-left" style="font-size:14px;"><b>Gender</b></span>
									</div>
									
									 
									<div class="col-sm-4 col-xs-12">
										<div class="radio">
											<label class="pull-left"><input checked type="radio" value="Male" name="user_gender">Male</label>
										</div>
									</div>
									<div class="col-sm-4 col-xs-12">
										<div class="radio">
											<label class="pull-left"><input type="radio"  value="Female" name="user_gender">Female</label>
										</div>
									</div>
									<div class="col-sm-4 col-xs-12">
										<div class="radio">
											<label class="pull-left"><input type="radio"  value="Transgender" name="user_gender">Transgender</label>
										</div>
									</div>
									</div>
									<div class="form-group col-sm-12">
										<label class="pull-left" style="font-size:12px;">DOB:</label>
										<input type="date" class="form-control"  placeholder="Date of Birth" id="user_dob" name="user_dob">
									</div>
									<div class="form-group col-sm-12">
										 
										<input type="text" name="user_adl1"  id="user_adl1"  class="form-control" placeholder="Addess Line 1"/>
									</div>
									<div class="form-group col-sm-12">
									 
										<input type="text" name="user_adl2"  id="user_adl2"   class="form-control" placeholder="Addess Line 2"/>
									</div>
									<div class="form-group col-sm-6">
										 
										<select name="user_state" required onchange="showcity(this.value);" id="user_state" class="form-control" placeholder="State">
											<?php
												echo '<option value="">Select state</option>';
												if(count($states))
												{
													foreach ($states as $x)
													{
														?>
														<option value="<?= $x['city_state'];?>"><?= $x['city_state'];?></option>
														<?php
													}
												}
											?>											
										</select>
									</div>
									<div class="form-group col-sm-6">
										<select name="user_city" id="user_city" required id="user_city" class="form-control" placeholder="City">
											<option value=''>Select City</option>
										</select>
									</div>									 
								 </div>
								</form> 
							 
							
							
							 <div class="clearfix"></div>	
							 <div class="form-group">
								<label >
									<input type="checkbox" id="check_id" required><small><span style="font-size:12px;margin-bottom:0px;"><b> I have read and accepted the <a href="<?= base_url('about-wishababy/terms-of-use');?>" target="_blank">Code of Conduct & Terms of Use</a>.</b></span></small>
								</label>
								<a onClick="submitform();" class="btn btn-danger btn-block"><b>Register Me</b></a>
							 </div>
							</div>	 
							</div>
						</div>
						

						 
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
			function shownothing()
			{
				$.ajax({
							type	:	'POST',
							url		:	'<?= base_url('register/showparentfiled');?>',						 
							success	:	function(data)
										{
											$('#newfield').html(data); 
										},
						});
			}
			function showclinic()
			{
				$.ajax({
							type	:	'POST',
							url		:	'<?= base_url('register/showclinicfield');?>',						 
							success	:	function(data)
										{
											$('#newfield').html(data); 
										},
						});
			}
			function showexpert()
			{
				$.ajax({
							type	:	'POST',
							url		:	'<?= base_url('register/showexpertfield');?>',						 
							success	:	function(data)
										{
											$('#newfield').html(data); 
										},
						});
			}
			
			function checklogin(str)
			{
				$.ajax({
							type	:	'POST',
							url		:	'<?= base_url('register/checkuser');?>',
							data	:	'user_loginname='+str,
							success	:	function(data)
										{
											if(data==1)
											{
												alert('This Login name is already taken. Please try some other login name.');
											}
										},
						});
			}
			function checkemail(str)
			{
				$.ajax({
							type	:	'POST',
							url		:	'<?= base_url('register/checkuser');?>',
							data	:	'user_email='+str,
							success	:	function(data)
										{
											if(data==1)
											{
												alert('This email-id is already taken. ');
											}
										},
						});
			}
			
			function submitform()
			{
				 
				var user_fname		=	$('#user_fname').val();
				var user_sname		=	$('#user_sname').val();
				var user_email		=	$('#user_email').val();
				var user_pwd		=	$('#user_pwd').val();
				var user_pwd2		=	$('#user_pwd2').val();
				
				if(user_email=='')
				{
					alert('Please enter your email');
				}
				else if(!ValidateEmail(user_email))
				{
					alert('Please enter a valid email');
				}
				else if(user_fname.trim()=='')
				{
					alert('Please enter your first name');
				}
				else if(user_sname.trim()=='')
				{
					alert('Please enter your surname');
				}
				else if(user_pwd.trim()=='')
				{
					alert('Please enter your password');
				}
				else if(user_pwd!=user_pwd2)
				{
					alert('Passwords do not match');
				}
				else if($('#check_id').is(":checked")==0)
				{
					alert('Please accept our Code of Conduct and terms of user');
				}				
				else{
					if(document.getElementById("parent").checked)
					{
						var user_dob		=	$('#user_dob').val();
						var user_adl1		=	$('#user_adl1').val();
						var user_state		=	$('#user_state').val();
						var user_city		=	$('#user_city').val();
						if(user_dob=='')
						{
							alert('Please enter your Date of birth');
						}
						else if(user_adl1.trim()==''){
							alert('Please enter your address');
						}
						else if(user_state==''){
							alert('Please select a state');
						}
						else if(user_city==''){
							alert('Please select a city');
						}
						else
						{
							$('#regform').submit();
						}
					}
					else if(document.getElementById("expert").checked)
					{
						var user_expert_qualification	=	$('#user_expert_qualification').val();
						var user_expert_job				=	$('#user_expert_job').val();
						var user_expert_specality		=	$('#user_expert_specality').val();
						if(user_expert_qualification	==	'')
						{
							alert('Please enter your quaification');
						}
						else if(user_expert_job	==	'')
						{
							alert('Please enter your job title');
						}
						else if(user_expert_specality	==	'')
						{
							alert('Please select a speciality');
						}
						else
						{
							$('#regform').submit();
						}
					}
					else
					{
						$('#regform').submit();
					}
					
				}
				
			}
			function ValidateEmail(mail)   
			{  
			 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))  
			  {  
				return (true)  
			  }  
				//alert("You have entered an invalid email address!")  
				return (false)  
			} 
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
				  url	:	'<?= base_url('home/showcities');?>',
				  data	:	'city_state='+str,
				  success	:	function(data){
								$('#user_city').html(data);
				  }
			  });
		  }
		}
			 
		</script>
	</body>
</html>

