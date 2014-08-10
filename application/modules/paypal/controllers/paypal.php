<?php


class Paypal extends MX_Controller {

	function Paypal()
	{
		parent::__construct();		
		$this->load->library('tank_auth');
		$this->load->library('Paypal_Lib');
		$this->load->model('mdl_pay');
	}
	
	function index()
	{
		$this->form();
	}
	
	function pay()
	{
		$userid = $this->tank_auth->get_user_id();
		 
		$invoice = $this->mdl_pay->invoice_info($this->uri->segment(3));

		$invoice_cost = $this->user_profile->invoice_payable($invoice['inv_id']);

		$payment_made = $this->user_profile->invoice_payment($invoice['inv_id']);
		$tax = ($this->config->item('default_tax')/100) * $invoice_cost;
		$invoice_due = ($invoice_cost + $tax) - $payment_made;

		$data['invoice_info'] = array('item_name'=> $invoice['reference_no'], 
			'item_number' => $invoice['inv_id'],
			'amount' => $invoice_due) ;
		if ($this->config->item('paypal_live') == 'FALSE') {
			$paypalurl = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
		}else{
			$paypalurl = 'https://www.paypal.com/cgi-bin/webscr';
		}
		$data['paypal_url'] = $paypalurl;
		
	$this->load->view('form',$data);
	}
	function cancel()
	{
	$data['breadcrumbs'] = array('name' => 'My Purchases');
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Author Purchases | Bootstrapstore');
	$data['active_menu'] = lang('downloads');
	$this->session->set_flashdata('message', 'Your payment was cancelled.');
	$this->template
	->set_layout('public')
	->build('paypal/cancel',isset($data) ? $data : NULL);
	}
	
	function success()
	{
        if($_POST){
	$data['breadcrumbs'] = array('name' => 'My Purchases');
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Author Purchases | Bootstrapstore');
	$data['active_menu'] = lang('downloads');
	$this->session->set_flashdata('message', 'Thanks for purchasing our Premium Bootstrap Themes.');
	$data['pp_info'] = $this->input->post();
	$this->template
	->set_layout('public')
	->build('paypal/success',isset($data) ? $data : NULL);
        }else{
            $this->session->set_flashdata('message', 'Something went wrong please check your Downloads page. If your item doesn\'t appear for a while please contact us');
        redirect('themes/browse/all');
        }
	}
}


////end 