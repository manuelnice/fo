<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Crons extends MX_Controller {
 
    function __construct()
    {
        parent::__construct();
        $this->load->library('tank_auth');
        if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
            $this->session->set_flashdata('response_status', 'error');
            $this->session->set_flashdata('message', lang('access_denied'));
            redirect('');
        }
        // this controller can only be called from the command line
        //if (!$this->input->is_cli_request()) show_error('Direct access is not allowed');
    }

    function clean_demo_db(){
        if($this->config->item('demo_mode') == 'TRUE'){
            if ($this->config->item('reset_key') == $this->uri->segment(3)) {
                $this->_resetTables();
            }else{
                $this->session->set_flashdata('response_status', 'error');
                $this->session->set_flashdata('message', lang('reset_key_error'));
                 redirect('settings/update/general');
            }
        


        $this->session->set_flashdata('response_status', 'success');
        $this->session->set_flashdata('message', lang('clean_demo_db_success'));
        redirect('settings/update/general');
        }else{
            $this->session->set_flashdata('response_status', 'error');
            $this->session->set_flashdata('message', lang('clean_demo_db_error'));
            redirect('settings/update/general');
        }
    }

    function _resetTables() {
        $sql = file_get_contents('./resource/database.backup/FoData.sql');
        foreach (explode(";\n",$sql) as $sql) {
            $sql = trim($sql);
            if ($sql) {
                $this->db->query($sql);
            }
        }
    }
}