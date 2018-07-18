<?php
	class Findaclinic extends CI_Controller
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
			$this->states	=	$this->select->get_all_indian_state();	
			$this->cat	=	$this->select->get_all_category();
		}
		public function index()
		{
			$array	=	array(
								'user_type'		=>	2,
								'user_status'	=>	1,
								);	
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('findaclinic/index/'),
								'per_page'		=>		'12',
								'total_rows'	=>		$this->select->count_some_users($array),
								'full_tag_open'	=>		"<ul class='pagination pull-right'>",
								'full_tag_close'=>		"</ul>",
								'next_tag_open'=>		"<li>",
								'next_tag_close'=>		"</li>",
								'prev_tag_open'=>		"<li>",
								'prev_tag_close'=>		"</li>",
								'num_tag_open'=>		"<li>",
								'num_tag_close'=>		"</li>",
								'first_tag_open'=>		"<li>",
								'first_tag_close'=>		"</li>",
								'last_tag_open'=>		"<li>",
								'last_tag_close'=>		"</li>",
								'cur_tag_open'=>		"<li class='active'><a>",
								'cur_tag_close'=>		"</a></li>",								
							];
			$this->pagination->initialize($config);			
			$clinic	=	$this->select->get_some_users($config['per_page'],$this->uri->segment(3),$array);
		//$clinic		=	$this->select->get_some_users(100000,0,$array);
			if(isset($_COOKIE['wish_user_id']))
			{
				$array	=	array('user_id'		=>		$_COOKIE['wish_user_id']);
				$user	=	$this->select->get_one_user($array);
				 
			}
			else
			{
				$user	=	array();
			}
			$service	=	$this->select->get_clinic_service();
			$array	=	array(
								'cat'		=>	$this->cat,
								'clinic'	=>	$clinic,
								'user'		=>	$user,
								'service'	=>	$service,
								'menu'		=>	$this->menu,
								'states'		=>	$this->states,
							);
			 
			$this->load->view('home/findaclinic',['array'	=>	$array]);
			 
		}
		public function index()
		{
			$array	=	array(
								'user_type'		=>	3,
								'user_status'	=>	1,
								);	
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('findaclinic/index/'),
								'per_page'		=>		'12',
								'total_rows'	=>		$this->select->count_some_users($array),
								'full_tag_open'	=>		"<ul class='pagination pull-right'>",
								'full_tag_close'=>		"</ul>",
								'next_tag_open'=>		"<li>",
								'next_tag_close'=>		"</li>",
								'prev_tag_open'=>		"<li>",
								'prev_tag_close'=>		"</li>",
								'num_tag_open'=>		"<li>",
								'num_tag_close'=>		"</li>",
								'first_tag_open'=>		"<li>",
								'first_tag_close'=>		"</li>",
								'last_tag_open'=>		"<li>",
								'last_tag_close'=>		"</li>",
								'cur_tag_open'=>		"<li class='active'><a>",
								'cur_tag_close'=>		"</a></li>",								
							];
			$this->pagination->initialize($config);			
			$clinic	=	$this->select->get_some_users($config['per_page'],$this->uri->segment(3),$array);
		//$clinic		=	$this->select->get_some_users(100000,0,$array);
			if(isset($_COOKIE['wish_user_id']))
			{
				$array	=	array('user_id'		=>		$_COOKIE['wish_user_id']);
				$user	=	$this->select->get_one_user($array);
				 
			}
			else
			{
				$user	=	array();
			}
			$service	=	$this->select->get_clinic_service();
			$array	=	array(
								'cat'		=>	$this->cat,
								'clinic'	=>	$clinic,
								'user'		=>	$user,
								'service'	=>	$service,
								'menu'		=>	$this->menu,
								'states'		=>	$this->states,
							);
			 
			$this->load->view('home/findaclinic',['array'	=>	$array]);
			 
		}
		public function showcities()
		{
			$post	=	$this->input->post();
			$cities	=	$this->select->get_some_cities($post);
			echo "<option value=''>Please select city</option>";
			if(count($cities))
			{
				foreach($cities as $x)
				{
					?>
						<option value="<?= $x['city_name'];?>"><?= $x['city_name'];?></option>
					<?php
				}
			}
		}
		public function storeappointments()
		{
			$post	=	$this->input->post();
			$post['ap_add_time']	=	date('Y-m-d H:i:s');
			$post['ap_edit_time']	=	date('Y-m-d H:i:s');
			$post['ap_parent_id']	=	$_COOKIE['wish_user_id'];
			$this->load->model('insert');
			if($ap_id	=	$this->insert->insert_table($post,'appointment'))
			{
				echo $ap_id;
			}
			else
			{
				echo 0;
			}
			 
		}
		public function storecallback()
		{
			$post	=	$this->input->post();
			$post['call_add_time']	=	date('Y-m-d H:i:s');
			$post['call_edit_time']	=	date('Y-m-d H:i:s');
			 
			$this->load->model('insert');
			if($call_id	=	$this->insert->insert_table($post,'callback'))
			{
				echo $call_id;
			}
			else
			{
				echo 0;
			}
			 
		}
		
	 	public function updateappointment()
		{
			$post	=	$this->input->post();
			 
			$this->load->model('update');
			if($ap_id	=	$this->update->update_table('appointment','ap_id',$post['ap_id'],$post))
			{
				echo $ap_id;
			}
			else
			{
				echo 0;
			}
			 
		}
	 
		
	}
?>