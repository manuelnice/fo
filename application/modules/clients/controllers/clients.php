<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Author Message
|--------------------------------------------------------------------------
|
| System Developed with love by William Mandai
| 
*/


class Clients extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('tank_auth');
		if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) != 'admin') {
			$this->session->set_flashdata('message', lang('access_denied'));
			redirect('');
		}
		$this->load->model('client_model');
	}

	function index()
	{
	$graph_data = $this->_data();
	$this->load->module('layouts');
	$this->load->library('template');
	$this->load->library('highcharts');
	$this->template->title(lang('clients').' - '.$this->config->item('company_name'). ' '. $this->config->item('version'));
	$data['page'] = lang('clients');
	$data['clients'] = $this->client_model->get_all_records($table = 'users',
		$array = array(
			'role_id'=>'2','activated' => '1'),$join_table = 'account_details',$join_criteria = 'account_details.user_id = users.id','created');
	$this->highcharts->set_title(lang('yearly_overview'), lang('clients_registration')); // set chart title: title, subtitle(optional)
	$this->highcharts->set_axis_titles(lang('month'), lang('registered_clients')); // axis titles: x axis,  y axis
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
	$data['charts'] = $this->highcharts->set_serie($serie,lang('clients_registered'))->render();
	$this->template
	->set_layout('users')
	->build('clients',isset($data) ? $data : NULL);
	}
	function add()
	{
		if ($this->input->post()) {
			redirect('clients');
		}else{
		$this->load->view('modal/add_client');
		}
	}
	function _data()
	{
		$data['axis']['categories'] = array('Jan', 'Feb', 'Mar', 'Apr', 'May','Jun', 'Jul', 'Aug', 'Sep','Oct','Nov','Dec');
		return $data;
	}
	function _monthly_data($month)
	{
		$query = $this->db->query('SELECT * FROM fx_users WHERE MONTH(created) = '.$month.' AND YEAR (created) = '.date('Y'));
			$records_found = $query->num_rows();	
   			return $records_found;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */