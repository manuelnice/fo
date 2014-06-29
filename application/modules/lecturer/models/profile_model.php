<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Uniportal
 * @author	William Mandai (http://willymandai.com)
 */
class Profile_model extends CI_Model
{
	function get_contributors()
	{
		$this->db->join('users','users.id = contributors.contributor_id');
		$this->db->join('account_details','account_details.user_id = contributors.contributor_id');
		$query = $this->db->get('contributors');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function get_activities($user = NULL)
	{
		$this->db->join('users','users.id = posts.posted_by');
		$this->db->join('account_details','account_details.user_id = posts.posted_by');
		$query = $this->db->get('posts');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function get_faqs($status)
	{
		$this->db->where('visible',$status);
		$this->db->join('users','users.id = faqs.author');
		$query = $this->db->get('faqs');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function get_all_records($table,$where,$join_table,$join_criteria)
	{
		$this->db->where($where);
		if($join_table){
		$this->db->join($join_table,$join_criteria);
		}
		$query = $this->db->get($table);
		if ($query->num_rows() > 0){
			return $query->result();
		} else{
			return NULL;
		}
	}
	function total_cf($student,$program,$table,$program_field,$cf_field)
    	{
    		if ($student) {
    			$this->db->where('student',$student);
    		}	
	$this->db->where($program_field,$program);
	$this->db->select_sum($cf_field);
	$query = $this->db->get($table);
	if ($query->num_rows() > 0)
		{
  		 $row = $query->row();
  		 return $row->$cf_field;
  		}
	}
	function get_record_by($table,$where,$join_table,$join_criteria)
    	{
    		if ($join_table) {
    			$this->db->join($join_table,$join_criteria);
    		}	
	$this->db->where($where);
	$query = $this->db->get($table);
	if ($query->num_rows() > 0)
		{
  		 $row = $query->row();
  		 return $row;
  		}
	}
	function news()
	{
		$this->db->where('deleted','No');
		$query = $this->db->get('news');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function upcoming_events()
	{
		$this->db->where('deleted','No');
		$query = $this->db->get('upcoming_events');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function if_unit_registered($unit,$student)
    	{
	$this->db->where('unit',$unit);
	$this->db->where('student',$student);
	$query = $this->db->get('unit_registrations');
	if ($query->num_rows() > 0)
		{
  			 return TRUE;
  		}else{
  			return FALSE;
  		}
	}
	
}

/* End of file model.php */