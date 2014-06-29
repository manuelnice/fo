<section id="content"> <section class="hbox stretch">
	<!-- .aside --> <aside> <section class="vbox">
	<header class="header bg-white b-b b-light"> <a href="#aside" data-toggle="class:show" class="btn btn-sm btn-default pull-right">Create</a>
	<p>Notice Board Activity</p> </header> <section class="scrollable wrapper">
	<div class="timeline"> <article class="timeline-item active">
		<div class="timeline-caption">
			<div class="panel bg-danger lter no-borders">
				<div class="panel-body">
					<span class="timeline-icon"><i class="fa fa-bell-o time-icon bg-primary"></i>
					</span>
					<span class="timeline-date">Friday - <?=strftime("%B %d, %Y", time()) ?>  </span> 
					<h5><span>Get the latest News from the NoticeBoard </h5>
					<div class="m-t-sm timeline-action">
						<span class="h3 pull-left m-r-sm">Kabarak Notice Board</span>
					</div>
				</div>
			</div>
		</div> </article> 	
		<?php
					if (!empty($news)) {
					foreach ($news as $key => $n) { ?>
					<?php
					if ($n->news_id % 2 == 0) { ?>
		<article class="timeline-item">
		<div class="timeline-caption">
			<div class="panel panel-default">
				<div class="panel-body">
					<span class="arrow left">
					</span>
					<span class="timeline-icon"><i class="fa fa-<?=$n->icon?> time-icon bg-dark"></i>
					</span>
					<span class="timeline-date"><?=strftime("%B %d, %Y", strtotime($n->date_posted)) ?></span> <h5>
					<span><?=$n->title?></span> <?=ucfirst($n->username)?> </h5>
					<p><?=$n->desc?></p>
				</div>
			</div>
		</div> </article>
					<?php }else{ ?>
		  <article class="timeline-item alt">
		<div class="timeline-caption">
			<div class="panel panel-default">
				<div class="panel-body">
					<span class="arrow right">
					</span>
					<span class="timeline-icon"><i class="fa fa-<?=$n->icon?> time-icon bg-info"></i></span>
					<span class="timeline-date"><?=strftime("%B %d, %Y", strtotime($n->date_posted)) ?></span> <h5>
					<span><?=$n->title?></span> <?=ucfirst($n->username)?> </h5>
					<p><?=$n->desc?></p>
				</div>
			</div>
		</div> 
		</article> 
		<?php } ?>
		<?php } } else{ ?>No News Available <?php } ?>

		<div class="timeline-footer"><a href="#"><i class="fa fa-plus time-icon inline-block bg-dark"></i></a>
		</div>
	</div> </section> </section> </aside>
	<!-- /.aside -->
	<!-- .aside -->
	<aside class="aside-lg bg-white b-l hide" id="aside">
		<div class="wrapper"> <h4 class="m-t-none">Timeline</h4>
			<form>
				<div class="form-group">
					<label>Name
					</label>
					<input type="text" placeholder="Event name" class="input-sm form-control">
				</div>
				<div class="form-group">
					<label>Date
					</label>
					<input type="text" placeholder="Event name" class="datepicker input-sm form-control">
				</div>
				<div class="form-group">
					<label>Time
					</label>
					<input type="text" placeholder="eg. 3:00 pm" class="input-sm form-control">
				</div>
				<div class="form-group">
					<label>Type
					</label>
					<div>
						<div class="btn-group"> <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
							<span class="dropdown-label">Choose a type
							</span>
							<span class="caret">
							</span> </button>
							<ul class="dropdown-menu dropdown-select">
								<li><a href="#">
									<input type="radio" name="d-s-r">Travel</a></li>
									<li class=""><a href="#">
										<input type="radio" name="d-s-r">Phone</a></li>
										<li class=""><a href="#">
											<input type="radio" name="d-s-r">Meeting</a></li>
											<li class=""><a href="#">
												<input type="radio" name="d-s-r">Appointment</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="m-t-lg"><button class="btn btn-sm btn-default">Add an event</button>
								</div>
							</form>
						</div> </aside>
						<!-- /.aside --> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>