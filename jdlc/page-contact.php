<?php

if(!empty($_POST) && isset($_POST['mailto'])){
  //check nouce
  if(!wp_verify_nonce( $_POST['pub_meta_noncename'], plugin_basename(__FILE__))){
    // lets send an email
    $first = trim($_POST['firstname']);
    $last = trim($_POST['lastname']);
    $company = trim($_POST['company']);
    $location = trim($_POST['location']);
    $message = trim($_POST['message']);

    $to = trim($_POST['mailto']);
    $subject = "[JDLC Equiry] $last, $first";
    $body = "Name: $last, $first\n\nCompany: $company\n\nLocation: $location\n\nMessage: $message";
    wp_mail($to, $subject, $body);
  }
}

require_once('page.php');

?>


