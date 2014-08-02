		<header class="header b-b b-light hidden-print">
<a href="<?=base_url()?>projects/files/add/<?=$this->uri->segment(4)*1200?>"  data-toggle="ajaxModal" title="<?=lang('upload_file')?>" class="btn btn-sm btn-primary pull-right"><?=lang('upload_file')?></a> 
 </header>



<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 
			<?php
								if (!empty($bug_files)) {
				foreach ($bug_files as $key => $f) { ?>
		<li class="list-group-item"> 


		<a href="#" class="thumb-sm pull-left m-r-sm"> <img src="<?=AVATAR_URL?><?=$this->user_profile->get_profile_details($f->uploaded_by,'avatar')?>" class="img-circle"> </a>
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
<a href="<?=base_url()?>projects/files/download/<?=$f->file_id*1800?>/<?=$f->bug*1200?>" class="btn btn-dark btn-xs active">
<i class="fa fa-download text-white text-active"></i> <?=lang('download_file')?> </a>
<a href="<?=base_url()?>projects/files/delete/<?=$f->file_id*1800?>/<?=$f->bug*1200?>" data-toggle="ajaxModal" class="btn btn-danger btn-xs active">
<i class="fa fa-times text-white text-active"></i> <?=lang('delete_file')?> </a>

</div>

 						
		</li> 
		
				<?php } } else{		echo lang('nothing_to_display');	} ?>
	 
		</ul> 