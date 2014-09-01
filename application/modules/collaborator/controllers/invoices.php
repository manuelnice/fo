<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package	Freelancer Office
 * 
 */


class Invoices extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'collaborator') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('invoices/invoice_model');
		$this->load->library('highcharts');
	}

	function index()
	{
		$graph_data = $this->_data();

	$this->highcharts->set_title('YEARLY OVERVIEW', 'Invoice Payments'); // set chart title: title, subtitle(optional)
	$this->highcharts->set_axis_titles('Month', 'Amount Received'); // axis titles: x axis,  y axis
	$serie['data'] = array(
	$this->_monthly_data('01'), 
	$this->_monthly_data('02'), 
	$this->_monthly_data('03'), 
	$this->_monthly_data('04'), 
	$this->_monthly_data('05'), 
	$this->_monthly_data('06'), 
	$this->_monthly_data('07'),
	$this->_monthly_data('08'),
	$this->_monthly_data('09'),
	$this->_monthly_data('10'),
	$this->_monthly_data('11'),
	$this->_monthly_data('12')
	);
	$this->highcharts->set_xAxis($graph_data['axis']); // pushing categories for x axis labels
	$data['charts'] = $this->highcharts->set_serie($serie,'Amount Paid ('.$this->config->item('default_currency').')')->render();
	$this->load->view('invoices/invoice_chart',isset($data) ? $data : NULL);
	}

	function _data()
	{
		$data['axis']['categories'] = array('Jan', 'Feb', 'Mar', 'Apr', 'May','Jun', 'Jul', 'Aug', 'Sep','Oct','Nov','Dec');
		return $data;
	}
	function _monthly_data($month)
	{
		$this->db->select_sum('amount');
		$this->db->where('paid_by', $this->tank_auth->get_user_id()); 
		$this->db->where('month_paid', $month); 
		$this->db->where('year_paid', date('Y')); 
		$query = $this->db->get('payments');
		foreach ($query->result() as $row)
			{
				$amount = $row->amount ? $row->amount : 0;
   				return round($amount);
			}
	}
}

/* End of file invoices.php */