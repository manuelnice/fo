<section id="content"> <section class="vbox">
	<section class="scrollable padder">
		<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
			<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?=base_url()?>profile">Account</a></li>
			<li class="active">Fee Statistics</li>
		</ul>
		<?php  echo modules::run('sidebar/flash_msg');?>
		<!-- Start Chart Section -->
		<div class="row">
			<div class="col-lg-4"> <section class="panel panel-default">
			<header class="panel-heading"> Conversion </header>
			<div class="panel-body text-center"> <h4>62.5<small> hrs</small></h4> <small class="text-muted block">Updated at 2 minutes ago</small>
				<div class="inline">
					<div class="easypiechart" data-percent="75" data-line-width="16" data-loop="false" data-size="188">
						<span class="h2 step">75
						</span>%
						<div class="easypie-text">New
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer"><small>% of avarage rate of the Conversion</small>
			</div> </section>
		</div>
		<div class="col-lg-4"> <section class="panel panel-default">
		<header class="panel-heading"> Bounce rate </header>
		<div class="panel-body text-center"> <h4><small>last </small>12<small> hrs</small></h4> <small class="text-muted block">yesterday: 20%</small>
			<div class="inline">
				<div class="easypiechart" data-percent="25" data-line-width="6" data-loop="false" data-size="188">
					<span class="h2 step">25
					</span>%
					<div class="easypie-text">Today
					</div>
				</div>
			</div>
		</div>
		<div class="panel-footer"><small>% of change</small>
		</div> </section>
	</div>
	<div class="col-lg-4"> <section class="panel panel-default">
	<header class="panel-heading"> New visitors </header>
	<div class="panel-body text-center"> <h4>3,450</h4> <small class="text-muted block">Worldwide visitors</small>
		<div class="inline">
			<div class="easypiechart" data-percent="60" data-line-width="30" data-track-color="#eee" data-bar-color="#afcf6f" data-scale-color="#fff" data-size="188" data-line-cap='butt'>
				<span class="h2 step">60
				</span>%
				<div class="easypie-text">new visits
				</div>
			</div>
		</div>
	</div>
	<div class="panel-footer"><small>% of avarage rate of the visits</small>
	</div> </section>
</div>
</div>
<!-- End  chart Section -->
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>