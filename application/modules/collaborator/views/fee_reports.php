<section id="content"> <section class="vbox">
	<section class="scrollable padder">
		<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
			<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?=base_url()?>profile">Reports</a></li>
			<li class="active">Fee Statistics</li>
		</ul>
		<?php  echo modules::run('sidebar/flash_msg');?>
		<!-- Start Chart Section -->
		<div class="row">
			<div class="col-lg-4"> <section class="panel panel-default">
			<header class="panel-heading"> Average Balance </header>
			<div class="panel-body text-center"> <h4>62.5<small> hrs</small></h4> <small class="text-muted block">Updated at 2 minutes ago</small>
				<div class="inline">
					<div class="easypiechart" data-percent="75" data-line-width="16" data-loop="false" data-size="188">
						<span class="h2 step">75</span>%
						<div class="easypie-text">New</div>
					</div>
				</div>
			</div>
			<div class="panel-footer"><small>% of avarage rate of the Conversion</small>
			</div> </section>
		</div>
		<div class="col-lg-4"> <section class="panel panel-default">
		<header class="panel-heading"> Payment Rate </header>
		<div class="panel-body text-center"> <h4><small>last </small>12<small> hrs</small></h4> <small class="text-muted block">yesterday: 20%</small>
			<div class="inline">
				<div class="easypiechart" data-percent="25" data-line-width="6" data-loop="false" data-size="188">
					<span class="h2 step">25
					</span>%
					<div class="easypie-text">Today</div>
				</div>
			</div>
		</div>
		<div class="panel-footer"><small>% of change</small>
		</div> </section>
	</div>
	<div class="col-lg-4"> <section class="panel panel-default">
	<header class="panel-heading"> Cleared Students </header>
	<div class="panel-body text-center"> <h4>1,450</h4> <small class="text-muted block">Students</small>
		<div class="inline">
			<div class="easypiechart" data-percent="60" data-line-width="30" data-track-color="#eee" data-bar-color="#afcf6f" data-scale-color="#fff" data-size="188" data-line-cap='butt'>
				<span class="h2 step">60
				</span>%
				<div class="easypie-text">Students
				</div>
			</div>
		</div>
	</div>
	<div class="panel-footer"><small>% of avarage rate of the visits</small>
	</div> </section>
</div>
</div>
<!-- End  chart Section -->
<!-- Start Table -->
<section class="panel panel-default">
<header class="panel-heading"> Payments by Program </header>
<div class="row text-sm wrapper">
<div class="col-sm-5 m-b-xs">
	<select class="input-sm form-control input-s-sm inline">
		<option value="0">Bulk action</option>
		<option value="3">Download PDF</option>
	</select> <button class="btn btn-sm btn-default">Apply</button>
</div>
</div>
<div class="table-responsive">
<table class="table table-striped b-t b-light text-sm">
	<thead>
		<tr>
			<th class="th-sortable" data-toggle="class">Program
				<span class="th-sort"> <i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i>
				</span>
			</th>
			<th>Amount Paid</th>
			<th>Balance</th>
			<th width="30"></th>
		</tr> </thead> <tbody>
		<?php
		foreach ($reports as $key => $r) { ?>
		<tr>
			<td><?=$r->title?></td>
			<td><?=$this->config->item('currency')?>  <?=number_format($this->profile_model->program_payment($r->program))?></td>
			<td><?=$this->config->item('currency')?>  <?=number_format($this->profile_model->program_balance($r->program))?></td>
			<td><?=$this->profile_model->program_percentage($r->program)?>%</td>
		</tr>
		<?php } ?>

		</tbody>
	</table>
</div> <footer class="panel-footer">
<div class="row">
	<div class="col-sm-4 hidden-xs">
		<select class="input-sm form-control input-s-sm inline">
			<option value="0">Bulk action</option>
			<option value="3">Download PDF</option>
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
<!-- End Table -->
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>