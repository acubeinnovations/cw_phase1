
<?php if(isset($error_msg)) { echo $error_msg; } ?>
<fieldset>
  <legend> Dynamic Content</legend>
	<form target="_self" method="post" action="<?php echo $current_url; ?>" name="frmconf">
     <div class="row">
		<div class="medium-12 columns">
			<textarea <?php echo $editor; ?> name="txt_content"><?php echo $str_content; ?></textarea>
		</div>
	</div
	<div class="row">
		<div class="medium-12 columns"><br>
			<input name="update" value="<?php echo $conf_submit_update ?>" class="tiny success button" type="submit"> &nbsp;&nbsp;
<input  class="tiny alert button delete" name="delete" value="<?php echo $conf_submit_delete ?>" type="button">
<div style="display:none"><input  class="tiny alert button delete-submit" name="delete" value="<?php echo $conf_submit_delete ?>" type="submit"> </div>
	<input type="hidden" name="h_contentinfo" value="<?php echo md5("CONF_INFO"); ?>">
	<input type="hidden" name="h_contentid" value="<?php echo $int_contnent_id ?>" >
		</div>
	</div>
</fieldset>
	</form>

