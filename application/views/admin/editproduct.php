<?php
	$cat	=	$array['cat'];
	$product	=	$array['product'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Edit Product</title>
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
       Edit Product
      </h1>
      <ol class="breadcrumb">
          
        <li><a href="<?= base_url('admin/');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?= base_url('admin/productlist');?>"><i class="fa fa-dashboard"></i> Product List</a></li>
        <li class="active">Edit Product</li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Product</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('addpromsg'))
				{
					echo $this->session->flashdata('addpromsg');
				}
			  ?>
			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('admin/updateproduct');?>">
				<div class="form-group">
					<label class="control-label col-sm-2" for="product_cat_id">Select Category:</label>
					<div class="col-sm-10">
						<select required class="form-control" id="product_cat_id" name="product_cat_id">
							<?php
								if(count($cat))
								{
									foreach($cat as $x)
									{
										?>
										<option <?php if($product['product_cat_id']==$x['cat_id']){echo "selected";}?> value="<?= $x['cat_id'];?>"><?= $x['cat_name'];?></option>
										<?php
									}
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="product_name">Product Name:</label>
					<div class="col-sm-10">
						<input type="text" value="<?= $product['product_name'];?>" required class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name">
						<input type="hidden" value="<?= $product['product_id'];?>" required class="form-control" id="product_id" name="product_id">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="product_ref_no">Reference Number:</label>
					<div class="col-sm-10">
						<input type="text" value="<?= $product['product_ref_no'];?>" required class="form-control" id="product_ref_no" name="product_ref_no" placeholder="Enter Reference Number">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="product_ref_no">Price:</label>
					<div class="col-sm-10">
						<input type="float" required class="form-control" value="<?= $product['product_price'];?>" id="product_price" name="product_price" placeholder="Enter Product Price">
					</div>
				</div>
				
				 
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="cat_details"> Details:</label>
					<div class="col-sm-10">
						<textarea class="textarea" name="product_details" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $product['product_details'];?></textarea>
              
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="product_title">Page Title:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" value="<?= $product['product_title'];?>" id="product_title" name="product_title" placeholder="Enter Page Title">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="product_keyword"> Meta Keyword:</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="product_keyword" name="product_keyword" placeholder="Enter meta keywords"><?= $product['product_keyword'];?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="product_description"> Meta Description:</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="product_description" name="product_description" placeholder="Enter a brief details"><?= $product['product_keyword'];?></textarea>
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
    $(".textarea").wysihtml5();
  });
</script>
</body>
</html>
