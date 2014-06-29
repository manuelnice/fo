<div class="row-fluid">
	<?php
if($this->session->flashdata('message')){ ?>
	<div class="alert alert-block alert-success">
			<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
			<p>
			<?=$this->session->flashdata('message')?>
			</p>
			
		</div>
	
<?php } ?>
		<div class="span5">
		<div class="widget-box">
			<div class="widget-header header-color-orange">
				<h5 class="bigger lighter"><i class="icon-lock"></i> Login by Users</h5>
				
			</div>
			
			<div class="widget-body">
			 <div class="widget-main no-padding">
			  <table id="table_bug_report" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th><i class="icon-user"></i> User</th>
						<th class="hidden-480">Logins</th>
					</tr>
				</thead>

				<tbody>
					<?php
					foreach ($logs as $key => $value) { ?>
					<tr>
						<?php
						$this->db->where('id', $value['user']); 
						$query = $this->db->get('users');
						foreach ($query->result_array() as $row)
							{
   $username = $row['username'];
							}
						?>
						<td class=""><?=$username?></td>
						<td class="hidden-480"><span class="label label-inverse arrowed"><?php
						$this->db->where('user', $value['user']); 
						$query = $this->db->get('auth_log');
						$num = $query->num_rows();
						?>
						<?=$num?> Login(s)</span></td>
					</tr>
					<?php } ?>

				</tbody>
			  </table>
			 </div>
			</div>
		</div>

	</div>
	
		<div class="span5">
		<div class="widget-box">
			<div class="widget-header header-color-orange">
				<h5 class="bigger lighter"><i class="icon-desktop"></i> Login by Operating System</h5>
				
			</div>
			
			<div class="widget-body">
			 <div class="widget-main no-padding">
			  <table id="table_bug_report" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th><i class="icon-desktop"></i> Operating System</th>
						<th class="hidden-480">Logins</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td class="">Windows OS</td>
						<td class="hidden-480"><span class="label label-warning"><?=$this->mdl_reports->platform('Windows')?> Logins</span></td>
					</tr>
					
					<tr>
						<td class="">Linux</td>
						<td class="hidden-480"><span class="label label-success arrowed-in arrowed-in-right"><?=$this->mdl_reports->platform('linux')?> Logins</span></td>
					</tr>
					
					<tr>
						<td class="">Mac OS</td>
						<td class="hidden-480"><span class="label label-important arrowed"><?=$this->mdl_reports->platform('Mac') ? $this->mdl_reports->platform('Mac'):0?> Logins</span></td>
					</tr>
					<tr>
						<td class="">Ubuntu</td>
						<td class="hidden-480"><span class="label label-inverse arrowed"><?=$this->mdl_reports->platform('unix') ? $this->mdl_reports->platform('unix') : 0?> Logins</span></td>
					</tr>
					<tr>
						<td class="">Debian</td>
						<td class="hidden-480"><span class="label label-inverse arrowed"><?=$this->mdl_reports->platform('Debian') ? $this->mdl_reports->platform('Debian') : 0?> Logins</span></td>
					</tr>

				</tbody>
			  </table>
			 </div>
			</div>
		</div>

	</div>
	
		<div class="span9">
		<div class="widget-box">
			<div class="widget-header header-color-orange">
				<h5 class="bigger lighter"><i class="icon-globe"></i> Login by Browsers</h5>
				
			</div>
			
			<div class="widget-body">
			 <div class="widget-main no-padding">
			  <table id="table_bug_report" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th><i class="icon-globe"></i> Web Browser</th>
						<th class="hidden-480">Logins</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td class="">Mozilla Firefox</td>
						<td class="hidden-480"><span class="label label-warning"><?=$this->mdl_reports->browser('firefox') ? $this->mdl_reports->browser('firefox') : 0?> Logins</span></td>
					</tr>
					
					<tr>
						<td class="">Google Chrome</td>
						<td class="hidden-480"><span class="label label-success arrowed-in arrowed-in-right"><?=$this->mdl_reports->browser('chrome') ? $this->mdl_reports->browser('chrome') : 0?> Logins</span></td>
					</tr>
					
					<tr>
						<td class="">Safari</td>
						<td class="hidden-480"><span class="label label-important arrowed"><?=$this->mdl_reports->browser('safari') ? $this->mdl_reports->browser('safari') : 0?> Logins</span></td>
					</tr>
					<tr>
						<td class="">Internet Explorer</td>
						<td class="hidden-480"><span class="label label-inverse arrowed"><?=$this->mdl_reports->browser('Internet Explorer') ? $this->mdl_reports->browser('Internet Explorer') : 0?> Logins</span></td>
					</tr>
					
					<tr>
						<td class="">Netscape</td>
						<td class="hidden-480"><span class="label label-success arrowed-in arrowed-in-right"><?=$this->mdl_reports->browser('netscape') ? $this->mdl_reports->browser('netscape') : 0?> Logins</span></td>
					</tr>

				</tbody>
			  </table>
			 </div>
			</div>
		</div>

	</div>
		
		
		
</div>