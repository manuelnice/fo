<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Bug_view extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'client') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('bugs/bugs_model');
	}
	function details()
	{		
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('bug_tracking').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('bug_tracking');
		$data['bugs'] = $this->bugs_model->bugs();
		$data['bug_details'] = $this->bugs_model->bug_details($this->uri->segment(4));
		$data['bug_activities'] = $this->bugs_model->bug_activities($this->uri->segment(4));
		$data['bug_comments'] = $this->bugs_model->bug_comments($this->uri->segment(4));
		$this->template
		->set_layout('users')
		->build('bugs/bug_details',isset($data) ? $data : NULL);
	}
	function add()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('issue_ref', 'Issue Ref', 'required');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('issue_not_submitted'));
				redirect('collaborator/bugs');
		}else{			
			$form_data = array(
			                'issue_ref' => $this->input->post('issue_ref'),
			                'project' => $this->input->post('project'),
			                'reporter' => $this->tank_auth->get_user_id(),
			                'assigned_to' => $this->tank_auth->get_user_id(),
			                'bug_status' => 'Unconfirmed',
			                'priority' => $this->input->post('priority'),
			                'bug_description' => $this->input->post('description'),
			                'last_modified' => date("Y-m-d H:i:s"),
			            );
			$this->db->insert('bugs', $form_data); 
			$bug_id = $this->db->insert_id();
			$activity = 'Created an Issue #'.$this->input->post('issue_ref');
			$this->_log_bug_activity($bug_id,$activity,$icon = 'fa-plus'); //log activity
			
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('issue_submitted_successfully'));
			redirect('collaborator/bugs');
		}
		}else{
			$data['projects'] = $this->bugs_model->projects();
		$this->load->view('bugs/add_bug',$data);
		}
	}
	function edit()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('issue_ref', 'Issue Ref', 'required');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('issue_not_edited'));
				redirect('collaborator/bugs');
		}else{	
		$bug_id	 =  $this->input->post('bug_id');
			$form_data = array(
			                'issue_ref' => $this->input->post('issue_ref'),
			                'project' => $this->input->post('project'),
			                'priority' => $this->input->post('priority'),
			                'bug_description' => $this->input->post('description'),
			                'last_modified' => date("Y-m-d H:i:s"),
			            );
			$this->db->where('bug_id',$bug_id)->update('bugs', $form_data); 
			$activity = 'Edited an Issue #'.$this->input->post('issue_ref');
			$this->_log_bug_activity($bug_id,$activity,$icon = 'fa-edit'); //log activity

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('issue_edited_successfully'));
			redirect('collaborator/bug_view/details/'.$bug_id);
		}
		}else{
		$data['projects'] = $this->bugs_model->projects();
		$data['bug_details'] = $this->bugs_model->bug_details($this->uri->segment(4));
		$this->load->view('bugs/edit_bug',$data);
		}
	}
	function _log_bug_activity($bug_id,$activity,$icon){
			$this->db->set('module', 'bugs');
			$this->db->set('module_field_id', $bug_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', $icon);
			$this->db->insert('activities'); 
	}
}

/* End of file view.php */
/* Location: ./application/controllers/view.php */