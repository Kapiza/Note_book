<?php
if (isset($_POST["send_x"])) {
   if (trim($_POST['mes_in']) === ''){
       echo '<script src="input_empty.js"></script>';
    } 
}