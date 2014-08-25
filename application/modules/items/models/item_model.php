<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Freelancer
 * @author	William Mandai (http://willymandai.com)
 */
class Item_model extends CI_Model
{
	
	function list_items($limit)
	{
		return $this->db->where('deleted','No')->order_by('item_id','desc')->get('items_saved',$limit,$this->uri->segment(3))->result();
	}
	
	function saved_item_details($item)
	{
		return $this->db->where('item_id',$item)->get('items_saved')->result();
	}
	
}

/* End of file model.php */