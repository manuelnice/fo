<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Crons extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        // this controller can only be called from the command line
        if (!$this->input->is_cli_request()) show_error('Direct access is not allowed');
    }
 
    function foo($bar = 'bar')
    {
        echo "foo = $bar";
    }
}