<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package	Freelancer Office
 * 
 */


class View extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('client_model','user');
	}
	function details()
	{		
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('clients').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('clients');
		$data['clients'] = $this->user->get_all_records($table = 'users',
		$array = array(
			'role_id'=>'2','activated' => '1'),$join_table = 'account_details',$join_criteria = 'account_details.user_id = users.id','created');
		$data['user_details'] = $this->user->user_details($this->uri->segment(4)/1200);
		$data['user_invoices'] = $this->user->user_invoices($this->uri->segment(4)/1200);
		$data['user_projects'] = $this->user->user_projects($this->uri->segment(4)/1200);
		$this->template
		->set_layout('users')
		->build('client_details',isset($data) ? $data : NULL);
	}
	function clientinvoices()
	{		
		$data['user_invoices'] = $this->user->user_invoices($this->uri->segment(4));
		$this->load->view('client_invoices',isset($data) ? $data : NULL);
	}
	function clientprojects()
	{	
		$data['user_projects'] = $this->user->user_projects($this->uri->segment(4));
		$this->load->view('client_projects',isset($data) ? $data : NULL);
	}
	function payments()
	{		
		$data['user_payments'] = $this->user->user_payments($this->uri->segment(4));
		$this->load->view('client_payments',isset($data) ? $data : NULL);
	}
	function activities()
	{		
		$data['user_activities'] = $this->user->user_activities($this->uri->segment(4),$limit = 10);
		$this->load->view('client_activities',isset($data) ? $data : NULL);
	}
}

/* End of file view.php */