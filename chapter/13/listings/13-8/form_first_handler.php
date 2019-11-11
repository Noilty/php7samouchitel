<?php
$data = htmlspecialchars($_POST['first']);

// Если поле first не заполнено, выводим сообщение об ошибке
if (empty($data)) {
    exit('Текстовое поле не заполнено');
} else {
    echo $data;
}

