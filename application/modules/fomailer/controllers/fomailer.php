<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Fomailer extends MX_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if (!$this->tank_auth->get_username()) {
			$this->session->set_flashdata('message', 'Hey buddy, you are not allowed to access this page. Please contact the system admin for assistance.');
			redirect('');
		}
		$this->load->model('mailer_model','m_mdl');
	}

	function send_email($params)
	{
		$this->load->library('email');
		$config['protocol'] = $this->config->item('protocol');
		if ($this->config->item('protocol') == 'smtp') {
			$config['smtp_host'] = $this->config->item('smtp_host');
			$config['smtp_user'] = $this->config->item('smtp_user');
			$config['smtp_pass'] = $this->config->item('smtp_pass');
			$config['smpt_port'] = $this->config->item('smtp_port');
			$config['smtp_timeout'] = 5;
		}		
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);			    
					$this->email->from($this->config->item('company_email'), $this->config->item('company_name'));
					$this->email->to($params['recipient']);

				    $this->email->subject($params['subject']);
				    $this->email->message($params['message']);
				    if($params['attached_file']){ 
				    	$this->email->attach($params['attached_file']);
				    }
				    $this->email->send();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */