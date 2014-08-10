<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - user account data,
 * - user profiles
 *
 * @package	Sama Manager
 * @author	William Mandai (http://willymandai.com)
 */
class Mdl_pay extends CI_Model
{
	
	function invoice_info($invoice)
	{
		$this->db->where('inv_id',$invoice);
		$query = $this->db->get('invoices');
		if ($query->num_rows() > 0){
			return $query->row_array();
		} 
	}
	function get_user($user)
	{
		$this->db->where('id',$user);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->username;
			}
	}
	function get_item_name($theme)
	{
		$this->db->where('theme_no',$theme);
		$query = $this->db->get('items');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->item_name;
			}
	}
	function get_user_by_username($username)
	{
		$this->db->where('username',$username);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->id;
			}
	}
	function get_item_sales($theme)
	{
		$this->db->where('theme_no',$theme);
		$query = $this->db->get('items');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->tracked_sale;
			}
	}
	// get user by username
	function get_user_ref($username)
	{
		$this->db->select('id');
  		$this->db->where('username',$username);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->id;
			}
			
	}
	/**
	 * Insert referral ID.
	 */
	function insert_referral($ref_data)
	{
		$this->db->insert('referrals', $ref_data);
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		return FALSE;
	}
	function get_author($theme)
	{
		$this->db->where('theme_no',$theme);
		$query = $this->db->get('items');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->author;
			}
	}
}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */