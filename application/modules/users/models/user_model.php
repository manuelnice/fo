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
		return $this->db->where(array('activated'=>'1','user_id !='=>$this->tank_auth->get_user_id()))->order_by('created','desc')->get('users',$limit,$offset)->result();
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
		return $this->db->where('client',$user_id)->get('invoices')->result();
	}
	function user_projects($user_id)
	{
		$query = $this->db->where('client',$user_id)->get('projects',20);
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function user_project_files($user)
	{
		$this->db->join('users','users.id = files.uploaded_by');
		return $this->db->where('uploaded_by',$user)->get('files')->result();
	}
	function user_bug_files($user)
	{
		$this->db->join('users','users.id = bug_files.uploaded_by');
		return $this->db->where('uploaded_by',$user)->get('bug_files')->result();
	}
	function invoice_items($invoice)
	{
		return $this->db->where('invoice_id',$invoice)->get('items')->result();
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