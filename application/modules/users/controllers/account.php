<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William M
| 
*/


class Account extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('user_model');
	}
	function index(){
		$this->active();
	}

	function active()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('users').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('clients');
	$data['users'] = $this->user_model->users($limit = '20',$offset = $this->uri->segment(4));
	$this->template
	->set_layout('users')
	->build('users',isset($data) ? $data : NULL);
	}
	function search()
	{
		if($this->input->post()){
			$this->load->module('layouts');
			$this->load->library('template');
			$this->template->title(lang('users').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
			$data['page'] = lang('clients');
			$keyword = $_POST['keyword'];
			$data['users'] = $this->user_model->user_search($keyword,$limit = 20);
			$this->template
			->set_layout('users')
			->build('users',isset($data) ? $data : NULL);
		}else{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('enter_search_keyword'));
			redirect('users/account');
		}	
	}
}

/* End of file users.php */
/* Location: ./application/controllers/users.php */