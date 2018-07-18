<?php
	class Clinicprofile extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			if(!isset($_COOKIE['wish_clinic_id']))
			{
				return redirect(base_url('home'));
			}
			$this->load->model('select');
			$this->menu		=	$this->select->get_all_menu();
			date_default_timezone_set('Asia/kolkata');
			if(count($this->menu))
			{
				$i	=	0;
				foreach($this->menu as $x)
				{
					$array		=	array(
											'submenu_menu_id'	=>	$x['menu_id']
										);				
					$submenu	=	$this->select->get_some_submenu($array);
					$this->menu[$i]['submenu']	=	$submenu;
					$i++;
				}
			}
				
			$this->cat	=	$this->select->get_all_category();
		}
		public function index()
		{
			$this->load->view('clinic/profile');
		}
		public function edit()
		{
			$array	=	array('user_id'	=>	$_COOKIE['wish_clinic_id']);
			$me	=	$this->select->get_one_user($array);
			$states	=	$this->select->get_all_indian_state();
			$array	=	array('city_state'	=>	$me['user_state']);
			$cities	=	$this->select->get_some_cities($array);
			$service	=	$this->select->get_clinic_service();
			$array	=	array(
								'me'		=>	$me,							
								'cities'	=>	$cities,
								'states'	=>	$states,
								'service'	=>	$service,
								);
			$this->load->view('clinic/edit',['array'	=>	$array]);
		}
		public function showcities()
		{
			$post	=	$this->input->post();
			$cities	=	$this->select->get_some_cities($post);
			echo "<option value=''>Please select city</option>";
			if(count($cities))
			{
				foreach($cities as $x)
				{
					?>
						<option value="<?= $x['city_name'];?>"><?= $x['city_name'];?></option>
					<?php
				}
			}
		}
		public function update()
		{
			$post	=	$this->input->post();
			$clinic_id	=	$post['user_id'];
			 
			$preimage	=	$post['preimage'];
			unset($post['preimage']);
			//echo "<pre>";
			//print_r($post);
			if(!file_exists('./img/user/'.$clinic_id.'/'))
			{
				mkdir('./img/user/'.$clinic_id.'/'); 
			}			 
			if($_FILES['user_image']['name']!='')
			{
				$post['user_image']	=	$_FILES['user_image']['name'];
				if(!file_exists('./img/user/'.$clinic_id))
				{
					mkdir('./img/user/'.$clinic_id); 
				}
				@unlink("./img/user/$clinic_id/".$preimage);
				move_uploaded_file($_FILES['user_image']['tmp_name'],"./img/user/$clinic_id/".$post['user_image']);
			}
			$this->load->model('update');
			if($this->update->update_table('users','user_id',$post['user_id'],$post))
			{
				$this->session->set_flashdata('profilemsg','<div class="alert alert-success">Profile updated successfully.</div>');
			}
			else
			{
				$this->session->set_flashdata('profilemsg','<div class="alert alert-danger">System Failure.</div>');
			}
			return redirect(base_url('clinicprofile'));
			
			
		}
		
	}
?>