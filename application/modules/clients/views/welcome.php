<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=site_url()?>"><i class="fa fa-home"></i> <?=lang('home')?></a></li>
		<li class="active"><?=lang('dashboard')?></li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<div class="m-b-md"> <h3 class="m-b-none"><?=lang('dashboard')?></h3>
		<small><?=lang('welcome_back')?> , <?php
		echo $this->user_profile->get_fullname($this->tank_auth->get_user_id())  ? $this->user_profile->get_fullname($this->tank_auth->get_user_id()) : $this->tank_auth->get_username()?> </small>
	</div>
	<section class="panel panel-default">
		<div class="row m-l-none m-r-none bg-light lter">
			<div class="col-sm-6 col-md-3 padder-v b-r b-light">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-dark"></i> <i class="fa fa-coffee fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong><?=$this->user_profile->count_rows('projects',array('client'=>$this->tank_auth->get_user_id()))?> </strong>
				</span> <small class="text-muted text-uc"><?=lang('projects')?> </small> </a>
			</div>
			<div class="col-sm-6 col-md-3 padder-v b-r b-light">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-envelope fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong><?=$this->user_profile->count_rows('messages',array('user_to'=>$this->tank_auth->get_user_id(),'status'=>'Unread'))?> </strong>
				</span> <small class="text-muted text-uc"><?=lang('messages')?>  </small> </a>
			</div>
			<div class="col-sm-6 col-md-3 padder-v b-r b-light">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-suitcase fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong><?=$this->user_profile->count_rows('invoices',array('client'=>$this->tank_auth->get_user_id()))?>  </strong></span>
				<small class="text-muted text-uc"><?=lang('invoices')?>  </small> </a>
			</div>
			<div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-success"></i> <i class="fa fa-calendar-o fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong><?=$this->user_profile->count_rows('activities',array('user'=>$this->tank_auth->get_user_id()))?> </strong>
				</span> <small class="text-muted text-uc"><?=lang('activities')?>  </small> </a>
			</div>
		</div> </section>
		<div class="row">
			<div class="col-md-8">
				<section class="panel panel-default">
				<header class="panel-heading font-bold"> <?=lang('recent_projects')?></header>
				<div class="panel-body">
					
					<table class="table table-striped m-b-none text-sm">
						<thead>
							<tr>
								<th><?=lang('progress')?></th>
								<th><?=lang('project_name')?> </th>
								<th class="pull-right"><?=lang('options')?></th>
							</tr> </thead>
							<tbody>
								
								<?php
								if (!empty($projects)) {
								foreach ($projects as $key => $project) { ?>								
								<tr>
								<?php
							if ($project->auto_progress == 'FALSE') {
								$progress = $project->progress;
							}else{
								$progress = round((($project->time_logged/3600)/$project->estimate_hours)*100,2);
							} ?>
									<td>									
							<?php if ($progress >= 100) { $bg = 'success'; }else{ $bg = 'danger'; } ?>
										<div class="progress progress-xs progress-striped active">
											<div class="progress-bar progress-bar-<?=$bg?>" data-toggle="tooltip" data-original-title="<?=$progress?>%" style="width: <?=$progress?>%">
											</div>
										</div>
									</td>
									<td><?=$project->project_title?> </td>
									<td class="pull-right">
										<a class="btn  btn-success btn-xs" href="<?=base_url()?>clients/projects/details/<?=$project->project_id?>">
										<i class="fa fa-suitcase text"></i> <?=lang('project')?></a>
									</td>
								</tr>
								<?php }
								}else{ ?>
								<tr>
									<td>Nothing to display here</td><td></td><td></td>
								</tr>
								<?php } ?>
								
								
							</tbody>
						</table>
					</div> <footer class="panel-footer bg-white no-padder">
					<div class="row text-center no-gutter">
						<div class="col-xs-3 b-r b-light">
							<span class="h4 font-bold m-t block"><?=$this->user_profile->count_rows('bugs',array('reporter'=>$this->tank_auth->get_user_id()))?>
							</span> <small class="text-muted m-b block"><?=lang('reported_bugs')?></small>
						</div>
						<div class="col-xs-3 b-r b-light">
							<span class="h4 font-bold m-t block"><?=$this->user_profile->count_rows('projects',array('progress >='=>'100'))?>
							</span> <small class="text-muted m-b block"><?=lang('complete_projects')?></small>
						</div>
						<div class="col-xs-3 b-r b-light">
							<span class="h4 font-bold m-t block"><?=$this->user_profile->count_rows('messages',array('user_to'=>$this->tank_auth->get_user_id()))?>
							</span> <small class="text-muted m-b block"><?=lang('received_messages')?></small>
						</div>
						<div class="col-xs-3">
							<span class="h4 font-bold m-t block"><?=$this->user_profile->count_rows('comments',array('posted_by'=>$this->tank_auth->get_user_id()))?>
							</span> <small class="text-muted m-b block"><?=lang('project_comments')?></small>
						</div>
					</div> </footer>
				</section>
			</div>
			<div class="col-lg-4"> <section class="panel panel-default">
			<header class="panel-heading"><?=lang('average_payments')?> </header>
			<div class="panel-body text-center"> <h4><small> <?=lang('paid_amount')?> : </small>
				<?=$this->config->item('default_currency')?> <?=number_format($this->user_profile->get_sum('payments','amount',array('paid_by'=>$this->tank_auth->get_user_id())),2)?> </strong><?=$this->config->item('currency')?> </h4>
				<small class="text-muted block"><?=date('M')?> <?=date('Y')?></small>
				<div class="inline">
					<div class="easypiechart" data-percent="<?=$this->user_profile->average_monthly_paid(date('m'))?>" data-line-width="16" data-loop="false" data-size="188">
						<span class="h2 step"><?=$this->user_profile->average_monthly_paid(date('m'))?></span>%
						<div class="easypie-text"><?=lang('paid')?>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">Your <small>% invoice payments this month</small>
			</div> </section>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<section class="panel panel-default portlet-item">
				<script src="<?=JS_URL?>jquery-2.1.1.min.js"></script>
				<script src="<?=JS_URL?>chart/highcharts.js"></script>
				<script src="<?=JS_URL?>chart/modules/exporting.js"></script>
				<div id="g_render"  class="left">
					<?php if (isset($charts)) echo $charts; ?>
					
				</div>
			</section>
		</div>
		<div class="col-md-4"> <section class="panel panel-default b-light">
<div class="panel-body">
			<section class="comment-list block"> 
			<?php
								if (!empty($activities)) {
								foreach ($activities as $key => $activity) { ?>
			<article id="comment-id-1" class="comment-item">
				<span class="fa-stack pull-left m-l-xs"><a class="pull-left thumb-sm"><img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($activity->user,'avatar')?>" class="img-circle"></a>
				</span> <section class="comment-body m-b-lg">
					<header> <a href="#"><strong><?=$this->user_profile->get_profile_details($activity->user,'fullname')?$this->user_profile->get_profile_details($activity->user,'fullname'):$this->user_profile->get_user_details($activity->user,'username')?></strong></a>					
						<span class="text-muted text-xs"> <?php
								$today = time();
								$activity_day = strtotime($activity->activity_date) ;
								echo $this->user_profile->get_time_diff($today,$activity_day);
							?> ago</span> </header>
					<div><?=$activity->activity?></div> 
					</section>
			</article>
			<?php }} ?>
						
						</section>

							</div>
							
						</section>
					</div>
				</div>
			</section>
		</section>
	<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>