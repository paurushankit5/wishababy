<?php
	$blog	=	$array['blog'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Blog</title>
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
  <script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
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
      Edit Blog
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('admin/');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?= base_url('admin/blog');?>">Blogs</a></li>
        <li><a href="#">Edit Blog</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Blog</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('editblogmsg'))
				{
					echo $this->session->flashdata('editblogmsg');
				}
			  ?>
			<form class="form-horizontal" method="post" action="<?= base_url('admin/updateblog');?>" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2" for="blog_name">Blog Name:</label>
					<div class="col-sm-10">
						<input type="text" required class="form-control" id="blog_name" value="<?= $blog['blog_name'];?>" name="blog_name" placeholder="Enter Menu Name">
						<input type="hidden" required class="form-control" id="blog_id" value="<?= $blog['blog_id'];?>" name="blog_id" placeholder="Enter Menu Name">
						<input type="hidden" required class="form-control" id="preimage" value="<?= $blog['blog_image'];?>" name="preimage" placeholder="Enter Menu Name">
					</div>
				</div>	
				 				 
				<div class="form-group">
					<label class="control-label col-sm-2" for="blog_content">Blog Content:</label>													 
					<div class="col-sm-10">
					<textarea class="form-control" name="blog_content" id="blog_content"><?= $blog['blog_content'];?></textarea>
					<script>												 							 
						CKEDITOR.replace('blog_content');									 
					</script>
					</div>
				</div>
				  
				<div class="form-group">
					<label class="control-label col-sm-2" for="blog_image">Image:</label>
					<div class="col-sm-5">
						<input type="file"  class="form-control" id="blog_image" name="blog_image">
					</div>
					<div class="col-sm-5">
						<?php
							if($blog['blog_image']!='')
							{
								?>
								<img src="<?= base_url('img/blogs/'.$blog['blog_id'].'/'.$blog['blog_image']);?>" class="img img-responsive" style="max-height:200px;"/>
								<?php
							}
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="blog_title">Title:</label>
					<div class="col-sm-10">
						<input type="text" required class="form-control" id="blog_title" value="<?= $blog['blog_title'];?>" name="blog_title" placeholder="Enter Blog Title">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="blog_keyword"> Meta Keyword:</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="blog_keyword" name="blog_keyword" placeholder="Enter meta keywords"><?= $blog['blog_keyword'];?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="blog_description"> Meta Description:</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="blog_description" name="blog_description" placeholder="Enter a brief details"><?= $blog['blog_description'];?></textarea>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Submit</button>
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
