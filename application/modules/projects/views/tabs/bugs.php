<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th><?=lang('bug_no')?></th>
					<th><?=lang('reporter')?></th>
					<th><?=lang('bug_status')?></th>
					<th><?=lang('priority')?></th>
					<th><?=lang('date')?></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($bugs)) {
				foreach ($bugs as $key => $bug) { ?>
				<tr>
				<td><?=$bug->issue_ref?></a></td>
				<td><?=ucfirst($bug->username)?></a></td>
				<td><?=$bug->bug_status?></a></td>
				<td><?=$bug->priority?></a></td>
				<td><?=strftime("%B %d, %Y %H:%M:%S", strtotime($bug->reported_on));?></td>
				</tr>
				<?php  }} else{ ?>
				<tr>
					<td></td><td><?=lang('nothing_to_display')?></td><td></td><td></td><td></td>
				</tr>
				<?php } ?>
				
				
				
			</tbody>
		</table>