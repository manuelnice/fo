<section id="content"> <section class="vbox"> <section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="<?=base_url()?>profile">Account</a></li>
		<li class="active">New Payment</li>
	</ul>
	<?php  echo modules::run('sidebar/flash_msg');?>
	<!-- Start Form -->
	<div class="col-sm-12"> <section class="panel panel-default">
	<header class="panel-heading font-bold">New Payment Form</header>
	<div class="panel-body">
	  <?php     
$attributes = array('class' => 'bs-example form-horizontal');
echo form_open_multipart(uri_string(), $attributes); ?>
<input type="hidden" name="r_url" value="<?=uri_string()?>">
			<div class="form-group">
				<label class="col-lg-2 control-label">Transaction No.</label>
				<div class="col-lg-10">
					<input type="text" name="txn_id" class="form-control" readonly="readonly" value="<?=random_string('nozero', 7)?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label">Reg No </label>
				<div class="col-lg-10">
					<input type="text" class="form-control" placeholder="INTE-M-1055-09-10" name="reg_no">
					<span class="help-block m-b-none">Enter student registration number in the format <strong>INTE-M-1055-09-10</strong>.</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label">Receipt No.</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" placeholder="432D545" name="receipt_no">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-2 control-label">Amount</label>
				<div class="col-lg-10">
					<input type="number" class="form-control" placeholder="54000" name="amount">
					<span class="help-block m-b-none">Example 54000 don't include commas the system will do that.</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Bank Name </label>
				<div class="col-sm-10"> 
				<select name="bank" class="form-control m-b">
				<?php
				if (!empty($banks)) {
				foreach ($banks as $key => $b) { ?>
					<option value="<?=$b->bank_id?>"><?=$b->bank_name?></option>
					<?php }} ?>
				</select> </div>
			</div>
			
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10"> <button type="submit" class="btn btn-sm btn-success">Continue</button>
				</div>
			</div>
		</form>
	</div> </section>
</div>
<!-- End Form -->
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
</section>