<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> <?=lang('home')?></a></li>
		<li><a href="<?=base_url()?>invoices/manage/by_status/all"><?=lang('invoices')?></a></li>
		<li class="active"><?=lang('create_invoice')?></li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>

<!-- Start create project -->
<div class="col-sm-12">
	<section class="panel panel-default">
	<header class="panel-heading font-bold"><i class="fa fa-info-circle"></i> <?=lang('invoice_details')?></header>
	<div class="panel-body">

<?php
			 $attributes = array('class' => 'bs-example form-horizontal');
          echo form_open(base_url().'invoices/manage/add',$attributes); ?>
			 
          		<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('reference_no')?> <span class="text-danger">*</span></label>
				<div class="col-lg-3">
				<?php $this->load->helper('string'); ?>
					<input type="text" class="form-control" value="<?=random_string('nozero', 6);?>" name="reference_no" readonly>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('client')?></label>
				<div class="col-lg-3">
				<select name="client" class="form-control">
					<?php
					if (!empty($clients)) {
					foreach ($clients as $key => $client) { ?>
						<option value="<?=$client->id?>">
						<?=ucfirst($this->user_profile->get_profile_details($client->id,'fullname')?$this->user_profile->get_profile_details($client->id,'fullname'):$client->username)?></option>
					<?php } } ?>					
				</select>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('due_date')?></label> 
				<div class="col-lg-8">
				<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="<?=date('d-m-Y')?>" name="due_date" data-date-format="dd-mm-yyyy" >
				</div> 
				</div> 
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('allow_paypal')?></label>
				<div class="col-lg-3">
				<select name="allow_paypal" class="form-control">					
						<option value="Yes">Yes</option>
						<option value="No">No</option>
				</select>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('recurring')?> </label>
				<div class="col-lg-3">
				<select name="recurring" class="form-control">						
						<option value="No">No</option>
						<option value="Yes">Yes</option>
				</select>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('frequency')?> </label>
				<div class="col-lg-3">
				<select name="recurring" class="form-control">					
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
				<textarea name="notes" class="form-control">A finance charge of 1.5% will be made on unpaid balances after due day.Thank you for your business.</textarea>
				</div>
				</div>
				<button type="submit" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> <?=lang('create_invoice')?></button>


				
		</form>
</div>
</section>
</div>


<!-- End create project -->
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>