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
		return $this->db->where('project_id',$project)->get('projects')->result();
	}
	function task_details($task)
	{
		return $this->db->where('t_id',$task)->get('tasks')->result();
	}
	function project_activities($project)
	{
		$this->db->where('module','projects');
		return $this->db->where('module_field_id',$project)->order_by('activity_date','desc')->get('activities')->result();
	}
	function project_comments($project)
	{
		return $this->db->where('project',$project)->order_by('date_posted','desc')->get('comments')->result();
	}
	function project_tasks($project)
	{
		return $this->db->where('project',$project)->order_by('date_added','desc')->get('tasks')->result();
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
	function comment_replies($comment)
	{
		return $this->db->where('parent_comment',$comment)->get('comment_replies')->result();
	}
	function get_file($file_id)
		{
			return $this->db->select()
					->from('files')
					->where('file_id', $file_id)
					->get()
					->row();
		}
}

/* End of file model.php */