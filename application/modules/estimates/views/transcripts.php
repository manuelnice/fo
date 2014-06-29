<section id="content">
	<section class="hbox stretch">
		<aside class="aside-md bg-white b-r" id="subNav">
			<div class="wrapper b-b header">Study Year
			</div>
			<ul class="nav">
				<li class="b-b b-light"><a href="<?=base_url()?>exams/transcripts/?y=1"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Year One</a></li>
				<li class="b-b b-light"><a href="<?=base_url()?>exams/transcripts/?y=2"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Year Two</a></li>
				<li class="b-b b-light"><a href="<?=base_url()?>exams/transcripts/?y=3"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Year Three</a></li>
				<li class="b-b b-light"><a href="<?=base_url()?>exams/transcripts/?y=4"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Year Four</a></li>
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
									<li><a href="#">With Issues</a></li>
									<li><a href="#">Approved</a></li>
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
					if ($this->config->item('results_status') == 'TRUE') { ?>
					<div class="alert alert-info"> <button type="button" class="close" data-dismiss="alert">x</button> <i class="fa fa-info-sign"></i><strong>Heads up!</strong> <?=$this->config->item('results_offline_msg')?> </div>
					<?php }else{ ?> 
					<section class="panel panel-default">
					
					<div class="table-responsive">
						<table class="table table-striped m-b-none">
							<thead>
								<tr>
									<th class="th-sortable" data-toggle="class">Unit Name
										<span class="th-sort"> <i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i>
										</span>
									</th>
									<th>Unit Code</th>
									<th>Grade </th>
									<th width="30">
									</th>
								</tr> </thead> <tbody>
								<?php
										if (!empty($exams)) {
										foreach ($exams as $key => $exam) { ?>
								<tr>
									<td><?=$exam->unit_name?></td>
									<td><?=$exam->unit_code?></td>
									<td><?=$exam->grade?></td>
									<td class="text-left">
									<div class="btn-group"> 
												<button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Options <span class="caret"></span></button>
													<ul class="dropdown-menu pull-right">
														<li><a href="<?=base_url()?>exams/view/<?=$exam->r_id?>">View Result</a></li>
														<li><a href="<?=base_url()?>exams/create_issue/<?=$exam->r_id?>" data-toggle="ajaxModal">Report Issue</a></li>
													</ul>
												</div>
											</td>
								</tr>
								<?php } } else{ ?>
										<tr><td></td><td></td><td>No exams Available</td></tr>
										<?php } ?>
								
							</tbody>
						</table>
					</div>
				</section> 
				<?php } ?>

				</section> <footer class="footer bg-white b-t">
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