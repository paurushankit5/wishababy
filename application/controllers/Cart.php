<?php
	class Cart extends CI_Controller
	{
		public function __construct()
		{
			parent	::__construct();
			if(!isset($_COOKIE['wish_user_id']))
			{
				return redirect (base_url());
			}
			$this->load->model('select');
		}
		public function index()
		{
			$array	=	array('cart_user_id'	=>	$_COOKIE['wish_user_id']);
			$cart	=	$this->select->get_cart($array);
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
			$array	=	array(
									'cart'	=>	$cart,
									'cat'	=>	$this->cat,
									'menu'	=>	$this->menu,
			
								);
			$this->load->view('home/cart',['array'	=>	$array]);
		}
		public function addtocart()
		{
			$post					=	$this->input->post();
			$post['cart_user_id']	=	$_COOKIE['wish_user_id'];
			$post['cart_edit_time']	=	date('Y-m-d H:i:s');
			$post['cart_add_time']	=	date('Y-m-d H:i:s');
			
			$this->load->model('insert');
			$cart_user_id	=	$_COOKIE['wish_user_id'];
			$array			=	array(
										'cart_user_id'		=>	$cart_user_id,
										'cart_product_id'	=>	$post['cart_product_id'],
									);
				
			if($this->select->checkcart($array))
			{
				echo "This product is already added in your cart.";
			}
			else if($this->insert->insert_table($post,'cart'))
			{
				echo "congratulations! Item added in cart.";
			}
			else
			{
				echo "System Failure";
			}
		}
		public function deletecart()
		{
			$cart_id	=	$this->uri->segment(3);
			echo $cart_id;
			$array	=	array(
								'cart_id'		=>		$cart_id,
								'cart_user_id'	=>		$_COOKIE['wish_user_id']
							);
			$this->load->model('delete');
			$this->delete->delete_table($array,'cart');
			return redirect(base_url('cart'));
		}
		public function updatecart()
		{
			$post					=	$this->input->post();
			$this->load->model('update');
			if($this->update->update_table('cart','cart_id',$post['cart_id'],$post))
			{
				echo "yes";
			}
			else{
				echo "no";
			}
			
		}
	}
?>