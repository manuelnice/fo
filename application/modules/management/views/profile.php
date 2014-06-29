<section id="content">
	<section class="vbox">
		<header class="header bg-white b-b b-light">
		<p><?=ucfirst($this->tank_auth->get_username())?>'s profile</p> </header> <section class="scrollable"> <section class="hbox stretch"> <aside class="aside-lg bg-light lter b-r"> <section class="vbox"> <section class="scrollable">
		<div class="wrapper">
			<div class="clearfix m-b"> <a href="#" class="pull-left thumb m-r"> <img src="<?=IMG_URL?><?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'avatar')?>" class="img-circle"> </a>
				<div class="clear">
					<div class="h3 m-t-xs m-b-xs">@<?=ucfirst($this->tank_auth->get_username())?>
					</div> <small class="text-muted"><i class="fa fa-map-marker"></i> <?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'city')?>, <?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'country')?></small>
				</div>
			</div>
			<div class="panel wrapper panel-success">
				<div class="row">
					<div class="col-xs-4"> <a href="#">
						<span class="m-b-xs h4 block"><?php $this->db->where('liked_by',$this->tank_auth->get_user_id());
							$query = $this->db->get('likes');
							if ($query->num_rows() > 0){
								echo $query->num_rows();
							}else{
								echo "0";
							}
						?>
						</span> <small class="text-muted">Likes</small> </a>
					</div>
					<div class="col-xs-4"> <a href="#">
						<span class="m-b-xs h4 block"><?php $this->db->where('posted_by',$this->tank_auth->get_user_id());
							$query = $this->db->get('comments');
							if ($query->num_rows() > 0){
								echo $query->num_rows();
							}else{
								echo "0";
							}
						?>
						</span> <small class="text-muted">Comments </small> </a>
					</div>
					<div class="col-xs-4"> <a href="#">
						<span class="m-b-xs h4 block"><?php $this->db->where('posted_by',$this->tank_auth->get_user_id());
							$query = $this->db->get('posts');
							if ($query->num_rows() > 0){
								echo $query->num_rows();
							}else{
								echo "0";
							}
						?>
						</span> <small class="text-muted">Posts</small> </a>
					</div>
				</div>
			</div>
			<div class="btn-group btn-group-justified m-b">
				<a class="btn btn-primary btn-rounded" href="<?=base_url()?>profile/edit">
				<span class="text"> <i class="fa fa-edit"></i> Update </span></a>
				<a class="btn btn-dark btn-rounded" href="<?=base_url()?>profile/timeline"> <i class="fa fa-coffee"></i> Timeline </a>
			</div>
			<div> <small class="text-uc text-xs text-muted">Study Details</small>
				<p> <span class="label label-info">
				Year: <?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'year_of_study')?> Sem: <?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'semester')?></span></p> <small class="text-uc text-xs text-muted">info</small>
				<p><?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'bio')?></p>
				<div class="line">
				</div> <small class="text-uc text-xs text-muted">connection</small>
				<p class="m-t-sm">
				<?php
				if ($this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'tw_link')) { ?>
				<a href="<?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'tw_link')?>" class="btn btn-rounded btn-twitter btn-icon"><i class="fa fa-twitter"></i></a>
				<?php } ?>
				<?php
				if ($this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'fb_link')) { ?>
				<a href="<?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'fb_link')?>" class="btn btn-rounded btn-facebook btn-icon"><i class="fa fa-facebook"></i></a>
				<?php } ?>
				<?php
				if ($this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'gp_link')) { ?>
				<a href="<?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'gp_link')?>" class="btn btn-rounded btn-gplus btn-icon"><i class="fa fa-google-plus"></i></a>
				<?php } ?>
				<?php
				if ($this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'in_link')) { ?>
				<a href="<?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'in_link')?>" class="btn btn-rounded btn-default btn-icon"><i class="fa fa-linkedin"></i></a>
				<?php } ?>
				</p>
			</div>
		</div>
	</section> </section> </aside>
	<aside class="bg-white">
		<section class="vbox">
			<header class="header bg-light bg-gradient">
				<ul class="nav nav-tabs nav-white">
					<li class="active"><a href="#activity" data-toggle="tab">Activity Feeds</a></li>
				</ul> </header> <section class="scrollable">
				<div class="tab-content">
					<div class="tab-pane active" id="activity">
						<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
							<?php
								if (!empty($activities)) {
							foreach ($activities as $key => $activity) { ?>
							<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> 
							<img src="<?=IMG_URL?><?=$this->user_profile->get_profile_details($activity->posted_by,'avatar')?>" class="img-circle"> 
							</a> 
							
								<small class="pull-right"><?php
								$today = time();
								$posted_day = strtotime($activity->date_posted) ;
								echo $this->user_profile->get_time_diff($today,$posted_day);
							?> ago</small> 
							<strong class="block"><a href="#" class="clear"><?=$activity->fullname ? $activity->fullname : $activity->username?></a></strong> 
							<small><?=$activity->post?></small> </li>
							<?php } } ?>
							
						</ul>
					</div>
				</div>
			</section>
		</section>
	</aside>
	<aside class="col-lg-4 b-l">
		<section class="vbox">
			<section class="scrollable">
				<div class="wrapper"> <section class="panel panel-default">
					<form>
						<textarea class="form-control no-border" rows="3" placeholder="What's in your mind?..."></textarea>
					</form> <footer class="panel-footer bg-light lter"> <button class="btn btn-info pull-right btn-sm">POST</button>
					<ul class="nav nav-pills nav-sm">
						<li><a href="#"><i class="fa fa-camera text-muted"></i></a></li>
					</ul> </footer> </section> <section class="panel panel-default"> <h4 class="font-thin padder">Latest Posts</h4>
					<ul class="list-group">
						<li class="list-group-item">
						<p>Welcome <a href="#" class="text-info">@wmandai</a> enjoy the portal. </p> <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minutes ago</small> </li>
						<li class="list-group-item">
						<p>Hi <a href="#" class="text-info">@jonathan33</a> please send me the notes. Thanks in advance :-)</p> <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago</small> </li>
						<li class="list-group-item">
						<p><a href="#" class="text-info">@stella</a> The class has been postponed but next week we have a CAT. </p> <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small> </li>
					</ul> </section> <section class="panel clearfix bg-info lter">
					<div class="panel-body"> <a href="#" class="thumb pull-left m-r"> <img src="<?=IMG_URL?>avatar.jpg" class="img-circle"> </a>
						<div class="clear"> <a href="#" class="text-info">@wmandai <i class="fa fa-user"></i></a> <small class="block text-muted">2,415 posts / 225 likes</small> <a href="<?=base_url()?>profile" class="btn btn-xs btn-success m-t-xs">Account</a>
						</div>
					</div> </section>
				</div> </section> </section> </aside> </section> </section>
			</section>
			<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
		</section>