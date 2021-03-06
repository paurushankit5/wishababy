<?php
	class Expert extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			if(!isset($_COOKIE['wish_expert_id']))
			{
				return redirect(base_url('home'));
			}
			$this->load->model('select');
			$array	=	array('user_id'	=>	$_COOKIE['wish_expert_id']);			 
			$this->me	=	$this->select->get_one_user($array);
		}
		public function logout()
		{
			 setcookie('wish_expert_id',0, time() - (86400 * 30), "/");
			 return redirect(base_url('home'));
		}
		public function editprofile()
		{
			
			$states	=	$this->select->get_all_indian_state();
			$array	=	array('city_state'	=>	$this->me['user_state']);
			$cities	=	$this->select->get_some_cities($array);
			$service	=	$this->select->get_clinic_service();
			$array	=	array(
								'me'		=>	$this->me,							
								'cities'	=>	$cities,
								'states'	=>	$states,
								'service'	=>	$service,
								);
			$this->load->view('expert/edit',['array'	=>	$array]);
		}
		public function update()
		{
			$post	=	$this->input->post();
			$expert_id	=	$post['user_id'];
			 
			$preimage	=	$post['preimage'];
			unset($post['preimage']);
			$post['user_service']	=	implode(",",$post['user_service']);
			
			if(!file_exists('./img/user/'.$expert_id.'/'))
			{
				mkdir('./img/user/'.$expert_id.'/'); 
			}			 
			if($_FILES['user_image']['name']!='')
			{
				$post['user_image']	=	$_FILES['user_image']['name'];
				if(!file_exists('./img/user/'.$expert_id))
				{
					mkdir('./img/user/'.$expert_id); 
				}
				@unlink("./img/user/$expert_id/".$preimage);
				move_uploaded_file($_FILES['user_image']['tmp_name'],"./img/user/$expert_id/".$post['user_image']);
			}
			$this->load->model('update');
			if($this->update->update_table('users','user_id',$post['user_id'],$post))
			{
				$this->session->set_flashdata('profilemsg','<div class="alert alert-success">Profile updated successfully.</div>');
			}
			else
			{
				$this->session->set_flashdata('profilemsg','<div class="alert alert-danger">System Failure.</div>');
			}
			return redirect(base_url('expert/profile'));
			
			
		}
		public function profile()
		{
			$array	=	array('me'	=>	$this->me);
			$this->load->view('expert/profile',['array'	=>	$array]);
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
			if(count($ques))
			{
				$i=0;
				foreach($ques as $x)
				{
					$array		=	array('ans_q_id'	=>	$x['q_id']);
					$answer		=	$this->select->get_answers($array);
					$ques[$i]['answers']	=	$answer;
					$i++;
				}
			}
			$array	=	array(
								'ques'		=>		$ques,	
								'me'		=>	$this->me,	
								'count'		=>		$this->uri->segment(3),
							);
			//echo $array['count'];
			$this->load->view('expert/questions',['array'	=>	$array]);
		}
		public function viewconversation()
		{
			$q_id	=	$this->uri->segment(3);
			$array	=	array('q_id'	=>		$q_id);
			
			$ques	=	$this->select->get_one_question($array);
			$array	=	array(
								'ques'	=>	$ques,
							);
			$this->load->view('expert/questions',['array'	=>	$array]);
		}
		public function storeans()
		{
			$post	=	$this->input->post();
			$post['ans_add_time']	=	date('Y-m-d H:i:s');
			$post['ans_edit_time']	=	date('Y-m-d H:i:s');
			$post['ans_clinic_id']	=	$_COOKIE['wish_expert_id'];
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
			$array		=	array('ap_clinic_id'	=>	$_COOKIE['wish_expert_id']);
			$config		=	[
								'base_url'		=>		base_url('expert/myappointments/'),
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
										'me'			=>	$this->me,	 
									);
			$this->load->view('expert/myappointments',['array'	=>	$array]);
		}
		public function callback()
		{
			$this->load->library('pagination');
			$array		=	array('call_clinic_id'	=>	$_COOKIE['wish_expert_id']);
			$config		=	[
								'base_url'		=>		base_url('expert/callback/'),
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
										'me'		=>	$this->me,	 
									);
			$this->load->view('expert/callback',['array'	=>	$array]);
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
		public function updateans()
		{ 
			$post	=	$this->input->post();
			$post['ans_edit_time']	=	date('Y-m-d H:i:s');
			$this->load->model('update');
			if($this->update->update_table('answer','ans_id',$post['ans_id'],$post))
			{
				$this->session->set_flashdata('qmsg','<div class="alert alert-success">Answer edited successfully</div>');
			}
			else
			{
				$this->session->set_flashdata('qmsg','<div class="alert alert-danger">System Failure.</div>');

			}
			//echo "1";
		}
		public function changepassword(){
			$array	=array('me'		=>	$this->me,);
			$this->load->view('expert/changepassword',['array'	=>	$array]); 
		 }
		 public function updatepassword(){
			 $post	=	$this->input->post();
			// echo "<pre>";
			// print_r($post);
			 $array	=	array(
								'user_id'	=>	$_COOKIE['wish_expert_id'],
								'user_pwd'	=>	$post['cur_password'],
			 
						);
			 if($post['new_password']	!=	$post['new_password1'])
			 {
				$this->session->set_flashdata('passmsg','<div class="alert alert-danger">Passwords do not match</div>');
			 }
			 else if($this->select->checkuser($array))
			 {
				$this->load->model('update');
				$array	=	array(
								'user_pwd'	=>	$post['new_password'],			 
						);
				if($this->update->update_table('users','user_id',$_COOKIE['wish_expert_id'],$array))
				{
					$this->session->set_flashdata('passmsg','<div class="alert alert-success">Password changed successfully.</div>');
					$array	=	array('user_id'	=>	$_COOKIE['wish_expert_id']);
					$user	=	$this->select->get_one_user($array);
					$name	=	$user['user_fname']." ".$user['user_sname'];
					$this->mail_user($user['user_email'],$name);
				}
				else{
					$this->session->set_flashdata('passmsg','<div class="alert alert-danger">Oops!.. Please try later.</div>');
				}
			 }
			 else{
				 $this->session->set_flashdata('passmsg','<div class="alert alert-danger">Oops!.. Incorrect password.</div>');
			 }
			 return redirect(base_url('expert/changepassword'));
		 }
		 public function mail_user($email,$name)
		{
			$bg=base_url('img/logo.png');
			$subject	=	'WishABaby Password Changed ';
			$main	=	'<p>This is to inform you that your password associated with WishABaby account has been changed on <b>'.date('d-M-Y, H:i:A').'</b>.</p>';
			  				
			  
			$data	=	'<html>
							<div style="width:90%; border:px solid #3f5267;">
								<div style="width:100%;padding:20px;">
									<center>
										<img src="'.$bg.'" style=""/>
									</center>
								</div>
								<div style="width:100%;background:#3f5267;color:white;padding:5px;">
									<h2 style="text-align:center">'.$subject.'</h2>
								</div>
								<div style="width:100%;padding:10px;">
									<h3><b>Dear '.$name.'</b></h3>

									'.$main.'
									Please open your WishABaby account for more details.
									<br>
									<br>
									<br>
									<hr>
									<p>Regards : WAB Team<br><br>
									Email : &nbsp;&nbsp;&nbsp;&nbsp;info@wishababy.com</p>
									<hr>
								</div>
							</div>
						</html>';
			if($this->sendmail($email,$subject,$data,'WishABaby Appointment Status'))
			{
				//echo 1;
			}
			else
			{
				//echo "2";
			}
			
		}
		public function sendmail($email,$subject,$body,$altbody)
		{
						
			require 'phpmailer/PHPMailerAutoload.php';
			$mail = new PHPMailer;
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'md-in-55.webhostbox.net';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'donotreply@wishababy.com';                 // SMTP username
			$mail->Password = '21feb1993';                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = '465';                                    // TCP port to connect to
			$mail->setFrom('donotreply@wishababy.com', 'WishABaby');
			$mail->addAddress($email);     // Add a recipient
			$mail->addReplyTo('donotreply@wishababy.com', 'WishABaby');
			$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = $subject;
			$mail->Body    = $body;
			$mail->AltBody = $altbody;
			if(!$mail->send()) {
				//echo 'Message could not be sent.';
				//echo 'Mailer Error: ' . $mail->ErrorInfo;
				return false;
			} else {
				//echo 'Message has been sent';
				return true;
			}
		}
	}
?>