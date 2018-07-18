<?php
	Class Register extends MY_Controller
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
			$array	=	array('seo_page_name'	=>	'Register');
			$seo	=	$this->select->get_one_seo($array);
			$state	=	$this->select->get_all_indian_state();
			$array	=	array(	'cat'		=>	$this->cat,
								'country'	=>	$this->country,
								'height'	=>	$this->height,
								'menu'		=>	$this->menu,
								'seo'		=>	$seo,
								'state'		=>	$state,
							);
			//echo "<pre>";
			//print_r($array['country']);
			$this->load->view('home/register',['array'	=>	$array]);
		}
		public function showparentfiled()
		{
			$states	=	$this->select->get_all_indian_state();
			
			echo '
					<div class="form-group">	
					<div class="col-sm-12">
					<span class="pull-left" style="font-size:14px;"><b>Gender</b></span>
					</div>
					
					 
					<div class="col-sm-4 col-xs-12">
						<div class="radio">
							<label class="pull-left"><input type="radio" checked value="Male" name="user_gender">Male</label>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="radio">
							<label class="pull-left"><input type="radio"  value="Female" name="user_gender">Female</label>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="radio">
							<label class="pull-left"><input type="radio"  value="Transgender" name="user_gender">Transgender</label>
						</div>
					</div>
					</div>
					<div class="form-group col-sm-12">
						<label class="pull-left" style="font-size:12px;">DOB:</label>
						<input type="date" class="form-control"  placeholder="Date of Birth" name="user_dob">
					</div>
					<div class="form-group col-sm-12">
										 
										<input type="text" name="user_adl1"  id="user_adl1"  class="form-control" placeholder="Addess Line 1"/>
									</div>
									<div class="form-group col-sm-12">
									 
										<input type="text" name="user_adl2"  id="user_adl2"   class="form-control" placeholder="Addess Line 2"/>
									</div>
									<div class="form-group col-sm-6">
										 
										<select name="user_state" required onchange="showcity(this.value);" id="user_state" class="form-control" placeholder="State">
											 <option value="">Select state</option>';
												if(count($states))
												{
													foreach ($states as $x)
													{
														?>
														<option value="<?= $x['city_state'];?>"><?= $x['city_state'];?></option>
														<?php
													}
												}
										echo '	 											
										</select>
									</div>
									<div class="form-group col-sm-6">
										<select name="user_city" id="user_city" required id="user_city" class="form-control" placeholder="City">
											<option value="">Select City</option>
										</select>
									</div>';
			
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
						<input type="text" class="form-control" id="user_expert_qualification" name="user_expert_qualification" placeholder="Qualifications"/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="user_expert_job" name="user_expert_job" placeholder="Job Title"/>
					</div>
					<div class="form-group  ">
						 
						<select class="form-control" required id="user_expert_specality" name="user_expert_specality">
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
				$this->mail_user($post['user_fname'],$post['user_sname'],$post['user_email']);
				//send mail to admin
				//$this->sendmail('info@wishababy.com','New User registered','Hi admin, a user has been registered on your website. Please have a look.','New User registered');
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
		public function mail_user($fname,$sname,$email)
		{
			$bg=base_url('img/logo.png');
					
			$data	=	'<html>
							<div style="width:90%; border:px solid #3f5267;">
								<div style="width:100%;padding:20px;">
									<center>
										<img src="'.$bg.'" style=""/>
									</center>
								</div>
								<div style="width:100%;background:#3f5267;color:white;padding:5px;">
									<h2 style="text-align:center">Welcome to WishABaby</h2>
								</div>
								<div style="width:100%;padding:10px;">
									<h3><b>Dear '.$fname.' '.$sname.',</b></h3>

									<p>We are happy to inform you that you are now a registered member of WishABaby.</p>

									Please update your profile for better experience.

									<hr>
									<p>Regards : WAB Team<br>
									Email : &nbsp;&nbsp;&nbsp;&nbsp;info@wishababy.com</p>
									<hr>
								</div>
							</div>
						</html>';
			if($this->sendmail($email,'Welecome to WishABaby',$data,'Welecome to WishABaby'))
			{
				echo 1;
			}
			else
			{
				echo "2";
			}
			
		}
		 
	
	}
?>