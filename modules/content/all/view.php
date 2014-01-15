<?php // prevent execution of this page by direct call by browser
if ( !defined('CHECK_INCLUDED') ){
    exit();
}
?>


<?php if ( $data_bylimit == false ){?>
<?= $mesg ?>
<?  }else{ ?>


     <?

	 $index = 0;


     while ( $count_data_bylimit > $index ){
        $link = "contents_update.php?id=".$data_bylimit[$index]["id"]."";
		?>
<div class="medium-2 columns" ><a target="_blank" href="<?php echo $link; ?>"><img src="/images/content.png"/></br><?php echo $data_bylimit[$index]["name"]; ?></a></div>
<?
         $index++;
    }
}
?>
