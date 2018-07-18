<?php
	class Findaclinic extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			 
			$this->load->model('select');
			$this->menu		=	$this->select->get_all_menu();
			date_default_timezone_set('Asia/kolkata');
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
			$this->states	=	$this->select->get_all_indian_state();	
			$this->cat	=	$this->select->get_all_category();
		}
		public function index()
		{
			$array	=	array(
								'user_type'		=>	2,
								'user_status'	=>	1,
								);	
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('findaclinic/index/'),
								'per_page'		=>		'12',
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
		//$clinic		=	$this->select->get_some_users(100000,0,$array);
			if(isset($_COOKIE['wish_user_id']))
			{
				$array	=	array('user_id'		=>		$_COOKIE['wish_user_id']);
				$user	=	$this->select->get_one_user($array);
				 
			}
			else
			{
				$user	=	array();
			}
			$service	=	$this->select->get_clinic_service();
			$array	=	array('seo_page_name'	=>	'Findaclinic');
			$seo	=	$this->select->get_one_seo($array);
			$array	=	array(
								'cat'		=>	$this->cat,
								'clinic'	=>	$clinic,
								'user'		=>	$user,
								'seo'		=>	$seo,
								'service'	=>	$service,
								'menu'		=>	$this->menu,
								'states'		=>	$this->states,
							);
			 
			$this->load->view('home/findaclinic',['array'	=>	$array]);
			 
		}
		public function findaexpert()
		{
			$array	=	array(
								'user_type'		=>	3,
								'user_status'	=>	1,
								);	
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('Consult-An-Expert/Expert-Directory/'),
								'per_page'		=>		'12',
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
		//$clinic		=	$this->select->get_some_users(100000,0,$array);
			if(isset($_COOKIE['wish_user_id']))
			{
				$array	=	array('user_id'		=>		$_COOKIE['wish_user_id']);
				$user	=	$this->select->get_one_user($array);
				 
			}
			else
			{
				$user	=	array();
			}
			$service	=	$this->select->get_clinic_service();
			$array	=	array('seo_page_name'	=>	'Findexpert');
			$seo	=	$this->select->get_one_seo($array);
			$array	=	array(
								'cat'		=>	$this->cat,
								'clinic'	=>	$clinic,
								'user'		=>	$user,
								'seo'		=>	$seo,
								'service'	=>	$service,
								'menu'		=>	$this->menu,
								'states'		=>	$this->states,
							);
			 
			$this->load->view('home/findaexpert',['array'	=>	$array]);
			 
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
		public function storeappointments()
		{
			$post	=	$this->input->post();
			$post['ap_add_time']	=	date('Y-m-d H:i:s');
			$post['ap_edit_time']	=	date('Y-m-d H:i:s');
			$post['ap_parent_id']	=	$_COOKIE['wish_user_id'];
			$this->load->model('insert');
			if($ap_id	=	$this->insert->insert_table($post,'appointment'))
			{
				$array	=	array(
								'ap_id'	=>	$ap_id
							);
				$user	=	$this->select->get_one_appointment2($array);
				$name	=	$user['user_fname']." ".$user['user_sname'];
				$email	=	$user['user_email'];
				$this->mail_user3($email,$name);
				//print_r($user);
				echo $ap_id;
			}
			else
			{
				echo 0;
			}
			 
		}
		public function storecallback()
		{
			$post	=	$this->input->post();
			$post['call_add_time']	=	date('Y-m-d H:i:s');
			$post['call_edit_time']	=	date('Y-m-d H:i:s');
			 
			$this->load->model('insert');
			if($call_id	=	$this->insert->insert_table($post,'callback'))
			{
				$array	=	array('user_id'	=>	$post['call_clinic_id']);
				$user	=	$this->select->get_one_user($array);
				
				
				echo $call_id;
			}
			else
			{
				echo 0;
			}
			 
		}
		
	 	public function updateappointment()
		{
			$post	=	$this->input->post();
			
			$this->load->model('update');
			if($ap_id	=	$this->update->update_table('appointment','ap_id',$post['ap_id'],$post))
			{
				$array	=	array(
								'ap_id'	=>	$post['ap_id']
							);
				$user	=	$this->select->get_one_appointment($array);
				$name	=	$user['user_fname']." ".$user['user_sname'];
				$email	=	$user['user_email'];
				$this->mail_user($email,$name,$post['ap_status']);
				//print_r($user);
				echo 1; 
			}
			else
			{
				echo 0;
			}
			 
		}
		public function updateappointment2()
		{
			$post	=	$this->input->post();
			
			$this->load->model('update');
			if($ap_id	=	$this->update->update_table('appointment','ap_id',$post['ap_id'],$post))
			{
				$array	=	array(
								'ap_id'	=>	$post['ap_id']
							);
				$user	=	$this->select->get_one_appointment2($array);
				$name	=	$user['user_fname']." ".$user['user_sname'];
				$email	=	$user['user_email'];
				$this->mail_user2($email,$name,$post['ap_status']);
				//print_r($user);
				echo 1; 
			}
			else
			{
				echo 0;
			}
			 
		}
		public function expertdetails()
		{
			$clinic_id		=	$this->uri->segment(3);
			 $array			=	array(
										'user_id'	=>	$clinic_id,
										'user_type'	=>	3
									);
			if(count($clinic	=	$this->select->get_one_user($array)))
			{
				if(isset($_COOKIE['wish_user_id']))
				{
					$array	=	array('user_id'		=>		$_COOKIE['wish_user_id']);
					$user	=	$this->select->get_one_user($array);
					$name	=	$user['user_fname']." ".$user['user_sname']; 
					$this->mail_user4($user['user_email'],$name); 
				}
				else
				{
					$user	=	array();
				}
				$array		=	array(
										'clinic'	=>	$clinic,
										'user'		=>	$user,
										'cat'		=>	$this->cat,										 
										'menu'		=>	$this->menu,
										'states'		=>	$this->states,
									);
				$this->load->view('home/expertdetails',['array'	=>	$array]);
			}
			else{
				return redirect(base_url('error404'));
			}
		}
		public function clinicdetails()
		{
			$clinic_id		=	$this->uri->segment(3);
			 $array			=	array(
										'user_id'	=>	$clinic_id,
										'user_type'	=>	2
									);
			if(count($clinic	=	$this->select->get_one_user($array)))
			{
				if(isset($_COOKIE['wish_user_id']))
				{
					$array	=	array('user_id'		=>		$_COOKIE['wish_user_id']);
					$user	=	$this->select->get_one_user($array);
					 
				}
				else
				{
					$user	=	array();
				}
				$array		=	array(
										'clinic'	=>	$clinic,
										'user'		=>	$user,
										'cat'		=>	$this->cat,										 
										'menu'		=>	$this->menu,
										'states'		=>	$this->states,
									);
				$this->load->view('home/clinicdetails',['array'	=>	$array]);
			}
			else{
				return redirect(base_url('error404'));
			}
		}
		public function mail_user($email,$name,$status)
		{
			$bg=base_url('img/logo.png');
			if($status	==	'1' || $status	==	1)
			{
				$subject	=	' WishABaby Appointment Request Confirmation';
				$main	=	'<p>We are happy to inform you that your appointment request has been confirmed by our Expert.</p>';
			}				
			else if($status	==	'4' ||	$status	==	4)
			{
				$subject	=	'WishABaby Appointment Request Canceled ';
				$main	=	'<p>This is to inform you that your appointment request has been canceled by our Expert.</p>';
			} 
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
		//echo $data;
		 	if($this->sendmail($email,$subject,$data,'WishABaby Appointment Status'))
			{
				//echo 1;
			}
			else
			{
				//echo "2";
			} 
			
		}
		public function mail_user2($email,$name,$status)
		{
			$bg=base_url('img/logo.png');
			if($status	==	'0' || $status	==	0)
			{
				$subject	=	'WishABaby Appointment Request Rescheduled';
				$main	=	'<p>This is to inform you that your appointment request has been rescheduled by parent.</p>';
			}				
			else if($status	==	'3' ||	$status	==	3)
			{
				$subject	=	' WishABaby Appointment Request Canceled ';
				$main	=	'<p>This is to inform you that your appointment request has been canceled by parent.</p>';
			} 
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
		//echo $data;
		 	if($this->sendmail($email,$subject,$data,'WishABaby Appointment Status'))
			{
				//echo 1;
			}
			else
			{
				//echo "2";
			} 
			
		}
		public function mail_user3($email,$name)
		{
			$bg=base_url('img/logo.png');
			$subject	=	'WishABaby New  Appointment Request ';
			$main	=	'<p>This is to inform you that you have an appointment request with one of our registered parent.</p>';
			$main	.=	'<p>Please confirm the appointment.</p>';
			 				
			  
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
		//echo $data;
		 	if($this->sendmail($email,$subject,$data,'WishABaby Appointment Status'))
			{
				//echo 1;
			}
			else
			{
				//echo "2";
			} 
			
		}
		public function mail_user4($email,$name)
		{
			$bg=base_url('img/logo.png');
			$subject	=	'WishABaby New Callback Request ';
			$main	=	'<p>This is to inform you that you have a callback request with one of our registered parent.</p>';
			  				
			  
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
		//echo $data;
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