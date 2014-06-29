<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Registered extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('user_model');
	}

	function all()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('users').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('clients');
	$data['users'] = $this->user_model->get_all_records($table = 'users',
		$array = array(
			'activated' => '1'),$join_table = 'account_details',$join_criteria = 'account_details.user_id = users.id','created');
	$this->template
	->set_layout('users')
	->build('users',isset($data) ? $data : NULL);
	}
	function add()
	{
		if ($this->input->post()) {
			redirect('users');
		}else{
		$this->load->view('modal/add_user');
		}
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
			redirect('user/registered/all');
		}	
	}
}

/* End of file users.php */
/* Location: ./application/controllers/users.php */