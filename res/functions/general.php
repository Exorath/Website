<?php  
  function escape($data){
    return htmlentities($data, ENT_QUOTES, 'UTF-8');
  }
  
  function showdates($conf, $time){
    return date($conf->get('MAIN.TIME_FORMAT'), strtotime($time));
  }
?>