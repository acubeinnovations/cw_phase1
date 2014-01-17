<?php // prevent execution of this page by direct call by browser
if ( !defined('CHECK_INCLUDED') ){
    exit();
}
?>
<fieldset>
  <legend>Contents</legend>

     <div class="row">
		<div class="medium-12 columns">

<?php if ( $data_bylimit == false ){ 
		echo $mesg;
 	  }else{ 

	 $index = 0;


     while ( $count_data_bylimit > $index ){
        $link = "contents_update.php?id=".$data_bylimit[$index]["id"]."";
			if($count_data_bylimit>4){
				$col=2;
				}else{
				$col=3;
				}
		?>
<div class="medium-<?php echo $col; ?> columns"><a target="_blank" href="<?php echo $link; ?>"><img src="/images/content.png"/></br><?php echo $data_bylimit[$index]["name"]; ?></a></div>
<?php
         $index++;
    }
}
	if($count_data_bylimit<4){
?>
		<div class="medium-<?php echo $col; ?> columns">&nbsp;</div><div class="medium-<?php echo $col; ?> columns">&nbsp;</div>
	<?php } ?>
</div>
</div>
</fieldset>
