<section id="content">
	<section class="hbox stretch">
	
		<aside class="aside-md bg-white b-r" id="subNav">

			<div class="wrapper b-b header"><?=lang('registered_clients')?>
			</div>
			<section class="vbox">
			 <section class="scrollable w-f">
			   <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
			<ul class="nav">
			<?php
			if (!empty($clients)) {
			foreach ($clients as $key => $user) { ?>
				<li class="b-b b-light">
				<a href="<?=base_url()?>contacts/view/details/<?=$user->id*1200?>">
				<?=ucfirst($this->user_profile->get_profile_details($user->id,'fullname')? $this->user_profile->get_profile_details($user->id,'fullname'):$user->username)?>
				
				<small class="block text-muted"><?=strftime("%B %d, %Y", strtotime($user->created));?> </small>

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
						<a class="btn btn-sm btn-default" href="<?=current_url()?>" title="Refresh"><i class="fa fa-refresh"></i></a>
						</div>
						<a class="btn btn-sm btn-danger" href="<?=base_url()?>users/registered/all" title="<?=lang('system_users')?>">
						<i class="fa fa-group"></i> <?=lang('system_users')?></a>
						<a class="btn btn-sm btn-dark" href="<?=base_url()?>contacts/add" data-toggle="ajaxModal" title="<?=lang('new_client')?>">
						<i class="fa fa-plus"></i> <?=lang('new_user')?></a>
						</div>
						<div class="col-sm-4 m-b-xs">
						<?php  echo form_open(base_url().'users/registered/search'); ?>
							<div class="input-group">
								<input type="text" class="input-sm form-control" name="keyword" placeholder="<?=lang('search')?>">
								<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="submit">Go!</button>
								</span>
							</div>
							</form>
						</div>
					</div> </header>
					<section class="scrollable wrapper w-f">
					<?php  echo modules::run('sidebar/flash_msg');?>
						<script src="<?=JS_URL?>jquery-2.1.1.min.js"></script>
				<script src="<?=JS_URL?>chart/highcharts.js"></script>
				<div id="g_render"  class="left">
					<?php if (isset($charts)) echo $charts; ?>
					
				</div>
				<hr>
				<a href="<?=base_url()?>contacts/add" data-toggle="ajaxModal" class="btn btn-primary btn-lg btn-block">
				<i class="fa fa-user pull-right"></i><?=lang('new_client')?></a>
					</section>  




		</section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>