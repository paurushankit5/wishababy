<?php
	$cat		=	$array['cat'];
	$country	=	$array['country'];
	$height		=	$array['height'];
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proud Parents</title>

          <!-- CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/fonts/fonts.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/select2.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/gray.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/buttons.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/style.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/media-queries.css">
		<link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/list.css">

        <link rel="shortcut icon" href="<?= base_url('assets/front');?>/assets/img/logo2.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/front/');?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/front/');?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets/front/');?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/front/');?>assets/ico/apple-touch-icon-57-precomposed.png">
	 
		<script src="<?= base_url('assets/front/');?>assets/js/jquery-1.10.2.min.js"></script>

    </head>

    <body>

		<?php
			include('includes/header.php');
			//include('includes/header2.php');
		?>
		
         
        <div class="reviews-container" >
	        <div class="container">

	            <div class="row">
	                <div class="col-sm-3 ">
	                    
	                    
	                </div>
					<div class="col-sm-6" style="border:2px solid white; border-radius:25px;background:#444a5a;">
						<div class="reviews">
							<h2>Register</h2>
						</div>
						 <?php
							if($this->session->flashdata('regmsg'))
							{
								echo $this->session->flashdata('regmsg');
							}
						  ?>
						<form method="post" id="regform" action="<?= base_url('register/storeuser');?>"/>
							<div class="form-group">
								<input type="text" class="form-control" onblur="checklogin(this.value)" id="user_loginname" name="user_loginname" placeholder="Login Name (not shown on site)"/>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="user_fname" name="user_fname" placeholder="First Name (shown on site)"/>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="user_sname" name="user_sname" placeholder="Surname (not shown on site)"/>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="user_email" onblur="checkemail(this.value)" name="user_email" placeholder="Email (not shown on site)"/>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="user_pwd" name="user_pwd" placeholder="Password"/>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="user_pwd2" placeholder="Confirm Password"/>
							</div>
							<hr>
							<div class="form-group">	
								<span class="pull-left"><b>I am</b></span>
								<br>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" onChange="showfield('1');"  value="Sperm Donor" checked name="user_type"><b><i class="fa fa-mars-stroke" aria-hidden="true"></i> Sperm Donor</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" onChange="showfield('1');"  value="Recipient (Sperm)" name="user_type"><b><i class="fa fa-user-o" aria-hidden="true"></i> Recipient (Sperm)</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" onChange="showfield('1');"  value="Egg Donor" name="user_type"><b><i class="fa fa-opera" aria-hidden="true"></i> Egg Donor</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" onChange="showfield('1');"  value="Recipient (Egg)" name="user_type"><b><i class="fa fa-user-o" aria-hidden="true"></i> Recipient (Egg)</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" onChange="showfield('1');"  value="Co-parent (Female)" name="user_type"><b><i class="fa fa-mars-double" aria-hidden="true"></i> Co-parent (Female)</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" onChange="showfield('1');"  value="Co-parent (Male)" name="user_type"><b><i class="fa fa-mars-double" aria-hidden="true"></i> Co-parent (Male)</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" onChange="showfield('clinic');"  value="Clinic" name="user_type"><b><i class="fa fa-mars-double" aria-hidden="true"></i> Clinic</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" onChange="showfield('expert');"  value="Expert"  name="user_type"><b><i class="fa fa-mars-double" aria-hidden="true"></i> Expert</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" onChange="showfield('family');"  value="Family" name="user_type"><b><i class="fa fa-mars-double" aria-hidden="true"></i> Family</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" onChange="showfield('friend');"  value="Friend" name="user_type"><b><i class="fa fa-mars-double" aria-hidden="true"></i> Friend</b></label>
									</div>
								</div>
								<input type="hidden" id="usertype" value="1"/>
							</div>
							<hr style="border:1px solid white">	
							<div id="field">
							 <div class="form-group">	
								<span class="pull-left"><b>Gender</b></span>
								<br>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" value="Male" checked name="user_gender"><b>Male</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" value="Female" name="user_gender"><b>Female</b></label>
									</div>
								</div>
								 
							</div>
							<hr style="border:1px solid white">							 
							 
							<div class="form-group  ">
								<label class="pull-left" for="email">DOB:</label>
								 
								<input type="date" class="form-control" name="user_dob">								 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="email">Country:</label>
								<select class="form-control" name="user_country">
									<?php
										foreach($country as $x)
										{
											?>
											<option><?= $x['country_name'];?></option>
											<?php
										}
									?>
								</select>								 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="email">Ethnicity:</label>								 
								<select class="form-control" name="user_ethnicity">
									<option>Caucasian</option>
									<option>Black</option>
									<option>Hispanic</option>
									<option>Asian / Pacific</option>
									<option>American Indian</option>
									<option>Mixed</option>
									<option>Jewish</option>
									<option>Black / African</option>
									<option>French / Canadian</option>
									<option>Other</option>									 
								</select>								 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="email">Height:</label>
								<select class="form-control" name="user_height">
									<?php
										foreach($height as $x)
										{
											?>
											<option value="<?= $x['height_cm'];?>"><?= $x['height_inch'];?> (<?= $x['height_cm'];?>)</option>
											<?php
										}
									?>
								</select>							 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="user_weight">Weight:</label>
								<input type="number" class="form-control" id="user_weight" placeholder="Weight (in kg)" name="user_weight">
								 							 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="email">Eye Color:</label>
								<select class="form-control" name="user_eye">
									<option>Amber</option>
									<option>Blue</option>
									<option>Brown</option>
									<option>Gray</option>
									<option>Green</option>
									<option>Hazel</option>
									 
								</select>
							 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="email">Hair Color:</label>
								<select class="form-control" name="user_hair">
									<option>Black</option>
									<option>Dark Brown</option>
									<option>Brown</option>
									<option>Auburn</option>
									<option>Red</option>
									<option>Blonde</option>
									<option>Grey</option>
									<option>White</option>
									<option>Light Brown</option>
								</select>
							</div>
							<hr style="border:1px solid white">							 
							 <div class="form-group">	
								<span class="pull-left"><b>Application Type</b></span>
								<br>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" value="Single"  checked name="user_application"><b>Single</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" value="Joint" name="user_application"><b>Joint</b></label>
									</div>
								</div>
								 
							</div>
							</div>
							<hr style="border:1px solid white">
							<label >
								<input type="checkbox" id="check_id" required><small> I certify that I am at least 18 years old and have read and accepted the Code of Conduct & Terms of User</small>
							</label>
							<a onClick="submitform();" class="btn btn-success btn-block"><b>Register Me</b></a>
							<br>
							<br>
						</form>
					</div>
	            </div>
	        </div>
        </div>
       
        
		<?php
			include('includes/footer.php');
		?>

		<script src="<?= base_url('assets/front/');?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/masonry.pkgd.min.js"></script>
        <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/select2.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/jquery.gray.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/scripts.js"></script>
     
       
		<script>
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
				var user_loginname	=	$('#user_loginname').val();
				var user_fname		=	$('#user_fname').val();
				var user_sname		=	$('#user_sname').val();
				var user_email		=	$('#user_email').val();
				var user_pwd		=	$('#user_pwd').val();
				var user_pwd2		=	$('#user_pwd2').val();
				if(user_loginname=='')
				{
					alert('Please enter your login name');					
				}
				
				else if(user_fname=='')
				{
					alert('Please enter your first name');
				}
				else if(user_sname=='')
				{
					alert('Please enter your surname');
				}
				else if(user_email=='')
				{
					alert('Please enter your email');
				}
								
				else if(user_pwd=='')
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
					//alert($('#check_id').val());
					$('#regform').submit();
				}
				
			}
			function showfield(str)
			{
				var preval	=	$('#usertype').val();
				$('#usertype').val(str);
				if(preval==str)
				{
					
				}
				else
				{
					if(str==1)
					{
						$.ajax({
							type	:	'POST',
							url		:	'<?= base_url('register/shownormalfield');?>',
							data	:	'',
							success	:	function(data)
										{
											$('#field').html(data);
										},
						});						
					}
					else if(str=='clinic')
					{
						$.ajax({
							type	:	'POST',
							url		:	'<?= base_url('register/showclinicfield');?>',
							data	:	'',
							success	:	function(data)
										{
											$('#field').html(data);
										},
						});	
					}
					else if(str=='expert')
					{
						$.ajax({
							type	:	'POST',
							url		:	'<?= base_url('register/showexpertfield');?>',
							data	:	'',
							success	:	function(data)
										{
											$('#field').html(data);
										},
						});	
					}
					else if(str=='family')
					{
						$.ajax({
							type	:	'POST',
							url		:	'<?= base_url('register/showfamilyfield');?>',
							data	:	'',
							success	:	function(data)
										{
											$('#field').html(data);
										},
						});	
					}
					else if(str=='friend')
					{
						$.ajax({
							type	:	'POST',
							url		:	'<?= base_url('register/showfriendfield');?>',
							data	:	'',
							success	:	function(data)
										{
											$('#field').html(data);
										},
						});	
					}
					else
					{
						$('#field').html('');
					}
				}
				
			}
			
		</script>

    </body>

</html>

