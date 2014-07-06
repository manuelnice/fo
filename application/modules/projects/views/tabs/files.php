<table class="table table-striped b-t b-light text-sm hover">
			<thead>
				<tr>
					<th><?=lang('file_name')?></th>
					<th><?=lang('uploaded_by')?></th>
					<th><?=lang('date')?></th>
					<th><?=lang('options')?></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($project_files)) {
				foreach ($project_files as $key => $f) { ?>
				
				<tr class="danger">
				<td><?=$f->file_name?></td>
				<td><?=$f->username?></td>
				<td><?=strftime("%B %d, %Y %H:%M:%S", strtotime($f->date_posted))?></td>
				<td><a class="btn btn-xs btn-dark" href="">Download</a></td>
				</tr>
				<?php  }} else{ ?>
				<tr>
					<td></td><td><?=lang('nothing_to_display')?></td><td></td>
				</tr>
				<?php } ?>
				
				
				
			</tbody>
		</table>