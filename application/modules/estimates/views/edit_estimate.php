<!-- Start -->


<section id="content">
	<section class="hbox stretch">
	
		<aside class="aside-md bg-white b-r hidden-print" id="subNav">

			<header class="dk header b-b">
		<a href="<?=base_url()?>estimates/manage/add" data-original-title="<?=lang('create_estimate')?>" data-toggle="tooltip" data-placement="bottom" class="btn btn-icon btn-default btn-sm pull-right"><i class="fa fa-plus"></i></a>
		<p class="h4"><?=lang('all_estimates')?></p>
		</header>



			<section class="vbox">
			 <section class="scrollable w-f">
			   <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
			<ul class="nav">
			<?php
			if (!empty($estimates)) {
			foreach ($estimates as $key => $estimate) { 
				if ($estimate->invoiced == 'Yes') {	$est_status = 'INVOICED'; $label = 'success'; }elseif ($estimate->emailed == 'Yes') {
					$est_status = 'SENT'; $label = 'info';	}else{	$est_status = 'DRAFT'; $label = 'default';	}
				?>
				<li class="b-b b-light <?php if($estimate->est_id == $this->uri->segment(4)){ echo "bg-light dk"; } ?>"><a href="<?=base_url()?>estimates/manage/details/<?=$estimate->est_id?>">
				<?=ucfirst($this->user_profile->get_profile_details($estimate->client,'fullname')? $this->user_profile->get_profile_details($estimate->client,'fullname'):$estimate->username)?>
				<div class="pull-right">
				<?=$this->config->item('default_currency')?> <?=number_format($this->user_profile->estimate_payable($estimate->est_id),2)?></div> <br>
				<small class="block small text-muted">EST <?=$estimate->reference_no?> | <?=strftime("%b %d, %Y", strtotime($estimate->date_saved));?> <span class="label label-<?=$label?>"><?=$est_status?></span></small>

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
			foreach ($estimate_details as $key => $est) { ?>
			<a data-original-title="<?=lang('print_estimate')?>" data-toggle="tooltip" data-placement="bottom" href="#" class="btn btn-sm btn-info" onClick="window.print();">
					<i class="fa fa-print"></i> </a> 

						<a data-original-title="<?=lang('edit_estimate')?>" data-toggle="tooltip" data-placement="bottom" class="btn btn-sm btn-dark" href="<?=base_url()?>estimates/manage/edit/<?=$estimate->est_id?>/<?=$est->reference_no?>" title="<?=lang('edit_estimate')?>"><i class="fa fa-pencil"></i></a>

					<a data-original-title="<?=lang('email_estimate')?>" data-toggle="tooltip" data-placement="bottom" class="btn btn-sm btn-dark" href="<?=base_url()?>estimates/manage/email/<?=$est->est_id?>/<?=$est->reference_no?>" title="<?=lang('email_estimate')?>"><i class="fa fa-envelope"></i></a>

						<a class="btn btn-sm btn-success <?php if($est->invoiced == 'Yes'){ echo "disabled"; } ?>" href="<?=base_url()?>estimates/manage/convert/<?=$est->est_id?>/<?=$est->reference_no?>" data-toggle="ajaxModal"
						 title="<?=lang('convert_to_invoice')?>">
						<?=lang('convert_to_invoice')?></a>				

						<div class="btn-group">
						<button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
						<?=lang('more_actions')?>
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
								<li><a href="<?=base_url()?>estimates/action/marksent"><?=lang('mark_as_sent')?></a></li>
								<li><a href="<?=base_url()?>estimates/manage/estimatehistory"><?=lang('estimate_history')?></a></li>
								<li class="divider"></li>
								<li><a href="<?=base_url()?>estimates/action/edit"><?=lang('edit_estimate')?></a></li>
								<li><a href="<?=base_url()?>estimates/action/delete"><?=lang('delete_estimate')?></a></li>
						</ul>
						</div>
						
						</div>
						<div class="col-sm-4 m-b-xs">
						<a href="<?=base_url()?>estimates/action/generatepdf" class="btn btn-sm btn-dark pull-right">
					<i class="fa fa-download"></i> <?=lang('pdf')?></a> 
					
						</div>
					</div> </header>
					
					<section class="scrollable wrapper w-f">
					<!-- Start create invoice -->
<div class="col-sm-12">
	<section class="panel panel-default">
	
	<header class="panel-heading font-bold"><i class="fa fa-info-circle"></i> <?=lang('estimate_details')?> - <?=$est->reference_no?></header>
	<div class="panel-body">
	

<?php
			 $attributes = array('class' => 'bs-example form-horizontal');
          echo form_open(base_url().'estimates/manage/edit',$attributes); ?>
          <input type="hidden" name="estimate" value="<?=$est->est_id?>">
			 
          		<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('reference_no')?> <span class="text-danger">*</span></label>
				<div class="col-lg-3">
					<input type="text" class="form-control" value="<?=$est->reference_no?>" name="reference_no" readonly>
				</div>
				</div>

				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('client')?> <span class="text-danger">*</span> </label>
				<div class="col-lg-6">
					<div class="m-b"> 
					<select id="select2-option" style="width:260px" name="client" >
					<option value="<?=$est->client?>"><?=ucfirst($this->user_profile->get_profile_details($est->client,'fullname')?$this->user_profile->get_profile_details($est->client,'fullname'):$est->username)?></option>
					<optgroup label="Clients"> 
					
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
				<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="<?=$est->due_date?>" name="due_date" data-date-format="dd-mm-yyyy" >
				</div> 
				</div> 

							
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('notes')?> </label>
				<div class="col-lg-8">
				<textarea name="notes" class="form-control"><?=$est->notes?></textarea>
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