<?php
	$menu	=	$array['menu'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Nested Sub Menu</title>
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
      Add Nested Sub Menu
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('admin/');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Add Nested Sub Menu</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Add Nested Sub Menu</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('addsubmenumsg'))
				{
					echo $this->session->flashdata('addsubmenumsg');
				}
			  ?>
			<form class="form-horizontal" method="post" action="<?= base_url('admin/storenestedsubmenu');?>">
				<div class="form-group">
					<label class="control-label col-sm-2" for="submenu_menu_id">Select Menu:</label>
					<div class="col-sm-10">
						<select required class="form-control" onChange="showsubmenu(this.value);" id="submenu_menu_id">
							<?php
								if(count($menu))
								{
									foreach($menu as $x)
									{
										?>
										<option value="<?= $x['menu_id'];?>"><?= $x['menu_name'];?></option>
										<?php
									}
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="nest_submenu_id">Select Sub Menu:</label>
					<div class="col-sm-10">
						<select required class="form-control" id="nest_submenu_id" name="nest_submenu_id">
							<option value="">Select Submenu</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="nest_name">Nested Sub Menu Name:</label>
					<div class="col-sm-10">
						<input type="text" required class="form-control" id="nest_name" name="nest_name" placeholder="Enter Sub Menu Name">
					</div>
				</div>				 
				<div class="form-group">
					<label class="control-label col-sm-2" for="menu_content">Page Content:</label>													 
					<div class="col-sm-10">
					<textarea class="form-control" name="nest_content" id="nest_content"></textarea>
					<script>												 							 
						CKEDITOR.replace('nest_content');									 
					</script>
					</div>
				</div>
				  
				<div class="form-group">
					<label class="control-label col-sm-2" for="nest_title">Title:</label>
					<div class="col-sm-10">
						<input type="text" required class="form-control" id="nest_title" name="nest_title" placeholder="Enter Page Title">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="nest_keyword"> Meta Keyword:</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="nest_keyword" name="nest_keyword" placeholder="Enter meta keywords"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="nest_description"> Meta Description:</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="nest_description" name="nest_description" placeholder="Enter a brief details"></textarea>
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
<script>
	function showsubmenu(str)
	{
		$.ajax({
			type	:	'POST',
			data	:	'submenu_menu_id='+str,
			url		:	'<?= base_url('admin/showsubmenu');?>',
			success	:	function(data)
						{
							$('#nest_submenu_id').html(data);
						}
		});
	}
</script>
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
