<?php
	Class Register extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();	
			if(isset($_COOKIE['wish_user_id'])	||	isset($_COOKIE['wish_clinic_id'])	||	isset($_COOKIE['wish_expert_id'])	)
			{
				return redirect(base_url('home'));
			}
			$this->load->model('select');			 
			date_default_timezone_set('Asia/kolkata');	
			$this->cat	=	$this->select->get_all_category();
			$this->country	=	$this->select->get_country();
			$this->height	=	$this->select->get_height();
			$this->menu		=	$this->select->get_all_menu();
			if(count($this->menu))
			{
				$i	=	0;
				foreach($this->menu as $x)
				{
					$array		=	array(
											'submenu_menu_id'	=>	$x['menu_id']
										);				
					$submenu	=	$this->select->get_some_submenu($array);
					
				
					//echo "<pre>";
					 
					if(count($submenu))
					{
						$j=0;
						foreach($submenu as $y)
						{
							$array	=	array('nest_submenu_id'		=>		$y['submenu_id']);
							$nestedmenu	=	$this->select->get_header_nestedmenu($array);
							$submenu[$j]['nestedmenu']	=	$nestedmenu;
							$j++;
							
							//print_r($nestedmenu);
						}
					}
					$this->menu[$i]['submenu']	=	$submenu;
					$i++;
				}
			}	
			
		}
		
		public function index()
		{	
			
			$array	=	array(	'cat'		=>	$this->cat,
								'country'	=>	$this->country,
								'height'	=>	$this->height,
								'menu'		=>	$this->menu,
							);
			//echo "<pre>";
			//print_r($array['country']);
			$this->load->view('home/register',['array'	=>	$array]);
		}
		public function shownormalfield()
		{
			echo '
					<div class="form-group">	
								<span class="pull-left"><b>Gender</b></span>
								<br>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" value="Male" checked name="user_gender"><b>Male</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" value="Female" name="user_gender"><b>Female</b></label>
									</div>
								</div>
								 
							</div>
							<hr style="border:1px solid white">							 
							 <div class="form-group  ">
								<label class="pull-left" for="email">DOB:</label>
								 
								<input type="date" class="form-control" name="user_dob">								 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="email">Country:</label>
								<select class="form-control" name="user_country">
									';
										foreach($this->country as $x)
										{
											?>
											<option><?= $x['country_name'];?></option>
											<?php
										}
									echo '
								</select>								 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="email">Ethnicity:</label>								 
								<select class="form-control" name="user_ethnicity">
									<option>Caucasian</option>
									<option>Black</option>
									<option>Hispanic</option>
									<option>Asian / Pacific</option>
									<option>American Indian</option>
									<option>Mixed</option>
									<option>Jewish</option>
									<option>Black / African</option>
									<option>French / Canadian</option>
									<option>Other</option>									 
								</select>								 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="email">Height:</label>
								<select class="form-control" name="user_height">
									';
										foreach($this->height as $x)
										{
											?>
											<option><?= $x['height_inch'];?> (<?= $x['height_cm'];?>)</option>
											<?php
										}
									echo'
								</select>							 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="user_weight">Weight:</label>
								<input type="number" class="form-control" id="user_weight" placeholder="Weight (in kg)" name="user_weight">
								 							 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="email">Eye Color:</label>
								<select class="form-control" name="user_eye">
									<option>Amber</option>
									<option>Blue</option>
									<option>Brown</option>
									<option>Gray</option>
									<option>Green</option>
									<option>Hazel</option>
									 
								</select>
							 
							</div>
							<div class="form-group  ">
								<label class="pull-left" for="email">Hair Color:</label>
								<select class="form-control" name="user_hair">
									<option>Black</option>
									<option>Dark Brown</option>
									<option>Brown</option>
									<option>Auburn</option>
									<option>Red</option>
									<option>Blonde</option>
									<option>Grey</option>
									<option>White</option>
									<option>Light Brown</option>
								</select>
							</div>
							<hr style="border:1px solid white">							 
							 <div class="form-group">	
								<span class="pull-left"><b>Application Type</b></span>
								<br>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" value="Single" checked name="user_application"><b>Single</b></label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio">
										<label class="pull-left"><input type="radio" value="Joint" name="user_application"><b>Joint</b></label>
									</div>
								</div>
								 
							</div>
			';
			
		}
		public function showclinicfield()
		{
			$service	=	$this->select->get_clinic_service();
			echo '
					<div class="form-group">
						<input type="text" required class="form-control" name="user_clinic_name" placeholder="Clinic Name"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="user_clinic_website" placeholder="Website"/>
					</div>
					<div class="form-group  ">
						 
						<select class="form-control" required name="user_service">
							<option value="">Service Type</option>';
							if(count($service))
							{
								foreach($service as $x)
								{
									?>
									<option value="<?= $x['service_name'];?>"><?= $x['service_name'];?></option>
									<?php
								}
							}
							 						 
						echo '</select>					 
					</div>
					
				';
		}
		public function showexpertfield()
		{
			$service	=	$this->select->get_clinic_service();
			echo '
					<div class="form-group">
						<input type="text" class="form-control" name="user_expert_qualification" placeholder="Qualifications"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="user_expert_job" placeholder="Job Title"/>
					</div>
					<div class="form-group  ">
						 
						<select class="form-control" required name="user_expert_specality">
							<option value="">Specialises In</option>';
							if(count($service))
							{
								foreach($service as $x)
								{
									?>
									<option value="<?= $x['service_name'];?>"><?= $x['service_name'];?></option>
									<?php
								}
							}
							 						 
						echo '</select>					 
					</div>
					
				';
		}
		 
		public function showfamilyfield()
		{
			echo '
					<div class="form-group">
						<input type="text" class="form-control" name="user_family_name" placeholder="Family Name"/>
					</div>
					 
					<div class="form-group  ">
						 
						<select class="form-control" name="user_family_type">
							<option value="">Family Type</option>
							<option>Co-Parenting Family</option>
							<option>Gay Couple Family</option>
							<option>Lesbian Couple Family</option>
							<option>LGBT Mixed Family</option>
							<option>Other Alternate Family</option>
							<option>Single Female Family</option>
							<option>Single Gay Family</option>
							<option>Single Lesbian Family</option>
							<option>Single Male Family</option>
							<option>Straight / Heterosexual Family</option>
							<option>Transgender Family</option>
													 
						</select>					 
					</div>
					
				';
		}
		public function showfriendfield()
		{
			echo '
				<div class="form-group">	
					<span class="pull-left"><b>Gender</b></span>
					<br>
					<div class="col-sm-6">
						<div class="radio">
							<label class="pull-left"><input type="radio" value="Male" checked name="user_gender"><b>Male</b></label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="radio">
							<label class="pull-left"><input type="radio" value="Female" name="user_gender"><b>Female</b></label>
						</div>
					</div>
					 
				</div>
				<hr style="border:1px solid white">							 
				 <div class="form-group  ">
					<label class="pull-left" for="email">DOB:</label>
					 
					<input type="date" class="form-control" name="user_dob">								 
				</div>
				<div class="form-group  ">
					<label class="pull-left" for="email">Country:</label>
					<select class="form-control" name="user_country">
						';
							foreach($this->country as $x)
							{
								?>
								<option><?= $x['country_name'];?></option>
								<?php
							}
						echo '
					</select>								 
				</div>		 
			';
			
		}
		public function storeuser()
		{
			$post	=	$this->input->post();
			$post['user_email']		=	strtolower($post['user_email']);
			$post['user_add_time']	=	date('Y-m-d H:i:s');
			$post['user_status']	=	1;
			//echo "<pre>";
			//print_r($post);
			$this->load->model('insert');
			$array2	=	array('user_email'		=>	$post['user_email']);
			if($this->select->checkuser($array2))
			{
				$this->session->set_flashdata('regmsg','<div class="alert alert-success"><b>OOps!..This email-id is already taken. </b></div>');
			}
			else if($this->select->checkuser($post))
			{
				$this->session->set_flashdata('regmsg','<div class="alert alert-success"><b>OOps!..This account is already registerd. </b></div>');
			}
			else if($user_id	=	$this->insert->insert_table($post,'users'))
			{
				$this->session->set_flashdata('regmsg','<div class="alert alert-success"><b>Congratulations!..You are successfully registered. </b></div>');
				if($post['user_type']=='1')
				{
					setcookie('wish_user_id',$user_id, time() + (86400 * 30), "/");
					return redirect(base_url('myprofile/edit'));
				}
				else if($post['user_type']=='2')
				{
					setcookie('wish_clinic_id',$user_id, time() + (86400 * 30), "/");
					return redirect(base_url('clinicprofile/edit'));
				}
				else if($post['user_type']=='3')
				{
					setcookie('wish_expert_id',$user_id, time() + (86400 * 30), "/");
					return redirect(base_url('dashboard/expert'));
				}				
			}
			else
			{
				$this->session->set_flashdata('regmsg','<div class="alert alert-success"><b>OOps!..System Error. </b></div>');
			}			
			return redirect(base_url('register'));
			
		}
		public function checkuser()
		{
			$post	=	$this->input->post();
			//print_r($post);
			if($this->select->checkuser($post))
			{
				echo "1";
			}
			
		}
	}
?>