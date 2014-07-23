<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Freelancer
 * @author	William Mandai (http://willymandai.com)
 */
class Invoice_model extends CI_Model
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
	
    function clients()
	{
		$query = $this->db->where('role_id',2)->get('users');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}

    function payment_methods()
	{
			return $this->db->get('payment_methods')->result();
	}
	function saved_items()
	{
			return $this->db->get('items_saved')->result();
	}
	function invoice_details($invoice_id)
	{
		$this->db->join('users','users.id = invoices.client');
		return $this->db->where('inv_id',$invoice_id)->get('invoices')->result();
	}
	function invoice_activities($invoice_id)
	{
		$this->db->join('users','users.id = activities.user');
		$this->db->where('module', 'invoices');
		return $this->db->where('module_field_id',$invoice_id)->order_by('activity_date','desc')->get('activities')->result();
	}
	function saved_item_details($item)
	{
		return $this->db->where('item_id',$item)->get('items_saved')->result();
	}
	function invoice_items($invoice_id)
	{
		$this->db->join('invoices','invoices.inv_id = items.invoice_id');
		$query = $this->db->where('invoice_id',$invoice_id)->get('items');
		if ($query->num_rows() > 0){
			return $query->result();
		} 
	}
	function payment_status($invoice) {
		$invoice_payable = $this->user_profile->invoice_payable($invoice);
		$invoice_paid = $this->user_profile->invoice_payment($invoice);
		$due = $invoice_payable - $invoice_paid;
		if($invoice_paid < 1){
			return "Not Paid";
		}elseif ($due <= 0) {
			return "Fully Paid";
		}else{
			return "Parially Paid";
		}
	}
	function get_client($invoice){
	$query = $this->db->select('client')->where('inv_id',$invoice)->get('invoices');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->client;
  		}
	}
}

/* End of file model.php */