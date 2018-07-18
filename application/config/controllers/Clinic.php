<?php
	class Clinic extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			if(!isset($_COOKIE['wish_clinic_id']))
			{
				return redirect(base_url('home'));
			}
			$this->load->model('select');
		}
		public function logout()
		{
			 setcookie('wish_clinic_id',0, time() - (86400 * 30), "/");
			 return redirect(base_url('home'));
		}
		public function questions()
		{
			
			$limit	=	10;
			$offset	=	$this->uri->segment(3);
			$array	=	array('1'	=>	1);
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('Clinic/questions'),
								'per_page'		=>		$limit,
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
			$ques	=	$this->select->get_some_clinic_questions($limit,$offset,$array);
			$array	=	array(
								'ques'		=>		$ques,								 
								'count'		=>		$this->uri->segment(3),
							);
			//echo $array['count'];
			$this->load->view('clinic/questions',['array'	=>	$array]);
		}
		public function viewconversation()
		{
			$q_id	=	$this->uri->segment(3);
			$array	=	array('q_id'	=>		$q_id);
			
			$ques	=	$this->select->get_one_question($array);
			$array	=	array(
								'ques'	=>	$ques,
							);
			$this->load->view('clinic/questions',['array'	=>	$array]);
		}
		public function storeans()
		{
			$post	=	$this->input->post();
			$post['ans_add_time']	=	date('Y-m-d H:i:s');
			$post['ans_edit_time']	=	date('Y-m-d H:i:s');
			$post['ans_clinic_id']	=	$_COOKIE['wish_clinic_id'];
			$this->load->model('insert');
			if($this->insert->insert_table($post,'answer'))
			{
				$this->session->set_flashdata('qmsg','<div class="alert alert-success">Answer added submitted successfully</div>');
			}
			else
			{
				$this->session->set_flashdata('qmsg','<div class="alert alert-danger">System Failure.</div>');

			}
			//echo "1";
		}
		public function myappointments()
		{
			$this->load->library('pagination');
			$array		=	array('ap_clinic_id'	=>	$_COOKIE['wish_clinic_id']);
			$config		=	[
								'base_url'		=>		base_url('clinic/myappointments/'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_some_appointment($array),
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
			$appointments	=	$this->select->get_some_clinic_appointment($config['per_page'],$this->uri->segment(3),$array);
			$array			=	array(
										'appointments'	=>	$appointments,
										 
									);
			$this->load->view('clinic/myappointments',['array'	=>	$array]);
		}
		public function callback()
		{
			$this->load->library('pagination');
			$array		=	array('call_clinic_id'	=>	$_COOKIE['wish_clinic_id']);
			$config		=	[
								'base_url'		=>		base_url('clinic/callback/'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_some_callback($array),
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
			$callback	=	$this->select->get_some_callback($config['per_page'],$this->uri->segment(3),$array);
			$array			=	array(
										'callback'	=>	$callback,
										 
									);
			$this->load->view('clinic/callback',['array'	=>	$array]);
		}
		 public function updatecall()
		 {
			 $post	=	$this->input->post();
			 $this->load->model('update');
			 if($this->update-> update_table('callback','call_id',$post['call_id'],$post))
			 {
				 $this->session->set_flashdata('callmsg','<div class="alert alert-success">Call completed succesfully.</div>');
				 echo 1;
			 }
			 else
			 {
				  $this->session->set_flashdata('callmsg','<div class="alert alert-danger">we are facing some technical issue. Please try after some time.</div>');

				 echo 0;
			 }
		 }
	}
?>