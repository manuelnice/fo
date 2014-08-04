<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Profile extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'student') {
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
	$data['page'] = 'profile';
	$data['activities'] = $this->profile_model->get_activities();
	$this->template
	->set_layout('users')
	->build('profile',isset($data) ? $data : NULL);
	}
	function timeline()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'profile';
	$this->template
	->set_layout('users')
	->build('timeline',isset($data) ? $data : NULL);
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
	function help()
	{
		$this->load->model('profile_model');
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'home';
	$data['contributors'] = $this->profile_model->get_contributors();
	$data['faqs'] = $this->profile_model->get_faqs($visible = 'yes');
	$this->template
	->set_layout('users')
	->build('intro',isset($data) ? $data : NULL);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */