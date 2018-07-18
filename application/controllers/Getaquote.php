<?php
	class Getaquote extends MY_Controller
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
			$array	=	array('seo_page_name'	=>	'Askaquestion');
			$seo	=	$this->select->get_one_seo($array);
			$array	=	array(
								'cat'		=>	$this->cat,
								'user'		=>	$user,
								'seo'		=>	$seo,
								'menu'		=>	$this->menu,
								 
							);
			
			
			//echo "<pre>";
			//print_r($this->menu);
			$this->load->view('home/getaquote',['array'	=>	$array]);
			 
		}
		public function storequote()
		{
			$post	=	$this->input->post();
			$post['quote_add_time']	=	date('Y-m-d H:i:s');
			$post['quote_edit_time']=	date('Y-m-d H:i:s');
			//print_r($post);
			$this->load->model('insert');
			if($this->insert->insert_table($post,'quote'))
			{
				//$this->session->set_flashdata('quotemsg',"<div class='alert alert-success'>We have received your quotation requests. We will get back to you soon.</div>");
				$bg=base_url('img/logo.png');
				$data	=	'<html>
							<div style="width:90%; border:px solid #3f5267;">
								<div style="width:100%;padding:20px;">
									<center>
										<img src="'.$bg.'" style=""/>
									</center>
								</div>
								<div style="width:100%;background:#3f5267;color:white;padding:5px;">
									<h2 style="text-align:center">Thanks for requesting a quote on WishABaby</h2>
								</div>
								<div style="width:100%;padding:10px;">
									<h3><b>Dear '.$post['quote_name'].',</b></h3>

									<p>We have received your quotation. We will get back to you soon. We have send your quotation to the concerned authority.</p>

									<p>Thanks for the quotation requests.</p>

									<hr>
									<p>Regards : WAB Team<br>
									Email : &nbsp;&nbsp;&nbsp;&nbsp;info@wishababy.com</p>
									<hr>
								</div>
							</div>
						</html>';
				$this->sendmail($post['quote_email'],'Thanks for requesting a quote on WishABaby',$data,'Thanks for requesting a quote on WishABaby');
				$this->session->set_flashdata('askmsg','<h4 class="text text-danger text-center">We have received your quotation requests. We will get back to you soon.</h4>');
				return redirect(base_url('success'));
			}
			else
			{
				$this->session->set_flashdata('quotemsg',"<div class='alert alert-danger'>We are facing some technical issues. Please try later</div>");
			}
			return redirect(base_url('getaquote'));
		}
	 
		 
	}

?>