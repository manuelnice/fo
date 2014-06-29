<?php
$login = array(
	'name'	=> 'login',
	'class'	=> 'form-control input-lg',
	'placeholder' => 'admin',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or Username';
} else if ($login_by_username) {
	$login_label = 'Username';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'inputPassword',
	'size'	=> 30,
	'class' => 'form-control input-lg'
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php  echo modules::run('sidebar/flash_msg');?>  

<section id="content" class="m-t-lg wrapper-md animated fadeInUp">

		<div class="container aside-xxl">
		 <a class="navbar-brand block" href="<?=base_url()?>"><?=$this->config->item('company_name')?></a> 
		 <section class="panel panel-default bg-white m-t-lg">
		<header class="panel-heading text-center"> <strong>Sign In <?=$this->config->item('company_name')?></strong> </header>

		<?php 
		$attributes = array('class' => 'panel-body wrapper-lg');
		echo form_open($this->uri->uri_string(),$attributes); ?>
			<div class="form-group">
				<label class="control-label">Email or Username/Reg No</label>
				<?php echo form_input($login); ?>
				<span style="color: red;">
				<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></span>
			</div>
			<div class="form-group">
				<label class="control-label">Password </label>
				<?php echo form_password($password); ?>
				<span style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></span>
			</div>


	<?php if ($show_captcha) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		</td>
		<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
		<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
		<?php echo $recaptcha_html; ?>
	</tr>
	<?php } else { ?>
	<tr>
		<td colspan="3">
			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
		<td><?php echo form_input($captcha); ?></td>
		<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
	</tr>
	<?php }
	} ?>

	<div class="checkbox">
				<label>
					<?php echo form_checkbox($remember); ?> This is my computer</a>
				</label>
			</div>
 <a href="<?=base_url()?>auth/forgot_password" class="pull-right m-t-xs"><small>Forgot password?</small></a> 
			<button type="submit" class="btn btn-primary">Sign in</button>
			<div class="line line-dashed">
			</div> 
			<?php if ($this->config->item('allow_registration', 'tank_auth')){ ?>
			<p class="text-muted text-center"><small>Do not have an account?</small></p> 
			<?php } ?>
			<a href="<?=base_url()?>auth/register/" class="btn btn-success btn-block">Get Your Account</a>
<?php echo form_close(); ?>

 </section>
	</div> 
	</section>
