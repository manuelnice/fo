
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
			if (!empty($invoices)) {
			foreach ($invoices as $key => $invoice) { ?>
				<li class="b-b b-light">
				<a href="<?=base_url()?>invoices/manage/details/<?=$invoice->inv_id?>">
				<?=ucfirst($this->user_profile->get_profile_details($invoice->client,'fullname')? $this->user_profile->get_profile_details($invoice->client,'fullname'):$invoice->username)?>
				<div class="pull-right">
				<?=$this->config->item('default_currency')?> <?=number_format($this->user_profile->invoice_payable($invoice->inv_id),2)?>
				</div> <br>
				<small class="block text-muted">INV <?=$invoice->reference_no?> | <?=strftime("%B %d, %Y", strtotime($invoice->date_saved));?> </small>

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
							<?php
			if (!empty($invoice_details)) {
			foreach ($invoice_details as $key => $i) { ?>
						<div class="btn-group">
						<a href="<?=base_url()?>invoices/manage/details/<?=$i->inv_id?>" data-original-title="<?=lang('view_details')?>" data-toggle="tooltip" data-placement="bottom" class="btn btn-dark btn-sm"><i class="fa fa-info-circle"></i> <?=lang('invoice_details')?></a>
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

					 <!-- Start create invoice -->
<div class="col-sm-12">
	<section class="panel panel-default">
	
	<header class="panel-heading font-bold"><i class="fa fa-info-circle"></i> <?=lang('invoice_details')?> - <?=$i->reference_no?></header>
	<div class="panel-body">
	

<?php
			 $attributes = array('class' => 'bs-example form-horizontal');
          echo form_open(base_url().'invoices/manage/edit',$attributes); ?>
          <input type="hidden" name="invoice" value="<?=$i->inv_id?>">
			 
          		<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('reference_no')?> <span class="text-danger">*</span></label>
				<div class="col-lg-3">
					<input type="text" class="form-control" value="<?=$i->reference_no?>" name="reference_no" readonly>
				</div>
				</div>

				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('client')?> <span class="text-danger">*</span> </label>
				<div class="col-lg-6">
					<div class="m-b"> 
					<select id="select2-option" style="width:260px" name="client" > 
					<optgroup label="Clients"> 
					<option value="<?=$i->client?>"><?=ucfirst($this->user_profile->get_profile_details($i->client,'fullname')?$this->user_profile->get_profile_details($i->client,'fullname'):$i->username)?></option>
					<?php 
					if (!empty($clients)) {
						foreach ($clients as $client): ?>
					<option value="<?=$client->id?>"><?=ucfirst($this->user_profile->get_profile_details($client->id,'fullname')?$this->user_profile->get_profile_details($client->id,'fullname'):$client->username)?></option>
					<?php endforeach; } ?>
					</optgroup> 
					</select> 
					</div> 
				</div>
			</div>

				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('due_date')?></label> 
				<div class="col-lg-8">
				<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="<?=$i->due_date?>" name="due_date" data-date-format="dd-mm-yyyy" >
				</div> 
				</div> 
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('allow_paypal')?></label>
				<div class="col-lg-3">
				<select name="allow_paypal" class="form-control">	
						<option value="<?=$i->allow_paypal?>">Current</option>				
						<option value="Yes">Yes</option>
						<option value="No">No</option>
				</select>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('recurring')?> </label>
				<div class="col-lg-3">
				<select name="recurring" class="form-control">
						<option value="<?=$i->recurring?>">Current</option>									
						<option value="No">No</option>
						<option value="Yes">Yes</option>
				</select>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('frequency')?> </label>
				<div class="col-lg-3">
				<select name="r_freq" class="form-control">	
						<option value="<?=$i->r_freq?>">Current</option>							
						<option value="7">Weekly</option>
						<option value="30">Monthly</option>
						<option value="92">Quartely</option>
						<option value="365">Yearly</option>
				</select>
				</div>
				</div>			
				
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('notes')?> </label>
				<div class="col-lg-8">
				<textarea name="notes" class="form-control"><?=$i->notes?></textarea>
				</div>
				</div>
				<button type="submit" class="btn btn-sm btn-info"> <?=lang('save_changes')?></button>


				
		</form>
		<?php } } ?>
</div>
</section>
</div>


<!-- End create invoice -->



					</section>  




		</section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>



<!-- end -->






