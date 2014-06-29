<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Assignment Submission</h4>
		</div>
		<div class="modal-body">
			<p>Thank you for submitting your assignments. We'll notify your lecturer via email. </p>
			<?php
			echo form_open_multipart(base_url().'tasks/assignments/submit'); ?>
			<input type="hidden" name="r_url" value="<?=base_url()?>tasks/assignments">
			<input type="hidden" name="assgn_id" value="<?=$assgn_id?>">
			<input type="hidden" name="year" value="<?=$year?>">
			<input type="hidden" name="sem" value="<?=$sem?>">
			<div class="form-group">
				<label>Select File</label>
				<div class="form-control m-b">
					<input type="file" name="userfile" class="filestyle" required="required" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s">
				</div>
			</div>
			
		</div>
		<div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
			<button type="submit" class="btn btn-primary">Submit Assignment</button>
		</form>
	</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->