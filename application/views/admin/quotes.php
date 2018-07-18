<?php
	$quotes	=	$array['quotes'];
	$count	=	$array['count'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Quotation Requests</title>
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
        Quotation Requests
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('admin/');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Quotation Requests</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Quotation Requests</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
			 <?php
				if($this->session->flashdata('quotemsg'))
				{
					echo $this->session->flashdata('quotemsg');
				}
			  ?>
			<table class="table table-responsive table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Name & Details</th>
						<th>Message</th>						 
						<th>Status</th>						 
						<th>Action</th>
						 
					</tr>
				</thead>
				<tbody>
					<?php
						if(count($quotes))
						{
							$i=0;
							foreach($quotes as $x)
							{
							 	 ?>
									<tr>
										<td><?= ++$i; ?></td>
										<td>
											<?= $x['quote_name'];?><br>
											<?= $x['quote_email'];?><br>
											<?= $x['quote_mobile'];?><br>
											<p style="text pull-right"><b>Quotation on:<br> <?= date('d-M-Y',strtotime($x['quote_add_time']));?> </b></p>
										</td>
										<td>
											<?= $x['quote_message'];?>
											
										</td>
										<td>
											<?php
												if($x['quote_status']==0)
												{
													echo "Pending";
												}
												else if($x['quote_status']==1)
												{
													echo "In Progress";
												}
												else if($x['quote_status']==2)
												{
													echo "Resolved";
												}
											?>
										
										</td>
										<td>
											<?php
												if($x['quote_status']!=2)
												{
													?>
													<button data-toggle="modal" onClick="insertquoteid('<?= $x['quote_id'];?>','<?= $x['quote_status'];?>')" data-target="#confirmrequestquote" class="btn btn-warning">Update Status</button>
													<?php
												}
												if($x['quote_mail']==0)
												{
													?>
														<br><br><button class="btn btn-info" onClick="openreplymodal('<?= $x['quote_email'];?>','<?= $x['quote_id'];?>');" ><i class="fa fa-reply" aria-hidden="true"></i></button><br>
													<?php
												}
												else{
													?>
														<br><br><button class="btn btn-info" onClick="openreplymodal('<?= $x['quote_email'];?>','<?= $x['quote_id'];?>');" ><i class="fa fa-reply" aria-hidden="true"></i> Send Mail Again</button><br>
													<?php
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
						else
						{
							?>
								<tr>
									<td colspan="5"><div class="alert alert-warning">No Quotations found.</div></td>
								</tr>
							<?php
						}
					?>
				
				</tbody>
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
<div id="confirmrequestquote" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Status</h4>
      </div>
      <div class="modal-body">
        
		<input type="hidden" id="quote_id"/>
		<label><input type="radio" name="status" id="status0" value="0" /> Pending</label><br>
		<label><input type="radio" name="status" id="status1" value="1"/> In Progress</label><br>
		<label><input type="radio" name="status" id="status2" value="2" /> Resolved</label>

      </div>
      <div class="modal-footer">
        <button type="button" onClick="updatequote();" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>
<div id="replyquotemodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply To this Quote</h4>
      </div>
      <div class="modal-body" style="padding:40px;">
        <form class="form-horizontal" method="post" action="<?= base_url('admin/sendreplyquote');?>">
        	<div class="form-group">
        		<label>Email</label>
        		<input type="email" required name="rxemail" class="form-control" id="rxemail"/>
        		<input type="hidden" name="quote_id2" class="form-control" id="quote_id2"/>
        	</div>
        	<div class="form-group">
        		<label>Subject</label>
        		<input type="text" name="rxsub" required placeholder="Enter subject here"  class="form-control" id="rxsub"/>
        	</div>
        	<div class="form-group">
				<label >Message:</label>
				<textarea class="textarea" required id="rxbody" name="rxbody" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>               
			</div>
			<button type="submit"   class="btn btn-primary" >Send</button>
    	    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

  </div>
</div>
<script>
	function insertquoteid(str,str2){
		$('#quote_id').val(str);
		console.log(str2);
		if(str2==0)
		{
			$('#status0').prop("checked", true);
		}
		else if(str2==1)
		{
			$('#status1').prop("checked", true);
		}
		else if(str2==2){
			$('#status2').prop("checked", true);
		}
		else{
			$('#status0').prop("checked", true);
		}
	}
	function updatequote(){
		var quote_id	=	$('#quote_id').val();
		var status      = 0;
		if($('#status0').prop("checked"))
		{
			var status =0;
		}
		else if($('#status1').prop("checked"))
		{
			var status =1;
		}
		else if($('#status2').prop("checked"))
		{
			var status =2;
		}
		$.ajax({
			type	:	'POST',
			data	:	{
							'quote_id'		:	quote_id,
							'quote_status'	:	status
			},
			url		:	'<?= base_url('admin/updatequote');?>',
			success	:	function(data){
				data	=	data.trim();
				location.reload();
			}
		});
	}
	function openreplymodal(str,id){
		$('#rxemail').val(str);
		$('#quote_id2').val(id);
		$('#rxbody').val('');
		$('#rxsub').val('');
		$('#replyquotemodal').modal('toggle');
	}
</script>
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