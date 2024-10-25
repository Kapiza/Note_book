<?php

if (isset($_POST['mes_in'])){
    $content = file_get_contents('data.txt');
    // Алгоритм вывода сообщений.
    $pos = 0;
    // Цикл работает пока находится символ начала сообщения
    while (($pos=strpos($content, "▲", $pos))!==false) { 
        $start_pos = $pos + 3; // Находим первый строки сообщения
        $end_pos = strpos($content, "▼", $pos+4); // Находим символ конца сообщения
        $substr_length = $end_pos - $start_pos; // Находим длину
        $mes = substr($content, $start_pos, $substr_length); // Вырезаем строку с сообщением
        $mes = str_replace("\n", "<br/>", $mes); // Заменяем все символы переноса строки на <br>
        // чтобы в выводимом сообщении в нужных местах также переносились строки
        echo '<li class="mes_default" id="mes_id" >' . $mes . '</li>'; // Выводим сообщение
        $pos = $end_pos; // Переопределяем переменную pos для ускорения работы цикла
    }
}
    