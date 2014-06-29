<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class About extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->tank_auth->is_logged_in()) {
			$this->session->set_flashdata('message',lang('login_required'));
			redirect('auth/login');
		}
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'about';
	$this->template
	->set_layout('users')
	->build('about',isset($data) ? $data : NULL);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */