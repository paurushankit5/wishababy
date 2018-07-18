<?php
	Class Action extends CI_Controller
	{
		public function __construct()
		{
			parent :: __construct();
			date_default_timezone_set('Asia/kolkata');	
			
			$this->load->model('insert');
			$this->load->model('select');
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
		public function storeratings(){
			$post 	=	$this->input->post();
			$post['created_at']	=	date('Y-m-d H:i:s');
			$post['updated_at']	=	date('Y-m-d H:i:s');
			if($this->insert->insert_table($post,'rating')){
				//echo 1;
				$ratings 	=	$post['ratings'];
				$clinic_id 	=	$post['clinic_id'];
				$sql = "update users set user_rating = user_rating + '$ratings' , user_count_rated = user_count_rated + 1 where user_id = '$clinic_id'";
				
				if($this->select->execute_query($sql))
				{
					echo 1;
				}
				else{
					echo 2;
				}
				//echo $sql;
			}else{
				echo 2;
			}
		}
	}
?>