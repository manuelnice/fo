<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Drop Message</h4>
		</div>
		<div class="modal-body">
			<p>Thank you for taking time to drop your suggestion. </p>
			 <?php
          echo form_open(base_url().'extras/drop_message'); ?>
          <input type="hidden" name="r_url" value="<?=base_url()?>extras/suggestion">
				<div class="form-group">
					<label>Subject</label>
					<input type="text" name="subject" class="form-control" placeholder="Enter Suggestion Subject">
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea name="message" class="form-control" ></textarea>
				</div>
				<div class="form-group">
				<label>Privacy</label>
				<select name="rated" class="form-control m-b">
					<option value="Private">Hide my Name</option>
					<option value="Public">Make Name Visible</option>
				</select>
			</div>
			
		</div>
		<div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a> 
		<button type="submit" class="btn btn-info">Drop Message</button>
		</form>
		</div>
	</div>
	<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->