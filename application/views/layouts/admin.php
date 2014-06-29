<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php  echo $template['title'];?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php
if(isset($meta_desc)) {  
    echo $meta_desc; 
} else {  
    echo $this->config->item('site_desc'); 
}?>  ">
<meta name="author" content="<?=$this->config->item('site_author')?>">
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>-->

<link href="<?=CSS_URL?>bootstrap.css" rel="stylesheet">
<link href="<?=CSS_URL?>bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="<?=CSS_URL?>font-awesome.min.css">
<link href="<?=CSS_URL?>style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="<?=base_url().RES_DIR?>/img/favicon.ico">
</head>
<body>
<!-- Header Start -->
<header>
<?php 
$this->load->library('get_stuff');
$advert = $this->get_stuff->get_today_advert();
if($advert){ ?>
<div class="msg-top row-fluid">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <?=$advert?></div>
<?php } ?>
    
        
<?php  echo modules::run('home/partials/headerstrip');?>

<?php  echo modules::run('home/partials/headerdetails');?>
<div id="categorymenu">

<?php  echo modules::run('home/partials/nav');?>
</div>
</header>
<!-- Header End -->
<!-- Start maincontainer --> 
<div id="maincontainer">
  
        <div class="container"> 
            
        
            <!--  breadcrumb -->
            <ul class="breadcrumb">You are here: 
                <li> <a href="<?=base_url()?>">Home</a> <span class="divider">&raquo;</span> </li>
                <?php
                foreach ($breadcrumbs as $key => $value) { ?>
                    <li class="active"><?=$value;?> <span class="divider">/</span></li>
               <?php } ?>
            </ul>
            <div id="content">
                <?php  echo $template['body'];?>
                <div class="clearfix"></div>
            </div>
        </div>
    
</div>


<!-- /maincontainer --> 
<!-- Footer -->
<footer id="footer">
    <section class="footersocial">
        <div class="container">
            <div class="row">
                <div class="span3 info">
                    <h2> <i class="icon-link"></i> <?=lang('links')?> </h2>
                    <ul>
                        <li><a href="http://support.thememisty.com" target="_blank"><?=lang('support')?></a> - Have a question?</li>
                        <li><a href="<?=base_url()?>pages/browse/affiliates"><?=lang('affiliates')?></a> - Be part of us</li>
                        <li><a href="http://support.thememisty.com"><?=lang('help_topics')?></a> - Knowledgebase</li>
                        <li><a href="<?=base_url()?>pages/browse/terms"><?=lang('terms_condition')?></a> </li>
                        <li><a href="<?=base_url()?>pages/browse/attribution"><?=lang('our_attributions')?></a> - Our Thanks </li>
                    </ul>
                </div>
                <div class="span3 contact">
                    <h2> Why Us? </h2>
                    <p>Get the best premium <a href="<?=base_url()?>themes/browse/all?sort=popular">bootstrap themes</a> at prices ranging from <span style="color:#fff;">$6 to $40 </span></p>
                    <ul style="margin-left:10px;">
                        <li style="list-style-image:url(<?=base_url().RES_DIR?>/img/list.png)">One site for every screen</li>
                        <li style="list-style-image:url(<?=base_url().RES_DIR?>/img/list.png)">Elegant and creative Designs</li>
                        <li style="list-style-image:url(<?=base_url().RES_DIR?>/img/list.png)">Professional Customer Support</li>
                        <li style="list-style-image:url(<?=base_url().RES_DIR?>/img/list.png)">Upto <span style="color:#fff;">80% Commission rate</span></li>
                    </ul>
                </div>
                <div class="span3 twitter">
                    <h2> Why Bootstrap? </h2>
                    <p><span style="color:#fff;">Sleek, intuitive, and powerful</span> front-end framework for faster and easier web development. Impress your clients with <span style="color:yellow;">bootstrap.</span>
                        <ul>
                        <li style="list-style-image:url(<?=base_url().RES_DIR?>/img/list.png)">Base styling for most HTML elements</li>
                            <li style="list-style-image:url(<?=base_url().RES_DIR?>/img/list.png)">Bundled Javascript plugins</li>
                            <li style="list-style-image:url(<?=base_url().RES_DIR?>/img/list.png)"><a href="http://getbootstrap.com/getting-started/" target="_blank">Good documentation</a></li>

                        </ul><a href="https://github.com/twbs/bootstrap/releases/download/v3.0.0/bootstrap-3.0.0-dist.zip" target="_blank">Download Bootstrap v. 3.0</a></p>
                    <!--<div id="twitter"> </div>-->
                </div>
                <div class="span3 facebook">
                    <h2> <i class="icon-thumbs-up"></i> Sell with us </h2>
