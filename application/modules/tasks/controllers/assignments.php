<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Assignments extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'student') {
			$this->session->set_flashdata('message', 'Hey buddy, you are not allowed to access this page. Please contact the system admin for assistance.');
			redirect('');
		}
		$this->load->model('task_model');
	}
	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'assignments';
	$data['assignments'] = $this->task_model->get_all_records($table = 'assignments',
	$array = array('yos' => $this->input->get('y',TRUE) ? $this->input->get('y',TRUE) : $this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'year_of_study') , 
				'program' => $this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'program'),
				'active' => 'Yes',
				'deleted' => 'No'),
				$join_table = 'units',$join_criteria = 'units.u_id = assignments.unit','date_posted');
	$this->template
	->set_layout('users')
	->build('assignments',isset($data) ? $data : NULL);
	}
	function view()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'assignments';
	$data['a_details'] = $this->task_model->get_all_records($table = 'assignments',
		$array = array(
				'assgn_id' => $this->uri->segment(4),
				'deleted' => 'No'),
				$join_table = 'units',$join_criteria = 'units.u_id = assignments.unit','date_posted');
	$this->template
	->set_layout('users')
	->build('assignment_details',isset($data) ? $data : NULL);
	}
	function submit()
	{
		if ($this->input->post()) {
		$config['upload_path'] = './resource/assignments/';
		$config['allowed_types'] = 'gif|jpg|png|doc|txt|pdf|docx|zip';
		$config['max_size']	= $this->config->item('file_max_size');
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$this->session->set_flashdata('message','Sorry! Your file was not uploaded successfully. Please contact system Administrator');
			redirect($this->input->post('r_url'));
		}
		else
		{
			$data = $this->upload->data();
			$file_id = $this->task_model->insert_file($data['file_name'],$_POST['year'],$_POST['sem'],$this->tank_auth->get_user_id());
			$form_data = array(
			                'assignment' => $this->input->post('assgn_id'),
			                'student' => $this->tank_auth->get_user_id(),
			                'unit_id' =>  $this->input->post('sem'),
			                'status' => 'On Time',
			                'file' =>  $file_id
			            );
			$this->db->insert('assign_records', $form_data); 
			$this->session->set_flashdata('message', 'Assignments submitted successfully!');
			redirect($this->input->post('r_url'));
		}
		}else{
		$data['assgn_id'] = $this->uri->segment(4);
		$data['year'] = $this->uri->segment(5);
		$data['sem'] = $this->uri->segment(6);
		$this->load->view('modal/submit_assignment',$data);
		}
	}
	function delete_notes()
	{
		if ($this->input->post()) {
			$form_data = array(
			                'deleted' => 'Yes'
			            );
			$this->db->where('n_id',$_POST['n_id']);
			$this->db->update('notes', $form_data); 
			$this->_log_activity('Deleted some notes from the system',$_POST['year'],$_POST['sem'],$_POST['unit']);
			$this->session->set_flashdata('message', 'Notes deleted successfully!');
			redirect($this->input->post('r_url'));
		}else{
			$data['year']= $this->uri->segment(5)/1200;
			$data['sem'] = $this->uri->segment(6);
			$data['unit'] = $this->uri->segment(7)/3000;
			$data['n_id'] = $this->uri->segment(4);
			$this->load->view('modal/delete_notes',$data);
		}
	}
	public function download($file_id)
	{
	$this->load->helper('download');
	if ($this->task_model->get_file($file_id))
	{
		$file = $this->task_model->get_file($file_id);
		$data = file_get_contents('./resource/notes/' . $file->file_name); // Read the file's contents
		force_download($file->file_name, $data);
		}
	else
	{
		$this->session->set_flashdata('message','Sorry about this '.$this->tank_auth->get_username().' ! We couldn\'t locate that file.');
			redirect('tasks/notes');
	}
	}
	function _log_activity($message,$yos,$sem,$unit)
	{
		$this->db->set('user_id', $this->tank_auth->get_user_id()); 
		$this->db->set('activity', $message); 
		$this->db->set('yos', $yos); 
		$this->db->set('sem', $sem); 
		$this->db->set('unit', $unit); 
		$this->db->insert('activities'); 
			return TRUE;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */