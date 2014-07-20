
<!-- Start -->


<section id="content">
	<section class="hbox stretch">
	
		<aside class="aside-md bg-white b-r hidden-print" id="subNav">

			<div class="wrapper b-b header"><?=lang('all_invoices')?>
			</div>
			<section class="vbox">
			 <section class="scrollable w-f">
			   <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
			<ul class="nav"><?php
					if (!empty($invoices)) {
			foreach ($invoices as $key => $invoice) { ?>
				<li class="b-b b-light"><a href="<?=base_url()?>invoices/manage/details/<?=$invoice->inv_id?>">
				<?=ucfirst($this->user_profile->get_profile_details($invoice->client,'fullname')? $this->user_profile->get_profile_details($invoice->client,'fullname'):$invoice->username)?><div class="pull-right">
				<?=$this->config->item('default_currency')?> <?=number_format($this->user_profile->invoice_payable($invoice->inv_id),2)?></div> <br>
				<small class="block text-muted">INV <?=$invoice->reference_no?> | <?=strftime("%B %d, %Y", strtotime($invoice->date_saved));?> </small>

				</a> </li>
				<?php } } ?>
			</ul> 
			</div></section>
			</section>
			</aside> 
			
			<aside>
			<section class="vbox">
				<header class="header bg-white b-b clearfix hidden-print">
					<div class="row m-t-sm">
						<div class="col-sm-8 m-b-xs">
						<?php
					if (!empty($invoice_details)) {
			foreach ($invoice_details as $key => $inv) { ?>
			<a href="#" class="btn btn-sm btn-default" onClick="window.print();"><i class="fa fa-print"></i></a> 
			<a href="<?=base_url()?>invoices/manage/quickadd/<?=$inv->inv_id?>" class="btn btn-sm btn-danger"><i class="fa fa-list-alt text-white"></i></a> 

						<a class="btn btn-sm btn-danger" href="<?=base_url()?>invoices/manage/add" title="<?=lang('new_invoice')?>"><i class="fa fa-plus"></i> <?=lang('new_invoice')?></a>
						<?php
						if ($this->user_profile->invoice_payable($inv->inv_id) > 0) { ?>
							<a class="btn btn-sm btn-success" href="<?=base_url()?>invoices/manage/pay/<?=$inv->inv_id?>/<?=$inv->reference_no?>" data-toggle="ajaxModal"
						 title="<?=lang('add_payment')?>">
						<i class="fa fa-money"></i> <?=lang('add_payment')?></a>						
					
						

						<div class="btn-group">
						<button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
						<?=lang('more_actions')?>
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
	<li>
	<a href="<?=base_url()?>invoices/manage/emailinvoice/<?=$inv->inv_id?>/<?=$inv->reference_no?>" data-toggle="ajaxModal" title="<?=lang('email_invoice')?>"><?=lang('email_invoice')?></a>
	</li>
	<li>
	<a href="<?=base_url()?>invoices/manage/reminder/<?=$inv->inv_id?>/<?=$inv->reference_no?>" data-toggle="ajaxModal" title="<?=lang('send_reminder')?>"><?=lang('send_reminder')?></a>
	</li>
								<li><a href="buttons.html#"><?=lang('make_recurring')?></a></li>
								<li><a href="buttons.html#"><?=lang('invoice_history')?></a></li>
								<li class="divider"></li>
								<li><a href="buttons.html#"><?=lang('edit')?></a></li>
								<li><a href="buttons.html#"><?=lang('delete')?></a></li>
						</ul>
						</div>
						<?php } ?>
						</div>
						<div class="col-sm-4 m-b-xs pull-right">
						<a href="<?=base_url()?>invoices/manage/invoicepdf/<?=$inv->inv_id?>" class="btn btn-sm btn-dark pull-right">
					<i class="fa fa-download"></i> <?=lang('pdf')?></a>
						</div>
					</div> </header>
					
					<section class="scrollable wrapper w-f">
					<!-- Start Display Details -->
					<?php  echo modules::run('sidebar/flash_msg');?>
					 <?php
				if(!$this->session->flashdata('message')){
						if(strtotime($inv->due_date) < time()){ ?>
						<div class="alert alert-danger hidden-print"> 
						<button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-warning"></i>
						<?=lang('invoice_overdue')?>
						</div>

    <?php } } ?> 

					
					<section class="scrollable wrapper">

					<div class="row"> 

					<div class="col-xs-6"> 
						<p class="h4"><strong><?=$this->config->item('company_name')?></strong></p>
						<p><a href="<?=$this->config->item('company_domain')?>"><br>
						<?=$this->config->item('company_domain')?></a><br>
						<?=$this->config->item('company_address')?><br>
						<?=lang('phone')?>: <?=$this->config->item('company_phone')?> <br></p>

						</div>
						<div class="col-xs-6 text-right">
						<p class="h4">INV #<?=$inv->reference_no?></p> 
						<p class="m-t m-b">
					<?=lang('invoice_date')?>: <strong><?=strftime("%B %d, %Y", strtotime($inv->date_saved));?></strong><br>
					<?=lang('due_date')?>: <strong><?=strftime("%B %d, %Y", strtotime($inv->due_date));?></strong><br> 
					<?=lang('payment_status')?>: <span class="label bg-dark"><?=$payment_status?> </span><br> 
					<?php
					if ($inv->emailed == 'Yes') { $invoice_status = "Sent"; $badge = "success";	}else{
						$invoice_status = "Draft"; $badge = "danger"; 
					}
					?>
					 
					<?=lang('bill_to')?>: <strong><?=$this->user_profile->get_fullname($inv->id)?$this->user_profile->get_fullname($inv->id) : $inv->username?></strong> </p> 
					<?=lang('invoice_status')?>: <span class="label bg-<?=$badge?>"><?=$invoice_status?> </span><br>
						</div>
					</div>

					
					<div class="line"></div>
					<table class="table"><thead>
					<tr>
					<th><?=lang('description')?> </th>
					<th width="60"><?=lang('qty')?> </th>					
					<th width="140"><?=lang('unit_price')?> </th>
					<th width="90"><?=lang('total')?> </th>
					</tr> </thead> <tbody>
					<?php
					if (!empty($invoice_items)) {
					foreach ($invoice_items as $key => $item) { ?>
					<tr>
						<td><?=$item->item_desc?> </td>
						<td><?=$item->quantity?></td> 						
						<td><?=$this->config->item('default_currency_symbol')?><?=number_format($item->unit_cost,2)?></td>
						<td><?=$this->config->item('default_currency_symbol')?><?=number_format($item->total_cost,2)?> 
						<a class="hidden-print" href="<?=base_url()?>invoices/manage/delete_item/<?=$item->item_id?>/<?=$item->invoice_id?>" data-toggle="ajaxModal"><i class="fa fa-times text-danger"></i></a></td>
					</tr>
					<?php } } ?>
					<tr class="hidden-print">
					<?php     
$attributes = array('class' => 'bs-example form-horizontal');
echo form_open(base_url().'invoices/manage/item', $attributes); ?>
<input type="hidden" name="invoice_id" value="<?=$inv->inv_id?>">
						<td> <input type="text" name="item_desc" placeholder="Item Description" class="form-control"></td>
						<td><input type="text" name="quantity" placeholder="1" class="form-control"></td> 					
						<td><input type="text" name="unit_cost" placeholder="50" class="form-control"></td>
						<td><button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i> <?=lang('save')?></button></td>
						</form>

					</tr>
					<?php
					$invoice_cost = $this->user_profile->invoice_payable($inv->inv_id);
					$payment_made = $this->user_profile->invoice_payment($inv->inv_id);
					$tax = ($this->config->item('default_tax')/100) * $invoice_cost;
					?>
					<tr>
						<td colspan="3" class="text-right no-border"><strong><?=lang('sub_total')?></strong></td>
						<td><?=$this->config->item('default_currency_symbol')?><?=number_format($invoice_cost,2)?></td>
					</tr>
					<tr>
						<td colspan="3" class="text-right no-border"><strong><?=lang('tax')?></strong></td>
						<td><?=$this->config->item('default_currency_symbol')?><?=number_format($tax,2)?> </td>
					</tr>
					<tr>
						<td colspan="3" class="text-right no-border"><strong><?=lang('payment_made')?></strong></td>
						<td><?=$this->config->item('default_currency_symbol')?><?=number_format($payment_made,2)?> </td>
					</tr>
					<tr>
					<td colspan="3" class="text-right no-border"><strong><?=lang('total')?></strong></td>
					<td><?=$this->config->item('default_currency_symbol')?><?=number_format(($invoice_cost + $tax) - $payment_made,2)?></td>
					</tr>
					</tbody>
					</table>
					</section> 


					<p><?=$inv->notes?></p>


					<?php } } ?>


					 <!-- End display details -->






					</section>  




		</section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>



<!-- end -->