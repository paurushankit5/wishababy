<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="btn-group btn-group-justified hidden-xs" style="">
  <a href="<?= base_url('Consult-An-Expert/Expert-Directory');?>" class="btn btn-primary " style="background:#1fb5f6;height:100px;">Consult An Expert <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
  <a href="<?= base_url('findaclinic');?>" class="btn btn-primary "  style="background:#1fb5f6;height:100px;"> Find A Clinic <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
  <a href="<?= base_url('askaquestion');?>" class="btn btn-primary " style="background:#1fb5f6;height:100px;">Ask a Free Question <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
  <a href="<?= base_url('getaquote');?>" class="btn btn-primary"  style="background:#1fb5f6;height:100px;">Get A quote <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
</div>
	<div id="fh5co-footer" role="contentinfo" style="padding:40px;">
		<div class="container" >
			<div class="row">
				<div class="row to-animate">
					<!--<div class="col-md-3 col-sm-6 col-xs-6" style="border-left:1px solid white;">						 
						<?php
							if(count($cat))
							{
								?>
								<ul style="list-style-type:none;padding:10px;">	
									<li><a href="<?= base_url('store');?>"><b>STORE</b></a></li> 	
									<?php
									foreach($cat as $x)
									{
										?>									 
										<li style="font-size:14px;margin-bottom:0px;"><a class="external"href="<?= base_url('store/'.$x['cat_slug']);?>"><?= $x['cat_name'];?></a></li>
										<?php
									}
									?>
								</ul>
								<?php
							}
						?>
					</div>-->
					<div class="col-md-4  col-sm-4 col-xs-6"  style="border-left:1px solid white;">						 
						<?php
							if(count($menu))
							{
								?>
								<ul style="list-style-type:none;padding:10px;">	
									 	
									<?php
								 
									foreach($menu as $x)
									{
										?>
										<li style="font-size:14px;margin-bottom:0px;"	><a href="<?= base_url('wish/'.$x['menu_slug']);?>"><?= $x['menu_name'];?></a></li>
										<?php
									}
								 
									?>
									<li style="font-size:14px;margin-bottom:0px;"><a href="<?= base_url('blogs');?>">Blogs</a></li>

								</ul>
								<?php
							}
						?>
					</div>
					<div class="col-md-4  col-sm-4 col-xs-6"  style="border-left:1px solid white;">						 
						<ul style="list-style-type:none;padding:10px;">	
							<li style="font-size:14px;margin-bottom:0px;"><a href="<?= base_url('Contact-Us');?>">Contact Us</a></li>
							<li style="font-size:14px;margin-bottom:0px;"><a href="<?= base_url('findaclinic');?>">Clinic Directory</a></li>
							<li style="font-size:14px;margin-bottom:0px;"><a href="<?= base_url('Consult-An-Expert/Expert-Directory');?>">Expert Directory</a></li>
							<li style="font-size:14px;margin-bottom:0px;"><a href="<?= base_url('askaquestion');?>">Ask A Free Question</a></li>
							<li style="font-size:14px;margin-bottom:0px;"><a href="<?= base_url('track-your-baby-development');?>">Track Your Baby's Development</a></li>
							<li style="font-size:14px;margin-bottom:0px;"><a href="<?= base_url('Questions/ViewQuestions');?>">View Questions</a></li>
							<li style="font-size:14px;margin-bottom:0px;"><a href="<?= base_url('askaquestion');?>">Ask a Question</a></li>
						
						</ul>
						
						 
					</div>
					<div class="col-md-4  col-sm-4 col-xs-12"  style="border-left:1px solid white;">						 
						<div class="social-media">
							<ol style="padding:10px;">
								<li><a href="#" class="btn " style="background:#1fb5f6;color:white;margin-bottom:10px;width:70px;"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
								<li><a href="#" class="btn" style="background:#1fb5f6;color:white;margin-bottom:10px;width:70px;"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a></li>
								<li><a href="#" class="btn" style="background:#1fb5f6;color:white;margin-bottom:10px;width:70px;"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
								<li><a href="#" class="btn" style="background:#1fb5f6;color:white;margin-bottom:10px;width:70px;"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
							</ol>
						</div>
					</div>
					
					
				</div>
				<div class="clearfix"></div>
				<hr style="border:.5px solid white;">
				<p class="text text-center" style="color:white;font-size:14px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wish A Baby Center</b> New Delhi, Patel Nagar, A-316, Near Rajeev Chawk Metro Station, 560100, India</p>
				<hr style="border:.5px solid white;">
				<!--<div class="col-md-12 to-animate">
					 
					<div class="col-md-4"  style="padding:30px;">
						<div class='list-type1'>
							<?php
								if(count($cat))
								{
									?>
									<ol>	
										 	
										<?php
										foreach($cat as $x)
										{
											?>									 
											<li><a class="external" href="<?= base_url('store/'.$x['cat_slug']);?>"><b><?= $x['cat_name'];?></b></a></li>
											<?php
										}
										?>
									</ol>
									<?php
								}
							?>
							 
							
						</div>
					</div>
					<div class="col-md-4" style="padding:30px;">
						<div class="list-type2">
							
							<ol>				
								 <?php
								if(count($menu))
								{
									foreach($menu as $x)
									{
										?>
										<li><a href="<?= base_url('wish/'.$x['menu_slug']);?>"><b><?= $x['menu_name'];?></b></a></li>
										<?php
									}
								}
								?>
								<li><a href="<?= base_url('blogs');?>"><b>Blog</b></a></li>
							</ol>
						</div>
					</div>
					<div class="col-md-4"  style="padding:30px;">
						<div class='list-type5'>
							<ol>				
								<li><a href="#"><b>About Us</b></a></li>
								<li><a href="#"><b>Contact Us</b></a></li>
								<li><a href="<?= base_url('findaclinic');?>"><b>Clinic Directory</b></a></li>
								<li><a href="<?= base_url('askaquestion');?>"><b>Ask a Free Question</b></a></li>
								 
							</ol>
						</div>
					</div>
				</div>-->
				
			</div>
		</div>
	</div>
	