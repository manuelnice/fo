<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sidebar extends MX_Controller {
function __construct()
	{
		parent::__construct();
	}
	public function admin_menu()
	{
		$this->load->view('admin_menu',isset($data) ? $data : NULL);
	}
	public function collaborator_menu()
	{
		$this->load->view('collaborator_menu',isset($data) ? $data : NULL);
	}
	public function client_menu()
	{
		$this->load->view('user_menu',isset($data) ? $data : NULL);
	}
	public function top_header()
	{
		$this->load->view('top_header',isset($data) ? $data : NULL);
	}
	
	public function top_search()
	{
		$this->load->view('top_search',isset($data) ? $data : NULL);
	}
	public function scripts()
	{
		$this->load->view('scripts/uni_scripts',isset($data) ? $data : NULL);
	}
	public function flash_msg()
	{
		$this->load->view('flash_msg',isset($data) ? $data : NULL);
	}
}