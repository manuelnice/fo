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
		window.jQuery || document.write("<script src='<?=JS_URL?>jquery-1.9.1.min.js'>\x3C/script>");
		</script>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	
	<script src="<?=JS_URL?>chart/highcharts.js"></script>


	<div id="g_render"  class="left">
		<?php if (isset($charts)) echo $charts; ?>
		<?php if (isset($json)): ?>
			<h3>Json string output: associative array with global options and 'local options' (for each graph)</h3>
			<pre><?php echo print_r($json); ?></pre>
		<?php endif; if (isset($array)): ?>
			<h3>Array output: associative array with global options and 'local options' (for each graph)</h3>
			<pre><?php echo print_r($array); ?></pre>
		<?php endif; ?>
	</div>
	</section>
	</div>
	</div>
	</section>
	</section>
	</section>