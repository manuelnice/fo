<section id="content"> <section class="hbox stretch">
	<!-- .aside --> <aside class="aside aside-md bg-white"> <section class="vbox">
	<header class="dk header"> 
	<button class="btn btn-icon btn-default btn-sm pull-right"><i class="fa fa-plus"></i></button> 
	<button class="btn btn-icon btn-default btn-sm pull-right visible-xs m-r-xs" data-toggle="class:show" data-target="#mail-nav"><i class="fa fa-reorder"></i></button>
	<p class="h4">Mailbox</p> </header> <section> <section> <section id="mail-nav" class="hidden-xs">
	<ul class="nav nav-pills nav-stacked no-radius">
		<li class="<?php if($page == 'inbox'){echo  "active";}?>"> <a href="<?=base_url()?>messaging/view/inbox"><span class="badge pull-right"><?=$this->user_profile->count_rows('messages',
										$array = array('user_to' => $this->tank_auth->get_user_id(),
											'status' => 'Unread',
										 'deleted' =>'No'))?></span> <i class="fa fa-fw fa-inbox"></i> Inbox </a> </li>
		<li class="<?php if($page == 'sent'){echo  "active"; }?>"> <a href="<?=base_url()?>messaging/view/sent"> <i class="fa fa-fw fa-envelope-o"></i> Sent mail </a> </li>
		<li class="<?php if($page == 'important'){echo  "active"; }?>"> <a href="<?=base_url()?>messaging/view/important"><span class="badge badge-hollow pull-right"><?=$this->user_profile->count_rows('messages',
										$array = array('user_to' => $this->tank_auth->get_user_id(),
											'label' => 'Important',
										 'deleted' =>'No'))?>
										 </span> <i class="fa fa-fw fa-bookmark-o"></i> Important </a> </li>
		<li class="<?php if($page == 'draft'){echo  "active"; }?>"> <a href="<?=base_url()?>messaging/view/draft"> <i class="fa fa-fw fa-pencil"></i> Draft </a> </li>
		<li class="<?php if($page == 'spam'){echo  "active"; }?>"> <a href="<?=base_url()?>messaging/view/spam">
		<span class="badge badge-hollow pull-right"><?=$this->user_profile->count_rows('messages',
										$array = array('user_to' => $this->tank_auth->get_user_id(),
											'spam' => 'Yes',
										 'deleted' =>'No'))?>
		</span> <i class="fa fa-fw fa-star-o"></i> Spam </a> </li>
		<li class="<?php if($page == 'trash'){echo  "active"; }?>"> <a href="<?=base_url()?>messaging/view/trash">
		<span class="badge badge-hollow pull-right"><?=$this->user_profile->count_rows('messages',
										$array = array('user_to' => $this->tank_auth->get_user_id(),
										 'deleted' =>'Yes'))?>
		</span> <i class="fa fa-fw fa-trash-o"></i> Trash </a> </li>
	</ul>
	<ul class="nav nav-pills nav-stacked no-radius m-t-sm">
		<li class="padder dk text-sm l-h-2x">
		<p>Labels</p> </li>
		<li> <a href="#"> <i class="fa fa-circle text-danger pull-right m-t-xs"></i> Important </a> </li>
		<li> <a href="#"> <i class="fa fa-circle pull-right m-t-xs"></i> Notice </a> </li>
		<li> <a href="#"> <i class="fa fa-circle text-success pull-right m-t-xs"></i> Classwork </a> </li>
	</ul> </section> </section> </section> </section> </aside>
	<!-- /.aside -->
	<!-- .aside -->
	 <aside class="bg-light lter b-l" >
	  <section class="vbox">
	<header class="bg-light dk header clearfix">
		<div class="btn-group pull-right">
			<button type="button" class="btn btn-sm btn-default"><i class="fa fa-chevron-left"></i></button>
			<button type="button" class="btn btn-sm btn-default"><i class="fa fa-chevron-right"></i></button>
		</div>
		<div class="btn-toolbar">
			<div class="btn-group"> 
			<a href="<?=base_url()?>messaging/view/inbox" class="btn btn-dark btn-sm"><span class="dropdown-label">Back to Inbox </span>
				 </a>				
			</div>
			<div class="btn-group">
				<a href="<?=current_url()?>" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="bottom" data-title="Refresh"><i class="fa fa-refresh"></i></a>
			</div>
		</div>
	</header> 
	<section class="scrollable hover">
