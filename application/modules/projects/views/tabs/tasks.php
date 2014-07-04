<header class="header b-b b-light hidden-print">
<a href="<?=base_url()?>projects/tasks/add/<?=$this->uri->segment(4)*1200?>"  data-toggle="ajaxModal" title="<?=lang('add_task')?>" class="btn btn-sm btn-info pull-right"><?=lang('add_task')?></a> 
 </header>



<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 
			<?php
				if (!empty($project_tasks)) {
				foreach ($project_tasks as $key => $task) { ?>
		<li class="list-group-item"> 


		<a href="#" class="thumb-sm pull-left m-r-sm"> <img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($task->added_by,'avatar')?>" class="img-circle"> </a>
			<a href="<?=base_url()?>projects/tasks/edit/<?=$task->t_id?>" data-toggle="ajaxModal" title="<?=lang('edit_task')?>" class="clear"> <small class="pull-right"><?php
								$today = time();
								$activity_day = strtotime($task->date_added) ;
								echo $this->user_profile->get_time_diff($today,$activity_day);
							?> ago</small> <strong class="block"><?=ucfirst($this->user_profile->get_user_details($task->added_by,'username'))?></strong> 
							<small><?=$task->task_name?></small>
							<div class="progress progress-xs progress-striped active">
							<?php if ($task->progress >= 100) { $bg = 'success'; }else{ $bg = 'danger'; } ?>
			<div class="progress-bar progress-bar-<?=$bg?>" data-toggle="tooltip" data-original-title="<?=$task->progress?>%" style="width: <?=$task->progress?>%">
			</div>
			</div>  </a>							
		</li> 
		
				<?php } } ?>
	 
		</ul> 