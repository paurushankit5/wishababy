<?php
	class Blog extends CI_Controller
	{
		public function __construct()
		{
			parent	::__construct();
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
		public function index()
		{ 
			$array	=	array('blog_slug'		=>	$this->uri->segment(2));
			$blog_id	=	$this->uri->segment(3);
			$blog	=	$this->select->get_one_blog($array);
			
			//$array	=	array('blog_id!='	=>	$blog['blog_id']);
			
			//$seo	=	$this->select->get_one_seo($array);
			$array		=	array(
								 
								'blog'		=>	$blog,							 
								'cat'		=>	$this->cat,								 
								'menu'		=>	$this->menu,
								);
			$this->load->view('home/blog',['array'	=>	$array]);
		}
	}
?>













