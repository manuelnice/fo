<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Posts Module</h4>
		</div>
		<div class="modal-body">
			<p>You are about to delete a post from the system. We will notify the owner of the script about this action.</p>
			<?php
			echo form_open(base_url().'management/posts/ban_post'); ?>
			<input type="hidden" name="r_url" value="<?=base_url()?>management/posts">
			<input type="hidden" name="post_id" value="<?=$post_id?>">

		</div>
		<div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
			<button type="submit" class="btn btn-primary">Relax, I know what am Doing</button>
		</form>
	</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->