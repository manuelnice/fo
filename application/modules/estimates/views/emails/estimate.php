<!DOCTYPE html>
<html lang="en" class="app">

<head> 
    <meta charset="utf-8" /> 
    <meta name="description" content="">
    <meta name="author" content="<?=$this->config->item('site_author')?>">
    <meta name="keyword" content="<?=$this->config->item('site_desc')?>">
    <link rel="shortcut icon" href="<?=IMG_URL?>favicon.ico">

    <title>Estimate </title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

<link rel="stylesheet" href="<?=CSS_URL?>app.inv.v2.css" type="text/css" /> 

 
</head>

<body> 
<section class="vbox"> 

<section> 
<section class="hbox stretch"> 

<section id="content">
	<section class="hbox stretch">
		
			<?php
					if (!empty($estimate_details)) {
			foreach ($estimate_details as $key => $e) { ?>
			<aside>
			<section class="vbox">
				
					
					<section class="scrollable wrapper w-f">
					

					
					<section class="scrollable wrapper">

					<div class="row text-left"> 

					<div class="col-xs-6"> 
						<h4><strong><?=$this->config->item('company_name')?></strong></h4>
						<p><?=$this->config->item('company_address')?><br>
						<?=lang('phone')?>: <?=$this->config->item('company_phone')?> </p>
					</div>
						<div class="col-xs-12 text-right">
						<h4>EST #<?=$e->reference_no?></h4> 
						<p class="m-t m-b">
					<?=lang('estimate_date')?>: <strong><?=strftime("%b %d, %Y", strtotime($e->date_saved));?></strong><br>
					<?=lang('due_date')?>: <strong><?=strftime("%b %d, %Y", strtotime($e->due_date));?></strong><br> 
					<?=lang('estimate_status')?>: <?=$e->status?> <br> 
					<?=lang('bill_to')?>: <strong><?=ucfirst($this->user_profile->get_profile_details($e->id,'fullname')?$this->user_profile->get_profile_details($e->id,'fullname') : $e->username)?></strong> </p>
					</div>
					</div>

					
					<div class="line"></div>
					<table class="table"><thead>
					<tr style="background-color:#000; color:#fff;">
					<th><?=lang('description')?> </th>
					<th width="60"><?=lang('qty')?> </th>					
					<th width="140"><?=lang('unit_price')?> </th>
					<th width="90"><?=lang('amount')?> </th>
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
					
					<?php
					$est_tax = $e->tax?$e->tax:$this->config->item('default_tax');
					$estimate_cost = $this->user_profile->estimate_payable($e->est_id);
					$tax = ($est_tax/100) * $estimate_cost;
					?>
					<tr>
						<td colspan="3" class="text-right"><strong><?=lang('sub_total')?></strong></td>
						<td><strong><?=$this->config->item('default_currency_symbol')?> <?=number_format($estimate_cost,2)?>
						</strong></td>
					</tr>
					<tr>
						<td colspan="3" class="text-right no-border"><strong><?=lang('tax')?></strong></td>
						<td><?=$this->config->item('default_currency_symbol')?> <?=number_format($tax,2)?></td>
					</tr>
					<tr>
					<td colspan="3" class="text-right no-border"><strong><?=lang('estimate_cost')?></strong></td>
					<td><strong><?=$this->config->item('default_currency_symbol')?> <?=number_format($estimate_cost + $tax,2)?></strong></td>
					</tr>
					</tbody>
					</table>
					</section> 


					<p><?=$e->notes?></p>


					<?php } } ?>






					</section>  




		</section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>




  
</section> 
</section> 
</section> 
</body>
</html>