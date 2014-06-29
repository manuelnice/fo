<section id="content">
	<section class="vbox">
		<header class="header bg-white b-b b-light">
		<p>University Suggestion <small>Box</small></p> <a href="<?=base_url()?>extras/drop_message" data-toggle="ajaxModal" class="btn btn-sm btn-info pull-right">Drop Message</a> </header>
		<section class="scrollable wrapper">
			<div class="row">
				<div class="col-lg-12">
				<?php  echo modules::run('sidebar/flash_msg');?>
					<section class="panel panel-default">
					<header class="panel-heading">Successfully Sent Complaints </header>
					<section class="panel-body" >
					<?php
										if (!empty($suggestions)) {
										foreach ($suggestions as $key => $s) { ?>
						<article class="media">
						<span class="pull-left thumb-sm"><img src="<?=IMG_URL?>avatar_default.jpg" class="img-circle"></span>
						<div class="media-body">
							<div class="pull-right media-xs text-center text-muted"> 
							<strong class="h4"><?=strftime("%B %d, %Y", strtotime($s->date_submitted)) ?></strong>
								<br> <small class="label bg-light"><?=strftime("%H : %M", strtotime($s->date_submitted)) ?></small>
							</div> <a href="#" class="h4"><?=$s->subject?></a> <small class="block">
							<?php
							if ($s->privacy == 'Private') { ?>
								<a href="#" class="">Your Name was hidden</a>
							<span class="label label-success">Anonymous</span>
							<?php }else{ ?>
							<a href="#" class=""><?=ucfirst($this->user_profile->get_user_details($s->submitted_by,'username'))?></a>
							<span class="label label-info">Visible</span>
							<?php } ?>
							

							</small> <small class="block m-t-sm"><?=$s->message?></small>
						</div> </article>
						<div class="line pull-in"></div>
						<?php }}else{
							echo "Nothing to display here!";
							} ?>


					</section> </section>
				</div>
			</div> </section>
		</section>
		<a href="widgets.html#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
	</section>