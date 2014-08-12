<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Messages extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'client') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('messages/msg_model');
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('messages').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('messages');
	$data['messages'] = $this->msg_model->get_all_records($table = 'messages',
		$array = array(
			'user_to'=>$this->tank_auth->get_user_id(),'deleted' => 'No'),$join_table = 'users',$join_criteria = 'users.id = messages.user_from','date_received');
	$data['users'] = $this->msg_model->group_messages_by_users($this->tank_auth->get_user_id());
	$this->template
	->set_layout('users')
	->build('messages/welcome',isset($data) ? $data : NULL);
	}
}

/* End of file messages.php */
/* Location: ./application/controllers/messages.php */