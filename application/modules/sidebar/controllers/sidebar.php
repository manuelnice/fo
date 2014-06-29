<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sidebar extends MX_Controller {
function __construct()
	{
		parent::__construct();
	}
	
	public function featured()
	{
	$data['featured_items'] = $this->item_model->featured_items($limit = 8);
		$this->load->view('featured_products',isset($data) ? $data : NULL);
	}
	public function recent_sellers()
	{
		$data['top_sellers'] = $this->item_model->top_sellers($limit = 4);
		$this->load->view('recent_sellers',isset($data) ? $data : NULL);
	}
	public function lecturer_menu()
	{
		$this->load->view('lecturer_menu',isset($data) ? $data : NULL);
	}
	public function admin_menu()
	{
		$this->load->view('admin_menu',isset($data) ? $data : NULL);
	}
	public function finance_menu()
	{
		$this->load->view('finance_menu',isset($data) ? $data : NULL);
	}
	public function management_menu()
	{
		$this->load->view('management_menu',isset($data) ? $data : NULL);
	}
	public function student_menu()
	{
		$this->load->view('student_menu',isset($data) ? $data : NULL);
	}
	public function top_header()
	{
		$this->load->view('top_header',isset($data) ? $data : NULL);
	}
	
	public function top_search()
	{
		$this->load->view('top_search',isset($data) ? $data : NULL);
	}
	public function public_nav()
	{
		$this->load->view('public_nav',isset($data) ? $data : NULL);
	}
	public function scripts()
	{
		$this->load->view('scripts/uni_scripts',isset($data) ? $data : NULL);
	}
	public function flash_msg()
	{
		$this->load->view('flash_msg',isset($data) ? $data : NULL);
	}
	public function sorter()
	{
		$this->load->view('sorter',isset($data) ? $data : NULL);
	}
}