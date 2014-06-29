
<!-- Start -->


<section id="content">
	<section class="hbox stretch">
	
		<aside class="aside-md bg-white b-r" id="subNav">

			<div class="wrapper b-b header"><?=lang('all_estimates')?>
			</div>
			<section class="vbox">
			 <section class="scrollable w-f">
			   <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
			<ul class="nav">
			<?php
			foreach ($estimates as $key => $estimate) { ?>
				<li class="b-b b-light"><a href="<?=base_url()?>estimates/manage/details/<?=$estimate->est_id?>">
				<?=ucfirst($this->user_profile->get_profile_details($estimate->client,'fullname')? $this->user_profile->get_profile_details($estimate->client,'fullname'):$estimate->username)?>
				<div class="pull-right">
				<?=$this->config->item('default_currency')?> <?=number_format($this->user_profile->estimate_payable($estimate->est_id),2)?></div> <br>
				<small class="block text-muted">EST <?=$estimate->reference_no?> | <?=strftime("%B %d, %Y", strtotime($estimate->date_saved));?> </small>

				</a> </li>
				<?php } ?>
			</ul> 
			</div></section>
			</section>
			</aside> 
			
			<aside>
			<section class="vbox">
				<header class="header bg-white b-b clearfix">
					<div class="row m-t-sm">
						<div class="col-sm-8 m-b-xs">
							<a href="#subNav" data-toggle="class:hide" class="btn btn-sm btn-default active">
							<i class="fa fa-caret-right text fa-lg"></i><i class="fa fa-caret-left text-active fa-lg"></i></a>
						<div class="btn-group">
						<a class="btn btn-sm btn-default" href="<?=current_url()?>" title="Refresh"><i class="fa fa-refresh"></i></a>
						</div>
						<a class="btn btn-sm btn-danger" href="<?=base_url()?>estimates/manage/add" title="<?=lang('create_estimate')?>">
						<i class="fa fa-plus"></i> <?=lang('create_estimate')?></a>
						</div>
						<div class="col-sm-4 m-b-xs">
						<?php  echo form_open(base_url().'estimates/manage/search'); ?>
							<div class="input-group">
								<input type="text" class="input-sm form-control" name="keyword" placeholder="<?=lang('search')?>">
								<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="submit">Go!</button>
								</span>
							</div>
							</form>
						</div>
					</div> </header>
					<section class="scrollable wrapper w-f">
					<!-- Start Display chart -->
					

					 <!-- End display chart -->






					</section>  




		</section> </aside> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>



<!-- end -->