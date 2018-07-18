<?php
	Class Pages extends CI_Controller{
		public function __construct(){
			parent ::__construct();
			$this->load->model('select');
			date_default_timezone_set('Asia/kolkata');	
			$this->cat	=	$this->select->get_all_category();
			 
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
		public function baby_development	(){
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
			$this->load->view('home/baby_development',['array'	=>	$array]);
		}
		 
	}
?>