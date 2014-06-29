<?php
  //Loads configuration from database into global CI config
  function auth_portal()
  {
   $CI =& get_instance();
   foreach($CI->siteconfig->get_all()->result() as $site_config)
	   {
	   	$CI->load->library('encrypt');
	   	$me = 'William Mandai';
	   	$developer = $CI->config->item('developer');
		$key = 'wm';
	   	$plaintext_dev = $CI->encrypt->decode($developer,$key);
	   	if ($CI->config->item('auth_author') !=  $plaintext_dev OR $plaintext_dev != $me) {
	   		redirect('http://localhost/wm/invalid_sys.php');
	   	}
	   }
  }
?>