<?php
$breadcrumb='<a href="/index.php">Home</a> &raquo; <a href="/terms_and_conditions.php">About us</a>';

$tmp_content = '<div class="innercontainer-blk">
	<p class="heading">Terms &amp; Conditions</p>
	<div class="sixteen columns mright8">
		<div class="inner-box">
			<p class="bottom-1 description">1) Contents to be filled.</p>							
		</div>	
	</div>
</div>';

echo $this->content->get_content(CONF_TYPE_HTML,"Terms & Conditions","terms_and_conditions.php",$tmp_content);

?>
