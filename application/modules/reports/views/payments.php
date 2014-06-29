 <section id="content"> <section class="vbox"> <section class="scrollable padder"> 
<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 
<li><a href=""><i class="fa fa-home"></i> Home</a></li> 
<li><a href="#">Reports</a></li> 
<li class="active">Yearly Statistics</li> 
</ul> 
<!-- flashdata -->
<?php  echo modules::run('sidebar/flash_msg');?>
<!-- / flashdata -->

<div class="row"> 

<div class="col-sm-12"> 
<section class="panel panel-default">
<header class="panel-heading"> Payment Reports </header>
			
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
		window.jQuery || document.write("<script src='<?=base_url();?>assets/default/js/jquery-1.9.1.min.js'>\x3C/script>");
		</script>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script src="<?=base_url();?>assets/default/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/default/js/chart/highcharts.js"></script>


	<div id="g_render"  class="left">
		<?php if (isset($charts)) echo $charts; ?>
		
	</div>
	</section>
	</div>	</div>
	</section></section></section>

			
			
			
	  <!--/chart-->