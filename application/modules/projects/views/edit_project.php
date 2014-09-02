<!-- Start -->


<section id="content">
	<section class="hbox stretch">
	
		<aside class="aside-md bg-white b-r" id="subNav">

			<div class="wrapper b-b header"><?=lang('all_projects')?>
			</div>
			<section class="vbox">
			 <section class="scrollable w-f">
			   <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
			<ul class="nav">
			<?php
				if (!empty($projects)) {
			foreach ($projects as $key => $p) { ?>
				<li class="b-b b-light <?php if($p->project_id == $this->uri->segment(4)){ echo "bg-light dker"; } ?>">
				<a href="<?=base_url()?>projects/view/details/<?=$p->project_id?>" data-toggle="tooltip" data-original-title="<?=$p->project_title?>">
				<?=ucfirst($this->user_profile->get_profile_details($p->client,'fullname')? $this->user_profile->get_profile_details($p->client,'fullname'):$this->user_profile->get_user_details($p->client,'username'))?>
				<div class="pull-right">
				<?php
						$task_time = $this->user_profile->get_sum('tasks','logged_time',array('project'=>$p->project_id));
						$project_time = $this->user_profile->get_sum('projects','time_logged',array('project_id'=>$p->project_id));
						$logged_time = ($task_time + $project_time)/3600;
						echo round($logged_time, 1);
									?> <?=lang('hours')?>
				</div> <br>
				<small class="block text-muted">PRO #<?=$p->project_code?> | <?=strftime("%b %d, %Y", strtotime($p->date_created));?> </small>

				</a> </li>
				<?php } }?>
			</ul> 
			</div></section>
			</section>
			</aside> 
			
			<aside>
			<section class="vbox">
			<?php
								if (!empty($project_details)) {
				foreach ($project_details as $key => $project) { ?>
				<header class="header bg-white b-b clearfix">
					<div class="row m-t-sm">
						<div class="col-sm-8 m-b-xs">
							
						<div class="btn-group">
						
						</div>
						<a class="btn btn-sm btn-dark" href="<?=base_url()?>projects/view/add" title="<?=lang('new_project')?>" data-original-title="<?=lang('new_project')?>" data-toggle="tooltip" data-placement="bottom">
						<i class="fa fa-plus"></i> <?=lang('new_project')?></a>
						<a class="btn btn-sm btn-danger" href="<?=base_url()?>projects/delete/<?=$project->project_id?>" title="<?=lang('delete_project')?>" data-toggle="ajaxModal" data-placement="bottom">
						<i class="fa fa-trash-o"></i> <?=lang('delete_project')?></a>
						</div>
						<div class="col-sm-4 m-b-xs">
						<?php  echo form_open(base_url().'projects/search'); ?>
							<div class="input-group">
								<input type="text" class="input-sm form-control" name="keyword" placeholder="<?=lang('search')?> <?=lang('project')?>">
								<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="submit">Go!</button>
								</span>
							</div>
							</form>
						</div>
					</div> </header>
					<section class="scrollable wrapper w-f">
					<!-- Start create project -->
<div class="col-sm-12">
	<section class="panel panel-default">
	<header class="panel-heading font-bold"><i class="fa fa-info-circle"></i> <?=lang('project_details')?></header>
	<div class="panel-body">

<?php
			 $attributes = array('class' => 'bs-example form-horizontal');
          echo form_open(base_url().'projects/view/edit',$attributes); ?>
			 <input type="hidden" name="project_id" value="<?=$project->project_id?>">
          				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('project_code')?> <span class="text-danger">*</span></label>
				<div class="col-lg-3">
					<input type="text" class="form-control" value="<?=$project->project_code?>" name="project_code" readonly>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('project_title')?> <span class="text-danger">*</span></label>
				<div class="col-lg-6">
					<input type="text" class="form-control" value="<?=$project->project_title?>" name="project_title">
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
			            <option value="<?=$c->id?>"><?=ucfirst($this->user_profile->get_profile_details($c->id,'fullname')?$this->user_profile->get_profile_details($c->id,'fullname'):$c->username)?></option>
			            <?php }} ?>
			          </optgroup> 
			          </select> 
			          </div> 
			        </div>
			      </div>
				
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('start_date')?></label> 
				<div class="col-lg-8">
				<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="<?=$project->start_date?>" name="start_date" data-date-format="dd-mm-yyyy" >
				</div> 
				</div> 
				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('due_date')?></label> 
				<div class="col-lg-8">
				<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="<?=$project->due_date?>" name="due_date" data-date-format="dd-mm-yyyy" >
				</div> 
				</div> 
				<div class="form-group"> 
				<label class="col-lg-2 control-label"><?=lang('progress')?></label>
				<div class="col-lg-8"> 
					<input class="slider slider-horizontal form-control" type="text" value="<?=$project->progress?>" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="<?=$project->progress?>" data-slider-orientation="horizontal" name="progress" > 
				</div>
				</div> 

				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('assigned_to')?> <span class="text-danger">*</span></label>
				<div class="col-lg-3">
				<select name="assigned_to" class="form-control">
				<option value="<?=$project->assign_to?>">Use Current</option>
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
					<input type="text" class="form-control" value="<?=$project->estimate_hours?>" name="estimate">
				</div>
				</div>	

				<div class="form-group">
				<label class="col-lg-2 control-label"><?=lang('project_description')?> <span class="text-danger">*</span></label>
				<div class="col-lg-8">
				<textarea name="description" class="form-control"><?=$project->description?></textarea>
				</div>
				</div>
				<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i> <?=lang('save_changes')?></button>


				
		</form>
		<?php } } ?>
</div>
</section>
</div>


<!-- End create project -->






					</section>  




		</section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>



<!-- end -->