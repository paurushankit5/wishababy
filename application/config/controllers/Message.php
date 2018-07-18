<?php
	Class Message extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			if(!isset($_COOKIE['wish_user_id']))
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
					$this->menu[$i]['submenu']	=	$submenu;
					$i++;
				}
			}
			
		}
		public function inbox()
		{
			$message	=	$this->select->get_inbox($_COOKIE['wish_user_id']);
			$array	=	array(
									'cat'	=>	$this->cat,
									'menu'	=>	$this->menu,
									'country'	=>	$this->country,
									'message'	=>	$message,
								);
			//echo "<pre>";
			//print_r($message);
			$this->load->view('home/inbox',['array'	=>	$array]);
		}
		public function sentbox()
		{
			$message	=	$this->select->get_sentbox($_COOKIE['wish_user_id']);
			$array	=	array(
									'cat'	=>	$this->cat,
									'menu'	=>	$this->menu,
									'country'	=>	$this->country,
									'message'	=>	$message,
								);
			//echo "<pre>";
			//print_r($message);
			$this->load->view('home/sentbox',['array'	=>	$array]);
		}
		public function viewconverstaion()
		{
			$other_user_id	=	$this->uri->segment(3);
			$messages			=	$this->select->get_conversation($_COOKIE['wish_user_id'],$other_user_id);
			$array	=	array(
									'cat'	=>	$this->cat,
									'menu'	=>	$this->menu,
									'country'	=>	$this->country,
									'messages'	=>	$messages,
								);
			//echo "<pre>";
			//print_r($message);
			$this->load->view('home/viewconverstaion',['array'	=>	$array]); 
		}
		 
		 
	}
?>