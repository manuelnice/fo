
<!-- Start -->


<section id="content">
	<section class="hbox stretch">
	
		<aside class="aside-md bg-white b-r hidden-print" id="subNav">



		<header class="dk header b-b">
		
		<p class="h4"><?=lang('all_invoices')?></p>
		</header>

			
			<section class="vbox">
			 <section class="scrollable w-f">
			   <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
			<ul class="nav"><?php
			if (!empty($invoices)) {
			foreach ($invoices as $key => $invoice) { 
			if ($this->invoice->payment_status($invoice->inv_id) == 'Fully Paid'){ $invoice_status = "Fully Paid"; $label = "success"; }
			elseif($invoice->emailed == 'Yes') { $invoice_status = "Sent"; $label = "info";	}
			else{ $invoice_status = "Draft"; $label = "default"; }
			?>

				<li class="b-b b-light <?php if($invoice->inv_id == $this->uri->segment(4)){ echo "bg-light dk"; } ?>">
				<a href="<?=base_url()?>clients/inv_manage/details/<?=$invoice->inv_id?>">
				<?=ucfirst($this->user_profile->get_profile_details($invoice->client,'fullname')? $this->user_profile->get_profile_details($invoice->client,'fullname'):$invoice->username)?>
				<div class="pull-right">
				<?=$this->config->item('default_currency')?> <?=number_format($this->user_profile->invoice_payable($invoice->inv_id),2)?>
				</div> <br>
				<small class="block small text-muted">INV <?=$invoice->reference_no?> | <?=strftime("%B %d, %Y", strtotime($invoice->date_saved));?> <span class="label label-<?=$label?>"><?=$invoice_status?></span></small>

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


			
						
						<?php
						if ($this->user_profile->invoice_payable($inv->inv_id) > 0) { ?>
							<a class="btn btn-sm btn-success" href="<?=base_url()?>paypal/pay/<?=$inv->inv_id?>/<?=$inv->reference_no?>" data-toggle="ajaxModal"
						 title="<?=lang('pay_invoice')?>">
						<i class="fa fa-credit-card"></i> <?=lang('pay_invoice')?></a>						
					
						
						<?php } ?>
						</div>
						<div class="col-sm-4 m-b-xs pull-right">
						<a href="<?=base_url()?>pdfconverter/invoice/<?=$inv->inv_id?>/<?=$inv->reference_no?>" class="btn btn-sm btn-dark pull-right">
					<i class="fa fa-file-pdf-o"></i> <?=lang('pdf')?></a>
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
						<?=lang('client_invoice_overdue')?>
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
					 
					<?=lang('bill_to')?>: <strong><?=ucfirst($this->user_profile->get_profile_details($inv->id,'fullname')?$this->user_profile->get_profile_details($inv->id,'fullname') : $inv->username)?></strong> </p> 
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
						</td>
					</tr>
					<?php } } ?>
					
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