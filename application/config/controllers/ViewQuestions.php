<?php
	class ViewQuestions extends CI_Controller
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
					$this->menu[$i]['submenu']	=	$submenu;
					$i++;
				}
			}
		}
		public function index()
		{
			$this->load->library('pagination');
			$array		=	array('1'	=>	'1');
			$config		=	[
								'base_url'		=>		base_url('ViewQuestions/'),
								'per_page'		=>		'1',
								'total_rows'	=>		$this->select->count_some_questions($array),
								'full_tag_open'	=>		"<ul class='pagination pull-right'>",
								'full_tag_close'=>		"</ul>",
								'next_tag_open'=>		"<li>",
								'next_tag_close'=>		"</li>",
								'prev_tag_open'=>		"<li>",
								'prev_tag_close'=>		"</li>",
								'num_tag_open'=>		"<li>",
								'num_tag_close'=>		"</li>",
								'cur_tag_open'=>		"<li class='active'><a>",
								'cur_tag_close'=>		"</a></li>",								
							];
			$this->pagination->initialize($config);			
			$questions	=	$this->select->get_some_questions($config['per_page'],$this->uri->segment(3),$array);
			$array		=	array(	
									'user_type'		=>	2,
									'user_status'	=>	1
									);
			$clinic		=	$this->select->get_some_users(5,0,$array);
			$array		=	array(
								'questions'	=>	$questions,
								'clinic'	=>	$clinic,
								'count'		=>	$this->uri->segment(3),
								'cat'		=>	$this->cat,								 
								'menu'		=>	$this->menu,
								);
			//echo "<pre>";
			//print_r($array);
			$this->load->view('home/viewquestions',['array'	=>	$array]);
		}
	}
?>