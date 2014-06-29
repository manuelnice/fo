<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<div class="m-b-md"> <h3 class="m-b-none">Dashboard</h3>
		<small>Welcome back, <?php
		echo $this->user_profile->get_fullname($this->tank_auth->get_user_id())  ? $this->user_profile->get_fullname($this->tank_auth->get_user_id()) : $this->tank_auth->get_username()?> </small>
	</div>
	<section class="panel panel-default">
		<div class="row m-l-none m-r-none bg-light lter">
			<div class="col-sm-6 col-md-3 padder-v b-r b-light">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-users fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong>300</strong>
				</span> <small class="text-muted text-uc">Active Students </small> </a>
			</div>
			<div class="col-sm-6 col-md-3 padder-v b-r b-light">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-dark"></i> <i class="fa fa-envelope fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong>45 </strong>
				</span> <small class="text-muted text-uc">Complaints </small> </a>
			</div>
			<div class="col-sm-6 col-md-3 padder-v b-r b-light">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-success"></i> <i class="fa fa-signal fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong>55</span></strong>
				<small class="text-muted text-uc">Lecturers </small> </a>
			</div>
			<div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x icon-muted"></i> <i class="fa fa-clock-o fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong><?php
				$today = time();
				$sem_end_day = strtotime($this->user_profile->semester_ends($this->config->item('current_sem'))) ;
				echo $this->user_profile->get_time_diff($today,$sem_end_day);
				?></strong>
				</span> <small class="text-muted text-uc">Left to end Sem.</small> </a>
			</div>
		</div> </section>
		<div class="row">
			<div class="col-md-8">
				<section class="panel panel-default">
					<header class="panel-heading">
						<span class="label bg-danger pull-right">4 left
					</span> Recent Payments </header>
					<table class="table table-striped m-b-none text-sm">
						<thead>
							<tr>
								<th>Percentage</th>
								<th>Program</th>
								<th width="70"></th>
							</tr> </thead> <tbody>
							<tr>
								<td>
									<div class="progress progress-sm progress-striped active m-t-xs m-b-none">
										<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="80%" style="width: 80%">
										</div>
									</div>
								</td>
								<td>Bsc. in Information Technology </td>
								<td class="text-left">
									<div class="btn-group"> 
								<button class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
									Action  <span class="caret"></span></button> 
									<ul class="dropdown-menu"> 
									<li><a href="#">View  Report</a></li> 
									<li><a href="#">Download</a></li> 
									</ul> 
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="progress progress-xs m-t-xs m-b-none">
										<div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%">
										</div>
									</div>
								</td>
								<td>Bsc. in Computer Science</td>
								<td class="text-left">
									<div class="btn-group"> 
								<button class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
									Action  <span class="caret"></span></button> 
									<ul class="dropdown-menu"> 
									<li><a href="#">View  Report</a></li> 
									<li><a href="#">Download</a></li> 
									</ul> 
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="progress progress-xs m-t-xs m-b-none">
										<div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="20%" style="width: 20%">
										</div>
									</div>
								</td>
								<td>Bachelor of Education</td>
								<td class="text-left">
									<div class="btn-group"> 
								<button class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
									Action  <span class="caret"></span></button> 
									<ul class="dropdown-menu"> 
									<li><a href="#">View  Report</a></li> 
									<li><a href="#">Download</a></li> 
									</ul> 
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="progress progress-xs m-t-xs m-b-none">
										<div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-original-title="15%" style="width: 15%">
										</div>
									</div>
								</td>
								<td>Environmental Science</td>
								<td class="text-left">
									<div class="btn-group"> 
								<button class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
									Action  <span class="caret"></span></button> 
									<ul class="dropdown-menu"> 
									<li><a href="#">View  Report</a></li> 
									<li><a href="#">Download</a></li> 
									</ul> 
									</div>
								</td>
							</tr> </tbody>
						</table> </section>
					</div>
					<div class="col-lg-4">
						<section class="panel panel-default">
						<header class="panel-heading">Semesters</header>
						<table class="table table-striped m-b-none text-sm">
							<thead>
								<tr>
									<th>Stats </th>
									<th>Semester</th>
									<th width="70"></th>
								</tr> </thead> <tbody>
								<tr>
									<td>
										<div class="sparkline" data-bar-color="#5cb85c" data-type="bar" data-height="19">
											<!--20,10,15,21,12,5,21,30,24,15,8,19-->
										</div>
									</td>
									<td>Jan - April 2014</td>
									<td class="text-success"> <i class="fa fa-level-up"></i> 40%
									</td>
								</tr>
								<tr>
									<td>
										<div class="sparkline" data-bar-color="#61a1e1" data-type="bar" data-height="19">
											<!--,5,21,30,24,15,8,19,20,10,15,21,12-->
										</div>
									</td>
									<td>Sep - Dec 2013</td>
									<td class="text-success"> <i class="fa fa-level-up"></i> 20%
									</td>
								</tr>
								<tr>
									<td>
										<div class="sparkline" data-bar-color="#999900" data-type="bar" data-height="19">
											<!--200,400,500,100,90,1200,1500,1000,800,500,80,50-->
										</div>
									</td>
									<td>May - Aug 2013</td>
									<td class="text-warning"> <i class="fa fa-level-down"></i> 5%
									</td>
								</tr>
								<tr>
									<td>
										<div class="sparkline" data-bar-color="#ff5f5f" data-type="bar" data-height="19">
											<!--15,21,30,24,15,8,19,20,10,15,21,12-->
										</div>
									</td>
									<td>Jan - Apr 2013</td>
									<td class="text-danger"> <i class="fa fa-level-down"></i> 20%
									</td>
								</tr> </tbody>
							</table> </section>
						</div></div>
						<div class="row">
							<div class="col-md-8">
								<section class="panel panel-default portlet-item">
									<header class="panel-heading">
										<ul class="nav nav-pills pull-right">
											<li> <a href="portlet.html#" class="panel-toggle text-muted"><i class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a> </li>
										</ul> Latest News
										<span class="badge bg-info">
										<?php $this->db->where('deleted','No');
											$query = $this->db->get('news');
											if ($query->num_rows() > 0){
												echo $query->num_rows();
											}
										?>
									</span> </header> <section class="panel-body">
									<?php
									if (!empty($news)) {
									foreach ($news as $key => $post) { ?>
									<?php
												$icons = ["calendar", "laptop", "leaf","rocket"];
												$k = array_rand($icons);
									?>
									<article class="media">
									<div class="pull-left">
										<span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-<?=$icons[$k]?> fa-stack-1x text-white"></i>
										</span>
									</div>
									<div class="media-body"> <a href="#" class="h4"><?=$post->title?></a> <small class="block m-t-xs"><?=$post->desc?></small>
										<em class="text-xs">Posted on
										<span class="text-danger"><?=strftime("%B %d, %Y", strtotime($post->date_posted)) ?>
										</span></em>
									</div> </article>
									<div class="line pull-in"></div>
									<?php } } ?>
								</section> </section>
							</div>
							<div class="col-md-4"> <section class="panel b-light">
							<header class="panel-heading bg-primary dker no-border"><strong>Upcoming Events</strong></header>
							
							<div class="list-group">
								<?php
									if (!empty($upcoming_events)) {
								foreach ($upcoming_events as $key => $event) { ?>
								<?php
									$colors = ["info", "success", "danger",];
									$k = array_rand($colors);
								?>
								<a href="#" class="list-group-item text-ellipsis">
								<span class="badge bg-<?=$colors[$k]?>"><?=$event->event_date?>
								</span> <?=$event->title?> </a>
								<?php } } ?>
							</div> </section>
						</div>
					</div>
				</section>
			</section>
		<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>