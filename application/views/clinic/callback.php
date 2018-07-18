<?php
	$callback	=	$array['callback'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Clinic | Callback Requests</title>
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
		Callback Requests
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('home');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard/clinic');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li ><a href="#"><i class="fa fa-Callback Requests"></i> Callback Requests</a></li>
        
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header witd-border">
          <h3 class="box-title">Callback Requests</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('callmsg'))
				{
					echo $this->session->flashdata('callmsg');
				}
			  ?>
			   <table class="table table-responsive table-striped">
					<thead>
						<tr>
							<th>Name & Number</th>
							<th>Message</th>
							<th>Requested On</th>
							 
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if(count($callback))
							{
								foreach($callback as $x)
								{
									?>
									<tr>
										<td>
											<?= $x['call_name'];?>	<br>
											(<?= $x['call_mobile'];?>)
										</td>
										<td><?= $x['call_body'];?></td>
										<td><?= date('d-M-Y',strtotime($x['call_add_time']));?></td>
										 
										<td>
											<?php
												if($x['call_status']==0)
												{
													?>
													<a href="#" onClick="callback('<?= $x['call_id'];?>')" class="btn btn-primary">Call Completed ?</a>
													<?php
												}
												else if($x['call_status']==1)
												{
													echo "Request Completed";
												}
												 												
											?>
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
<script>
	function callback(call_id)
	{
		$('#callbackbtn').click();
		$('#call_id').val(call_id);
	}
	function savecall()
	{
		$.ajax({
			type		:	'POST',
			url			:	'<?= base_url('clinic/updatecall');?>',
			data		:	{
								'call_id'		:	$('#call_id').val(),
								'call_status'	:	1,
							},
			success		:	function(data)
							{
								location.reload();
							}
			
		});
	}
</script>
<!-- Trigger the modal with a button -->
<button type="button" id="callbackbtn" style="display:none;" class="btn btn-info btn-lg hidden" data-toggle="modal" data-target="#callbackmodal">Open Modal</button>

<!-- Modal -->
<div id="callbackmodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirm Call Request</h4>
      </div>
      <div class="modal-body">
        <p>Have you completed the call Request?</p>
		<input type="hidden" id="call_id"/>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="savecall();" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
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
