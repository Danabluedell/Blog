<?php

if (isset($_POST["character"]) && isset($_POST["real_name"]) ) {

    // Формируем массив для JSON ответа
    $result = array(
        'character' => $_POST["character"],
        'real_name' => $_POST["real_name"]
    );

    // Переводим массив в JSON
    echo json_encode($result);
}
