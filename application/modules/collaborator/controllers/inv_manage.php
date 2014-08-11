<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
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
	function _log_activity($invoice_id,$activity,$icon){
			$this->db->set('module', 'invoices');
			$this->db->set('module_field_id', $invoice_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', $icon);
			$this->db->insert('activities'); 
	}

}

/* End of file invoices.php */
/* Location: ./application/controllers/invoices.php */