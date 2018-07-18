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
			$limit					=	3;
			$offset					=	$limit * $count;
			 
			$sql		=	"SELECT * FROM users
							WHERE user_city 	= '".$post['user_city']."' 
							AND	user_state		= '".$post['user_state']."'
							AND user_service in   ('".implode("','",$post['user_service'])."') 
							AND user_type 		= 2 
							AND user_status 	= 1
							ORDER BY user_id 
							LIMIT $offset, $limit";
			$clinic	=	$this->select->get_filtered_product($sql);
			/* echo $sql;
			 echo "<br>";
			 echo "<br>";
			 echo $this->db->last_query();
			// exit();
			*/
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
						
						<div class="team-box text-center" style="padding:5px;padding-top:80px;min-height:500px;">
							<div class="user"><img class="img-reponsive" <?php if($x['user_image']==''){ ?> src="<?= base_url('img/clinicdemo.jpg');?>" <?php } else { ?>src="<?= base_url('img/user/'.$clinic_id.'/'.$user_image);?>" <?php } ?> alt="<?= $x['user_clinic_name'];?>"></div>
							<h3><?= $x['user_clinic_name'];?></h3>
							<span class="position"></span>
							<table class="table table-responsive" style="width:100%;font-size:14px;">
								<tr>
									<th style="width:50%">Location:</th>
									<th style="width:50%"><?= $x['user_city'];?>, <?= $x['user_state'];?></th>
								</tr>
								<tr>
									<th style="width:50%">Service:</th>
									<th style="width:50%"><?= $x['user_service']; ?></th>
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
		 
	}
?>