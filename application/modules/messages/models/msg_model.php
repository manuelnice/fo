<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Uniportal
 * @author	William Mandai (http://willymandai.com)
 */
class Msg_model extends CI_Model
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
	function group_messages_by_users($user)
	{
		$this->db->join('users','users.id = messages.user_from');
		$query = $this->db->where('user_to',$user)->group_by("user_from")->order_by("date_received","desc")->get('messages');
		if ($query->num_rows() > 0){
			return $query->result();
		} else{
			return NULL;
		}
	}
	function get_conversations($user_from)
	{
		$this->db->join('users','users.id = messages.user_from');
		$this->db->where('user_from', $user_from);
		$this->db->or_where('user_to', $user_from);
		return $this->db->order_by("date_received","desc")->get('messages')->result();
	}
	public function get_msg_subject($msg_id)
   	 {
	$this->db->where('msg_id',$msg_id);
	$this->db->select('subject');
	$query = $this->db->get('messages');
		if ($query->num_rows() > 0)
		{
  		 $row = $query->row();
  		 return $row->subject;
  		}
	}
	public function get_msg_text($msg_id)
   	 {
	$this->db->where('msg_id',$msg_id);
	$this->db->select('message');
	$query = $this->db->get('messages');
		if ($query->num_rows() > 0)
		{
  		 $row = $query->row();
  		 return $row->message;
  		}
	}
	public function get_user_id($username)
   	 {
	$this->db->where('username',$username);
	$this->db->select('id');
	$query = $this->db->get('users');
		if ($query->num_rows() > 0)
		{
  		 $row = $query->row();
  		 return $row->id;
  		}
	}
	public function check_contact_exist($user_id,$contact)
   	 {
	$this->db->where('user_id',$user_id);
	$this->db->where('contact',$contact);
	$this->db->select('contact_id');
	$query = $this->db->get('contacts');
		if ($query->num_rows() > 0)
		{
  		 $row = $query->row();
  		 return $row->contact_id;
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