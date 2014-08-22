<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed by William M
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

	function settings()
	{
		if($_POST){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		                {
		                	$this->session->set_flashdata('response_status', 'error');
							$this->session->set_flashdata('message',lang('error_in_form'));
		                    redirect('profile/settings');
		                }else{                	
		            $form_data = array(
		                'fullname' => $this->input->post('fullname'),
		                'city' => $this->input->post('city'),
		                'country' => $this->input->post('country'),
		                'phone' => $this->input->post('phone'),
		                'company' => $this->input->post('company'),
		                'address' => $this->input->post('address'),
		                'language' => $this->input->post('language'),
		            );
		    $this->db->where('user_id', $this->tank_auth->get_user_id());
			$this->db->update('account_details', $form_data); 
			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message',lang('profile_updated_successfully'));
		    redirect($this->input->post('r_url'));
		                }


		}else{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title(lang('profile').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
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

	function changeavatar()
	{		
		if ($this->input->post()) {
						
						if ($this->config->item('demo_mode') == 'FALSE') {
									$config['upload_path'] = './resource/avatar/';
									$config['allowed_types'] = 'gif|jpg|png';
									$config['max_size']	= '600';
									$config['max_width']  = '500';
									$config['max_height']  = '450';
									$config['file_name'] = strtoupper($this->config->item('company_name')).'-AVATAR-'.$this->tank_auth->get_username();
									$config['overwrite'] = TRUE;

									$this->load->library('upload', $config);

									if (!$this->upload->do_upload())
									{
										$this->session->set_flashdata('response_status', 'error');
										$this->session->set_flashdata('message',lang('operation_failed'));
										redirect($this->input->post('r_url', TRUE));
									}
									else
									{
										$data = $this->upload->data();
										$file_name = $this->profile_model->update_avatar($data['file_name']);

										$this->session->set_flashdata('response_status', 'success');
										$this->session->set_flashdata('message',lang('avatar_uploaded_successfully'));
										redirect($this->input->post('r_url', TRUE));
									}
								} else {
									$this->session->set_flashdata('response_status', 'error');
									$this->session->set_flashdata('message',lang('demo_warning'));
									redirect($this->input->post('r_url', TRUE));
								}
			}else{
				$this->session->set_flashdata('response_status', 'error');
				$this->session->set_flashdata('message', lang('no_avatar_selected'));
				redirect('profile/settings');
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