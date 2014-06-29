<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Uniportal
 * @author	William Mandai (http://willymandai.com)
 */
class Home_model extends CI_Model
{
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
	function complete_assignments($user)
	{
		$this->db->where('student',$user);
		$query = $this->db->get('assign_records');
		if ($query->num_rows() > 0){
			return $query->num_rows();
		} else{
			return 0;
		}
	}
	function complete_units($user)
	{
		$this->db->where('student',$user);
		$query = $this->db->get('results');
		if ($query->num_rows() > 0){
			return $query->num_rows();
		} else{
			return 0;
		}
	}

	function _get_study_details($user,$field) {
	$this->db->where('user_id',$user);
	$this->db->where($field. ' !=',0);
	$this->db->select($field);
	$query = $this->db->get('account_details');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->$field;
  		}
	}
	
}

/* End of file model.php */