<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Freelancer
 * @author	William Mandai (http://willymandai.com)
 */
class Estimates_model extends CI_Model
{
	
	function get_all_records($table,$where,$join_table,$join_criteria,$order)
	{
		$this->db->where($where);
		if($join_table){
		$this->db->join($join_table,$join_criteria);
		}
		$query = $this->db->order_by($order,'desc')->get($table);
		if ($query->num_rows() > 0){
			return $query->result();
		} else{
			return NULL;
		}
	}
	
    function clients()
	{
		$query = $this->db->where('role_id',2)->get('users');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}

    function payment_methods()
	{
			return $this->db->get('payment_methods')->result();
	}
	function estimate_details($est_id)
	{
		$this->db->join('users','users.id = estimates.client');
		$query = $this->db->where('est_id',$est_id)->get('estimates');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function estimate_activities($est_id)
	{
		$this->db->join('estimates','estimates.est_id = estimate_activities.estimate');
		$query = $this->db->where('estimate',$est_id)->get('estimate_activities');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function estimate_items($est_id)
	{
		$this->db->join('estimates','estimates.est_id = estimate_items.estimate_id');
		$query = $this->db->where('estimate_id',$est_id)->get('estimate_items');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
}

/* End of file model.php */