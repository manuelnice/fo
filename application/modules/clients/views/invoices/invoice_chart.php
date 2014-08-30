	<?php
			$total_receipts = $this->user_profile->get_sum('payments','amount',$array = array(
				'paid_by'=>$this->tank_auth->get_user_id(),
				'inv_deleted' => 'No'));
			$total_sales = $this->user_profile->client_payable($this->tank_auth->get_user_id());
			$outstanding = $total_sales - $total_receipts;
			if ($total_sales > 0 AND $total_receipts > 0) {
						$perc_paid = ($total_receipts/$total_sales)*100;
					}else{ $perc_paid = 0; }					
					?>
<div class="progress progress-xs progress-striped active">
			<div class="progress-bar progress-bar-info" data-toggle="tooltip" data-placement="bottom" data-original-title="<?=lang('due_amount')?> <?=$this->config->item('default_currency')?> <?=number_format($outstanding,2)?> 
			<?=number_format($perc_paid,2)?>%" style="width: <?=number_format($perc_paid)?>%">
			</div>
			</div>

	<div class="col-md-8">
				<script src="<?=JS_URL?>jquery-2.1.1.min.js"></script>
				<script src="<?=JS_URL?>chart/highcharts.js"></script>
				<script src="<?=JS_URL?>chart/modules/exporting.js"></script>


				<div id="g_render"  class="left">
					<?php if (isset($charts)) echo $charts; ?>
					
				</div>
		</div>
		<div class="col-md-4"> 
		<section class="panel panel-default b-light">
		<header class="panel-heading"> System Stats </header>
		<div class="panel-body">
			

		<div class="text-center wrapper bg-light lt"> 
			
		
		</div> 
			<ul class="list-group no-radius"> 
			<li class="list-group-item text-info">
			
			<span class="pull-right text-dark"><?=$this->config->item('default_currency')?> <?=number_format($outstanding,2)?></span><i class="fa fa-star-o text-info"></i> <?=lang('outstanding')?> </li>
			<li class="list-group-item text-success">
			<span class="pull-right text-dark"><?=$this->config->item('default_currency')?> <?=number_format($total_receipts,2)?></span><i class="fa fa-star text-success dker"></i> <?=lang('total_receipts')?> </li>
			<li class="list-group-item text-danger">
			<span class="pull-right text-dark"><?=$this->config->item('default_currency')?> <?=number_format($total_sales,2)?></span><i class="fa fa-bar-chart-o text-dark"></i> <?=lang('total_sales')?> </li>
			</ul> 

		</div>
							
		</section>
		</div>