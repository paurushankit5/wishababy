<?php
	$states	=	$array['states'];
	$cities	=	$array['cities'];
	$me		=	$array['me'];
	$service		=	$array['service'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit profile</title>
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
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/');?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
      Edit profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('home');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard/clinic');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?= base_url('clinicprofile');?>">My Profile</a></li>
        <li><a href="#">Edit Profile</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Profile</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('addclinicmsg'))
				{
					echo $this->session->flashdata('addclinicmsg');
				}
			  ?>
			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('clinicprofile/update');?>">
				 
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_fname"> First Name:</label>
					<div class="col-sm-10">
						
						<input type="text" required class="form-control" id="user_fname" name="user_fname" value="<?= $me['user_fname'];?>" placeholder="Enter First Name">
						<input type="hidden" required class="form-control" id="user_id" name="user_id" value="<?= $me['user_id'];?>" placeholder="Enter First Name">
						<input type="hidden"   class="form-control" id="user_id" name="preimage" value="<?= $me['user_image'];?>" placeholder="Enter First Name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_sname"> Surname:</label>
					<div class="col-sm-10">
						<input type="text" required class="form-control" id="user_sname" name="user_sname" value="<?= $me['user_sname'];?>" placeholder="Enter Sur Name">
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_clinic_name">Clinic Name:</label>
					<div class="col-sm-10">
						<input type="text" required class="form-control" value="<?= $me['user_clinic_name'];?>" id="user_clinic_name" name="user_clinic_name" placeholder="Enter Clinic Name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_mobile">Mobile:</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">+91</span>
							<input type="text"  required pattern="[0-9]{10}" maxlength="10"  required class="form-control" value="<?= $me['user_mobile']; ?>" id="user_mobile" name="user_mobile" placeholder="Enter Mobile">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_tel">Alternate Contact Details:</label>
					<div class="col-sm-10">
						<div class="input-group">
							  <span class="input-group-addon" id="basic-addon1">+91</span>
							<input type="text" pattern="[0-9]{10}" maxlength="10"  class="form-control" value="<?= $me['user_tel']; ?>" id="user_tel" name="user_tel" placeholder="Alternate Contact Details">
						</div>
					</div>
				</div>
				 
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_adl1">Address Line 1:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" value='<?= $me['user_adl1'];?>' name="user_adl1" id="user_adl1" placeholder="Address Line 1">
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_adl2">Address Line 2:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="user_adl2" value="<?= $me['user_adl2'];?>" id="user_adl2" placeholder="Address Line 2">
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_state">Select State:</label>
					<div class="col-sm-5">
						<select type="text" class="form-control" onchange="showcity(this.value);"  name="user_state" id="clinic_state" required>
							<option value=''>Please select state</option>
							 
							
							<?php
								if(count($states))
								{
									foreach($states as $x)
									{
										?>
										<option <?php if($me['user_state']==$x['city_state'])echo "selected"; ?> value="<?= $x['city_state'];?>"><?= $x['city_state'];?></option>
										<?php
									}
								}
							?>
						</select>
              		</div>
					<div class="col-sm-5">
						<select type="text" class="form-control" name="user_city" id="clinic_city" required>
							<option value=''>Please select city</option>
							<?php
							if(count($cities))
							{
								foreach($cities as $x)
								{
									?>
										<option <?php if($me['user_city']==$x['city_name']) echo "selected"; ?> value="<?= $x['city_name'];?>"><?= $x['city_name'];?></option>
									<?php
								}
							}
							?>
						</select>
						<input type="hidden" name="user_country" value="India"/>
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_pin">PIN Code:</label>
					<div class="col-sm-10">
						<input type="text" pattern="[0-9]{6}" maxlength="6"  class="form-control" id="user_pin" value='<?= $me['user_pin'];?>' name="user_pin" placeholder="Pincode(Digits Only)"/>
					</div>
				</div>
				 
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_clinic_website">Website:</label>
					<div class="col-sm-10">
						<input type="url" class="form-control" id="user_clinic_website" value="<?= $me['user_clinic_website']; ?>" name="user_clinic_website" placeholder="Clinic Website">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_image"> Logo:</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="user_image" id="user_image">						
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_about"> About Us:</label>
					<div class="col-sm-10">
						<textarea class="textarea" name="user_about"  id="user_about" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $me['user_about']; ?></textarea>
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_service"> Clinic Services:</label>
					<div class="col-sm-10">						  		
							<?php
								$user_service	=	explode(",",$me['user_service']);								
								if(count($service))
								{
									foreach($service as $x)
									{
										?>
										<div class="col-md-4">
										<label>  <input type="checkbox" name="user_service[]" <?php if(in_array($x['service_name'],$user_service)){echo "checked"; }?> value="<?= $x['service_name']; ?>"> <?= $x['service_name']; ?></label>
										</div>
										<?php
									}
								}
							?>					
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_fertiity_treatments"> Fertility Treatments:</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="user_fertiity_treatments" id="user_fertiity_treatments" placeholder=" Fertility Treatments"><?= $me['user_fertiity_treatments'];?></textarea>
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_infertility_investigation"> Infertility investigation:</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="user_infertility_investigation" id="user_infertility_investigation" placeholder="Infertility investigation"><?= $me['user_infertility_investigation'];?></textarea>
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="user_storage">Storage of sperms and eggs:</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="user_storage"   id="user_storage" placeholder="Storage of sperms and eggs"><?= $me['user_storage'];?></textarea>
              		</div>
				</div>
				
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
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
<!-- FastClick -->
<script src="<?= base_url('assets/admin/');?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/');?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin/');?>dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url('assets/admin/');?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
   // CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $("#clinic_about").wysihtml5();
 
  });
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
			  url	:	'<?= base_url('clinicprofile/showcities');?>',
			  data	:	'city_state='+str,
			  success	:	function(data){
							$('#clinic_city').html(data);
			  }
		  });
	  }
  }
 
</script>
</body>
</html>
