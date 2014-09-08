<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package	Freelancer Office
 * 
 */

class Fomailer extends MX_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if (!$this->tank_auth->get_username()) {
			$this->session->set_flashdata('response_status', 'error');
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('mailer_model','MailModel');
	}

	function send_email($params)
	{
		if($this->config->item('use_postmark') == 'TRUE'){
        $this->load->library('postmark');
        	$this->postmark->from($this->config->item('company_email'), $this->config->item('company_name'));
			$this->postmark->to($params['recipient']);
			$this->postmark->subject($params['subject']);
			$this->postmark->message_plain($params['message']);
			$this->postmark->message_html($params['message']);
			if($params['attached_file']){ 
			$this->postmark->attach($params['attached_file'] != '');
				    }
        	$this->postmark->send();

    	}else{
    			$this->load->library('email');
				$config['protocol'] = $this->config->item('protocol');
					if ($this->config->item('protocol') == 'smtp') {
						$this->load->library('encrypt');
						$raw_smtp_pass =  $this->encrypt->decode($this->config->item('smtp_pass'));
						$config['smtp_host'] = $this->config->item('smtp_host');
						$config['smtp_user'] = $this->config->item('smtp_user');
						$config['smtp_pass'] = $raw_smtp_pass;
						$config['smpt_port'] = $this->config->item('smtp_port');
						$config['smtp_timeout'] = 5;
					}		
				$config['wordwrap'] = TRUE;

				$this->email->initialize($config);			    
				$this->email->from($this->config->item('company_email'), $this->config->item('company_name'));
				$this->email->to($params['recipient']);

				$this->email->subject($params['subject']);
				$this->email->message($params['message']);
				    if($params['attached_file'] != ''){ 
				    	$this->email->attach($params['attached_file']);
				    }
				$this->email->send();

    	}
	
	}
}

/* End of file fomailer.php */