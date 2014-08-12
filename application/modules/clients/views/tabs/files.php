		<header class="header b-b b-light hidden-print">
<a href="<?=base_url()?>clients/files/add/<?=$this->uri->segment(4)*1200?>" data-toggle="ajaxModal" title="<?=lang('upload_file')?>" class="btn btn-sm btn-primary pull-right"><?=lang('upload_file')?></a> 
 </header>



<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 
			<?php
								if (!empty($project_files)) {
				foreach ($project_files as $key => $f) { ?>
		<li class="list-group-item"> 


		<a href="#" class="thumb-sm pull-left m-r-sm">
		<img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($f->uploaded_by,'avatar')?>" class="img-circle"> </a>
			<a href="#" class="clear"> <small class="pull-right"><?php
								$today = time();
								$activity_day = strtotime($f->date_posted) ;
								echo $this->user_profile->get_time_diff($today,$activity_day);
							?> ago</small> <strong class="block"><?=ucfirst($this->user_profile->get_user_details($f->uploaded_by,'username'))?></strong> 
							<small><?=$f->file_name?></small>
							 </a>

<div><?=$f->description?>
</div> 
<div class="comment-action m-t-sm">
<a href="<?=base_url()?>clients/files/download/<?=$f->file_id*1800?>/<?=$f->project*1200?>" class="btn btn-default btn-xs active">
<i class="fa fa-download text-active"></i> <?=lang('download_file')?> </a>
<?php
if ($f->uploaded_by == $this->tank_auth->get_user_id()) { ?>
<a href="<?=base_url()?>clients/files/delete/<?=$f->file_id*1800?>/<?=$f->project*1200?>" data-toggle="ajaxModal" class="btn btn-default btn-xs active">
<i class="fa fa-times text-active"></i> <?=lang('delete_file')?> </a>
<?php } ?>

</div>

 						
		</li> 
		
				<?php } } else{		echo lang('nothing_to_display');	} ?>
	 
		</ul> 