<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Projects extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('project_model');
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('projects').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('projects');
	$data['projects'] = $this->project_model->get_all_records($table = 'projects',
		$array = array(
			'proj_deleted' => 'No'),$join_table = 'account_details',$join_criteria = 'account_details.user_id = projects.client','date_created');
	$this->template
	->set_layout('users')
	->build('projects',isset($data) ? $data : NULL);
	}
	function view_projects()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('projects').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('projects');
	$data['projects'] = $this->project_model->get_all_records($table = 'projects',
		$array = array(
			'proj_deleted' => 'No'),$join_table = 'account_details',$join_criteria = 'account_details.user_id = projects.client','date_created');
	$this->template
	->set_layout('users')
	->build('projects',isset($data) ? $data : NULL);
	}
	function comment()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('comment', 'Comment', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('comment_failed'));
				redirect('projects/view/details/'.$this->input->get('project',TRUE));
		}else{		
		$project_id = $this->input->post('project_id');	
			$form_data = array(
			                'project' => $project_id,
			                'posted_by' => $this->tank_auth->get_user_id(),
			                'message' => $this->input->post('comment')
			            );
			$this->db->insert('comments', $form_data); 
			$activity = 'Added a comment to Project #'.$this->input->post('project_code');
			$this->_log_activity($project_id,$activity); //log activity
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('comment_successful'));
			redirect('projects/view/details/'.$this->input->get('project',TRUE));
			}
		}else{
		redirect('projects/view_projects/all');
		}
	}
	function delete()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('project_id', 'Project ID', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('delete_failed'));
				redirect('projects/view_projects/all');
		}else{			
			$this->db->delete('projects', array('project_id' => $this->input->post('project_id'))); 
			$this->db->delete('comments', array('project' => $this->input->post('project_id'))); 
			$this->db->delete('project_activities', array('project' => $this->input->post('project_id'))); 
			$this->db->delete('project_timer', array('project' => $this->input->post('project_id'))); 
			$this->db->delete('tasks', array('project' => $this->input->post('project_id'))); 
			$this->db->delete('bugs', array('project' => $this->input->post('project_id'))); 
			$this->db->delete('files', array('project' => $this->input->post('project_id'))); 
			// Log Activity
			$activity = 'Deleted Project #'.$this->input->post('project_id').' from the system';
			$this->_log_activity($project_id,$activity); //log activity

			//delete the files here
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('project_deleted_successfully'));
			redirect('projects/view_projects/all');
		}
		}else{
			$data['project_id'] = $this->uri->segment(3);
			$this->load->view('modal/delete_project',$data);
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

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */