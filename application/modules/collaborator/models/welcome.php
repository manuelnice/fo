<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Uniportal
 * @author	William Mandai (http://willymandai.com)
 */
class Welcome extends CI_Model
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

	function dashboard_events($limit)
	{
		
		$this->db->join('users','users.id = activities.user');
		$query = $this->db->get('activities',$limit);
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function recent_messages($user)
	{
		$this->db->join('users','users.id = messages.user_from');
		$this->db->where('user_to',$user);
		$this->db->where('deleted','No');
		$query = $this->db->get('messages');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function recent_tasks()
	{
		$query = $this->db->get('tasks');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function recent_activities($limit)
	{
		$query = $this->db->order_by('activity_date','DESC')->get('activities',$limit);
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	
}

/* End of file model.php */