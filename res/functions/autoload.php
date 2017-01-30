<?php
  $toload = array_diff(scandir(INC_ROOT . "/res/functions/"), array('..', '.', 'autoload.php'));
  foreach($toload as $load){
    include INC_ROOT . "/res/functions/" . $load;
  }
?>