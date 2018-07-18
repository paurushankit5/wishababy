<?php
	$clinic	=	$array['clinic'];
	$count	=	$array['count'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | IVF Clinics</title>
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
        IVF Clinics
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('admin/');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">IVF Clinics</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">IVF Clinics</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('catmsg'))
				{
					echo $this->session->flashdata('catmsg');
				}
			  ?>
			<table class="table table-responsive table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Clinic Name</th>
						<th>Location</th>
						<th>Logo</th>
						<th>Action</th>
						 
					</tr>
				</thead>
				<tbody>
					<?php
						if(count($clinic))
						{
							foreach($clinic as $x)
							{
							 	?>
									<tr>
										<td><?= ++$count;?></td>
										<td><?= $x['user_clinic_name'];?></td>
										<td>
											<?= $x['user_city'];?><br>
											<?= $x['user_state'];?><br>
										</td>
										 
										<td>
											<?php
												if($x['user_image']!='')
												{
													?>
													<img src="<?= base_url('img/user/'.$x['user_id'].'/'.$x['user_image']);?>" class="img img-responsive img-thumbnail" style="width:100px;height:100px;"/></td>
													<?php
												}
												
												?>
										<td>
											 <a href="<?= base_url('admin/clinicdetails/'.$x['user_id']);?>" class="btn btn-primary">View Details</a>
										</td>
									</tr>
									 
								<?php
							}
							?>
							<tr>
								<td colspan="5"><?= $this->pagination->create_links();?></td>
							</tr>
							<?php
						}
						else
						{
							?>
								<tr>
									<td colspan="4"><div class="alert alert-warning">No Clinics found.</div></td>
								</tr>
							<?php
						}
					?>
				
				</tbody>
			</table>
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