<!--
                  <span class='st_facebook_vcount' displayText='Facebook'></span>
<span class='st_twitter_vcount' displayText='Tweet'></span>
<span class='st_pinterest_vcount' displayText='Pinterest'></span>
<span class='st_googleplus_vcount' displayText='Google +'></span>
<span class='st_fblike_vcount' displayText='Facebook Like'></span>
<span class='st_twitterfollow_vcount' displayText='Twitter Follow' st_username='thememisty'></span> -->
<article id="marketplace-stats" class="stats clearfix">
    <?php
        $query = $this->db->get('users'); if ($query->num_rows() > 0) {  $users = $query->num_rows(); }  ?>
         <?php
        $query = $this->db->get('downloads'); if ($query->num_rows() > 0) { $downloads = $query->num_rows(); }else{ $downloads = 0;} ?>
        <?php
        $query = $this->db->get('items'); if ($query->num_rows() > 0) { $items = $query->num_rows(); }else{ $items = 0;} ?>
        <?php
  $this->db->select_sum('author_comm'); $query = $this->db->get('sales'); if ($query->num_rows() > 0) { $row = $query->row(); 
       $commission = $row->author_comm;  }else{ $commission = 0; }    ?>

    <div class="stat row-fluid">
        <span class="round">

            <?=number_format($users);?>     </span>
        <span>Members</span>
    </div>
    <div class="stat row-fluid">
        <span class="round"><?=number_format($downloads)?></span>
        <span>Downloads</span>
    </div>
    <div class="stat row-fluid">
        <span class="round"><?=number_format($items)?></span>
        <span>Marketplace items</span>
    </div>
    <div class="stat row-fluid">
        <span class="round">$ <?=number_format($commission)?></span>
        <span>Paid Commissions</span>
    </div>
