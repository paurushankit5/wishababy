<?php
	$cat	=	$array['cat'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
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
       Edit Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('admin/');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?= base_url('admin/category');?>">Catgeory</a></li>
        <li><a href="<?= base_url('admin/viewcategory/'.$cat['cat_id']);?>">Catgeory Details</a></li>
        <li class="active"><a href="#">Edit Category</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Category</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('Editcatmsg'))
				{
					echo $this->session->flashdata('Editcatmsg');
				}
			  ?>
			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('admin/updatecategory');?>">
				<div class="form-group">
					<label class="control-label col-sm-2" for="cat_name">Category Name:</label>
					<div class="col-sm-10">
						<input type="text" required class="form-control" value="<?= $cat['cat_name'];?>" id="cat_name" name="cat_name" placeholder="Enter Category Name">
						<input type="hidden"  class="form-control" value="<?= $cat['cat_image'];?>" id="cat_preimage" name="cat_preimage" placeholder="Enter Category Name">
						<input type="hidden" required class="form-control" value="<?= $cat['cat_id'];?>" id="cat_id" name="cat_id" placeholder="Enter Category Name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="cat_image"> Image:</label>
					<div class="col-sm-5">
						<input type="file" class="form-control" id="cat_image" name="cat_image" placeholder="Enter email">
					</div>
					<div class="col-sm-5">
						<img src="<?= base_url('img/cat/'.$cat['cat_id'].'/'.$cat['cat_image']);?>" style="width:200px;height:200px;" class="img img-responsive"/>
					</div>
					
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="cat_details"> Details:</label>
					<div class="col-sm-10">
						<textarea class="form-control" 	id="cat_details" name="cat_details"  ><?= $cat['cat_details'];?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="cat_title">Title:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cat_title" name="cat_title" value="<?= $cat['cat_title'];?>" placeholder="Enter Category Title">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="cat_keyword"> Meta Keyword:</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="cat_keyword" name="cat_keyword" placeholder="Enter meta keywords"><?= $cat['cat_keyword'];?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="cat_description"> Meta Description:</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="cat_description" name="cat_description" placeholder="Enter a brief details"><?= $cat['cat_description'];?></textarea>
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
