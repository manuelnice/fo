<!-- Start -->


<section id="content">
	<section class="hbox stretch">
	
		<aside class="aside-md bg-white b-r" id="subNav">

			<header class="dk header b-b">			
			<div class="btn-group pull-right">
				<button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Filter
				<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">				
				<li><a href="<?=base_url()?>bugs/view_by_status/unconfirmed">Unconfirmed</a></li>
				<li><a href="<?=base_url()?>bugs/view_by_status/confirmed">Confirmed</a></li>
				<li><a href="<?=base_url()?>bugs/view_by_status/progress">In Progress</a></li>
				<li><a href="<?=base_url()?>bugs/view_by_status/resolved">Resolved</a></li>
				<li class="divider"></li>
				<li><a href="<?=base_url()?>bugs/view_by_status/verified">Verified</a></li>
				</ul>
			</div>




		<p class="h4"><?=lang('all_bugs')?></p>
		</header>


			<section class="vbox">
			 <section class="scrollable w-f">
			   <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
			<ul class="nav">
			<?php
								if (!empty($bugs)) {
				foreach ($bugs as $key => $bug) { 
					if ($bug->bug_status == 'Verified') { $label = 'bg-success'; }elseif ($bug->bug_status == 'Resolved') {
						$label = 'bg-primary'; }elseif ($bug->bug_status == 'In Progress') { $label = 'bg-dark'; }
						elseif ($bug->bug_status == 'Confirmed') { $label = 'bg-info'; }else{ $label = 'bg-danger';
					}
					if ($bug->priority == 'Critical') { $priority = 'danger'; }elseif ($bug->priority == 'High') {
						$priority = 'inverse'; }else{	$priority = 'dark';	}	?>

				<li class="b-b b-light <?php if($bug->bug_id == $this->uri->segment(4)){ echo "bg-light dk"; } ?>">
				<a href="<?=base_url()?>bugs/view/details/<?=$bug->bug_id?>">
				<?=ucfirst($this->user_profile->get_profile_details($bug->reporter,'fullname')? $this->user_profile->get_profile_details($bug->reporter,'fullname'):$this->user_profile->get_user_details($bug->reporter,'username'))?>
				<div class="pull-right">
				BUG#<?=$bug->issue_ref?>
				</div> <br>
				<small class="block small text-muted">PRO#<?=$bug->project_code?> | <i class="fa fa-circle text-<?=$priority?> pull-right m-t-xs"></i> <span class="label <?=$label?>"><?=$bug->bug_status?></span></small>

				</a> </li>
				<?php } } ?>
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
						<a href="<?=base_url()?>bugs/view/add" data-toggle="ajaxModal" title="<?=lang('new_bug')?>" class="btn btn-sm btn-dark"><i class="fa fa-plus"></i> <?=lang('new_bug')?></a>
						</div>

						
						</div>
						<div class="col-sm-4 m-b-xs">
						<?php  echo form_open(base_url().'invoices/manage/search'); ?>
							<div class="input-group">
								<input type="text" class="input-sm form-control" name="keyword" placeholder="<?=lang('search')?>">
								<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="submit">Go!</button>
								</span>
							</div>
							</form>
						</div>
					</div> </header>
					<section class="scrollable wrapper w-f">
					<section class="hbox stretch"> 
					
					<?php  echo modules::run('sidebar/flash_msg');?>
					<!-- Start bug details -->
					<?php
								if (!empty($bug_details)) {
				foreach ($bug_details as $key => $bug) { ?>

				<aside class="bg-white"> 
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
		</div> </div></section>  </aside> 


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













				<?php } } ?>
				</section>
					 <!-- End bug details -->






					</section>  




		</section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>



<!-- end -->




