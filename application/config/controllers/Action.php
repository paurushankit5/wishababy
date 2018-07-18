<?php
	Class Action extends CI_Controller
	{
		public function __construct()
		{
			parent :: __construct();
			date_default_timezone_set('Asia/kolkata');	
			
			$this->load->model('insert');
		}
		public function storemessage()
		{
			$post	=	$this->input->post();
			$post['message_add_time']	=	date('Y-m-d H:i:s');
			if($this->insert->insert_table($post,'message'))
			{
				$this->session->set_flashdata('sentmsg','<div class="alert alert-success">Message sent successfully!..</div>');
			}
			else
			{
				$this->session->set_flashdata('sentmsg','<div class="alert alert-danger">System Failure!..</div>');
			}
			return redirect(base_url('message/sentbox'));
		}
	}
?>