<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> <?=lang('home')?></a></li>
		<li><a href="<?=base_url()?>bugs"><?=lang('bugs')?></a></li>
		<li class="active"><?=lang('bug_tracking')?></li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<section class="panel panel-default">
	<header class="panel-heading"> <i class="fa fa-bug"></i> <?=lang('all_bugs')?></header>
	<div class="row text-sm wrapper">
		<div class="col-sm-3 m-b-xs">
		<a href="<?=base_url()?>bugs/view/add" data-toggle="ajaxModal" class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> <?=lang('new_bug')?></a>
		</div>
		<div class="col-sm-6 m-b-xs">

<div class="btn-group"> 
<a href="<?=base_url()?>bugs/view_by_status/unconfirmed" class="btn btn-sm btn-default">Unconfirmed</a> 
<a href="<?=base_url()?>bugs/view_by_status/confirmed" class="btn btn-sm btn-default">Confirmed</a> 
<a href="<?=base_url()?>bugs/view_by_status/progress" class="btn btn-sm btn-default">In Progress</a> 
<a href="<?=base_url()?>bugs/view_by_status/resolved" class="btn btn-sm btn-default">Resolved</a> 
<a href="<?=base_url()?>bugs/view_by_status/verified" class="btn btn-sm btn-default">Verified</a> 

</div> 
		</div>
		<div class="col-sm-3">
		<?php  echo form_open(base_url().'bugs/search'); ?>
			<div class="input-group">			
				<input type="text" class="input-sm form-control" placeholder="<?=lang('search')?>" name="keyword">
				<span class="input-group-btn"> 
				<button class="btn btn-sm btn-default" type="submit">Go!</button>
				</span>				
			</div>
			</form>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th><?=lang('issue_ref')?></th>
					<th class="hidden-xs"><?=lang('project')?></th>
					<th><?=lang('reporter')?> </th>
					<th><?=lang('assigned_to')?> </th>
					<th><?=lang('priority')?> </th>
					<th class="hidden-xs"><?=lang('reported')?> </th>
					<th><?=lang('status')?> </th>
					<th><?=lang('options')?></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($bugs)) {
				foreach ($bugs as $key => $bug) { ?>
				<tr>
					<td><a class="text-info" href="<?=base_url()?>bugs/view/details/<?=$bug->bug_id?>">#<?=$bug->issue_ref?></a></td>
					<td class="hidden-xs"><a class="text-danger" href="<?=base_url()?>projects/view/<?=$bug->project_id?>">#<?=$bug->project_code?></a></td>
					<td><?=ucfirst($this->user_profile->get_user_details($bug->reporter,'username'))?></td>
					<td><a class="text-info" href="<?=base_url()?>bugs/assign_to/<?=$bug->bug_id?>/<?=$bug->issue_ref?>" data-toggle="ajaxModal" >
					<?php if($bug->assigned_to > 0){ echo ucfirst($this->user_profile->get_user_details($bug->assigned_to,'username')); }else{ echo lang('not_assigned'); } ?></a>
					</td>
					<td><?=$bug->priority?></td>
					<td class="hidden-xs"><?php
								$today = time();
								$activity_day = strtotime($bug->reported_on) ;
								echo $this->user_profile->get_time_diff($today,$activity_day);
							?> ago</td>
					<td><a class="text-info" href="<?=base_url()?>bugs/mark_status/<?=$bug->bug_id?>/<?=$bug->issue_ref?>" data-toggle="ajaxModal" >
					<?=$bug->bug_status?> </a>
					</td>
					<td>
					<a href="<?=base_url()?>bugs/view/edit/<?=$bug->bug_id?>" data-toggle="ajaxModal" class="btn btn-info btn-xs">
					<i class="fa fa-pencil"></i> <?=lang('edit')?></a>
					<a href="<?=base_url()?>bugs/delete/<?=$bug->bug_id?>" data-toggle="ajaxModal" class="btn btn-danger btn-xs">
					<i class="fa fa-times"></i> <?=lang('delete')?></a>
					</td>
				</tr>
				<?php  }} else{ ?>
				<tr>
					<td></td><td><?=lang('nothing_to_display')?></td><td></td><td></td><td></td><td></td><td></td><td></td>
				</tr>
				<?php } ?>
				
				
				
			</tbody>
		</table>
	</div> <footer class="panel-footer">
	<div class="row">
		<div class="col-sm-4 hidden-xs">
			<?php if ($this->uri->segment(3) == 'unconfirmed') { 
                                        	$bug_status = 'Unconfirmed'; }elseif ($this->uri->segment(3) == 'confirmed') {
                                        	$bug_status = 'Confirmed'; }elseif ($this->uri->segment(3) == 'progress') { 
                                        	$bug_status = 'In Progress'; }elseif ($this->uri->segment(3) == 'resolved') { 
                                        	$bug_status = 'Resolved'; }elseif ($this->uri->segment(3) == 'verified') {
                                        	$bug_status = 'Verified'; }else{
                                        	$bug_status = 'Unconfirmed';	
                                        	}
                                        	$total_rows = $this->user_profile->count_rows('bugs',$array = array(
                                        					'bug_status' => $bug_status
                                        					)); ?>
		</div>
		<div class="col-sm-4 text-center"> <small class="text-muted inline m-t-sm m-b-sm"><?=lang('showing')?> <?=$this->uri->segment(4) ? $this->uri->segment(4) : 1?> - <?=$this->uri->segment(4)+25?> of <?=$total_rows?> <?=lang('items')?></small>
		</div>
		<div class="col-sm-4 text-right text-center-xs">
		<?php
                                        $this->load->library('pagination');    
                                        $config['base_url'] = site_url().'bugs/view_by_status/'.$this->uri->segment(3);
                                        $config['total_rows'] = $total_rows;
                                        $config['full_tag_open'] = '<ul class="pagination pagination-sm m-t-none m-b-none">';
                                        $config['full_tag_close'] = '</ul>';
                                        $config['per_page'] = 25;
                                        $config['uri_segment'] = 4;
                                        $this->pagination->initialize($config);
                                        echo $this->pagination->create_links();
                                        ?>
		</div>
	</div>
	</footer> </section>
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>