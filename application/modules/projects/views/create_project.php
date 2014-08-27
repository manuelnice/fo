<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> <?=lang('home')?></a></li>
		<li><a href="<?=base_url()?>projects/view_projects/all"><?=lang('projects')?></a></li>
		<li class="active"><?=lang('create_project')?></li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>

<!-- Start create project -->
<div class="col-sm-12">
	<section class="panel panel-default">
	<header class="panel-heading font-bold"><i class="fa fa-info-circle"></i> <?=lang('project_details')?></header>
	<div class="panel-body">
<div class="alert alert-info"> 
<button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-info-sign"></i>
<?=lang('email_sending_warning')?>
</div>
<?php
			 $attributes = array('class' => 'bs-example form-horizontal');
          echo form_open(base_url().'projects/view/add',$attributes); ?>
			 
          				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('project_code')?> <span class="text-danger">*</span></label>
				<div class="col-lg-3">
				<?php $this->load->helper('string'); ?>
					<input type="text" class="form-control" value="<?=random_string('nozero', 5);?>" name="project_code" readonly>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('project_title')?> <span class="text-danger">*</span></label>
				<div class="col-lg-6">
					<input type="text" class="form-control" placeholder="Project Title" name="project_title">
				</div>
				</div>	

				<div class="form-group">
			        <label class="col-lg-2 control-label"><?=lang('client')?> <span class="text-danger">*</span> </label>
			        <div class="col-lg-6">
			          <div class="m-b"> 
			          <select id="select2-option" style="width:260px" name="client" required> 
			          
			          <optgroup label="Clients"> 
			            <?php
			            if (!empty($clients)) {
			            foreach ($clients as $key => $c) { ?>
			            <option value="<?=$c->id?>"><?=ucfirst($c->username)?></option>
			            <?php }} ?>
			          </optgroup> 
			          </select> 
			          </div> 
			        </div>
			      </div>	



				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('start_date')?></label> 
				<div class="col-lg-8">
				<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="<?=date('d-m-Y')?>" name="start_date" data-date-format="dd-mm-yyyy" >
				</div> 
				</div> 
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('due_date')?></label> 
				<div class="col-lg-8">
				<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="<?=date('d-m-Y')?>" name="due_date" data-date-format="dd-mm-yyyy" >
				</div> 
				</div> 
				<div class="form-group"> 
				<label class="col-lg-2 control-label"><?=lang('progress')?></label>
				<div class="col-lg-8"> 
					<input class="slider slider-horizontal form-control" type="text" value="" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="0" data-slider-orientation="horizontal" name="progress" > 
				</div>
				</div> 

				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('assigned_to')?> <span class="text-danger">*</span></label>
				<div class="col-lg-3">
				<select name="assigned_to" class="form-control">
					<?php
					if (!empty($assign_to)) {
					foreach ($assign_to as $key => $user) { ?>
						<option value="<?=$user->id?>"><?=ucfirst($user->username)?></option>
					<?php } } ?>					
				</select>
				</div>
				</div>

				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('estimated_hours')?></label>
				<div class="col-lg-2">
					<input type="text" class="form-control" value="3" name="estimate">
				</div>
				</div>

				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('project_description')?> <span class="text-danger">*</span></label>
				<div class="col-lg-8">
				<textarea name="description" class="form-control">Project Description</textarea>
				</div>
				</div>
				<button type="submit" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> <?=lang('create_project')?></button>


				
		</form>
</div>
</section>
</div>


<!-- End create project -->
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>