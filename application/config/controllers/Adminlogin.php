<?php
	Class Adminlogin extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			if($this->session->userdata('admin_id'))
			{
				return redirect (base_url('admin'));
			}
			$this->load->model('select');	
			ob_start();
			date_default_timezone_set('Asia/kolkata');			 
		}
		
		public function index()
		{
			$this->load->view('admin/login');
		}
		
		public function verifylogin()
		{			 
			$post	=	$this->input->post();
			echo "<pre>";
			print_r($post);
			$this->load->model('select');
			if($admin_id	=	$this->select->checkadminlogin($post))
			{
				$_SESSION['admin_id']	=	$admin_id;
				return redirect(base_url('admin'));
			}
			else
			{
				$this->session->set_flashdata('loginmsg','<div class="alert alert-danger" style="background:red;color:white"><b>Inccorrect Username Or Password.</b></div>');
				return redirect(base_url('Adminlogin'));
			}			 
		}
		
	}
?>