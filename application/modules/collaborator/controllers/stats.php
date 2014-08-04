<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| Kabarak University - Bsc. in Information Technology
*/


class Stats extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'finance') {
			$this->session->set_flashdata('message', 'Hey buddy, you are not allowed to access this page. Please contact the system admin for assistance.');
			redirect('');
		}
		$this->load->model('profile_model');
	}

	function index()
	{
	$this->load->module('layouts');
	$this->load->library('template');
	$this->template->title('Welcome - Kabarak Portal');
	$data['page'] = 'stats';
	$this->template
	->set_layout('users')
	->build('stats',isset($data) ? $data : NULL);
	}
	public function sales_chart()
	{
			$graph_data = $this->_data();
		$this->load->library('highcharts');
	$this->highcharts->set_title(date("Y").' Sales Chart', 'Monthly Sales'); // set chart title: title, subtitle(optional)
	$this->highcharts->set_axis_titles('Month', 'Earnings in USD'); // axis titles: x axis,  y axis
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
	$data['charts'] = $this->highcharts->set_serie($serie,'Earnings USD')->render();
	$this->load->view('sales', isset($data) ? $data : NULL);
	}
	function _data()
	{
		$data['axis']['categories'] = array('Jan', 'Feb', 'Mar', 'Apr', 'May','Jun', 'Jul', 'Aug', 'Sep','Oct','Nov','Dec');
		return $data;
	}
function _monthly_data($month)
	{
		$this->db->where('seller', $this->tank_auth->get_user_id());
		$this->db->select_sum('author_comm');
		$this->db->where('txn_month', $month);
		$this->db->where('txn_year', date("Y")); 
		$this->db->where('refunded',0); 
		$query = $this->db->get('sales');
		foreach ($query->result() as $row)
			{
				$amount = $row->author_comm ? $row->author_comm : 0;
			   return floor($amount);
			}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */