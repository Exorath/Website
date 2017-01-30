<?php
// account functions

function account_session_create($db, $userid){
  $sessionhash = randomString(128);
  
  $removeoldsession = $db->prepare("DELETE FROM `sessions` WHERE `session_user_id` = :session_user_id");
  $removeoldsession->bindParam(":session_user_id", $userid);
  $removeoldsession->execute();
  
  $session = $db->prepare("INSERT INTO `sessions`(`session_user_id`, `session_hash`) VALUES (:session_user_id, :session_hash)");
  $session->bindParam(':session_user_id', $userid);
  $session->bindParam(':session_hash', $sessionhash);
  $session->execute();
  
  return $sessionhash;
}

function account_session_check($config, $db, $session){
  if($sessionhash == false OR empty($sessionhash)){
    return false;
  } else {
    $user = $db->prepare("SELECT `session_user_id`, `session_hash`, `session_time`, `user_id`, `user_email`, `user_mc_uuid`, `user_email_ver`, `user_local``user_name`, `user_fname`, `user_lname` FROM `sessions` LEFT JOIN users on sessions.session_user_id = users.user_id WHERE sessions.session_hash = :session_hash");
    $user->bindParam(':session_hash', $sessionhash);
    $user->execute();
    $user = $user->fetch(PDO::FETCH_ASSOC);
    if(strtotime($user['session_timestamp']) + 3 * 60 * 60 > strtotime('NOW')){
      return $user;
    } else {
      header('Location: ' . $config->get('MAIN.PROTOCOL') . '://' . $config->get('MAIN.DOMAIN') . $config->get('MAIN.PATH') . '/logout/');
      return false;
    }
  }
}

function account_login($config, $db, $email, $password){
  $user = $db->prepare("SELECT `user_id`, `user_email_ver`, `user_password`, `user_google_id` FROM `users` WHERE `user_email` = :useremail");
  $user->bindParam(":useremail", $email);
  $user->execute();
  
  if($user->rowCount() == 1){
    if(empty($user['user_password']) AND !empty($user['user_google_id'])){
       header('Location: ' . $googleclient->createAuthUrl());
    } else if(password_verify($password, $user['user_password'])){
      $sessionhash = account_session_create($db, $user['user_id']);
      $_SESSION['sessionhash'] = $sessionhash;
      return true;
    } else {
      errorh_log_error($conf, "", "Password is wrong");
      header('Location: ' . $config->get('MAIN.PROTOCOL') . '://' . $config->get('MAIN.DOMAIN') . $config->get('MAIN.PATH') . '/login/');
    }
  } else {
    errorh_log_error($conf, "", "Email does not exist");
    header('Location: ' . $config->get('MAIN.PROTOCOL') . '://' . $config->get('MAIN.DOMAIN') . $config->get('MAIN.PATH') . '/login/');
  }
}

function account_logout($db, $userid){
  $_SESSION = array();
  session_destroy();
  
  $removeoldsession = $db->prepare("DELETE FROM `sessions` WHERE `session_user_id` = :session_user_id");
  $removeoldsession->bindParam(":session_user_id", $userid);
  $removeoldsession->execute();
  
  return true;
}

function account_register(){
  return true;
}

function account_google(){
  return true;
}

function account_minecraft(){
  return true;
}