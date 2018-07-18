<?php
	$product	=	$array['product'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Product Details</title>
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
        Product Details
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('admin/productlist');?>">Product List</a></li>
        <li class="active">Product Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"> Product Details</h3>

          <div class="box-tools pull-right">
            <a href="<?= base_url('admin/editproduct/'.$product['product_id']);?>" class="btn btn-primary">Edit</a>
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('promsg'))
				{
					echo $this->session->flashdata('promsg');
				}
			  ?>
			<table class="table table-responsive table-bordered">
				<tr>
					<th>Name</th>
					<td><?= $product['product_name']; ?></td>
				</tr>
				<tr>
					<th>Product Category</th>
					<td>  <?= $product['cat_name']; ?></td>
				</tr>
				<tr>
					<th>Ref No.</th>
					<td><?= $product['product_ref_no']; ?></td>
				</tr>
				<tr>
					<th>Price</th>
					<td> Rs. <?= $product['product_price']; ?></td>
				</tr>
				<tr>
					<th>Image</th>
					<td>
						<?php
							if($product['product_img1']!='')
							{
								?>
								<div class="col-md-4">
									<img src="<?= base_url('img/pro/'.$product['product_id'].'/a/'.$product['product_img1']);?>" class="img img-responsive img-thumbnail" style="height:150px;width:100%;width:100%;">
									<a href="#" class="btn btn-block btn-danger" onClick="deleteimage('a','<?= $product['product_img1']; ?>');" >Delete</a>
									<br>
									<br>
								</div>
								<?php
							}
							else{
								?>
								<div class="col-md-4">
									<button class="btn btn-info" onClick="openimagemodal('product_img1');" style="height:150px;width:100%;"><b>Upload Image</b></button>
									<br>
									<br>
								</div>
								<?php
							}
							if($product['product_img2']!='')
							{
								?>
								<div class="col-md-4">
									<img src="<?= base_url('img/pro/'.$product['product_id'].'/b/'.$product['product_img2']);?>" class="img img-responsive img-thumbnail" style="height:150px;width:100%;">
									<a href="#" class="btn btn-block btn-danger" onClick="deleteimage('b','<?= $product['product_img2']; ?>');" >Delete</a>
									<br>
									<br>
								</div>
								<?php
							}
							else{
								?>
								<div class="col-md-4">
									<button class="btn btn-info" onClick="openimagemodal('product_img2');" style="height:150px;width:100%;"><b>Upload Image</b></button>
									<br>
									<br>
								</div>
								<?php
							}
							if($product['product_img3']!='')
							{
								?>
								<div class="col-md-4">
									<img src="<?= base_url('img/pro/'.$product['product_id'].'/c/'.$product['product_img3']);?>" class="img img-responsive img-thumbnail" style="height:150px;width:100%;">
									<a href="#" class="btn btn-block btn-danger" onClick="deleteimage('c','<?= $product['product_img3']; ?>');" >Delete</a>
									<br>
									<br>
								</div>
								<?php
							}
							else{
								?>
								<div class="col-md-4">
									<button class="btn btn-info" onClick="openimagemodal('product_img3');" style="height:150px;width:100%;"><b>Upload Image</b></button>
									<br>
									<br>
								</div>
								<?php
							}
							?>
							<div class="clearfix"></div>
							<?php
							if($product['product_img4']!='')
							{
								?>
								<div class="col-md-4">
									<img src="<?= base_url('img/pro/'.$product['product_id'].'/d/'.$product['product_img4']);?>" class="img img-responsive img-thumbnail" style="height:150px;width:100%;">
									<a href="#" class="btn btn-block btn-danger" onClick="deleteimage('d','<?= $product['product_img4']; ?>');" >Delete</a>
									<br>
									<br>
								</div>
								<?php
							}
							else{
								?>
								<div class="col-md-4">
									<button class="btn btn-info" onClick="openimagemodal('product_img4');" style="height:150px;width:100%;"><b>Upload Image</b></button>
									<br>
									<br>
								</div>
								<?php
							}
							if($product['product_img5']!='')
							{
								?>
								<div class="col-md-4">
									<img src="<?= base_url('img/pro/'.$product['product_id'].'/e/'.$product['product_img5']);?>" class="img img-responsive img-thumbnail" style="height:150px;width:100%;">
									<a href="#" class="btn btn-block btn-danger" onClick="deleteimage('e','<?= $product['product_img5']; ?>');" >Delete</a>
									<br>
									<br>
								</div>
								<?php
							}
							else{
								?>
								<div class="col-md-4">
									<button class="btn btn-info" onClick="openimagemodal('product_img5');" style="height:150px;width:100%;"><b>Upload Image</b></button>
									<br>
									<br>
								</div>
								<?php
							}
							if($product['product_img6']!='')
							{
								?>
								<div class="col-md-4">
									<img src="<?= base_url('img/pro/'.$product['product_id'].'/f/'.$product['product_img6']);?>" class="img img-responsive img-thumbnail" style="height:150px;width:100%;">
									<a href="#" class="btn btn-block btn-danger" onClick="deleteimage('f','<?= $product['product_img5']; ?>');" >Delete</a>
									<br>
									<br>
								</div>
								<?php
							}
							else{
								?>
								<div class="col-md-4">
									<button class="btn btn-info" onClick="openimagemodal('product_img6');" style="height:150px;width:100%;"><b>Upload Image</b></button>
									<br>
									<br>
								</div>
								<?php
							}
							
						?>
					</td>
				</tr>
				<tr>
					<th>Details</th>
					<td>  <?= $product['product_details']; ?></td>
				</tr>
				<tr>
					<th>Page Title</th>
					<td>  <?= $product['product_title']; ?></td>
				</tr>
				<tr>
					<th>Meta Keyword</th>
					<td>  <?= $product['product_keyword']; ?></td>
				</tr>
				<tr>
					<th>Meta Description</th>
					<td>  <?= $product['product_description']; ?></td>
				</tr>
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
<script>
	function deleteimage(n,name){
		if(confirm("Are you sure?")==true){
			$.ajax({
				type	:	'POST',
				url		:	'<?= base_url('admin/deleteproductimage');?>',
				data	:	{
					image_name	:	name,
					field	:	n,
					product_id	:	'<?= $product['product_id'];?>'
				},
				success	:	function(data){
					data =	data.trim();
					location.reload();
				}
				
			});
		}
	}
	function openimagemodal(field_name){
		$('#image_field_name').html("<input type='file' class='form-control' required name="+field_name+">");
		$('#imagemodalbtn').click();
	}
</script>
<!-- Trigger the modal with a button -->
<button type="button"  style="display:none;"id="imagemodalbtn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#imagemodal">Open Modal</button>

<!-- Modal -->
<div id="imagemodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Image</h4>
      </div>
      <div class="modal-body" style="padding:40px;">
			<form class="form form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('admin/addproimage');?>">
				<div class="form-group">
					<label>Select an Image</label>
					 <span id="image_field_name"></span> 
					<input type="hidden" class="form-control" name="product_id" value="<?= $product['product_id']; ?>" />
				</div>
			
      </div>
      <div class="modal-footer">
        <button type="submit"class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</form>
      </div>
    </div>

  </div>
</div>
</body>
</html>
