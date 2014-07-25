<!-- Start -->

<section id="content">
  <section class="hbox stretch">
  
    <aside class="aside-md bg-white b-r" id="subNav">

      <header class="dk header b-b">
    <a href="<?=base_url()?>invoices/manage/add" data-original-title="<?=lang('new_invoice')?>" data-toggle="tooltip" data-placement="bottom" class="btn btn-icon btn-default btn-sm pull-right"><i class="fa fa-plus"></i></a>
    <p class="h4"><?=lang('all_invoices')?></p>
    </header>


      <section class="vbox">
       <section class="scrollable w-f">
         <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
      <ul class="nav">
      <?php
      if (!empty($payments)) {
      foreach ($payments as $key => $p) { ?>
        <li class="b-b b-light">
        <a href="<?=base_url()?>invoices/payments/details/<?=$p->p_id?>">
        <?=ucfirst($this->user_profile->get_profile_details($p->paid_by,'fullname')? $this->user_profile->get_profile_details($p->paid_by,'fullname'):$p->username)?>
        <div class="pull-right">
        <?=$this->config->item('default_currency')?> <?=number_format($p->amount,2)?>
        </div> <br>
        <small class="block text-muted">TRANS <?=$p->trans_id?> | <?=strftime("%B %d, %Y", strtotime($p->created_date));?> </small>

        </a> </li>
        <?php } } ?>
      </ul> 
      </div></section>
      </section>
      </aside> 
      
      <aside>
      <section class="vbox">
        <header class="header bg-white b-b clearfix">
          <div class="row m-t-sm">
            <div class="col-sm-8 m-b-xs">
              <a href="#subNav" data-toggle="class:hide" class="btn btn-sm btn-default active">
              <i class="fa fa-caret-right text fa-lg"></i><i class="fa fa-caret-left text-active fa-lg"></i></a>
            <div class="btn-group">
            <a class="btn btn-sm btn-default" href="<?=current_url()?>" data-original-title="<?=lang('refresh')?>" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-refresh"></i></a>
            </div>
            
            </div>
            <div class="col-sm-4 m-b-xs">
            <?php  echo form_open(base_url().'invoices/manage/search'); ?>
              <div class="input-group">
                <input type="text" class="input-sm form-control" name="keyword" placeholder="<?=lang('search')?>">
                <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="submit">Go!</button>
                </span>
              </div>
              </form>
            </div>
          </div> </header>
          <section class="scrollable wrapper w-f">
          <?php  echo modules::run('sidebar/flash_msg');?>
          <!-- Start Payment -->
          





<div class="column content-column">

<div id="ember3500" class="ember-view scroll-y noscroll-x fill body">

<div class="details-page" style="margin:45px 25px 25px 8px">
  <div class="details-container clearfix" style="margin-bottom:20px">
      <div id="ember3502" class="ember-view">

<div style="font-size:10pt; font-family: Open Sans;">
 

  <div style="padding:35px;">

    <div style="padding-bottom:35px;border-bottom:1px solid #eee;width:100%;">
      <div>
        <div style="text-transform: uppercase;font-weight: bold;">
          <?=$this->config->item('company_name')?>
        </div>
        <span style="white-space:pre-wrap;color:#999"><?=$this->config->item('company_address')?></span>

      </div>
      <div style="clear:both;"></div>
    </div>

    <div style="padding:35px 0 50px;text-align:center">
      <span style="border-bottom:1px solid #eee;font-size:13pt;">PAYMENT RECEIPT</span>
    </div>
    <div style="width: 70%;float: left;">
      <div style="width: 100%;padding: 11px 0;">
        <div style="color:#999;width:35%;float:left;">Payment Date</div>
        <div style="width:65%;border-bottom:1px solid #eee;float:right;foat:right;">01 Jun 2014</div>
        <div style="clear:both;"></div>
        </div><div style="width: 100%;padding: 10px 0;">
        <div style="color:#999;width:35%;float:left;">Reference Number</div>
        <div style="width:65%;border-bottom:1px solid #eee;float:right;foat:right;min-height:22px">43432</div>
        <div style="clear:both;"></div>
      </div>
    </div>

    <div style="text-align:center;color:white;float:right;background:#78ae54;width: 25%;
      padding: 20px 5px;">
      <span> Amount Received</span><br>
      <span style="font-size:16pt;">KES615.00</span>
    </div><div style="clear:both;"></div>

    <div style="padding-top:10px">
      <div style="width:75%;border-bottom:1px solid #eee;float:right"><strong id="zb-pdf-customer-detail"><a href="#/contacts/518994000000031001">Elimedia</a></strong></div>
      <div style="color:#999;width:25%">Received From</div> 
    </div>
    <div style="padding-top:25px">
        <div style="width:75%;border-bottom:1px solid #eee;float:right">PayPal</div>
        <div style="color:#999;width:25%">Payment Mode</div>
    </div>
    

    <div style="margin-top:100px">

   <div style="width:100%">
        <div style="width:50%;float:left"><h4>Payment for</h4></div>
        <div style="clear:both;"></div>
   </div>

    
  <table style="width:100%;margin-bottom:35px;table-layout:fixed;" cellpadding="0" cellspacing="0" border="0">
    <thead>
        <tr style="height:40px;background:#f5f5f5">              
            <td style="padding:5px 10px 5px 10px;word-wrap: break-word;">
              Invoice Number
            </td>
            <td style="padding:5px 10px 5px 5px;word-wrap: break-word;" align="right">
              Invoice Date
            </td>
            <td style="padding:5px 10px 5px 5px;word-wrap: break-word;" align="right">
              Invoice Amount
            </td>
            <td style="padding:5px 10px 5px 5px;word-wrap: break-word;" align="right">
                  Payment Amount
            </td>
        </tr>
     </thead>
     <tbody>
       <tr style="border-bottom:1px solid #ededed">
            <td style="padding: 10px 0px 10px 10px;" valign="top">INV-000001</td>
                <td style="padding: 10px 10px 5px 10px;text-align:right;word-wrap: break-word;" valign="top">
                  01 Jun 2014                 
                </td>
            <td style="padding: 10px 10px 5px 10px;text-align:right;word-wrap: break-word;" valign="top">
                  <span>KES6,615.00</span>
            </td>
            <td style="text-align:right;padding: 10px 10px 10px 5px;word-wrap: break-word;" valign="top">
              <span>KES615.00</span>
            </td>
        </tr>
    </tbody>
    </table>


    </div>
  </div>
</div>



</div>
  </div>
  
    
</div>
</div>
</div>





           <!-- End Payment -->






          </section>  




    </section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>



<!-- end -->
