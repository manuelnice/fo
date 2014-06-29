<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">New Message</h4>
		</div>
		<div class="modal-body">
			<p>We'll send a copy of your message via email to the recipient</p>
			 <?php
          echo form_open(base_url().'messaging/mail/new_msg'); ?>
          <input type="hidden" name="r_url" value="<?=base_url()?>messaging/view/inbox">
         				 <div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Enter Username">
				</div>
				<div class="form-group">
					<label>Subject</label>
					<input type="text" name="subject" class="form-control" placeholder="Enter Subject">
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea name="message" class="form-control" ></textarea>
				</div>
			
		</div>
		<div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a> 
		<button type="submit" class="btn btn-info">Send Message</button>
		</form>
		</div>
	</div>
	<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->