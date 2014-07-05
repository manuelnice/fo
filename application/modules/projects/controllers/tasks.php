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
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('project_model','project');
	}
	function edit()
	{		
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('task_name', 'Task Name', 'required');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('progress', 'progress', 'required');

		$project = $this->input->post('project', TRUE);
		$task_id = $this->input->post('task_id', TRUE);
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('task_update_failed'));
				redirect('projects/view/details/'.$project);
		}else{
		if ($this->input->post('visible') == 'on') { $visible = 'Yes'; } else { $visible = 'No'; }	
			$form_data = array(
			                'task_name' => $this->input->post('task_name'),
			                'project' => $this->input->post('project'),
			                'assigned_to' => $this->input->post('assigned_to'),
			                'visible' => $visible,
			                'progress' => $this->input->post('progress'),
			                'description' => $this->input->post('description'),
			                'estimated_hours' => $this->input->post('estimate'),
			                'added_by' => $this->tank_auth->get_user_id(),
			            );
			$this->db->where('t_id',$task_id)->update('tasks', $form_data); 

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('task_update_success'));
			redirect('projects/view/details/'.$project);
		}
	}else{
		$data['assign_to'] = $this->project->assign_to();
		$data['task_details'] = $this->project->task_details($this->uri->segment(4));
		$this->load->view('modal/edit_task',isset($data) ? $data : NULL);
	}
}
	function add()
	{		
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('task_name', 'Task Name', 'required');
		$this->form_validation->set_rules('project', 'Project', 'required');
		$this->form_validation->set_rules('progress', 'progress', 'required');

		$project = $this->input->post('project', TRUE);
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('task_add_failed'));
				redirect('projects/view/details/'.$project);
		}else{
		if ($this->input->post('visible') == 'on') { $visible = 'Yes'; } else { $visible = 'No'; }	
			$form_data = array(
			                'task_name' => $this->input->post('task_name'),
			                'project' => $this->input->post('project'),
			                'assigned_to' => $this->input->post('assigned_to'),
			                'visible' => $visible,
			                'progress' => $this->input->post('progress'),
			                'description' => $this->input->post('description'),
			                'estimated_hours' => $this->input->post('estimate'),
			                'added_by' => $this->tank_auth->get_user_id(),
			            );
			$this->db->insert('tasks', $form_data); 

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('task_add_success'));
			redirect('projects/view/details/'.$project);
		}
	}else{
		$data['assign_to'] = $this->project->assign_to();
		$this->load->view('modal/add_task',isset($data) ? $data : NULL);
	}
}
	function tracking()
	{
		$action = ucfirst($this->uri->segment(4));
		$project = $this->uri->segment(5);
		$task = $this->uri->segment(6);
		if ($action == 'Off') {			
			$task_start =  $this->project->get_task_start($task); //task start time
			$task_logged_time =  $this->project->get_task_logged_time($task); 
			$time_logged = (time() - $task_start) + $task_logged_time; //time already logged

			$this->db->set('timer_status', $action);
			$this->db->set('logged_time', $time_logged);
			$this->db->set('start_time', '');
			$this->db->where('t_id',$task)->update('tasks');
			$this->_log_timesheet($task,$task_start,time()); //log activity

		}else{
			$this->db->set('timer_status', $action);
			$this->db->set('start_time', time());
			$this->db->where('t_id',$task)->update('tasks');
		}
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('operation_successful'));
			redirect('projects/view/details/'.$project);
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
	function _log_timesheet($task,$start_time,$end_time){
			$this->db->set('task', $task);
			$this->db->set('start_time', $start_time);
			$this->db->set('end_time', $end_time);
			$this->db->insert('tasks_timer'); 
	}
}

/* End of file view.php */
/* Location: ./application/controllers/view.php */