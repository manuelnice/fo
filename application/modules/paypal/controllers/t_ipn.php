<?php

class T_ipn extends CI_Controller {

    // To handle the IPN post made by PayPal (uses the Paypal_Lib library).
    function ipn()
    {
    
        $this->load->library('PayPal_IPN'); // Load the library
         
        // Try to get the IPN data.
        if ($this->paypal_ipn->validateIPN())
        {
            // Succeeded, now let's extract the order
            $this->paypal_ipn->extractOrder();

            // And we save the order now (persist and extract are separate because you might only want to persist the order in certain circumstances).
            $this->paypal_ipn->saveOrder();

            // Now let's check what the payment status is and act accordingly
            if ($this->paypal_ipn->orderStatus == PayPal_IPN::PAID)
            {
                 $this->load->library('postmark');
                 $this->load->library('tank_auth');
                 $this->load->model('mdl_pay');
                 $this->load->helper('string');
            	// Prepare the variables to populate the email template:
                $data = $this->paypal_ipn->order;
             	$items = $this->paypal_ipn->orderItems;
             	foreach($items as $i):
             	
		$item_sold = $i['item_number'];
		$theme_name = $i['item_name'];
                endforeach;
            if($data['custom'] > 1000000){
                $gen_user = $this->_random_username();
                $gen_pass = $this->_random_password();
                $email_activation = FALSE;
                $this->tank_auth->create_user($gen_user,$data['payer_email'],$gen_pass,$email_activation);
                $buyer = $this->mdl_pay->get_user_by_username($gen_user); 
                $referred_user = $buyer;
                $referrer = $this->input->cookie('_tm_ref');
                if($referrer == 'sso'){
                    $ref = 0;
                }else{
                $referrer_id = $this->mdl_pay->get_user_ref($referrer);
                if($referrer_id == NULL){ $ref = 0; }else{ $ref = $referrer_id; }
                }
                $ref_data = array(
                    'referred_by' => $ref,
                    'user' => $referred_user
                    );
                $this->mdl_pay->insert_referral($ref_data);
            }else{
                $buyer = $data['custom'];
            }

            
            $txn_id = $data['txn_id'];
			$buyer_email = $data['payer_email'];
			$receiver = $data['receiver_email'];
			$first_name = $data['first_name'];
			$last_name = $data['last_name'];
			$paid_amount = $data['mc_gross'];            
			

		$referrer = $this->mdl_pay->get_referrer($buyer); //get referrer
        $author = $this->mdl_pay->get_author($item_sold); //get item author
        $buyer_username = $this->mdl_pay->get_user($buyer); //get buyer username
        $author_username = $this->mdl_pay->get_user($author); //get item author username
        $item_name = $this->mdl_pay->get_item_name($item_sold); //get item name
        $this->load->library('compute_earn');
        $com_rate = $this->compute_earn->fix_rate($author) ? $this->compute_earn->fix_rate($author) : $this->compute_earn->get_rate($author);
		$author_com = $paid_amount * ($com_rate/100);
        if ($referrer > 0) {
            $ref_com = $paid_amount * ($this->config->item('affiliate_commission')/100);
            $sale_com = $paid_amount - ($author_com + $ref_com);
        }else{
            $ref_com = 0;
            $sale_com = $paid_amount - $author_com;
        }     
        if ($this->_payment_is_valid($item_sold,$paid_amount)) {
            //$this->db->trans_start();
                            $p_info = array(
                                    'txn_id' => $txn_id,
                                    'buyer' => $buyer,
                                    'buyer_email' => $buyer_email,
                                    'receiver' => $receiver,
                                    'seller' => $author,
                                    'first_name' => $first_name,
                                    'last_name' => $last_name,
                                    'item_sold' => $item_sold,
                                    'amount_paid' => $paid_amount,
                                    'author_comm' => $author_com,
                                    'sale_comm' => $sale_com,
                                    'rate' => $com_rate,
                                    'referrer' => $referrer,
                                    'txn_month' => date('m'),
                                    'txn_year' => date('Y'),
                                    'ref_comm' => $ref_com,
                                    'license' => $this->_license_type($item_sold,$paid_amount),
                                    'purchase_code' => $this->_purchase_code(),
                                    );
                    $this->db->insert('sales',$p_info); // insert to sales
                    //add to tracked sale one
                    $current_sales = $this->mdl_pay->get_item_sales($item_sold);
                    $tracked_sales = array(
                        'tracked_sale' => $current_sales + 1
                        );
                    $this->db->where('theme_no', $item_sold);
                    $this->db->update('items', $tracked_sales); 
            //$this->db->trans_complete();
                    
            $this->_notifyme($buyer_email,$buyer_username,$author_username,$item_name,$item_sold);

            if (isset($gen_user)) {
               $this->_send_login($buyer_email,$gen_user,$gen_pass,$buyer_username,$author_username,$item_name,$item_sold);
            }
        }else{
            $this->postmark->from('info@bootstrapstore.net', 'BS Store Alert');
            $this->postmark->to('mandai.willy@gmail.com');
            $this->postmark->subject('Paypal Payment Alert');
            $this->postmark->message_plain('Please investigate this transaction ID '.$txn_id.' from '.$buyer_email.' The Amount received does not match the amount of item price.');
            $this->postmark->message_html('Please investigate this transaction ID '.$txn_id.' from '.$buyer_email.' The Amount received does not match the amount of item price.');

            $this->postmark->send();
            }
		
       
            }
    }
            else // Just redirect to the root URL
            {
                redirect('home');
            }
    }
    function _notifyme($to,$buyer_username,$author_username,$item_name,$theme_no)
    {
   
            $data['buyer_username'] = $buyer_username;
            $data['author_username'] = $author_username;
            $data['item_name'] = $item_name;
            $data['theme_no'] = $theme_no;
            $email_msg = $this->load->view('purchase_item',$data,TRUE);
            $email_subject = '[Bootstrapstore] Purchase Confirmation';
            $this->postmark->from('info@bootstrapstore.net', 'BootstrapStore Payments');
            $this->postmark->to($to);
            //$this->postmark->to('mandai.willy@gmail.com'); //for testing only
            $this->postmark->reply_to('support@bootstrapstore.net', 'BootstrapStore Support');
            $this->postmark->subject($email_subject);

            $this->postmark->message_plain($email_msg);
            $this->postmark->message_html($email_msg);

            $this->postmark->send();
   
    }
       function _send_login($to,$gen_user,$gen_pass,$buyer_username,$author_username,$item_name,$theme_no)
    {
   
            $data['buyer_username'] = $buyer_username;
            $data['author_username'] = $author_username;
            $data['item_name'] = $item_name;
            $data['theme_no'] = $theme_no;
            $data['rand_username'] = $gen_user;
            $data['rand_pass'] = $gen_pass;
            $email_msg = $this->load->view('send_login',$data,TRUE);
            $email_subject = '[Bootstrapstore] New Account Created';
            $this->postmark->from('info@bootstrapstore.net', 'BootstrapStore Payments');
            $this->postmark->to($to);
            //$this->postmark->to('mandai.willy@gmail.com'); //for testing only
            $this->postmark->reply_to('support@bootstrapstore.net', 'BootstrapStore Support');
            $this->postmark->subject($email_subject);

            $this->postmark->message_plain($email_msg);
            $this->postmark->message_html($email_msg);

            $this->postmark->send();
   
    }
    function _payment_is_valid($item,$amount)
    {
    $this->db->where('theme_no',$item);
        $query = $this->db->select('normal_license,multiple_license,extended_license')->get('items',1);
        if ($query->num_rows() > 0)
            {
         $row = $query->row();
         $normal_license = $row->normal_license + $this->config->item('paypal_surcharge');
         $multiple_license = $row->multiple_license + $this->config->item('paypal_surcharge');
         $extended_license = $row->extended_license + $this->config->item('paypal_surcharge');
         if ($amount == $normal_license OR $amount == $multiple_license OR $amount == $extended_license ) {
             return TRUE;
         }else{
            return FALSE;
         }
        }
}
    function _license_type($item,$amount)
    {
    $this->db->where('theme_no',$item);
        $query = $this->db->select('normal_license,multiple_license,extended_license')->get('items',1);
        if ($query->num_rows() > 0)
            {
         $row = $query->row();
         $normal_license = $row->normal_license + $this->config->item('paypal_surcharge');
         $multiple_license = $row->multiple_license + $this->config->item('paypal_surcharge');
         $extended_license = $row->extended_license + $this->config->item('paypal_surcharge');
         if ($amount == $extended_license) {
             return 'Extended';
         }elseif ($amount == $multiple_license) {
             return 'Multiple';
         }else{
            return 'Single';
         }
    }
}
    function _purchase_code()
    {
    $gen_code = random_string('numeric', 5).'-'.random_string('numeric', 5);
    return $gen_code;
    }
    function _random_username(){
        $random_user = random_string('alnum', 5);
        return $random_user;
    }
    function _random_password(){
        $random_pass = random_string('alnum', 5);
        return $random_pass;
    }
}