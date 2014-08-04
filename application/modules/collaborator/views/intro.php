<section id="content"> <section class="vbox"> 

<header class="header bg-white b-b b-light"> 

<p>Kabuportal User Guide</p> </header> <section> <section class="hbox stretch"> 
<section> 
<section class="vbox"> 
<section class="scrollable wrapper" id="userguide"> 
<!-- accordion --> 
<div class="panel-group m-b"> 
<?php
                if (!empty($faqs)) { 
foreach ($faqs as $key => $faq) { ?>

<h4 class="font-thin padder"><?=$faq->question?> </h4> 


 <?=$faq->answer?> 
<?php } } ?>


</div> 
<!-- / .accordion --> 


</section> 
</section> 
</section> 
<aside class="bg-light b-l aside-md" id="contributors"> 

<div class="wrapper bg-light" >
<header class="bg-light dk header"> 

<p>Contributors </p> </header> <section class="scrollable bg-white"> 

<div class="list-group list-group-alt no-radius no-borders"> 
<?php
foreach ($contributors as $key => $contributor) { ?>
	<a class="list-group-item" href=""> <i class="fa fa-circle text-success text-xs"></i>
	<span>
	<?php 
	echo $this->user_profile->get_fullname($contributor->contributor_id)  ? $this->user_profile->get_fullname($contributor->contributor_id) : $contributor->username?>
	</span> </a>
<?php } ?>

</div> </section>


</div> 
</aside> 
</section> </section> 
<footer class="footer bg-white b-t b-light" id="developer"> 
<?php
$this->load->library('encrypt');
$me = $this->config->item('developer');
$key = 'wm';
$encrypted_string = $this->encrypt->decode($me, $key);
?>
<p>Written by: <?=$encrypted_string?></p> </footer> 
</section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>