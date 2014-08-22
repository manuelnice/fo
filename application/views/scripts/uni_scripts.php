<?php if ($page == lang('projects') OR $page == lang('add_invoice') OR $this->uri->segment(3) == 'edit' OR $this->uri->segment(3) == 'add') { ?>
<script src="<?=JS_URL?>slider/bootstrap-slider.js" cache="false"></script>
<script src="<?=JS_URL?>datepicker/bootstrap-datepicker.js" cache="false"></script>
<?php } ?>
<?php
if ($this->uri->segment(2) == 'update' OR $this->uri->segment(1) == 'messages' OR $this->uri->segment(3) == 'add' OR $this->uri->segment(3) == 'edit' OR $this->uri->segment(3) == 'send' OR $this->uri->segment(2) == 'settings') { ?>
<script src="<?=JS_URL?>select2/select2.min.js" cache="false"></script>
<script src="<?=JS_URL?>file-input/bootstrap-filestyle.min.js" cache="false"></script>
<script src="<?=JS_URL?>wysiwyg/jquery.hotkeys.js" cache="false"></script>
<script src="<?=JS_URL?>wysiwyg/bootstrap-wysiwyg.js" cache="false"></script>
<script src="<?=JS_URL?>wysiwyg/demo.js" cache="false"></script>
<script src="<?=JS_URL?>parsley/parsley.min.js" cache="false"></script>
<script src="<?=JS_URL?>parsley/parsley.extend.js" cache="false"></script>
<?php } ?>
<?php if ($this->uri->segment(2) == 'help') { ?>
 <!-- App --> 
<script src="<?=JS_URL?>intro/intro.min.js" cache="false"> </script>
<script src="<?=JS_URL?>intro/demo.js" cache="false"> </script>
<?php }  ?>
<?php if ($page == lang('home') OR $page == lang('clients')) { ?>
	
<script src="<?=JS_URL?>chart/modules/exporting.js"></script>
<script src="<?=JS_URL?>charts/easypiechart/jquery.easy-pie-chart.js" cache="false"></script>
<?php } ?>
<?php if($page == lang('home')){ ?>
<!-- App -->
<script src="<?=JS_URL?>charts/easypiechart/jquery.easy-pie-chart.js" cache="false"></script>
<script src="<?=JS_URL?>charts/sparkline/jquery.sparkline.min.js" cache="false"></script>
<script src="<?=JS_URL?>charts/flot/jquery.flot.min.js" cache="false"></script>
<script src="<?=JS_URL?>charts/flot/jquery.flot.tooltip.min.js" cache="false"></script>
<script src="<?=JS_URL?>charts/flot/jquery.flot.resize.js" cache="false"></script>
<script src="<?=JS_URL?>charts/flot/jquery.flot.grow.js" cache="false"></script>
<script src="<?=JS_URL?>charts/flot/demo.js" cache="false"></script>
<script src="<?=JS_URL?>calendar/bootstrap_calendar.js" cache="false"></script>
<script src="<?=JS_URL?>calendar/demo.js" cache="false"></script>
<script src="<?=JS_URL?>sortable/jquery.sortable.js" cache="false"></script>
<?php }  ?>