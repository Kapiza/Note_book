<?php

if (isset($_POST["send_x"])) {
  //Если поле ввода пустует, то ничего не происходит
   if (!(trim($_POST['mes_in']) === '')){   
     // Добавляем символы конца и начала записи + символы для комфортного чтения .txt файла
     $message = "▲" . $_POST["mes_in"] . "▼\r\n\r\n"; 
     file_put_contents("data.txt", $message, FILE_APPEND);
  } 
}
