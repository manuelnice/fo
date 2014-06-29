<div class="container">
    <div class="headerdetails"> <a class="logo pull-left" href="<?=base_url()?>"><img title="<?=$this->config->item('company_name')?>" alt="<?=$this->config->item('company_name')?>" src="<?php echo IMG_URL?>logo.png" style="width: 240px;"></a>
        <div class="pull-left">
        <?php
    $attributes = array('class' => 'form-search top-search');
    ?>
            <?php echo form_open(site_url().'search',$attributes); ?>
                <input type="text" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Type some Keywords" class="input-mini search-query tooltip-test" name="keyword" placeholder="Start searching themes ...">
                <button type="submit" class="btn btn-info btn-small tooltip-test" data-original-title="Search"> <i class="icon-search icon-white"></i> </button> <a href="<?php if($this->tank_auth->get_username()){ echo base_url().'upload'; }else{ echo base_url().'auth/login?r_url='.base_url().'upload'; }?>" class="btn btn-warning"><i class="icon-circle-arrow-up"></i> Upload Theme</a>
            </form>
        </div>
        <div class="pull-right">
            <?php
            $this->load->library('compute_earn');
            $balance = $this->compute_earn->user_balance($this->tank_auth->get_user_id()); 
            if($this->tank_auth->get_username()){ ?>
                <ul class="nav topcart pull-left">
                <li class="dropdown hover carticon "> <a href="" class="dropdown-toggle" > <i class="icon-shopping-cart font18"></i> Your Balance <strong>$<?=number_format($balance,2)?></strong> - <span class="badge font14"><strong><?=$this->compute_earn->total_sales($this->tank_auth->get_user_id())?> sale(s)</strong></span><b class="caret"></b></a>
                    <ul class="dropdown-menu topcartopen ">
                        <li>
                           
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="textright"><b>Total Earnings:</b></td>
                                        <td class="textright">$<?=number_format($this->compute_earn->total_earnings($this->tank_auth->get_user_id()),2)?></td>
                                    </tr>
                                    <tr>
                                        <td class="textright"><b>Current Rate:</b></td>
                                        <td class="textright"><?=$this->compute_earn->fix_rate($this->tank_auth->get_user_id()) ? $this->compute_earn->fix_rate($this->tank_auth->get_user_id()) : $this->compute_earn->get_rate($this->tank_auth->get_user_id())?>%</td>
                                    </tr>
                                    <tr>
                                    
                                        <td class="textright"><b>Your Balance:</b></td>
                                        <td class="textright">$<?=number_format($balance,2)?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="well pull-right buttonwrap"> <a class="btn btn-orange" href="<?=base_url()?>profile/earnings">Earnings</a> <a class="btn btn-orange" href="<?=base_url()?>author_dashboard">My Account</a> </div>
                        </li>
                    </ul>
                </li>
            </ul><?php 

            }else{ ?>
                You are not logged in! <a href="<?=base_url()?>auth/login/?secure=1"><?=lang('login_here')?></a>
                <?php }
                ?>
            
           <!-- -->
        </div>
    </div>
</div>