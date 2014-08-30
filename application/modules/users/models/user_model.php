<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Freelancer Office
 * @author	William M
 */
class User_model extends CI_Model
{
	
	function users($limit,$offset)
	{
		$this->db->join('account_details','account_details.user_id = users.id');
		return $this->db->where('activated','1')->order_by('created','desc')->get('users',$limit,$offset)->result();
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
	function roles()
	{
		$query = $this->db->get('roles');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function user_search($keyword,$limit)
	{
		$this->db->join('account_details','account_details.user_id = users.id');
		$query = $this->db->like('username',$keyword)->or_like('fullname',$keyword)->order_by('created','desc')->get('users',$limit);
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	
}

/* End of file model.php */