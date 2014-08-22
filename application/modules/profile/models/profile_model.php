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
	function get_activities($user ,$limit)
	{
		$this->db->join('users','users.id = posts.posted_by');
		$this->db->join('account_details','account_details.user_id = posts.posted_by');
		if ($user) {
			$this->db->where('posted_by',$user);
		}
		$this->db->where('post_deleted',0);
		$this->db->order_by('date_posted','DESC');
		$query = $this->db->get('posts',$limit);
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
	function get_all($table)
	{
		$query = $this->db->get($table);
		if ($query->num_rows() > 0){
			return $query->result();
		} else{
			return NULL;
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
	function update_avatar($filename)
	{
		$data = array(
			'avatar'	=> $filename,
		);
		$this->db->where('user_id',$this->tank_auth->get_user_id())->update('account_details', $data);
		return TRUE;
	}
	
}

/* End of file model.php */