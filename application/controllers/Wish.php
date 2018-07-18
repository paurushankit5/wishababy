<?php
	Class Wish extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();			 
			$this->load->model('select');			 
			date_default_timezone_set('Asia/kolkata');	
			$this->cat	=	$this->select->get_all_category();
			//$this->country	=	$this->select->get_country();
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
			$menu_slug	=	 $this->uri->segment(2);
			$array		=	 array(
									'menu_slug'		=>	$menu_slug,
									);
			$singlemenu	=	$this->select->get_one_menu($array);
			$array	=	array(
								'cat'		=>	$this->cat,
								 
								'menu'		=>	$this->menu,
								'singlemenu'=>	$singlemenu,
							);			
			//echo "<pre>";
			//print_r($singlemenu);
			$this->load->view('home/wish',['array'	=>	$array]);
		}
		public function submenu()
		{
			$submenu_slug	=	 $this->uri->segment(3);
			$array		=	 array(
									'submenu_slug'		=>	$submenu_slug,
									);
			$singlesubmenu	=	$this->select->get_one_submenu($array);
			$array	=	array(
								'cat'			=>	$this->cat,
								 
								'menu'			=>	$this->menu,
								'singlesubmenu'	=>	$singlesubmenu,
							);			
			//echo "<pre>";
			//print_r($singlemenu);
			$this->load->view('home/submenu',['array'	=>	$array]); 
		}
		public function nestedmenu()
		{
			$nest_slug	=	 $this->uri->segment(4);
			$array		=	 array(
									'nest_slug'		=>	$nest_slug,
									);
			$nestedmenu	=	$this->select->get_one_nestedmenu($array);
			$array	=	array(
								'cat'			=>	$this->cat,
								 
								'menu'			=>	$this->menu,
								'nestedmenu'	=>	$nestedmenu,
							);			
			//echo "<pre>";
			//print_r($nestedmenu);
			$this->load->view('home/nestedmenu',['array'	=>	$array]); 
		}
		
		 
		
	}
?>