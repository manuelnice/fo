<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> <?=lang('home')?></a></li>
		<li><a href="<?=base_url()?>contacts"><?=lang('contacts')?></a></li>
		<li class="active"><?=lang('system_users')?></li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<section class="panel panel-default">
	<header class="panel-heading"> <i class="fa fa-lock"></i> <?=lang('all_users')?></header>
	<div class="row text-sm wrapper">
		<div class="col-sm-5 m-b-xs">
			
			<a href="<?=base_url()?>contacts/add"  data-toggle="ajaxModal" class="btn btn-sm btn-dark"><i class="fa fa-plus"></i> <?=lang('new_user')?></a>
		</div>
		<div class="col-sm-4 m-b-xs">
			
		</div>
		<div class="col-sm-3">
		<?php  echo form_open(base_url().'users/account/search'); ?>
			<div class="input-group">
				<input type="text" class="input-sm form-control" name="keyword" placeholder="<?=lang('search')?>">
				<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="submit">Go!</button>
				</span>
			</div>
			</form>
			</div>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th width="15px"></th>
					<th><?=lang('username')?></th>
					<th><?=lang('email')?></th>
					<th><?=lang('role')?> </th>
					<th><?=lang('registered_on')?> </th>
					<th><?=lang('options')?></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($users)) {
				foreach ($users as $key => $user) { ?>
				<tr>
				<td><a class="pull-left thumb-sm avatar"><img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($user->id,'avatar')?>" class="img-circle"></a></td>
					<td><a class="text-info" href="<?=base_url()?>contacts/view/details/<?=$user->user_id*1200?>">
					<?=ucfirst($user->fullname?$user->fullname:$user->username) ?>
					</a></td>
					<td><?=$user->email?> </td>
					<td><?php
					if ($this->user_profile->role_by_id($user->role_id) == 'admin') {
						$span_badge = 'label label-danger';
					}elseif ($this->user_profile->role_by_id($user->role_id) == 'collaborator') {
						$span_badge = 'label label-primary';
					}
					else{
						$span_badge = '';
					}
					?><span class="<?=$span_badge?>">
					<?=ucfirst($this->user_profile->role_by_id($user->role_id))?></span></td>
					<td><?=strftime("%B %d, %Y", strtotime($user->created));?> </td>
					<td>
					<a href="<?=base_url()?>users/view/update/<?=$user->user_id?>" class="btn btn-default btn-xs" data-toggle="ajaxModal" title="<?=lang('edit')?>"><i class="fa fa-pencil"></i> </a>
					<a href="<?=base_url()?>users/account/delete/<?=$user->user_id?>" class="btn btn-danger btn-xs" data-toggle="ajaxModal" title="<?=lang('delete')?>"><i class="fa fa-trash-o"></i></a>
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

	<footer class="panel-footer">
	<div class="row">
		<div class="col-sm-4 hidden-xs">
			<?php
		$total_rows = $this->user_profile->count_rows('users',$array = array(
                                        					'activated' => 1
                                        					)); ?>
		</div>
		<div class="col-sm-4 text-center"> <small class="text-muted inline m-t-sm m-b-sm">
		<?=$this->uri->segment(4) ? $this->uri->segment(4) : 1?> - <?=$this->uri->segment(4)+20?> of <?=$total_rows?> <?=lang('users')?></small>
		</div>
		<div class="col-sm-4 text-right text-center-xs">		

			<?php
                                        $this->load->library('pagination');    
                                        $config['base_url'] = base_url().'users/account/active/';
                                        $config['total_rows'] = $total_rows;
                                        $config['full_tag_open'] = '<ul class="pagination pagination-sm m-t-none m-b-none">';
                                        $config['full_tag_close'] = '</ul>';
                                        $config['per_page'] = 20;
                                        $config['uri_segment'] = 4;
                                        $this->pagination->initialize($config);
                                        echo $this->pagination->create_links();
                                        ?>
		</div>
	</div> </footer>
	</section>
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>