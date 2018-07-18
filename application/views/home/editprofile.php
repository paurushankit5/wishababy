<?php
	//$country	=	$array['country'];
	$me			=	$array['me'];
	$height		=	$array['height'];
	$states		=	$array['states'];
	
	 
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
			border:1px solid gray;
			border-radius:5px;
			height:auto;
			margin:10px;
			margin-bottom:40px;
			padding:50px;
			text-align:left;
			box-shadow: 20px 20px 10px #888888;
		}
		.homeservice h3{
			font-size:20px;
		}
		.radio, label{
			font-size:14px;
			 
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
		 
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<ol class="breadcrumb pull-right" style="font-size:12px;">
						  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
						  <li class="breadcrumb-item"><a href="<?= base_url('dashboard');?>">Dashboard</a></li>
						  <li class="breadcrumb-item"><a href="<?= base_url('myprofile');?>">My Profile</a></li>
						  <li class="breadcrumb-item active">Edit Profile</li>
					</ol>
					<div class="clearfix"></div>
					<h2 class="to-animate">Edit Profile</h2>
					<?php
						if($this->session->flashdata('profilemsg'))
						{
							echo $this->session->flashdata('profilemsg');
						}
					  ?>
					<div class="col-sm-12  "  >
						<div class="homeservice">
							<form class="form-horizontal" action="<?= base_url('myprofile/updateprofile');?>" method="post">
								<div class="row">
									 
									<div class="col-md-6" style="padding:20px;">
										<div class="">
											<label>First Name</label>
											<input type="text" class="form-control" value="<?= $me['user_fname'];?>" id="user_fname" name="user_fname" placeholder="First Name (shown on site)"/>
											<input type="hidden" class="form-control" value="India" id="user_country" name="user_country" placeholder="First Name (shown on site)"/>
										</div>
									</div>
									<div class="col-md-6"  style="padding:20px;">
										<div class="form-group">
											<label>Surname</label>
											<input type="text" class="form-control" id="user_sname" value="<?= $me['user_sname'];?>" name="user_sname" placeholder="Surname (not shown on site)"/>
										</div>
									</div>
								
								</div>
								 
								 
							
						</div>
					</div>
					<div class="col-sm-6">
						<div class="homeservice">
							<!--<h4>Additional Details</h4>-->
							<div class="form-group">
								<label>About Me:</label>
								<textarea class="form-control" name="user_about" ><?= $me['user_about'];?></textarea>
							</div>
							<div class="form-group">
								<label>Date of Birth:</label>
								<input type="date" class="form-control" name="user_dob" value="<?= $me['user_dob'];?>">
							</div>							
							<div class="form-group">								 
								<div class="row">
								<div class="col-sm-4">
									<label><b>Gender:</b></label>
								</div>
								<div class="col-sm-2">
									<div class=" ">
										<label class="pull-left"><input type="radio" <?php if($me['user_gender']=='Male'){echo "checked";}?> value="Male"  name="user_gender">Male</label>
									</div>
								</div>
								<div class="col-sm-3">
									<div class=" ">
										<label class="pull-left"><input type="radio" <?php if($me['user_gender']=='Female'){echo "checked";}?> value="Female" name="user_gender">Female</label>
									</div>
								</div>	
								<div class="col-sm-3">
									<div class=" ">
										<label class="pull-left"><input type="radio" <?php if($me['user_gender']=='Transgender'){echo "checked";}?> value="Transgender" name="user_gender">Transgender</label>
									</div>
								</div>								 
								</div>								 
							</div>							
							<div class="form-group">								
								<div class="row">
								<div class="col-sm-4">
									<label><b>Application Type:</b></label>								 
								</div>
								 
								<div class="col-sm-4">
									<div class=" ">
										<label class="pull-left"><input type="radio" <?php if($me['user_application']=='Single'){echo "checked";}?> value="Single"   name="user_application">Single</label>
									</div>
								</div>
								<div class="col-sm-4">
									<div class=" ">
										<label class="pull-left"><input type="radio" <?php if($me['user_application']=='Joint'){echo "checked";}?> value="Joint" name="user_application">Joint</label>
									</div>
								</div>								 
								</div>								 
							</div>
							 
						</div>						
					</div>	
					<div class="col-sm-6  "  >
						<div class="homeservice">
							 
							<div class="form-group">
								<label>Interest:</label>
								<textarea class="form-control" name="user_interest" ><?= $me['user_interest']; ?></textarea>
							</div>
							<!--<div class="form-group col-sm-6">
								<label>Ethnicity:</label>
								<select class="form-control" name="user_ethnicity">
									<option value="">Select Ethnicity</option>
									<option <?php if($me['user_ethnicity']=='Caucasian'){echo "selected";}?> >Caucasian</option>
									<option <?php if($me['user_ethnicity']=='Black'){echo "selected";}?> >Black</option>
									<option <?php if($me['user_ethnicity']=='Hispanic'){echo "selected";}?>>Hispanic</option>
									<option <?php if($me['user_ethnicity']=='Asian / Pacific'){echo "selected";}?>>Asian / Pacific</option>
									<option <?php if($me['user_ethnicity']=='American Indian'){echo "selected";}?> >American Indian</option>
									<option <?php if($me['user_ethnicity']=='Mixed'){echo "selected";}?> >Mixed</option>
									<option <?php if($me['user_ethnicity']=='Jewish'){echo "selected";}?> >Jewish</option>
									<option <?php if($me['user_ethnicity']=='Black / African'){echo "selected";}?> >Black / African</option>
									<option <?php if($me['user_ethnicity']=='French / Canadian'){echo "selected";}?>>French / Canadian</option>
									<option <?php if($me['user_ethnicity']=='Other'){echo "selected";}?>>Other</option>									 
								</select>
							</div>-->
							 
							<div class="form-group col-sm-6">
								<label>Religion:</label>
								<select class="form-control" name="user_religion">
									<option value="">Select Religion</option>
									<option <?php if($me['user_religion']=='Hinduism'){echo "selected";}?> >Hinduism</option>
									<option <?php if($me['user_religion']=='Islam'){echo "selected";}?> >Islam</option>
									<option <?php if($me['user_religion']=='Christianity'){echo "selected";}?> >Christianity</option>
									<option <?php if($me['user_religion']=='Jainism'){echo "selected";}?> >Jainism</option>
									<option <?php if($me['user_religion']=='Sikhism'){echo "selected";}?> >Sikhism</option>
									<option <?php if($me['user_religion']=='Buddhism'){echo "selected";}?> >Buddhism</option>
									<option <?php if($me['user_religion']=='Zoroastrianism'){echo "selected";}?> >Zoroastrianism</option>
									<option <?php if($me['user_religion']=='Judaism'){echo "selected";}?> >Judaism</option>
									 
								</select>
							</div>
							<!--<div class="form-group col-sm-6">
								<label>Blood Group:</label>
								<select name="user_blood" class="form-control">
									<option value="">Select Blood Group</option>
									<option <?php if($me['user_blood']=='A-'){echo "selected";}?> >A-</option>
									<option <?php if($me['user_blood']=='A+'){echo "selected";}?> >A+</option>
									<option <?php if($me['user_blood']=='AB-'){echo "selected";}?> >AB-</option>
									<option <?php if($me['user_blood']=='AB+'){echo "selected";}?> >AB+</option>
									<option <?php if($me['user_blood']=='B-'){echo "selected";}?> >B-</option>
									<option <?php if($me['user_blood']=='B+'){echo "selected";}?> >B+</option>
									<option <?php if($me['user_blood']=='O-'){echo "selected";}?> >O-</option>
									<option <?php if($me['user_blood']=='O+'){echo "selected";}?> >O+</option>
								</select>
							</div>-->
							<!--<div class="form-group col-sm-6">
								<label>Do you already have children?</label>
								<select name="user_child" class="form-control">
									<option value="">Do you already have children?</option>
									<option <?php if($me['user_child']=='Yes'){echo "selected";}?> >Yes</option>
									<option <?php if($me['user_child']=='No'){echo "selected";}?> >No</option>									
								</select>
							</div>-->
							
							<!--<div class="form-group col-sm-6">
								<label>Relationship Status:</label>
								<select name="user_relationship" class="form-control">
									<option value="">Donation Type</option>
									<option <?php if($me['user_relationship']=='Cohabitation'){echo "selected";}?> >Cohabitation</option>
									<option <?php if($me['user_relationship']=='Civil Partnership'){echo "selected";}?> >Civil Partnership</option>
									<option <?php if($me['user_relationship']=='Marriage'){echo "selected";}?> >Marriage</option>
									<option <?php if($me['user_relationship']=='Single'){echo "selected";}?> >Single</option>
									<option <?php if($me['user_relationship']=='Divorced'){echo "selected";}?> >Divorced</option>
									<option <?php if($me['user_relationship']=='Separated'){echo "selected";}?> >Separated</option>
									<option <?php if($me['user_relationship']=='Dissolution of Civil Partnership'){echo "selected";}?> >Dissolution of Civil Partnership</option>
									<option <?php if($me['user_relationship']=='Widow/Widower'){echo "selected";}?> >Widow/Widower</option>							
								</select>
							</div>-->
							<!--<div class="form-group col-sm-6">
								<label>Looking For:</label>
								<select name="user_looking" class="form-control">
									<option value="">Looking For</option>
									<option <?php if($me['user_looking']=='Gay couple'){echo "selected";}?> >Gay couple</option>
									<option <?php if($me['user_looking']=='Heterosexual couple'){echo "selected";}?> >Heterosexual couple</option>
									<option <?php if($me['user_looking']=='Lesbian couple'){echo "selected";}?> >Lesbian couple</option>
									<option <?php if($me['user_looking']=='Single Gay Man'){echo "selected";}?> >Single Gay Man</option>
									<option <?php if($me['user_looking']=='Single Lesbian Woman'){echo "selected";}?> >Single Lesbian Woman</option>
									<option <?php if($me['user_looking']=='Single Man'){echo "selected";}?> >Single Man</option>
									<option <?php if($me['user_looking']=='Single Woman'){echo "selected";}?> >Single Woman</option>									 							
								</select>
							</div>-->
							<div class="form-group col-sm-6">
								<label>Sexuality:</label>
								<select name="user_sexuality" class="form-control">
									<option value="">Sexuality</option>
									<option <?php if($me['user_sexuality']=='Male'){echo "selected";}?> >Male</option>
									<option <?php if($me['user_sexuality']=='Female'){echo "selected";}?> >Female</option>
									<option <?php if($me['user_sexuality']=='Transgender'){echo "selected";}?> >Transgender</option>
									
									<!--<option <?php if($me['user_sexuality']=='Heterosexual'){echo "selected";}?> >Heterosexual</option>
									<option <?php if($me['user_sexuality']=='Gay'){echo "selected";}?> >Gay</option>
									<option <?php if($me['user_sexuality']=='Lesbian'){echo "selected";}?> >Lesbian</option>
									<option <?php if($me['user_sexuality']=='Bisexual'){echo "selected";}?> >Bisexual</option>
									<option <?php if($me['user_sexuality']=='Transvestite'){echo "selected";}?> >Transvestite</option>
									<option <?php if($me['user_sexuality']=='Transsexual'){echo "selected";}?> >Transsexual</option>-->
																	 							
								</select>
							</div>
							 
							<div class="form-group col-sm-6">
								<label>Education:</label>
								<select name="user_education" class="form-control">
									<option value="">Education</option>
									<option <?php if($me['user_education']=='High School'){echo "selected";}?> >High School</option>
									<option <?php if($me['user_education']=='College'){echo "selected";}?> >College</option>
									<option <?php if($me['user_education']=='Trade Qualification'){echo "selected";}?> >Trade Qualification</option>
									<option <?php if($me['user_education']=='University Degree'){echo "selected";}?> >University Degree</option>
									<option <?php if($me['user_education']=='Higher University Degree'){echo "selected";}?> >Higher University Degree</option>
									<option <?php if($me['user_education']=='Professional Qualification'){echo "selected";}?> >Professional Qualification</option>									 							
								</select>
							</div>
							<div class="form-group col-sm-6">
								<label>Profession:</label>
								<select name="user_profession" class="form-control">
									<option value="">Profession</option>
									<option <?php if($me['user_profession']=='Administration'){echo "selected";}?> >Administration</option>
									<option <?php if($me['user_profession']=='Advertising, marketing and PR'){echo "selected";}?> >Advertising, marketing and PR</option>
									<option <?php if($me['user_profession']=='Animal and plant resources'){echo "selected";}?> >Animal and plant resources</option>
									<option <?php if($me['user_profession']=='Charity and voluntary work'){echo "selected";}?> >Charity and voluntary work</option>
									<option <?php if($me['user_profession']=='Construction and property'){echo "selected";}?> >Construction and property</option>
									<option <?php if($me['user_profession']=='Creative arts and design'){echo "selected";}?> >Creative arts and design</option>
									<option <?php if($me['user_profession']=='Education'){echo "selected";}?> >Education</option>
									<option <?php if($me['user_profession']=='Engineering, manufacturing and production'){echo "selected";}?> >Engineering, manufacturing and production</option>
									<option <?php if($me['user_profession']=='Environment'){echo "selected";}?> >Environment</option>
									<option <?php if($me['user_profession']=='Financial management and accountancy'){echo "selected";}?> >Financial management and accountancy</option>
									<option <?php if($me['user_profession']=='Health care'){echo "selected";}?> >Health care</option>
									<option <?php if($me['user_profession']=='Hospitality and events management'){echo "selected";}?> >Hospitality and events management</option>
									<option <?php if($me['user_profession']=='Human resources and employment'){echo "selected";}?> >Human resources and employment</option>
									<option <?php if($me['user_profession']=='Information services'){echo "selected";}?> >Information services</option>
									<option <?php if($me['user_profession']=='Information technology'){echo "selected";}?> >Information technology</option>
									<option <?php if($me['user_profession']=='Insurance and pensions'){echo "selected";}?> >Insurance and pensions</option>
									<option <?php if($me['user_profession']=='Law enforcement and protection'){echo "selected";}?> >Law enforcement and protection</option>
									<option <?php if($me['user_profession']=='Legal profession'){echo "selected";}?> >Legal profession</option>
									<option <?php if($me['user_profession']=='Leisure, sport and tourism'){echo "selected";}?> >Leisure, sport and tourism</option>
									<option <?php if($me['user_profession']=='Management and statistics'){echo "selected";}?> >Management and statistics</option>
									<option <?php if($me['user_profession']=='Media and broadcasting'){echo "selected";}?> >Media and broadcasting</option>
									<option <?php if($me['user_profession']=='Mining and land surveying'){echo "selected";}?> >Mining and land surveying</option>
									<option <?php if($me['user_profession']=='Performing arts'){echo "selected";}?> >Performing arts</option>
									<option <?php if($me['user_profession']=='Publishing and journalism'){echo "selected";}?> >Publishing and journalism</option>
									<option <?php if($me['user_profession']=='Retailing, buying and selling'){echo "selected";}?> >Retailing, buying and selling</option>
									<option <?php if($me['user_profession']=='Scientific services'){echo "selected";}?> >Scientific services</option>
									<option <?php if($me['user_profession']=='Social care and guidance work'){echo "selected";}?> >Social care and guidance work</option>
									<option <?php if($me['user_profession']=='Transport, logistics and distribution'){echo "selected";}?> >Transport, logistics and distribution</option>
									<option <?php if($me['user_profession']=='Others'){echo "selected";}?> >Others</option>
									 							
								</select>
							</div>
							<div class="clearfix"></div>	
							
						</div>	
					</div>	
					<div class="col-sm-12  "  >
						<div class="homeservice">
							<div class="form-group col-sm-6">
								<label> Address Line 1</label>
								<input type="text" name="user_adl1" value="<?= $me['user_adl1'];?>" class="form-control" placeholder="Addess Line 1"/>
							</div>
							<div class="form-group col-sm-6">
								<label> Address Line 2</label>
								<input type="text" name="user_adl2" value="<?= $me['user_adl2'];?>" class="form-control" placeholder="Addess Line 2"/>
							</div>
							<div class="form-group col-sm-6">
								<label> State</label>
								<select name="user_state" required onchange="showcity(this.value);" class="form-control" placeholder="State">
									<?php
										if($me['user_state']!='')
										{
											?>
											<option value="<?= $me['user_state'];?>"><?= $me['user_state'];?></option>
											<?php
										}
										else
										{
											echo '<option>Select state</option>';
										}
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
								<label> City</label>
								<select name="user_city" id="user_city" required class="form-control" placeholder="City">
									<?php
										if($me['user_city']!='')
										{
											?>
											<option value="<?= $me['user_city'];?>"><?= $me['user_city'];?></option>
											<?php
										}
										else
										{
											echo "<option value=''>Select City</option>";
										}
									?>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label> Pincode</label>
								<input type="text" name="user_pin"  maxlength="6" pattern="[0-9]{6}" class="form-control" value="<?= $me['user_pin'];?>" placeholder="Zipcode / Pincode"/>
							</div>
							 
							<div class="form-group col-sm-4">
								<label> Mobile</label>
								<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">+91</span>
							
								<input type="text" name="user_mobile" required  pattern="[0-9]{10}" maxlength="10" value="<?= $me['user_mobile'];?>" class="form-control" placeholder="Mobile"/>
								</div>
							</div>
							<div class="form-group col-sm-4">
								<label> Alternate Number</label>
								<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">+91</span>
							
								<input type="text" name="user_tel"  pattern="[0-9]{10}" maxlength="10" value="<?= $me['user_tel'];?>" class="form-control" placeholder="Telephone"/>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-12">
								<input type="submit" class="btn btn-success btn-block " value="Submit"/>							
							</div>
							</form>
							<br>
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
				  url	:	'<?= base_url('myprofile/showcities');?>',
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

