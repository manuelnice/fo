<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<div class="m-b-md"> <h3 class="m-b-none">Dashboard</h3>
		<small>Welcome back, <?php
		echo $this->user_profile->get_fullname($this->tank_auth->get_user_id())  ? $this->user_profile->get_fullname($this->tank_auth->get_user_id()) : $this->tank_auth->get_username()?> </small>
	</div>
	<section class="panel panel-default">
		<div class="row m-l-none m-r-none bg-light lter">
			<div class="col-sm-6 col-md-3 padder-v b-r b-light">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-dark"></i> <i class="fa fa-users fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong> 
				<?=$this->user_profile->count_rows('fees',
                    $array = array('served_by' => $this->tank_auth->get_user_id(),
                     'deleted' =>'No'))?> </strong>
				</span> <small class="text-muted text-uc">Transactions </small> </a>
			</div>
			<div class="col-sm-6 col-md-3 padder-v b-r b-light">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-tasks fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong>
				<?=number_format($this->user_profile->get_sum('fees', 'amount',$array = array('served_by' => $this->tank_auth->get_user_id(),
                     'deleted' =>'No')))?> </strong>
				</span> <small class="text-muted text-uc">Received Amount </small> </a>
			</div>
			<div class="col-sm-6 col-md-3 padder-v b-r b-light">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-success"></i> <i class="fa fa-signal fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong>
				<?=$this->user_profile->count_rows('fee_issues',
                    $array = array( 'status' =>'Open'))?></span></strong>
				<small class="text-muted text-uc">Open Issues </small> </a>
			</div>
			<div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
				<span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x icon-muted"></i> <i class="fa fa-clock-o fa-stack-1x text-white"></i>
				</span> <a class="clear" href="#">
				<span class="h3 block m-t-xs"><strong><?php
				$today = time();
				$sem_end_day = strtotime($this->user_profile->semester_ends($this->config->item('current_sem'))) ;
				echo $this->user_profile->get_time_diff($today,$sem_end_day);
				?></strong>
				</span> <small class="text-muted text-uc">Left to end Sem.</small> </a>
			</div>
		</div> </section>
		<div class="row">
			<div class="col-md-8">
				<section class="panel panel-default">
					<header class="panel-heading">
						<span class="label bg-danger pull-right"><?=$this->user_profile->count_rows('fees',
                    $array = array(
                     'deleted' =>'No'))?> Transactions
					</span> Recent Transactions </header>
					<table class="table table-striped m-b-none text-sm">
						<thead>
							<tr>
								<th>TXN ID</th>
								<th>Reg No</th>
								<th>Amount</th>
								<th width="70"></th>
							</tr> </thead> <tbody>
							<?php
									if (!empty($transactions)) {
									foreach ($transactions as $key => $t) { ?>
							<tr>
								<td><?=$t->txn_id?> </td>
								<td><?=$t->reg_no?> </td>
								<td><?=$this->config->item('currency')?> <?=number_format($t->amount)?> </td>
								<td class="text-left"><div class="btn-group"> 
								<button class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">Action  <span class="caret"></span>
								</button> 
									<ul class="dropdown-menu"> 
									<li><a href="<?=base_url()?>finance/payments/view_txn/<?=$t->fee_id?>">View Transaction</a></li> 
									<li><a href="<?=base_url()?>finance/payments/view_txn/<?=$t->fee_id?>">View Issues</a></li> 
									</ul> 
									</div>
								</td>
							</tr>
							<?php }} ?>
							</tbody>
						</table> </section>
					</div>
					<div class="col-lg-4">
						<section class="panel panel-default">
						<header class="panel-heading">Monthly Statistics</header>
						<table class="table table-striped m-b-none text-sm">
							<thead>
								<tr>
									<th>Stats </th>
									<th>Month</th>
									<th width="70"></th>
								</tr> </thead> <tbody>
								<?php
									foreach ($payment_stat as $key => $p) { ?>
								<tr>								
									<td>
										<div class="sparkline" data-bar-color="#5cb85c" data-type="bar" data-height="19">
											<!--20,10,15,21,12,5,21,30,24,15,8,19-->
										</div>
									</td>
									<td><?=$p->month_paid?>/<?=$p->year_paid?> mm/yyyy</td>
									<td class="text-info"> <i class="fa fa-level-up"></i> 
									<?=$this->user_profile->get_fee_average($p->year_paid,$p->month_paid)?>%
									</td>
								</tr>

								<?php  } ?>
								 </tbody>
							</table> </section>
						</div></div>
						<div class="row">
							<div class="col-md-8">
								<section class="panel panel-default portlet-item">
									<header class="panel-heading">
										<ul class="nav nav-pills pull-right">
											<li> <a href="portlet.html#" class="panel-toggle text-muted"><i class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a> </li>
										</ul> Latest News
										<span class="badge bg-info">
										<?php $this->db->where('deleted','No');
											$query = $this->db->get('news');
											if ($query->num_rows() > 0){
												echo $query->num_rows();
											}
										?>
									</span> </header> <section class="panel-body">
									<?php
									if (!empty($news)) {
									foreach ($news as $key => $post) { ?>
									<?php
												$icons = ["calendar", "laptop", "leaf","rocket"];
												$k = array_rand($icons);
									?>
									<article class="media">
									<div class="pull-left">
										<span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-<?=$icons[$k]?> fa-stack-1x text-white"></i>
										</span>
									</div>
									<div class="media-body"> <a href="#" class="h4"><?=$post->title?></a> <small class="block m-t-xs"><?=$post->desc?></small>
										<em class="text-xs">Posted on
										<span class="text-danger"><?=strftime("%B %d, %Y", strtotime($post->date_posted)) ?>
										</span></em>
									</div> </article>
									<div class="line pull-in"></div>
									<?php } } ?>
								</section> </section>
							</div>
							<div class="col-md-4"> <section class="panel b-light">
							<header class="panel-heading bg-primary dker no-border"><strong>Upcoming Events</strong></header>
							
							<div class="list-group">
								<?php
									if (!empty($upcoming_events)) {
								foreach ($upcoming_events as $key => $event) { ?>
								<?php
									$colors = ["info", "success", "danger",];
									$k = array_rand($colors);
								?>
								<a href="#" class="list-group-item text-ellipsis">
								<span class="badge bg-<?=$colors[$k]?>"><?=$event->event_date?>
								</span> <?=$event->title?> </a>
								<?php } } ?>
							</div> </section>
						</div>
					</div>
				</section>
			</section>
		<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>