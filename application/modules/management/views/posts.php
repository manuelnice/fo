<section id="content"> <section class="hbox stretch">
  <!-- .aside --> <aside> <section class="vbox">
  <header class="header bg-white b-b b-light">
  <p>All posted Posts by Users</p> </header>
  <section class="scrollable wrapper">
  <?php  echo modules::run('sidebar/flash_msg');?>
    <div class="timeline"> <article class="timeline-item active">
      <div class="timeline-caption">
        <div class="panel bg-dark lter no-borders">
          <div class="panel-body">
            <span class="timeline-icon"><i class="fa fa-comments time-icon bg-primary"></i>
            </span>
            <span class="timeline-date">Friday - <?=strftime("%B %d, %Y", time()) ?>  </span>
            <h5><span>Monitor Student's Posts and Ban unwanted Posts </h5>
            <div class="m-t-sm timeline-action">
              <span class="h3 pull-left m-r-sm">Posts Review</span>
            </div>
          </div>
        </div>
      </div> </article>
      <?php
      if (!empty($posts)) {
      foreach ($posts as $key => $n) { ?>
      <?php
      if ($n->post_id % 2 == 0) { ?>
      <article class="timeline-item">
      <div class="timeline-caption">
        <div class="panel panel-default">
          <div class="panel-body">
            <span class="arrow left">
            </span>
            <span class="timeline-icon"><i class="fa fa-comments-o time-icon bg-dark"></i>
            </span>
            <span class="timeline-date"><?=strftime("%B %d, %Y", strtotime($n->date_posted)) ?></span> <h5>
            <span>Posted by </span> <?=ucfirst($n->username)?> </h5>
            <p><?=$n->post?></p>
            <hr>
            <a href="<?=base_url()?>management/posts/ban_post/<?=$n->post_id?>"  data-toggle="ajaxModal" class="btn btn-danger btn-sm"> <i class="fa fa-times"></i> Ban Post</a>
          </div>
        </div>
      </div> </article>
      <?php }else{ ?>
      <article class="timeline-item alt">
      <div class="timeline-caption">
        <div class="panel panel-default">
          <div class="panel-body">
            <span class="arrow right">
            </span>
            <span class="timeline-icon"><i class="fa fa-male time-icon bg-info"></i></span>
            <span class="timeline-date"><?=strftime("%B %d, %Y", strtotime($n->date_posted)) ?></span> <h5>
            <span>Posted by </span> <?=ucfirst($n->username)?> </h5>
            <p><?=$n->post?></p>
            <hr>
            <a href="<?=base_url()?>management/posts/ban_post/<?=$n->post_id?>"  data-toggle="ajaxModal" class="btn btn-info btn-sm"> <i class="fa fa-times"></i> Ban Post</a>
          </div>
        </div>
      </div>
      </article>
      <?php } ?>
      <?php } } else{ ?>No Posts Available <?php } ?>
      <div class="timeline-footer"><a href="#"><i class="fa fa-plus time-icon inline-block bg-dark"></i></a>
      </div>
    </div> </section> </section> </aside>
    <!-- /.aside -->
    <!-- /.aside --> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>