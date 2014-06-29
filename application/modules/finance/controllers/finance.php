<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Finance extends MX_Controller {

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
	$data['page'] = 'home';
	$data['upcoming_events'] = $this->profile_model->upcoming_events();
	$data['news'] = $this->profile_model->news();
	$data['transactions'] = $this->profile_model->get_all_records($table = 'fees',
		$array = array('deleted' =>'No'),
				$join_table = 'account_details',$join_criteria = 'account_details.user_id = fees.student','');
	$data['payment_stat'] = $this->profile_model->get_fee_payments();
	$this->template
	->set_layout('users')
	->build('welcome',isset($data) ? $data : NULL);
	}
	function add_fee()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('reg_no', 'Reg No', 'required');
		$this->form_validation->set_rules('receipt_no', 'Receipt No', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('bank', 'Bank', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->module('layouts');
				$this->load->library('template');
				$this->template->title('Welcome - Kabarak Portal');
				$data['page'] = 'payments';
				$data['banks'] = $this->profile_model->get_all_records($table = 'banks',
					$array = array('active' =>'Yes'),
							$join_table = '',$join_criteria = '');
				$this->session->set_flashdata('message', 'Oops! Something went wrong please give me the correct information.');
				$this->template
				->set_layout('users')
				->build('add_fee',isset($data) ? $data : NULL);
		}else{
			$account_no = $this->profile_model->account_no($this->input->post('bank'));
			$student_id = $this->profile_model->get_student_id($this->input->post('reg_no'));
			if (!$student_id) {
			$this->session->set_flashdata('message', 'Ouch! What did you just do? I can\'t get that record!');
			redirect($this->input->post('r_url'));
						}			
			$yos = $this->user_profile->get_profile_details($student_id,'year_of_study');
			$sem = $this->user_profile->get_profile_details($student_id,'semester');
			$program = $this->user_profile->get_profile_details($student_id,'program');
			$sem_payable = $this->user_profile->semester_payable($program,$yos,$sem);
			$balance =  $sem_payable - $this->input->post('amount');
			$amount_received = $this->input->post('amount');
			$reg_no = $this->input->post('reg_no');
			$form_data = array(
			                'txn_id' => $this->input->post('txn_id'),
			                'receipt_no' => $this->input->post('receipt_no'),
			                'amount' =>  $this->input->post('amount'),
			                'bank' => $this->input->post('bank'),
			                'account_no' =>  $account_no,
			                'program' => $program,
			                'student' =>  $student_id,
			                'fee_year' =>  $yos,
			                 'fee_sem' =>  $sem,
			                 'balance' =>  $balance,
			                 'served_by' =>  $this->tank_auth->get_user_id(),
			                 'month_paid' =>  date('m'),
			                 'year_paid' =>  date('Y'),
			            );
			$this->db->insert('fees', $form_data); 
			$this->session->set_flashdata('message', 'Thank you! We have received '.$this->config->item('currency').' '.$amount_received.' and added it to '.$reg_no.'  Account!');
			redirect($this->input->post('r_url'));
		}
		
		}else{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'payments';
	$data['banks'] = $this->profile_model->get_all_records($table = 'banks',
		$array = array('active' =>'Yes'),
				$join_table = '',$join_criteria = '');
	$this->template
	->set_layout('users')
	->build('add_fee',isset($data) ? $data : NULL);
		}
	
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */