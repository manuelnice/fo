<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package	Freelancer Office
 * 
 */

class Cron_model extends CI_Model
{
	
	function overdue_projects()
	{
		$this->db->join('users','users.id = projects.client');
		$query = $this->db->select('email')->where(array('proj_deleted'=> 'No','due_date'=>date("d-m-Y")))->get('projects');
		if ($query->num_rows() > 0){
			return $query->result();
		} else{
			return FALSE;
		}
	}

	function overdue_invoices()
	{
		$this->db->join('users','users.id = invoices.client');
		$query = $this->db->select('email')->where(array('inv_deleted'=> 'No','emailed'=>'Yes','due_date'=>date("d-m-Y")))->get('invoices');
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return FALSE;
		}
	}
	
	
}

/* End of file cron_model.php */