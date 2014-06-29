<section id="content">
	<section class="hbox stretch">
		<aside class="aside-md bg-white b-r" id="subNav">
			<div class="wrapper b-b header">Study Year
			</div>
			<ul class="nav">
				<li class="b-b b-light"><a href="<?=base_url()?>tasks/assignments/?y=1"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Year One</a></li>
				<li class="b-b b-light"><a href="<?=base_url()?>tasks/assignments/?y=2"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Year Two</a></li>
				<li class="b-b b-light"><a href="<?=base_url()?>tasks/assignments/?y=3"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Year Three</a></li>
				<li class="b-b b-light"><a href="<?=base_url()?>tasks/assignments/?y=4"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Year Four</a></li>
			</ul> </aside> <aside>
			<section class="vbox">
				<header class="header bg-white b-b clearfix">
					<div class="row m-t-sm">
						<div class="col-sm-8 m-b-xs">
							<a href="#subNav" data-toggle="class:hide" class="btn btn-sm btn-default active">
							<i class="fa fa-caret-right text fa-lg"></i><i class="fa fa-caret-left text-active fa-lg"></i></a>
							<div class="btn-group">
								<a href="<?=current_url()?>" type="button" class="btn btn-sm btn-default" title="Refresh"><i class="fa fa-refresh"></i></a>
								<button type="button" class="btn btn-sm btn-default" title="Filter" data-toggle="dropdown"><i class="fa fa-filter"></i>
								<span class="caret">
								</span></button>
								<ul class="dropdown-menu">
									<li><a href="#">Complete</a></li>
									<li><a href="#">Pending</a></li>
								</ul>
							</div> 
						</div>
						<div class="col-sm-4 m-b-xs">
							<div class="input-group">
								<input type="text" class="input-sm form-control" placeholder="Search">
								<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button">Go!</button>
								</span>
							</div>
						</div>
					</div> </header> 
					<section class="scrollable wrapper w-f">
					<?php  echo modules::run('sidebar/flash_msg');?>
					 <?php
					if(!$this->session->flashdata('message')){ ?>
					<div class="alert alert-warning"> <button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-info-sign"></i><strong>Hey you!</strong> Overdue Assignments will not be visible. Submit yours on time. </div>
					<?php } ?>
					 <section class="panel panel-default">

					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Unit Name </th>
									<th>Unit Code</th>
									<th>Lecturer </th>
									<th>Due Date </th>
									<th>Action</th>
								</tr> </thead> <tbody>
								<?php
										if (!empty($assignments)) {
										foreach ($assignments as $key => $n) { ?>
								<tr>
									<td><?=$n->unit_name?></td>
									<td><?=$n->unit_code?></td>
									<td><a href="#">@<?=ucfirst($this->user_profile->get_user_details($n->lecturer,'username'))?></a></td>
									<td> <?=strftime("%B %d, %Y", strtotime($n->due_date)) ?> </td>
									<td>
									<a href="<?=base_url()?>tasks/assignments/view/<?=$n->assgn_id?>/" type="button" class="btn btn-xs btn-dark"> <i class="fa fa-info text-white"></i> View</a>
									<?php
									if (!$this->task_model->assignment_submitted($this->tank_auth->get_user_id(),$n->assgn_id)) { ?>
								<a href="<?=base_url()?>tasks/assignments/submit/<?=$n->assgn_id?>/<?=$n->yos?>/<?=$n->sem?>" data-toggle="ajaxModal" type="button" class="btn btn-xs btn-danger"> <i class="fa fa-warning text-white"></i> Submit</a>
									<?php }else{ ?>
								 <i class="fa fa-check"></i> Submitted
									<?php } ?>
									</td>
								</tr>
								<?php } } else{ ?>
										<tr><td></td><td></td><td>No Assignments Available</td></tr>
										<?php } ?>
							</tbody>
						</table>
					</div>
				</section> </section> <footer class="footer bg-white b-t">
				<div class="row text-center-xs">
					<div class="col-md-6 hidden-sm">
						<p class="text-muted m-t">Showing 1-30 of 6 Results</p>
					</div>
					<div class="col-md-6 col-sm-12 text-right text-center-xs">
						<ul class="pagination pagination-sm m-t-sm m-b-none">
							<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
						</ul>
					</div>
				</div> </footer> </section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>