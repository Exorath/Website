<?php
  function errorh_get_error($conf, $error){
    return $conf->get("ERRORS." . $error . ".MESSAGE");
  }

  function errorh_log_error($conf, $error, $details = false){
    $erroroutput = errorh_get_error($conf, $error);
    if(!empty($erroroutput)){
      if($conf->get("ERRORS." . $error . ".LOG")){
        if($details === false){
          $log = "[" . $conf->get("ERRORS." . $error . ".TAG") . "] [" . $error . "] Message: " . $erroroutput . ";\n";
        } else {
          $log = "[" . $conf->get("ERRORS." . $error . ".TAG") . "] [" . $error . "] Message: " . $erroroutput . "; Details: " . $details . ";\n";
        }
        file_put_contents(INC_ROOT . $conf->get("MAIN.LOG"), $log, FILE_APPEND | LOCK_EX);
      }
      $_SESSION['notification_error'] = $erroroutput;
      return true;
    }
    return false;
  }
?>