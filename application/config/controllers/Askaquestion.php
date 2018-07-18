<?php
	class Askaquestion extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			 
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
			 	
			$this->cat	=	$this->select->get_all_category();
		}
		public function index()
		{
			
			if(isset($_COOKIE['wish_user_id']))
			{
				$array	=	array('user_id'		=>		$_COOKIE['wish_user_id']);
				$user	=	$this->select->get_one_user($array);
				 
			}
			else
			{
				$user	=	array();
			}
			
			$array	=	array(
								'cat'		=>	$this->cat,
								 'user'		=>	$user,
								'menu'		=>	$this->menu,
								 
							);
			
			
			//echo "<pre>";
			//print_r($this->menu);
			$this->load->view('home/askaquestion',['array'	=>	$array]);
			 
		}
		public function store()
		{
			$post	=	$this->input->post();
			$post['q_add_time']	=	date('Y-m-d H:i:s');
			$post['q_edit_time']	=	date('Y-m-d H:i:s');
			//echo "<pre>";
			//print_r($post);
			$this->load->model('insert');
			if($this->insert->insert_table($post,'question'))
			{
				$this->session->set_flashdata('askmsg','<div class="alert alert-success">Your question has been submitted and we will get back to you with the expert opinions.</div>');
			}
			else
			{
				$this->session->set_flashdata('askmsg','<div class="alert alert-danger">System Failure.</div>');
			}
			return redirect('askaquestion');
		}
	}

?>