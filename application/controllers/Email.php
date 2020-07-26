<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  Email 
 */
class Email extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('phpmailer_lib');

	}
	function send(){
		
		//phpmailer object
		$mail = $this->phpmailer_lib->load();

		//SMTP Configuration
		//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();
		$mail->HOST='smtp.gmail.com';
		$mail->SMTPAuth=true;
		$mail->username='sakshichaurasiya02@gmil.com';
		$mail->password='Muskan#12345';
		$mail->port=587;
		$mail->setFrom('chaurasiyasakshi5@gmail.com','Muskan');

		//Add replyto
		$mail->addReplyTo('18bcs091@ietdavv.edu.in','Muskan');

		//Add a Recipient
		$mail->addAddress("sakshichaurasiya02@gmail.com");

		//add subject
		$mail->subject='Send Email via SMTP using PHPMailer in Codeigniter';

		//set email format to HTML
		$mail->isHTML(true);

		//Email Body Content
		$mailContent='<h1> this is my page</h1>';
		$mail->Body=$mailContent;

		//send mail
		if($mail->send()){
			echo 'Message could not send';
			echo 'Mailer Error'.$mail->ErrorInfo;
		}
		else{
			echo 'message has been sent';
		}


	}
}

?>