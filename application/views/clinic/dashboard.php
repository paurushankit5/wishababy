<?php
	$clinic		=	$array['clinic'];
	$appointment	=	$array['appointment'];
	$callback		=	$array['callback'];
	$questions		=	$array['questions'];
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Clinic | Dashboard</title>
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
		Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('home');?>"><i class="fa fa-home"></i> Home</a></li>
        <li ><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
		<div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $callback;?></h3>

              <p>Callback Requests</p>
            </div>
            <div class="icon">
              <i class="fa fa-phone-square"></i>
            </div>
            <a href="<?= base_url('clinic/callback');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
			<div class="small-box bg-red">
            <div class="inner">
              <h3><?= $questions;?></h3>

              <p>Questions</p>
            </div>
            <div class="icon">
              <i class="fa fa-question"></i>
            </div>
            <a href="<?= base_url('clinic/questions');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
		  </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-3">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $appointment; ?></h3>

              <p>Appointments</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?= base_url('clinic/myappointments');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
			<div class="col-md-6">
				<div class="box">
					<div class="box-header with-border">
					  <h3 class="box-title">My Profile</h3>

					  <div class="box-tools pull-right">
						<a href="<?= base_url('clinicprofile/edit');?>" class="btn btn-primary">Edit</a>
					  </div>
					</div>
					<div class="box-body">
						 <?php
							if($this->session->flashdata('profilemsg'))
							{
								echo $this->session->flashdata('profilemsg');
							}
						  ?>
							<table class="table table-responsive table-striped">
				<tr>
					<td>Clinic Name</td>
					<th><?= $clinic['user_clinic_name'];?></th>
				</tr>
				<tr>
					<td>Name</td>
					<th><?= $clinic['user_fname']." ".$clinic['user_sname'];?></th>
				</tr>
				
				 
					
				<tr>
					<td>Email</td>
					<th><?= $clinic['user_email'];?></th>
				</tr>
				<tr>
					<td>Mobile</td>
					<th>
						<?php
							if($clinic['user_mobile']!='')
							{
								echo "+91-".$clinic['user_mobile']."<br>";
							}
							if($clinic['user_tel']!='')
							{
								echo "+91-".$clinic['user_tel'];
							}
						?>
					</th>
				</tr>
				<tr>
					<td>Service</td>
					<th><?= $clinic['user_service'];?></th>
				</tr>
				<tr>
					<td>Address</td>
					<th>
						<?= $clinic['user_adl1'];?><br>
						<?= $clinic['user_adl2'];?><br>
						<?= $clinic['user_city'];?>, <?= $clinic['user_state'];?>- <?= $clinic['user_pin'];?>, <?= $clinic['user_country'];?> 
					</th>
				</tr>
				
				
			 </table>
					</div>
					<!-- /.box-body -->
					
					<!-- /.box-footer-->
				  </div>
			</div>
		</div>
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
