<?php
	$states	=	$array['states'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Add A Clinic</title>
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
       Add A Clinic
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add A Clinic</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Add A Clinic</h3>

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
			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('admin/storeclinic');?>">
				 
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_email">Clinic Email:</label>
					<div class="col-sm-10">
						<input type="email" required class="form-control" id="clinic_email" name="clinic_email" placeholder="Enter Clinic Email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_name">Clinic Name:</label>
					<div class="col-sm-10">
						<input type="text" required class="form-control" id="clinic_name" name="clinic_name" placeholder="Enter Clinic Name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_mobile">Mobile:</label>
					<div class="col-sm-10">
						<input type="number" required class="form-control" maxlength="10" id="clinic_mobile" name="clinic_mobile" placeholder="Enter Mobile">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_alt_mobile">Alternate Contact Details:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" maxlength="10" id="clinic_alt_mobile" name="clinic_alt_mobile" placeholder="Alternate Contact Details">
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_password">Password:</label>
					<div class="col-sm-10">
						<input type="password" required class="form-control" id="clinic_password" name="clinic_password" placeholder="Password">
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_password2">Confirm Password:</label>
					<div class="col-sm-10">
						<input type="password" required class="form-control" id="clinic_password2" onblur="matchpassword();" name="clinic_password2" placeholder="Confirm Password">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_adl1">Address Line 1:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="clinic_adl1" id="clinic_adl1" placeholder="Address Line 1">
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_adl2">Address Line 2:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="clinic_adl2" id="clinic_adl2" placeholder="Address Line 2">
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_state">Select State:</label>
					<div class="col-sm-5">
						<select type="text" class="form-control" onchange="showcity(this.value);"  name="clinic_state" id="clinic_state" required>
							<option value=''>Please select state</option
							<?php
								if(count($states))
								{
									foreach($states as $x)
									{
										?>
										<option value="<?= $x['city_state'];?>"><?= $x['city_state'];?></option>
										<?php
									}
								}
							?>
						</select>
              		</div>
					<div class="col-sm-5">
						<select type="text" class="form-control" name="clinic_city" id="clinic_city" required>
							<option value=''>Please select city</option>
							 
						</select>
						<input type="hidden" name="clinic_country" value="India"/>
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_pin">Pincode:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" maxlength="6" id="clinic_pin" name="clinic_pin" placeholder="Pincode(Digits Only)"/>
					</div>
				</div>
				 
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_website">Website:</label>
					<div class="col-sm-10">
						<input type="url" class="form-control" id="clinic_website" name="clinic_website" placeholder="Clinic Website">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_logo"> Logo:</label>
					<div class="col-sm-10">
						<input type="file" required class="form-control" name="clinic_logo" id="clinic_logo">						
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_about"> About Us:</label>
					<div class="col-sm-10">
						<textarea class="textarea" name="clinic_about" id="clinic_about" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_donation_services"> Donation Services:</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="clinic_donation_services" id="clinic_donation_services" placeholder="Donation Services"></textarea>
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_fertiity_treatments"> Fertility Treatments:</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="clinic_fertiity_treatments" id="clinic_fertiity_treatments" placeholder=" Fertility Treatments"></textarea>
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_infertility_investigation"> Infertility investigation:</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="clinic_infertility_investigation" id="clinic_infertility_investigation" placeholder="Infertility investigation"></textarea>
              		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="clinic_storage">Storage of sperms and eggs:</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="clinic_storage" id="clinic_storage" placeholder="Storage of sperms and eggs"></textarea>
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
			  url	:	'<?= base_url('admin/showcities');?>',
			  data	:	'city_state='+str,
			  success	:	function(data){
							$('#clinic_city').html(data);
			  }
		  });
	  }
  }
  function matchpassword()
  {
	  var pass	=	$('#clinic_password').val();
	  var pass2	=	$('#clinic_password2').val();
	  if(pass != pass2)
	  {
		  alert('Passwords do not match');
	  }
	  else if(pass=='')
	  {
		  alert('Please enter password.');
	  }
  }
</script>
</body>
</html>
