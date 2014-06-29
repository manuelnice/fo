<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Transcripts extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'management') {
			$this->session->set_flashdata('message', 'Hey buddy, you are not allowed to access this page. Please contact the system admin for assistance.');
			redirect('');
		}
		$this->load->model('profile_model');
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'transcripts';
	$data['programs'] = $this->profile_model->get_programs();
	$data['results'] = $this->profile_model->get_results($program = $this->input->get('p',TRUE) ? $this->input->get('p',TRUE) : 1);
	$this->template
	->set_layout('users')
	->build('transcripts',isset($data) ? $data : NULL);
	}
	function view()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'transcripts';
	$data['year_one'] = $this->profile_model->get_all_records($table = 'results',
		$array = array(
			'student' => $this->uri->segment(4),'yos' => 1,'deleted' => 'No'),$join_table = 'units',$join_criteria = 'units.u_id = results.unit','date_posted');
	$data['year_two'] = $this->profile_model->get_all_records($table = 'results',
		$array = array(
			'student' => $this->uri->segment(4),'yos' => 2,'deleted' => 'No'),$join_table = 'units',$join_criteria = 'units.u_id = results.unit','date_posted');
	$data['year_three'] = $this->profile_model->get_all_records($table = 'results',
		$array = array(
			'student' => $this->uri->segment(4),'yos' => 3,'deleted' => 'No'),$join_table = 'units',$join_criteria = 'units.u_id = results.unit','date_posted');
	$data['year_four'] = $this->profile_model->get_all_records($table = 'results',
		$array = array(
			'student' => $this->uri->segment(4),'yos' => 4,'deleted' => 'No'),$join_table = 'units',$join_criteria = 'units.u_id = results.unit','date_posted');
	$this->template
	->set_layout('users')
	->build('view_transcript',isset($data) ? $data : NULL);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */