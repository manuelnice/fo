<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Sama Manager
 * @author	William Mandai (http://www.willymandai.com)
 */
class Mdl_reports extends CI_Model
{

function payments()
	{
		$this->db->join('users','users.id = payments.user');
		$this->db->join('memberships','memberships.m_id = payments.membership_p');
		$query = $this->db->get('payments');
		if ($query->num_rows() > 0){
			return $query->result_array();
		} 
	}
	function memberships()
	{
		$query = $this->db->get('memberships');
		if ($query->num_rows() > 0){
			return $query->result_array();
		} 
	}
	function user_log()
	{
		$this->db->group_by("user");
		$this->db->order_by("user", "random"); 
		$query = $this->db->get('auth_log',5);
		if ($query->num_rows() > 0){
			return $query->result_array();
		} 
	}
	function platform($platform)
	{
		$this->db->like('u_platform', $platform); 
		$query = $this->db->get('auth_log');
		if ($query->num_rows() > 0){
			return $query->num_rows();
		} 
	}
function browser($browser)
	{
		$this->db->like('browser', $browser); 
		$query = $this->db->get('auth_log');
		if ($query->num_rows() > 0){
			return $query->num_rows();
		} 
	}
	public function get_user($username)
{
	return $this->db->select('id')
			->from('users')
			->where('username', $username)
			->get()
			->row()->id;
}
}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */