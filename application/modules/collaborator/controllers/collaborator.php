<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Collaborator extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->tank_auth->is_logged_in()) {
			$this->session->set_flashdata('message',lang('login_required'));
			redirect('auth/login');
		}
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) == 'admin') {
			redirect('welcome');
		}
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) == 'client') {
			redirect('user');
		}
	}

	function index()
	{
		$graph_data = $this->_data();
	$this->load->model('welcome','home_model');
	$this->load->module('layouts');
	$this->load->library('template');
	$this->load->library('highcharts');
	$this->template->title('Welcome - '.$this->config->item('company_name'));
	$data['page'] = lang('home');
	$data['projects'] = $this->home_model->recent_projects($this->tank_auth->get_user_id(),$limit = 5);
	$data['activities'] = $this->home_model->recent_activities($limit = 6);

	$this->highcharts->set_title('MONTHLY STATISTICS', 'Monthly Payments'); // set chart title: title, subtitle(optional)
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
	->set_layout('users')
	->build('welcome',isset($data) ? $data : NULL);
	}
	function _data()
	{
		$data['axis']['categories'] = array('Jan', 'Feb', 'Mar', 'Apr', 'May','Jun', 'Jul', 'Aug', 'Sep','Oct','Nov','Dec');
		return $data;
	}
	function _monthly_data($month)
	{
		$query = $this->db->select_sum('amount')->where(array('paid_by'=>$this->tank_auth->get_user_id(),'month_paid'=> $month))->get('payments');
		foreach ($query->result() as $row)
			{
				$amount = $row->amount ? $row->amount : 0;
   				return round($amount);
			}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */