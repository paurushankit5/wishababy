<?php
	$clinic	=	$array['clinic'];
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin  | <?= $clinic['user_fname'];?> | IVF Expert</title>
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
      IVF Expert - <?= $clinic['user_fname']." ".$clinic['user_sname'];?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('admin/');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?= base_url('admin/experts');?>">IVF Experts</a></li>
        <li><a href="#"><?= $clinic['user_fname']." ".$clinic['user_sname'];?></a></li>
         
      </ol>
	  
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"> <?= $clinic['user_fname']." ".$clinic['user_sname'];?></h3>

          <div class="box-tools pull-right">
			<a href="<?= base_url('admin/editexpert/'.$clinic['user_id']);?>" class="btn btn-primary">Edit</a>
           
            
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('expertmsg'))
				{
					echo $this->session->flashdata('expertmsg');
				}
				//echo "<pre>";
				//print_r($clinic);
				//echo "</pre>"
			  ?>
			 <table class="table table-responsive table-striped">
				
				<tr>
					<td>Name</td>
					<th><?= $clinic['user_fname']." ".$clinic['user_sname'];?></th>
				</tr>
				
				<?php
					if($clinic['user_image']!='')
					{
						?>
						<tr>
							<td>Pic</td>
							<th>
								<img src="<?= base_url('img/user/'.$clinic['user_id'].'/'.$clinic['user_image']);?>" class="img img-responsive img-thumbnail" style="width:100px;height:100px;"/></td>
							</th>
						</tr>
						<?php
					}
					
				?>
					
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
				<tr>
					<td>Qualifications</td>
					<td><?= $clinic['user_expert_qualification'];?></td>
				</tr>
				<tr>
					<td>Job Title</td>
					<td><?= $clinic['user_expert_job'];?></td>
				</tr>
				<tr>
					<td>Website</td>
					<td><?= $clinic['user_clinic_website'];?></td>
				</tr>
				<tr>
					<td>Speciality</td>
					<td><?= $clinic['user_expert_specality'];?></td>
				</tr>
				<tr>
					<td>About </td>
					<td><?= $clinic['user_about'];?></td>
				</tr>
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