</article><hr style="margin:2px;">
<img style = "width:40px;" src="<?php echo base_url()?>resource/img/chrome.png" 
                            alt="Google Chrome">
                            <img style = "width:40px;" src="<?php echo base_url()?>resource/img/ff.png" 
                            alt="Firefox">
                            <img style = "width:40px;" src="<?php echo base_url()?>resource/img/opera.png" 
                            alt="Opera Browser">
                            <img style = "width:40px;" src="<?php echo base_url()?>resource/img/ie.png" 
                            alt="Internet Explorer">
                            <img style = "width:40px;" src="<?php echo base_url()?>resource/img/safari.png" 
                            alt="Safari">
                            
                    <!-- BEGIN: Twitter website widget (http://twitterforweb.com) 
<div style="width:236px;font-size:8px;text-align:right;"><script type="text/javascript">
document.write(unescape("%3Cscript src='http://twitterforweb.com/twitterbox.js?username=thememisty&settings=1,1,3,236,250,f4f4f4,1,c4c4c4,101010,1,1,336699' type='text/javascript'%3E%3C/script%3E"));</script></div>
END: Twitter website widget (http://twitterforweb.com) -->
                </div>
            </div>
        </div>
    </section>
    <section class="copyrightbottom">
        <div class="container">
            <div class="row">
                <div class="span4 social">
                    <ul>
                        <li><a href="http://www.facebook.com/thememisty" target="_blank"><i class="icon-facebook orange"></i></a></li>
                        <li><a href="http://www.twitter.com/thememisty" target="_blank"><i class="icon-twitter orange"></i></a></li>
                        <li><a href="http://plus.google.com/+thememistym" target="_blank"><i class="icon-google-plus orange"></i></a></li>
                        <li><a href="http://www.pinterest.com/thememisty" target="_blank"><i class="icon-pinterest orange"></i></a></li>
                    </ul>
                </div>
                <div class="span3 textcenter" style="font-size:12px;"> <?=$this->config->item('company_name')?> &copy; <?=date('Y');?> </div>
                <div class="span5 paymentsicons"> <img title="PayPal" alt="paypal" src="<?php echo base_url()?>resource/img/payment_paypal.png"> <img title="American Express" alt="american-express" src="<?php echo base_url()?>resource/img/payment_american.png"> <img title="2checkout" alt="2checkout" src="<?php echo base_url()?>resource/img/payment_2checkout.png"> <img title="Maestro" alt="maestro" src="<?php echo base_url()?>resource/img/payment_maestro.png"> <img title="Discover" alt="discover" src="<?php echo base_url()?>resource/img/payment_discover.png"> </div>
            </div>
        </div>
    </section>
    <a id="gotop" style="position: fixed;bottom: 2px;right: 5px;width: 58px;display: block;overflow: hidden;" href="#"> <i class=" icon-circle-arrow-up"></i></a> </footer>
<!-- javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
<script src="<?=JS_URL?>jquery.js"></script> 
<script type="text/javascript" src="<?=JS_URL?>jquery.easing.js"></script> 
<script src="<?=JS_URL?>respond.min.js"></script> 
<script src="<?=JS_URL?>bootstrap.min.js"></script> 

<script defer src="<?=JS_URL?>jquery.fancybox.js"></script> 
<script defer src="<?=JS_URL?>jquery.flexslider.js"></script>
<script  type="text/javascript" src="<?=JS_URL?>jquery.validate.js"></script> 
<script type="text/javascript"  src="<?=JS_URL?>jquery.mousewheel.min.js"></script> 
<script type="text/javascript"  src="<?=JS_URL?>jquery.touchSwipe.min.js"></script>
<script defer src="<?=JS_URL?>custom.js"></script>

<script defer src="<?=JS_URL?>readmore.min.js"></script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "c233ec64-1e61-4d7b-8803-a67292b997b1", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<!--
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "c233ec64-1e61-4d7b-8803-a67292b997b1", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
-->
<script>
$(document).ready(function() {
 $('.html-comment').readmore({
  speed: 75,
  moreLink: '<a href="#"><i class="icon icon-plus"></i> Read More</a>',
  lessLink: '<a href="#"><i class="icon icon-minus"></i> Hide</a>',
  maxHeight: 200
});
});
</script>
<script>
$(document).ready(function() {
 $('.user-comment').readmore({
  speed: 75,
  maxHeight: 150
});
});
</script>
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
<script type="text/javascript">
    var resizeTextarea = function() {
    this.style.height = "";

    var
        $this = $(this),            
        outerHeight = $this.outerHeight(),
        scrollHeight = this.scrollHeight,
        innerHeight = $this.innerHeight(),
        magic = outerHeight - innerHeight;
    this.style.height = scrollHeight + magic + "px";
};

// keydown is too soon and keyup only happens AFTER the character is inserted,
// so the screen would have updated already.
// So just set overflow: hidden on the textarea.
// not sure about cut/paste events.
$('textarea')
    .keydown(resizeTextarea)
    .keyup(resizeTextarea)
    .change(resizeTextarea)
    .focus(resizeTextarea);
</script>

<script type="text/javascript">/*
 * Url preview script 
 * powered by jQuery (http://www.jquery.com)
 * 
 * written by Alen Grakalic (http://cssglobe.com)
 * 
 * for more info visit http://cssglobe.com/post/1695/easiest-tooltip-and-image-preview-using-jquery
 *
 */
 
this.screenshotPreview = function(){    
    /* CONFIG */
        
        xOffset = 10;
        yOffset = 30;
        
        // these 2 variable determine popup's distance from the cursor
        // you might want to adjust to get the right result
        
    /* END CONFIG */
    $("a.screenshot").hover(function(e){
        this.t = this.title;
        this.title = "";    
        var c = (this.t != "") ? "<br/>" + this.t : "";
        $("body").append("<p id='screenshot'><img src='"+ this.rel +"' alt='Image preview' />"+ c +"</p>");                                
        $("#screenshot")
            .css("top",(e.pageY - xOffset) + "px")
            .css("left",(e.pageX + yOffset) + "px")
            .fadeIn("fast");                        
    },
    function(){
        this.title = this.t;    
        $("#screenshot").remove();
    }); 
    $("a.screenshot").mousemove(function(e){
        $("#screenshot")
            .css("top",(e.pageY - xOffset) + "px")
            .css("left",(e.pageX + yOffset) + "px");
    });         
};


// starting the script on page load
$(document).ready(function(){
    screenshotPreview();
});
</script>
<script type="text/javascript">
$(document).on("click", ".open-purchase", function () {
     var amount = $(this).data('id');
     $(".modal-body #amount").val( amount );
});
</script>
</body>
</html>