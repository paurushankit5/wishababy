<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Expert | My Profile</title>
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
		My Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('home');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard/expert');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><a href="#">My Profile</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header witd-border">
          <h3 class="box-title">My Profile</h3>

          <div class="box-tools pull-right">
            <a href="<?= base_url('expert/editprofile');?>" class="btn btn-primary">	Edit</a>
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
				<tbody>
					<tr>
						<td>Name</td>
						<td><?= $me['user_fname'];?> <?= $me['user_sname'];?></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><?php
								if($me['user_mobile']!='')
								{
									echo "+91-".$me['user_mobile']."<br>";
								}
								if($me['user_tel']!='')
								{
									echo "+91-".$me['user_tel'];
								}
							?>
						</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>
							<?= $me['user_adl1'];?><br>
							<?= $me['user_adl2'];?><br>
							<?= $me['user_city'];?> 
							<?= $me['user_pin'];?> 
							<?= $me['user_state'];?>
							<?= $me['user_country'];?>
							</td>
					</tr>
					<tr>
						<td>About Me</td>
						<td><?= $me['user_about'];?></td>
					</tr>
					<tr>
						<td>Services</td>
						<td><?= $me['user_service'];?></td>
					</tr>
					<tr>
						<td>Job Title</td>
						<td><?= $me['user_expert_job'];?></td>
					</tr>
					<tr>
						<td>Qualifications</td>
						<td><?= $me['user_expert_qualification'];?></td>
					</tr>
					<tr>
						<td>Website</td>
						<td><?= $me['user_clinic_website'];?></td>
					</tr>
					
				</tbody>
			 </table>
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
