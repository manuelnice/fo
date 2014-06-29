<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Uniportal
 * @author	William Mandai (http://willymandai.com)
 */
class Settings_model extends CI_Model
{
	
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
	function countries()
	{
		$query = $this->db->get('ref_country');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	
}

/* End of file model.php */