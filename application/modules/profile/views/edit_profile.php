<section id="content"> <section class="vbox">
  <header class="header bg-white b-b b-light">
  <p>User Profile <small>(Edit Profile)</small></p> </header>
  <section class="scrollable wrapper">
    <?php  echo modules::run('sidebar/flash_msg');?>
    <div class="row">
      <div class="col-lg-6">
        <!-- Profile Form --> <section class="panel panel-default">
      <header class="panel-heading font-bold">Profile Details</header>
      <div class="panel-body">
        <?php
        foreach ($profile as $key => $p) { ?>
        <?php
        echo form_open_multipart(uri_string()); ?>
        <input type="hidden" name="r_url" value="<?=uri_string()?>">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" class="form-control" name="fullname" value="<?=$p->fullname?>">
        </div>
        <div class="form-group">
          <label>City</label>
          <input type="text" class="form-control" name="city" value="<?=$p->city?>">
        </div>
        <div class="form-group">
          <label>Country</label>
          <select name="country" class="form-control m-b">
            <option value="<?=$p->country?>">Select Country</option>
            <?php
            if (!empty($countries)) {
            foreach ($countries as $key => $c) { ?>
            <option value="<?=$c->c_code?>"><?=$c->country?></option>
            <?php }} ?>
          </select>
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" value="<?=$p->phone?>">
        </div>
        <div class="form-group">
          <label>Program</label>
          <select name="program" class="form-control m-b">
            <option value="<?=$p->program?>">Select Program</option>
            <?php
            if (!empty($programs)) {
            foreach ($programs as $key => $pr) { ?>
            <option value="<?=$pr->pr_id?>"><?=$pr->title?></option>
            <?php }} ?>
          </select>
        </div>
        <div class="form-group">
          <label>Year of Study</label>
          <select name="yos" class="form-control m-b">
            <option value="<?=$p->year_of_study?>">Select Year</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
          </select>
        </div>
        <div class="form-group">
          <label>Semester</label>
          <select name="semester" class="form-control m-b">
            <option value="<?=$p->semester?>">Select Semester</option>
            <option value="1">One</option>
            <option value="2">Two</option>
          </select>
        </div>
        
        <button type="submit" class="btn btn-sm btn-danger">Update Profile</button>
      </form>
      <?php } ?>
    </div>
  </section>
  <!-- /profile form -->
</div>
<div class="col-lg-6">
  <!-- .comment-list --> <section class="comment-list block">
  <?php
  foreach ($posts as $key => $post) { ?>
  <article id="comment-id-1" class="comment-item"> <a class="pull-left thumb-sm avatar"> <img src="<?=IMG_URL?><?=$this->user_profile->get_profile_details($post->posted_by,'avatar')?>" class="img-circle"> </a>
  <span class="arrow left"> </span>
  <section class="comment-body panel panel-default">
    <header class="panel-heading bg-white"> <a href="<?=base_url()?>profile"><?=$this->user_profile->get_profile_details($post->posted_by,'fullname') ? $this->user_profile->get_profile_details($post->posted_by,'fullname') : $this->user_profile->get_user_details($post->posted_by,'username')?></a>
      <label class="label bg-info m-l-xs">Editor</label>
      <span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i>  <?php
      $today = time();
      $posted_time = strtotime($post->date_posted) ;
      echo $this->user_profile->get_time_diff($today,$posted_time);
    ?> ago</span> </header>
    <div class="panel-body">
      <div><?=$post->post?></div>
      <div class="comment-action m-t-sm">
        <a href="#" data-toggle="class" class="btn btn-default btn-xs active"> <i class="fa fa-star-o text-muted text"></i> <i class="fa fa-star text-danger text-active"></i> Like </a> <a href="#comment-form" class="btn btn-default btn-xs"> <i class="fa fa-mail-reply text-muted"></i> Reply </a>
      </div>
    </div> </section>
    </article>
    <?php } ?>
    <!-- .comment-reply -->
    <article id="comment-id-2" class="comment-item comment-reply"> <a class="pull-left thumb-sm avatar"> <img src="<?=IMG_URL?><?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'avatar')?>" class="img-circle"> </a>
    <span class="arrow left">
    </span> <section class="comment-body panel panel-default text-sm">
      <div class="panel-body">
        <span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> 10m ago
        </span> <a href="widgets.html#">Mika Sam</a>
        <label class="label bg-dark m-l-xs">Admin
        </label> Report this comment is helpful
      </div> </section> </article>
      <!-- / .comment-reply -->
      
      <!-- comment form --> <article class="comment-item media" id="comment-form"> <a class="pull-left thumb-sm avatar"><img src="<?=IMG_URL?><?=$this->user_profile->get_profile_details($this->tank_auth->get_user_id(),'avatar')?>" class="img-circle"></a> <section class="media-body">
      <form action="" class="m-b-none">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="What's in your mind?">
          <span class="input-group-btn"> <button class="btn btn-primary" type="button">Share</button>
          </span>
        </div>
      </form> </section> </article> </section>
      <!-- / .comment-list -->
    </div>
  </div> </section> </section> <a href="widgets.html#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>