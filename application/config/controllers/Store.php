<?php
	Class Store extends CI_Controller
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
			$array	=	array(
								'cat'		=>	$this->cat,
								'country'	=>	$this->country,
								'menu'		=>	$this->menu,
								);
			$this->load->view('home/store',['array'	=>	$array]);
		}
		public function products()
		{			
			$array		=	array('cat_slug'	=>	$this->uri->segment(2));
			if(count($singlecat	=	$this->select->get_one_category($array)))
			{
				$array		=	array('product_cat_id'	=> $singlecat['cat_id']);
				$products	=	$this->select->get_products($array);
				$array	=	array(
									'cat'		=>	$this->cat,
									'singlecat'	=>	$singlecat,
									'products'	=>	$products,
									'country'	=>	$this->country,
									'menu'		=>	$this->menu,
								);
				//echo "<pre>";
				//print_r($products);
				$this->load->view('home/products',['array'	=>	$array]);
			}
			else
			{
				return redirect (base_url('error'));
			}
			
		}
		public function singleproduct()
		{
			 
			$array		=	array(
							'cat_slug'		=>	$this->uri->segment(2),
							'product_slug'	=>	$this->uri->segment(3),
							
							);
			if(count($product	=	$this->select->get_one_product($array)))
			{
				$array		=	array('cat_slug'	=> $this->uri->segment(2));
				$singlecat	=	$this->select->get_one_category($array);
				$array	=	array(
									'cat'		=>	$this->cat,
									'singlecat'	=>	$singlecat,
									'product'	=>	$product,
									'country'	=>	$this->country,
									'menu'		=>	$this->menu,
								);
				//echo "<pre>";
				//print_r($product);
				$this->load->view('home/singleproduct',['array'	=>	$array]);
			}
			else
			{
				return redirect (base_url('error'));
			}
			
		}
	
		
	}
?>