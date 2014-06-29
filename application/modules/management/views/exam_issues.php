<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="<?=base_url()?>profile">Exams</a></li>
		<li class="active">Exam Issues</li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<section class="panel panel-default">
	<header class="panel-heading"> Issues submitted by students. </header>
	<div class="row text-sm wrapper">
		<div class="col-sm-5 m-b-xs">
			<select class="input-sm form-control input-s-sm inline">
				<option value="0">Bulk action</option>
			</select> <button class="btn btn-sm btn-default">Apply</button>
		</div>
		<div class="col-sm-4 m-b-xs">
			
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Search">
				<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button">Go!</button>
				</span>
			</div>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th class="th-sortable" data-toggle="class">Unit Name
						<span class="th-sort">
						<i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i>
						</span>
					</th>
					<th>Grade </th>
					<th>Semester </th>
					<th>Message </th>
					<th width="30"></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($exam_issues)) {
				foreach ($exam_issues as $key => $i) { ?>
				<tr>
					<td><?=$this->user_profile->unit_detail($i->unit,'unit_name')?></td>
					<td><?=$i->grade?></td>
					<td><?=$this->user_profile->current_sem_detail($i->sem_id,'sem_name')?> </td>
					<td>
						<?=$i->message?>					
					</td>
					<td> 
					<a href="<?=base_url()?>management/close_issue/<?=$i->i_id?>/<?=$i->sent_by?>" type="button" class="btn btn-xs btn-danger"> <i class="fa fa-times text-white"></i> Close Issue</a>
					</td>
				</tr>
				<?php  }} else{ ?>
				<tr>
					<td></td><td>Nothing to display here</td><td></td><td></td>
				</tr>
				<?php } ?>
				
				
				
			</tbody>
		</table>
	</div> <footer class="panel-footer">
	<div class="row">
		<div class="col-sm-4 hidden-xs">
			<select class="input-sm form-control input-s-sm inline">
				<option value="0">Bulk action</option>
			</select> <button class="btn btn-sm btn-default">Apply</button>
		</div>
		<div class="col-sm-4 text-center"> <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
		</div>
		<div class="col-sm-4 text-right text-center-xs">
			<ul class="pagination pagination-sm m-t-none m-b-none">
				<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
			</ul>
		</div>
	</div> </footer> </section>
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>