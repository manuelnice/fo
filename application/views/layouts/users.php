<!DOCTYPE html>
<html lang="en" class="app">

<head> 
    <meta charset="utf-8" /> 
    <meta name="description" content="">
    <meta name="author" content="William Mandai">
    <meta name="keyword" content="Kabarak University Student portal developed and maintained by William Mandai">
    <link rel="shortcut icon" href="<?=IMG_URL?>favicon.ico">

    <title><?php  echo $template['title'];?></title>

    <!-- Bootstrap core CSS --> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

<link rel="stylesheet" href="<?=CSS_URL?>app.v2.css" type="text/css" /> 

<link rel="stylesheet" href="<?=CSS_URL?>font.css" type="text/css" cache="false" /> 
<?php if ($page == lang('projects') OR $page == lang('add_invoice') OR $this->uri->segment(3) == 'edit' OR $this->uri->segment(3) == 'add') { ?>
  <link rel="stylesheet" href="<?=JS_URL?>slider/slider.css" type="text/css" cache="false" /> 
  <link rel="stylesheet" href="<?=JS_URL?>datepicker/datepicker.css" type="text/css" cache="false" />
<?php } ?>

<?php
if ($this->uri->segment(2) == 'update' OR $this->uri->segment(1) == 'messages' OR $this->uri->segment(3) == 'add' OR $this->uri->segment(3) == 'edit' OR $this->uri->segment(3) == 'send') { ?>
<link rel="stylesheet" href="<?=JS_URL?>select2/select2.css" type="text/css" cache="false" />
<link rel="stylesheet" href="<?=JS_URL?>select2/theme.css" type="text/css" cache="false" />
<?php } ?>
<?php
if ($this->uri->segment(2) == 'help') { ?>
 <link rel="stylesheet" href="<?=JS_URL?>intro/introjs.css" type="text/css" cache="false" /> 
<?php }  ?>
<link rel="stylesheet" href="<?=JS_URL?>calendar/bootstrap_calendar.css" type="text/css" cache="false" /> 
<!--[if lt IE 9]> 
<script src="js/ie/html5shiv.js" cache="false">
</script> 
<script src="js/ie/respond.min.js" cache="false">
</script> 
<script src="js/ie/excanvas.js" cache="false">
</script> <![endif]-->

</head>

<body> 
<section class="vbox"> 

<!--header start-->
      <?php  echo modules::run('sidebar/top_header');?>
      <!--header end-->


<section> 
<section class="hbox stretch"> 
<?php
if ($this->tank_auth->user_role($this->tank_auth->get_role_id()) == 'admin') {
      echo modules::run('sidebar/admin_menu');
    }elseif ($this->tank_auth->user_role($this->tank_auth->get_role_id()) == 'collaborator') {
      echo modules::run('sidebar/collaborator_menu');
    }else{
      echo modules::run('sidebar/client_menu');
    }
?>
<!--main content start-->
      <?php  echo $template['body'];?>
      <!--main content end-->


 <aside class="bg-light lter b-l aside-md hide" id="notes"> 

<div class="wrapper">Notification
</div> </aside> 
</section> 
</section> 
</section> 
<script src="<?=JS_URL?>jquery-2.1.1.min.js"></script>
<script src="<?=JS_URL?>app.v2.js"></script>
<script src="<?=JS_URL?>charts/easypiechart/jquery.easy-pie-chart.js" cache="false"></script>
        <script src="<?=JS_URL?>charts/sparkline/jquery.sparkline.min.js" cache="false"></script>

<!-- Bootstrap --> 
<!-- js placed at the end of the document so the pages load faster -->

<?php  echo modules::run('sidebar/scripts');?>
<?php
if ($this->uri->segment(3) == 'details') { ?>
<script type="text/javascript">
$('[data-toggle="tabajax"]').click(function(e) {
    var $this = $(this),
        loadurl = $this.attr('href'),
        targ = $this.attr('data-target');

    $.get(loadurl, function(data) {
        $(targ).html(data);
    });

    $this.tab('show');
    return false;
});
</script>
<?php } ?>
</body>
</html>