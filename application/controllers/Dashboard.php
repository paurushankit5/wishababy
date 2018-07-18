<?php
	class Dashboard extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();	
			if(!(isset($_COOKIE['wish_user_id'])	||	isset($_COOKIE['wish_clinic_id'])||	isset($_COOKIE['wish_expert_id'])	))
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
			if(isset($_COOKIE['wish_clinic_id']))
			{
				return redirect(base_url('dashboard/clinic'));
			}
			else if(isset($_COOKIE['wish_expert_id']))
			{
				return redirect(base_url('dashboard/expert'));
			}
			else
			{
				return redirect(base_url(''));
			}
			 
		}
		public function clinic()
		{
			if(!isset($_COOKIE['wish_clinic_id']))
			{
				return redirect(base_url('home'));
			}
			$array		=	array('user_id'	=>	$_COOKIE['wish_clinic_id']);
			$me			=	$this->select->get_one_user($array);
			
			$array		=	array('call_clinic_id'	=>	$_COOKIE['wish_clinic_id']);
			$callback	=	$this->select->count_some_callback($array);
			$array		=	array('ap_clinic_id'	=>	$_COOKIE['wish_clinic_id']);
			$appointment=	$this->select->count_some_appointment($array);
			$array		=	array('1'	=>	1);
			$questions	=	$this->select->count_some_questions($array);
			$array		=	array(
								'clinic'		=>	$me,
								'callback'		=>	$callback,
								'appointment'	=>	$appointment,
								'questions'		=>	$questions,
								);
			$this->load->view('clinic/dashboard',['array'	=>	$array]);
		}
		public function myappointments()
		{
			$this->load->library('pagination');
			$array		=	array('ap_parent_id'	=>	$_COOKIE['wish_user_id']);
			$config		=	[
								'base_url'		=>		base_url('dashboard/myappointments/'),
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
			$appointments	=	$this->select->get_some_appointment($config['per_page'],$this->uri->segment(3),$array);
			$array			=	array(	
									'user_type'		=>	2,
									'user_status'	=>	1
									);
			$clinic			=	$this->select->get_some_users(5,0,$array);
			$array			=	array(
										'appointments'	=>	$appointments,
										'clinic'	=>	$clinic,
										'cat'		=>	$this->cat,
										'menu'		=>	$this->menu,
									);
			$this->load->view('home/myappointments',['array'	=>	$array]);
		}
		public function changepassword()
		{
			$post	=	$this->input->post();
			 
			if(isset($_COOKIE['wish_user_id']))
			{
				$array	=	array(
									'user_id'	=>	$_COOKIE['wish_user_id'],
									'user_pwd'	=>	$post['old']
									);
				if($user_id	=	$this->select->checkuser($array))
				{
					$array	=	array(
									'user_id'	=>	$user_id,
									'user_pwd'	=>	$post['pwd']
									);
					$this->load->model('update');
					if($this->update->update_table('users','user_id',$user_id,$array))
					{
						$array	=	array('user_id'	=>	$user_id);
						$user	=	$this->select->get_one_user($array);
						$name	=	$user['user_fname']." ".$user['user_sname'];
						$this->mail_user($user['user_email'],$name);
						echo "1";   
					}
					else						
					{
						echo "2";   
					}
				}
				else
				{
					echo "3";
				}
			}
			 
		}
		public function expert()
		{
			if(!isset($_COOKIE['wish_expert_id']))
			{
				return redirect(base_url('home'));
			}
			$array		=	array('user_id'	=>	$_COOKIE['wish_expert_id']);
			$me			=	$this->select->get_one_user($array);
			
			$array		=	array('call_clinic_id'	=>	$_COOKIE['wish_expert_id']);
			$callback	=	$this->select->count_some_callback($array);
			$array		=	array('ap_clinic_id'	=>	$_COOKIE['wish_expert_id']);
			$appointment=	$this->select->count_some_appointment($array);
			$array		=	array('1'	=>	1);
			$questions	=	$this->select->count_some_questions($array);
			$array		=	array(
								'me'		=>	$me,
								'callback'		=>	$callback,
								'appointment'	=>	$appointment,
								'questions'		=>	$questions,
								);
			$this->load->view('expert/dashboard',['array'	=>	$array]);
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












