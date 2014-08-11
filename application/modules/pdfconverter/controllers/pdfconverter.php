<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Developed by William M.
|--------------------------------------------------------------------------
|
|
*/


class PdfConverter extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if (!$this->tank_auth->is_logged_in()) {
			$this->session->set_flashdata('message', 'Hey buddy, you are not allowed to access this page. Please contact the system admin for assistance.');
			redirect('');
		}
		$this->load->model('invoice_model','invoice');
	}

	function invoice(){

			$data['invoice_details'] = $this->invoice->invoice_details($this->uri->segment(3));
			$data['payment_status'] = $this->invoice->payment_status($this->uri->segment(3));
			$data['invoice_items'] = $this->invoice->invoice_items($this->uri->segment(3));
			$data['page'] = lang('invoices');

			$this->load->view('invoice',$data);	
			$html = $this->output->get_output();
			$this->load->library('dompdf_gen');

			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream('Invoice #'.$this->uri->segment(4));
				
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */