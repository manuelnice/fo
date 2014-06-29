<!-- .aside -->
<aside class="bg-light lter b-r aside-md hidden-print" id="nav">
  <section class="vbox">
    <header class="header bg-primary lter text-center clearfix">
      <div class="btn-group">
        <button type="button" class="btn btn-sm btn-dark btn-icon" title="New Assignment"><i class="fa fa-plus"></i></button>
        <div class="btn-group hidden-nav-xs">
          <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"> Quick Links
          <span class="caret">
          </span> </button>
          <ul class="dropdown-menu text-left">
            <li><a href="<?=base_url()?>finance/add_fee">Add Fees</a></li>
            <li><a href="">Fee Payments</a></li>
            <li><a href="">Mailbox</a></li>
          </ul>
        </div>
      </div> </header>
      <section class="w-f scrollable">
        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
          <!-- nav -->
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
              <li class="<?php if($page == 'home'){echo  "active"; }?>">
                <a href="<?=base_url()?>finance"> <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i>
              <span>Home</span> </a> </li>
              <li class="<?php if($page == 'profile' OR $page == 'transactions' OR $page == 'students'){echo  "active"; }?>"> <a href="<?=base_url()?>" > <i class="fa fa-user icon"> <b class="bg-success"></b> </i>
                <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i>
                </span>
                <span>Account </span> </a>
                <ul class="nav lt">
                  <li class="<?php if($page == 'profile'){echo  "active"; }?>"> <a href="<?=base_url()?>profile" > <i class="fa fa-angle-right"></i>
                  <span>Profile </span> </a> </li>
                  <li class="<?php if($page == 'transactions'){echo  "active"; }?>"> <a href="<?=base_url()?>finance/transactions" > <i class="fa fa-angle-right"></i>
                  <span>My Transactions </span> </a> </li>
                </ul> </li>
                <li class="<?php if($page == 'payments' OR $page == 'stats' OR $page == 'invoices'){echo  "active"; }?>"> <a href="<?=base_url()?>" >
                  <i class="fa fa-star icon"> <b class="bg-primary"></b> </i>
                  <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i>
                  </span>
                  <span>Fees </span> </a>
                  <ul class="nav lt">
                    <li class="<?php if($page == 'payments'){echo  "active"; }?>"> <a href="<?=base_url()?>finance/payments" > <i class="fa fa-angle-right"></i>
                    <span>Fee Payments </span> </a> </li>
                    <li class="<?php if($page == 'stats'){echo  "active"; }?>"> <a href="<?=base_url()?>finance/stats" > <i class="fa fa-angle-right"></i>
                    <span>Fee Stats </span> </a> </li>
                    <li class="<?php if($page == 'invoices'){echo  "active"; }?>"> <a href="<?=base_url()?>finance/invoices" > <i class="fa fa-angle-right"></i>
                    <span>Proforma Invoices </span> </a> </li>
                  </ul> </li>
                  <li class="<?php if($page == 'messaging'){echo  "active"; }?>"> <a href="<?=base_url()?>messaging/view/inbox" > <b class="badge bg-danger pull-right"> 
                  <?=$this->user_profile->count_rows('messages',
                    $array = array('user_to' => $this->tank_auth->get_user_id(),
                      'status' => 'Unread',
                     'deleted' =>'No'))?>
                     </b> <i class="fa fa-envelope-o icon"> <b class="bg-dark"></b> </i>
                  <span>Mailbox </span> </a> </li>
                  <li class="<?php if($page == 'fee_reports' OR $page == 'yearly'){echo  "active"; }?>"> <a href="<?=base_url()?>tasks" > <i class="fa fa-tasks icon"> <b class="bg-success"></b> </i>
                    <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i>
                    </span>
                    <span>Reports </span> </a>
                    <ul class="nav lt">
                      <li class="<?php if($page == 'fee_reports'){echo "active"; } ?>"> <a href="<?=base_url()?>finance/report/fee_reports" > <i class="fa fa-angle-right"></i>
                      <span>Fee Reports </span> </a> </li>
                      <li class="<?php if($page == 'yearly'){echo "active"; } ?>"> <a href="<?=base_url()?>finance/report/yearly" > <i class="fa fa-angle-right"></i>
                      <span>Yearly Reports </span> </a> </li>
                    </ul> </li>
                      <li class="<?php if($page == 'about'){echo  "active"; }?>"> <a href="<?=base_url()?>welcome/about" > <i class="fa fa-info-circle icon"> <b class="bg-info"></b> </i>
                      <span>About </span> </a> </li>
                    </ul> </nav>
                    <!-- / nav -->
                  </div>
                </section>
                <footer class="footer lt hidden-xs b-t b-light">
                  <div id="chat" class="dropup"> <section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white">
                  <header class="panel-heading b-b b-light">Active chats</header>
                  <div class="panel-body animated fadeInRight">
                    <p class="text-sm">No active chats.</p>
                    <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                  </div> </section> </section>
                </div>
                <div id="invite" class="dropup"> <section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white">
                <header class="panel-heading b-b b-light"> John <i class="fa fa-circle text-success"></i> </header>
                <div class="panel-body animated fadeInRight">
                  <p class="text-sm">No contacts in your lists.</p>
                  <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                </div>
              </section>
            </section>
          </div>
          <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>
          <div class="btn-group hidden-nav-xs"> <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button> <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
          </div>
        </footer>
      </section>
    </aside>
    <!-- /.aside -->