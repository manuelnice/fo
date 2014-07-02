<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Tabs extends MX_Controller {

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
	function timeline()
	{		
		$data['timelines'] = $this->project->project_activities($this->uri->segment(4));
		$this->load->view('tabs/timeline',isset($data) ? $data : NULL);
	}
	function bugs()
	{	
		$data['bugs'] = $this->project->project_bugs($this->uri->segment(4));
		$this->load->view('tabs/bugs',isset($data) ? $data : NULL);
	}
	function timesheet()
	{		
		$data['timesheets'] = $this->project->timesheets($this->uri->segment(4));
		$this->load->view('tabs/timesheet',isset($data) ? $data : NULL);
	}
	function activities()
	{		
		$data['user_activities'] = $this->user->user_activities($this->uri->segment(4));
		$this->load->view('client_activities',isset($data) ? $data : NULL);
	}
}

/* End of file view.php */
/* Location: ./application/controllers/view.php */