<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="<?=base_url()?>profile">Fees</a></li>
		<li class="active">Fee Structure</li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<section class="panel panel-default">
	<header class="panel-heading"> Fee Payments. </header>
	<div class="row text-sm wrapper">
		<div class="col-sm-5 m-b-xs">
			<select class="input-sm form-control input-s-sm inline">
				<option value="0">Bulk action</option>
				<option value="">Download PDF</option>
			</select> <button class="btn btn-sm btn-default">Apply</button>
			<a href="<?=base_url()?>finance/invoices/add_fee" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> New Fee Type</a>
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
					<th>Optional/Common </th>
					<th class="th-sortable" data-toggle="class">Program Name
						<span class="th-sort"><i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i></span>
					</th>
					<th>Description </th>
					<th>Year/Sem</th>
					<th>Amount</th>
					<th></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($fee_structure)) {
				foreach ($fee_structure as $key => $f) { ?>
				<tr>
					<td><?=$f->optional?> / <?=$f->common_fee?></td>
					<td><?=$f->title?></td>
					<td><?=$f->fee_desc?></td>
					<td><?=$f->yos?> / <?=$f->sem?> </td>
					<td><?=$this->config->item('currency')?> <?=number_format($f->amount)?></td>
					<td>
					<a href="<?=base_url()?>finance/invoices/edit_fee/<?=$f->f_id?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit Fee</a>
					<a href="<?=base_url()?>finance/invoices/delete_fee/<?=$f->f_id?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Remove</a>
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
				<option value="">Download PDF</option>
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