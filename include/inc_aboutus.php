<?php
$breadcrumb='<a href="/index.php">Home</a> &raquo; <a href="/aboutus.php">About us</a>';
$tmp_content = "About us ....";

echo $this->content->get_content(CONF_TYPE_HTML,"About us","aboutus.php",$tmp_content);

?>
