<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package	Freelancer Office
 * 
 */


class Account extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('user_model');
	}
	function index(){
		$this->active();
	}

	function active()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('users').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('clients');
	$data['users'] = $this->user_model->users($limit = '20',$offset = $this->uri->segment(4));
	$this->template
	->set_layout('users')
	->build('users',isset($data) ? $data : NULL);
	}
	function search()
	{
		if($this->input->post()){
			$this->load->module('layouts');
			$this->load->library('template');
			$this->template->title(lang('users').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
			$data['page'] = lang('clients');
			$keyword = $_POST['keyword'];
			$data['users'] = $this->user_model->user_search($keyword,$limit = 20);
			$this->template
			->set_layout('users')
			->build('users',isset($data) ? $data : NULL);
		}else{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('enter_search_keyword'));
			redirect('users/account');
		}	
	}
	function delete()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_id', 'User ID', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('delete_failed'));
				redirect('users/account');
		}else{	
		$user = $this->input->post('user_id');
		$user_invoices = $this->user_model->user_invoices($user);
			foreach ($user_invoices as $key => $i) {
					$this->db->delete('items', array('invoice_id' => $i->inv_id));
			}

			$this->db->delete('projects', array('client' => $user)); 
			$this->db->delete('comments', array('posted_by' => $user)); 
			$this->db->delete('activities', array('user' => $user)); 
			$this->db->delete('invoices', array('client' => $user)); 
			$this->db->delete('estimates', array('client' => $user));  
			$this->db->delete('bugs', array('reporter' => $user)); 
			// Delete user files
			$files = $this->user_model->user_project_files($user);
			foreach ($files as $key => $f) {
				unlink('./resource/project-files/'.$f->file_name);
			}
			$bug_files = $this->user_model->user_bug_files($user);
			foreach ($files as $key => $f) {
				unlink('./resource/bug-files/'.$f->file_name);
			}
			unlink('./resource/avatar/'.$this->user_profile->get_profile_details($user,'avatar'));

			$this->db->delete('files', array('uploaded_by' => $user)); 
			$this->db->delete('bug_files', array('uploaded_by' => $user)); 
			$this->db->delete('account_details', array('user_id' => $user)); 
			$this->db->delete('users', array('id' => $user)); 
			// Log Activity
			$activity = 'Deleted user '.$this->user_profile->get_user_details($user,'username').' from the system';
			$this->_log_activity($user,$activity,$icon = 'fa-trash-o'); //log activity

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('user_deleted_successfully'));
			redirect('users/account');
		}
		}else{
			$data['user_id'] = $this->uri->segment(4);
			$this->load->view('modal/delete_user',$data);
		}
	}
	function _log_activity($user_id,$activity,$icon){
			$this->db->set('module', 'users');
			$this->db->set('module_field_id', $user_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', $icon);
			$this->db->insert('activities'); 
	}
}

/* End of file account.php */