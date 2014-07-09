<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Files extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('project_model','project');
	}
	function add()
	{		
		if ($this->input->post()) {
			$project = $this->input->post('project', TRUE);
			$description = $this->input->post('description', TRUE);
						$this->load->library('form_validation');
						$this->form_validation->set_error_delimiters('<span style="color:red">', '</span><br>');
						$this->form_validation->set_rules('description', 'Description', 'required');

						if ($this->form_validation->run() == FALSE)
						{
								$this->session->set_flashdata('response_status', 'error');
								$this->session->set_flashdata('message', lang('error_in_form'));
								redirect('projects/view/details/'.$project);
						}else{

								if ($this->config->item('demo_mode') == 'FALSE') {
								$config['upload_path'] = './resource/project-files/';
									$config['allowed_types'] = $this->config->item('allowed_files');
									$config['max_size']	= $this->config->item('file_max_size');
									$config['encrypt_name'] = $this->config->item('encrypt_file_name');

									$this->load->library('upload', $config);

									if ( ! $this->upload->do_upload())
									{
										$this->session->set_flashdata('response_status', 'error');
										$this->session->set_flashdata('message',$this->lang->line('operation_failed'));
										redirect('projects/view/details/'.$project);
									}
									else
									{
										$data = $this->upload->data();
										$file_id = $this->project->insert_file($data['file_name'],$project,$description);
										//$this->_log_activity($this->lang->line('added_new_file'));

										$this->session->set_flashdata('response_status', 'success');
										$this->session->set_flashdata('message',$this->lang->line('file_uploaded_successfully'));
										redirect('projects/view/details/'.$project);
									}
								} else {
									$this->session->set_flashdata('response_status', 'error');
									$this->session->set_flashdata('message',$this->lang->line('demo_warning'));
										redirect('projects/view/details/'.$project);
								}
					}
		}else{
		$data['project'] = $this->uri->segment(4)/1200;
		$this->load->view('modal/add_file',isset($data) ? $data : NULL);
	}
}
	function download()
	{
	$this->load->helper('download');
	$file_id = $this->uri->segment(4)/1800;
	$project_id = $this->uri->segment(5)/1200;
		if ($this->project->get_file($file_id))
			{
			$file = $this->project->get_file($file_id);
			if(file_exists('./resource/project-files/'.$file->file_name)){
			$data = file_get_contents('./resource/project-files/'.$file->file_name); // Read the file's contents
			force_download($file->file_name, $data);
		}else{
			$this->session->set_flashdata('message',$this->lang->line('operation_failed'));
				redirect('projects/view/details/'.$project_id);
			}
		}
		else
		{
			$this->session->set_flashdata('message',$this->lang->line('operation_failed'));
				redirect('projects/view/details/'.$project_id);
		}
	}
	function _log_timesheet($task,$start_time,$end_time){
			$this->db->set('task', $task);
			$this->db->set('start_time', $start_time);
			$this->db->set('end_time', $end_time);
			$this->db->insert('tasks_timer'); 
	}
}

/* End of file view.php */
/* Location: ./application/controllers/view.php */