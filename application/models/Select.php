<?php
	class Select extends CI_Model
	{
		public function checkadminlogin($array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								->get('admin');
			if($row=$q->unbuffered_row())
			{
				return $row->admin_id;
			}
			else
			{
				return false;
			}
		}
		public function checkcity($array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								->get('cities');
			if($row=$q->unbuffered_row())
			{
				return $row->city_id;
			}
			else
			{
				return false;
			}
		}
		public function checkclinic($array)
		{
			$q	=	$this->db->select('clinic_id')
								->where($array)
								->get('clinic');
			if($row=$q->unbuffered_row())
			{
				return $row->clinic_id;
			}
			else
			{
				return false;
			}
		}
		public function checksubscriber($array)
		{
			$q	=	$this->db->select('s_id')
								->where($array)
								->get('subscriber');
			if($row=$q->unbuffered_row())
			{
				return $row->s_id;
			}
			else
			{
				return false;
			}
		}
		public function checkblog($array)
		{
			$q	=	$this->db->select('blog_id')
								->where($array)
								->get('blog');
			if($row=$q->unbuffered_row())
			{
				return $row->blog_id;
			}
			else
			{
				return false;
			}
		}
		
		public function checkcart($array)
		{
			$q	=	$this->db->select('cart_id')
								->where($array)
								->get('cart');
			if($row=$q->unbuffered_row())
			{
				return $row->cart_id;
			}
			else
			{
				return false;
			}
		}
		
		public function checkcategory($array)
		{
			$q	=	$this->db->select('cat_id')
								->where($array)
								->get('category');
			if($row=$q->unbuffered_row())
			{
				return $row->cat_id;
			}
			else
			{
				return false;
			}
		}
		public function checkuser($array)
		{
			$q	=	$this->db->select('user_id')
								->where($array)
								->get('users');
			if($row=$q->unbuffered_row())
			{
				return $row->user_id;
			}
			else
			{
				return false;
			}
		}
		
		public function get_one_user_type($array)
		{
			$q	=	$this->db->select('user_type,user_pwd_request')
								->where($array)
								->get('users');
			return $q->row_array();
		}
		public function get_one_comment($array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								->get('rating');
			return $q->row_array();
		}
		
		public function checkproduct($array)
		{
			$q	=	$this->db->select('product_id')
								->where($array)
								->get('product');
			if($row=$q->unbuffered_row())
			{
				return $row->product_id;
			}
			else
			{
				return false;
			}
		}
		public function checkseo($array)
		{
			$q	=	$this->db->select('seo_id')
								->where($array)
								->get('seo');
			if($row=$q->unbuffered_row())
			{
				return $row->seo_id;
			}
			else
			{
				return false;
			}
		}
		public function checkmenu($array)
		{
			$q	=	$this->db->select('menu_id')
								->where($array)
								->get('menu');
			if($row=$q->unbuffered_row())
			{
				return $row->menu_id;
			}
			else
			{
				return false;
			}
		}
		public function checknestedsubmenu($array)
		{
			$q	=	$this->db->select('nest_id')
								->where($array)
								->get('nestedmenu');
			if($row=$q->unbuffered_row())
			{
				return $row->nest_id;
			}
			else
			{
				return false;
			}
		}
		
		public function checksubmenu($array)
		{
			$q	=	$this->db->select('submenu_id')
								->where($array)
								->get('submenu');
			if($row=$q->unbuffered_row())
			{
				return $row->submenu_id;
			}
			else
			{
				return false;
			}
		}
		
		public function count_all_category()
		{
			$q	=	$this->db->select('cat_id')								 
								->get('category');
			return $q->num_rows();			 
		}
		public function count_all_subscriber()
		{
			$q	=	$this->db->select('s_id')								 
								->get('subscriber');
			return $q->num_rows();			 
		}
		public function count_all_rows($table)
		{
			$q	=	$this->db->select(1)								 
								->get($table);
			return $q->num_rows();			 
		}
		
		public function count_all_quotes()
		{
			$q	=	$this->db->select('quote_id')								 
								->get('quote');
			return $q->num_rows();			 
		}
		
		public function count_some_questions($array)
		{
			$q	=	$this->db->select('q_id')	
								->where($array)
								->get('question');
			return $q->num_rows();			 
		}
		public function count_all_blog($array)
		{
			$q	=	$this->db->select('blog_id')	
								->where($array)
								->get('blog');
			return $q->num_rows();			 
		}
		
		public function count_some_callback($array)
		{
			$q	=	$this->db->select('call_id')	
								->where($array)
								->get('callback');
			return $q->num_rows();			 
		}
		
		public function count_some_appointment($array)
		{
			$q	=	$this->db->select('ap_id')	
								->where($array)
								->get('appointment');
			return $q->num_rows();			 
		}
		
		public function count_all_clinic()
		{
			$q	=	$this->db->select('clinic_id')								 
								->get('clinic');
			return $q->num_rows();			 
		}
		
		public function count_some_users($array)
		{
			$q	=	$this->db->select('user_id')
								->where($array)
								->get('users');
			return $q->num_rows();			 
		}
		public function count_some_seo($array)
		{
			$q	=	$this->db->select('seo_id')
								->where($array)
								->get('seo');
			return $q->num_rows();			 
		}
		
		public function count_all_product()
		{
			$q	=	$this->db->select('product_id')								 
								->get('product');
			return $q->num_rows();			 
		}
		
		public function get_some_category($limit,$offset)
		{
			$q	=	$this->db->select('*')	
								->limit($limit,$offset)
								->order_by('cat_id','DESC')
								->get('category');
			return $q->result_array();
		}
		public function get_some_subscibers($limit,$offset)
		{
			$q	=	$this->db->select('*')	
								->limit($limit,$offset)
								->order_by('s_id','DESC')
								->get('subscriber');
			return $q->result_array();
		}

		public function get_some_quotes($limit,$offset)
		{
			$q	=	$this->db->select('*')	
								->limit($limit,$offset)
								->order_by('quote_id','DESC')
								->get('quote');
			return $q->result_array();
		}
		
		public function get_some_clinic($limit,$offset)
		{
			$q	=	$this->db->select('*')	
								->limit($limit,$offset)
								->order_by('clinic_id','DESC')
								->get('clinic');
			return $q->result_array();
		}
		public function get_specific_clinic($limit,$offset,$array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								->limit($limit,$offset)
								->order_by('clinic_id','DESC')
								->get('clinic');
			return $q->result_array();
		}
		
		public function get_some_appointment($limit,$offset,$array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								->limit($limit,$offset)
								->join('users','user_id	=	ap_clinic_id')
								->order_by('ap_date','DESC')
								->get('appointment');
			return $q->result_array();
		}
		public function get_one_appointment($array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								 ->join('users','user_id	=	ap_parent_id')
								 ->get('appointment');
			return $q->row_array();
		}
		public function get_one_appointment2($array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								 ->join('users','user_id	=	ap_clinic_id')
								 ->get('appointment');
			return $q->row_array();
		}
		public function get_some_clinic_appointment($limit,$offset,$array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								->limit($limit,$offset)
								->join('users','user_id	=	ap_parent_id')
								->order_by('ap_date','DESC')
								->get('appointment');
			return $q->result_array();
		}
		public function get_some_blog($limit,$offset,$array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								->limit($limit,$offset) 
								->order_by('blog_id','DESC')
								->get('blog');
			return $q->result_array();
		}
		
		public function get_some_callback($limit,$offset,$array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								->limit($limit,$offset)								 
								->order_by('call_id','DESC')
								->get('callback');
			return $q->result_array();
		}
		public function get_some_admin_callback($limit,$offset,$array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								->join('users','users.user_id=callback.call_clinic_id')
								->limit($limit,$offset)								 
								->order_by('call_id','DESC')
								->get('callback');
			return $q->result_array();
		}
		
		public function get_some_seo($limit,$offset,$array)
		{
			$q	=	$this->db->select('*')	
								->where($array)
								->limit($limit,$offset)
								->order_by('seo_id','DESC')
								->get('seo');
			return $q->result_array();
		}
		
		public function get_some_product($limit,$offset)
		{
			$q	=	$this->db->select('*')	
								->limit($limit,$offset)
								->order_by('product_id','DESC')
								->join('category','cat_id	=	product_cat_id')
								->get('product');
			return $q->result_array();
		}
		public function get_some_users($limit,$offset,$array)
		{
			$q	=	$this->db->select('*')	
								->where($array)
								->limit($limit,$offset)
								->order_by('user_id')
								//->join('category','cat_id	=	product_cat_id')
								->get('users');
			return $q->result_array();
		}
		
		public function get_some_answers($array)
		{
			$q	=	$this->db->select('ans_name,user_clinic_name,user_id,user_type,user_fname,user_sname')	
								->where($array)
								->join('users','user_id	=	ans_clinic_id') 								 
								->get('answer');
			return $q->result_array();
		}
		
		public function get_products($array)
		{
			$q	=	$this->db->select('*')	
								->where($array)
								//->order_by('product_id','DESC')								 
								->get('product');
			return $q->result_array();
		}
		
		public function get_one_category($array)
		{
			$q	=	$this->db->select('*')	
								->where($array)								 
								->get('category');
			return $q->row_array();
		}
		public function get_one_blog($array)
		{
			$q	=	$this->db->select('*')	
								->where($array)								 
								->get('blog');
			return $q->row_array();
		}
		
		public function get_one_question($array)
		{
			$q	=	$this->db->select('*')	
								->where($array)								 
								->get('question');
			return $q->row_array();
		}
		
		public function get_one_product($array)
		{
			$q	=	$this->db->select('*')	
								->where($array)	
								->join('category','cat_id	=	product_cat_id')
								->get('product');
			return $q->row_array();
		}
		public function get_one_seo($array)
		{
			$q	=	$this->db->select('*')	
								->where($array)									 
								->get('seo');
			return $q->row_array();
		}
		
		public function get_country()
		{
			$q	=	$this->db->select('country_name')	
								
								->get('country');
			return $q->result_array();
		}
		public function get_height()
		{
			$q	=	$this->db->select('height_cm,height_inch')	
								
								->get('height');
			return $q->result_array();
		}
		
		public function get_all_category()
		{
			$q	=	$this->db->select('cat_name,cat_slug,cat_image,cat_id,cat_details')	
							->get('category');
			return $q->result_array();
		}
		public function get_all_menu()
		{
			$q	=	$this->db->select('menu_name,menu_slug,menu_id,menu_top')	
							->order_by('menu_order','asc')
							->get('menu');
							
			return $q->result_array();
		}
		public function get_one_menu($array)
		{
			$q	=	$this->db->select('*')	
							->where($array)
							->get('menu');
			return $q->row_array();
		}
		public function get_one_submenu($array)
		{
			$q	=	$this->db->select('*')	
							->where($array)
							->get('submenu');
			return $q->row_array();
		}
		public function get_one_nestedmenu($array)
		{
			$q	=	$this->db->select('*')	
							->join('submenu','submenu_id	=	nest_submenu_id')
							->join('menu','menu_id			=	submenu_menu_id')
							->where($array)
							->get('nestedmenu');
			return $q->row_array();
		}
		
		public function get_all_submenu()
		{
			$q	=	$this->db->select('submenu_name,submenu_slug,menu_name,submenu_id')
							->join('menu','menu_id	=	submenu_menu_id')
							 
							->get('submenu');
			return $q->result_array();
		}
		public function get_some_submenu($array)
		{
			$q	=	$this->db->select('submenu_name,submenu_slug,menu_name,submenu_id')
							->join('menu','menu_id	=	submenu_menu_id')
							->order_by('submenu_order','asc')
							->where($array)
							->get('submenu');
			return $q->result_array();
		}
		public function getnestedmenu($array)
		{
			$q	=	$this->db->select('nest_id,nest_name,submenu_name,menu_name')
							->join('submenu','submenu_id	=	nest_submenu_id')
							->join('menu','menu_id			=	submenu_menu_id')
							->order_by('nest_order','asc')
							->where($array)
							->get('nestedmenu');
			return $q->result_array();
		}
		
		public function get_one_user($array)
		{
			$q	=	$this->db->select('*')
							 
							->where($array)
							->get('users');
			return $q->row_array();
		}
		public function get_one_city($array)
		{
			$q	=	$this->db->select('*')							 
							->where($array)
							->get('cities');
			return $q->row_array();
		}
		
		 public function get_filtered_product($sql)
		 {
			 $q	=	$this->db->query($sql);
			 return $q->result_array();
		 }
		 public function execute_query($sql)
		 {
			return $this->db->query($sql);			 
		 }

		 public function get_inbox($id)
		 {
			 $q	=	$this->db->select('message_id,message_body,message_sender_id,message_rx_id,message_seen,message_add_time,user_id,user_fname,user_sname')
							->where('message_rx_id', $id)
							//->or_where('message_sender_id', $id)
							->order_by('message_id', 'DESC')
							->join('users','user_id	=	message_sender_id')
							->group_by(array("message_sender_id"))
							->get('message');
			return $q->result_array();
		 }
		 public function get_sentbox($id)
		 {
			 $q	=	$this->db->select('message_id,message_body,message_sender_id,message_rx_id,message_seen,message_add_time,user_id,user_fname,user_sname')
							->where('message_sender_id', $id)
							//->or_where('message_sender_id', $id)
							->order_by('message_id', 'DESC')
							->join('users','user_id	=	message_rx_id')
							->group_by(array("message_rx_id"))
							->get('message');
			return $q->result_array();
		 }
		 
		public function get_conversation($my_id,$user_id)
		 {
			 $q	=	$this->db->select('message_id,message_body,message_sender_id,message_rx_id,message_seen,message_add_time')
							->where('message_sender_id', $my_id)
							->where('message_rx_id', $user_id)
							->or_where('message_sender_id', $user_id)
							->where('message_rx_id', $my_id)
							->order_by('message_id', 'DESC')							 
							->get('message');
			return $q->result_array();
		 }
		 public function get_all_indian_state()
		 {
			 $q	=	$this->db->select('city_state')
								->group_by('city_state')
								->order_by('city_state')
								->get('cities');
			//return $this->db->last_query();
			return $q->result_array();
		 }
		 public function get_all_indian_state_id()
		 {
			 $q	=	$this->db->select('city_state,city_id')
								->group_by('city_state')
								->order_by('city_state')
								->get('cities');
			//return $this->db->last_query();
			return $q->result_array();
		 }
		 
		 public function get_some_cities($array)
		 {
			 $q	=	$this->db->select('city_name')
								->where($array)
								->order_by('city_name')
								->get('cities');
			//return $this->db->last_query();
			return $q->result_array();
		 }
		 public function get_answers($array)
		 {
			 $q	=	$this->db->select('answer.*,users.user_id,users.user_fname,users.user_sname,users.user_clinic_name,users.user_type')
								->where($array)	
								->join('users','user_id	=	ans_clinic_id')
								->get('answer');
			//return $this->db->last_query();
			return $q->result_array();
		 }
		 public function get_some_questions($limit,$offset,$array)
		 {
			 $q	=	$this->db->select('*')
								->where($array)
								->limit($limit,$offset)
								->join('users','user_email	=	q_email','left')
								->order_by('q_id','DESC')
								->get('question');
			 
			return $q->result_array();
		 }
		 public function get_some_clinic_questions($limit,$offset,$array)
		 {
			 $q	=	$this->db->select('*')
								->where($array)
								//->join('answer','ans_q_id	=	q_id','left')
								->limit($limit,$offset)
								->order_by('q_id','DESC')
								->get('question');
			 
			return $q->result_array();
		 }
		
		 
		 public function get_cart($array)
		 {
			 $q	=	$this->db->select('*')
							->where($array)
							->join('product','product.product_id=cart.cart_product_id')
							->get('cart');
			return $q->result_array();
		 }
		 public function get_header_nestedmenu($array)
		 {
			 $q	=	$this->db->select('nest_name,nest_slug')
									->where($array)
									->get('nestedmenu');
			return $q->result_array();
		 }
		 public function get_clinic_service()
		 {
			 $q	=	$this->db->select('*')
									//->where($array)
									->get('clinic_service');
			return $q->result_array();
		 }
		 
		
	}
?>





















