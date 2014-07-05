<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class View extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('project_model','project');
	}
	function details()
	{		
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('projects').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('projects');
		$data['project_details'] = $this->project->project_details($this->uri->segment(4));
		$data['project_activities'] = $this->project->project_activities($this->uri->segment(4));
		$data['project_comments'] = $this->project->project_comments($this->uri->segment(4));
		$data['project_tasks'] = $this->project->project_tasks($this->uri->segment(4));
		$data['project_files'] = $this->project->project_files($this->uri->segment(4));
		$this->template
		->set_layout('users')
		->build('project_details',isset($data) ? $data : NULL);
	}
	function add()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('project_code', 'Project Code', 'required');
		$this->form_validation->set_rules('project_title', 'Project Title', 'required');
		$this->form_validation->set_rules('client', 'Client', 'required');
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');
		$this->form_validation->set_rules('due_date', 'Due Date', 'required');
		$this->form_validation->set_rules('assigned_to', 'Assigned To', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('operation_failed'));
				redirect('projects/view_projects/all');
		}else{			
			$form_data = array(
			                'project_code' => $this->input->post('project_code'),
			                'project_title' => $this->input->post('project_title'),
			                'client' => $this->input->post('client'),
			                'start_date' => $this->input->post('start_date'),
			                'due_date' => $this->input->post('due_date'),
			                'progress' => $this->input->post('progress'),
			                'description' => $this->input->post('description'),
			                'assign_to' => $this->input->post('assigned_to'),
			                 'currency' => $this->input->post('currency')
			            );
			$this->db->insert('projects', $form_data); 
			$project_id = $this->db->insert_id();
			$activity = ucfirst($this->tank_auth->get_username()).' created a project #'.$this->input->post('project_code');
			$this->_log_activity($project_id,$activity); //log activity
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('project_added_successfully'));
			redirect('projects/view_projects/all');
		}
		}else{
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('projects').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('projects');
		$data['assign_to'] = $this->project->assign_to();
		$data['clients'] = $this->project->clients();
		$this->template
		->set_layout('users')
		->build('create_project',isset($data) ? $data : NULL);
		}
	}
	function edit()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('project_code', 'Project Code', 'required');
		$this->form_validation->set_rules('project_title', 'Project Title', 'required');
		$this->form_validation->set_rules('client', 'Client', 'required');
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');
		$this->form_validation->set_rules('due_date', 'Due Date', 'required');
		$this->form_validation->set_rules('assigned_to', 'Assigned To', 'required');
		$project_id = $this->input->post('project_id');	
		
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('operation_failed'));
				redirect('projects/view/details/'.$project_id);
		}else{	
			
			$form_data = array(
			                'project_title' => $this->input->post('project_title'),
			                'client' => $this->input->post('client'),
			                'start_date' => $this->input->post('start_date'),
			                'due_date' => $this->input->post('due_date'),
			                'progress' => $this->input->post('progress'),
			                'assign_to' => $this->input->post('assigned_to'),
			                'description' => $this->input->post('description')
			            );
			$this->db->where('project_id',$project_id)->update('projects', $form_data);
			$activity = ucfirst($this->tank_auth->get_username()).' edited a project #'.$this->input->post('project_code');
			$this->_log_activity($project_id,$activity); //log activity
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('project_edited_successfully'));
			redirect('projects/view/details/'.$project_id);
		}
		}else{
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('projects').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('projects');
		$data['assign_to'] = $this->project->assign_to();
		$data['clients'] = $this->project->clients();
		$data['project_details'] = $this->project->project_details($this->uri->segment(4));
		$this->template
		->set_layout('users')
		->build('edit_project',isset($data) ? $data : NULL);
		}
	}
	function _log_activity($project_id,$activity){
			$this->db->set('module', 'projects');
			$this->db->set('module_field_id', $project_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->insert('activities'); 
	}
}

/* End of file view.php */
/* Location: ./application/controllers/view.php */