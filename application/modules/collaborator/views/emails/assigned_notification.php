<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head><title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=320, target-densitydpi=device-dpi">
    <p>Hello There</p>
    <p>A new task (<?=$task_name?>) has been assigned to you by <?=$assigned_by?> in project <?=$project_title?>. </p>
    <p>You can view this task using the link below.</p>
        --------------------------
        <br>
        <?=base_url()?>collaborator/projects/details/<?=$project_id?>
<p>
Regards<br>
<?=$this->config->item('company_name')?> Team
</p>
</body>
</html>
