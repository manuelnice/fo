<section id="content"> <section class="vbox">
	<header class="header bg-white b-b b-light">
	<p>KUSO Member <small>Ratings</small></p> </header> 

	<section class="scrollable wrapper">
	<div class="row">
		<div class="col-lg-12">
		<?php  echo modules::run('sidebar/flash_msg');?>
			<div class="row">
			<?php
										if (!empty($officials)) {
										foreach ($officials as $key => $n) { ?>
				<!-- start rate -->
				<div class="col-sm-4">
					<section class="panel panel-info">
						<div class="panel-body"> <a href="<?=base_url()?>user/wmandai" class="thumb pull-right m-l">
							<img src="<?=IMG_URL?><?=$this->user_profile->get_profile_details($n->user,'avatar')?>" class="img-circle"> </a>
							<div class="clear"> <a href="<?=base_url()?>user/wmandai" class="text-info">@<?=ucfirst($this->user_profile->get_profile_details($n->user,'fullname') ? $this->user_profile->get_profile_details($n->user,'fullname') : $n->username)?> </a>
								<?php
								if ($this->extras_model->official_rating($n->user) == 5 ) { ?>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
								<?php }elseif ($this->extras_model->official_rating($n->user) == 4) { ?>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
								<?php }elseif ($this->extras_model->official_rating($n->user) == 3) { ?>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
								<?php }elseif ($this->extras_model->official_rating($n->user) == 2) { ?>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
								<?php }else{ ?>
						<i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
								<?php } ?>
								<small class="block text-muted"><?=$n->position?></small> <small class="block text-muted">
								<?=$this->extras_model->official_rating($n->user)?> stars / <?=$this->user_profile->count_rows('ratings',
										$array = array('official_rated' => $n->user))?> Ratings</small>
								<a href="<?=base_url()?>extras/rate_me/<?=$n->user?>" data-toggle="ajaxModal" class="btn btn-xs btn-success m-t-xs">Rate Me</a>
							</div>
						</div>
					</section>
				</div>
				<!--end rate-->
				<?php } } else{ ?> No Officials Available <?php } ?>
				
			</div>
		</div>
		
	</div>
	<div class="row">
	</div> </section>
</section>
<a href="widgets.html#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>