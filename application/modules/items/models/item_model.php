<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Freelancer
 * @author	William Mandai (http://willymandai.com)
 */
class Item_model extends CI_Model
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
	
	function saved_item_details($item)
	{
		return $this->db->where('item_id',$item)->get('items_saved')->result();
	}
	
}

/* End of file model.php */