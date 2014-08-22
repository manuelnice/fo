<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Profile extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if (!$this->tank_auth->get_username()) {
			$this->session->set_flashdata('message', 'Hey buddy, you are not allowed to access this page. Please contact the system admin for assistance.');
			redirect('');
		}
		$this->load->model('profile_model');
	}

	function timeline()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'profile';
	$this->template
	->set_layout('users')
	->build('timeline',isset($data) ? $data : NULL);
	}
	function settings()
	{
		if($_POST){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		                {
		                    $this->session->set_flashdata('message', 'Please fill in your form correctly. Please try again');
		                    redirect('profile/edit');
		                }else{                	
		            $form_data = array(
		                'fullname' => $this->input->post('fullname'),
		                'city' => $this->input->post('city'),
		                'country' => $this->input->post('country'),
		                'phone' => $this->input->post('phone'),
		                'program' => $this->input->post('program'),
		                'year_of_study' => $this->input->post('yos'),
		                'semester' => $this->input->post('semester'),
		            );
		            $this->db->where('user_id', $this->tank_auth->get_user_id());
			$this->db->update('account_details', $form_data); 
			$this->session->set_flashdata('message', 'Howdy Bingo! Thank You for updating your profile.');
		                    redirect($this->input->post('r_url'));
		                }


		}else{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = lang('home');
	$data['profile'] = $this->profile_model->get_all_records($table = 'account_details',
		$array = array('user_id' =>$this->tank_auth->get_user_id()),
				$join_table = '',$join_criteria = '');
	$data['countries'] = $this->profile_model->get_all($table = 'countries');
	$this->template
	->set_layout('users')
	->build('edit_profile',isset($data) ? $data : NULL);
	}
	}
	function update_status()
	{
		if($_POST){
			$form_data = array(
				'post' => $this->input->post('status_update'),
				'posted_by' => $this->tank_auth->get_user_id()
				);
			$this->db->insert('posts', $form_data); 
			$this->session->set_flashdata('message', 'Status Updated Successfully!');
			redirect($this->input->post('r_url'));
		}else{
		redirect('profile');
		}
	}
	function help()
	{
		$this->load->model('profile_model');
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'home';
	$data['contributors'] = $this->profile_model->get_contributors();
	$data['faqs'] = $this->profile_model->get_faqs($visible = 'yes');
	$this->template
	->set_layout('users')
	->build('intro',isset($data) ? $data : NULL);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */