<?php
	Class Resetpassword extends CI_Controller
	{		
		public function __construct()
		{
			parent ::__construct();			 
			if(!isset($_SESSION['user_id_pwd']))
			{
				return redirect(base_url('Error404'));
			}
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
			$array	=	array('seo_page_name'	=>	'Home');
			$seo	=	$this->select->get_one_seo($array);
			$array	=	array(
								'cat'		=>	$this->cat,
								//'country'	=>	$this->country,
								'menu'		=>	$this->menu,
								'seo'		=>	$seo,
							);			
			$this->load->view('home/resetpassword',['array'	=>	$array]);
		}
		public function checkpassword(){
			$post	=	$this->input->post();
			 
			if($post['npassword']	!=	$post['npassword2'])
			{
				$this->session->set_flashdata('passmsg','<div class="alert alert-danger">New passwords do not match</div>');
				 
			}
			else 
			{
				$array	=	array(
									'user_pwd'			=>	$post['cpassword'],
									'user_pwd_request'	=>	1,
									'user_id'			=>	$_SESSION['user_id_pwd'],
									);
				if($this->select->checkuser($array))
				{
					$array	=	array(
										'user_pwd'			=>	$post['npassword'],
										'user_pwd_request'	=>	0,									
									);
					$this->load->model('update');
					if($this->update->update_table('users','user_id',$_SESSION['user_id_pwd'],$array))
					{
						unset($_SESSION['user_id_pwd']);
						//$this->session->set_flashdata('passmsg','<div class="alert alert-success"></div>');
						return redirect(base_url('home'));
					}
					else{
						$this->session->set_flashdata('passmsg','<div class="alert alert-danger">System failure. Please try later</div>');
					
					}
				}
				else{
					$this->session->set_flashdata('passmsg','<div class="alert alert-danger">Invalid current password.</div>');
					
				}
				
			}
			return redirect(base_url('Resetpassword'));
		}
	}
?>














