<?php

class testipn extends MX_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('tank_auth');
    }
    // To handle the IPN post made by PayPal (uses the Paypal_Lib library).
    function index()
    {                               // validation ok
        $result = $this->tank_auth->create_user('user1','wm@me.com','grenade');  
        if($result){ 
        echo "Record created successfully";     
    }else{
        echo "Something wasnt done right.";
    }
    }
}