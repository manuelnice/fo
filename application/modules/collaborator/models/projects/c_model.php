<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Uniportal
 * @author	William Mandai (http://willymandai.com)
 */
class C_model extends CI_Model
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
	}function project_details($project)
	{
		return $this->db->where('project_id',$project)->get('projects')->result();
	}
	function task_details($task)
	{
		return $this->db->where('t_id',$task)->get('tasks')->result();
	}
	function project_activities($project)
	{
		$this->db->join('users','users.id = activities.user');
		$this->db->where('module','projects');
		return $this->db->where('module_field_id',$project)->order_by('activity_date','desc')->get('activities')->result();
	}
	function project_comments($project)
	{
		return $this->db->where('project',$project)->order_by('date_posted','desc')->get('comments')->result();
	}
	function project_tasks($project)
	{
		return $this->db->where(array('assigned_to' => $this->tank_auth->get_user_id(),'project'=>$project))->order_by('date_added','desc')->get('tasks')->result();
	}
	function project_files($project)
	{
		$this->db->join('users','users.id = files.uploaded_by');
		return $this->db->where('project',$project)->order_by('date_posted','desc')->get('files')->result();
	}
	function project_bugs($project)
	{
		$this->db->join('users','users.id = bugs.reporter');
		return $this->db->where('project',$project)->order_by('reported_on','desc')->get('bugs')->result();
	}
	function timesheets($project)
	{
		return $this->db->where('project',$project)->get('project_timer')->result();
	}
	function comment_replies($comment)
	{
		return $this->db->where('parent_comment',$comment)->get('comment_replies')->result();
	}
	function assign_to()
	{
		return $this->db->where('role_id !=',2)->get('users')->result();
	}
	function clients()
	{
		return $this->db->where('role_id',2)->get('users')->result();
	}
	function get_project_start($project){
	$query = $this->db->select('timer_start')->where('project_id',$project)->get('projects');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->timer_start;
  		}
	}
	function get_task_start($task){
	$query = $this->db->select('start_time')->where('t_id',$task)->get('tasks');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->start_time;
  		}
	}
	function get_project_logged_time($project){
	$query = $this->db->select('time_logged')->where('project_id',$project)->get('projects');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->time_logged;
  		}
	}
	function get_task_logged_time($task){
	$query = $this->db->select('logged_time')->where('t_id',$task)->get('tasks');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->logged_time;
  		}
	}
	
}

/* End of file model.php */