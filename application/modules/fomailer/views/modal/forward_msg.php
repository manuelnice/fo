<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Forward Message</h4>
		</div>
		<div class="modal-body">
			<p>We'll send a copy of your message via email to the recipient</p>
			 <?php
          echo form_open(base_url().'messaging/mail/forward_msg'); ?>
          <input type="hidden" name="r_url" value="<?=base_url()?>messaging/view/inbox">
          <input type="hidden" name="subject" value="FW: <?=$subject?>">
          <input type="hidden" name="message" value="<?=$message?>">
				<div class="form-group">
					<label>Recipient</label>
					<input type="text" name="username" class="form-control" placeholder="Enter Username">
				</div>
			
		</div>
		<div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a> 
		<button type="submit" class="btn btn-primary">Forward Message</button>
		</form>
		</div>
	</div>
	<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->