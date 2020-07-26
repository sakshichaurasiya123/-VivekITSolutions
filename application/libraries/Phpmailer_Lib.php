<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/**
 * 
 */
class PHPMailer_Lib
{
	
	public function __construct()
	{
		# code...
		log_message('Debug','PHPMailer class is loaded');
	}
	public function load(){
		require_once APPPATH.'third_party/PHPMailer/Exception.php';
		require_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
		require_once APPPATH.'third_party/PHPMailer/SMTP.php';

		$mail=new PHPMailer;
		return $mail;
	}
}

?>