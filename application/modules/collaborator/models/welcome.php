<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Freelance Office
 * @author	William M
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

	function recent_projects($user,$limit)
	{
		return $this->db->where(array('assign_to'=>$user,'proj_deleted'=>'No'))->order_by('date_created','DESC')->get('projects',$limit)->result();
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