<!-- .aside --> 
<?php
										if (!empty($message)) {
										foreach ($message as $key => $msg) { ?>
	<aside class="bg-white b-l"> 
	<section class="vbox">
	<div class="wrapper b-b b-light"> 
	<?php  echo modules::run('sidebar/flash_msg');?>
	<a href="#" data-toggle="class" class="pull-left m-r-sm"><i class="fa fa-star-o fa-1x text"></i>
	<i class="fa fa-star text-warning fa-1x text-active"></i></a> 	
	<a href=""  class="pull-right text"> <i class="fa fa-trash-o"></i> </a> <h4 class="m-n"> <?=$msg->subject?></h4>
	</div>
	<div class="text-sm padder m-t">
		<div class="block clearfix m-b"> <a href="#" class="thumb-xs inline">
		<img src="<?=IMG_URL?><?=$this->user_profile->get_profile_details($msg->user_from,'avatar')?>" class="img-circle"></a>
			<span class="inline m-t-xs"><?=$msg->username?> to me </span>
			<div class="pull-right inline"><?=strftime("%B %d, %Y", strtotime($msg->date_received)) ?> (<em><?php
								$today = time();
								$posted_day = strtotime($msg->date_received) ;
								echo $this->user_profile->get_time_diff($today,$posted_day);
							?> ago</em>)
				<div class="btn-group"> <button class="btn btn-default btn-xs" data-toggle="tooltip" data-title="Reply"><i class="fa fa-reply"></i></button> <button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
					<span class="caret"> </span></button>
					<ul class="dropdown-menu pull-right">
						<li>
					<a href="<?=base_url()?>messaging/mail/reply_msg/<?=$msg->user_from?>/<?=$msg->msg_id?>" data-toggle="ajaxModal"><i class="fa fa-reply"></i> Reply</a></li>
						<li><a href="<?=base_url()?>messaging/mail/forward_msg/<?=$msg->user_from?>/<?=$msg->msg_id?>"  data-toggle="ajaxModal"><i class="fa fa-signout"></i> Forward</a></li>
						<li><a href="<?=base_url()?>messaging/mail/add_contact/<?=$msg->user_from?>?r_url=<?=uri_string()?>">Add <?=ucfirst($msg->username)?> to contact list</a></li>
						<li class="divider"></li>
						<li><a href="<?=base_url()?>messaging/mail/trash_msg/<?=$msg->msg_id?>">Delete this message</a></li>
						<li><a href="<?=base_url()?>messaging/mail/spam_msg/<?=$msg->msg_id?>">Report spam</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="line pull-in">
		</div>
		<p><?=$msg->message?></p>
	</div>
	<div class="padder">
		<div class="panel text-sm bg-light">
			<div class="panel-body"> Click here to <a href="#">Reply</a> or <a href="#">Forward</a>
			</div>
		</div>
	</div>  </section> </aside>
	<!-- /.aside -->
	 <?php } } else{ ?><p>No Message to Display</p><?php } ?>

</section> <footer class="footer b-t bg-white-only">
	<form class="m-t-sm">
		<div class="input-group">
			<input type="text" class="input-sm form-control input-s-sm" placeholder="Search">
			<div class="input-group-btn"> <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
			</div>
		</div>
	</form> </footer> </section> </aside>
	<!-- /.aside -->
	 <aside class="aside-sm b-l"> <section class="vbox">
	<header class="bg-light dk header">
	<p>Contacts (<?=$this->user_profile->count_rows('contacts',
										$array = array('user_id' => $this->tank_auth->get_user_id()))?>)</p> 
										</header> <section class="scrollable bg-white">
	<div class="list-group list-group-alt no-radius no-borders"> 
	<?php
										if (!empty($contacts)) {
										foreach ($contacts as $key => $contact) { ?>
										<?php
							if ($contact->label == 'Important') { ?>
							<a class="list-group-item" href="<?=base_url()?>messaging/send/<?=$contact->id?>"> <i class="fa fa-circle text-danger text-xs"></i><span> @<?=$contact->username?> </span> </a>
							<?php }elseif ($contact->label == 'Notice') { ?>
							<a class="list-group-item" href="<?=base_url()?>messaging/send/<?=$contact->id?>"> <i class="fa fa-circle text-dark text-xs"></i><span> @<?=$contact->username?> </span> </a>
							<?php }else{ ?>
							<a class="list-group-item" href="<?=base_url()?>messaging/send/<?=$contact->id?>"> <i class="fa fa-circle text-success text-xs"></i><span> @<?=$contact->username?> </span> </a>
							<?php }
							?>	
	<?php } } else{ ?>No Contacts Available<?php } ?>
	</div> </section> <footer class="footer text-center b-t"> <button class="btn btn-success btn-sm"><i class="fa fa-plus"></i> New contact</button> </footer> </section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>