
<!-- Start -->


<section id="content">
	<section class="hbox stretch">
	
		<aside class="aside-md bg-white b-r hidden-print" id="subNav">

			<div class="wrapper b-b header"><?=lang('all_estimates')?>
			</div>
			<section class="vbox">
			 <section class="scrollable w-f">
			   <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
			<ul class="nav"><?php
					if (!empty($estimates)) {
			foreach ($estimates as $key => $est) { ?>
				<li class="b-b b-light"><a href="<?=base_url()?>estimates/manage/details/<?=$est->est_id?>">
				<?=ucfirst($this->user_profile->get_profile_details($est->client,'fullname')? $this->user_profile->get_profile_details($est->client,'fullname'):$est->username)?>
				<div class="pull-right">
				<?=$this->config->item('default_currency')?> <?=number_format($this->user_profile->estimate_payable($est->est_id),2)?></div> <br>
				<small class="block text-muted">EST <?=$est->reference_no?> | <?=strftime("%B %d, %Y", strtotime($est->date_saved));?> </small>

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
					if (!empty($estimate_details)) {
			foreach ($estimate_details as $key => $estimate) { ?>
			<div class="btn-group">
						<a class="btn btn-sm btn-default" href="<?=base_url()?>estimates/manage/add" title="<?=lang('create_estimate')?>"><i class="fa fa-plus"></i></a>						
						</div>
						<a href="#" class="btn btn-sm btn-info" onClick="window.print();">
					<i class="fa fa-print"></i> Print</a> 

						<a class="btn btn-sm btn-success" href="<?=base_url()?>estimates/manage/convert/<?=$estimate->est_id?>/<?=$estimate->reference_no?>" data-toggle="ajaxModal"
						 title="<?=lang('convert_to_invoice')?>">
						<?=lang('convert_to_invoice')?></a>				

						<div class="btn-group">
						<button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
						<?=lang('more_actions')?>
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
								<li><a href="<?=base_url()?>estimates/action/emailestimate"><?=lang('email_estimate')?></a></li>
								<li><a href="<?=base_url()?>estimates/action/marksent"><?=lang('mark_as_sent')?></a></li>
								<li><a href="<?=base_url()?>estimates/manage/estimatehistory"><?=lang('estimate_history')?></a></li>
								<li class="divider"></li>
								<li><a href="<?=base_url()?>estimates/action/edit"><?=lang('edit')?></a></li>
								<li><a href="<?=base_url()?>estimates/action/delete"><?=lang('delete')?></a></li>
						</ul>
						</div>
						
						</div>
						<div class="col-sm-4 m-b-xs">
						<a href="<?=base_url()?>estimates/action/generatepdf" class="btn btn-sm btn-dark pull-right">
					<i class="fa fa-download"></i> <?=lang('pdf')?></a> 
					
						</div>
					</div> </header>
					
					<section class="scrollable wrapper w-f">
					<!-- Start Display Details -->
					<?php  echo modules::run('sidebar/flash_msg');?>
					 <?php
				if(!$this->session->flashdata('message')){
						if(strtotime($estimate->due_date) < time()){ ?>
						<div class="alert alert-danger"> 
						<button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-warning"></i>
						<?=lang('estimate_overdue')?>
						</div>

    <?php } } ?> 

					<section class="scrollable wrapper">

					<div class="row"> 

					<div class="col-xs-6"> <h4><?=$this->config->item('company_name')?></h4>
						<p><a href="<?=$this->config->item('company_domain')?>">
						<?=$this->config->item('company_domain')?></a></p>
						<p><?=$this->config->item('company_address')?></p>
						<p> <?=lang('phone')?>: <?=$this->config->item('company_phone')?> <br></p>

						</div>
						<div class="col-xs-6 text-right">
						<p class="h4">EST #<?=$estimate->reference_no?></p> 
						<p class="m-t m-b">
					<?=lang('estimate_date')?>: <strong><?=strftime("%B %d, %Y", strtotime($estimate->date_saved));?></strong><br>
					<?=lang('expiry_date')?>: <strong><?=strftime("%B %d, %Y", strtotime($estimate->due_date));?></strong><br> 
					<?=lang('estimate_status')?>: <span class="label bg-success">Draft </span><br> 
					<?=lang('bill_to')?>: <strong><?=$this->user_profile->get_fullname($estimate->id)?$this->user_profile->get_fullname($estimate->id) : $estimate->username?></strong> </p> 
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
					if (!empty($estimate_items)) {
					foreach ($estimate_items as $key => $item) { ?>
					<tr>
						<td><?=$item->item_desc?> </td>
						<td><?=$item->quantity?></td> 						
						<td><?=$this->config->item('default_currency_symbol')?> <?=number_format($item->unit_cost,2)?></td>
						<td><?=$this->config->item('default_currency_symbol')?> <?=number_format($item->total_cost,2)?></td>
					</tr>
					<?php } } ?>
					<tr class="hidden-print">
					<?php     
$attributes = array('class' => 'bs-example form-horizontal');
echo form_open(base_url().'estimates/manage/item', $attributes); ?>
<input type="hidden" name="estimate_id" value="<?=$estimate->est_id?>">
						<td><input type="text" name="item_desc" placeholder="Item Description" class="form-control"></td>
						<td><input type="text" name="quantity" placeholder="1" class="form-control"></td> 					
						<td><input type="text" name="unit_cost" placeholder="50" class="form-control"></td>
						<td><button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i> <?=lang('save')?></button></td>
						</form>
					</tr>
					<?php
					$estimate_cost = $this->user_profile->estimate_payable($estimate->est_id);
					$tax = ($this->config->item('default_tax')/100) * $estimate_cost;
					?>
					<tr>
						<td colspan="3" class="text-right"><strong><?=lang('sub_total')?></strong></td>
						<td><?=$this->config->item('default_currency_symbol')?> <?=number_format($estimate_cost,2)?></td>
					</tr>
					<tr>
						<td colspan="3" class="text-right no-border"><strong><?=lang('tax')?></strong></td>
						<td><?=$this->config->item('default_currency_symbol')?> <?=number_format($tax,2)?> </td>
					</tr>
					<tr>
					<td colspan="3" class="text-right no-border"><strong><?=lang('total')?></strong></td>
					<td><strong><?=$this->config->item('default_currency_symbol')?> <?=number_format($estimate_cost+$tax,2)?></strong></td>
					</tr>
					</tbody>
					</table>
					</section> 


					<p><?=$estimate->notes?></p>


					<?php } } ?>


					 <!-- End display details -->






					</section>  




		</section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>



<!-- end -->