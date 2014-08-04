<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Payments extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'finance') {
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
	$data['page'] = 'payments';
	$data['payments'] = $this->profile_model->get_all_records($table = 'fees',
		$array = array('deleted' =>'No'),
				$join_table = 'banks',$join_criteria = 'banks.bank_id = fees.bank','date_paid');
	$this->template
	->set_layout('users')
	->build('payments',isset($data) ? $data : NULL);
	}
	function view_txn()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'payments';
	$data['txn_details'] = $this->profile_model->get_all_records($table = 'fees',
		$array = array(
			'fee_id' => $this->uri->segment(4),
			'deleted' =>'No'),
				$join_table = 'banks',$join_criteria = 'banks.bank_id = fees.bank','');
	$data['issues'] = $this->profile_model->get_all_records($table = 'fee_issues',
		$array = array(
			'fee' => $this->uri->segment(4),
			'status' =>'Open'),
				$join_table = 'fees',$join_criteria = 'fees.fee_id = fee_issues.fee','');
	$this->template
	->set_layout('users')
	->build('view_txn',isset($data) ? $data : NULL);
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