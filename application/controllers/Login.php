<?php
	Class Login extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();	
			if(isset($_COOKIE['wish_user_id']))
			{
				//return redirect(base_url('home'));
			}
			$this->load->model('select');			 
			 
			
		}
		
		 
		public function verifylogin()
		{
			$post	=	$this->input->post();			 
			//print_r($post);
			if($user_id	=	$this->select->checkuser($post))
			{
				$user		=	$this->select->get_one_user_type($post);
				 
				$user_type	=	$user['user_type'];
				$user_pwd_requset	=	$user['user_pwd_request'];
				if($user_pwd_requset=='1')
				{
					$_SESSION['user_id_pwd']	=	$user_id;
					echo 5;
				}					
				else if($user_type=='1')
				{
					setcookie('wish_user_id',$user_id, time() + (86400 * 30), "/");
					echo "1";
				}
				else if($user_type=='2')
				{
					setcookie('wish_clinic_id',$user_id, time() + (86400 * 30), "/");
					echo "2";					
				}
				else if($user_type=='3')
				{
					setcookie('wish_expert_id',$user_id, time() + (86400 * 30), "/");
					echo "3";					
				}
				else
				{
					echo "4";
				}		 
			}
			else
			{
				echo "4";
			}	
		}
		public function forgotpassword()
		{
			$post	=	$this->input->post();
			$this->load->model('update');
			if($user_id	=	$this->select->checkuser($post))
			{
				$rand	=	mt_rand(1111111,56788765);
				//echo $rand;
				$array['user_pwd']	=	$rand;
				$array['user_pwd_request']	=	true;
				
				if($this->update->update_table('users','user_id',$user_id,$array))
				{
					$bg=base_url('img/logo.png');
					$test	='
					<html>
						<div style="width:100%; border:px solid gray;">
							<div style="width:100%;padding:20px;">
								<center>
									<img src="'.$bg.'" style=""/>
								</center>
							</div>
							<div style="width:100%;background:#3f5267;color:white;padding:5px;">
								<h2 style="text-align:center">WAB Password Reset Request</h2>
							</div>
							<div style="width:100%;padding:10px;">
								<p><b>We received a password reset request linked with your email id.</b></p>
								<p><b>Following are your new login credentials:</b></p>
								<hr>
								<p><b>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$post['user_email'].'</b></p>
								<p><b>Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$rand.'</b></p>
								<hr>
								<p><b>Regards: WAB Team</b></p>
							</div>
						</div>
					</html>';
					//echo $test;
					if($this->sendmail($post['user_email'],'WAB Password Reset Request',$test,'Password rest request'))
					{
						echo 1;
					}
					else
					{
						echo "2";
					}
					
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
		public function demo()
		{
			$bg=base_url('img/logo.png');
			$test	='
			<html>
				<div style="width:90%; border:px solid gray;">
					<div style="width:100%;padding:20px;">
						<center>
							<img src="'.$bg.'" style=""/>
						</center>
					</div>
					<div style="width:100%;background:#3f5267;color:white;padding:5px;">
						<h2 style="text-align:center">WAB Password Reset Request</h2>
					</div>
					<div style="width:100%;padding:10px;">
						<p><b>We received a password rest request linked with your email id.</b></p>
						<p><b>Following are your login credentials:</b></p>
						<hr>
						<p><b>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; paurushankit5@gmail.com</b></p>
						<p><b>Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 21feb1993</b></p>
						<hr>
						<p><b>Regards: WAB Team</b></p>
					</div>
				</div>
			</html>';
			echo $test;
			
			 
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
				echo 'Mailer Error: ' . $mail->ErrorInfo;
				return false;
			} else {
				//echo 'Message has been sent';
				return true;
			}
		}
	}
?>