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
			foreach ($projects as $key => $p) { ?>
				<li class="b-b b-light <?php if($p->timer == 'On'){ echo "bg-danger lter"; } ?>">
				<a href="<?=base_url()?>collaborator/projects/details/<?=$p->project_id?>">
				<?=ucfirst($this->user_profile->get_profile_details($p->client,'fullname')? $this->user_profile->get_profile_details($p->client,'fullname'):$this->user_profile->get_user_details($p->client,'username'))?>
				<div class="pull-right">
				<?php
						$task_time = $this->user_profile->get_sum('tasks','logged_time',array('project'=>$p->project_id));
						$project_time = $this->user_profile->get_sum('projects','time_logged',array('project_id'=>$p->project_id));
						$logged_time = ($task_time + $project_time)/3600;
						echo round($logged_time, 1);
									?> <?=lang('hours')?>
				</div> <br>
				<small class="block text-muted">PRO #<?=$p->project_code?> | <?=strftime("%B %d, %Y", strtotime($p->date_created));?> </small>

				</a> </li>
				<?php } ?>
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
						<div class="btn-group">
						<a class="btn btn-sm btn-default" href="<?=current_url()?>" data-original-title="<?=lang('refresh')?>" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-refresh"></i></a>
						</div>
						<a class="btn btn-sm btn-danger" href="<?=base_url()?>projects/view/add" title="<?=lang('new_project')?>" data-original-title="<?=lang('new_project')?>" data-toggle="tooltip" data-placement="bottom">
						<i class="fa fa-plus"></i> <?=lang('new_project')?></a>
						</div>
						<div class="col-sm-4 m-b-xs">
						<?php  echo form_open(base_url().'projects/manage/search'); ?>
							<div class="input-group">
								<input type="text" class="input-sm form-control" name="keyword" placeholder="<?=lang('search')?>">
								<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="submit">Go!</button>
								</span>
							</div>
							</form>
						</div>
					</div> </header>
					<section class="scrollable wrapper w-f">
					<!-- Start Display chart -->
					
					 <?php  //echo modules::run('invoices/index'); ?>


					 <!-- End display chart -->






					</section>  




		</section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>



<!-- end -->