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

    function clean_demo_db($key = $this->uri->segment(3)){
        if($this->config->item('demo_mode') == 'TRUE'){
            if ($this->config->item('reset_key') == $key) {
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