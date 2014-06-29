<div class="headerstrip">
    <div class="container">
        <div class="pull-left welcometxt"> <?=lang('welcome_to')?> <?=$this->config->item('company_name')?>, 
<?php
if($this->tank_auth->get_username()){ ?>
    <a href="<?=base_url()?>user/<?=$this->tank_auth->get_username();?>"><?=$this->tank_auth->get_username();?></a>
    <a href="<?=base_url()?>auth/logout" class="suc_btn btn-s-md btn-rounded">Sign Out</a>
<?php }else{ ?>
    <a class="orange" href="<?=base_url()?>auth/login"><?=lang('login')?></a> or <a class="orange" href="<?=base_url()?>auth/register"><?=lang('create_account')?></a> 
<?php } ?>

            </div>
        <!-- Top Nav Start -->
        <div class="pull-right">
            <div class="navbar" id="topnav">
                <div class="navbar-inner">
                    <ul class="nav" >
                        <li>
                         <?php
            if($this->tank_auth->get_username()){ ?>
            <a class="home" href="<?=site_url()?>author_dashboard"><i class="icon-dashboard"></i> <?=lang('dashboard')?> </a>
            <?php }else{ ?>
            <a class="home" href="<?=site_url()?>pages/browse/get-started"><i class="icon-leaf"></i> <?=lang('get_started')?> </a>
            <?php } ?> </li>
                        <li><a class="myaccount" href="http://support.thememisty.com" target="_blank"><i class="icon-question-sign"></i> <?=lang('support_center')?> </a> </li>
                        <li><a class="shoppingcart" href="http://blog.thememisty.com" target="_blank"><i class="icon-comments"></i> <?=lang('blog')?> </a> </li>
                        <li><a class="checkout" href="<?=base_url()?>pages/browse/payment-rates"><i class="icon-signal"></i> <?=lang('payment_rates')?> </a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Top Nav End -->
        
        <div class="pull-right">
            <ul class="nav language pull-left">
                
                <li class="dropdown hover"> <a href="<?=base_url()?>pages/browse/sell" class="dropdown-toggle" data-toggle=""><?=lang('earn_money')?><b class="caret"></b></a>
                    <ul class="dropdown-menu language">
                        <li><a href="<?=base_url()?>pages/browse/sell-themes"><?=lang('be_an_author')?></a> </li>
                        <li><a href="<?=base_url()?>pages/browse/affiliates-program"><?=lang('affiliates')?></a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>