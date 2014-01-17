<?php
$Mylanguage = new Language($myconnection);
$Mylanguage->connection = $myconnection;
$array_languages = $Mylanguage->get_list_array();
$error = "";

if(isset($_POST['submit']) && $_POST['submit'] == $CAP_publish || isset($_POST['submit']) && $_POST['submit'] == $CAP_unpublish){
  if ( trim($_POST['lstlanguage']) == -1 ){
      $error .= $MSG_empty_language;
      $Mylanguage->error_description = $error;
  }
  else{
  $language_id = $_POST['lstlanguage'];
      if ($_POST['submit'] == $CAP_publish){
      $val = $this->content->publish_all($language_id);
      if ( $val == true ){
      $_SESSION[SESSION_TITLE.'flash'] = $RD_MSG_published;
      header( "Location: publishall.php");
      exit();
      }
      else{
      $_SESSION[SESSION_TITLE.'flash'] = $RD_MSG_on_fail;
      header( "Location: publishall.php");
      exit();
      }
      }
      else{
      $val = $this->content->unpublish_all($language_id);
      if ( $val == true ){
      $_SESSION[SESSION_TITLE.'flash'] = $RD_MSG_unpublished;
      header( "Location: publishall.php");
      exit();
      }
      else{
      $_SESSION[SESSION_TITLE.'flash'] = $RD_MSG_on_fail;
      header( "Location: publishall.php");
      exit();
      }
      }
  }
}

?>
