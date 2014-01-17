<?php // prevent execution of this page by direct call by browser
if ( !defined('CHECK_INCLUDED') ){
    exit();
}
?>



<fieldset>
    <legend><?php echo $CAP_page_caption?></legend>
<div class="row" >
<div class="medium-12 columns">
<form target="_self" method="GET" action="<?php echo $current_url; ?>" name="frmsearch" enctype="multipart/form-data">
		 <div class="medium-12 columns ">
	
				<div class="medium-5 columns ">
					<label><?php echo $CAP_language ?><small></small></label>
					<?php loadlanguage_admin("lstlanguage", -1, "Select Language",$language_id,false,'style="width:210px; height:22;"'); ?>
				</div>
				<div class="medium-5 columns ">
					<label><?php echo $CAP_contenttype ?> <small></small></label>
					<?php loadcontenttypes("lstcontenttype", -1, "Select content Type",$contenttype_id,false,'style="width:210px; height:22;"'); ?>		
				</div>
			</div>

			<div class="medium-12 columns ">
				<div class="medium-5 columns ">
					<label><?php echo $CAP_pagename ?><small></small></label>
					<input type="text" style="width: 210px; height:22;"  maxlength="100" size="35" name="txtpagename" value="<?php echo $pagename; ?>">
				</div>
				<div class="medium-5 columns ">
					<label><?php echo  $CAP_confname; ?></label>
					<input type="text" style="width: 210px; height:22;"  maxlength="100" size="35" name="txtcontentname" value="<?php echo $contentname; ?>">	
					
				</div>
			</div>

			<div class="medium-12 columns ">
				<div class="medium-5 columns ">
						<label><?php echo  $CAP_content; ?><small></small></label>
					 <input type="text" style="width: 210px; height:22;"  maxlength="100" size="35" name="txtcontent" value="<?php echo $content; ?>">
				</div>
				<div class="medium-5 columns ">
					<label><?php echo  $CAP_description; ?></label>
					 <input type="text" style="width: 210px; height:22;"  maxlength="100" size="35" name="txtdescription" value="<?php echo $description; ?>">
					 
				</div>
		 	</div>

			<div class="medium-12 columns ">
				<div class="medium-5 columns ">

		<label><?php echo $CAP_publish; ?><small></small></label><input type="checkbox"  name="chk_publish" value="1" <?php if($publish == 1) { ?> checked="true" <?php } ?> >
				</div>
				<div class="medium-5 columns ">
					
				</div>
		 	</div>
			
			<div class="medium-12 columns ">
				<div class="medium-5 columns ">
					<input name="submit" class="tiny button" value="<?php echo $CAP_submit_search ?>" type="submit"><input type="hidden" name="h_CAP_search" value="<?php echo md5("CONF_SEARCH"); ?>">
				 </div>
				 <div class="medium-5 columns ">
		
				 </div>	
			 </div>
		</form>
	</div>
</div>
</fieldset>


    
   <?php
    if ( $data_bylimit == false ){?>
    
     <?php echo $mesg ?>
     
    <?php
     }
     else{?>
<table>
    <tr>
		<th></th>
		<th>Language  </th>  
		<th>Conntent Type</th>
		<th>Conntent Name</th>
		<th>Page name</th>
		<th>Publish</th>

    </tr>

     <?php
     //to number each record in a page
    
	 $index = 0;
	 $slno = $Mypagination->start_record+1;

     while ( $count_data_bylimit > $index ){
        $link = "contents_update.php?id=".$data_bylimit[$index]["id"]."";
        

        ?>
    <tr>
        <td><?php echo $slno++ ?></td>
        <td><?php echo $data_bylimit[$index]["language_name"]; ?></td>
        <td><?php echo $data_bylimit[$index]["contenttype_name"]; ?></td>
        <td><a target="_blank" href="<?php echo $link; ?>"><?php echo $data_bylimit[$index]["name"]; ?></a></td>
        <td><?php echo $data_bylimit[$index]["page_name"]; ?></td>
        <td><?php echo $data_bylimit[$index]["publish_status"]; ?></td>
    </tr><?php
         $index++;
    }
    ?>
    
   
      <?php }?>
      </table>
 <!--For pagination. we can create a  diff style  & use-->
<?php if ( $data_bylimit!= false ){ 
$Mypagination->pagination_style_numbers_with_buttons(); }?>

