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
	function view()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'transcripts';
	$data['r_details'] = $this->exam_model->get_all_records($table = 'results',
		$array = array(
			'r_id' => $this->uri->segment(3),'deleted' => 'No'),$join_table = 'units',$join_criteria = 'units.u_id = results.unit','date_posted');
	$this->template
	->set_layout('users')
	->build('view_result',isset($data) ? $data : NULL);
	}
	function create_issue()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('message', 'Oops! Something failed. Your message was not delivered.');
				redirect($this->input->post('r_url'));
		}else{			
			$form_data = array(
			                'exam_id' => $this->input->post('exam_id'),
			                'sent_by' => $this->tank_auth->get_user_id(),
			                'message' => $this->input->post('message')
			            );
			$this->db->insert('exam_issues', $form_data); 
			$this->session->set_flashdata('message', 'Your Issue has been submitted successfully!');
			redirect($this->input->post('r_url'));
		}
		}else{
		$data['exam_id'] = $this->uri->segment(3);
		$this->load->view('modal/create_issue',$data);
		}
	}
}

/* End of file invoices.php */
/* Location: ./application/controllers/invoices.php */