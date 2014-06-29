<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Uniportal
 * @author	William Mandai (http://willymandai.com)
 */
class Task_model extends CI_Model
{
	
	function get_all_records($table,$where,$join_table,$join_criteria,$order)
	{
		$this->db->where($where);
		if($join_table){
		$this->db->join($join_table,$join_criteria);
		}
		if ($order) {  $this->db->order_by($order,'DESC'); }		
		$query = $this->db->get($table);
		if ($query->num_rows() > 0){
			return $query->result();
		} else{
			return NULL;
		}
	}
	public function insert_file($filename, $year,$sem,$owner)
	{
		$data = array(
			'file_name'		=> $filename,
			'year'			=> $year,
			'semester'		=> $sem,
			'uploaded_by'		=> $owner
		);
		$this->db->insert('files', $data);
		return $this->db->insert_id();
	}
	public function get_file($file_id)
	{
	return $this->db->select()
			->from('files')
			->where('file_id', $file_id)
			->get()
			->row();
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
	public function assignment_submitted($user,$assignment)
    	{
	$this->db->where('assignment',$assignment);
	$this->db->where('student',$user);
	$query = $this->db->get('assign_records');
		if ($query->num_rows() > 0)
			{
  		 return $query->num_rows();
  		}else{
  			return NULL;
  		}
	}
	function mark_msg($msg_id,$status){
		$data = array(
               		'status' => $status
           		 );
		$this->db->where('msg_id', $msg_id);
		$this->db->update('messages', $data); 
	}
	
}

/* End of file model.php */