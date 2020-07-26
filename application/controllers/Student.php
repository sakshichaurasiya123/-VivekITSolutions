<?php
defined('BASEPATH') or exit ('No direct access allowed');
/**
 * 
 */
class Student extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->view('include/allheaderfile');
		
	}
	public function about(){
		$this->load->view('student/about');
	}
	public function login(){
		$this->load->view('student/login');
	}
}

?>