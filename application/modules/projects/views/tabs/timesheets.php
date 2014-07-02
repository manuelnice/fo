<table class="table table-striped b-t b-light text-sm hover">
			<thead>
				<tr>
					<th><?=lang('start_time')?></th>
					<th><?=lang('stop_time')?></th>
					<th><?=lang('total_time')?></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($timesheets)) {
				foreach ($timesheets as $key => $t) { ?>
				
				<tr class="success">
				<td><?=strftime("%B %d, %Y %H:%M:%S", strtotime($t->start_time))?></td>
				<td><?=strftime("%B %d, %Y %H:%M:%S", strtotime($t->end_time))?></td>
				<td>30 Hours</td>
				</tr>
				<?php  }} else{ ?>
				<tr>
					<td></td><td><?=lang('nothing_to_display')?></td><td></td>
				</tr>
				<?php } ?>
				
				
				
			</tbody>
		</table>