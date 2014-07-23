<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th><?=lang('reference_no')?></th>
					<th><?=lang('date_issued')?></th>
					<th><?=lang('due_date')?> </th>
					<th><?=lang('amount')?> </th>
					<th><?=lang('options')?></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($user_invoices)) {
				foreach ($user_invoices as $key => $invoice) { ?>
				<tr>
					<td><a class="text-info" href="<?=base_url()?>invoices/manage/details/<?=$invoice->inv_id?>"><?=$invoice->reference_no?></a></td>
					<td><?=strftime("%B %d, %Y", strtotime($invoice->date_saved));?> </td>
					<td><?=strftime("%B %d, %Y", strtotime($invoice->due_date));?> </td>
					<td><small><?=$this->config->item('default_currency')?></small> <?=number_format($this->user_profile->invoice_payable($invoice->inv_id),2)?> </td>
					<td>
					<a href="<?=base_url()?>invoices/view/update/<?=$invoice->inv_id?>" class="btn btn-info btn-xs">
					<i class="fa fa-pencil"></i> <?=lang('edit')?></a>
					<a href="<?=base_url()?>invoices/view/delete/<?=$invoice->inv_id?>" class="btn btn-danger btn-xs">
					<i class="fa fa-times"></i> <?=lang('delete')?></a>
					</td>
				</tr>
				<?php  }} else{ ?>
				<tr>
					<td></td><td><?=lang('nothing_to_display')?></td><td></td><td></td><td></td>
				</tr>
				<?php } ?>
				
				
				
			</tbody>
		</table>