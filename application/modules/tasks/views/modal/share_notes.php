<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Notes Sharing</h4>
		</div>
		<div class="modal-body">
			<p>You are Awesome! Thank you for being kind. Share and Learn</p>
			<?php
			echo form_open_multipart(base_url().'tasks/notes/share_notes'); ?>
			<input type="hidden" name="r_url" value="<?=base_url()?>tasks/notes">
			<div class="form-group">
				<label>Select File</label>
				<div class="form-control m-b">
					<input type="file" name="userfile" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s">
				</div>
			</div>
			<div class="form-group">
				<label>Year of Study</label>
				<select name="year" class="form-control m-b">
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
					<option value="4">Four</option>
				</select>
			</div>
			<div class="form-group">
				<label>Semester</label>
				<select name="sem" class="form-control m-b">
					<option value="1">One</option>
					<option value="2">Two</option>
				</select>
			</div>
			<div class="form-group">
				<label>Units</label>
				<select name="unit" class="form-control m-b">
					<?php
					if (!empty($units)) {
					foreach ($units as $key => $u) { ?>
					<option value="<?=$u->u_id?>"><?=$u->unit_name?></option>
					<?php }} ?>
				</select>
			</div>
			
		</div>
		<div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
			<button type="submit" class="btn btn-primary">Share Notes</button>
		</form>
	</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->