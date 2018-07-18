<?php
	Class Search extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();				 
			$this->load->model('select');		 
			
		}
		
		public function index()
		{	
			$post	=	$this->input->post();
			 
			$this->session->set_flashdata('post',$post);
			 redirect (base_url('Members/memberlist'));
			//$this->load->view('home/search',['array'	=>	$array]);			 
		}
		public function findclinic()
		{
			$post					=	$this->input->post();
			$count					=	$post['count'];
			unset($post['count']);
			$post['user_status']	=	1;
			$limit					=	12;
			$offset					=	$limit * $count;
			if(count($post['user_service']))
			{
				$temp	=	'';
				foreach($post['user_service'] as $x)
				{
					//echo "%".$x."%<br>";
					$temp	.=	"user_service like '%".$x."%' or ";
				}
				$temp	=	substr($temp, 0, -3);
			} 
			if($post['user_city']!='')
			{
				$sql	=	"SELECT * FROM users
							WHERE user_city 	= '".$post['user_city']."'							 
							AND (".$temp.") 
							AND user_type 		= 2 
							AND user_status 	= 1
							ORDER BY user_id 
							LIMIT $offset, $limit";
			}
			else{
				$sql	=	"SELECT * FROM users
							WHERE  (".$temp.") 
							AND user_type 		= 2 
							AND user_status 	= 1
							ORDER BY user_id 
							LIMIT $offset, $limit";
			}
			
			$clinic	=	$this->select->get_filtered_product($sql);
			/*   echo $sql;
			 echo "<br>";
			 echo "<br>";
			*/
			/*  echo $this->db->last_query();
			exit(); */ 
			
			if(count($clinic))
			{
				$i=0;
				foreach($clinic as $x)
				{					
					$clinic_id		=	$x['user_id'];
					$user_image		=	$x['user_image'];
					if($i==0 || $i%3==0)
					{
						?>
						<div class="row">
						<?php
					}
					?>
					<div class="col-md-4" style="margin-bottom:100px;">
						
						<div class="team-box text-center" style="padding:5px;padding-top:80px;min-height:530px;">
							<div class="user"><img class="img-reponsive" <?php if($x['user_image']==''){ ?> src="<?= base_url('img/clinicdemo.jpg');?>" <?php } else { ?>src="<?= base_url('img/user/'.$clinic_id.'/'.$user_image);?>" <?php } ?> alt="<?= $x['user_clinic_name'];?>"></div>
							<h3><?= $x['user_clinic_name'];?></h3>
							<?php
											if($x['user_count_rated']!=0)
											{	
												$totalrating1 = $x['user_rating']/$x['user_count_rated'];
												$totalratings = number_format($x['user_rating']/$x['user_count_rated'],1);
												//echo $totalratings;
												$starrating = 1;

												$lastrating  = 5-ceil($totalratings);
												while($starrating<= $totalratings)
												{
													?>
														<span class="fa fa-star checked" title="<?= $totalratings;?> ratings from <?= $x['user_count_rated'];?> reviews"></span>
													<?php
													$starrating++;
												}
												if (strpos($totalrating1,'.') !== false) { 
													?> 							 
													<span class="fa fa-star-half-o checked"  title="<?= $totalratings;?> ratings from <?= $x['user_count_rated'];?> reviews"></span>
													<?php 
												} 
												while($lastrating!=0)
												{
													?>
														<span class="fa fa-star"  title="<?= $totalratings;?> ratings from <?= $x['user_count_rated'];?> reviews"></span>
													<?php
													$lastrating--;
												}
											}
											else{
												echo "<br>";
											}									
															  
										?>
							<span class="position"></span>
							<table class="table table-responsive" style="width:100%;font-size:14px;">
								<tr>
									<th style="width:50%">Location:</th>
									<th style="width:50%"><?= $x['user_city'];?>, <?= $x['user_state'];?></th>
								</tr>
								<tr>
									<th style="width:50%">Service:</th>
									<th style="width:50%"><?= substr(implode(", ",explode(",",$x['user_service'])),0,100); ?></th>
								</tr>
								<tr>
									<th style="width:50%">Website:</th>
									<th style="width:50%"><a href="" target="_blank"><?= substr($x['user_clinic_website'],0,25);?></a></th>
								</tr>
								<tr>
									<th colspan="2" style="width:100%"><p style="font-size:12px;"><p style="font-size:12px;" class="text text-justify"><?= substr($x['user_about'],0,180);?></p></th>
								</tr>
							</table>
							 
							<a href="<?= base_url('clinic/member/'.$x['user_id']);?>" class="btn btn-success btn-sm">View Profile</a>
							<button onclick="callback('<?= $x['user_id'];?>','<?= $x['user_clinic_name'];?>');" class="btn btn-success btn-sm">Request A Callback</button>

							<?php
								if(isset($_COOKIE['wish_user_id']))
								{
									?>
									<a href="#" onClick="bookanappointment('<?= $x['user_id'];?>','<?= $x['user_clinic_name'];?>')" class="btn btn-success btn-sm">Book An Appointment</a>
									<?php
								}
								else
								{
									?>
										 
										<a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-success btn-sm">Book An Appointment</a>
									<?php
								}
							?>

						</div>
					</div>
					
					<?php
					$i++;
					if($i%3==0)
					{
						?>
						</div>
						<?php
					}
				}
				?>
				
				<?php
			}
			else
			{
				echo "0";
			}
			 
		}
		public function findexpert()
		{
			$post					=	$this->input->post();
			$count					=	$post['count'];
			unset($post['count']);
			$post['user_status']	=	1;
			$limit					=	12;
			$offset					=	$limit * $count;
			if(count($post['user_service']))
			{
				$temp	=	'';
				foreach($post['user_service'] as $x)
				{
					//echo "%".$x."%<br>";
					$temp	.=	"user_service like '%".$x."%' or ";
				}
				$temp	=	substr($temp, 0, -3);
			}
			if($post['user_city']!='')
			{
				$sql		=	"SELECT * FROM users
							WHERE user_city 	= '".$post['user_city']."' 
							 
							AND (".$temp.") 
							AND user_type 		= 3 
							AND user_status 	= 1
							ORDER BY user_id 
							LIMIT $offset, $limit";
			}
			else{
				$sql		=	"SELECT * FROM users
							WHERE (".$temp.") 
							AND user_type 		= 3 
							AND user_status 	= 1
							ORDER BY user_id 
							LIMIT $offset, $limit";
			}
			
			$clinic	=	$this->select->get_filtered_product($sql);
			  
			if(count($clinic))
			{
				$i=0;
				foreach($clinic as $x)
				{
					$clinic_id		=	$x['user_id'];
					$user_image		=	$x['user_image'];
					if($i==0 || $i%3==0)
					{
						?>
						<div class="row">
						<?php
					}
					?>
					<div class="col-md-4" style="margin-bottom:100px;">
						
						<div class="team-box text-center " style="padding:5px;padding-top:80px;min-height:520px;">
							<div class="user"><img class="img-reponsive" <?php if($x['user_image']==''){ ?> src="<?= base_url('img/expert.jpg');?>" <?php } else { ?>src="<?= base_url('img/user/'.$clinic_id.'/'.$user_image);?>" <?php } ?> alt="<?= $x['user_clinic_name'];?>"></div>
							<h3>
								<?= $x['user_fname'];?>
								<?= $x['user_sname'];?>										
							</h3>
							<?php
											if($x['user_count_rated']!=0)
											{	
												$totalrating1 = $x['user_rating']/$x['user_count_rated'];
												$totalratings = number_format($x['user_rating']/$x['user_count_rated'],1);
												//echo $totalratings;
												$starrating = 1;

												$lastrating  = 5-ceil($totalratings);
												while($starrating<= $totalratings)
												{
													?>
														<span class="fa fa-star checked" title="<?= $totalratings;?> ratings from <?= $x['user_count_rated'];?> reviews"></span>
													<?php
													$starrating++;
												}
												if (strpos($totalrating1,'.') !== false) { 
													?> 							 
													<span class="fa fa-star-half-o checked"  title="<?= $totalratings;?> ratings from <?= $x['user_count_rated'];?> reviews"></span>
													<?php 
												} 
												while($lastrating!=0)
												{
													?>
														<span class="fa fa-star"  title="<?= $totalratings;?> ratings from <?= $x['user_count_rated'];?> reviews"></span>
													<?php
													$lastrating--;
												}
											}
											else{
												echo "<br>";
											}									
															  
										?>
							<table class="table table-responsive" style="width:100%;font-size:14px;">
								<tr>
									<th style="width:50%">Location:</th>
									<th style="width:50%"><?= $x['user_city'];?>, <?= $x['user_state'];?></th>
								</tr>
								<tr>
									<th style="width:50%">Service:</th>
									<th style="width:50%"><?= substr(implode(", ",explode(",",$x['user_service'])),0,100); ?></th>
								</tr>
								<tr>
									<th style="width:50%">Education:</th>
									<th style="width:50%"><?= substr($x['user_expert_qualification'],0,25);  ?></th>
								</tr>
								<tr>
									<th style="width:50%">Website:</th>
									<th style="width:50%"><a href="" target="_blank">
									<?php 
										if( $x['user_clinic_website']!=''){
											echo substr($x['user_clinic_website'],0,25);
										}
										else
										{
											echo "http://www.wishababy.com";
										}
										?></a>
										</th>
								</tr>
								<tr>
									<td colspan="2" style="width:100%">
									<p class="text text-justify" style="font-size:12px;"><?= substr($x['user_about'],0,180);?></p></td>
								</tr>
							</table>
							 
							<a style="position: absolute;bottom: 71px;right:63px;" href="<?= base_url('Consult-An-Expert/Expert-Details/'.$x['user_id']);?>" class="btn btn-success btn-sm">View Profile</a>
							<button style="position: absolute;bottom: 38px;right:37px;" onclick="callback('<?= $x['user_id'];?>','<?= strtoupper($x['user_fname']);?> <?= strtoupper($x['user_sname']);?>');" class="btn btn-success btn-sm">Request A Callback</button>

							<?php
								if(isset($_COOKIE['wish_user_id']))
								{
									?>
									<a href="#" style="position: absolute;bottom: 5px;right:30px;"	 onClick="bookanappointment('<?= $x['user_id'];?>','<?= $x['user_clinic_name'];?>')" class="btn btn-success btn-sm">Book An Appointment</a>
									<?php
								}
								else
								{
									?>
										 
										<a href="#" style="position: absolute;bottom: 5px;right:30px;" data-toggle="modal" " data-target="#loginmodal" class="btn btn-success btn-sm">Book An Appointment</a>
									<?php
								}
							?>
							<br>
						</div>
					</div>
					
					<?php
					$i++;
					if($i%3==0)
					{
						?>
						</div>
						<?php
					}
				}
			}
		}
			 
		 
	}
?>