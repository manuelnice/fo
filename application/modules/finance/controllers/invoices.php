<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Invoices extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'finance') {
			$this->session->set_flashdata('message', 'Hey buddy, you are not allowed to access this page. Please contact the system admin for assistance.');
			redirect('');
		}
		$this->load->model('profile_model');
		$this->load->helper('string');
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'invoices';
	$data['fee_structure'] = $this->profile_model->get_all_records($table = 'fee_structure',
		$array = array('deleted' =>'No'),
				$join_table = 'programs',$join_criteria = 'programs.pr_id = fee_structure.program_id','date_created');
	$this->template
	->set_layout('users')
	->build('fee_structure',isset($data) ? $data : NULL);
	}
	function add_fee()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('yos', 'Year of Study', 'required');
		$this->form_validation->set_rules('sem', 'Semester', 'required');
		$this->form_validation->set_rules('program', 'Program', 'required');
		$this->form_validation->set_rules('fee_desc', 'Fee Description', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->module('layouts');
				$this->load->library('template');
				$this->template->title('Welcome - Kabarak Portal');
				$data['page'] = 'invoices';
				$data['programs'] = $this->profile_model->get_all_records($table = 'programs',
					$array = array('active' =>'Yes'),
							$join_table = '',$join_criteria = '','date_added');
				$this->session->set_flashdata('message', 'Oops! Something went wrong please give me the correct information.');
				$this->template
				->set_layout('users')
				->build('add_fee_type',isset($data) ? $data : NULL);
		}else{
			
			$form_data = array(
			                'yos' => $this->input->post('yos'),
			                'sem' => $this->input->post('sem'),
			                'program_id' =>  $this->input->post('program'),
			                'fee_desc' => $this->input->post('fee_desc'),
			                'optional' =>  $this->input->post('optional'),
			                'common_fee' =>  $this->input->post('common_fee'),
			                'amount' =>  $this->input->post('amount'),
			                'added_by' =>  $this->tank_auth->get_user_id()
			            );
			$this->db->insert('fee_structure', $form_data); 
			$this->session->set_flashdata('message', 'Thank you! Your request was processed succesfully!');
			redirect($this->input->post('r_url'));
		}
		
		}else{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'invoices';
	$data['programs'] = $this->profile_model->get_all_records($table = 'programs',
					$array = array('active' =>'Yes'),
							$join_table = '',$join_criteria = '','date_added');
	$this->template
	->set_layout('users')
	->build('add_fee_structure',isset($data) ? $data : NULL);
		}
	
	}
	function edit_fee()
	{
		if($_POST){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('yos', 'Year of Study', 'required');
		$this->form_validation->set_rules('sem', 'Semester', 'required');
		$this->form_validation->set_rules('program', 'Program', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('fee_desc', 'Fee Description', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->load->module('layouts');
				$this->load->library('template');
				$this->template->title('Welcome - Kabarak Portal');
				$data['page'] = 'invoices';
				$data['programs'] = $this->profile_model->get_all_records($table = 'programs',
					$array = array('active' =>'Yes'),
							$join_table = '',$join_criteria = '','date_added');
				$data['fees'] = $this->profile_model->get_all_records($table = 'fee_structure',
					$array = array(
						'f_id' => $this->uri->segment(4),
						'deleted' =>'No'),
							$join_table = 'programs',$join_criteria = 'programs.pr_id = fee_structure.program_id','date_created');
				$this->session->set_flashdata('message', 'Oops! Something went wrong please give me the correct information.');
				$this->template
				->set_layout('users')
				->build('edit_structure',isset($data) ? $data : NULL);
		}else{
			
			$form_data = array(
			                'yos' => $this->input->post('yos'),
			                'sem' => $this->input->post('sem'),
			                'program_id' =>  $this->input->post('program'),
			                'fee_desc' => $this->input->post('fee_desc'),
			                'optional' =>  $this->input->post('optional'),
			                'common_fee' =>  $this->input->post('common_fee'),
			                'amount' =>  $this->input->post('amount'),
			                 'added_by' =>  $this->tank_auth->get_user_id()
			            );
			$this->db->where('f_id', $this->input->post('fee_id'));
			$this->db->update('fee_structure', $form_data); 
			$this->session->set_flashdata('message', 'Fee payment added successfully!');
			redirect($this->input->post('r_url'));
		}


		}else{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'invoices';
	$data['fees'] = $this->profile_model->get_all_records($table = 'fee_structure',
					$array = array(
						'f_id' => $this->uri->segment(4),
						'deleted' =>'No'),
							$join_table = 'programs',$join_criteria = 'programs.pr_id = fee_structure.program_id','date_created');
	$data['programs'] = $this->profile_model->get_all_records($table = 'programs',
					$array = array('active' =>'Yes'),
							$join_table = '',$join_criteria = '','date_added');
	$this->template
	->set_layout('users')
	->build('edit_structure',isset($data) ? $data : NULL);
	}
	}
	function delete_fee(){
		
		$this->db->where('f_id', $this->uri->segment(4));
		$this->db->set('deleted', 'Yes'); 
		$this->db->update('fee_structure'); 
		$this->session->set_flashdata('message','Hey you! You just deleted a fee payment. This operation has been logged for security reasons.');
			redirect('finance/invoices');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */