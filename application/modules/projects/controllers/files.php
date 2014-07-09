<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Files extends MX_Controller {

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
	function download()
	{
	$this->load->helper('download');
	$file_id = $this->uri->segment(4)/1800;
	$project_id = $this->uri->segment(5)/1200;
		if ($this->project->get_file($file_id))
			{
			$file = $this->project->get_file($file_id);
			if(file_exists('./resource/project-files/'.$file->file_name)){
			$data = file_get_contents('./resource/project-files/'.$file->file_name); // Read the file's contents
			force_download($file->file_name, $data);
		}else{
			$this->session->set_flashdata('message',$this->lang->line('operation_failed'));
				redirect('projects/view/details/'.$project_id);
			}
		}
		else
		{
			$this->session->set_flashdata('message',$this->lang->line('operation_failed'));
				redirect('projects/view/details/'.$project_id);
		}
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