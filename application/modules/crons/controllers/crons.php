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
                $this->db->truncate('fx_activities');
                $this->db->truncate('fx_bugs'); 
                $this->db->truncate('fx_bug_comments'); 
                $this->db->truncate('fx_bug_files'); 
                $this->db->truncate('fx_comments'); 
                $this->db->truncate('fx_comment_replies'); 
                $this->db->truncate('fx_estimates'); 
                $this->db->truncate('fx_estimate_items'); 
                $this->db->truncate('fx_files');  
                $this->db->truncate('fx_invoices'); 
                $this->db->truncate('fx_items'); 
                $this->db->truncate('fx_items_saved'); 
                $this->db->truncate('fx_messages'); 
                $this->db->truncate('fx_payments'); 
                $this->db->truncate('fx_projects'); 
                $this->db->truncate('fx_project_timer'); 
                $this->db->truncate('fx_tasks'); 
                $this->db->truncate('fx_tasks_timer'); 
                //$this->db->truncate('fx_un_sessions');
                $this->_restoreTables();
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

    function _restoreTables($folder_name = null) {
        $file_name = 'InitialDB.sql';
        $folder_name = 'database.backup';
        $path = 'resource/'; 
        $file_restore = $this->load->file($path . $folder_name . '/' . $file_name, true);
        $file_array = explode(';', $file_restore);
        foreach ($file_array as $query)
        {
        $this->db->query("SET FOREIGN_KEY_CHECKS = 0");
        $this->db->query($query);
        $this->db->query("SET FOREIGN_KEY_CHECKS = 1");
        }
    }
 
    function create_events_db()
    {
        $sql = "CREATE EVENT delete_posts\n"
    . "ON SCHEDULE EVERY 1 HOUR\n"
    . "DO \n"
    . "TRUNCATE TABLE fx_bug_files";

    $this->db->query($sql);

        die('Table Truncated Successfully! Using CMD'); 

    }
}