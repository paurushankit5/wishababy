<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Expert | Change Password</title>
  <!-- Tell tde browser to be responsive to screen widtd -->
  <meta content="widtd=device-widtd, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/');?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- tdeme style -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/');?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from tde css/skins
       folder instead of downloading all of tdem to reduce tde load. -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/');?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view tde page via file:// -->
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
		Change Password
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('home');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard/clinic');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li ><a href="#"><i class="fa fa-Change Password"></i> Change Password</a></li>
        
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="col-sm-8 col-sm-offset-2 ">
      <div class="box ">
        <div class="box-header witd-border">
          <h3 class="box-title">Change Password</h3>

          <div class="box-tools pull-right">
             
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('passmsg'))
				{
					echo $this->session->flashdata('passmsg');
				}
			  ?>
			   <form class="" action="<?= base_url('expert/updatepassword'); ?>" method="post">
					<div class="form-group">
						<label   style="font-size:14px;" for="forgot_email">Current Password:</label>			 
						  <input type="password" class="form-control" name="cur_password" placeholder="Current Password">			 
					  </div>
					 <div class="form-group">
						<label   style="font-size:14px;" for="forgot_email">New Password:</label>			 
						  <input type="password" class="form-control" name="new_password" placeholder="New Password">			 
					  </div>
					 <div class="form-group">
						<label   style="font-size:14px;" for="forgot_email">Confirm Password:</label>			 
						  <input type="password" class="form-control" name="new_password1" placeholder="Confirm Password">			 
					  </div>
					  <div class="form-group">
						<input type="submit" class="btn btn-primary" value="Submit"/>
					  </div>
			   </form>
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
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
 
 
	<!-- Trigger the book an appointment modal with a button -->
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
