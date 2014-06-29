<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Lecturer extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'lecturer') {
			$this->session->set_flashdata('message', 'Hey buddy, you are not allowed to access this page. Please contact the system admin for assistance.');
			redirect('');
		}
		$this->load->model('profile_model');
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'home';
	$data['upcoming_events'] = $this->profile_model->upcoming_events();
	$data['news'] = $this->profile_model->news();
	$this->template
	->set_layout('users')
	->build('welcome',isset($data) ? $data : NULL);
	}
	function activity()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'units';
	$this->template
	->set_layout('users')
	->build('profile_activity',isset($data) ? $data : NULL);
	}
	function edit()
	{
		if($_POST){

		}else{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'profile';
	$this->template
	->set_layout('users')
	->build('edit_profile',isset($data) ? $data : NULL);
	}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */