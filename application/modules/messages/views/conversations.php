<section id="content">
	<section class="hbox stretch">
		
		<aside class="aside-md bg-white b-r" id="subNav">
			<div class="wrapper b-b header"><?=lang('all_messages')?>
			</div>
			<section class="vbox">
				<section class="scrollable w-f">
					<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
						<ul class="nav">
							<?php
							if (!empty($users)) {
							foreach ($users as $key => $user) { ?>
							<li class="b-b b-light">
								<a href="<?=base_url()?>messages/conversation/view/<?=$user->id*1200?>">
							<i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i><?=ucfirst($this->user_profile->get_profile_details($user->user_from,'fullname')?$this->user_profile->get_profile_details($user->user_from,'fullname'): $user->username)?></a></li>
							<?php }} ?>
						</ul>
					</div></section>
				</section>
			</aside>
			<!-- .aside -->
			<aside class="bg-light lter b-l" id="email-list">
				<section class="vbox">
					<header class="header bg-white b-b clearfix">
						<div class="row m-t-sm">
							<div class="col-sm-8 m-b-xs">
								<a href="#subNav" data-toggle="class:hide" class="btn btn-sm btn-default active">
								<i class="fa fa-caret-right text fa-lg"></i><i class="fa fa-caret-left text-active fa-lg"></i></a>
								<div class="btn-group">
									<a class="btn btn-sm btn-default" href="<?=current_url()?>" title="Refresh"><i class="fa fa-refresh"></i></a>
								</div>
							</div>
							<div class="col-sm-4 m-b-xs">
								<div class="input-group">
									<input type="text" class="input-sm form-control" placeholder="<?=lang('search')?>">
									<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div> </header>
						<section class="scrollable hover w-f">
							<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">


					<div class="panel-body">
						<!-- Comment Start -->
						<section class="comment-list block">
							<?php
													if (!empty($conversations)) {
							foreach ($conversations as $key => $msg) { ?>
							<article id="comment-id-1" class="comment-item"> <a class="pull-left thumb-sm avatar">
							<img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($msg->user_from,'avatar')?>" class="img-circle"> </a>
							<span class="arrow left">
							</span> <section class="comment-body panel panel-default">
								<header class="panel-heading bg-white"> <a href="widgets.html#"><?=ucfirst($this->user_profile->get_profile_details($msg->user_from,'fullname')?$this->user_profile->get_profile_details($msg->user_from,'fullname'):$msg->username)?></a>
								<label class="label bg-info m-l-xs"><?=$msg->subject?></label>
							<span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> Just now </span> </header>
							<div class="panel-body"><div><?=$msg->message?></div>
							<div class="comment-action m-t-sm">
								<a href="widgets.html#" data-toggle="class" class="btn btn-default btn-xs active"> <i class="fa fa-star-o text-muted text"></i><i class="fa fa-star text-danger text-active"></i> Delete </a>
							</div>
						</div> </section> </article>
						<?php } } ?>
						<!-- .comment-end -->
						<!-- comment form -->
						<article class="comment-item media" id="comment-form"> <a class="pull-left thumb-sm avatar"><img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'avatar')?>" class="img-circle"></a> <section class="media-body">
						<form action="widgets.html" class="m-b-none">
							<div class="input-group">
								<input class="form-control" placeholder="Input your comment here" type="text">
								<span class="input-group-btn"> <button class="btn btn-primary" type="button">POST</button>
								</span>
							</div>
						</form> </section> </article>
					</section>
					</div>



							</div></section>
			<footer class="footer b-t bg-white-only">
				<form class="m-t-sm">
					<div class="input-group">
						<input class="input-sm form-control input-s-sm" placeholder="<?=lang('search')?>" type="text">
							<div class="input-group-btn"> <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
								</div>
					</div>
				</form> 
			</footer> </section></aside>
		</section> 
		</aside> 
		</section> 
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> 
</section>