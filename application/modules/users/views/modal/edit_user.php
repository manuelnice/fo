<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> 
		<h4 class="modal-title"><?=lang('edit')?> <?=lang('user')?></h4>
		</div><?php
			 $attributes = array('class' => 'bs-example form-horizontal');
          echo form_open(base_url().'users/view/update',$attributes); ?>
          <?php
								if (!empty($user_details)) {
				foreach ($user_details as $key => $user) { ?>
		<div class="modal-body">
			<p><?=lang('report_bug_message')?></p>
			 <input type="hidden" name="user_id" value="<?=$user->user_id?>">
          				<div class="form-group">
				<label class="col-lg-4 control-label"><?=lang('email')?> <span class="text-danger">*</span></label>
				<div class="col-lg-8">
					<input type="email" class="form-control" value="<?=$user->email?>" name="email" required>
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-4 control-label"><?=lang('full_name')?> </label>
				<div class="col-lg-8">
					<input type="text" class="form-control" value="<?=$user->fullname?>" name="fullname">
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-4 control-label"><?=lang('city')?> </label>
				<div class="col-lg-8">
					<input type="text" class="form-control" value="<?=$user->city?>" name="city">
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-4 control-label"><?=lang('company')?> </label>
				<div class="col-lg-8">
					<input type="text" class="form-control" value="<?=$user->company?>" name="company">
				</div>
				</div>
				<div class="form-group">
				<label class="col-lg-4 control-label"><?=lang('role')?> <span class="text-danger">*</span></label>
				<div class="col-lg-8">
				<select name="role_id" class="form-control">
				<option value="<?=$user->role_id?>">Use Current</option>
					<?php
					if (!empty($roles)) {
					foreach ($roles as $key => $role) { ?>
						<option value="<?=$role->r_id?>"><?=ucfirst($role->role)?></option>
					<?php } } ?>					
				</select>
				</div>
				</div>
			
		</div>
		<div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal"><?=lang('close')?></a> 
		<button type="submit" class="btn btn-info"><?=lang('save_changes')?></button>
		</form>
		<?php }} ?>
		</div>
	</div>
	<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->