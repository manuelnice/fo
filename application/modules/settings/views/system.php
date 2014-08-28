<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> <?=lang('home')?></a></li>
		<li><a href="<?=base_url()?>settings/system"><?=lang('settings')?></a></li>
		<li class="active"><?=lang('system_settings')?></li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<!-- Start Form -->
	<div class="col-sm-12"> <section class="panel panel-default">
	<header class="panel-heading font-bold"><i class="fa fa-cogs"></i> <?=lang('system_settings')?></header>
	<div class="panel-body">
		<?php
		$attributes = array('class' => 'bs-example form-horizontal','data-validate'=>'parsley');
		echo form_open_multipart(uri_string(), $attributes); ?>
		<input type="hidden" name="r_url" value="<?=uri_string()?>">
		<div class="form-group">
			<label class="col-lg-2 control-label"><?=lang('base_url')?> <span class="text-danger">*</span></label>
			<div class="col-lg-10">
				<input type="text" name="base_url" class="form-control" value="<?=$this->config->item('base_url')?>" data-required="true">
				<span class="help-block m-b-none"><strong>Change this only if you know what you are doing</strong>.</span>
			</div>
		</div>		
		
		<div class="form-group">
			<label class="col-lg-2 control-label"><?=lang('default_language')?> <span class="text-danger">*</span></label>
			<div class="col-lg-3">
				<input type="text" class="form-control" value="<?=$this->config->item('default_language')?>" name="default_language" data-required="true">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-lg-2 control-label"><?=lang('file_max_size')?> <span class="text-danger">*</span> </label>
			<div class="col-lg-3">
				<input type="text" class="form-control" value="<?=$this->config->item('file_max_size')?>" name="file_max_size" data-type="digits" data-required="true">
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label"><?=lang('allowed_files')?></label>
			<div class="col-lg-10">
				<input type="text" class="form-control" value="<?=$this->config->item('allowed_files')?>" name="allowed_files">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-lg-2 control-label"><?=lang('demo_mode')?></label>
			<div class="col-lg-4">
				<select name="demo_mode" class="form-control">
					<option value="<?=$this->config->item('demo_mode')?>">Use Current</option>
					<option value="FALSE"><?=lang('false')?></option>
					<option value="TRUE"><?=lang('true')?></option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-2 control-label"><?=lang('default_terms')?> <span class="text-danger">*</span></label>
			<div class="col-lg-10">
				<div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
					<div class="btn-group">
						<a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
					<ul class="dropdown-menu"></ul>
				</div>
				<div class="btn-group">
					<a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
						<li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
						<li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
					</ul>
				</div>
				<div class="btn-group">
					<a class="btn btn-default btn-sm" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
					<a class="btn btn-default btn-sm" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
					<a class="btn btn-default btn-sm" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
					<a class="btn btn-default btn-sm" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
				</div>
				<div class="btn-group"> <a class="btn btn-default btn-sm" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
					<a class="btn btn-default btn-sm" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
					<a class="btn btn-default btn-sm" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
					<a class="btn btn-default btn-sm" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
				</div>
				<div class="btn-group"> <a class="btn btn-default btn-sm" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
					<a class="btn btn-default btn-sm" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
					<a class="btn btn-default btn-sm" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
					<a class="btn btn-default btn-sm" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
				</div>
				<div class="btn-group"> <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
					<div class="dropdown-menu">
						<div class="input-group m-l-xs m-r-xs">
							<input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink"/>
							<div class="input-group-btn"> <button class="btn btn-default btn-sm" type="button">Add</button></div>
						</div>
					</div><a class="btn btn-default btn-sm" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
				</div>
				<div class="btn-group"> <a class="btn btn-default btn-sm" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
					<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
				</div>
				<div class="btn-group"> <a class="btn btn-default btn-sm" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
					<a class="btn btn-default btn-sm" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
				</div>
				
			</div>
			<textarea id="editor" class="form-control" style="overflow:scroll;height:150px;max-height:150px" name="default_terms"><?=$this->config->item('default_terms')?></textarea>
		</div>
	</div>
	
	
	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10"> 
		<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i> <?=lang('save_changes')?></button>
		</div>
	</div>
</form>
</div> </section>
</div>
<!-- End Form -->
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
</section>