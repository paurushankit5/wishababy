<?php
	$blogs		=	$array['blogs'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Blogs</title>
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
        Blogs
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
       <li><a href="<?= base_url('');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('admin/');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Blogs</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Blogs</h3>

          <div class="box-tools pull-right">
            <a href="<?= base_url('admin/addblog');?>" class="btn btn-primary"> Add Blog</a>
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('blogmsg'))
				{
					echo $this->session->flashdata('blogmsg');
				}
			  ?>
				<table class="table table-responsive">
					<tbody>
						<tr>
							<th>#</th>
							<th>Blog Name</th>
							<th>Added On</th>
							<th>Action</th>
						</tr>
						<?php
							if(count($blogs))
							{
								$i=0;
								foreach($blogs as $x)
								{
									?>
									<tr>
										<td><?= ++$i ;?></td>
										<td><?= $x['blog_name'];?></td>
										<td><?= date('d-M-Y',strtotime($x['blog_add_time']));?></td>
										<td>
											<a href="<?= base_url('admin/editblog/'.$x['blog_id']);?>" class="btn btn-primary">Edit</a>
											<button onclick="showdelmodal('<?= $x['blog_id'];?>');" class="btn btn-danger">Delete</button>
										</td>
									</tr>
									<?php
								}
							}
							else
							{
								?>
									<tr>
										<th colspan="4">No blogs found.</th>
									</tr>
								<?php
							}
						?>
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
<script>
	function showdelmodal(str)
	{
		$('#delmodalbtn').click();
		$('#del_id').val(str);
	}
	function delseo()
	{
		var blog_id	=	$('#del_id').val();
		$.ajax({
			type	:	'POST',
			url		:	'<?= base_url('admin/delblog');?>',
			data	:	'blog_id='+blog_id,
			success	:	function(data){
				//alert(data);
				location.reload();
			},
		});
	}
</script>
<!-- Trigger the modal with a button -->
<button type="button" style="display:none;" id="delmodalbtn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure?</p>
		<input type="hidden" id="del_id"/>
      </div>
      <div class="modal-footer">       
        <button type="button" class="btn btn-danger" onClick="delseo();">Yes</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>
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
