<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Conversation extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->model('msg_model');
	}

	function view()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('messages').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('messages');
	$user_from = $this->uri->segment(4)/1200;
	$data['conversations'] = $this->msg_model->get_conversations($user_from);
	$data['users'] = $this->msg_model->group_messages_by_users($this->tank_auth->get_user_id());
	$this->template
	->set_layout('users')
	->build('conversations',isset($data) ? $data : NULL);
	}
}

/* End of file messages.php */
/* Location: ./application/controllers/messages.php */