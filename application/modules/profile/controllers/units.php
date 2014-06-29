<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Units extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'student') {
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
	$data['page'] = 'units';
	$data['units'] = $this->profile_model->get_all_records($table = 'units',
		$array = array('year' => $this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'year_of_study'), 
				'semester' =>$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'semester'),
				'program_id' => $this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'program')),
				$join_table = '',$join_criteria = '');
	$this->template
	->set_layout('users')
	->build('units',isset($data) ? $data : NULL);
	}
	function activity()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'units';
	$this->template
	->set_layout('users')
	->build('profile_activity',isset($data) ? $data : NULL);
	}
	function edit()
	{
		if($_POST){

		}else{
			$this->load->module('layouts');
			$this->load->library('template');
			$this->template->title('Welcome - Kabarak Portal');
			$data['page'] = 'profile';
			$this->template
			->set_layout('users')
			->build('edit_profile',isset($data) ? $data : NULL);
		}
	}
	function register_unit(){
		$student =  $this->tank_auth->get_user_id();
		$unit_id = $this->uri->segment(4);
		$program_id = $this->uri->segment(5);
		$total_cf = $this->profile_model->total_cf($student,$program_id,$table='unit_registrations',$program_field = 'program',$cf_field = 'cf');
		$program_cf = $this->profile_model->total_cf($student = '',$program_id,$table='programs',$program_field = 'pr_id',$cf_field = 'cf_load');
		if($total_cf <= $program_cf){
			$unit_details = $this->profile_model->get_record_by($table = 'units', $array = array('u_id' => $unit_id),$join_table = '',$join_criteria = '');
			$form_data = array(
			   'student' => $this->tank_auth->get_user_id(),
			   'program' => $program_id,
			   'unit' => $unit_id ,
			   'yos' => $unit_details->year ,
			   'sem' => $unit_details->semester,
			   'cf' => $unit_details->unit_cf,
			);
			$this->db->insert('unit_registrations', $form_data); 
			$this->session->set_flashdata('message','Yiepee! You registered successfully buddy. I wish you all the best in that unit.');
			redirect('profile/units');
		}else{
			$this->session->set_flashdata('message','Oops! Sorry about this friend. You Exceeded the Maximum CF required.');
			redirect('profile/units');
		}
	}
	function unregister(){
		$student = $this->tank_auth->get_user_id();
		$unit = $this->uri->segment(4);
		$program_id = $this->uri->segment(5);
		$this->db->where('unit', $unit);
		$this->db->where('program', $program_id);
		$this->db->where('student', $student);
		$this->db->delete('unit_registrations'); 
		$this->session->set_flashdata('message','Hey you! You just unregistered a Unit successfully. ');
			redirect('profile/units');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */