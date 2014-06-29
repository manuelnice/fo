<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Freelancer
 * @author	William Mandai (http://willymandai.com)
 */
class Client_model extends CI_Model
{
	
	function get_all_records($table,$where,$join_table,$join_criteria,$order)
	{
		$this->db->where($where);
		if($join_table){
		$this->db->join($join_table,$join_criteria);
		}
		$query = $this->db->order_by($order,'DESC')->get($table);
		if ($query->num_rows() > 0){
			return $query->result();
		} else{
			return NULL;
		}
	}
	function user_details($user_id)
	{
		$this->db->join('account_details','account_details.user_id = users.id');
		$query = $this->db->where('user_id',$user_id)->get('users');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function user_invoices($user_id)
	{
		$query = $this->db->where('client',$user_id)->get('invoices',20);
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function user_projects($user_id)
	{
		$query = $this->db->where('client',$user_id)->get('projects',20);
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	
}

/* End of file model.php */