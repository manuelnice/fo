<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Mail extends MX_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if (!$this->tank_auth->get_username()) {
			$this->session->set_flashdata('message', 'Hey buddy, you are not allowed to access this page. Please contact the system admin for assistance.');
			redirect('');
		}
		$this->load->model('msg_model');
	}

	function reply_msg()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('message', 'Oops! Something failed. Your message was not delivered.');
				redirect($this->input->post('r_url'));
		}else{			
			$form_data = array(
			                'user_to' => $this->input->post('user_to'),
			                'user_from' => $this->tank_auth->get_user_id(),
			                'subject' =>  $this->input->post('subject'),
			                'message' => $this->input->post('message'),
			                'attachment' =>  0,
			                'status' =>  'Unread'
			            );
			$this->db->insert('messages', $form_data); 
			$this->session->set_flashdata('message', 'Message replied successfully!');
			redirect($this->input->post('r_url'));
		}
		}else{
		$data['user_to'] = $this->uri->segment(4);
		$msg_id = $this->uri->segment(5);
		$data['subject'] = $this->msg_model->get_msg_subject($msg_id);
		$this->load->view('modal/reply_msg',$data);
		}
	}
	function forward_msg()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('username', 'Recipient', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('message', 'Oops! Something failed. Your message was not delivered.');
				redirect($this->input->post('r_url'));
		}else{			
			$user_id = $this->msg_model->get_user_id($this->input->post('username'));
			if (!$user_id AND $user_id != $this->tank_auth->get_user_id()) {
				$this->session->set_flashdata('message', 'Oops! User not found please confirm the username and try again.');
				redirect($this->input->post('r_url'));
			}
			$form_data = array(
			                'user_to' => $user_id,
			                'user_from' => $this->tank_auth->get_user_id(),
			                'subject' =>  $this->input->post('subject'),
			                'message' => $this->input->post('message'),
			                'attachment' =>  0,
			                'status' =>  'Unread'
			            );
			$this->db->insert('messages', $form_data); 
			$this->session->set_flashdata('message', 'Message forwarded successfully!');
			redirect($this->input->post('r_url'));
		}
		}else{
		$data['user_to'] = $this->uri->segment(4);
		$msg_id = $this->uri->segment(5);
		$data['subject'] = $this->msg_model->get_msg_subject($msg_id);
		$data['message'] = $this->msg_model->get_msg_text($msg_id);
		$this->load->view('modal/forward_msg',$data);
		}
	}
	function new_msg()
	{
		if ($this->input->post()) {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->session->set_flashdata('message', 'Oops! Something failed. Your message was not delivered.');
				redirect($this->input->post('r_url'));
		}else{			
			$user_id = $this->msg_model->get_user_id($this->input->post('username'));
			if (!$user_id AND $user_id != $this->tank_auth->get_user_id()) {
				$this->session->set_flashdata('message', 'Oops! User not found please confirm the username and try again.');
				redirect($this->input->post('r_url'));
			}
			$form_data = array(
			                'user_to' => $user_id,
			                'user_from' => $this->tank_auth->get_user_id(),
			                'subject' =>  $this->input->post('subject'),
			                'message' => $this->input->post('message'),
			                'attachment' =>  0,
			                'status' =>  'Unread'
			            );
			$this->db->insert('messages', $form_data); 
			$this->session->set_flashdata('message', 'Message sent successfully!');
			redirect($this->input->post('r_url'));
		}
		}else{
		$this->load->view('modal/new_msg');
		}
	}
	function add_contact()
	{
		if ($this->msg_model->check_contact_exist($user_id = $this->tank_auth->get_user_id(),$contact = $this->uri->segment(4))) {
			$this->session->set_flashdata('message', 'Looks like that user is already in your contact list!');
			redirect($this->input->get('r_url',TRUE));
		}else{
		$form_data = array(
			                'user_id' => $this->tank_auth->get_user_id(),
			                'contact' => $this->uri->segment(4),
			                'label' =>  'Important',
			            );
			$this->db->insert('contacts', $form_data); 
			$this->session->set_flashdata('message', 'Contact added successfully!');
			redirect($this->input->get('r_url',TRUE));
		}
	}
	function trash_msg()
	{
		$form_data = array(
			                'deleted' => 'Yes',
			            );
			$this->db->where('msg_id',$this->uri->segment(4));
			$this->db->update('messages', $form_data); 
			$this->session->set_flashdata('message', 'Message deleted successfully!');
			redirect('messaging/view/inbox');
	}
	function spam_msg()
	{
		$form_data = array(
			                'spam' => 'Yes',
			            );
			$this->db->where('msg_id',$this->uri->segment(4));
			$this->db->update('messages', $form_data); 
			$this->session->set_flashdata('message', 'Message marked as Spam!');
			redirect('messaging/view/inbox');
	}
	function view_msg()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'messaging';
	$this->msg_model->mark_msg($this->uri->segment(3),'Read');
	$data['message'] = $this->msg_model->get_all_records($table = 'messages',
		$array = array('msg_id' => $this->uri->segment(3)),
				$join_table = 'users',$join_criteria = 'users.id = messages.user_from');
	$data['contacts'] = $this->msg_model->get_all_records($table = 'contacts',
		$array = array('user_id' => $this->tank_auth->get_user_id()),
				$join_table = 'users',$join_criteria = 'users.id = contacts.contact');
	$this->template
	->set_layout('users')
	->build('msg_view',isset($data) ? $data : NULL);
	}
	function draft()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'transcripts';
	$this->template
	->set_layout('users')
	->build('transcripts',isset($data) ? $data : NULL);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */