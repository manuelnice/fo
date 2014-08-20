<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Bugs extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'client') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('bugs/bugs_model');
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('bug_tracking').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('bug_tracking');
	$data['bugs'] = $this->bugs_model->bugs();
	$this->template
	->set_layout('users')
	->build('bugs/welcome',isset($data) ? $data : NULL);
	}
	function view_by_status($status)
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('bug_tracking').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('bug_tracking');
		if ($this->uri->segment(4) == 'unconfirmed') { 
		$status = 'Unconfirmed'; }elseif ($this->uri->segment(4) == 'confirmed') {
		$status = 'Confirmed';  }elseif ($this->uri->segment(4) == 'progress') { 
		$status = 'In Progress'; }elseif ($this->uri->segment(4) == 'resolved') {
		$status = 'Resolved'; }elseif ($this->uri->segment(4) == 'verified') { 
		$status = 'Verified';  }else{ $status = 'all'; }

	$data['bugs'] = $this->bugs_model->bugs_by_status($status,25,$this->uri->segment(5));
	$this->template
	->set_layout('users')
	->build('bugs/welcome',isset($data) ? $data : NULL);
	}
	function search()
	{
		if($this->input->post()){
			$this->load->module('layouts');
			$this->load->library('template');
			$this->template->title(lang('bug_tracking').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
			$data['page'] = lang('bug_tracking');
			$keyword = $_POST['keyword'];
			$data['bugs'] = $this->bugs_model->bugs_search($keyword,$limit = 20);
			$this->template
			->set_layout('users')
			->build('bugs/welcome',isset($data) ? $data : NULL);
		}else{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('enter_search_keyword'));
			redirect('clients/bugs');
		}	
	}
	function comment()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('comment', 'Comment', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('comment_failed'));
				redirect('collaborator/bug_view/details/'.$this->input->get('bug',TRUE));
		}else{			
			$form_data = array(
			                'bug_id' => $this->input->post('bug'),
			                'comment_by' => $this->tank_auth->get_user_id(),
			                'comment' => $this->input->post('comment')
			            );
			$this->db->insert('bug_comments', $form_data); 
			$activity = "Added a comment to a bug";
			$this->_log_bug_activity($this->input->post('bug'),$activity,$icon = 'fa-comment'); //log activity
			
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('comment_successful'));
			redirect('collaborator/bug_view/details/'.$this->input->get('bug',TRUE));
			}
		}else{
		redirect('collaborator/bugs');
		}
	}
	
	function download(){
		$file_id = $this->input->get('f',TRUE);
		$this->load->helper('download');
		$file = $this->bugs_model->bug_file_name($file_id,$limit = 1);
		$data = file_get_contents('./resource/bug_files/'.$file); // Read the file's contents
		force_download($file, $data);
	}
	function delete()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('bug_id', 'Bug ID', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('delete_failed'));
				redirect('bugs');
		}else{			
			$this->db->delete('bugs', array('bug_id' => $this->input->post('bug_id'))); 
			//delete the files here
			$activity = $this->tank_auth->get_username()." deleted a bug";
			$this->_log_bug_activity($this->input->post('bug_id'),$activity,$icon = 'fa-times'); //log activity
			
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('issue_deleted_successfully'));
			redirect('bugs');
		}
		}else{
			$data['bug_id'] = $this->uri->segment(3);
			$this->load->view('modal/delete',$data);
		}
	}
	function _log_bug_activity($bug_id,$activity,$icon){
			$this->db->set('module', 'bugs');
			$this->db->set('module_field_id', $bug_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', $icon);
			$this->db->insert('activities'); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */