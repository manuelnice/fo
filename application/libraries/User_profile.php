<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class User_profile {

	function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->database();
	}
	public function get_avatar($user_id)
    {
	$this->ci->db->where('user_id',$user_id);
	$this->ci->db->select('avatar');
	$query = $this->ci->db->get('account_details');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->avatar;
  		}
	}
	public function get_fullname($user_id)
    	{
	$this->ci->db->where('user_id',$user_id);
	$this->ci->db->select('fullname');
	$query = $this->ci->db->get('account_details');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->fullname;
  		}
	}
	public function count_table_rows($table)
    	{
	$query = $this->ci->db->get($table);
		if ($query->num_rows() > 0)
			{
  		 return $query->num_rows();
  		}else{
  			return 0;
  		}
	}
	public function task_by_status($progress)
    	{
    	$this->ci->db->where('progress <',$progress);
	$query = $this->ci->db->get('tasks');
		if ($query->num_rows() > 0)
			{
  		 return $query->num_rows();
  		}else{
  			return 0;
  		}
	}
	public function project_by_status($progress)
    	{
    	$this->ci->db->where('progress',$progress);
	$query = $this->ci->db->get('projects');
		if ($query->num_rows() > 0)
			{
  		 return $query->num_rows();
  		}else{
  			return 0;
  		}
	}
	public function received_messages($user)
    	{
    	$this->ci->db->where('user_to',$user);
	$query = $this->ci->db->get('messages');
		if ($query->num_rows() > 0)
			{
  		 return $query->num_rows();
  		}else{
  			return 0;
  		}
	}
	public function invoice_perc($invoice)
   	 {
   	 $invoice_payment = $this->invoice_payment($invoice);
   	 $invoice_payable = $this->invoice_payable($invoice);
   	 if ($invoice_payable < 1 OR $invoice_payment < 1) {
   	 	$perc_paid = 0;
   	 }else{
   	 	$perc_paid = ($invoice_payment/$invoice_payable)*100;
   	 }
		return round($perc_paid);
	}
	public function invoice_payment($invoice)
   	 {
	$this->ci->db->where('invoice',$invoice);
	$this->ci->db->select_sum('amount');
	$query = $this->ci->db->get('payments');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->amount;
  		}
	}
	public function client_paid($client)
   	 {
	$query = $this->ci->db->where('paid_by',$client)->select_sum('amount')->get('payments')->row();
		
  		 return $query->amount;
	}
	public function invoice_payable($invoice)
   	 {
	$this->ci->db->where('invoice_id',$invoice);
	$this->ci->db->select_sum('total_cost');
	$query = $this->ci->db->get('items');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->total_cost;
  		}
	}

	public function client_invoices($client)
   	 {
	return $this->ci->db->get_where('invoices',array('client' => $client))->result_array();
	}
	public function client_payable($client)
   	 {
   	 	$client_invoices = $this->client_invoices($client) ; 
   	 	  	 	
	foreach ($client_invoices as $invoice) {
		$this->ci->db->select_sum('total_cost');
		//$names = array('Frank', 'Todd', 'James');
		$this->ci->db->where_in('invoice_id', $invoice['inv_id']);
		$query = $this->ci->db->get('items');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->total_cost;
  		}
		}
	}

	public function estimate_payable($estimate)
   	 {
	$query = $this->ci->db->where('estimate_id',$estimate)->select_sum('total_cost')->get('estimate_items');
  	$row = $query->row();
  	return $row->total_cost;
	}
	public function average_monthly_paid($month)
   	 {
   	 $month_paid = $this->monthly_payment($month);
   	 $amount_paid = $this->total_payments();
   	 if ($amount_paid == 0 OR $month_paid == 0) {
   	 	$perc_paid = 0;	
  		 return $perc_paid;
   	 }else{
   	 $perc_paid = ($month_paid/$amount_paid)*100;	
  		 return round($perc_paid);
  		}
	}
	public function monthly_payment($month)
   	 {
	$this->ci->db->where('month_paid',$month);
	$this->ci->db->where('year_paid',date('Y'));
	$this->ci->db->select_sum('amount');
	$query = $this->ci->db->get('payments');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->amount;
  		}
	}
	public function total_payments()
   	 {
	$this->ci->db->select_sum('amount');
	$query = $this->ci->db->get('payments');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->amount;
  		}
	}
	public function generate_string()
   	 {
   	 $this->ci->load->helper('string');
   	 return random_string('nozero', 7);
	}
	function _sem_payable($program,$yos,$sem) {
	$this->ci->db->where('program_id',$program);
	$this->ci->db->where('yos',$yos);
	$this->ci->db->where('sem',$sem);
	$this->ci->db->where('optional','No');
	$this->ci->db->or_where('common_fee','Yes');
	$this->ci->db->select_sum('amount');
	$query = $this->ci->db->get('fee_structure');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->amount;
  		}else{
  			return 1;
  		}
	}
	function total_lessons($sem) {
	$start_date = $this->current_sem_detail($sem,'start_day');
	$end_date = $this->current_sem_detail($sem,'end_day');
	$diff = abs ( strtotime($start_date) - strtotime($end_date) );
	$days = $diff/86400;
	$lessons = $days/7;
	return round($lessons);
	}
	
	function role_by_id($role_id) {
	$query = $this->ci->db->where('r_id',$role_id)->select('role')->get('roles');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->role;
  		}
	}
	function current_sem_detail($sem,$detail) {
	$this->ci->db->where('sem_id',$sem);
	$this->ci->db->select($detail);
	$query = $this->ci->db->get('semesters');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->$detail;
  		}
	}
	function unit_detail($unit,$detail) {
	$this->ci->db->where('u_id',$unit);
	$this->ci->db->select($detail);
	$query = $this->ci->db->get('units');
		if ($query->num_rows() > 0)
		{
  		 $row = $query->row();
  		 return $row->$detail;
  		}
	}
	function average_points($user,$year) {
	$this->ci->db->where('student',$user);
	if ($year) {
		$this->ci->db->where('yos',$year);
	}	
	$this->ci->db->select_avg('points');
	$query = $this->ci->db->get('results');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return round($row->points);
  		}
	}
	function get_profile_details($user,$field) {
	$this->ci->db->where('user_id',$user);
	$this->ci->db->select($field);
	$query = $this->ci->db->get('account_details');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->$field;
  		}
	}
	function get_user_details($user,$field) {
	$this->ci->db->where('id',$user);
	$this->ci->db->select($field);
	$query = $this->ci->db->get('users');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->$field;
  		}
	}
	function _get_year_of_study($user) {
	$this->ci->db->where('user_id',$user);
	$this->ci->db->where('year_of_study !=',0);
	$this->ci->db->select('year_of_study');
	$query = $this->ci->db->get('account_details');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->year_of_study;
  		}
	}
	function _get_semester($user){
		$this->ci->db->where('user_id',$user);
		$this->ci->db->where('semester !=',0);
	$this->ci->db->select('semester');
	$query = $this->ci->db->get('account_details');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->semester;
  		}
	}
	function _get_program($user){
		$this->ci->db->where('user_id',$user);
		$this->ci->db->where('program !=',0);
	$this->ci->db->select('program');
	$query = $this->ci->db->get('account_details');
		if ($query->num_rows() > 0)
			{
  		 $row = $query->row();
  		 return $row->program;
  		}
	}
	function count_rows($table,$where)
	{
		$this->ci->db->where($where);
		$query = $this->ci->db->get($table);
		if ($query->num_rows() > 0){
			return $query->num_rows();
		} else{
			return 0;
		}
	}
	function get_sum($table,$field,$where)
	{
		$this->ci->db->where($where);
		$this->ci->db->select_sum($field);
		$query = $this->ci->db->get($table);
		if ($query->num_rows() > 0){
		$row = $query->row();
  		 return $row->$field;
		} else{
			return 0;
		}
	}
	function get_fee_average($year,$month) {
	$total_yearly = $this->get_sum('fees', 'amount',$array = array('year_paid' => $year,'deleted' =>'No'));
	$total_monthly=  $this->get_sum('fees', 'amount',$array = array('month_paid' => $month,'deleted' =>'No'));
	return round(($total_monthly/$total_yearly)*100);
	}

	function rank_points($average_points){
		if ($average_points > 70) {
						return 'First Class';
					}elseif ($average_points > 60) {
						return 'Second Class Upper Division';
					}elseif ($average_points > 50) {
						return 'Second Class Lower Division';
					}elseif ($average_points == '0') {
						return 'Nothing Available';
					}elseif ($average_points > 45 ) {
						return  'Pass';
					}else{
						return  'Complete Fail';
					}
	}
	function points_comment($average_points){
		if ($average_points > 70) {
						return 'Excellent';
					}elseif ($average_points > 60) {
						return 'Good';
					}elseif ($average_points > 50) {
						return 'Fair';
					}elseif ($average_points == '0') {
						return 'Null';
					}elseif ($average_points > 45 ) {
						return  'Poor';
					}else{
						return  'Poorest';
					}
	}

	function get_time_diff($from , $to){
	$diff = abs ( $from - $to );
	//$units = array( 'year' => 31557600 ,'month' => 2635200, 'week' => 604800, 'day' => 86400 , 'hour' => 3600 , 'minute' => 60, 'second' => 1 );
	$years = $diff/31557600;
	$months = $diff/2635200;
	$weeks = $diff/604800;
	$days = $diff/86400;
	$hours = $diff/3600;
	$minutes = $diff/60;
	if ($years > 1) {
		$duration = round($years) .' years';
	}elseif ($months > 1) {
		$duration = round($months) .' months';
	}elseif ($weeks > 1) {
		$duration = round($weeks) .' weeks';
	}elseif ($days > 1) {
		$duration = round($days).' days';
	}elseif ($hours > 1) {
		$duration = round($hours) .' hours';
	} else {
		$duration = round($minutes) .' minutes';
	}
	
	return $duration;
	}

	function addOrdinalNumberSuffix($num) {
      switch ($num) {
        // Handle 1st, 2nd, 3rd
        case 1:  return $num.'st';
        case 2:  return $num.'nd';
        case 3:  return $num.'rd';
      }
    return $num.'th';
  }
  
}

/* End of file User_prof.php */