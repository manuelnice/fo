<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> <h4 class="modal-title">Notes Sharing</h4>
		</div>
		<div class="modal-body">
			<p>Ooh! We are sad you are deleting this file. No one will be able to download it again. We hope you will share notes someday! Want to Continue?</p>
			<?php
			echo form_open(base_url().'tasks/notes/delete_notes'); ?>
			<input type="hidden" name="r_url" value="<?=base_url()?>tasks/notes">
			<input type="hidden" name="n_id" value="<?=$n_id?>">
			<input type="hidden" name="year" value="<?=$year?>">
			<input type="hidden" name="sem" value="<?=$sem?>">
			<input type="hidden" name="unit" value="<?=$unit?>">

		</div>
		<div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
			<button type="submit" class="btn btn-primary">Relax, I know what am Doing</button>
		</form>
	</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->