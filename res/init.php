<?php 
  date_default_timezone_set('Europe/London');

  define('INC_ROOT', dirname(__DIR__));
 
  require_once INC_ROOT . "/res/functions/autoload.php";
  require_once INC_ROOT . "/composer/vendor/autoload.php";

  use Noodlehaus\Config;
  
  $conf = new Config([INC_ROOT . '/res/configs/main.json', INC_ROOT . '/res/configs/errors.json',]);

  if($conf->get('MAIN.DEBUG')){
    error_reporting(-1);
    ini_set("display_errors", "1");
  }

  try {
    $db = new PDO($conf->get('MAIN.DATABASE.DRIVER') . ":host=" . $conf->get('MAIN.DATABASE.HOST'), $conf->get('MAIN.DATABASE.USER'), $conf->get('MAIN.DATABASE.PASS'));
  } catch(PDOException $e) {
    if(errorh_log_error($conf, "E02", $e)){
      die($_SESSION['notification_error']);
    } else {
      die("Unknown error");
    }
  }

  $user_online = !empty($_SESSION['user']);
  if($user_online){
    $user = account_session_check($config, $db, $_SESSION['sessionhash']);
  } else {
    $user = false;
  }