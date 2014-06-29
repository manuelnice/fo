<section id="content"> <section class="vbox">
  <header class="header bg-white b-b b-light">
  <p>Assignment <small>(Details)</small></p> </header>
  <section class="scrollable wrapper">
    <?php  echo modules::run('sidebar/flash_msg');?>
    <div class="row">
      <!-- Start transaction details -->
      <div class="col-sm-12"> 
      <section class="panel panel-default">
        <header class="panel-heading">
        <span class="label bg-danger pull-right">
        <a href="<?=base_url()?>tasks/assignments"><i class="fa fa-angle-double-left"></i> Back to Assignments</a></span> Assignment Details </header>
        <table class="table table-striped m-b-none text-sm">
          <thead>
            <tr>
              <th width="120">Field Name</th>
              <th>Value</th>
            </tr> </thead> <tbody>
            <?php
              foreach ($a_details as $key => $t) { ?>
            <tr>
              <td>Unit</td>
              <td><?=$t->unit_name?></td>
            </tr>
            <tr>
              <td>Year of Study</td>
              <td><?=$t->yos?></td>
            </tr>
            <tr>
              <td>Semester</td>
              <td><?=$t->sem?></td>
            </tr>
            <tr>
              <td>Due Date</td>
              <td><?=$t->due_date?></td>
            </tr>
            <tr>
              <td>Lecturer</td>
              <td><?=$this->user_profile->get_user_details($t->lecturer,'username')?></td>
            </tr>
            <tr>
              <td>Description</td>
              <td><?=$t->description?></td>
            </tr>
            <?php } ?>

            </tbody>

          </table> 
<p> <a href="<?=base_url()?>tasks/assignments/submit/<?=$t->assgn_id?>/<?=$t->yos?>/<?=$t->sem?>" data-toggle="ajaxModal"  class="btn btn-success btn-lg">Submit Assignment</a></p>







          </section>
        </div>
        <!-- End transaction details -->
      </div>
    </section>
  </section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>