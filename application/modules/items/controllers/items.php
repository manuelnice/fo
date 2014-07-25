<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Items extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('item_model');
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('items').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('items');
	$data['items'] = $this->item_model->get_all_records($table = 'items_saved',
		$array = array(
			'deleted' => 'No'),$join_table = '',$join_criteria = 't','item_id');
	$this->template
	->set_layout('users')
	->build('items',isset($data) ? $data : NULL);
	}
	function add()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('item_name', 'Description', 'required');
		$this->form_validation->set_rules('unit_price', 'Unit Price', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('operation_failed'));
				redirect($this->input->post('r_url'));
		}else{			
			$form_data = array(
			                'item_desc' => $this->input->post('item_name'),
			                'unit_cost' => $this->input->post('unit_price'),
			            );
			$this->db->insert('items_saved', $form_data); 

			$this->session->set_flashdata('response_status', 'success');
				$this->session->set_flashdata('message', lang('operation_successful'));
				redirect($this->input->post('r_url'));
		}
		}else{
		$this->load->view('modal/add_item');
		}
	}
	function edit()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('item_name', 'Description', 'required');
		$this->form_validation->set_rules('unit_price', 'Unit Price', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('operation_failed'));
				redirect($this->input->post('r_url'));
		}else{			
			$form_data = array(
			                'item_desc' => $this->input->post('item_name'),
			                'unit_cost' => $this->input->post('unit_price'),
			            );
			$this->db->where('item_id',$this->input->post('item_id'))->update('items_saved', $form_data); 

			$this->session->set_flashdata('response_status', 'success');
				$this->session->set_flashdata('message', lang('operation_successful'));
				redirect($this->input->post('r_url'));
		}
		}else{
		$data['item_details'] = $this->item_model->saved_item_details($this->uri->segment(3));
		$this->load->view('modal/edit_item',$data);
		}
	}
	function delete(){
		if ($this->input->post() ){
					$item_id = $this->input->post('item', TRUE);
					$this->db->where('item_id',$item_id)->delete('items_saved');

					$this->session->set_flashdata('response_status', 'success');
					$this->session->set_flashdata('message', lang('item_deleted_successfully'));
					redirect($this->input->post('r_url'));
		}else{
			$data['item_id'] = $this->uri->segment(3);
			$this->load->view('modal/delete_item',$data);
		}
		
	}
}

/* End of file invoices.php */
/* Location: ./application/controllers/invoices.php */