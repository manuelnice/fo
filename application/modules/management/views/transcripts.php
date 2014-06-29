<section id="content">
	<section class="hbox stretch">
		<aside class="aside-md bg-white b-r" id="subNav">
			<div class="wrapper b-b header">Study Year
			</div>
			<ul class="nav">
			<?php
							if (!empty($programs)) {
							foreach ($programs as $key => $p) { ?>
		<li class="b-b b-light"><a href="<?=base_url()?>management/transcripts/?p=<?=$p->pr_id?>"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?=$p->title?>">
		<i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i><?=$p->title?></a></li>
		<?php }} ?>
			</ul> </aside> <aside>
			<section class="vbox">
				<header class="header bg-white b-b clearfix">
					<div class="row m-t-sm">
						<div class="col-sm-8 m-b-xs">
							<a href="#subNav" data-toggle="class:hide" class="btn btn-sm btn-default active">
							<i class="fa fa-caret-right text fa-lg"></i><i class="fa fa-caret-left text-active fa-lg"></i></a>
							<div class="btn-group">
								<a href="<?=current_url()?>" type="button" class="btn btn-sm btn-default" title="Refresh"><i class="fa fa-refresh"></i></a>
								
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
					
					 <section class="panel panel-default">

					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Username </th>
									<th>Reg No </th>
									<th>Points</th>
									<th>Grade </th>
									<th>Action</th>
								</tr> </thead> <tbody>
								<?php
										if (!empty($results)) {
										foreach ($results as $key => $r) { ?>
								<tr>
									<td><?=ucfirst($this->user_profile->get_user_details($r->student,'username'))?></td>
									<td><?=$r->reg_no?></td>
									<td><?=$this->user_profile->average_points($r->student,'')?></td>
									<td>A</td>
									<td>
									 <a href="<?=base_url()?>management/transcripts/view/<?=$r->student?>" type="button" class="btn btn-xs btn-danger"> <i class="fa fa-plus text-white"></i> View Transcript</a>
									</td>
								</tr>
								<?php } } else{ ?>
										<tr><td></td><td></td><td>No transcripts Available</td></tr>
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