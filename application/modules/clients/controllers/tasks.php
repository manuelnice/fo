<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Tasks extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'client') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('projects/c_model','project');
	}
	function add()
	{		
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('task_name', 'Task Name', 'required');
		$this->form_validation->set_rules('project', 'Project', 'required');

		$project = $this->input->post('project', TRUE);
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('task_add_failed'));
				redirect('clients/projects/details/'.$project);
		}else{	
			$assigned_to = $this->user_profile->get_project_details($project,'assign_to');

			$form_data = array(
			                'task_name' => $this->input->post('task_name'),
			                'project' => $this->input->post('project'),
			                'assigned_to' => $assigned_to,
			                'visible' => 'Yes',
			                'progress' => '0',
			                'description' => $this->input->post('description'),
			                'estimated_hours' => $this->input->post('estimate'),
			                'added_by' => $this->tank_auth->get_user_id(),
			            );
			$this->db->insert('tasks', $form_data); 

			$this->_assigned_notification($project,$this->input->post('task_name'),$this->tank_auth->get_user_id()); 
			//send notification to assigned user

			$activity = 'Added a task '.$this->input->post('task_name');
			$this->_log_activity($project,$activity,$icon = 'fa-tasks'); //log activity

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('task_add_success'));
			redirect('clients/projects/details/'.$project);
		}
	}else{
		$this->load->view('modal/add_task',isset($data) ? $data : NULL);
	}
}
	function timesheet()
	{		
		$data['timesheets'] = $this->project->timesheets($this->uri->segment(4));
		$this->load->view('tabs/timesheets',isset($data) ? $data : NULL);
	}
	function tasks()
	{		
		$data['project_tasks'] = $this->project->project_tasks($this->uri->segment(4));
		$this->load->view('tabs/tasks',isset($data) ? $data : NULL);
	}

	function _assigned_notification($project,$task_name,$assigned_to){
			$project_details = $this->project->project_details($project);
			foreach ($project_details as $key => $p) {
				$project_title = $p->project_title;
			}

			$assigned_by = $this->user_profile->get_user_details($this->tank_auth->get_user_id(),'username');
			$data['project_title'] = $project_title;
			$data['assigned_by'] = $assigned_by;
			$data['project_id'] = $project;
			$data['task_name'] = $task_name;

			$params['recipient'] = $this->user_profile->get_user_details($assigned_to,'email');

			$params['subject'] = '[ '.$this->config->item('company_name').' ]'.' New task assigned to you by '.$assigned_by;
			$params['message'] = $this->load->view('emails/assigned_notification',$data,TRUE);

			$params['attached_file'] = '';

			modules::run('fomailer/send_email',$params);
	}
	function _log_timesheet($task,$start_time,$end_time){
			$this->db->set('task', $task);
			$this->db->set('start_time', $start_time);
			$this->db->set('end_time', $end_time);
			$this->db->insert('tasks_timer'); 
	}

	function _log_activity($project,$activity,$icon){
			$this->db->set('module', 'projects');
			$this->db->set('module_field_id', $project);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', $icon);
			$this->db->insert('activities'); 
	}
}

/* End of file view.php */
/* Location: ./application/controllers/view.php */