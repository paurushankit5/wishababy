<?php
	$clinic		=	$array['clinic'];
?>
<div class="row" style="padding:20px 30px;font-size:14px;font-weight:bold; background:#3f5267;">
	<h3 class="text text-center text text-success"><b>Registered IVF Clinics</b></h3>
	<?php
		if(count($clinic))
		{
			foreach ($clinic as $x)
			{
				$clinic_id	=	$x['user_id'];
				$user_image	=	$x['user_image'];
				?>
					<div class="row" style="background:white;margin-bottom:30px;padding:20px 0px;border-radius:5px;border:1px solid gray;">
						<a href="<?= base_url('clinic/member/'.$x['user_id']);?>">
						<div class="col-md-5">
							<img class="img img-reponsive img-circle img-thumbnail" style="width:100%;height:100px;" <?php if($x['user_image']==''){ ?> src="<?= base_url('img/clinicdemo.jpg');?>" <?php } else { ?>src="<?= base_url('img/user/'.$clinic_id.'/'.$user_image);?>" <?php } ?> alt="<?= $x['user_clinic_name'];?>">
							<br>
						</div>
						<div class="col-md-7">
							<?= ucwords($x['user_clinic_name']);?>
								
							<br><i class="fa fa-map-marker" aria-hidden="true"></i>
							<?= ucwords($x['user_city']);?>
							<br>
							<?= ucwords($x['user_service']);?>
							<br>
							 
						</div>
						 </a>
						 
					</div>
				<?php
			}
		}
	?>
 </div>