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
	
	function add()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('reference_no', 'Reference No', 'required');
		$this->form_validation->set_rules('client', 'Client', 'required');
		$this->form_validation->set_rules('due_date', 'Due Date', 'required');

		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('operation_failed'));
				redirect('estimates');
		}else{			
			$form_data = array(
			                'reference_no' => $this->input->post('reference_no'),
			                'client' => $this->input->post('client'),
			                'due_date' => $this->input->post('due_date'),
			                'notes' => $this->input->post('notes'),
			            );
			$this->db->insert('estimates', $form_data); 
			$estimate_id = $this->db->insert_id();

			$activity = ucfirst('Estimate #'.$this->input->post('reference_no').' created.');
			$this->_log_activity($estimate_id,$activity,$icon = 'fa-plus'); //log activity

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('estimate_created_successfully'));
			redirect('estimates/manage/details/'.$estimate_id);
		}

		}else{


	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('estimates').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('estimates');
	$data['clients'] = $this->estimate->clients();
	$data['estimates'] = $this->estimate->get_all_records($table = 'estimates',
		$array = array(
			'est_deleted' => 'No',
			),
		$join_table = 'users',$join_criteria = 'users.id = estimates.client','date_saved');
	$this->template
	->set_layout('users')
	->build('create_estimate',isset($data) ? $data : NULL);

		}
	}

	function edit()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('reference_no', 'Reference No', 'required');
		$this->form_validation->set_rules('client', 'Client', 'required');
		$this->form_validation->set_rules('due_date', 'Due Date', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('operation_failed'));
				redirect('estimates');
		}else{	
		$estimate_id = $this->input->post('estimate', TRUE);	

			$form_data = array(
			                'client' => $this->input->post('client'),
			                'due_date' => $this->input->post('due_date'),
			                'notes' => $this->input->post('notes'),
			            );
			$this->db->where('est_id',$estimate_id)->update('estimates', $form_data);

			$activity = ucfirst($this->tank_auth->get_username().' edited ESTIMATE #'.$this->input->post('reference_no'));
			$this->_log_activity($estimate_id,$activity,$icon = 'fa-pencil'); //log activity

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('estimate_edited_successfully'));
			redirect('estimates/manage/details/'.$estimate_id);
		}

		}else{


	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('estimates').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('estimates');
	$data['clients'] = $this->estimate->clients();
	$data['estimates'] = $this->estimate->get_all_records($table = 'estimates',
		$array = array(
			'est_deleted' => 'No',
			),
		$join_table = 'users',$join_criteria = 'users.id = estimates.client','date_saved');
	$data['estimate_details'] =  $this->estimate->estimate_details($this->uri->segment(4));
	$this->template
	->set_layout('users')
	->build('edit_estimate',isset($data) ? $data : NULL);

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
	function timeline()
	{		
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('estimates').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('estimates');
		$data['estimate_details'] = $this->estimate->estimate_details($this->uri->segment(4));
		$data['activities'] = $this->estimate->estimate_activities($this->uri->segment(4));
		$data['estimates'] = $this->estimate->get_all_records($table = 'estimates',$array = array(
			'est_deleted' => 'No',
			),$join_table = 'users',$join_criteria = 'users.id = estimates.client','date_saved');
		$this->template
		->set_layout('users')
		->build('timeline',isset($data) ? $data : NULL);
	}

	function _log_activity($est_id,$activity,$icon){
			$this->db->set('module', 'estimates');
			$this->db->set('module_field_id', $est_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', $icon);
			$this->db->insert('activities'); 
	}

}

/* End of file invoices.php */
/* Location: ./application/controllers/invoices.php */