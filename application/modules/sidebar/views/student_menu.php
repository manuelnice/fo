<!-- .aside -->
<aside class="bg-light lter b-r aside-md hidden-print" id="nav">
	<section class="vbox">
		<header class="header bg-primary lter text-center clearfix">
			<div class="btn-group">
				<button type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i class="fa fa-plus"></i></button>
				<div class="btn-group hidden-nav-xs">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"> Quick Links
					<span class="caret">
					</span> </button>
					<ul class="dropdown-menu text-left">
						<li><a href="<?=base_url()?>tasks/notes/share_notes" data-toggle="ajaxModal" > Share Notes</a></li>
						<li><a href="<?=base_url()?>tasks/assignments">Submit Assignment</a></li>
						<li><a href="<?=base_url()?>messaging/view/inbox">Mailbox</a></li>
					</ul>
				</div>
			</div> </header>
			<section class="w-f scrollable">
				<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
					<!-- nav -->
					<nav class="nav-primary hidden-xs">
						<ul class="nav">
							<li class="<?php if($page == 'home'){echo  "active"; }?>">
								<a href="<?=base_url()?>"> <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i>
							<span>Home</span> </a> </li>
							<li class="<?php if($page == 'profile' OR $page == 'units' OR $page == 'classmates'){echo  "active"; }?>"> <a href="<?=base_url()?>" > <i class="fa fa-user icon"> <b class="bg-dark"></b> </i>
								<span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i>
								</span>
								<span>Account </span> </a>
								<ul class="nav lt">
									<li class="<?php if($page == 'profile'){echo  "active"; }?>"> <a href="<?=base_url()?>profile" > <i class="fa fa-angle-right"></i>
									<span>Profile </span> </a> </li>
									<li class="<?php if($page == 'units'){echo  "active"; }?>"> <a href="<?=base_url()?>profile/units" > <i class="fa fa-angle-right"></i>
									<span>My Units </span> </a> </li>
									<li class="<?php if($page == 'classmates'){echo  "active"; }?>"> <a href="<?=base_url()?>profile/classmates" > <i class="fa fa-angle-right"></i>
									<span>Classmates </span> </a> </li>
								</ul> </li>
								<li class="<?php if($page == 'fees' OR $page == 'payments'){echo  "active"; }?>"> <a href="<?=base_url()?>fees" > <i class="fa fa-money icon"> <b class="bg-success"></b> </i>
									<span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i>
									</span>
									<span>Fees </span> </a>
									<ul class="nav lt">
										<li class="<?php if($page == 'fees'){echo  "active"; }?>"> <a href="<?=base_url()?>fees" > <i class="fa fa-angle-right"></i>
										<span>Proforma Invoice </span> </a> </li>
										<?php
									$this->db->where('student',$this->tank_auth->get_user_id());
									$query = $this->db->get('fees');
									$fee_txn = $query->num_rows();
										?>
										<li class="<?php if($page == 'payments'){echo  "active"; }?>"> <a href="<?=base_url()?>fees/paid" > <b class="badge bg-info pull-right"><?=$fee_txn?></b> <i class="fa fa-angle-right"></i>
										<span>Fee Payments </span> </a> </li>
									</ul>
								</li>
								<li class="<?php if($page == 'study' OR $page == 'transcripts'){echo  "active"; }?>"> <a href="<?=base_url()?>" >
									<i class="fa fa-star icon"> <b class="bg-dark"></b> </i>
									<span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i>
									</span>
									<span>Exams </span> </a>
									<ul class="nav lt">
										<li class="<?php if($page == 'transcripts'){echo  "active"; }?>"> <a href="<?=base_url()?>exams/transcripts" > <i class="fa fa-angle-right"></i>
										<span>Transcripts </span> </a> </li>
										<li class="<?php if($page == 'study'){echo  "active"; }?>"> <a href="<?=base_url()?>exams?y=<?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'year_of_study')?>" > <i class="fa fa-angle-right"></i>
										<span>Study Stats </span> </a> </li>
									</ul> </li>
									<li class="<?php if($page == 'messaging'){echo  "active"; }?>"> <a href="<?=base_url()?>messaging/view/inbox" > <b class="badge bg-danger pull-right">
									<?=$this->user_profile->count_rows('messages',
										$array = array('user_to' => $this->tank_auth->get_user_id(),
											'status' => 'Unread',
										 'deleted' =>'No'))?>
									</b> <i class="fa fa-envelope-o icon"> <b class="bg-danger"></b> </i>
									<span>Mailbox </span> </a> </li>
									<li class="<?php if($page == 'notes' OR $page == 'assignments' OR $page == 'notice'){echo  "active"; }?>"> <a href="<?=base_url()?>tasks" > <i class="fa fa-tasks icon"> <b class="bg-dark"></b> </i>
										<span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i>
										</span>
										<span>Tasks </span> </a>
										<ul class="nav lt">
											<li class="<?php if($page == 'notes'){echo "active"; } ?>"> <a href="<?=base_url()?>tasks/notes" > <i class="fa fa-angle-right"></i>
											<span>Class Notes </span> </a> </li>
											<li class="<?php if($page == 'assignments'){echo "active"; } ?>"> <a href="<?=base_url()?>tasks/assignments" > <i class="fa fa-angle-right"></i>
											<span>Assignments </span> </a> </li>
											<li class="<?php if($page == 'notice'){echo "active"; } ?>"> <a href="<?=base_url()?>tasks/notice" > <i class="fa fa-angle-right"></i>
											<span>Notice Board </span> </a> </li>
										</ul> </li>
										<li class="<?php if($page == 'suggestion' OR $page == 'rating'){echo  "active"; }?>"> <a href="<?=base_url()?>" > <i class="fa fa-plus-square icon"> <b class="bg-success"></b> </i>
											<span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i>
											</span>
											<span>Extras </span> </a>
											<ul class="nav lt">
												<li class="<?php if($page == 'rating'){echo "active"; } ?>"> <a href="<?=base_url()?>extras/rating" > <i class="fa fa-angle-right"></i>
												<span>Rate Me </span> </a> </li>
												<li class="<?php if($page == 'suggestion'){echo "active"; } ?>"> <a href="<?=base_url()?>extras/suggestion" > <i class="fa fa-angle-right"></i>
												<span>Suggestion Box </span> </a> </li>
												
											</ul> </li>
											<li class="<?php if($page == 'about'){echo  "active"; }?>"> <a href="<?=base_url()?>welcome/about" > <i class="fa fa-info-circle icon"> <b class="bg-info"></b> </i>
											<span>About </span> </a> </li>
										</ul> </nav>
										<!-- / nav -->
									</div>
								</section>
								<footer class="footer lt hidden-xs b-t b-light">
									<div id="chat" class="dropup"> <section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white">
									<header class="panel-heading b-b b-light">Active chats</header>
									<div class="panel-body animated fadeInRight">
										<p class="text-sm">No active chats.</p>
										<p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
									</div> </section> </section>
								</div>
								<div id="invite" class="dropup"> <section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white">
								<header class="panel-heading b-b b-light"> John <i class="fa fa-circle text-success"></i> </header>
								<div class="panel-body animated fadeInRight">
									<p class="text-sm">No contacts in your lists.</p>
									<p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
								</div>
							</section>
						</section>
					</div>
					<a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>
					<div class="btn-group hidden-nav-xs"> <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button> <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
					</div>
				</footer>
			</section>
		</aside>
		<!-- /.aside -->