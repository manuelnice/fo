<!DOCTYPE html>
<html lang="en" class="bg-dark">
	<head>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="<?=IMG_URL?>favicon.ico">

    	<title><?php  echo $template['title'];?></title>
		<meta name="description" content="<?=$this->config->item('site_desc')?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="stylesheet" href="<?=CSS_URL?>app.v2.css" type="text/css" />
		<link rel="stylesheet" href="<?=CSS_URL?>font.css" type="text/css" cache="false" />
		<!--[if lt IE 9]>
		<script src="js/ie/html5shiv.js" cache="false">
		</script>
		<script src="js/ie/respond.min.js" cache="false">
		</script>
		<script src="js/ie/excanvas.js" cache="false">
		</script> <![endif]-->
	</head>
	<body> 
	
	<!--main content start-->
      <?php  echo $template['body'];?>
      <!--main content end-->


	<!-- footer --> <footer id="footer">
	<div class="text-center padder">
		<p> <small>All rights reserved <?=$this->config->item('company_name')?>
		<br>&copy; <?=date('Y')?> Developed with all the love in the World by <a href="<?=$this->config->item('company_domain')?>" target="_blank"><?=$this->config->item('company_name')?></a> </small> </p>
	</div> </footer>
	<!-- / footer -->
	<script src="<?=JS_URL?>app.v2.js">
	</script>
	<!-- Bootstrap -->
	<!-- App -->
</body>
</html>