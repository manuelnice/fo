<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Notes Sharing</h4>
		</div>
		<div class="modal-body">
			<p>You are Awesome! Thanks for taking time to rate</p>
			<?php
			echo form_open(base_url().'extras/rate_me'); ?>
			<input type="hidden" name="r_url" value="<?=base_url()?>extras/rating">
			<input type="hidden" name="official_rated" value="<?=$official_rated?>">
			<div class="form-group">
				<label>Rating</label>
				<select name="rated" class="form-control m-b">
					<option value="1">1 Star</option>
					<option value="2">2 Stars</option>
					<option value="3">3 Stars</option>
					<option value="4">4 Stars</option>
					<option value="5">5 Stars</option>
				</select>
			</div>
			
		</div>
		<div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
			<button type="submit" class="btn btn-primary">Submit Rating</button>
		</form>
	</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->