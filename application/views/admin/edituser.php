<?php
	$me	=	$array['parent'];
	$states	=	$array['states'];
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin  | <?= $me['user_fname'];?> | Edit Parent Details</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/');?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/');?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/');?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php
	include('includes/header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Parent Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('admin/parents');?>">Parents</a></li>
        <li><a href="<?= base_url('admin/viewuser/'.$me['user_id']);?>"><?= $me['user_fname']." ".$me['user_sname'];?></a></li>
		<li class="active">Edit User</li>
         
      </ol>
	  
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"> <?= $me['user_fname']." ".$me['user_sname'];?></h3>

          <div class="box-tools pull-right">
			<a href="<?= base_url('admin/viewuser/'.$me['user_id']);?>" class="btn btn-primary">View Profile</a>
           
            
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('expertmsg'))
				{
					echo $this->session->flashdata('expertmsg');
				}				
			  ?>
				<form class="form-horizontal" enctype="multipart/form-data" action="<?= base_url('admin/updateparent');?>" method="post">
					<div class="col-sm-12">					 
						<div class="form-group">
							<label>First Name</label>
							<input type="text" class="form-control" value="<?= $me['user_fname'];?>" id="user_fname" name="user_fname" placeholder="First Name (shown on site)"/>
							<input type="hidden" class="form-control" value="India" id="user_country" name="user_country" placeholder="First Name (shown on site)"/>
							<input type="hidden" class="form-control" value="<?= $me['user_id'];?>" id="user_id" name="user_id"/>
							<input type="hidden" class="form-control" value="<?= $me['user_image'];?>" id="preimage" name="preimage"/>
						</div>					 
						<div class="form-group">
							<label>Surname</label>
							<input type="text" class="form-control" id="user_sname" value="<?= $me['user_sname'];?>" name="user_sname" placeholder="Surname (not shown on site)"/>
						</div>	
						 
						<div class="form-group ">
							<label> Mobile</label>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">+91</span>
							  <input type="text" name="user_mobile" required pattern="[0-9]{10}"  maxlength="10"    value="<?= $me['user_mobile'];?>" class="form-control" placeholder="Mobile"/>
							
							</div>
						</div>
						<div class="form-group">
							<label> Alternate Number</label>
							<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">+91</span>
							<input type="text" name="user_tel" pattern="[0-9]{10}"    maxlength="10" value="<?= $me['user_tel'];?>" class="form-control" placeholder="Telephone"/>
							</div>
						</div>
						<div class="form-group">
						<label for="user_image"> Profile Pic:</label>
						<br>
						<?php
							if($me['user_image']!='')
							{
								?>
								<div class="col-sm-6">
									<input type="file" class="form-control" name="user_image" id="user_image">						
								</div>
								<div class="col-sm-6">
									<img src="<?= base_url('img/user/'.$me['user_id'].'/'.$me['user_image']);?>"  class="img img-responsive img-thumbnail" style="max-height:200px;"/>						
								</div>
								<?php
							}
							else
							{
								?>
									<div class="col-sm-10">
										<input type="file" class="form-control" name="user_image" id="user_image">						
									</div>
								<?php
							}
						?>
						
					</div>
						<div class=" ">
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
								<div class="col-sm-2">
									<div class=" ">
										<label class="pull-left"><input type="radio" <?php if($me['user_gender']=='Female'){echo "checked";}?> value="Female" name="user_gender">Female</label>
									</div>
								</div>	
								<div class="col-sm-4">
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
								 
								<div class="col-sm-2">
									<div class=" ">
										<label class="pull-left"><input type="radio" <?php if($me['user_application']=='Single'){echo "checked";}?> value="Single"   name="user_application">Single</label>
									</div>
								</div>
								<div class="col-sm-3">
									<div class=" ">
										<label class="pull-left"><input type="radio" <?php if($me['user_application']=='Joint'){echo "checked";}?> value="Joint" name="user_application">Joint</label>
									</div>
								</div>								 
								</div>								 
							</div>
							 
						</div>						
					</div>	
					<div class="col-sm-12  "  >
						<div class=" ">
							 
							<div class="form-group">
								<label>Interest:</label>
								<textarea class="form-control" name="user_interest" ><?= $me['user_interest']; ?></textarea>
							</div>
							 
							<div class="form-group">
								<label>Religion:</label>
								<select class="form-control" name="user_religion">
									<option value="">Select Religion</option>
									<option <?php if($me['user_religion']=='African Traditional'){echo "selected";}?> >African Traditional</option>
									<option <?php if($me['user_religion']=='Atheist'){echo "selected";}?> >Atheist</option>
									<option <?php if($me['user_religion']=='Bahai Faith'){echo "selected";}?> >Bahai Faith</option>
									<option <?php if($me['user_religion']=='Buddhism'){echo "selected";}?> >Buddhism</option>
									<option <?php if($me['user_religion']=='Chinese Traditional'){echo "selected";}?> >Chinese Traditional</option>
									<option <?php if($me['user_religion']=='Christianity'){echo "selected";}?> >Christianity</option>
									<option <?php if($me['user_religion']=='Confucianism'){echo "selected";}?> >Confucianism</option>
									<option <?php if($me['user_religion']=='Gnosticism'){echo "selected";}?> >Gnosticism</option>
									<option <?php if($me['user_religion']=='Hinduism'){echo "selected";}?> >Hinduism</option>
									<option <?php if($me['user_religion']=='Islam'){echo "selected";}?> >Islam</option>
									<option <?php if($me['user_religion']=='Jainism'){echo "selected";}?> >Jainism</option>									 
									<option <?php if($me['user_religion']=='Jewish'){echo "selected";}?> >Jewish</option>
									<option <?php if($me['user_religion']=='Judaism'){echo "selected";}?> >Judaism</option>
									<option <?php if($me['user_religion']=='Mormonism'){echo "selected";}?> >Mormonism</option>
									<option <?php if($me['user_religion']=='Muslim'){echo "selected";}?> >Muslim</option>
									<option <?php if($me['user_religion']=='Native American'){echo "selected";}?> >Native American</option>
									<option <?php if($me['user_religion']=='Other'){echo "selected";}?> >Other</option>
									<option <?php if($me['user_religion']=='Rastafarianism'){echo "selected";}?> >Rastafarianism</option>
									<option <?php if($me['user_religion']=='Shinto'){echo "selected";}?> >Shinto</option>
									<option <?php if($me['user_religion']=='Sikhism'){echo "selected";}?> >Sikhism</option>
									<option <?php if($me['user_religion']=='Spiritism'){echo "selected";}?> >Spiritism</option>				 
								</select>
							</div>
							 
							<div class="form-group">
								<label>Sexuality:</label>
								<select name="user_sexuality" class="form-control">
									<option value="">Sexuality</option>
									<option <?php if($me['user_sexuality']=='Heterosexual'){echo "selected";}?> >Heterosexual</option>
									<option <?php if($me['user_sexuality']=='Gay'){echo "selected";}?> >Gay</option>
									<option <?php if($me['user_sexuality']=='Lesbian'){echo "selected";}?> >Lesbian</option>
									<option <?php if($me['user_sexuality']=='Bisexual'){echo "selected";}?> >Bisexual</option>
									<option <?php if($me['user_sexuality']=='Transvestite'){echo "selected";}?> >Transvestite</option>
									<option <?php if($me['user_sexuality']=='Transsexual'){echo "selected";}?> >Transsexual</option>
																	 							
								</select>
							</div>
							 
							<div class="form-group">
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
							<div class="form-group ">
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
						<div class=" ">
							<div class="form-group ">
								<label> Address Line 1</label>
								<input type="text" name="user_adl1" value="<?= $me['user_adl1'];?>" class="form-control" placeholder="Addess Line 1"/>
							</div>
							<div class="form-group ">
								<label> Address Line 2</label>
								<input type="text" name="user_adl2" value="<?= $me['user_adl2'];?>" class="form-control" placeholder="Addess Line 1"/>
							</div>
							<div class="form-group">
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
							<div class="form-group ">
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
							<div class="form-group">
								<label> Pincode</label>
								<input type="text" name="user_pin" pattern="[0-9]{6}"  maxlength="6" class="form-control" value="<?= $me['user_pin'];?>" placeholder="Zipcode / Pincode"/>
							</div>
							
							 
							<div class="form-group">
								<input type="submit" class="btn btn-primary " value="Submit"/>							
							</div>
							</form>
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php
	include('includes/footer.php');
 ?>
  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url('assets/admin/');?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url('assets/admin/');?>bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets/admin/');?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/admin/');?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/');?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin/');?>dist/js/demo.js"></script>
</body>
</html>
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
				  url	:	'<?= base_url('admin/showcities');?>',
				  data	:	'city_state='+str,
				  success	:	function(data){
								$('#user_city').html(data);
				  }
			  });
		  }
		}
	</script>	 
	 