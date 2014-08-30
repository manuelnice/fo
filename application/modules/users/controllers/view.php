<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class View extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('user_model','user');
	}
	
	function update()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('role_id', 'Role', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('operation_failed'));
				redirect('users/account');
		}else{	
		$user_id =  $this->input->post('user_id');
			$profile_data = array(
			                'fullname' => $this->input->post('fullname'),
			                'city' => $this->input->post('city'),
			                'company' => $this->input->post('company'),			               
			            );

			$this->db->where('user_id',$user_id)->update('account_details', $profile_data); 
			$user_data = array(
			                'email' => $this->input->post('email'),
			                'role_id' => $this->input->post('role_id'),
			                'modified' => date("Y-m-d H:i:s")
			                );
			$this->db->where('id',$user_id)->update('users', $user_data); 
			$activity = 'Edited a user information';
			$this->_log_user_activity($activity,$icon = 'fa-user'); //log activity

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('user_edited_successfully'));
			redirect('users/account');
		}
		}else{
		$data['user_details'] = $this->user->user_details($this->uri->segment(4));
		$data['roles'] = $this->user->roles();
		$this->load->view('modal/edit_user',$data);
		}
	}

	function _log_user_activity($activity,$icon){
			$this->db->set('module', 'users');
			$this->db->set('module_field_id', $this->tank_auth->get_user_id());
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', $icon);
			$this->db->insert('activities'); 
	}
}

/* End of file view.php */
/* Location: ./application/controllers/view.php */