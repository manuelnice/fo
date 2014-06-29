<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th><?=lang('date')?></th>
					<th><?=lang('detail')?></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($user_activities)) {
				foreach ($user_activities as $key => $a) { ?>
				<tr>
					<td><?=strftime("%B %d, %Y", strtotime($a->activity_date));?></td>
					<td><?=$a->activity?></a></td>
				</tr>
				<?php  }} else{ ?>
				<tr>
					<td></td><td><?=lang('nothing_to_display')?></td><td></td><td></td><td></td>
				</tr>
				<?php } ?>
				
				
				
			</tbody>
		</table>