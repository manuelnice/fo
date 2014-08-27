<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> <?=lang('home')?></a></li>
		<li><a href="<?=base_url()?>settings/general"><?=lang('settings')?></a></li>
		<li class="active"><?=lang('general_settings')?></li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<!-- Start Form -->
	<div class="col-sm-12"> <section class="panel panel-default">
	<header class="panel-heading font-bold"><i class="fa fa-cogs"></i> <?=lang('general_settings')?></header>
	<div class="panel-body">
	  <?php     
$attributes = array('class' => 'bs-example form-horizontal');
echo form_open_multipart(uri_string(), $attributes); ?>
<input type="hidden" name="r_url" value="<?=uri_string()?>">
			<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('company_name')?> <span class="text-danger">*</span></label> 
				<div class="col-lg-10">
					<input type="text" name="company_name" class="form-control" value="<?=$this->config->item('company_name')?>" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('contact_person')?> </label>
				<div class="col-lg-10">
					<input type="text" class="form-control"  value="<?=$this->config->item('contact_person')?>" name="contact_person">
					<span class="help-block m-b-none">This could be the Company representative</strong>.</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('company_address')?> <span class="text-danger">*</span></label>
				<div class="col-lg-10">
					<input type="text" class="form-control"  value="<?=$this->config->item('company_address')?>" name="company_address" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('company_phone')?></label>
				<div class="col-lg-4">
					<input type="text" class="form-control" value="<?=$this->config->item('company_phone')?>" name="company_phone">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('company_domain')?></label>
				<div class="col-lg-4">
					<input type="text" class="form-control" value="<?=$this->config->item('company_domain')?>" name="company_domain">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('company_logo')?></label>
				<div class="col-lg-10">
					<input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s" name="userfile">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('country')?></label>
				<div class="col-lg-10">
					<div class="m-b"> 
					<select id="select2-option" style="width:260px" name="company_country" > 
					<optgroup label="Selected Country"> 
					<option value="<?=$this->config->item('company_country')?>"><?=$this->config->item('company_country')?></option>
					</optgroup> 
					<optgroup label="Other Countries"> 
						<?php foreach ($countries as $country): ?>
						<option value="<?=$country->value?>"><?=$country->value?></option>
						<?php endforeach; ?>
					</optgroup> 
					</select> 
					</div> 
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('city')?></label>
				<div class="col-lg-4">
					<input type="text" class="form-control" value="<?=$this->config->item('company_city')?>" name="company_city">
				</div>
			</div>
			
			
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
				<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i> <?=lang('save_changes')?></button>
				</div>
			</div>
		</form>
	</div> </section>
</div>
<!-- End Form -->
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
</section>