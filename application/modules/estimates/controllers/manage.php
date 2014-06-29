<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Manage extends MX_Controller {

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
	function view()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('estimates').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('estimates');
	$status = $this->uri->segment(4);
	if ($status != 'all') {
		$data['estimates'] = $this->estimate->get_all_records($table = 'estimates',
		$array = array(
			'est_deleted' => 'No',
			'status' => $status
			),
		$join_table = 'users',$join_criteria = 'users.id = estimates.client','date_saved');
	}else{
	$data['estimates'] = $this->estimate->get_all_records($table = 'estimates',
		$array = array(
			'est_deleted' => 'No'
			),
		$join_table = 'users',$join_criteria = 'users.id = estimates.client','date_saved');
		}
	$this->template
	->set_layout('users')
	->build('estimates',isset($data) ? $data : NULL);
	}

	function add()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('reference_no', 'Reference No', 'required');
		$this->form_validation->set_rules('client', 'Client', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('operation_failed'));
				redirect('invoices/manage/by_status/all');
		}else{			
			$form_data = array(
			                'reference_no' => $this->input->post('reference_no'),
			                'client' => $this->input->post('client'),
			                'due_date' => $this->input->post('due_date'),
			                'notes' => $this->input->post('notes'),
			                'allow_paypal' => $this->input->post('allow_paypal'),
			                'recurring' => $this->input->post('recurring'),
			                'r_freq' => $this->input->post('r_freq')
			            );
			$this->db->insert('invoices', $form_data); 
			$invoice_id = $this->db->insert_id();
			$activity = ucfirst('Invoice #'.$this->input->post('reference_no').' created.');
			$this->_log_activity($invoice_id,$activity); //log activity
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('invoice_created_successfully'));
			redirect('invoices/manage/view/'.$invoice_id);
		}

		}else{


	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('invoices').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('add_invoice');
	$data['clients'] = $this->invoice->clients();
	$this->template
	->set_layout('users')
	->build('create_invoice',isset($data) ? $data : NULL);

		}
	}
	function item()
	{
		if ($this->input->post()) {
		$est_id = $this->input->post('estimate_id');
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('quantity', 'Quantity', 'required');
		$this->form_validation->set_rules('unit_cost', 'Unit Cost', 'required');
		$this->form_validation->set_rules('item_desc', 'Item Description', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('operation_failed'));
				redirect('estimates/manage/details/'.$est_id);
		}else{			
			$form_data = array(
			                'estimate_id' => $this->input->post('estimate_id'),
			                'item_desc' => $this->input->post('item_desc'),
			                'unit_cost' => $this->input->post('unit_cost'),
			                'quantity' => $this->input->post('quantity'),
			                'total_cost' => $this->input->post('unit_cost') * $this->input->post('quantity')
			            );
			$this->db->insert('estimate_items', $form_data); 
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('item_added_successfully'));
			redirect('estimates/manage/details/'.$est_id);
		}

		}else{

	redirect('estimates/manage/view/all');

		}
	}
	function details()
	{		
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('estimates').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('estimates');
		$data['estimate_details'] = $this->estimate->estimate_details($this->uri->segment(4));
		$data['estimate_activities'] = $this->estimate->estimate_activities($this->uri->segment(4));
		$data['estimate_items'] = $this->estimate->estimate_items($this->uri->segment(4));
		$data['estimates'] = $this->estimate->get_all_records($table = 'estimates',$array = array(
			'est_deleted' => 'No',
			),$join_table = 'users',$join_criteria = 'users.id = estimates.client','date_saved');
		$this->template
		->set_layout('users')
		->build('estimate_details',isset($data) ? $data : NULL);
	}
	function pay()
	{
		if ($this->input->post()) {
			$invoice_id = $this->input->post('invoice_id');

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('payment_failed'));
				redirect('invoices/manage/details/'.$invoice_id);
		}else{			
			$form_data = array(
			                'invoice' => $this->input->post('invoice_id'),
			                'payment_method' => $this->input->post('payment_method'),
			                'amount' => $this->input->post('amount'),
			                'trans_id' => $this->input->post('trans_id'),
			                'notes' => $this->input->post('notes'),
			                'month_paid' => date('m'),
			                'year_paid' => date('Y'),
			            );
			$this->db->insert('payments', $form_data); 
			$activity = 'Payment of '.$this->config->item('default_currency').' '.$this->input->post('amount').'received by '.$this->tank_auth->get_username();
			$this->_log_activity($invoice_id,$activity); //log activity
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('payment_added_successfully'));
			redirect('invoices/manage/details/'.$invoice_id);
			}
		}else{
			$data['invoice_id'] = $this->uri->segment(4);
			$data['reference'] = $this->uri->segment(5);
			$data['payment_methods'] = $this->invoice->payment_methods();
			$this->load->view('modal/pay_invoice',$data);
		}
	}

	function _log_activity($invoice_id,$activity){
			$this->db->set('invoice', $invoice_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->insert('invoice_activities'); 
	}

}

/* End of file invoices.php */
/* Location: ./application/controllers/invoices.php */