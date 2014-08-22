<section id="content"> <section class="vbox">
  <header class="header bg-white b-b b-light">
  <p><?=lang('edit_profile_text')?><small>(<?=$this->tank_auth->get_username()?>)</small></p> </header>
  <section class="scrollable wrapper">
    <?php  echo modules::run('sidebar/flash_msg');?>

    <div class="row">
      <div class="col-lg-6">
         <!-- Profile Form -->
        <section class="panel panel-default">
      <header class="panel-heading font-bold"><?=lang('profile_details')?></header>
      <div class="panel-body">
        <?php
        foreach ($profile as $key => $p) { ?>
        <?php
        $attributes = array('class' => 'bs-example form-horizontal');
         echo form_open(uri_string(),$attributes); ?>
        <input type="hidden" name="r_url" value="<?=uri_string()?>">

        <div class="form-group">
          <label class="col-lg-3 control-label"><?=lang('full_name')?></label>
          <div class="col-lg-7">
          <input type="text" class="form-control" name="fullname" value="<?=$p->fullname?>">
          </div>
        </div>

         <div class="form-group">
          <label class="col-lg-3 control-label"><?=lang('company')?></label>
          <div class="col-lg-7">
          <input type="text" class="form-control" name="company" value="<?=$p->company?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label"><?=lang('city')?></label>
          <div class="col-lg-7">
          <input type="text" class="form-control" name="city" value="<?=$p->city?>">
          </div>
        </div>
         <div class="form-group">
          <label class="col-lg-3 control-label"><?=lang('address')?></label>
          <div class="col-lg-7">
          <input type="text" class="form-control" name="address" value="<?=$p->address?>">
          </div>
        </div>
       

        <div class="form-group">
          <label class="col-lg-3 control-label"><?=lang('phone')?></label>
          <div class="col-lg-7">
          <input type="text" class="form-control" name="phone" value="<?=$p->phone?>">
          </div>
        </div>

         <div class="form-group">
        <label class="col-lg-3 control-label"><?=lang('country')?> <span class="text-danger">*</span> </label>
        <div class="col-lg-7">
          <div class="m-b"> 
          <select id="select2-option" style="width:260px" name="country" > 
          <optgroup label="Current"> 
          <option value="<?=$p->country?>"><?=$p->country?></option>
          </optgroup> 
          <optgroup label="Others"> 
            <?php
            if (!empty($countries)) {
            foreach ($countries as $key => $c) { ?>
            <option value="<?=$c->value?>"><?=$c->value?></option>
            <?php }} ?>
          </optgroup> 
          </select> 
          </div> 
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-3 control-label"><?=lang('language')?> </label>
        <div class="col-lg-7">
        <select name="language" class="form-control"> 
            <option value="<?=$p->language?>"><?=$p->language?></option>              
            <option value="english">English</option>
            <option value="spanish">Spanish</option>
            <option value="german">German</option>
            <option value="italian">Italian</option>
            <option value="french">French</option>
            <option value="portuguese">Portuguese</option>
        </select>
        </div>
        </div>
        
        <button type="submit" class="btn btn-sm btn-dark"><?=lang('update_profile')?></button>
      </form>
      <?php } ?>
    </div>
  </section>
  <!-- /profile form -->
</div>
<div class="col-lg-6">
      
        <!-- Account Form -->
        <section class="panel panel-default">
      <header class="panel-heading font-bold"><?=lang('account_details')?></header>
      <div class="panel-body">
        <?php
        echo form_open(uri_string()); ?>
        <input type="hidden" name="r_url" value="<?=uri_string()?>">
        <div class="form-group">
          <label><?=lang('old_password')?></label>
          <input type="text" class="form-control" name="oldpassword" value="**********">
        </div>
        <div class="form-group">
          <label><?=lang('new_password')?></label>
          <input type="text" class="form-control" name="newpassword" placeholder="Password">
        </div>
         <div class="form-group">
          <label><?=lang('confirm_password')?></label>
          <input type="text" class="form-control" name="confirmpassword" placeholder="Confirm Password">
        </div>
        
        <button type="submit" class="btn btn-sm btn-dark"><?=lang('change_password')?></button>
      </form>

<h4 class="page-header"><?=lang('avatar_image')?></h4>

       <?php
       $attributes = array('class' => 'bs-example form-horizontal');
        echo form_open_multipart(uri_string(),$attributes); ?>
        <input type="hidden" name="r_url" value="<?=uri_string()?>">
       <div class="form-group">
        <label class="col-lg-3 control-label"><?=lang('avatar_image')?></label>
        <div class="col-lg-9">
          <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s" name="userfile">
        </div>
      </div>
        
        <button type="submit" class="btn btn-sm btn-success"><?=lang('change_avatar')?></button>
      </form>

    </div>
  </section>
  <!-- /Account form -->
  
    </div>
  </div> </section> </section> <a href="widgets.html#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>