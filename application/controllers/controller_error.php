<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_error extends CI_Controller {

	public function index()
	{	
		
		$this->load->view('error_message');
		$this->load->view('footer');
	}
}
	