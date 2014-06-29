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
	function get_all_records($table,$where,$join_table,$join_criteria,$order)
	{
		$this->db->where($where);
		if($join_table){
		$this->db->join($join_table,$join_criteria);
		}
		if ($order) { $this->db->order_by($order,'DESC'); }
		$query = $this->db->get($table);
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
	function news()
	{
		$this->db->where('deleted','No');
		$query = $this->db->get('news');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function get_fee_payments()
	{
		$this->db->where('deleted','No');
		$this->db->group_by('month_paid');
		$query = $this->db->get('fees');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function get_fee_report()
	{
		$this->db->join('programs','programs.pr_id = fees.program');
		$this->db->where('deleted','No');
		$this->db->group_by('program');
		$query = $this->db->get('fees');
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
	function get_student_id($reg_no) {
	$this->db->where('reg_no',$reg_no);
	$this->db->select('user_id');
	$query = $this->db->get('account_details');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->user_id;
  		}
	}
	function program_payment($program) {
	$this->db->where('program',$program);
	$this->db->select_sum('amount');
	$query = $this->db->get('fees');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->amount;
  		}
	}
	function program_payable($program) {
	$this->db->where('program',$program);
	$this->db->select_sum('payable_amount');
	$query = $this->db->get('fees');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->payable_amount;
  		}
	}
	function program_balance($program) {
	$this->db->where('program',$program);
	$this->db->select_sum('balance');
	$query = $this->db->get('fees');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->balance;
  		}
	}
	function program_percentage($program) {
	$total_paid = $this->program_payment($program);
	$total_payable = $this->program_payable($program);
	return round(($total_paid/$total_payable)*100);
	}
	function account_no($bank) {
	$this->db->where('bank_id',$bank);
	$this->db->select('account_no');
	$query = $this->db->get('banks');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->account_no;
  		}
	}
	
}

/* End of file model.php */