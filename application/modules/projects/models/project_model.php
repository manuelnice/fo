<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Freelancer
 * @author	William Mandai (http://willymandai.com)
 */
class Project_model extends CI_Model
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
	function project_details($project)
	{
		$query = $this->db->where('project_id',$project)->get('projects');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function project_activities($project)
	{
		$this->db->where('module','projects');
		$query = $this->db->where('module_field_id',$project)->order_by('activity_date','desc')->get('activities');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function project_comments($project)
	{
		$query = $this->db->where('project',$project)->order_by('date_posted','desc')->get('comments');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function project_tasks($project)
	{
		$query = $this->db->where('project',$project)->order_by('date_added','desc')->get('tasks');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function project_files($project)
	{
		$query = $this->db->where('project',$project)->order_by('date_posted','desc')->get('files');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function assign_to()
	{
		$query = $this->db->where('role_id !=',2)->get('users');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function clients()
	{
		$query = $this->db->where('role_id',2)->get('users');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
}

/* End of file model.php */