<?php
if (isset($_POST['reset_x'])) {
  $f_to_clear = fopen("data.txt", 'w');
  fclose($f_to_clear);
}

  // include_once("Messages.php");
  // $Message_list->clear_list();
