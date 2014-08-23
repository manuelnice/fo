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
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'client') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('projects/c_model','project_model');
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('projects').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('projects');
	$data['projects'] = $this->project_model->get_all_records($table = 'projects',
		$array = array(
			'client' => $this->tank_auth->get_user_id(),
			'proj_deleted' => 'No'),$join_table = '',$join_criteria = '','date_created');
	$this->template
	->set_layout('users')
	->build('projects/projects',isset($data) ? $data : NULL);
	}

	function search()
	{
		if ($this->input->post()) {
				$this->load->module('layouts');
				$this->load->library('template');
				$this->template->title(lang('projects').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
				$data['page'] = lang('projects');
				$keyword = $this->input->post('keyword', TRUE);
				$data['projects'] = $this->project_model->search_project($keyword);
				$this->template
				->set_layout('users')
				->build('projects/projects',isset($data) ? $data : NULL);
			
		}else{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('enter_search_keyword'));
			redirect('clients/projects');
		}
	
	}
	function details()
	{		
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title(lang('projects').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
		$data['page'] = lang('projects');
		$data['project_details'] = $this->project_model->project_details($this->uri->segment(4));
		$data['project_activities'] = $this->project_model->project_activities($this->uri->segment(4));
		$data['project_comments'] = $this->project_model->project_comments($this->uri->segment(4));
		$data['project_tasks'] = $this->project_model->project_tasks($this->uri->segment(4));
		$data['project_files'] = $this->project_model->project_files($this->uri->segment(4));
		$this->template
		->set_layout('users')
		->build('projects/project_details',isset($data) ? $data : NULL);
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
				redirect('clients/projects/details/'.$this->input->get('project',TRUE));
		}else{		
		$project_id = $this->input->post('project_id');	
			$form_data = array(
			                'project' => $project_id,
			                'posted_by' => $this->tank_auth->get_user_id(),
			                'message' => $this->input->post('comment')
			            );
			$this->db->insert('comments', $form_data); 
			$activity = 'Added a comment to Project #'.$this->input->post('project_code');
			$this->_log_activity($project_id,$activity,$icon='fa-comment'); //log activity

			$this->_comment_notification($project_id); //send notification to the administrator

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('comment_successful'));
			redirect('clients/projects/details/'.$this->input->get('project',TRUE));
			}
		}else{
		redirect('clients/projects');
		}
	}
	function replies()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('comment_failed'));
				redirect('clients/projects/details/'.$this->input->post('project',TRUE));
		}else{		
		$project_id = $this->input->post('project');	
			$form_data = array(
			                'parent_comment' => $this->input->post('comment', TRUE),
			                'reply_msg' => $this->input->post('message'),
			                'replied_by' => $this->tank_auth->get_user_id()
			            );
			$this->db->insert('comment_replies', $form_data); 

			$this->_comment_notification($project_id); //send notification to the administrator

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('comment_replied_successful'));
			redirect('clients/projects/details/'.$this->input->post('project',TRUE));
			}
		}else{
		$data['comment'] = $this->input->get('c', TRUE);
		$data['project'] = $this->input->get('p', TRUE);
		$this->load->view('modal/comment_reply',isset($data) ? $data : NULL);
		}
	}
	function delcomment()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('comment', 'Comment ID', 'required');
		$this->form_validation->set_rules('project', 'Project ID', 'required');
		$project_id = $this->input->post('project', TRUE);
		$comment_id = $this->input->post('comment', TRUE);

		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('comment_delete_failed'));
				redirect('clients/projects/details/'.$project_id);
		}else{			
			$this->db->set('deleted', 'Yes');
			$this->db->where('comment_id',$comment_id)->update('comments'); 
	
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('comment_deleted'));
			redirect('clients/projects/details/'.$project_id);
			}
		}else{
			$data['comment_id'] = $this->input->get('c', TRUE);
			$data['project_id'] = $this->input->get('p', TRUE);
			$this->load->view('modal/delete_comment',$data);
		}
	}
	

	function _comment_notification($project){
			$project_details = $this->project_model->project_details($project);
			foreach ($project_details as $key => $p) {
				$project_title = $p->project_title;
			}

			$posted_by = $this->user_profile->get_user_details($this->tank_auth->get_user_id(),'username');
			$data['project_title'] = $project_title;
			$data['posted_by'] = $posted_by;
			$data['project_id'] = $project;

			$params['recipient'] = $this->config->item('company_email');

			$params['subject'] = '[ '.$this->config->item('company_name').' ]'.' New comment received from '.$posted_by;
			$params['message'] = $this->load->view('emails/comment_notification',$data,TRUE);

			$params['attached_file'] = '';

			modules::run('fomailer/send_email',$params);
	}

	function _log_activity($project_id,$activity,$icon){
			$this->db->set('module', 'projects');
			$this->db->set('module_field_id', $project_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', $icon);
			$this->db->insert('activities'); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */