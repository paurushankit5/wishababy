<?php
	$ques		=	$array['ques'];
	$count		=	$array['count'];
	 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Clinic | Questions</title>
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
		Questions
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('home');?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard/clinic');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><a href="#">Questions</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
         
        <div class="">
			
			  
			  <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Questions</h3>

              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                
              </div>
            </div>
            <div class="box-body chat" id="chat-box">
				 <?php
				if($this->session->flashdata('qmsg'))
				{
					echo $this->session->flashdata('qmsg');
				}
				
			  ?>
              <?php
				if(count($ques))
				{
					foreach($ques as $x)
					{
						$q_id	=	$x['q_id'];
						?>
							<div class="item ">
								<img src="<?= base_url('assets/');?>dist/img/user3-128x128.jpg" alt="user image" style="visibility:hidden;"class="offline">

								<p class="message">
								  <a href="#" class="name">
									<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?= date('h:i:a d-M',strtotime($x['q_add_time']));?></small>
									<?= ucwords($x['q_user_name']);?>
								  </a>
								 <b> <?= $x['q_sub'];?></b><br>
								  <?= $x['q_name'];?>
								</p>
								<?php
									if(count($x['answers']))
									{
										$answered	=	false;
										foreach($x['answers'] as $y)
										{
											
										?>
											<div class="col-sm-9 col-sm-offset-3" id="<?= $y['ans_id'];?>" style="background:#ecf0f5;padding:10px;">
												<?php
												if($y['ans_clinic_id']	==	$_COOKIE['wish_clinic_id'])
												{
													$answered	=	true;
													?>
													<button class="pull-right" onClick="showeditbox('<?= $y['ans_id'];?>');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
													<?php
												}
												?>
												<p class="text text-justify">
												<?= $y['ans_name'];?>
												</p>
												 
											</div>
											<div class="input-group hidden" id="edit<?= $y['ans_id'];?>">
											<input class="form-control" required value="<?= $y['ans_name'];?>" id="answer<?= $y['ans_id'];?>">											 
											<div class="input-group-btn">
											  <button type="submit" onClick="updateanswer('<?= $y['ans_id'];?>');" class="btn btn-primary"><i class="fa fa-plus"></i></button>
											</div>
										  </div>
											<div class="clearfix"></div>
											<br>
										<?php
										}
										if($answered	==	false)
										{
											?>
											 <div class="input-group">
												<input class="form-control" required placeholder="Type message..." id="answerbox<?= $x['q_id'];?>">
												 
												<div class="input-group-btn">
												  <button type="submit" onClick="storeans('<?= $x['q_id'];?>');" class="btn btn-primary"><i class="fa fa-plus"></i></button>
												</div>
											  </div>
											<?php
										}
									}
									else
									{
										?>
										 <div class="input-group">
											<input class="form-control" required placeholder="Type message..." id="answerbox<?= $x['q_id'];?>">
											 
											<div class="input-group-btn">
											  <button type="submit" onClick="storeans('<?= $x['q_id'];?>');" class="btn btn-primary"><i class="fa fa-plus"></i></button>
											</div>
										  </div>
										<?php
									}
								?>								
								
								 
							  </div>
							  <hr>
						<?php
					}
					echo $this->pagination->create_links();
				}
				else
				{
					echo "<b>No questions found.</b>";
				}
			  ?>
              
              <!-- /.item -->
              <!-- chat item -->
              
              <!-- /.item -->
            </div>
            <!-- /.chat -->
            <div class="box-footer">
               
            </div>
          </div>
			   
			 
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
	function showeditbox(a){
		$('#'+a).hide();
		$('#edit'+a).removeClass('hidden');
	}
	function updateanswer(ans_id)
	{
		var ans_name	=	$('#answer'+ans_id).val();
		if(ans_name=='')
		{
			alert('Please enter your answer.');
		}
		else
		{
			$.ajax({
				type	:	'POST',
				data	:	'ans_id='+ans_id+'&ans_name='+ans_name,
				url		:	'<?= base_url('clinic/updateans');?>',
				success	:	function(data)
							{
								//alert(data);
								location.reload();
							}
			});
	
		}
	}
	function storeans(ans_q_id)
	{
		var ans_name	=	$('#answerbox'+ans_q_id).val();
		if(ans_name=='')
		{
			alert('Please enter your answer.');
		}
		else
		{
			$.ajax({
				type	:	'POST',
				data	:	'ans_q_id='+ans_q_id+'&ans_name='+ans_name,
				url		:	'<?= base_url('clinic/storeans');?>',
				success	:	function(data)
							{
								//alert(data);
								location.reload();
							}
			});
	
		}
		 
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
