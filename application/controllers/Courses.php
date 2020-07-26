<?php 
defined ('BASEPATH') or exit('No direct access allowed');
/**
 * 
 */
class Courses extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		
	}
	public function index(){
		$this->load->view('include/allheaderfile');
		
	}
	public function courses(){

		$this->load->view('student/course');
	}

}

?>