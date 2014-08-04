<section id="content"> <section class="vbox">
  <header class="header bg-white b-b b-light">
  <p>Add Fee Structure</p> </header>
  <section class="scrollable wrapper">
    <?php  echo modules::run('sidebar/flash_msg');?>
    <div class="row">
      <div class="col-lg-12">
        <!-- Profile Form -->
        <section class="panel panel-default">
        <header class="panel-heading font-bold">Fee Details</header>
        <div class="panel-body">
          <?php
          echo form_open_multipart(uri_string()); ?>
          <input type="hidden" name="r_url" value="<?=uri_string()?>">
          <div class="form-group">
            <label>Year of Study</label>
            <select name="yos" class="form-control m-b">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              <option value="4">Four</option>
            </select>
          </div>
          <div class="form-group">
            <label>Semester</label>
            <select name="sem" class="form-control m-b">
              <option value="1">One</option>
              <option value="2">Two</option>
            </select>
          </div>
          <div class="form-group">
            <label>Program</label>
            <select name="program" class="form-control m-b">
              <?php
              if (!empty($programs)) {
              foreach ($programs as $key => $pr) { ?>
              <option value="<?=$pr->pr_id?>"><?=$pr->title?></option>
              <?php }} ?>
            </select>
          </div>
          <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="fee_desc" placeholder="Tuition Fees">
          </div>
          <div class="form-group">
            <label>Optional</label>
            <select name="optional" class="form-control m-b">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="form-group">
            <label>Common</label>
            <select name="common_fee" class="form-control m-b">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="form-group">
            <label>Amount</label>
            <input type="number" class="form-control" name="amount" placeholder="65000">
            <span class="help-block m-b-none">Example 54000 don't include commas the system will do that.</span>
          </div>
          
          
          <button type="submit" class="btn btn-s-md btn-primary btn-rounded">Process Request</button>
        </form>
      </div>
    </section>
    <!-- /profile form -->
  </div>
</div>
</section>
</section> <a href="widgets.html#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>