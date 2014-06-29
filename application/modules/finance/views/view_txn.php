<section id="content"> <section class="vbox">
  <header class="header bg-white b-b b-light">
  <p>Transaction <small>(Details)</small></p> </header>
  <section class="scrollable wrapper">
    <?php  echo modules::run('sidebar/flash_msg');?>
    <div class="row">
      <!-- Start transaction details -->
      <div class="col-sm-12"> <section class="panel panel-default">
        <header class="panel-heading">
        <span class="label bg-danger pull-right">
        <a href="<?=base_url()?>finance/payments"><i class="fa fa-angle-double-left"></i> Back to Payments</a></span> Transaction Details </header>
        <table class="table table-striped m-b-none text-sm">
          <thead>
            <tr>
              <th>Field Name</th>
              <th>Value</th>
              <th width="70">
              </th>
            </tr> </thead> <tbody>
            <?php
              foreach ($txn_details as $key => $t) { ?>
            <tr>
              <td>Reg No</td>
              <td><?=$this->user_profile->get_profile_details($t->student,'reg_no')?></td>
            </tr>
            <tr>
              <td>Transaction  ID</td>
              <td><?=$t->txn_id?></td>
            </tr>
            <tr>
              <td>Receipt No</td>
              <td><?=$t->receipt_no?></td>
            </tr>
            <tr>
              <td>Amount</td>
              <td><?=$this->config->item('currency')?> <?=number_format($t->amount)?></td>
            </tr>
            <tr>
              <td>Bank Name</td>
              <td><?=$t->bank_name?></td>
            </tr>
            <tr>
              <td>Account No.</td>
              <td><?=$t->account_no?></td>
            </tr>
            <tr>
              <td>Year of Study</td>
              <td><?=$t->fee_year?></td>
            </tr>
            <tr>
              <td>Semester</td>
              <td><?=$t->fee_sem?></td>
            </tr>
            <tr>
              <td>Balance</td>
              <td><?=$this->config->item('currency')?> <?=number_format($t->balance)?></td>
            </tr>
            <tr>
              <td>Served By</td>
              <td><?=$this->user_profile->get_user_details($t->served_by,'username')?></td>
            </tr>
            <tr>
              <td>Payment Date</td>
              <td><span class="label bg-dark"><?=$t->date_paid?>  (yyyy-mm-dd H:m:s)</span></td>
            </tr>
            <?php } ?>
            </tbody>
          </table> 
<hr>
 <header class="panel-heading">Transaction Issues </header>
<div class="table-responsive">
    <table class="table table-striped b-t b-light text-sm">
      <thead>
        <tr>
          <th>TXN ID </th>
          <th class="col-sm-7">Comment</th>
          <th>Sent By </th>
          <th width="30"></th>
        </tr> </thead> <tbody>
        <?php
                if (!empty($issues)) {
        foreach ($issues as $key => $i) { ?>
        <tr>
          <td><?=$i->txn_id?></td>
          <td><?=$i->comment?></td>
          <td><?=$this->user_profile->get_user_details($i->raised_by,'username')?></td>
          <td><a href="<?=base_url()?>finance/payments/reply_issue/<?=$i->issue_id?>" class="btn btn-info btn-xs"><i class="fa fa-ticket"></i> Reply Issue</a></td>
        </tr>
        <?php  }} else{ ?>
        <tr>
          <td></td><td>Nothing to display here</td><td></td><td></td>
        </tr>
        <?php } ?>
        
        
        
      </tbody>
    </table>
  </div>






          </section>
        </div>
        <!-- End transaction details -->
      </div>
    </section>
  </section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>