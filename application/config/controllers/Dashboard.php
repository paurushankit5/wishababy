<?php
	class Dashboard extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();	
			if(!(isset($_COOKIE['wish_user_id'])	||	isset($_COOKIE['wish_clinic_id'])||	isset($_COOKIE['wish_expert_id'])	))
			{
				return redirect(base_url('home'));
			}
			$this->load->model('select');			 
			date_default_timezone_set('Asia/kolkata');	
			$this->cat	=	$this->select->get_all_category();
			$this->country	=	$this->select->get_country();			 
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
			if(isset($_COOKIE['wish_clinic_id']))
			{
				return redirect(base_url('dashboard/clinic'));
			}
			else if(isset($_COOKIE['wish_expert_id']))
			{
				return redirect(base_url('dashboard/expert'));
			}
			else
			{
				return redirect(base_url(''));
			}
			 
		}
		public function clinic()
		{
			if(!isset($_COOKIE['wish_clinic_id']))
			{
				return redirect(base_url('home'));
			}
			$this->load->view('clinic/dashboard');
		}
		public function myappointments()
		{
			$this->load->library('pagination');
			$array		=	array('ap_parent_id'	=>	$_COOKIE['wish_user_id']);
			$config		=	[
								'base_url'		=>		base_url('dashboard/myappointments/'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_some_appointment($array),
								'full_tag_open'	=>		"<ul class='pagination pull-right'>",
								'full_tag_close'=>		"</ul>",
								'next_tag_open'=>		"<li>",
								'next_tag_close'=>		"</li>",
								'prev_tag_open'=>		"<li>",
								'prev_tag_close'=>		"</li>",
								'num_tag_open'=>		"<li>",
								'num_tag_close'=>		"</li>",
								'first_tag_open'=>		"<li>",
								'first_tag_close'=>		"</li>",
								'last_tag_open'=>		"<li>",
								'last_tag_close'=>		"</li>",
								'cur_tag_open'=>		"<li class='active'><a>",
								'cur_tag_close'=>		"</a></li>",								
							];
			$this->pagination->initialize($config);			
			$appointments	=	$this->select->get_some_appointment($config['per_page'],$this->uri->segment(3),$array);
			$array			=	array(	
									'user_type'		=>	2,
									'user_status'	=>	1
									);
			$clinic			=	$this->select->get_some_users(5,0,$array);
			$array			=	array(
										'appointments'	=>	$appointments,
										'clinic'	=>	$clinic,
										'cat'		=>	$this->cat,
										'menu'		=>	$this->menu,
									);
			$this->load->view('home/myappointments',['array'	=>	$array]);
		}
		public function changepassword()
		{
			$post	=	$this->input->post();
			 
			if(isset($_COOKIE['wish_user_id']))
			{
				$array	=	array(
									'user_id'	=>	$_COOKIE['wish_user_id'],
									'user_pwd'	=>	$post['old']
									);
				if($user_id	=	$this->select->checkuser($array))
				{
					$array	=	array(
									'user_id'	=>	$user_id,
									'user_pwd'	=>	$post['pwd']
									);
					$this->load->model('update');
					if($this->update->update_table('users','user_id',$user_id,$array))
					{
						echo "1";   
					}
					else						
					{
						echo "2";   
					}
				}
				else
				{
					echo "3";
				}
			}
			 
		}
		public function expert()
		{
			$array	=	array('user_id'	=>	$_COOKIE['wish_expert_id']);			 
			$this->me	=	$this->select->get_one_user($array);
			$array		=	array('me'	=>	$this->me);
			$this->load->view('expert/dashboard',['array'	=>	$array]);
		}
		
	}

?>












