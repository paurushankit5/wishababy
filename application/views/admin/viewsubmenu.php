<?php
	$submenu	=	$array['submenu'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sub Menu List</title>
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
      Sub Menu List
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('admin/');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Sub Menu List</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Sub Menu List</h3>

          <div class="box-tools pull-right">
            <a href="<?= base_url('admin/addsubmenu');?>" class="btn btn-primary">Add Submenu</a>
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('submenumsg'))
				{
					echo $this->session->flashdata('submenumsg');
				}
			  ?>
			 <table class="table table-responive table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Submenu</th>
						<th>Menu</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(count($submenu))
						{
							$i	=	0;
							foreach($submenu as $x)
							{
								?>
								<tr>
									<td><?= ++$i;?></td>
									<th><?= $x['submenu_name'];?></th>
									<td><?= $x['menu_name'];?></td>
									<td>
										<a href="<?= base_url('admin/editsubmenu/'.$x['submenu_id']);?>" class="btn btn-primary">Edit</a>
										<button  onclick="showdelmodal('<?= $x['submenu_id'];?>');" class="btn btn-danger">Delete</button>
									</td>
									 
								</tr>
								<?php
							}
						}
						else
						{
							echo "<tr><td colspan='4'>No submenu found.</td></tr>";
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
<script>
	function showdelmodal(str)
	{
		$('#delmodalbtn').click();
		$('#del_id').val(str);
	}
	function delseo()
	{
		var submenu_id	=	$('#del_id').val();
		$.ajax({
			type	:	'POST',
			url		:	'<?= base_url('admin/delsubmenu');?>',
			data	:	'submenu_id='+submenu_id,
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
</body>
</html>
