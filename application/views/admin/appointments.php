<?php
	$appointments	=	$array['appointments'];
	$count			=	$array['count'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Appointments</title>
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
		My Appointments
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('admin/');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li ><a href="#"><i class="fa fa-My Appointments"></i> My Appointments</a></li>
        
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header witd-border">
          <h3 class="box-title">My Appointments</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('profilemsg'))
				{
					echo $this->session->flashdata('profilemsg');
				}
			  ?>
			   <table class="table table-responsive table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Patient</th>
							<th>Clinic / Expert</th>
							<th>Appointment Id</th>
							<th>Date</th>
							<th>Status</th>
							 
						</tr>
					</thead>
					<tbody>
						<?php
							if(count($appointments))
							{
								foreach($appointments as $x)
								{
									?>
									<tr>
										<td>	<?= ++$count;?>	</td>
										<td>
											<?= $x['parent_fname'];?>
											<?= $x['parent_sname'];?>										
										</td>
										<td>
											<?php
												if($x['user_type']==2){
													?>
													<a href="<?= base_url('admin/clinicdetails/'.$x['clinic_id']);?>"><?= $x['clinic_name'];?></a>
													<?php
												}
												else{
													?>
													<a href="<?= base_url('admin/expertdetails/'.$x['clinic_id']);?>"><?= $x['clinic_fname'];?> <?= $x['clinic_sname'];?></a>
													
													<?php
												}
											?>
										</td>
										<td><?= $x['ap_id'];?></td>
										<td>
											<?= date('d-M-Y',strtotime($x['ap_date']));?><br>
											<?= date('h:i:A',strtotime($x['ap_time']));?>
										</td>
									 
										<td>
											<?php
												if($x['ap_status']==0)
												{
													echo "Waiting for Clinic/Expert confirmation";
												}
												else if($x['ap_status']==1)
												{
													echo "Appointment confirmed by Clinic/Exepert";
												}
												else if($x['ap_status']==3)
												{
													echo "Appointment cancelled by patient.";
												}
												else if($x['ap_status']==4)
												{
													echo "Appointment cancelled by Clinic/Exepert.";
												}												
											?>
										</td>
										 
									</tr>
									<?php
								}
								?>
								<tr>
									<td colspan="6"><?= $this->pagination->create_links();?></td>
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
	function cancel(ap_id)
	{
		$('#cancel_ap_id').val(ap_id);
		$('#cancelbtn').click();
	}
	function approve(ap_id)
	{
		$('#approve_ap_id').val(ap_id);
		$('#approvebtn').click();
	}
	function cancelappointment()
		{
			
			var ap_id			=	$('#cancel_ap_id').val();			 
			$.ajax({
				type	:	"POST",
				url		:	"<?= base_url('findaclinic/updateappointment');?>",
				data	:	{							 
							'ap_id'					:	ap_id,
							'ap_status'				:	4,
							},
				success	:	function(data)
				{
					if(data)
					{						 
						alert('Appointment Cancelled');
						location.reload();						
					}
					else
					{
						 alert('System Failure');
					}
				}
			});			 
		}
		function approveappointment()
		{
			
			var ap_id			=	$('#approve_ap_id').val();			 
			$.ajax({
				type	:	"POST",
				url		:	"<?= base_url('findaclinic/updateappointment');?>",
				data	:	{							 
							'ap_id'					:	ap_id,
							'ap_status'				:	1,
							},
				success	:	function(data)
				{
					if(data)
					{						 
						alert('Appointment Confirmed');
						location.reload();						
					}
					else
					{
						 alert('System Failure');
					}
				}
			});			 
		}
</script>
<!-- Trigger the cancel appointment modal with a button -->
	<button type="button" id="cancelbtn" class="hidden" data-toggle="modal" data-target="#cancelappointment">Open Modal</button>

	<!-- Modal -->
	<div id="cancelappointment" style="font-size:12px;" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-sm">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Cancel Appointment </h4>
		  </div>
		  <div class="modal-body">
			<p>Are You sure?</p>
				<input type="hidden" id="cancel_ap_id"/>
		  </div>
		  <div class="modal-footer">
			<button type="button" onClick="cancelappointment();" class="btn btn-primary" >Yes</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
		  </div>
		</div>

	  </div>
	</div>
	<!-- Trigger the book an appointment modal with a button -->
	<!-- Trigger the cancel appointment modal with a button -->
	<button type="button" id="approvebtn" class="hidden" data-toggle="modal" data-target="#approveappointment">Open Modal</button>

	<!-- Modal -->
	<div id="approveappointment" style="font-size:12px;" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-sm">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Approve Appointment </h4>
		  </div>
		  <div class="modal-body">
			<p>Are You sure?</p>
				<input type="hidden" id="approve_ap_id"/>
		  </div>
		  <div class="modal-footer">
			<button type="button" onClick="approveappointment();" class="btn btn-primary" >Yes</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
		  </div>
		</div>

	  </div>
	</div>
	<!-- Trigger the book an appointment modal with a button -->
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
