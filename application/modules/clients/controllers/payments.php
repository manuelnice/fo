<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Payments extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'client') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('invoices/invoice_model','invoice');
	}
	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('payments').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('payments');
	$status = $this->uri->segment(4);
	$data['payments'] = $this->invoice->get_all_records($table = 'payments',
		$array = array(
			'paid_by' => $this->tank_auth->get_user_id(),
			'inv_deleted' => 'No'
			),
		$join_table = 'users',$join_criteria = 'users.id = payments.paid_by','created_date');
	$this->template
	->set_layout('users')
	->build('invoices/payments',isset($data) ? $data : NULL);
	}

	function details()
	{		
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('payments').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('payments');
		$data['payment_details'] = $this->invoice->payment_details($this->uri->segment(4));
		$data['payments'] = $this->invoice->get_all_records($table = 'payments',
		$array = array(
			'inv_deleted' => 'No'
			),
		$join_table = 'users',$join_criteria = 'users.id = payments.paid_by','created_date');
		$this->template
		->set_layout('users')
		->build('payment_details',isset($data) ? $data : NULL);
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