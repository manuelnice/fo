<section id="content"> 
<section class="vbox">
<?php
								if (!empty($user_details)) {
				foreach ($user_details as $key => $user) { ?>
	<header class="header bg-white b-b b-light">
	<p><?=ucfirst($user->username)?>'s <?=lang('profile')?></p> </header> 
	<section class="scrollable"> 
	<section class="hbox stretch"> 
	<aside class="aside-lg bg-light lter b-r"> 
	<section class="vbox"> 
	<section class="scrollable w-f">
	<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
	<div class="wrapper">
	
		<div class="clearfix m-b">
		<a href="#" class="pull-left thumb m-r"> 
		<img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($user->user_id,'avatar')?>" class="img-circle"> </a>
			<div class="clear">
				<div class="h3 m-t-xs m-b-xs"><?=ucfirst($user->username)?></div> 
				<small class="text-muted"><i class="fa fa-info-circle"></i> 
				<?=ucfirst($user->fullname?$user->fullname:'No Name')?></small>
			</div>
		</div>
		<div class="panel wrapper panel-success">
			<div class="row">
				<div class="col-xs-6"> <a href="#">
					<span class="m-b-xs h4 block"><?=$this->user_profile->count_rows('projects',$array = array(
                                        					'client' => $user->user_id
                                        					)); ?></span> <small class="text-muted"><?=lang('projects')?></small> </a>
				</div>
				<div class="col-xs-6"> <a href="#">
					<span class="m-b-xs h4 block"><?=$this->user_profile->count_rows('invoices',$array = array(
                                        					'client' => $user->user_id
                                        					)); ?></span> <small class="text-muted"><?=lang('invoices')?></small> </a>
				</div>
			</div>
		</div>
		<div class="btn-group"> 
		
			<a class="btn btn-primary" href="<?=base_url()?>users/registered/all">
			<span class="text"> <i class="fa fa-chevron-circle-left"></i> <?=lang('system_users')?></span> </a> 
			</div>
			<hr>
		<p><?=lang('full_name')?> : <?php if($user->fullname){ echo $user->fullname; }else{ echo "--"; }?></p>
		<p><?=lang('company')?> : <?php if($user->company){ echo $user->company; }else{ echo "--"; }?></p>
		<p><?=lang('city')?> : <?php if($user->city){ echo $user->city; }else{ echo "--"; }?></p>
		<p><?=lang('country')?> : <?php if($user->country){ echo $user->country; }else{ echo "--"; }?></p>
		<p><?=lang('address')?> : <?php if($user->address){ echo $user->address; }else{ echo "--"; }?></p>
		<p><?=lang('phone')?> : <?php if($user->phone){ echo $user->phone; }else{ echo "--"; }?></p>
		<p><?=lang('email')?> : <?php if($user->email){ echo $user->email; }else{ echo "--"; }?></p>
		<p><?=lang('role')?> : <?=ucfirst($this->user_profile->role_by_id($user->role_id))?></p>
		<p><?=lang('last_login')?> : <?php if($user->last_login != '0000-00-00 00:00:00'){ echo strftime("%B %d, %Y", strtotime($user->last_login)); }else{ echo "Never Logged In"; }?> </p>
		

		<div>
			<small class="text-uc text-xs text-muted"><?=lang('profile_description')?></small>
			<p> <?=$user->bio?></p>
			<div class="line">
			</div> 
		</div>
	</div> </div></section> </section> </aside> 
	<aside class="bg-white"> 
		<?php  echo modules::run('sidebar/flash_msg');?>
		<section class="vbox"> 
		<section class="panel panel-default">
<section class="scrollable w-f">
<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
<div class="panel-body"> 
<section class="panel panel-default">
	<header class="panel-heading"> <i class="fa fa-briefcase"></i> <?=lang('user_invoices')?></header>
	<div class="table-responsive">
		<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th><?=lang('reference_no')?></th>
					<th><?=lang('date_issued')?></th>
					<th><?=lang('due_date')?> </th>
					<th><?=lang('amount')?> </th>
					<th><?=lang('options')?></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($user_invoices)) {
				foreach ($user_invoices as $key => $invoice) { ?>
				<tr>
					<td><a class="text-info" href="<?=base_url()?>invoices/view/details/<?=$invoice->inv_id?>"><?=$invoice->reference_no?></a></td>
					<td><?=strftime("%B %d, %Y", strtotime($invoice->date_issued));?> </td>
					<td><?=strftime("%B %d, %Y", strtotime($invoice->due_date));?> </td>
					<td><small><?=$invoice->currency?></small> <?=number_format($this->user_profile->invoice_payable($invoice->inv_id),2)?> </td>
					<td>
					<a href="<?=base_url()?>invoices/view/update/<?=$invoice->inv_id?>" class="btn btn-info btn-xs">
					<i class="fa fa-pencil"></i> <?=lang('edit')?></a>
					<a href="<?=base_url()?>invoices/view/delete/<?=$invoice->inv_id?>" class="btn btn-danger btn-xs">
					<i class="fa fa-times"></i> <?=lang('delete')?></a>
					</td>
				</tr>
				<?php  }} else{ ?>
				<tr>
					<td></td><td><?=lang('nothing_to_display')?></td><td></td><td></td><td></td>
				</tr>
				<?php } ?>
				
				
				
			</tbody>
		</table>
		</div></section>

<!-- start Projects -->
<section class="panel panel-default">
	<header class="panel-heading"> <i class="fa fa-coffee"></i> <?=lang('user_projects')?></header>
<div class="table-responsive">
		<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th><?=lang('project_code')?></th>
					<th><?=lang('project_name')?></th>
					<th><?=lang('due_date')?> </th>
					<th><?=lang('progress')?> </th>
					<th><?=lang('options')?></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($user_projects)) {
				foreach ($user_projects as $key => $project) { ?>
				<tr>
					<td><a class="text-info" href="<?=base_url()?>projects/view/details/<?=$project->project_id?>">
					<?=$project->project_code?></a></td>
					<td><?=$project->project_title?> </td>
					<td><?=strftime("%B %d, %Y", strtotime($project->due_date));?> </td>
					<td><div class="progress progress-xs m-t-xs progress-striped active m-b-none">
											<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="<?=$project->progress?>%" style="width: <?=$project->progress?>%">
											</div>
										</div>
					</td>
					<td>
					<a href="<?=base_url()?>projects/view/update/<?=$project->project_id?>" class="btn btn-info btn-xs">
					<i class="fa fa-pencil"></i> <?=lang('edit')?></a>
					<a href="<?=base_url()?>projects/view/delete/<?=$project->project_id?>" class="btn btn-danger btn-xs">
					<i class="fa fa-times"></i> <?=lang('delete')?></a>
					</td>
				</tr>
				<?php  }} else{ ?>
				<tr>
					<td></td><td><?=lang('nothing_to_display')?></td><td></td><td></td><td></td>
				</tr>
				<?php } ?>
				
				
				
			</tbody>
		</table>
		</div>

</section>


<!-- End Projects -->
		</div></div>
</section>



		</section>

		</section> </aside>
		<?php }} ?>
		</section> 
		</section> 
		</section> 
<a href="profile.html#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> 

</section>