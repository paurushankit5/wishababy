<?php
	class Error404 extends CI_Controller
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
			 
			//echo $eligible_to_edit;
			$array	=	array(
								 
								'country'			=>	$this->country,
								'cat'				=>	$this->cat,
								'menu'				=>	$this->menu,
								);
			$this->load->view('home/error404',['array'	=>	$array]);
		}	
	}
?>