<!-- .aside -->
<aside class="bg-black lter b-r aside-md hidden-print" id="nav">
  <section class="vbox">
    <header class="header bg-success lter text-center clearfix">
      <div class="btn-group">
        <button type="button" class="btn btn-sm btn-dark btn-icon" title="Links"><i class="fa fa-link"></i></button>
        <div class="btn-group hidden-nav-xs">
          <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"> <?=lang('quick_links')?>
          <span class="caret">
          </span> </button>
          <ul class="dropdown-menu text-left">
            <li><a href="<?=base_url()?>clients/conversation/send"><?=lang('send_message')?></a></li>
            <li><a href="<?=base_url()?>clients/bug_view/add" data-toggle="ajaxModal"><?=lang('new_bug')?></a></li>
            <li><a href="<?=base_url()?>clients/profile"><?=lang('my_profile')?></a></li>
          </ul>
        </div>
      </div> </header>
      <section class="w-f scrollable">
        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
          <!-- nav -->
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
              <li class="<?php if($page == lang('home')){echo  "active"; }?>">
                <a href="<?=base_url()?>clients"> <i class="fa fa-dashboard icon"> <b class="bg-info"></b> </i>
              <span><?=lang('home')?></span> </a> </li>

              
              <li class="<?php if($page == lang('projects')){echo  "active"; }?>"> <a href="<?=base_url()?>clients/projects" > <i class="fa fa-coffee icon"> <b class="bg-success"></b> </i>
              <span><?=lang('projects')?> </span> </a> </li>

              <li class="<?php if($page == lang('messages')){echo  "active"; }?>"> <a href="<?=base_url()?>clients/messages" > <b class="badge bg-danger pull-right"><?=$this->user_profile->count_rows('messages',array('user_to'=>$this->tank_auth->get_user_id(),'status' => 'Unread'))?></b> <i class="fa fa-envelope-o icon"> <b class="bg-info"></b> </i>
              <span><?=lang('messages')?> </span> </a> </li> 
              
              <li class="<?php if($page == lang('invoices')){echo  "active"; }?>">
                <a href="<?=base_url()?>clients/inv_manage" > <i class="fa fa-shopping-cart icon"> <b class="bg-danger"></b> 
                </i>
                <span><?=lang('invoices')?> </span> </a> </li>  

              <li class="<?php if($page == lang('bug_tracking')){echo  "active"; }?>"> <a href="<?=base_url()?>clients/bugs" > <i class="fa fa-bug icon"> <b class="bg-danger"></b> </i>
                <span><?=lang('bug_tracking')?> </span> </a> </li>   

                          

              

             
                
                
              </ul> </nav>
              <!-- / nav -->
            </div>
          </section>
          <footer class="footer lt hidden-xs b-t b-black">
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
    <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-info btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>
    <div class="btn-group hidden-nav-xs"> <button type="button" title="Chats" class="btn btn-icon btn-sm btn-black " data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button> <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-black" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
    </div>
  </footer>

  
</section>
</aside>
<!-- /.aside -->