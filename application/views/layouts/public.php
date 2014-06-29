<!DOCTYPE html>
<html>
<head>
<title><?php  echo $template['title'];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php
if(isset($meta_desc)) {  
    echo $meta_desc; 
} else {  
    echo $this->config->item('site_desc'); 
}?>">
<meta name="author" content="<?=$this->config->item('site_author')?>">
<!-- Google Webfont -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- CSS -->
<meta name="p:domain_verify" content="7dfdbadf079dc909f89c1685d87fce81"/>
<link href="<?=CSS_URL?>bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?=CSS_URL?>style.min.css" rel="stylesheet" media="screen">
<!-- Font Icon -->
<link href="<?=FA_URL?>font-awesome.min.css" rel="stylesheet" media="screen">
<link href="<?=CSS_URL?>animate.css" rel="stylesheet">
<link rel="shortcut icon" href="<?=IMG_URL?>favicon.ico">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="<?=JS_URL?>html5shiv.js"></script>
      <script src="<<?=JS_URL?>respond.min.js"></script> 
     <![endif]-->
</head>
<body>
<!-- Header Start -->
<header>
<div class="headerstrip">
    <div class="container">
      <div class="pull-left welcometxt"><?php if($this->tank_auth->get_username()){ ?>You are signed in as: <a style="color:#f8f0eb;" href="<?=base_url()?>user/<?=$this->tank_auth->get_username()?>"><?php echo $this->tank_auth->get_username(); ?></a> <?php }else{ ?> Welcome to <?=$this->config->item('company_name')?>  ,<a class="orange" href="<?=base_url()?>auth/login">Login</a> or <a class="orange" href="<?=base_url()?>auth/register">Create new account</a><?php } ?> </div>
      <!-- Top Nav Start -->
      <div class="pull-right">
        <div class="navbar" id="topnav">
          <div class="navbar-inner">
            <ul class="nav">
             <?php if($this->tank_auth->get_username()){ ?>
              <li><a class="home active" href="<?=base_url()?>author_dashboard" ><i class="icon-dashboard"></i> Author Dashboard </a> </li>
              <?php }else{ ?>
              <li><a href="<?=base_url()?>" class="home active"><i class="icon-home"></i> Home </a> </li>
                <?php } ?>
              <li><a href="<?=base_url()?>pages/browse/affiliates-program" class="myaccount"><i class="icon-external-link"></i> Affiliates </a> </li>
              <li><a href="<?=base_url()?>pages/browse/payment-rates" class="shoppingcart"><i class="icon-bar-chart"></i> Payment Rates </a> </li>
              <li><a href="http://support.bootstrapstore.net" target="_blank" class="shoppingcart"><i class="icon-question-sign"></i> Support</a> </li>
              <?php if($this->tank_auth->get_username()){ ?>
              <li><a href="<?=base_url()?>auth/logout" class="checkout"><i class="icon-lock"></i> Logout </a> </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- Top Nav End -->
      
    </div>
  </div>
<div class="headerdetails">
    <div class="container"> <a class="logo pull-left" href="<?=base_url()?>"><img title="<?=$this->config->item('company_name')?>" alt="<?=$this->config->item('company_name')?>" src="<?=IMG_URL?>logo.png"></a> 
      <!--Social -->
      <div class="socialtop pull-right">
        <div class="call"><i class="icon-thumbs-up"></i> <span class="orange"> Follow Us</span></div>
        <ul class="pull-right">
          <li><a href="https://facebook.com/bootstrapstore" class="tooltip-test" data-original-title="Facebook"><i class="icon-facebook"></i></a></li>
          <li><a href="https://twitter.com/bootstrapstore" class="tooltip-test" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
          <li><a href="https://plus.google.com/+bootstrapstorenet1" class="tooltip-test" data-original-title="Google Plus"><i class="icon-google-plus"></i></a></li>
          <li><a href="https://pinterest.com/bootstrapstore" class="tooltip-test" data-original-title="Pinterest"><i class="icon-pinterest"></i></a></li>
        </ul>
      </div>
            <!--Earning top stats -->
      <?php  echo modules::run('sidebar/earnings');?>
      <!--Top Search -->
      <?php  echo modules::run('sidebar/top_search');?>
    </div>
  </div>
  <div id="mainmenu"  class="mb40"> 
    <!-- Navigation -->
    <?php  echo modules::run('sidebar/public_nav');?>
  </div>
</header>
<!-- Header End -->
<div id="maincontainer"> 
<?php  echo $template['body'];?>

  
  <!-- Newsletter-->
  <section class="mt40 m0 newsletter" id="newslettersignup">
    <div class="container">
      <div class="pull-left">
        <h2 class="heading2"><span class="maintext"><i class="icon-envelope"></i> Newsletters Signup</span></h2>
        Sign up to Our Newsletter &amp; get monthly newsletters delivered to your mail. </div>
      <div class="pull-right mt20">
      <form action="<?=$this->config->item('mailchimp_form')?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank" novalidate>
  <div class="input-prepend">
                                    <input type="email" placeholder="Subscribe to Newsletter" id="mce-EMAIL" name="EMAIL" class="subscribeinput" required>                                    
  <input type="submit" value="<?=lang('subscribe')?>" name="subscribe" id="mc-embedded-subscribe" class="btn btn-orange">
  </div>
</form>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer id="footer">
    <section class="footersocial">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-xs-12 col-sm-6  recentpost">
            <h2> <i class="icon-link"></i> Links </h2>
            <ul class="unstyled listoption5">
                        <li><a href="http://support.bootstrapstore.net" target="_blank"><?=lang('support')?></a> - Have a question?</li>
                        <li><a href="<?=base_url()?>pages/browse/affiliates-program"><?=lang('affiliates')?></a> - Be part of us</li>
                        <li><a href="http://support.bootstrapstore.net"><?=lang('help_topics')?></a> - Knowledgebase</li>
                        <li><a href="<?=base_url()?>pages/browse/terms"><?=lang('terms_condition')?></a> </li>
                        <li><a href="<?=base_url()?>pages/browse/attribution"><?=lang('our_attributions')?></a> - Our Thanks </li>
                    </ul>
          </div>
          <div class="col-lg-3 col-xs-12 col-sm-6 contact">
            <h2> <i class="icon-star"></i> Why Us? </h2>
            <p>Get the best premium bootstrap themes starting from $6.</p>
            <ul class="unstyled listoption5">
                        <li>100% Responsive Designs</li>
                        <li>Easily customizable Themes</li>
                        <li>Life-time Affiliates Program</li>
                        <li>Excellent Support Package</li>
                        <li>Upto <span style="color:#fff;">80% Commission rate</span></li>
                    </ul>
          </div>
          <div class="col-lg-3 col-xs-12 col-sm-6 twitter">
            <h2> <i class="icon-twitter-sign"></i> About Bootstrap </h2>
            <p><span style="color:#fff;">Sleek, intuitive, and powerful</span> front-end framework for faster and easier web development. Starts your next project using Bootstrap.</p>
            <ul class="unstyled listoption5">
                            <li>Base styling for most HTML elements</li>
                            <li>Bundled Javascript plugins</li>
                            <li><a href="http://getbootstrap.com/getting-started/" target="_blank">Good documentation</a></li>
                            <li>Growing community of users</li>
                    </ul>
          </div>
          <div class="col-lg-3 col-xs-12 col-sm-6">
            <h2> <i class="icon-usd"></i> Sell with Us </h2>
 <article id="marketplace-stats" class="stats ">
    <?php
        $query = $this->db->get('users'); if ($query->num_rows() > 0) {  $users = $query->num_rows(); }  ?>
         <?php
        $query = $this->db->get('downloads'); if ($query->num_rows() > 0) { $downloads = $query->num_rows(); }else{ $downloads = 0;} ?>
        <?php
        $query = $this->db->get('items'); if ($query->num_rows() > 0) { $items = $query->num_rows(); }else{ $items = 0;} ?>
        <?php
  $this->db->select_sum('author_comm'); $query = $this->db->get('sales'); if ($query->num_rows() > 0) { $row = $query->row(); 
       $commission = $row->author_comm;  }else{ $commission = 0; }    ?>

    <div class="stat">
        <span class="round">

            <?=number_format($users);?>     </span>
        <span>Members</span>
    </div>
    <div class="stat">
        <span class="round"><?=number_format($downloads)?></span>
        <span>Downloads</span>
    </div>
    <div class="stat">
        <span class="round"><?=number_format($items)?></span>
        <span>Themes</span>
    </div>
    <div class="stat">
        <span class="round">$ <?=number_format($commission)?></span>
        <span>Paid Commissions</span>
    </div>
</article>
            
          </div>
        </div>
      </div>
    </section>
    <section id="quicklink">
      <div class="container">
        <div class="row">
          <ul class="quicklinks">
            <li><a href="http://getbootstrap.com/" target="_blank">Bootstrap v3</a></li>
            <li><a href="http://getbootstrap.com/2.3.2" target="_blank">Bootstrap Docs</a></li>
            <li><a href="http://fontawesome.io" target="_blank">Font Awesome</a></li>
            <li><a href="http://bootsnipp.com/resources" target="_blank">Bootstrap Resources</a></li>
            <li><a href="http://bootstrapcdn.com" target="_blank">Bootstrap CDN</a> </li>
            <li><a href="http://bootstrapstore.net/pages/faqs" target="_blank">FAQs</a> </li>
            <li><a href="http://bootstrapstore.net/pages/browse/attribution" target="_blank">About Us </a> </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="copyrightbottom">
      <div class="container">
        <div class="row">
          <div class="pull-left"> Copyright &copy; <?=date('Y')?> <?=$this->config->item('company_name')?>. All rights reserved </div>
        </div>
      </div>
    </section>
  </footer>
  <!-- Got to top --> 
  <a id="gotop"><i class="icon-circle-arrow-up"></i></a> 

  </div>

<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?=JS_URL?>jquery.js"></script>
 <script src="<?=JS_URL?>bootstrap.min.js"></script> 
<script src="<?=JS_URL?>jquery-migrate-1.2.1.js"></script> 
<script src="<?=JS_URL?>easing-inview.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 

<!-- jQuery Animation --> 
<!-- include jQuery + carouFredSel plugin --> 
<script type="text/javascript" src="<?=JS_URL?>jquery.carouFredSel-6.2.1-packed.js"></script> 
<!-- optionally include helper plugins  for carouFredSel--> 
<script type="text/javascript" src="<?=JS_URL?>jquery.mousewheel.min.js"></script> 
<script type="text/javascript" src="<?=JS_URL?>jquery.touchSwipe.min.js"></script> 
<script type="text/javascript" src="<?=JS_URL?>jquery.transit.min.js"></script> 
<!-- Jquery Flexslider--> 
<script defer src="<?=JS_URL?>jquery.flexslider.js"></script> 
<!-- Jquery zoom on product page--> 
<script defer src="<?=JS_URL?>zoomsl-3.0.min.js"></script> 

<!-- Ratina View --> 
<script type="text/javascript" src="<?=JS_URL?>retina-1.1.0.min.js"></script> 

<!-- Custom --> 
<script defer src="<?=JS_URL?>custom.min.js"></script>

<?php
if ($this->uri->segment(2) == 'credentials' OR $this->uri->segment(2) == 'downloads') { ?>
    <script type="text/javascript">
jQuery(function($) {
    $('form[data-async]').live('submit', function(event) {
        var $form = $(this);
        var $target = $($form.attr('data-target'));
 
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
 
            success: function(data, status) {
                $target.html(data);
            }
        });
 
        event.preventDefault();
    });
});
</script>
<?php } ?> 
</body>
</html>
