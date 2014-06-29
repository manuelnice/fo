<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends MX_Controller {
function __construct()
	{
		parent::__construct();
		modules::run('auth/check/is_logged_in');
		modules::run('auth/check/is_admin');
		$this->load->model('mdl_regions');
		$this->load->model('mdl_reports');
		$this->_get_lang();
		$this->lang->load('fx',$this->config->item('language'));
		$this->load->helper('language');
	}
	public function payments()
	{
			$graph_data = $this->_data();
		$this->_get_lang();
		$this->lang->load('fx',$this->config->item('language'));
		$this->load->module('layouts');
		$this->load->library('template');
		$this->load->library('highcharts');
		$this->template->title($this->lang->line('payments').' '.$this->lang->line('reports'));
	$data['page'] = $this->lang->line('reports');
	$this->highcharts->set_title('MONTHLY STATISCTICS', 'Monthly Payments'); // set chart title: title, subtitle(optional)
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
	$data['charts'] = $this->highcharts->set_serie($serie,'Amount Rec.')->render();
	$this->template
	->set_layout('admin')
	->build('payments',$data);
	}
	public function logins()
	{
		$this->_get_lang();
		$this->lang->load('fx',$this->config->item('language'));
		$this->load->module('layouts');
		$this->load->library('template');
		$this->template->title($this->lang->line('login').' '.$this->lang->line('reports'));
	$data['page'] = $this->lang->line('reports');
	$data['logs'] = $this->mdl_reports->user_log();
	$this->template
	->set_layout('admin')
	->build('logins',$data);
	}
	function _data()
	{
		$data['axis']['categories'] = array('Jan', 'Feb', 'Mar', 'Apr', 'May','Jun', 'Jul', 'Aug', 'Sep','Oct','Nov','Dec');
		return $data;
	}
function _monthly_data($month)
	{
		$this->db->select_sum('paid_amount');
		$this->db->where('month', $month); 
		$query = $this->db->get('payments');
		foreach ($query->result() as $row)
{
	$amount = $row->paid_amount ? $row->paid_amount : 0;
   return floor($amount);
}
	}
	function _get_lang()
	{
	if($this->mdl_regions->get_lang($this->tank_auth->get_user_id())){
			$this->config->set_item('language', $this->mdl_regions->get_lang($this->tank_auth->get_user_id()));
		}else{
		$this->config->set_item('language', $this->config->item('lang'));
		}
	}
}

/* End of file payments.php */