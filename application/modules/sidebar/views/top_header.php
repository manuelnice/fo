<header class="bg-dark dk header navbar navbar-fixed-top-xs">
	<div class="navbar-header aside-md"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="<?=IMG_URL?>logo.png" class="m-r-sm"><?=$this->config->item('company_name')?></a> <small>v <?=$this->config->item('version')?></small> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a>
	</div>
	<ul class="nav navbar-nav hidden-xs">
		<li class="dropdown"> <a href="index.html#" class="dropdown-toggle dker" data-toggle="dropdown"> <i class="fa fa-building-o"></i>
			<span class="font-bold">Activity
			</span> </a> <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
				<div class="wrapper lter m-t-n-xs"> <a href="#" class="thumb pull-left m-r"> <img src="<?=IMG_URL?><?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'avatar')?>" class="img-circle"> </a>
					<div class="clear"> 
					<a href="<?=base_url()?>profile">
						<span class="text-white font-bold">@<?php
						echo $this->user_profile->get_fullname($this->tank_auth->get_user_id())  ? $this->user_profile->get_fullname($this->tank_auth->get_user_id()) : $this->tank_auth->get_username()?>
						</a>
						</span> <small class="block">User Role: <?=$this->tank_auth->user_role($this->tank_auth->get_role_id())?></small> <a href="<?=base_url()?>profile" class="btn btn-xs btn-success m-t-xs">My Account</a>
					</div>
				</div>
				<div class="row m-l-none m-r-none m-b-n-xs text-center">
					<div class="col-xs-4">
						<div class="padder-v">
							<span class="m-b-xs h4 block text-white"> 80%
							</span> <small class="text-muted">Attendance</small>
						</div>
					</div>
					<div class="col-xs-4 dk">
						<div class="padder-v">
							<span class="m-b-xs h4 block text-white">55
							</span> <small class="text-muted">Classmates</small>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="padder-v">
							<span class="m-b-xs h4 block text-white">35
							</span> <small class="text-muted">Posts</small>
						</div>
					</div>
				</div>
			</section> </li>
			<li>
				<div class="m-t m-l"> <a href="<?=base_url()?>welcome/about" class="dropdown-toggle btn btn-xs btn-primary" title="System Developer">
					<i class="fa fa-code"></i></a>
				</div> </li>
			</ul>
			<ul class="nav navbar-nav navbar-right hidden-xs nav-user">
				<li class="hidden-xs"> <a href="<?=base_url()?>" class="dropdown-toggle dk" data-toggle="dropdown"> <i class="fa fa-bell"></i>
					<span class="badge badge-sm up bg-danger m-l-n-sm">4
					</span> </a> <section class="dropdown-menu aside-xl">
						<section class="panel bg-white">
							<header class="panel-heading b-light bg-light"> <strong>You have
								<span class="">6
								</span> notifications</strong>
							</header>
							<div class="list-group list-group-alt animated fadeInRight">
								<a href="#" class="media list-group-item">
								<span class="pull-left thumb-sm"> <img src="<?=IMG_URL?>avatar.jpg" alt="John said" class="img-circle">
								</span>
								<span class="media-body block m-b-none"> @steve sent you a message
								<br> <small class="text-muted">10 minutes ago</small>
								</span>
								</a>
								<a href="<?=base_url()?>about" class="media list-group-item">
								<span class="media-body block m-b-none"> Uniportal 1.0 released
								<br> <small class="text-muted">1 hour ago</small>
								</span>
								</a>
							</div>
							<footer class="panel-footer text-sm"> <a href="<?=base_url()?>profile/notifications" class="pull-right"><i class="fa fa-cog"></i></a>
							<a href="<?=base_url()?>profile/notifications" data-toggle="class:show animated fadeInRight">See all the notifications</a> </footer>
						</section> </section> </li>
						<li class="dropdown hidden-xs"> <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i></a> <section class="dropdown-menu aside-xl animated fadeInUp"> <section class="panel bg-white">
							<form role="search">
								<div class="form-group wrapper m-b-none">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search">
										<span class="input-group-btn"> <button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</div>
							</form>
						</section>
					</section> </li>
					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="thumb-sm avatar pull-left"> 
						<img src="<?=IMG_URL?><?=$this->user_profile->get_avatar($this->tank_auth->get_user_id()) ?>">
						</span> <?php 
	echo $this->user_profile->get_fullname($this->tank_auth->get_user_id())  ? $this->user_profile->get_fullname($this->tank_auth->get_user_id()) : $this->tank_auth->get_username()?> <b class="caret"></b> </a>
						<ul class="dropdown-menu animated fadeInRight">
							<span class="arrow top">
							</span>
							<li> <a href="<?=base_url()?>profile/settings">Settings</a> </li>
							<li> <a href="<?=base_url()?>profile">Profile</a> </li>
							<li> <a href="<?=base_url()?>profile/notifications">
								<span class="badge bg-danger pull-right">3
							</span> Notifications </a> </li>
							<li> <a href="<?=base_url()?>profile/help">Help</a> </li>
							<li class="divider"></li>
							<li> <a href="<?=base_url()?>auth/logout" >Logout</a> </li>
						</ul> </li>
					</ul>
				</header>