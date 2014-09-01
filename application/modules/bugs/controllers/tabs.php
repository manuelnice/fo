<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package	Freelancer Office
 * 
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
		$this->load->model('bugs_model','bug');
	}
	function activities()
	{		
		$data['activities'] = $this->bug->bug_activities($this->uri->segment(4));
		$this->load->view('tabs/activities',isset($data) ? $data : NULL);
	}
	function details()
	{		
		$data['bug_details'] = $this->bug->bug_details($this->uri->segment(4));
		$this->load->view('tabs/details',isset($data) ? $data : NULL);
	}
	function attachments()
	{		
		$data['bug_files'] = $this->bug->bug_files($this->uri->segment(4));
		$this->load->view('tabs/files',isset($data) ? $data : NULL);
	}
}

/* End of file tabs.php */