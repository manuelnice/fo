<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Messages extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		$this->load->model('msg_model');
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('messages').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('messages');
	$data['messages'] = $this->msg_model->get_all_records($table = 'messages',
		$array = array(
			'user_to'=>$this->tank_auth->get_user_id(),'deleted' => 'No'),$join_table = 'users',$join_criteria = 'users.id = messages.user_from','date_received');
	$data['users'] = $this->msg_model->group_messages_by_users($this->tank_auth->get_user_id());
	$this->template
	->set_layout('users')
	->build('messages',isset($data) ? $data : NULL);
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

/* End of file messages.php */
/* Location: ./application/controllers/messages.php */