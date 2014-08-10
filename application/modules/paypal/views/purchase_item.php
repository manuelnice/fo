<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=320, target-densitydpi=device-dpi">
    <p><?=strftime("%B %d, %Y", time()); ?> </p>
    <p>Hi <?=$buyer_username?> <br> 
    	Thanks for Purchasing <a href="<?=base_url()?>item/info/<?=$theme_no?>"><?=$item_name?></a> by <a href="<?=base_url()?>user/<?=$author_username?>"><?=$author_username?></a> . You can download your item from your downloads page together with your purchase certificate. </p>
                                            --------------------------
<p>Contact the author incase you need support. If the item doesn't work as described please contact our <a href="http://support.bootstrapstore.net">Support Team</a></p><br>

------------------------------

<p>Regards <br>
BootstrapStore Team <br>
Copyright &copy; <?=$this->config->item('company_name')?> <?=date('Y')?></p>
</body>
</html>
