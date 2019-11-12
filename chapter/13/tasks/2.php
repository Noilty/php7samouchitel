<?php
// Задание -> 2
// Создайте форму, содержащую текстовую область textarea и кнопку suЬmit . При
// нажатии на кнопку содержимое тестовой области должно сохраняться в файл
// content.txt. При повторной загрузке формы в другом окне содержимое файла
// content.txt должно подставляться в тестовую форму.

// htmlspecialchars($value, ENT_QUOTES) — Преобразует специальные символы в HTML-сущности
// ENT_QUOTES Преобразует как двойные, так и одинарные кавычки.

$data = $_POST;
$errors = [];
$file_name = 'content.txt';

if(!empty($data)){
    ////Если поле textarea пустое, выводим сообщение об ошибке
    if(empty($data['content'])){
        $errors[] = '*Текстовое поле не заполнено';
    } else {
        echo 'Контент: '.htmlspecialchars($data['content']);
        getContent($file_name, $data['content']);
        exit();        
    }
}

//Выводим сообщения об ошибках, если они имеются
if(!empty($errors)){
    foreach ($errors as $err) {
        echo "<span style=\"color:red\">$err</span><br>";
    }
}
?>

<html>
    <head>
        <title>Задание 2</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="POST">
            <textarea name="content" cols="50" rows="5"></textarea><br />
            <input type="submit" name="name" value="Отправить" />
        </form>
        <textarea name="load_content" cols="50" rows="5"><?= setContent($file_name); ?></textarea>
    </body>
</html>

<?php

/**
 * Запись контента в файл
 * @param type $content
 */
function getContent($file_name, $content) 
{
    $result = file_put_contents($file_name, $content);
    return $result;
}

/**
 * Чтение контента из файла
 * @param type $file_name
 */
function setContent($file_name) 
{
    $result = file_get_contents($file_name);
    return $result;
}