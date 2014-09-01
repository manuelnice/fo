<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package	Freelancer Office
 * 
 */


class Inv_manage extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'collaborator') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('invoices/invoice_model','invoice');
	}
	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('invoices').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('invoices');
	$data['invoices'] = $this->invoice->get_all_records($table = 'invoices',
		$array = array(
			'client' => $this->tank_auth->get_user_id(),
			'inv_deleted' => 'No'
			),
		$join_table = 'users',$join_criteria = 'users.id = invoices.client','date_saved');
	$this->template
	->set_layout('users')
	->build('invoices/welcome',isset($data) ? $data : NULL);
	}

	
	function details()
	{		
		if($this->_invoice_access($this->uri->segment(4))){
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('invoices').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('invoices');
		$data['invoice_details'] = $this->invoice->invoice_details($this->uri->segment(4));
		$data['invoice_items'] = $this->invoice->invoice_items($this->uri->segment(4));
		$data['invoices'] = $this->invoice->get_all_records($table = 'invoices',$array = array(
			'client' => $this->tank_auth->get_user_id(),
			'inv_deleted' => 'No',
			),$join_table = 'users',$join_criteria = 'users.id = invoices.client','date_saved');
		$data['payment_status'] = $this->invoice->payment_status($this->uri->segment(4));
		$this->template
		->set_layout('users')
		->build('invoices/invoice_details',isset($data) ? $data : NULL);
		}else{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('collaborator/inv_manage');
		}
	}

	function search()
	{
		if ($this->input->post()) {
				$this->load->module('layouts');
				$this->load->library('template');
				$this->template->title(lang('invoices').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
				$data['page'] = lang('invoices');
				$keyword = $this->input->post('keyword', TRUE);
				$data['invoices'] = $this->invoice->search_invoice($keyword);
				$this->template
				->set_layout('users')
				->build('invoices/welcome',isset($data) ? $data : NULL);
			
		}else{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('enter_search_keyword'));
			redirect('collaborator/inv_manage');
		}
	
	}

	function _invoice_access($invoice){
		$client = $this->user_profile->get_invoice_details($invoice,'client');
		$user = $this->tank_auth->get_user_id();
		if ($client == $user) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function _log_activity($invoice_id,$activity,$icon){
			$this->db->set('module', 'invoices');
			$this->db->set('module_field_id', $invoice_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', $icon);
			$this->db->insert('activities'); 
	}

}

/* End of file inv_manage.php */