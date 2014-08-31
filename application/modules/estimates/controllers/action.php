<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package	Freelancer Office
 * 
 */


class Action extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('estimates_model','estimate');
	}
	
	function emailestimate(){
		if ($this->input->post()) {			
			$est_id = $this->input->post('est_id');
			$ref = $this->input->post('ref');
			$subject = $this->input->post('subject');
			$clientname = str_replace("{CLIENT}",$this->input->post('client_name'),$this->input->post('message'));
			$refno = str_replace("{REF}",$this->input->post('ref'),$clientname);
			$amount = str_replace("{AMOUNT}",$this->input->post('amount'),$refno);
			$currency = str_replace("{CURRENCY}",$this->config->item('default_currency'),$amount);
			$link = str_replace("{LINK}",base_url().'estimates/view/'.$ref,$currency);
			$message = str_replace("{COMPANY}",$this->config->item('company_name'),$link);
			$this->_email_estimate($est_id,$message,$subject);

			$this->db->set('emailed', 'Yes');
			$this->db->set('date_sent', date ("Y-m-d H:i:s", time()));
			$this->db->where('est_id',$est_id)->update('estimates'); 

			$activity = 'ESTIMATE #'.$ref. ' marked as Sent';

			$this->_log_activity($est_id,$activity,$icon = 'fa-envelope'); //log activity

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('estimate_sent_successfully'));
			redirect('estimates/manage/details/'.$est_id);
		}else{
			$data['estimate_details'] = $this->estimate->estimate_details($this->uri->segment(4));
			$this->load->view('modal/email_estimate',$data);
		}
	}

	function convert(){
		$estimate_details = $this->estimate->estimate_details($this->uri->segment(4));
		$est_id = $this->uri->segment(4);

			foreach ($estimate_details as $key => $est) {
				$ref = $est->reference_no;
				$form_data = array(
			                'reference_no' => $est->reference_no,
			                'client' => $est->client,
			                'due_date' => $est->due_date,
			                'notes' => $est->notes,
			                'tax' => $est->tax,
			            );
				$this->db->insert('invoices', $form_data);
				$invoice_id = $this->db->insert_id();
			}

			$estimate_items = $this->estimate->estimate_items($this->uri->segment(4));

			foreach ($estimate_items as $key => $est_item) {
				$form_data = array(
			                'invoice_id' => $invoice_id,
			                'item_desc' => $est_item->item_desc,
			                'unit_cost' => $est_item->unit_cost,
			                'quantity' => $est_item->quantity,
			                'total_cost' => $est_item->total_cost,
			            );
				$this->db->insert('items', $form_data);
			}		

			$activity = 'Converted EST #'.$ref. ' to Invoice';

			$this->_log_activity($est_id,$activity,$icon = 'fa-laptop'); //log activity	 

			$this->db->set('module', 'invoices');
			$this->db->set('module_field_id', $invoice_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', 'fa-laptop');
			$this->db->insert('activities'); 

			$this->db->set('invoiced', 'Yes');
			$this->db->where('est_id',$this->uri->segment(4))->update('estimates'); 

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('estimate_invoiced_successfully'));
			redirect('invoices/manage/details/'.$invoice_id);
	}

	function status(){
		$estimate = $this->uri->segment(5);
			if ($this->uri->segment(4) == 'accepted') {
				$status = 'Accepted';
			}else{
				$status = 'Declined';
			}
			$this->db->set('status', $status);
			$this->db->where('est_id',$estimate)->update('estimates'); 

			$activity = 'EST #'.$this->uri->segment(6). ' marked as '.$this->uri->segment(4);

			$this->_log_activity($estimate,$activity,$icon = 'fa-paperclip'); //log activity	 

			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('estimate_'.$this->uri->segment(4).'_successfully'));
			redirect('estimates/manage/details/'.$estimate);

	}
	function _email_estimate($est_id,$message,$subject){
			$client = $this->estimate->get_client($est_id);

			$client_address = $this->user_profile->get_user_details($client,'email');
			
			$params['recipient'] = $client_address;

			$params['subject'] = $subject;	
			$params['message'] = $message;

			$data['estimate_details'] = $this->estimate->estimate_details($est_id);
			$data['estimate_items'] = $this->estimate->estimate_items($est_id);
			
			$this->load->view('emails/estimate',$data);			
			// Get output html
			$html = $this->output->get_output();			
			// Load library
			$this->load->library('dompdf_gen');
			// Convert to PDF
			$params['attached_file'] = $this->dompdf->load_html($html);

			modules::run('fomailer/send_email',$params);
	}
	function delete()
	{
		if ($this->input->post()) {

			$estimate = $this->input->post('estimate', TRUE);

			$this->db->where('estimate_id',$estimate)->delete('estimate_items'); //delete estimate items

			$this->db->set('est_deleted', 'Yes');
			$this->db->where('est_id',$estimate)->update('estimates'); // mark estimate as deleted

			$this->db->set('deleted', '1');
			$this->db->where(array('module'=>'estimates', 'module_field_id' => $estimate))->update('activities'); //clear estimate activities


			$this->session->set_flashdata('response_status', 'success');
			$this->session->set_flashdata('message', lang('estimate_deleted_successfully'));
			redirect('estimates');
		}else{
			$data['estimate'] = $this->uri->segment(4);
			$data['estimate_ref'] = $this->uri->segment(5);
			$this->load->view('modal/delete_estimate',$data);

		}
	}

	

	function _log_activity($est_id,$activity,$icon){
			$this->db->set('module', 'estimates');
			$this->db->set('module_field_id', $est_id);
			$this->db->set('user', $this->tank_auth->get_user_id());
			$this->db->set('activity', $activity);
			$this->db->set('icon', $icon);
			$this->db->insert('activities'); 
	}

}

/* End of file invoices.php */
/* Location: ./application/controllers/invoices.php */