<?php
	class MY_Controller extends CI_Controller{
		public function sendmail($email,$subject,$body,$altbody)
		{
						
			require_once 'phpmailer/PHPMailerAutoload.php';
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
			$mail->addCC('uzair@wishababy.com');
			$mail->addCC('info@wishababy.com');
			//$mail->addCC('paurush.ankit@gmail.com');
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
