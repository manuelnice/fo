<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
		<li class="active"><a href="<?=base_url()?>items"><?=lang('all_items')?></a></li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<section class="panel panel-default">
	<header class="panel-heading"> <i class="fa fa-navicon"></i> <?=lang('all_items')?></header>
	<div class="row text-sm wrapper">
		<div class="col-sm-5 m-b-xs">
			
			<a href="<?=base_url()?>items/add" class="btn btn-sm btn-success" data-toggle="ajaxModal"><i class="fa fa-plus"></i> <?=lang('new_item')?></a>
		</div>
		<div class="col-sm-4 m-b-xs">
			
		</div>
		<div class="col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="<?=lang('search')?>">
				<span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button">Go!</button>
				</span>
			</div>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped b-t b-light text-sm">
			<thead>
				<tr>
					<th><?=lang('item_description')?></th>
					<th><?=lang('unit_price')?> </th>
					<th><?=lang('options')?></th>
				</tr> </thead> <tbody>
				<?php
								if (!empty($items)) {
				foreach ($items as $key => $item) { ?>
				<tr>
					<td><?=$item->item_desc?></td>
					<td><?=$this->config->item('default_currency')?> <?=number_format($item->unit_cost,2)?></td>
					<td>
					<a href="<?=base_url()?>items/edit/<?=$item->item_id?>" class="btn btn-default btn-xs" data-toggle="ajaxModal">
					<i class="fa fa-edit"></i></a>
					<a href="<?=base_url()?>items/delete/<?=$item->item_id?>" class="btn btn-danger btn-xs" data-toggle="ajaxModal">
					<i class="fa fa-trash-o"></i></a>
					</td>
				</tr>
				<?php  }} else{ ?>
				<tr>
					<td></td><td><?=lang('nothing_to_display')?></td><td></td><td></td>
				</tr>
				<?php } ?>
				
				
				
			</tbody>
		</table>
	</div>

<footer class="panel-footer">
				<div class="row">
				<div class="col-sm-4 hidden-xs">
				<?php
				 $records_found = $this->db->where('deleted','No')->get('items_saved')->num_rows();
                ?>
				</div>
				<div class="col-sm-4 text-center"> <small class="text-muted inline m-t-sm m-b-sm">Showing <?=$records_found?> <?=lang('items')?></small>
				</div>
				<div class="col-sm-4 text-right text-center-xs">
				<!-- Paging-->
            <div class="mt40 clearfix">
                      <?php
                                   

                                  
                                        $this->load->library('pagination');
                                        $config['base_url'] = site_url().'items/list_items/';
                                        $config['total_rows'] = $records_found;
                                        $config['full_tag_open'] = '<ul class="pagination pagination-sm m-t-none m-b-none">';
                                        $config['full_tag_close'] = '</ul>';
                                        $config['per_page'] = 20;
                                        $config['uri_segment'] = 3;
                                        $this->pagination->initialize($config);
                                        echo $this->pagination->create_links();
                                        ?>
               
            </div>
				</div>
				</div>
</footer>

	</section>
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>