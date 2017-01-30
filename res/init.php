<?php 
  date_default_timezone_set('Europe/London');

  define('INC_ROOT', dirname(__DIR__));
 
  require_once INC_ROOT . "/res/functions/autoload.php";
  require_once INC_ROOT . "/composer/vendor/autoload.php";

  use Noodlehaus\Config;
  
  $conf = new Config(INC_ROOT . '/res/configs');

  if($conf->get('MAIN.DEBUG')){
    error_reporting(-1);
    ini_set("display_errors", "1");
  }

  try {
    $db = new PDO($conf->get('MAIN.DATABASE.DRIVER') . ":host=" . $conf->get('MAIN.DATABASE.HOST'), $conf->get('MAIN.DATABASE.USER'), $conf->get('MAIN.DATABASE.PASS'));
  } catch(PDOException $e) {
    // error handler
  }

  $user_online = !empty($_SESSION['user']);
  if($user_online){
    // if user have a session with name "user" with an hash in it; $user = acc_get($conf, $db);
  } else {
    $user = false;
  }