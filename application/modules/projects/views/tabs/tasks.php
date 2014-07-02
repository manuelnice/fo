<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 
			<?php
				if (!empty($project_tasks)) {
				foreach ($project_tasks as $key => $task) { ?>
		<li class="list-group-item"> 


		<a href="#" class="thumb-sm pull-left m-r-sm"> <img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($task->added_by,'avatar')?>" class="img-circle"> </a>
			<a href="#" class="clear" data-toggle="popover" data-html="true" data-placement="bottom" data-content="

<div class='scrollable' style='height:40px'>Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.
</div>" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Popover on top"> <small class="pull-right"><?php
								$today = time();
								$activity_day = strtotime($task->date_added) ;
								echo $this->user_profile->get_time_diff($today,$activity_day);
							?> ago</small> <strong class="block"><?=ucfirst($this->user_profile->get_user_details($task->added_by,'username'))?></strong> 
							<small><?=$task->task_name?></small> <div class="progress progress-xs progress-striped active">
			<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="<?=$task->progress?>%" style="width: <?=$task->progress?>%">
			</div>
			</div>  </a>							
		</li> 
		
				<?php } } ?>
	 
		</ul> 