<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Extras extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if (!$this->tank_auth->get_username()) {
			$this->session->set_flashdata('message', 'Hey buddy, you are not allowed to access this page. Please contact the system admin for assistance.');
			redirect('');
		}
		$this->load->model('extras_model');
	}

	function rating()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'rating';
	$data['officials'] = $this->extras_model->get_all_records($table = 'officials',
	$array = array('active' => 'Yes'),
				$join_table = 'users',$join_criteria = 'users.id = officials.user','date_added');
	$this->template
	->set_layout('users')
	->build('rating',isset($data) ? $data : NULL);
	}
	function rate_me()
	{
		if ($this->input->post()) {
			$rating_status = $this->extras_model->check_rating($this->tank_auth->get_user_id(),$this->input->post('official_rated'));
			if ($rating_status) {
				$this->session->set_flashdata('message', 'You already rated this official!');
				redirect($this->input->post('r_url'));
			}
			if ($this->input->post('official_rated') == $this->tank_auth->get_user_id()) {
				$this->session->set_flashdata('message', 'Only students can rate you. You can\'t rate yourself!');
				redirect($this->input->post('r_url'));
			}
			$form_data = array(
			                'official_rated' => $this->input->post('official_rated'),
			                'rated_by' => $this->tank_auth->get_user_id(),
			                'rated' =>  $this->input->post('rated')
			            );
			$this->db->insert('ratings', $form_data); 
			$this->session->set_flashdata('message', 'Rating Submitted successfully!');
			redirect($this->input->post('r_url'));
		}else{
		$data['official_rated'] = $this->uri->segment(3);
		$this->load->view('modal/submit_rating',$data);
		}
	}
	function suggestion()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'suggestion';
	$data['suggestions'] = $this->extras_model->get_all_records($table = 'suggestions',
	$array = array('submitted_by' => $this->tank_auth->get_user_id()),
				$join_table = 'users',$join_criteria = 'users.id = suggestions.submitted_by','date_submitted');
	$this->template
	->set_layout('users')
	->build('suggestion',isset($data) ? $data : NULL);
	}
	function drop_message()
	{
	if ($this->input->post()) {
			$form_data = array(
				'submitted_by' => $this->tank_auth->get_user_id(),
				'subject' => $this->input->post('subject'),
				'message' => $this->input->post('message'),
			                'privacy' => $this->input->post('privacy')
			            );
			$this->db->insert('suggestions', $form_data); 
			$this->session->set_flashdata('message', 'Your suggestion was submitted successfully!');
			redirect($this->input->post('r_url'));
		}else{
			$this->load->view('modal/drop_message');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */