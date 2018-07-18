<?php
	Class Home extends CI_Controller
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
			
			//echo "<pre>";
			//print_r($this->menu);
			$this->load->view('home/index',['array'	=>	$array]);
		}
		public function applyfilter()
		{
			$post	=	$this->input->post();			 
			$price	=	$post['price'];
			if($post['cat']!='')
			{
				$cat	=	$post['cat'];
				$sql= "SELECT * FROM product inner join category on product.product_cat_id=category.cat_id WHERE product_cat_id IN ($cat) and product_price <='$price'";
			}
			else
			{
				$sql= "SELECT * FROM product inner join category on product.product_cat_id=category.cat_id WHERE product_price <='$price'";
			}
			$products	=	$this->select->get_filtered_product($sql);
			//echo $this->db->last_query();
			//exit();
			if(count($products))
			{
				$i=0;									
				foreach($products as $x)
				{
					if($i%3==0)
					{
						echo "<div class='row' style='width:100%;'>";
					}
					$i++;
					?>
						<div class="col-md-4" style="padding-left:40px;">
							<div class="price-box popular" style="min-height:460px;width:100%;">
								<h2 class="pricing-plan pricing-plan-offer">	<?= $x['product_name'];?></h2>
								<img style="width:100%;height:200px;" class="img-reponsive img-circle" src="<?= base_url('img/pro/'.$x['product_id'].'/a/'.$x['product_img1']);?>" alt="<?= $x['product_name'];?>">
								 
								<span style="font-size:22px;"><b> Rs.<?= $x['product_price'];?></b></span>
								 <br>
								 <br>
								 <div class="col-sm-12" style="padding:5px;">
									 <a href="<?= base_url('store/'.$x['cat_slug'].'/'.$x['product_slug']);?>" 
								 style="background:green;" class="btn btn-success btn-select-plan btn-sm  btn-block">Details</a>
								 
								  
									<button onClick="addcart('<?= $x['product_id'];?>')" class="btn btn-select-plan btn-sm btn-block">Add to Cart</button>
								 </div>
							</div>
						</div>
					<?php
					if($i%3==0)
					{
						echo "</div>";
					}
				}
			}
			
			
		}
		public function storesubscriber(){
			$post	=	$this->input->post();
			//echo "<pre>";
			//print_r($post);
			$array	=	array('s_email'	=>	$post['s_email']);
			$this->load->model('insert');
			if($this->select->checksubscriber($array))
			{
				$this->session->set_flashdata('babymsg','<div class="alert alert-success"><b>You are already subscribed with us.</b></div>');
			}
			else if($this->insert->insert_table($post,'subscriber'))
			{
				$this->session->set_flashdata('babymsg','<div class="alert alert-success"><b>You are now subscribed with us.</b></div>');
			}
			else
			{
				$this->session->set_flashdata('babymsg','<div class="alert alert-danger"><b>Oops!Something went wrong. Please try later.</b></div>');
			}
			return redirect(base_url('/track-your-baby-development'));
		}
		 
		
	}
?>