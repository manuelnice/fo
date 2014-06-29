<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Posts extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'management') {
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
	$data['page'] = 'posts';
	$data['posts'] = $this->profile_model->get_all_records($table = 'posts',
		$array = array('post_deleted' => 'No'),
				$join_table = 'users',$join_criteria = 'users.id = posts.posted_by','date_posted');
	$this->template
	->set_layout('users')
	->build('posts',isset($data) ? $data : NULL);
	}
	function ban_post()
	{
	if ($this->input->post()) {
			$form_data = array(
				'post_deleted' => 'Yes'
			            );
			$this->db->where('post_id',$this->input->post('post_id'));
			$this->db->update('posts', $form_data); 
			$this->session->set_flashdata('message', 'Post banned successfully!');
			redirect($this->input->post('r_url'));
		}else{
			$data['post_id'] = $this->uri->segment(4);
			$this->load->view('modal/ban_post',$data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */