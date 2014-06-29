<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="<?=base_url()?>profile">Account</a></li>
		<li class="active">My Units</li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<section class="panel panel-default">
	<header class="panel-heading"> This are Year <?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'year_of_study')?> Semester <?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'semester')?> Units </header>
	<div class="row text-sm wrapper">
		<div class="col-sm-5 m-b-xs">
			<select class="input-sm form-control input-s-sm inline">
				<option value="0">Bulk action</option>
				<option value="1">Register Selected</option>
				<option value="2">Unregister</option>
				<option value="3">Download PDF</option>
			</select> <button class="btn btn-sm btn-default">Apply</button>
		</div>
		<div class="col-sm-4 m-b-xs">
			<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-sm btn-info active">
					<input type="radio" name="options" id="option1"> <i class="fa fa-check"></i> Registered
				</label>
				<label class="btn btn-sm btn-success">
					<input type="radio" name="options" id="option2"> <i class="fa fa-check-square"></i> Completed
				</label>
				<label class="btn btn-sm btn-danger">
					<input type="radio" name="options" id="option2"> <i class="fa fa-warning"></i> Uncomplete
				</label>
			</div>
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
					<th width="20">
						<input type="checkbox">
					</th>
					<th class="th-sortable" data-toggle="class">Unit Name
						<span class="th-sort">
						<i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i>
						</span>
					</th>
					<th>Unit Code </th>
					<th>CF </th>
					<th width="30"></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($units)) {
							foreach ($units as $key => $unit) { ?>
				<tr>
				<td><input type="checkbox" name="post[]" value="2"></td>
				<td><?=$unit->unit_name?></td>
				<td><?=$unit->unit_code?></td>
				<td><?=$unit->unit_cf?> </td>
				<td>
				<?php
				if($this->profile_model->if_unit_registered($unit->u_id,$this->tank_auth->get_user_id())){ ?>
				<a href="<?=base_url()?>profile/units/unregister/<?=$unit->u_id?>/<?=$unit->program_id?>" class="btn btn-success btn-xs"> 
				<i class="fa fa-trash-o text-white"></i> Remove</a>
				<?php }else{ ?>
				<a href="<?=base_url()?>profile/units/register_unit/<?=$unit->u_id?>/<?=$unit->program_id?>" class="btn btn-danger btn-xs">
				<i class="fa fa-check text-white"></i> Register</a>
				<?php  }?>
				
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
<option value="1">Register Selected</option>
<option value="2">Unregister</option>
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
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>