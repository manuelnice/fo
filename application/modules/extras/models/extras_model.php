<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Uniportal
 * @author	William Mandai (http://willymandai.com)
 */
class Extras_model extends CI_Model
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
	function check_rating($user,$official_rated)
    	{
	$this->db->where('rated_by',$user);
	$this->db->where('official_rated',$official_rated);
	$query = $this->db->get('ratings');
		if ($query->num_rows() > 0)
			{
  		 	return TRUE;
  		}else{
  			return FALSE;
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
	function official_rating($user) {
	$this->db->where('official_rated',$user);
	$this->db->select_avg('rated');
	$query = $this->db->get('ratings');
		if ($query->num_rows() > 0)
			{
  		 	$row = $query->row();
  		 	return round($row->rated);
  		}else{
  			return NULL;
  		}
	}
	
}

/* End of file model.php */