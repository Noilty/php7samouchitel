<meta charset='utf-8'>
<?php
// Задание -> 1
// В документации на сайте http://php.net найдите описание функций file_get_сontents () и file_put_contents (), которые позволяют читать и записывать содержимое файла. Создайте два скрипта, первый должен записывать строку "Hello, world!" в файл hello.txt, а второй- считывать содержимое файла hello.txt и выводить его в окно браузера. 

// file_exists — Проверяет существование указанного файла или каталога
// file_put_contents — Пишет данные в файл
// file_get_contents — Читает содержимое файла в строку

/**
 * 1,1
 */
$file_name = 'hello.txt';
if(file_exists($file_name)){
    $message = 'Hello, World!';
    echo 'Файл '.$file_name.' найден<br />';
    if(!empty($message)){
        echo 'Сообщение: '.$message;
        if(getFile($file_name, $message)){
            echo '<br />Запись: Успех';
        } else {
            echo '<br />Запись: Что-то пошло не так';
        }
    } else {
        echo 'Пустое сообщение';
    }
} else {
    echo 'Файл не найден';
}

echo '<hr />';

/**
 * 1,2
 */
if(file_exists($file_name)){
    $text = setFile($file_name);
    echo 'Содержимое файла '.$file_name.': '.$text;
} else {
    echo 'Файл не найден';
}

/**
 * Функция чтения из файла
 * @param type $file_name
 * @param type $message
 * @return type
 */
function setFile($file_name) {
    $result = file_get_contents($file_name);
    return $result;
}

/**
 * Функция записи в файл
 * @param type $file_name
 * @param type $message
 * @return type
 */
function getFile($file_name, $message) {
    $result = file_put_contents($file_name, $message);
    return $result;    
}