<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> <?=lang('home')?></a></li>
		<li><a href="<?=base_url()?>projects/view_projects/all"><?=lang('projects')?></a></li>
		<li class="active"><?=lang('all_projects')?></li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<section class="panel panel-default">
	<header class="panel-heading"> <i class="fa fa-coffee"></i> <?=lang('all_projects')?></header>
	<div class="row text-sm wrapper">
		<div class="col-sm-5 m-b-xs">
			
			<a href="<?=base_url()?>projects/view/add" class="btn btn-sm btn-danger"><i class="fa fa-plus"></i>
			 <?=lang('new_project')?></a>
		</div>
		<div class="col-sm-4 m-b-xs">
			
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="<?=lang('search')?>">
				<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button">Go!</button>
				</span>
			</div>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th><?=lang('project_code')?></th>
					<th><?=lang('project_name')?></th>
					<th><?=lang('client')?> </th>
					<th><?=lang('progress')?> </th>
					<th><?=lang('due_date')?> </th>
					<th><?=lang('options')?></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($projects)) {
				foreach ($projects as $key => $project) { ?>
				<tr>
					<td><a href="<?=base_url()?>projects/view/details/<?=$project->project_id?>"><?=$project->project_code?></a></td>
					<td><?=$project->project_title?></td>
					<td><?=ucfirst($this->user_profile->get_user_details($project->user_id,'username'))?></td>
					<td><div class="progress progress-xs m-t-xs progress-striped active m-b-none">
											<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="<?=$project->progress?>%" style="width: <?=$project->progress?>%">
											</div>
										</div>
					</td>
					<td><?=$project->due_date?> </td>
					<td>
					<a href="<?=base_url()?>projects/view/edit/<?=$project->project_id?>" class="btn btn-info btn-xs">
					<i class="fa fa-pencil"></i> <?=lang('edit')?></a>
					<a href="<?=base_url()?>projects/delete/<?=$project->project_id?>" data-toggle="ajaxModal" class="btn btn-danger btn-xs">
					<i class="fa fa-times"></i> <?=lang('delete')?></a>
					</td>
				</tr>
				<?php  }} else{ ?>
				<tr>
					<td></td><td><?=lang('nothing_to_display')?></td><td></td><td></td>
				</tr>
				<?php } ?>
				
				
				
			</tbody>
		</table>
	</div> <footer class="panel-footer">
	<div class="row">
		<div class="col-sm-4 hidden-xs">
			
		</div>
		<div class="col-sm-4 text-center"> <small class="text-muted inline m-t-sm m-b-sm"><?=lang('showing')?> 20-30 of 50 <?=lang('items')?></small>
		</div>
		<div class="col-sm-4 text-right text-center-xs">
			<ul class="pagination pagination-sm m-t-none m-b-none">
				<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
			</ul>
		</div>
	</div> </footer> </section>
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>




