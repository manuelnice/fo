<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title"><?=lang('new_client')?></h4>
		</div><?php
			 $attributes = array('class' => 'bs-example form-horizontal');
          echo form_open(base_url().'auth/register_user',$attributes); ?>
		<div class="modal-body">
			<p><?=lang('new_client_notice')?></p>
			 <input type="hidden" name="r_url" value="<?=base_url()?>contacts">
          				<div class="form-group">
				<label class="col-lg-4 control-label"><?=lang('username')?> <span class="text-danger">*</span></label>
				<div class="col-lg-8">
					<input type="text" class="form-control" value="<?=set_value('username')?>" name="username" required>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-4 control-label"><?=lang('email')?> <span class="text-danger">*</span></label>
				<div class="col-lg-8">
					<input type="email" class="form-control" value="<?=set_value('email')?>" name="email" required>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-4 control-label"><?=lang('password')?> <span class="text-danger">*</span></label>
				<div class="col-lg-8">
					<input type="password" class="form-control" value="<?=set_value('password')?>" name="password" required>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-4 control-label"><?=lang('confirm_password')?> <span class="text-danger">*</span></label>
				<div class="col-lg-8">
					<input type="password" class="form-control" value="<?=set_value('confirm_password')?>" name="confirm_password" required>
				</div>
				</div>
			
		</div>
		<div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal"><?=lang('close')?></a> 
		<button type="submit" class="btn btn-primary"><?=lang('register_user')?></button>
		</form>
		</div>
	</div>
	<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->