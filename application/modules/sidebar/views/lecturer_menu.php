<!-- .aside -->
<aside class="bg-light lter b-r aside-md hidden-print" id="nav">
  <section class="vbox">
    <header class="header bg-primary lter text-center clearfix">
      <div class="btn-group">
        <button type="button" class="btn btn-sm btn-dark btn-icon" title="New Assignment"><i class="fa fa-plus"></i></button>
        <div class="btn-group hidden-nav-xs">
          <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"> Quick Links
          <span class="caret">
          </span> </button>
          <ul class="dropdown-menu text-left">
            <li><a href="">Share Notes</a></li>
            <li><a href="">Post Assignment</a></li>
            <li><a href="">Mailbox</a></li>
          </ul>
        </div>
      </div> </header>
      <section class="w-f scrollable">
        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
          <!-- nav -->
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
              <li class="<?php if($page == 'home'){echo  "active"; }?>">
                <a href="<?=base_url()?>lecturer"> <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i>
              <span>Home</span> </a> </li>
              <li class="<?php if($page == 'profile' OR $page == 'units' OR $page == 'students'){echo  "active"; }?>"> <a href="<?=base_url()?>" > <i class="fa fa-user icon"> <b class="bg-success"></b> </i>
                <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i>
                </span>
                <span>Account </span> </a>
                <ul class="nav lt">
                  <li class="<?php if($page == 'profile'){echo  "active"; }?>"> <a href="<?=base_url()?>profile" > <i class="fa fa-angle-right"></i>
                  <span>Profile </span> </a> </li>
                  <li class="<?php if($page == 'units'){echo  "active"; }?>"> <a href="<?=base_url()?>lecturer/units" > <i class="fa fa-angle-right"></i>
                  <span>My Units </span> </a> </li>
                  <li class="<?php if($page == 'students'){echo  "active"; }?>"> <a href="<?=base_url()?>lecturer/students" > <i class="fa fa-angle-right"></i>
                  <span>My Students </span> </a> </li>
                </ul> </li>
                <li class="<?php if($page == 'study' OR $page == 'transcripts'){echo  "active"; }?>"> <a href="<?=base_url()?>" >
                  <i class="fa fa-star icon"> <b class="bg-primary"></b> </i>
                  <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i>
                  </span>
                  <span>Exams </span> </a>
                  <ul class="nav lt">
                    <li class="<?php if($page == 'exams'){echo  "active"; }?>"> <a href="<?=base_url()?>exams/transcripts" > <i class="fa fa-angle-right"></i>
                    <span>Post Results </span> </a> </li>
                    <li class="<?php if($page == 'study'){echo  "active"; }?>"> <a href="<?=base_url()?>exams" > <i class="fa fa-angle-right"></i>
                    <span>Exam Stats </span> </a> </li>
                  </ul> </li>
                  <li class="<?php if($page == 'messaging'){echo  "active"; }?>"> <a href="<?=base_url()?>messaging" > <b class="badge bg-danger pull-right">3</b> <i class="fa fa-envelope-o icon"> <b class="bg-dark"></b> </i>
                  <span>Mailbox </span> </a> </li>
                  <li class="<?php if($page == 'notes' OR $page == 'assignments' OR $page == 'notice'){echo  "active"; }?>"> <a href="<?=base_url()?>tasks" > <i class="fa fa-tasks icon"> <b class="bg-success"></b> </i>
                    <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i>
                    </span>
                    <span>Tasks </span> </a>
                    <ul class="nav lt">
                      <li class="<?php if($page == 'notes'){echo "active"; } ?>"> <a href="<?=base_url()?>tasks/notes" > <i class="fa fa-angle-right"></i>
                      <span>Class Notes </span> </a> </li>
                      <li class="<?php if($page == 'assignments'){echo "active"; } ?>"> <a href="<?=base_url()?>tasks/assignments" > <i class="fa fa-angle-right"></i>
                      <span>Assignments </span> </a> </li>
                      <li class="<?php if($page == 'notice'){echo "active"; } ?>"> <a href="<?=base_url()?>tasks/notice" > <i class="fa fa-angle-right"></i>
                      <span>Notice Board </span> </a> </li>
                    </ul> </li>
                    <li class="<?php if($page == 'about'){echo  "active"; }?>"> <a href="<?=base_url()?>welcome/about" > <i class="fa fa-info-circle icon"> <b class="bg-info"></b> </i>
                    <span>About </span> </a> </li>
                  </ul> </nav>
                  <!-- / nav -->
                </div>
              </section>
              <footer class="footer lt hidden-xs b-t b-light">
                <div id="chat" class="dropup"> <section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white">
                <header class="panel-heading b-b b-light">Active chats</header>
                <div class="panel-body animated fadeInRight">
                  <p class="text-sm">No active chats.</p>
                  <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                </div> </section> </section>
              </div>
              <div id="invite" class="dropup"> <section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white">
              <header class="panel-heading b-b b-light"> John <i class="fa fa-circle text-success"></i> </header>
              <div class="panel-body animated fadeInRight">
                <p class="text-sm">No contacts in your lists.</p>
                <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
              </div>
            </section>
          </section>
        </div>
        <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>
        <div class="btn-group hidden-nav-xs"> <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button> <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
        </div>
      </footer>
    </section>
  </aside>
  <!-- /.aside -->