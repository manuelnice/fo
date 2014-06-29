<section id="content"> 
<section class="vbox">
	<header class="header bg-light bg-gradient b-b">
	<p>Exam Results</p> </header>
	<section class="scrollable wrapper">
		
		<div class="row">
			<div class="col-sm-6">
<section class="panel panel-default"> 

<header class="panel-heading">Year One Transcripts</header> 
<section class="panel-body"> 
<div class="list-group bg-white"> 
							<?php
							if (!empty($year_one)) {
							foreach ($year_one as $key => $one) { ?>
							<?php if ($one->grade == 'A') { $badge = 'success'; }elseif ($one->grade == 'B') {
								$badge = 'info'; }elseif ($one->grade == 'C') { $badge = 'danger'; }else{ $badge = 'dark'; } ?>
			<a href="list.html#" class="list-group-item"> 
			<span class="badge bg-<?=$badge?>"><?=$one->grade?> </span> <i class="fa fa-star icon-muted fa-fw"></i> <?=$one->unit_name?> </a> 
							<?php }}else{ echo "Nothing to Display Here"; } ?>

				</div>
 </section> 
 </section>
 </div>
			<div class="col-sm-6">
<section class="panel panel-default"> 

<header class="panel-heading">Year Two Transcripts</header> 
<section class="panel-body"> 
<div class="list-group bg-white"> 
							<?php
							if (!empty($year_two)) {
							foreach ($year_two as $key => $two) { ?>
							<?php if ($two->grade == 'A') { $badge = 'success'; }elseif ($two->grade == 'B') {
								$badge = 'info'; }elseif ($two->grade == 'C') { $badge = 'danger'; }else{ $badge = 'dark'; } ?>
			<a href="list.html#" class="list-group-item"> 
			<span class="badge bg-<?=$badge?>"><?=$two->grade?> </span> <i class="fa fa-star icon-muted fa-fw"></i> <?=$two->unit_name?> </a> 
							<?php }}else{ echo "Nothing to Display Here"; } ?>

				</div>
 </section> 
 </section>
 </div>
 <div class="col-sm-6">
<section class="panel panel-default"> 

<header class="panel-heading">Year Three Transcripts</header> 
<section class="panel-body"> 
<div class="list-group bg-white"> 
							<?php
							if (!empty($year_three)) {
							foreach ($year_three as $key => $three) { ?>
							<?php if ($three->grade == 'A') { $badge = 'success'; }elseif ($three->grade == 'B') {
								$badge = 'info'; }elseif ($three->grade == 'C') { $badge = 'danger'; }else{ $badge = 'dark'; } ?>
			<a href="list.html#" class="list-group-item"> 
			<span class="badge bg-<?=$badge?>"><?=$three->grade?> </span> <i class="fa fa-star icon-muted fa-fw"></i> <?=$three->unit_name?> </a> 
							<?php }}else{ echo "Nothing to Display Here"; } ?>

				</div>
 </section> 
 </section>
 </div>
 <div class="col-sm-6">
<section class="panel panel-default"> 

<header class="panel-heading">Year Four Transcripts</header> 
<section class="panel-body"> 
<div class="list-group bg-white"> 
							<?php
							if (!empty($year_four)) {
							foreach ($year_four as $key => $four) { ?>
							<?php if ($four->grade == 'A') { $badge = 'success'; }elseif ($four->grade == 'B') {
								$badge = 'info'; }elseif ($four->grade == 'C') { $badge = 'danger'; }else{ $badge = 'dark'; } ?>
			<a href="list.html#" class="list-group-item"> 
			<span class="badge bg-<?=$badge?>"><?=$four->grade?> </span> <i class="fa fa-star icon-muted fa-fw"></i> <?=$four->unit_name?> </a> 
							<?php }}else{ echo "Nothing to Display Here"; } ?>

				</div>
 </section> 
 </section>
 </div>	
	</div> 
	</section> 
	</section> 
	<a href="list.html#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>