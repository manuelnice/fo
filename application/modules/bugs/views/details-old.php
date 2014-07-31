








<section id="content"> 
<section class="vbox">

	<header class="header bg-white b-b b-light">
	<p>#<?=$bug->issue_ref?> <?=lang('issue_details')?></p> </header> 
	<section class="scrollable"> 
	<section class="hbox stretch"> 
	<aside class="aside-lg bg-light lter b-r"> 
	<section class="vbox"> 
	<section class="scrollable w-f">
	<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
	<div class="wrapper">
	
		<div class="clearfix m-b">
		<a href="#" class="pull-left thumb m-r"> 
		<img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($bug->reporter,'avatar')?>" class="img-circle"> </a>
			<div class="clear">
				<div class="h3 m-t-xs m-b-xs"><?=lang('bug_reporter')?></div> 
				<small class="text-muted"><i class="fa fa-bug"></i> 
				<?=ucfirst($this->user_profile->get_profile_details($bug->reporter,'fullname')?$this->user_profile->get_profile_details($bug->reporter,'fullname'):$this->user_profile->get_user_details($bug->reporter,'username'))?></small>
			</div>
		</div>
		<div class="panel wrapper panel-success">
			<div class="row">
				<div class="col-xs-6"> <a href="#">
					<span class="m-b-xs h4 block"><?=$this->user_profile->count_rows('bug_comments',$array = array(
                                        					'bug_id' => $bug->bug_id
                                        					)); ?></span> <small class="text-muted"><?=lang('comments')?></small> </a>
				</div>
				<div class="col-xs-6"> <a href="#">
					<span class="m-b-xs h4 block">
					<?=$this->user_profile
							->count_rows('activities',$array = array( 'module' => 'bugs', 'module_field_id' => $bug->bug_id)); ?></span> <small class="text-muted"><?=lang('activities')?></small> </a>
				</div>
			</div>
		</div>
		<div class="btn-group"> 
		<?php
		if ($bug->attached_file > 0) { ?>
			<a class="btn btn-primary" href="<?=base_url()?>bugs/download?f=<?=$bug->attached_file?>">
			<span class="text"> <i class="fa fa-cloud-download"></i> <?=lang('download_file')?></span> </a> 
		<?php } ?>
		<p><?=lang('project')?> : <a href="<?=base_url()?>projects/view/details/<?=$bug->project_id?>">#<?=$bug->project_code?></a></p>
		</div>

		<div>
			<small class="text-uc text-xs text-muted"><?=lang('bug_description')?></small>
			<p> <?=$bug->bug_description?></p>
			<div class="line">
			</div> 
		</div>
	</div> </div></section> </section> </aside> 
	<aside class="bg-white"> 
	<section class="vbox">
	<header class="header bg-light bg-gradient">
		<ul class="nav nav-tabs nav-white">
			<li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
		</ul> </header> 
		<section class="scrollable w-f">
		<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
		<div class="tab-content">
			<div class="tab-pane active" id="activity">
				<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
					<?php
					if (!empty($bug_activities)) {
					foreach ($bug_activities as $key => $activity) { ?>
					<li class="list-group-item"> 
					<a href="#" class="thumb-sm pull-left m-r-sm"> 
					<img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($activity->user,'avatar')?>" class="img-circle"> </a> 
					<a href="#" class="clear"> <small class="pull-right"><?php
								$today = time();
								$activity_day = strtotime($activity->activity_date) ;
								echo $this->user_profile->get_time_diff($today,$activity_day);
							?> ago</small> 
					<strong class="block"><?=ucfirst($this->user_profile->get_profile_details($activity->user,'fullname')?$this->user_profile->get_profile_details($activity->user,'fullname'):$this->user_profile->get_user_details($activity->user,'username'))?></strong> <small><?=$activity->activity?></small> </a> 
					</li>
					<?php } }else{ ?>
					<li class="list-group-item">
						<p><?=lang('no_activity_found')?></p>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div> </div></section> </section> </aside> 
		<aside class="col-lg-4 b-l"> 
		<?php  echo modules::run('sidebar/flash_msg');?>
		<section class="vbox"> 
		<section class="scrollable w-f">
		<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
		<div class="col-lg-12"> 
		<h4 class="font-thin padder"><?=lang('latest_comments')?></h4>
			<!-- .comment-list --> 
		<section class="comment-list block">
			<?php
					if (!empty($bug_comments)) {
					foreach ($bug_comments as $key => $comment) { ?>
		<article id="comment-id-1" class="comment-item">
		<a class="pull-left thumb-sm avatar"> 
		<img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($comment->comment_by,'avatar')?>" class="img-circle"> </a> 
		<span class="arrow left"></span> 
		<section class="comment-body panel panel-default"> 
			<header class="panel-heading bg-white">
			<a href="#"><?=ucfirst($this->user_profile->get_profile_details($comment->comment_by,'fullname')?$this->user_profile->get_profile_details($comment->comment_by,'fullname'):$this->user_profile->get_user_details($comment->comment_by,'username'))?></a>
			<?php if($comment->comment_by == $this->tank_auth->get_user_id()){ ?><label class="label bg-info m-l-xs"><?=lang('you')?></label> <?php } ?>
			<span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> <?php
								$today = time();
								$comment_day = strtotime($comment->date_commented) ;
								echo $this->user_profile->get_time_diff($today,$comment_day);
							?> ago </span> </header>
			<div class="panel-body">
				<div><small><?=$comment->comment?></small></div>		
			</div>
			</section> 
		</article> 
		<?php } }else{ ?>
				<p><?=lang('no_comment_found')?></p>
				<?php } ?>

			<!-- comment form --> 
			<article class="comment-item media" id="comment-form"> 
				<a class="pull-left thumb-sm avatar">
				<img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'avatar')?>" class="img-circle"></a> 
				<section class="media-body"> 
				<?php     
			$attributes = array('class' => 'm-b-none');
			echo form_open(base_url().'bugs/comment?bug='.$bug->bug_id, $attributes); ?>
			<input type="hidden" name="bug" value="<?=$bug->bug_id?>">
					<div class="input-group"> 
					<input type="text" name="comment" class="form-control" required placeholder="<?=lang('type_comment_here')?>">
					<span class="input-group-btn">
					<button class="btn btn-primary" type="submit"><?=lang('post')?></button>
					</span> 
					</div> 
				</form> 
				</section>
			</article>
		</section> 
		</div>
		</div>
			<!-- / .comment-list --> 
		</section> 
		</section> 
		</aside> 
		<?php }} ?>
		</section> 
		</section> 
		</section> 
<a href="profile.html#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> 

</section>