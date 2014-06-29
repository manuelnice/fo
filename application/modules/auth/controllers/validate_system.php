<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Validate_system extends MX_Controller
{
	
	function index()
	{
	$this->load->view('auth/auth_system',isset($data) ? $data : NULL);
	}

}

//end of file