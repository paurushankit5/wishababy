<?php
	class Myprofile extends CI_CONTROLLER
	{
		public function __construct()
		{
			parent ::__construct();	
			if(!isset($_COOKIE['wish_user_id']))
			{
				return redirect(base_url('home'));
			}
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
			$array	=	array('user_id'	=>	$_COOKIE['wish_user_id']);
			$me	=	$this->select->get_one_user($array);
			$array	=	array(
								'me'		=>	$me,
								'country'	=>	$this->country,
								'cat'		=>	$this->cat,
								'menu'		=>	$this->menu,
								);
			$this->load->view('home/myprofile',['array'	=>	$array]);
		}	
		public function storepic()
		{
			//echo "<pre>";
			$post['user_image']	=	$_FILES['user_image']['name'];
			//print_r($post);
			$array	=	array('user_id'	=>	$_COOKIE['wish_user_id']);
			$me	=	$this->select->get_one_user($array);
			$user_id	=	$me['user_id'];
			if(!file_exists('./img/user/'.$user_id.'/'))
			{
				mkdir('./img/user/'.$user_id.'/');
			}
			if($me['user_image']!='')
			{
				unlink("./img/user/$user_id/".$me['user_image']);
			}				
			move_uploaded_file($_FILES['user_image']['tmp_name'],"./img/user/$user_id/".$post['user_image']);
			$this->load->model('update');
			if($this->update->update_table('users','user_id',$user_id,$post))
			{
				//echo "yes";
			}
			else
			{
				//echo "no";
			}
			return redirect(base_url('myprofile'));
		}
		public function delprofilepic()
		{
			//echo "<pre>";
			$post['user_image']	=	'';
			 
			$array	=	array('user_id'	=>	$_COOKIE['wish_user_id']);
			$me	=	$this->select->get_one_user($array);
			$user_id	=	$me['user_id'];		 
			if($me['user_image']!='')
			{
				unlink("./img/user/$user_id/".$me['user_image']);
			}				
			move_uploaded_file($_FILES['user_image']['tmp_name'],"./img/user/$user_id/".$post['user_image']);
			$this->load->model('update');
			if($this->update->update_table('users','user_id',$user_id,$post))
			{
				echo "yes";
			}
			else
			{
				echo "no";
			}
			 
		}
		public function edit()
		{
			$array	=	array('user_id'	=>	$_COOKIE['wish_user_id']);
			$me	=	$this->select->get_one_user($array);
			$height	=	$this->select->get_height();
			$states	=	$this->select->get_all_indian_state();
			$array	=	array(
								'me'		=>	$me,
								'country'	=>	$this->country,
								'cat'		=>	$this->cat,
								'menu'		=>	$this->menu,
								'height'	=>	$height,
								'states'	=>	$states,
								);
			$this->load->view('home/editprofile',['array'	=>	$array]);
		}
		public function updateprofile()
		{
			$post	=	$this->input->post();
			echo "<pre>";
			print_r($post);
			$this->load->model('update');
			if($this->update->update_table('users','user_id',$_COOKIE['wish_user_id'],$post))
			{
				//echo "yes";
			}
			else
			{
				//echo "no";
			}
			return redirect(base_url('myprofile'));
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
		
	}
?>