<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package	Freelancer Office
 * 
 */


class Settings extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('settings_model');
	}

	function update()
	{
		if ($this->input->post()) {
			if ($this->uri->segment(3) == 'general') {
				$this->_update_general_settings('general');
			}elseif($this->uri->segment(3) == 'system'){
				$this->_update_system_settings('system');
			}else{
				$this->_update_email_settings('email');
			}
		}else{
			$this->load->module('layouts');
			$this->load->library('template');
			$this->template->title(lang('settings').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));			
			if($this->uri->segment(3) == 'general'){
				$data['page'] = lang('general_settings');
				$data['countries'] = $this->settings_model->countries();
				$setting = 'general';
			}elseif ($this->uri->segment(3) == 'system') {
				$data['page'] = lang('system_settings');
				$setting = 'system';
			}else{
				$data['page'] = lang('email_settings');
				$setting = 'email';
			}
			$this->template
			->set_layout('users')
			->build($setting,isset($data) ? $data : NULL);
		}
	}
	private function _update_general_settings($setting){
			$this->_demo_mode('settings/update/'.$setting);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('company_name', 'Company Name', 'required');
		$this->form_validation->set_rules('company_address', 'Company Address', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('settings_update_failed'));
			redirect('settings/update/'.$setting);
		}else{
			
		$data = array('value' => $this->input->post('company_name')); $this->db->where('key', 'company_name')->update('config', $data); 
		$data = array('value' => $this->input->post('contact_person')); $this->db->where('key', 'contact_person')->update('config', $data); 
		$data = array('value' => $this->input->post('company_address')); $this->db->where('key', 'company_address')->update('config', $data); 
		$data = array('value' => $this->input->post('company_phone')); $this->db->where('key', 'company_phone')->update('config', $data); 
		$data = array('value' => $this->input->post('company_domain')); $this->db->where('key', 'company_domain')->update('config', $data); 
		$data = array('value' => $this->input->post('company_country')); $this->db->where('key', 'company_country')->update('config', $data); 
		$data = array('value' => $this->input->post('company_city')); $this->db->where('key', 'company_city')->update('config', $data); 

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('settings_updated_successfully'));
			redirect('settings/update/'.$setting);
		}
		
	}
	private function _update_system_settings($setting){
		$this->_demo_mode('settings/update/'.$setting);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('base_url', 'Base URL', 'required');
		$this->form_validation->set_rules('default_language', 'Default Language', 'required');
		$this->form_validation->set_rules('file_max_size', 'File Max Size', 'required');		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('settings_update_failed'));
			redirect('settings/update/'.$setting);
		}else{
		$data = array('value' => $this->input->post('base_url')); $this->db->where('key', 'base_url')->update('config', $data); 
		
		$data = array('value' => $this->input->post('default_language')); $this->db->where('key', 'language')->update('config', $data); 
		
		$data = array('value' => $this->input->post('file_max_size')); $this->db->where('key', 'file_max_size')->update('config', $data); 
		$data = array('value' => $this->input->post('allowed_files')); $this->db->where('key', 'allowed_files')->update('config', $data); 		
		$data = array('value' => $this->input->post('demo_mode')); $this->db->where('key', 'demo_mode')->update('config', $data); 
		$data = array('value' => $this->input->post('default_terms')); $this->db->where('key', 'default_terms')->update('config', $data); 

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('settings_updated_successfully'));
			redirect('settings/update/'.$setting);
		}
		
	}
	private function _update_email_settings($setting){
		$this->_demo_mode('settings/update/'.$setting);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('company_email', 'Company Email', 'required');
		$this->form_validation->set_rules('protocol', 'Email Protocol', 'required');		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('settings_update_failed'));
			redirect('settings/update/'.$setting);
		}else{
			$this->load->library('encrypt');
			$raw_smtp_pass =  $this->input->post('smtp_pass');
			$smtp_pass = $this->encrypt->encode($raw_smtp_pass);
		$data = array('value' => $this->input->post('company_email')); $this->db->where('key', 'company_email')->update('config', $data); 
		$data = array('value' => $this->input->post('protocol')); $this->db->where('key', 'protocol')->update('config', $data); 
		$data = array('value' => $this->input->post('smtp_host')); $this->db->where('key', 'smtp_host')->update('config', $data); 
		$data = array('value' => $this->input->post('smtp_user')); $this->db->where('key', 'smtp_user')->update('config', $data); 
		$data = array('value' => $smtp_pass); $this->db->where('key', 'smtp_pass')->update('config', $data); 
		$data = array('value' => $this->input->post('smtp_port')); $this->db->where('key', 'smtp_port')->update('config', $data); 

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('settings_updated_successfully'));
			redirect('settings/update/'.$setting);
		}
		
	}
	function update_payment_settings(){
		if ($this->input->post()) {
			$this->_demo_mode('settings/update/general');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('default_currency', 'Default Currency', 'required');
		$this->form_validation->set_rules('default_currency_symbol', 'Default Currency Symbol', 'required');	
		$this->form_validation->set_rules('paypal_email', 'Paypal Email', 'required');		
		$this->form_validation->set_rules('paypal_cancel_url', 'Paypal Cancel', 'required');	
		$this->form_validation->set_rules('paypal_ipn_url', 'Paypal IPN', 'required');	
		$this->form_validation->set_rules('paypal_success_url', 'Paypal Success', 'required');	
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('settings_update_failed'));
			redirect('settings/update/general');
		}else{
	$data = array('value' => $this->input->post('default_tax')); $this->db->where('key', 'default_tax')->update('config', $data); 
	$data = array('value' => $this->input->post('default_currency')); $this->db->where('key', 'default_currency')->update('config', $data); 
	$data = array('value' => $this->input->post('default_currency_symbol')); $this->db->where('key', 'default_currency_symbol')->update('config', $data); 
	$data = array('value' => $this->input->post('paypal_email')); $this->db->where('key', 'paypal_email')->update('config', $data);
	$data = array('value' => $this->input->post('paypal_live')); $this->db->where('key', 'paypal_live')->update('config', $data);
	$data = array('value' => $this->input->post('paypal_cancel_url')); $this->db->where('key', 'paypal_cancel_url')->update('config', $data);
	$data = array('value' => $this->input->post('paypal_ipn_url')); $this->db->where('key', 'paypal_ipn_url')->update('config', $data);
	$data = array('value' => $this->input->post('paypal_success_url')); $this->db->where('key', 'paypal_success_url')->update('config', $data); 


			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('settings_updated_successfully'));
			redirect('settings/update/general');
		}
	}else{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('settings_update_failed'));
			redirect('settings/update/general');
	}
		
	}

	function update_email_templates(){
		if ($this->input->post()) {
			$this->_demo_mode('settings/update/email');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email_estimate_message', 'Estimate Message', 'required');
		$this->form_validation->set_rules('email_invoice_message', 'Invoice Message', 'required');	
		$this->form_validation->set_rules('reminder_message', 'Reminder Message', 'required');	
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('settings_update_failed'));
			redirect('settings/update/general');
		}else{
	$data = array('value' => $this->input->post('email_estimate_message')); $this->db->where('key', 'email_estimate_message')->update('config', $data); 
	$data = array('value' => $this->input->post('email_invoice_message')); $this->db->where('key', 'email_invoice_message')->update('config', $data); 
	$data = array('value' => $this->input->post('reminder_message')); $this->db->where('key', 'reminder_message')->update('config', $data); 

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('settings_updated_successfully'));
			redirect('settings/update/email');
		}
	}else{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('settings_update_failed'));
			redirect('settings/update/email');
	}
		
	}
	function upload_logo(){
		$this->_demo_mode('settings/update/general');

		if ($_FILES['userfile'] != "") {
				$config['upload_path']   = './resource/images/';
            			$config['allowed_types'] = 'jpg|jpeg|png';
            			$config['max_width']  = '300';
            			$config['max_height']  = '300';
            			$config['remove_spaces'] = TRUE;
            			$config['file_name']  = 'logo';
            			$config['overwrite']  = TRUE;
            			$config['max_size']      = '300';
            			$this->load->library('upload', $config);
						if ($this->upload->do_upload())
						{
							$data = $this->upload->data();
							$file_name = $data['file_name'];
							$data = array(
								'value' => $file_name);
							$this->db->where('key', 'company_logo')->update('config', $data); 
							$this->session->set_flashdata('response_status', 'success');
							$this->session->set_flashdata('message', lang('logo_changed'));
							redirect('settings/update/general');
						}else{
							$this->session->set_flashdata('response_status', 'error');
							$this->session->set_flashdata('message', lang('logo_upload_error'));
							redirect('settings/update/general');
						}
			}else{
							$this->session->set_flashdata('response_status', 'error');
							$this->session->set_flashdata('message', lang('file_upload_failed'));
							redirect('settings/update/general');
			}
	}
	function database()
	{
		if ($this->config->item('demo_mode') == 'FALSE') { 
		$this->load->dbutil();
		$prefs = array(
                'format'      => 'txt',             // gzip, zip, txt
                'filename'    => 'latest-freelancerbackup.sql',    // File name - NEEDED ONLY WITH ZIP FILES
                'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
                'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
                'newline'     => "\n"               // Newline character used in backup file
              );
			$backup =& $this->dbutil->backup($prefs);
			$this->load->helper('file');
			write_file('resource/database.backup/latest-freelancerbackup.sql', $backup); 
			$this->load->helper('download');
			force_download('latest-freelancerbackup.sql', $backup);
		}else{
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message',lang('demo_warning'));
			redirect('settings/update/general');
		}
	}
	function _demo_mode($redirect_url){
		if ($this->config->item('demo_mode') == 'TRUE') {
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('demo_warning'));
			redirect($redirect_url);
		}
	}
	
}

/* End of file settings.php */