<?php
	Class Members extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();				 
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
					$this->menu[$i]['submenu']	=	$submenu;
					$i++;
				}
			}
			
		}
		
		public function memberlist()
		{
					
			$post	=	$this->session->flashdata('post');
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('Members/memberlist'),
								'per_page'		=>		'12',
								'total_rows'	=>		$this->select->count_some_users($post),
								'full_tag_open'	=>		"<ul class='pagination pull-right'>",
								'full_tag_close'=>		"</ul>",
								'next_tag_open'=>		"<li>",
								'next_tag_close'=>		"</li>",
								'prev_tag_open'=>		"<li>",
								'prev_tag_close'=>		"</li>",
								'num_tag_open'=>		"<li>",
								'num_tag_close'=>		"</li>",
								'cur_tag_open'=>		"<li class='active'><a>",
								'cur_tag_close'=>		"</a></li>",								
							];
			$this->pagination->initialize($config);			
				
			$users	=	$this->select->get_some_users($config['per_page'],$this->uri->segment(3),$post);
			$array	=	array(
									'cat'	=>	$this->cat,
									'menu'	=>	$this->menu,
									'country'	=>	$this->country,
									'users'	=>	$users,
								);
			//echo "<pre>";
			
			//print_r($users);
			$post	=	$this->session->set_flashdata('post',$post);					
			$this->load->view('home/memberlist',['array'	=>	$array]);			 
		}
		public function viewprofile()
		{
			$user_id	=	$this->uri->segment(3);
			$array		=	array(
									'user_id'	=>	$user_id,
								);
			$user		=	$this->select->get_one_user($array);
			$array	=	array(
									'cat'	=>	$this->cat,
									'menu'	=>	$this->menu,
									'country'	=>	$this->country,
									'user'	=>	$user,
								);
			 
		 					
			$this->load->view('home/viewprofile',['array'	=>	$array]);
		}
		 
	}
?>