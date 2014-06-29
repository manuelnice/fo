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
		$this->load->model('invoice_model','invoice');
	}
	function view()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('invoices').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('invoices');
	$status = $this->uri->segment(4);
	if ($status != 'all') {
		$data['invoices'] = $this->invoice->get_all_records($table = 'invoices',
		$array = array(
			'inv_deleted' => 'No',
			'status' => $status
			),
		$join_table = 'users',$join_criteria = 'users.id = invoices.client','date_saved');
	}else{
	$data['invoices'] = $this->invoice->get_all_records($table = 'invoices',
		$array = array(
			'inv_deleted' => 'No'
			),
		$join_table = 'users',$join_criteria = 'users.id = invoices.client','date_saved');
		}
	$this->template
	->set_layout('users')
	->build('invoices',isset($data) ? $data : NULL);
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
			$activity = ucfirst('INVOICE #'.$this->input->post('reference_no').' created.');
			$this->_log_activity($invoice_id,$activity); //log activity
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('invoice_created_successfully'));
			redirect('invoices/manage/details/'.$invoice_id);
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
		$invoice_id = $this->input->post('invoice_id');
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('quantity', 'Quantity', 'required');
		$this->form_validation->set_rules('unit_cost', 'Unit Cost', 'required');
		$this->form_validation->set_rules('item_desc', 'Item Description', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('operation_failed'));
				redirect('invoices/manage/details/'.$invoice_id);
		}else{			
			$form_data = array(
			                'invoice_id' => $this->input->post('invoice_id'),
			                'item_desc' => $this->input->post('item_desc'),
			                'unit_cost' => $this->input->post('unit_cost'),
			                'quantity' => $this->input->post('quantity'),
			                'total_cost' => $this->input->post('unit_cost') * $this->input->post('quantity')
			            );
			$this->db->insert('items', $form_data); 
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('item_added_successfully'));
			redirect('invoices/manage/details/'.$invoice_id);
		}

		}else{

	redirect('invoices/manage/view/all');

		}
	}
	function details()
	{		
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('invoices').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('invoices');
		$data['invoice_details'] = $this->invoice->invoice_details($this->uri->segment(4));
		$data['invoice_activities'] = $this->invoice->invoice_activities($this->uri->segment(4));
		$data['invoice_items'] = $this->invoice->invoice_items($this->uri->segment(4));
		$data['invoices'] = $this->invoice->get_all_records($table = 'invoices',$array = array(
			'inv_deleted' => 'No',
			),$join_table = 'users',$join_criteria = 'users.id = invoices.client','date_saved');
		$data['payment_status'] = $this->invoice->payment_status($this->uri->segment(4));
		$this->template
		->set_layout('users')
		->build('invoice_details',isset($data) ? $data : NULL);
	}
	function pay()
	{
		if ($this->input->post()) {
			$invoice_id = $this->input->post('invoice_id');
			$paid_amount = $this->input->post('amount');

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('amount', 'Amount', 'required|integer|greater_than[0]');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('payment_failed'));
				redirect('invoices/manage/details/'.$invoice_id);
		}else{			
			$invoice_payable = $this->user_profile->invoice_payable($invoice_id);
			$invoice_paid = $this->user_profile->invoice_payment($invoice_id);
			$due = $invoice_payable - $invoice_paid;
			if ($paid_amount > $due) {
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('overpaid_amount'));
				redirect('invoices/manage/details/'.$invoice_id);
			}
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
			$activity = 'Payment of '.$this->config->item('default_currency').' '.$this->input->post('amount').' received and applied to INVOICE #'.$this->input->post('invoice_ref');

			$this->_log_activity($invoice_id,$activity); //log activity

			$this->_send_payment_email($invoice_id,$paid_amount); //send thank you email

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

	function _send_payment_email($invoice_id,$paid_amount){
			$client = $this->invoice->get_client($invoice_id);

			$client_address = $this->user_profile->get_user_details($client,'email');
			$data['paid_amount'] = $paid_amount;

			$params['recipient'] = $client_address;

			$params['subject'] = '[ '.$this->config->item('company_name').' ]'.' Payment Received';
			$params['message'] = $this->load->view('emails/thank_you_message',$data,TRUE);

			$params['attached_file'] = '';

			modules::run('fomailer/send_email',$params);
	}
	function emailinvoice(){
		if ($this->input->post()) {			
			$invoice_id = $this->input->post('invoice_id');
			$ref = $this->input->post('ref');
			$subject = $this->input->post('subject');
			$clientname = str_replace("{CLIENT}",$this->input->post('client_name'),$this->input->post('message'));
			$amount = str_replace("{AMOUNT}",$this->input->post('amount'),$clientname);
			$currency = str_replace("{CURRENCY}",$this->config->item('default_currency'),$amount);
			$link = str_replace("{LINK}",base_url().'invoices/view/'.$ref,$currency);
			$message = str_replace("{COMPANY}",$this->config->item('company_name'),$link);
			$this->_email_invoice($invoice_id,$message,$subject);

			$this->db->set('emailed', 'Yes');
			$this->db->set('date_sent', date ("Y-m-d H:i:s", time()));
			$this->db->where('inv_id',$invoice_id)->update('invoices'); 

			$activity = 'INVOICE #'.$ref. ' marked as Sent';

			$this->_log_activity($invoice_id,$activity); //log activity

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('invoice_sent_successfully'));
			redirect('invoices/manage/details/'.$invoice_id);
		}else{
			$data['invoice_details'] = $this->invoice->invoice_details($this->uri->segment(4));
			$this->load->view('modal/email_invoice',$data);
		}
	}
	function reminder(){
		if ($this->input->post()) {			
			$invoice_id = $this->input->post('invoice_id');
			$ref = $this->input->post('ref');
			$subject = $this->input->post('subject');
			$clientname = str_replace("{CLIENT}",$this->input->post('client_name'),$this->input->post('message'));
			$amount = str_replace("{AMOUNT}",$this->input->post('amount'),$clientname);
			$currency = str_replace("{CURRENCY}",$this->config->item('default_currency'),$amount);
			$link = str_replace("{LINK}",base_url().'invoices/view/'.$ref,$currency);
			$message = str_replace("{COMPANY}",$this->config->item('company_name'),$link);
			$this->_email_invoice($invoice_id,$message,$subject);

			$this->db->set('invoice', $invoice_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', 'Sent Invoice Reminder to client');
			$this->db->insert('invoice_activities'); 

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('reminder_sent_successfully'));
			redirect('invoices/manage/details/'.$invoice_id);
		}else{
			$data['invoice_details'] = $this->invoice->invoice_details($this->uri->segment(4));
			$this->load->view('modal/invoice_reminder',$data);
		}
	}
	function _email_invoice($invoice_id,$message,$subject){
			$client = $this->invoice->get_client($invoice_id);

			$client_address = $this->user_profile->get_user_details($client,'email');
			$invoice_details = $this->invoice->invoice_details($invoice_id);
			foreach ($invoice_details as $key => $inv) {
				$data['invoice_ref'] = $inv->reference_no;
				$reference_no = $inv->reference_no;
			}
			$invoice_payable = $this->user_profile->invoice_payable($invoice_id);
			$invoice_paid = $this->user_profile->invoice_payment($invoice_id);
			$due = $invoice_payable - $invoice_paid;
			$data['due_amount'] = $due;
			
			$params['recipient'] = $client_address;

			$params['subject'] = $subject;	
			$params['message'] = $message;
			
			$this->load->view('emails/invoice',$data);			
			// Get output html
			$html = $this->output->get_output();			
			// Load library
			$this->load->library('dompdf_gen');
			// Convert to PDF
			$params['attached_file'] = $this->dompdf->load_html($html);

			modules::run('fomailer/send_email',$params);
	}
	public function invoicepdf(){

			$data['invoice_details'] = $this->invoice->invoice_details($this->uri->segment(4));
			$data['payment_status'] = $this->invoice->payment_status($this->uri->segment(4));
			$data['invoice_items'] = $this->invoice->invoice_items($this->uri->segment(4));
			$data['page'] = lang('invoices');

		$this->load->view('emails/invoice',$data);
		// Get output html
		$html = $this->output->get_output();
		
		// Load library
		$this->load->library('dompdf_gen');
		
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("welcome.pdf");
		/*

			$this->load->helper (array('dompdf', 'file' ));
		$html = $this->load->view('emails/invoice',$data,TRUE);
		pdf_create( $html , 'Invoice # '.$this->uri->segment(4) );
		*/
				
	}
	function _log_activity($invoice_id,$activity){
			$this->db->set('module', 'invoices');
			$this->db->set('module_field_id', $invoice_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->insert('activities'); 
	}

}

/* End of file invoices.php */
/* Location: ./application/controllers/invoices.php */