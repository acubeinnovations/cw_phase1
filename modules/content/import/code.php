<?php
//Get laguage names to dropdown
$error = "";
$mylanguage = new Language();
$mylanguage->connection = $myconnection;
$array_languages = $mylanguage->get_list_array();

//While click at import button
if ( isset( $_POST['submit']) && $_POST['submit'] == $CAP_import ){
$mylanguage = new Language();
if ( trim($_POST['lstlanguage']) == -1 ){
    $error .= $MSG_empty_language;
}
$mylanguage->error_description = $error;
$conf_files="";
if ( $error == "" ){

      $temp_language_id = $_SESSION[SESSION_TITLE.'gLANGUAGE'];
      $_SESSION[SESSION_TITLE.'gLANGUAGE'] = trim($_POST['lstlanguage']);
      $result =get_filenames(ROOT_PATH."include/dynamic_content","php","","",false);
      $n = sizeof($result);if ( $n > 0 ) $a = 1;
      for ($i = 0 ; $i < $n ; $i++ ){
      $conf_files.= $result[$i]."\n";
      include($result[$i]);
      }

      $result =get_filenames(ROOT_PATH."include/class","php","_conf","",true);
      $n = sizeof($result);if ( $n > 0 ) $b = 1;
      for ($i = 0 ; $i < $n ; $i++ ){
      $conf_files.=  $result[$i]."\n";
      include($result[$i]);
      }

      $result =get_filenames(ROOT_PATH."modules","php","","conf",true);
      $n = sizeof($result);if ( $n > 0 ) $c = 1;
      for ($i = 0 ; $i < $n ; $i++ ){
      $conf_files.=  $result[$i]."\n";
      include($result[$i]);
      }
      $_SESSION[SESSION_TITLE.'gLANGUAGE'] = $temp_language_id;

                            if ( $a == 1 || $b == 1 || $c == 1 ) {
										$conf_files = '<div ><br/><br/><strong>'.$CAP_import_msg_success.'</strong> <textarea cols="80" rows="12" >'.$conf_files."</textarea></div>";
                            $_SESSION[SESSION_TITLE.'flash'] = $RD_MSG_lan_imported.$conf_files;
                            header( "Location: contents_import.php");
                            exit();
                            }
                            else{
                            $_SESSION[SESSION_TITLE.'flash'] = $RD_MSG_on_fail;
                            header( "Location: contents_import.php");
                            exit();
                            }
}
}

?>
