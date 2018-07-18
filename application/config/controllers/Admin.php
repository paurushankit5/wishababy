<?php
	class Admin extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			if(!$this->session->userdata('admin_id'))
			{
				return redirect (base_url('adminlogin'));
			}
			$this->load->model('select');
			$this->load->model('update');
			$this->load->model('insert');
			date_default_timezone_set('Asia/kolkata');
			 
		}
		public function index()
		{
			$this->load->view('admin/index');
		}
		public function signout()
		{
			unset($_SESSION['admin_id']);
			return redirect(base_url('adminlogin'));
		}
		public function addcategory()
		{
			$this->load->view('admin/addcategory');
		}
		public function storecategory()
		{
			$post	=	$this->input->post();
			$post['cat_image']		=	$_FILES['cat_image']['name'];
			$post['cat_add_time']	=	date('Y-m-d H:i:s');
			$array	=	array(
								'cat_name'	=>	$post['cat_name']
								);
			if(!$this->select->checkcategory($array))
			{
				$name						=	strtolower($array['cat_name']);			 
				$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['cat_name'])," "));
				$baseslug					=	$data;	
				$check						=	array('cat_slug'		=>		$data);
				$j=1;
				while($this->select->checkcategory($check))
				{				
					$data	=	$baseslug.'-'.$j;				
					$check	=	array('cat_slug'		=>		$data);
					$j++;
				}
				$post['cat_slug']		=	$data;
				/*echo "<pre>";
				print_r($post);
				echo "</pre>";*/
				if($cat_id	=	$this->insert->insert_table($post,'category'))
				{
					mkdir('./img/cat/'.$cat_id.'/');
					if (move_uploaded_file($_FILES['cat_image']['tmp_name'],"./img/cat/$cat_id/".$post['cat_image']))
					{
						$this->session->set_flashdata('addcatmsg','<div class="alert alert-success">Category Added Successfully</div>');				 
					}
					else
					{
						$this->session->set_flashdata('addcatmsg','<div class="alert alert-danger">Image Upload error</div>');	
					}				
				}
				else
				{
					$this->session->set_flashdata('addcatmsg','<div class="alert alert-danger">System error</div>');	
				}
				return redirect('admin/addcategory');
			}
			else
			{
				$this->session->set_flashdata('addcatmsg','<div class="alert alert-danger">This category already exists.</div>');
				return redirect(base_url('admin/addcategory'));
			}
		
		}
		public function category()
		{
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('admin/category'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_all_category(),
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
			$cat	=	$this->select->get_some_category($config['per_page'],$this->uri->segment(3));
			$array	=	array(
								'cat'	=>	$cat,
								'count'	=>	$this->uri->segment(3)
								);
			//echo "<pre>";
			//print_r($array);
			$this->load->view('admin/category',['array'	=>	$array]);
		}	
		public function viewcategory()
		{
			$array	=	array('cat_id'	=>	$this->uri->segment(3));
			if(count($cat	=	$this->select->get_one_category($array)))
			{
				$array	=	array(
									'cat'	=>	$cat
									);
				//echo "<pre>";
				//print_r($cat);
				$this->load->view('admin/viewcategory',['array'	=>	$array]);
			}
			else
			{
				$this->session->set_flashdata('catmsg','<div class="alert alert-danger"> Invalid Url.</div>');
				return redirect(base_url('admin/category'));
			}
		}
		public function editcategory()
		{
			$array	=	array('cat_id'	=>	$this->uri->segment(3));
			if(count($cat	=	$this->select->get_one_category($array)))
			{
				$array	=	array(
									'cat'	=>	$cat
									);
				$this->load->view('admin/editcategory',['array'	=>	$array]);
			}
			else
			{
				$this->session->set_flashdata('catmsg','<div class="alert alert-danger"> Invalid Url.</div>');
				return redirect(base_url('admin/category'));
			}
		}
		public function updatecategory()
		{
			$post	=	$this->input->post();
			$name						=	strtolower($post['cat_name']);	
			$preimage					=	$post['cat_preimage'];
			unset($post['cat_preimage']);
			$cat_id						=	$post['cat_id'];
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($post['cat_name'])," "));
			$baseslug					=	$data;	
			$check						=	array(
												'cat_slug'		=>		$data,
												'cat_id!='		=>		$post['cat_id'],
												);
			$j=1;
			while($this->select->checkcategory($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array('cat_slug'		=>		$data);
				$j++;
			}
			$post['cat_slug']		=	$data;
			if($_FILES['cat_image']['name']!='')
			{
				$post['cat_image']		=	$_FILES['cat_image']['name'];
			}
			if($this->update->update_table('category','cat_id',$post['cat_id'],$post))
			{
				$this->session->set_flashdata('catmsg','<div class="alert alert-success">Category Updated Successfully</div>');
					
				if(!file_exists('./img/cat/'.$cat_id.'/'))
				{
					mkdir('./img/cat/'.$cat_id.'/');
				}
				
				if($_FILES['cat_image']['name']!='')
				{
					if(!file_exists('./img/cat/'.$cat_id.'/'))
					{
						mkdir('./img/cat/'.$cat_id.'/'); 
					}
					unlink("./img/cat/$cat_id/".$preimage);
					if (move_uploaded_file($_FILES['cat_image']['tmp_name'],"./img/cat/$cat_id/".$post['cat_image']))
					{
						$this->session->set_flashdata('catmsg','<div class="alert alert-success">Category Updated Successfully</div>');				 
					}
					else
					{
						$this->session->set_flashdata('catmsg','<div class="alert alert-danger">Image Upload error</div>');
					} 
				}
				return redirect(base_url('admin/viewcategory/'.$cat_id));
			}
			//echo "<pre>";
			//print_r($post);
		}
		public function addproduct()
		{
			$cat	=	$this->select->get_some_category(999,0);
			$array	=	array(
								'cat'	=>	$cat,								 
								);
			$this->load->view('admin/addproduct',['array'	=>	$array]);
		}
		public function storeproduct()
		{
			$post	=	$this->input->post();
			if($_FILES['product_img1']['name']!='')
			{
				$post['product_img1']		=	$_FILES['product_img1']['name'];
			}
			if($_FILES['product_img2']['name']!='')
			{
				$post['product_img2']		=	$_FILES['product_img2']['name'];
			}
			if($_FILES['product_img3']['name']!='')
			{
				$post['product_img3']		=	$_FILES['product_img3']['name'];
			}
			if($_FILES['product_img4']['name']!='')
			{
				$post['product_img4']		=	$_FILES['product_img4']['name'];
			}
			if($_FILES['product_img5']['name']!='')
			{
				$post['product_img5']		=	$_FILES['product_img5']['name'];
			}
			if($_FILES['product_img6']['name']!='')
			{
				$post['product_img6']		=	$_FILES['product_img6']['name'];
			}
			$post['product_add_time']	=	date('Y-m-d H:i:s');
			$name						=	strtolower($post['product_name']);			 
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($post['product_name'])," "));
			$baseslug					=	$data;	
			$check						=	array('product_slug'		=>		$data);
			$j=1;
			while($this->select->checkproduct($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array('product_slug'		=>		$data);
				$j++;
			}
			$post['product_slug']		=	$data;
			unset($post['_wysihtml5_mode']);
			echo "<pre>";
			print_r($post);
			if($product_id	=	$this->insert->insert_table($post,'product'))
			{
				mkdir('./img/pro/'.$product_id.'/');
				if($_FILES['product_img1']['name']!='')
				{
					mkdir('./img/pro/'.$product_id.'/a/'); 
					move_uploaded_file($_FILES['product_img1']['tmp_name'],"./img/pro/".$product_id."/a/".$post['product_img1']);				 
				}
				if($_FILES['product_img2']['name']!='')
				{
					mkdir('./img/pro/'.$product_id.'/b/'); 
					move_uploaded_file($_FILES['product_img2']['tmp_name'],"./img/pro/".$product_id."/b/".$post['product_img2']);				 
				}
				if($_FILES['product_img3']['name']!='')
				{
					mkdir('./img/pro/'.$product_id.'/c/'); 
					move_uploaded_file($_FILES['product_img3']['tmp_name'],"./img/pro/".$product_id."/c/".$post['product_img3']);				 
				}
				if($_FILES['product_img4']['name']!='')
				{
					mkdir('./img/pro/'.$product_id.'/d/'); 
					move_uploaded_file($_FILES['product_img4']['tmp_name'],"./img/pro/".$product_id."/d/".$post['product_img4']);				 
				}
				if($_FILES['product_img5']['name']!='')
				{
					mkdir('./img/pro/'.$product_id.'/e/'); 
					move_uploaded_file($_FILES['product_img5']['tmp_name'],"./img/pro/".$product_id."/e/".$post['product_img5']);				 
				}
				if($_FILES['product_img6']['name']!='')
				{
					mkdir('./img/pro/'.$product_id.'/f/'); 
					move_uploaded_file($_FILES['product_img6']['tmp_name'],"./img/pro/".$product_id."/f/".$post['product_img6']);				 
				}
				$this->session->set_flashdata('addpromsg','<div class="alert alert-success">Congratulations!.. Product added successfully.</div>');	
			}
			else
			{
				$this->session->set_flashdata('addpromsg','<div class="alert alert-danger">System error</div>');	
			}
			return redirect('admin/addproduct');
		}
		public function productlist()
		{
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('admin/productlist'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_all_product(),
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
			$product	=	$this->select->get_some_product($config['per_page'],$this->uri->segment(3));
			$array	=	array(
								'product'	=>	$product,
								'count'		=>	$this->uri->segment(3)
								);
			//echo "<pre>";
			//print_r($array);
			$this->load->view('admin/productlist',['array'	=>	$array]);
		}
		public function allusers()
		{
			$array	=	array(	'1'	=>	1);
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('admin/allusers'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_some_users($array),
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
			$users	=	$this->select->get_some_users($config['per_page'],$this->uri->segment(3),$array);
			$array	=	array(
								'users'	=>	$users,
								'count'		=>	$this->uri->segment(3)
								);
			//echo "<pre>";
			//print_r($array);
			$this->load->view('admin/allusers',['array'	=>	$array]);
		}
		public function spermdonors()
		{
			$array	=	array(	'user_type'	=>	'Sperm Donor');
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('admin/spermdonors'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_some_users($array),
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
			$users	=	$this->select->get_some_users($config['per_page'],$this->uri->segment(3),$array);
			$array	=	array(
								'users'	=>	$users,
								'count'		=>	$this->uri->segment(3)
								);
			//echo "<pre>";
			//print_r($array);
			$this->load->view('admin/spermdonors',['array'	=>	$array]);
		}
		public function spermrecipients()
		{
			$array	=	array(	'user_type'	=>	'Recipient (Sperm)');
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('admin/spermrecipients'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_some_users($array),
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
			$users	=	$this->select->get_some_users($config['per_page'],$this->uri->segment(3),$array);
			$array	=	array(
								'users'	=>	$users,
								'count'		=>	$this->uri->segment(3)
								);
			//echo "<pre>";
			//print_r($array);
			$this->load->view('admin/spermrecipients',['array'	=>	$array]);
		}
		public function addseo()
		{
			$this->load->view('admin/addseo');
		}
		public function storeseo()
		{
			$post	=	$this->input->post();
			echo "<pre>";
			print_r($post);
			$array	=	array('seo_page_name'	=>	$post['seo_page_name']);
			if($this->select->checkseo($array))
			{
				$this->session->set_flashdata('addseomsg','<div class="alert alert-warning">Oopsss!..this page is already added.</div>');
			}
			else
			{
				if($this->insert->insert_table($post,'seo'))
				{
					$this->session->set_flashdata('addseomsg','<div class="alert alert-success">Congratulations!..Page added successfully.</div>');
				}
				else
				{
					$this->session->set_flashdata('addseomsg','<div class="alert alert-danger">Oopsss!.. System failure.</div>');
				}
			}
			return redirect(base_url('admin/addseo'));
		}
		public function viewseo()
		{
			$array	=	array(	'1'	=>	1);
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('admin/allusers'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_some_seo($array),
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
			$seo	=	$this->select->get_some_seo($config['per_page'],$this->uri->segment(3),$array);
			$array	=	array(
								'seo'		=>	$seo,
								'count'		=>	$this->uri->segment(3)
								);
			//echo "<pre>";
			//print_r($array);
			$this->load->view('admin/viewseo',['array'	=>	$array]);
		}
		public function delseo()
		{
			$post	=	$this->input->post();
			$this->load->model('delete');
			if($this->delete->delete_table($post,'seo'))
			{
				$this->session->set_flashdata('seomsg','<div class="alert alert-success">Congratulations!.. Seo deleted succefully.</div>');
			}
			else
			{
				$this->session->set_flashdata('seomsg','<div class="alert alert-danger">Sytem Failure.</div>');
			}
			echo "1";
		}
		public function editseo()
		{
			$seo_id		=	$this->uri->segment(3);
			$array		=	array(
									'seo_id'	=>	$seo_id,
									);
			$seo	=	$this->select->get_one_seo($array);
			$array	=	array(
								'seo'	=>	$seo
								);
			$this->load->view('admin/editseo',['array'	=>	$array]);
		}
		public function updateseo()
		{
			$post	=	$this->input->post();
			if($this->update->update_table('seo','seo_id',$post['seo_id'],$post))
			{
				$this->session->set_flashdata('editseomsg','<div class="alert alert-success">Congratulations!.. Seo updated succefully.</div>');
			}
			else
			{
				$this->session->set_flashdata('editseomsg','<div class="alert alert-danger">Sytem Failure.</div>');
			}
			return redirect (base_url('admin/editseo/'.$post['seo_id']));
		}
		public function addmenu()
		{
			$this->load->view('admin/addmenu');
		}
		public function storemenu()
		{
			$post	=	$this->input->post();
			$array	=	array(
								'menu_name'	=>	$post['menu_name']
								);			 
			$name						=	strtolower($array['menu_name']);			 
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['menu_name'])," "));
			$baseslug					=	$data;	
			$check						=	array('menu_slug'		=>		$data);
			$j=1;
			while($this->select->checkmenu($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array('menu_slug'		=>		$data);
				$j++;
			}
			$post['menu_slug']		=	$data;
			//echo "<pre>";
			//print_r($post);
			if($this->insert->insert_table($post,'menu'))
			{
				$this->session->set_flashdata('addmenumsg','<div class="alert alert-success">Congratulations!.. Menu added succefully.</div>');
			}
			else
			{
				$this->session->set_flashdata('addmenumsg','<div class="alert alert-danger">Sytem Failure.</div>');
			}
			return redirect(base_url('admin/addmenu'));
		}
		public function viewmenu()
		{
			$menu	=	$this->select->get_all_menu();
			$array	=	array(
								'menu'	=>	$menu,
							);
			$this->load->view('admin/viewmenu',['array'	=>	$array]);
		}
		public function editmenu()
		{
			$menu_id	=	$this->uri->segment(3);
			$array		=	array(
									'menu_id'	=>	$menu_id
								);
			$menu		=	$this->select->get_one_menu($array);
			$array		=	array(
									'menu'	=>	$menu
									);
			$this->load->view('admin/editmenu',['array'	=>	$array]);
		}
		public function updatemenu()
		{
			$post	=	$this->input->post();
			$array	=	array(
								'menu_name'	=>	$post['menu_name'],
								'menu_id!='	=>	$post['menu_id'],
								);			 
			$name						=	strtolower($array['menu_name']);			 
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['menu_name'])," "));
			$baseslug					=	$data;	
			$check						=	array('menu_slug'		=>		$data);
			$j=1;
			while($this->select->checkmenu($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array('menu_slug'		=>		$data,
									'menu_id!='		=>		$post['menu_id'],
									);
				$j++;
			}
			$post['menu_slug']		=	$data;
			if($this->update->update_table('menu','menu_id',$post['menu_id'],$post))
			{
				$this->session->set_flashdata('editmenumsg','<div class="alert alert-success">Congratulations!.. Menu updated succefully.</div>');
			}
			else
			{
				$this->session->set_flashdata('editmenumsg','<div class="alert alert-danger">Sytem Failure.</div>');
			}
			return redirect (base_url('admin/editmenu/'.$post['menu_id']));
		}
		public function addsubmenu()
		{
			$menu	=	$this->select->get_all_menu();
			$array	=	array(
								'menu'	=>	$menu,
							);
			$this->load->view('admin/addsubmenu',['array'	=>	$array]);
		}
		public function storesubmenu()
		{
			$post	=	$this->input->post();
			$array	=	array(
								'submenu_name'	=>	$post['submenu_name']
								);			 
			$name						=	strtolower($array['submenu_name']);			 
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['submenu_name'])," "));
			$baseslug					=	$data;	
			$check						=	array('submenu_slug'		=>		$data);
			$j=1;
			while($this->select->checksubmenu($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array('submenu_slug'		=>		$data);
				$j++;
			}
			$post['submenu_slug']		=	$data;
			//echo "<pre>";
			//print_r($post);
			if($this->insert->insert_table($post,'submenu'))
			{
				$this->session->set_flashdata('addsubmenumsg','<div class="alert alert-success">Congratulations!.. submenu added succefully.</div>');
			}
			else
			{
				$this->session->set_flashdata('addsubmenumsg','<div class="alert alert-danger">Sytem Failure.</div>');
			}
			return redirect(base_url('admin/addsubmenu'));
		}
		public function viewsubmenu()
		{
			$submenu	=	$this->select->get_all_submenu();
			$array	=	array(
								'submenu'	=>	$submenu,
							);
			//echo "<pre>";
			//print_r($array);
			$this->load->view('admin/viewsubmenu',['array'	=>	$array]);
		}
		public function delsubmenu()
		{
			$post	=	$this->input->post();
			$array	=	array('nest_submenu_id'	=>	$post['submenu_id']);
			if($this->select->checknestedsubmenu($array))
			{
				$this->session->set_flashdata('submenumsg','<div class="alert alert-danger">You have nested submenu associalted with this submenu. Please delete nested submenu first</div>');
			}
			else
			{
				$this->load->model('delete');
				if($this->delete->delete_table($post,'submenu'))
				{
					$this->session->set_flashdata('submenumsg','<div class="alert alert-success">Congratulations!.. Submenu deleted succefully.</div>');
				}
				else
				{
					$this->session->set_flashdata('submenumsg','<div class="alert alert-danger">Sytem Failure.</div>');
				}
			}
			//print_r($post);
			echo "1";
		}
		public function editsubmenu()
		{
			$submenu_id	=	$this->uri->segment(3);
			$array		=	array(
									'submenu_id'	=>	$submenu_id
									);
			$submenu	=	$this->select->get_one_submenu($array);
			$menu	=	$this->select->get_all_menu();
			$array	=	array(
								'menu'		=>	$menu,
								'submenu'	=>	$submenu,
							);
			$this->load->view('admin/editsubmenu',['array'	=>	$array]);
		}
		public function updatesubmenu()
		{
			$post	=	$this->input->post();
			$array	=	array(
								'submenu_name'	=>	$post['submenu_name']
								);			 
			$name						=	strtolower($array['submenu_name']);			 
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['submenu_name'])," "));
			$baseslug					=	$data;	
			$check						=	array(
												'submenu_slug'		=>		$data,
												'submenu_id!='		=>		$post['submenu_id'],
												);
			$j=1;
			while($this->select->checksubmenu($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array('submenu_slug'		=>		$data);
				$j++;
			}
			$post['submenu_slug']		=	$data;
			if($this->update->update_table('submenu','submenu_id',$post['submenu_id'],$post))
			{
				$this->session->set_flashdata('editsubmenumsg','<div class="alert alert-success">Congratulations!.. Submenu updated succefully.</div>');
			}
			else
			{
				$this->session->set_flashdata('editsubmenumsg','<div class="alert alert-danger">Sytem Failure.</div>');
			}
			return redirect (base_url('admin/editsubmenu/'.$post['submenu_id']));
		}
		public function managemenuorder()
		{
			$menu	=	$this->select->get_all_menu();
			$array	=	array(
								'menu'	=>	$menu,
							);
			$this->load->view('admin/managemenuorder',['array'	=>	$array]);
		}
		public function manageprimarymenuorder()
		{
			$menu	=	$this->select->get_all_menu();
			$array	=	array(
								'menu'	=>	$menu,
							);
			$this->load->view('admin/manageprimarymenuorder',['array'	=>	$array]);
		}
		
		public function savemenuorder()
		{
			$post	=	$this->input->post();
			
			$row_order	=	explode(",",$post['row_order']);
			
			$i=0;
			foreach($row_order as $x)
			{
				$array		=	array(
									'menu_order'	=>	++$i,									 
									'menu_id'		=>	$x,									 
								);
				if($this->update->update_table('menu','menu_id',$x,$array))
				{
					//echo "yes";
				}			
				 
			}
			//echo "<pre>";
			//print_r($post);
			//print_r($row_order);
			//print_r($array);
			$this->session->set_flashdata('menumsg','<div class="alert alert-success">Congratulations!.. Menu sorted succefully.</div>');
			return redirect(base_url('admin/managemenuorder'));
			 
		}
		public function saveprimarymenuorder()
		{
			$post	=	$this->input->post();
			
			$row_order	=	explode(",",$post['row_order']);
			
			$i=0;
			foreach($row_order as $x)
			{
				$array		=	array(
									'menu_order'	=>	++$i,									 
									'menu_id'		=>	$x,									 
								);
				if($this->update->update_table('menu','menu_id',$x,$array))
				{
					//echo "yes";
				}			
				 
			}
			//echo "<pre>";
			//print_r($post);
			//print_r($row_order);
			//print_r($array);
			$this->session->set_flashdata('menumsg','<div class="alert alert-success">Congratulations!.. Menu sorted succefully.</div>');
			return redirect(base_url('admin/manageprimarymenuorder'));
			 
		}
		public function managesubmenuorder()
		{
			$menu	=	$this->select->get_all_menu();
			$array	=	array(
								'menu'	=>	$menu,
							);
			$this->load->view('admin/managesubmenuorder',['array'	=>	$array]);
		}
		public function showsomeorderedsubmenu()
		{
			$post	=	$this->input->post();
			//print_r($post);
			$submenu	=	$this->select->get_some_submenu($post);
			if(count($submenu))
			{
				?>
				  <script>
				  $(function() {
					$( "#sortable-row" ).sortable({
					placeholder: "ui-state-highlight"
					});
				  });
				  
				  function saveOrder() {
					var selectedLanguage = new Array();
					$('ul#sortable-row li').each(function() {
					selectedLanguage.push($(this).attr("id"));
					});
					document.getElementById("row_order").value = selectedLanguage;
				  }
				  </script>
				<ul id="sortable-row">
				<?php
				foreach($submenu as $x)
				{
					?>
					<li id=<?php echo $x["submenu_id"]; ?>><?php echo $x["submenu_name"]; ?></li>
					<?php
				}
				?>
				</ul>
				<input type="submit" class="btnSave" name="submit" value="Save Order" onClick="saveOrder();" />
				<?php
			}
			else
			{
				echo "<div class='alert alert-warning'>No submenu found.</div>";
			}
		}
		public function savesubmenuorder()
		{
			$post	=	$this->input->post();
			
			$row_order	=	explode(",",$post['row_order']);
			
			$i=0;
			foreach($row_order as $x)
			{
				$array		=	array(
									'submenu_order'	=>	++$i,									 
									//'submenu_id'		=>	$x,									 
								);
				if($this->update->update_table('submenu','submenu_id',$x,$array))
				{
					//echo "yes";
				}		
				 
			}
			//echo "<pre>";
			//print_r($post);
			//print_r($row_order);
			//print_r($array);
			$this->session->set_flashdata('submenumsg','<div class="alert alert-success">Congratulations!.. Submenu sorted succefully.</div>');
			return redirect(base_url('admin/managesubmenuorder'));
		}
		public function addclinic()
		{
			$states	=	$this->select->get_all_indian_state();
			$array	=	array('states'	=>	$states);
			$this->load->view('admin/addclinic',['array'	=>	$array]);
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
		public function storeclinic()
		{
			$post	=	$this->input->post();
			unset($post['_wysihtml5_mode']);
			
			$array	=	array('clinic_email'	=>	$post['clinic_email']);
			if($post['clinic_password']!=$post['clinic_password2'])
			{
				$this->session->set_flashdata('addclinicmsg','<div class="alert alert-danger">Passwords do not match.</div>');
				 
			}
			else if($this->select->checkclinic($array))
			{
				$this->session->set_flashdata('addclinicmsg','<div class="alert alert-danger">This email is already taken.</div>');
				
			}
			else
			{
				unset($post['clinic_password2']);
				$post['clinic_logo']		=	$_FILES['clinic_logo']['name'];
				$post['clinic_add_time']	=	date('y-m-d');
				if($clinic_id	=	$this->insert->insert_table($post,'clinic'))
				{
					$this->session->set_flashdata('addclinicmsg','<div class="alert alert-success">Clinic added successfully.</div>');
				
					if($post['clinic_logo']!='')
					{
						if(!file_exists('./img/clinic/'.$clinic_id).'/')
						{
							mkdir('./img/clinic/'.$clinic_id.'/');
						}
						if(move_uploaded_file($_FILES['clinic_logo']['tmp_name'],"./img/clinic/".$clinic_id."/".$post['clinic_logo']))
						{
							$this->session->set_flashdata('addclinicmsg','<div class="alert alert-success">Clinic added successfully.</div>');				
						}
						else
						{
							$this->session->set_flashdata('addclinicmsg','<div class="alert alert-success">Clinic added successfully. Image upload error.</div>');
						}						
					}
				}
				else
				{
					$this->session->set_flashdata('addclinicmsg','<div class="alert alert-danger">System Failure.</div>');				
				}
				return redirect(base_url('admin/addclinic'));
				//echo "<pre>";
				//print_r($post);
			}
		}
		public function clinic()
		{
			$array	=	array('user_type'	=>	2);
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('admin/clinic'),
								'per_page'		=>		'10',
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
			$array	=	array(
								'clinic'	=>	$clinic,
								'count'	=>	$this->uri->segment(3)
								);
			//echo "<pre>";
			//print_r($array);
			$this->load->view('admin/clinic',['array'	=>	$array]);
		}
		public function addnestedsubmenu()
		{
			$menu	=	$this->select->get_all_menu();
			$array	=	array(
								'menu'	=>	$menu,
							);
			$this->load->view('admin/addnestedsubmenu',['array'	=>	$array]);
		}
		public function showsubmenu()
		{
			$post	=	$this->input->post();
			$submenu	=	$this->select->get_some_submenu($post);
			if(count($submenu))				
			{
				echo "<option value=''>Select Submenu</option>";
				foreach($submenu as $x)
				{
					?>
					<option value="<?= $x['submenu_id'];?>"><?= $x['submenu_name'];?></option>
					<?php
				}
			}
		}
		public function storenestedsubmenu()
		{
			$post	=	$this->input->post();
			$array	=	array(
								'nest_name'	=>	$post['nest_name']
								);			 
			$name						=	strtolower($array['nest_name']);			 
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['nest_name'])," "));
			$baseslug					=	$data;	
			$check						=	array('nest_slug'		=>		$data);
			$j=1;
			while($this->select->checknestedsubmenu($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array('nest_slug'		=>		$data);
				$j++;
			}
			$post['nest_slug']		=	$data;
			if($this->insert->insert_table($post,'nestedmenu'))
			{
				$this->session->set_flashdata('addsubmenumsg','<div class="alert alert-success">Congratulations!.. Nested Menu added succefully.</div>');
			}
			else
			{
				$this->session->set_flashdata('addsubmenumsg','<div class="alert alert-danger">Sytem Failure.</div>');
			}
			return redirect(base_url('admin/addnestedsubmenu'));
		}
		public function viewnestedsubmenu()
		{
			$array			=	array('1'	=>	'1');
			$nestedmenu		=	$this->select->getnestedmenu($array);
			$array			=	array(
										'nestedmenu'	=>		$nestedmenu,
									);
							
			$this->load->view('admin/viewnestedsubmenu',['array'	=>	$array]);
		}
		public function editnestedmenu()
		{
			$array	=	array('nest_id'		=>	$this->uri->segment(3));
			$nest	=	$this->select->get_one_nestedmenu($array);
			$menu	=	$this->select->get_all_menu();
			 
			$array	=	array(
								'nest'	=>	$nest,
								'menu'	=>	$menu,
							);
			$this->load->view('admin/editnestedmenu',['array'	=>	$array]);
		}
		public function updatenestedsubmenu()
		{
			 
			$post	=	$this->input->post();
			$array	=	array(
								'nest_name'	=>	$post['nest_name'],
																
								);			 
			$name						=	strtolower($array['nest_name']);			 
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['nest_name'])," "));
			$baseslug					=	$data;	
			$check						=	array(
													'nest_slug'		=>		$data,
													'nest_id!='		=>		$post['nest_id'],
												);
			$j=1;
			while($this->select->checknestedsubmenu($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array('nest_slug'		=>		$data);
				$j++;
				echo $this->db->last_query();
			}
			$post['nest_slug']		=	$data;
			if($this->update->update_table('nestedmenu','nest_id',$post['nest_id'],$post))
			{
				$this->session->set_flashdata('editsubmenumsg','<div class="alert alert-success">Nested submenu updated successfully.</div>');				
			}
			else
			{
				$this->session->set_flashdata('editsubmenumsg','<div class="alert alert-danger">System Failure.</div>');
			}
			return redirect(base_url('admin/editnestedmenu/'.$post['nest_id']));
		}
		public function deletenestedmenu()
		{
			$post	=	$this->input->post();
			$this->load->model('delete');
			if($this->delete->delete_table($post,'nestedmenu'))
			{
				$this->session->set_flashdata('submenumsg','<div class="alert alert-success">Congratulations!.. Nested Menu deleted succefully.</div>');
			}
			else
			{
				$this->session->set_flashdata('submenumsg','<div class="alert alert-danger">System Failure.</div>');
			}
			echo "1";
		}
		public function blogs()
		{
			$array		=	array('1'	=>	'1');
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('admin/blogs'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_all_blog($array),
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
			$blogs	=	$this->select->get_some_blog($config['per_page'],$this->uri->segment(3),$array);
			$array	=	array('blogs'	=>	$blogs);
			$this->load->view('admin/blogs',['array'	=>	$array]);
		}
		public function addblog()
		{
			
			$this->load->view('admin/addblog');
		}
		public function storeblog()
		{
			$post			=	$this->input->post();
			//$name			=	strtolower($post['blog_name']);			 
			$data			=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($post['blog_name'])," "));
			$baseslug		=	$data;	
			$check			=	array('blog_slug'		=>		$data);
			$j=1;
			while($this->select->checkblog($check))
			{				
				$data		=	$baseslug.'-'.$j;				
				$check		=	array('blog_slug'		=>		$data);
				$j++;
			}
			$post['blog_slug']		=	$data;
			$post['blog_image']		=	$_FILES['blog_image']['name'];
			$post['blog_add_time']	=	date('Y-m-d H:i:s');
			echo "<pre>";
			print_r($post);
			if($blog_id	=	$this->insert->insert_table($post,'blog'))
			{
				$this->session->set_flashdata('addblogmsg','<div class="alert alert-success">Blog Added Successfully</div>');
				if(!file_exists('./img/blogs/'.$blog_id.'/'))
				{
					mkdir('./img/blogs/'.$blog_id.'/');
				}	
				if($post['blog_image']!='')
				{
					if (move_uploaded_file($_FILES['blog_image']['tmp_name'],"./img/blogs/$blog_id/".$post['blog_image']))
					{
						$this->session->set_flashdata('addblogmsg','<div class="alert alert-success">Blog Added Successfully</div>');				 
					}
					else
					{
						$this->session->set_flashdata('addblogmsg','<div class="alert alert-danger">Image Upload error</div>');	
					}
				}
								
			}
			else
			{
				$this->session->set_flashdata('addblogmsg','<div class="alert alert-danger">System error</div>');	
			}
			return redirect('admin/addblog');
		}
		public function editblog()
		{
			$array	=	array('blog_id'		=>	$this->uri->segment(3));
			$blog_id	=	$this->uri->segment(3);
			$blog	=	$this->select->get_one_blog($array);
			$array	=	array('blog'	=>	$blog);
			$this->load->view('admin/editblog',['array'	=>	$array]);
		}
		public function updateblog()
		{
			$post			=	$this->input->post();
			$blog_id		=	$post['blog_id'];		 
			$data			=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($post['blog_name'])," "));
			$baseslug		=	$data;	
			$check			=	array(
										'blog_slug'		=>		$data,
										'blog_id!='		=>		$post['blog_id']
										);
			$j=1;
			while($this->select->checkblog($check))
			{				
				$data		=	$baseslug.'-'.$j;				
				$check		=	array('blog_slug'		=>		$data);
				$j++;
			}
			$post['blog_slug']		=	$data;
			if($_FILES['blog_image']['name']!='')
			{
				$post['blog_image']		=	$_FILES['blog_image']['name'];
			}
			$preimage	=	$post['preimage'];
			unset($post['preimage']);
			 
			echo "<pre>";
			print_r($post);
			if($this->update->update_table('blog','blog_id',$post['blog_id'],$post))
			{
				
				if($_FILES['blog_image']['name']!='')
				{
					@unlink("./img/blogs/$blog_id/".$preimage);
					if(!file_exists('./img/blogs/'.$blog_id.'/'))
					{
						mkdir('./img/blogs/'.$blog_id.'/');
					}					 
					if (move_uploaded_file($_FILES['blog_image']['tmp_name'],"./img/blogs/$blog_id/".$post['blog_image']))
					{
						$this->session->set_flashdata('addblogmsg','<div class="alert alert-success">Blog Added Successfully</div>');				 
					}
					else
					{
						$this->session->set_flashdata('addblogmsg','<div class="alert alert-danger">Image Upload error</div>');	
					}
				 
				}
				$this->session->set_flashdata('editblogmsg','<div class="alert alert-success">Blog updated successfully</div>');
			}
			else
			{
				$this->session->set_flashdata('editblogmsg','<div class="alert alert-danger">System Failure.</div>');

			}
			return redirect(base_url('admin/editblog/'.$blog_id));
		}
		public function delblog()
		{
			$post	=	$this->input->post();
			$this->load->model('delete');
			if($this->delete->delete_table($post,'blog'))
			{
				$this->session->set_flashdata('blogmsg','<div class="alert alert-success">Congratulations!.. Blog deleted succefully.</div>');
			}
			else
			{
				$this->session->set_flashdata('blogmsg','<div class="alert alert-danger">Sytem Failure.</div>');
			}
			echo "1";
		}
	}
?>


















