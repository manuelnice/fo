<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package	Uniportal
 * @author	William Mandai (http://willymandai.com)
 */
class Invoice_model extends CI_Model
{
	
	function invoice_details($invoice_id)
	{
		$this->db->join('users','users.id = invoices.client');
		return $this->db->where('inv_id',$invoice_id)->get('invoices')->result();
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
	
}

/* End of file model.php */