<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package	Freelancer Office
 * 
 */


class Estimates extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('estimates_model','estimate');
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('estimates').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('estimates');
	$data['estimates'] = $this->estimate->get_all_records($table = 'estimates',
		$array = array(
			'est_deleted' => 'No'
			),
		$join_table = 'users',$join_criteria = 'users.id = estimates.client','date_saved');
	$this->template
	->set_layout('users')
	->build('estimates',isset($data) ? $data : NULL);
	}

	function search()
	{
		if ($this->input->post()) {
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('estimates').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('estimates');
	$keyword = $this->input->post('keyword', TRUE);
	$data['estimates'] = $this->estimate->search_estimate($keyword);
	$this->template
	->set_layout('users')
	->build('estimates',isset($data) ? $data : NULL);
		}else{
			redirect('estimates');
		}
	}
}

/* End of file estimates.php */