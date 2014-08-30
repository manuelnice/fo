<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William M.
| 
*/


class Estimates extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'collaborator') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('estimates/estimate_model','estimate');
	}
	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('estimates').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('estimates');
	$data['estimates'] = $this->estimate->get_all_records($table = 'estimates',
		$array = array(
			'client' => $this->tank_auth->get_user_id(),
			'est_deleted' => 'No'
			),
		$join_table = 'users',$join_criteria = 'users.id = estimates.client','date_saved');
	$this->template
	->set_layout('users')
	->build('estimates/welcome',isset($data) ? $data : NULL);
	}

	function search()
	{
		if ($this->input->post()) {
				$this->load->module('layouts');
				$this->load->library('template');
				$this->template->title(lang('estimates').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
				$data['page'] = lang('estimates');
				$keyword = $this->input->post('keyword', TRUE);
				$data['estimates'] = $this->estimate->search_estimate($keyword);
				$this->template
				->set_layout('users')
				->build('estimates/welcome',isset($data) ? $data : NULL);
			
		}else{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('enter_search_keyword'));
			redirect('collaborator/estimates');
		}
	
	}
	
	function details()
	{		
		if($this->_estimate_access($this->uri->segment(4))){
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('estimates').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('estimates');
		$data['estimate_details'] = $this->estimate->estimate_details($this->uri->segment(4));
		$data['estimate_items'] = $this->estimate->estimate_items($this->uri->segment(4));
		$data['estimates'] = $this->estimate->get_all_records($table = 'estimates',
		$array = array(
			'client' => $this->tank_auth->get_user_id(),
			'est_deleted' => 'No'
			),
		$join_table = 'users',$join_criteria = 'users.id = estimates.client','date_saved');
		$this->template
		->set_layout('users')
		->build('estimates/estimate_details',isset($data) ? $data : NULL);
		}else{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('collaborator/estimates');
		}
	}

	function status(){
		$estimate = $this->uri->segment(5);
		$ref_no = $this->uri->segment(6);
			if ($this->uri->segment(4) == 'accepted') {
				$status = 'Accepted';
			}else{
				$status = 'Declined';
			}
			$this->db->set('status', $status);
			$this->db->where('est_id',$estimate)->update('estimates'); 

			$activity = 'EST #'.$this->uri->segment(6). ' marked as '.$this->uri->segment(4);

			$this->_log_activity($estimate,$activity,$icon = 'fa-paperclip'); //log activity	 
			$this->_estimate_changed($ref_no,$status); //send email notification	 

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('estimate_'.$this->uri->segment(4).'_successfully'));
			redirect('collaborator/estimates/details/'.$estimate);

	}

	function _estimate_changed($ref_no,$status){

			$company_address = $this->config->item('company_email');
			$data['ref_no'] = $ref_no;
			$data['status'] = $status;

			$params['recipient'] = $company_address;

			$params['subject'] = '[ '.$this->config->item('company_name').' ]'.' Estimate '.$ref_no.' '.$status;
			$params['message'] = $this->load->view('emails/estimate_status',$data,TRUE);

			$params['attached_file'] = '';

			modules::run('fomailer/send_email',$params);
	}

	function _estimate_access($estimate){
		$client = $this->user_profile->estimate_details($estimate,'client');
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

/* End of file invoices.php */
/* Location: ./application/controllers/invoices.php */