<?php
// Задание -> 1
// В документации на сайте http://php.net найдите описание функций file_get_сontents () и file_put_contents (), которые позволяют читать и записывать содержимое файла. Создайте два скрипта, первый должен записывать строку "Hello, world!" в файл hello.txt, а второй- считывать содержимое файла hello.txt и выводить его в окно браузера. 

if(file_exists('hello.txt')){
    echo '1';
} else {
    echo '0';
}

function getFile($filename, $text) {
    $result = file_get_contents($filename, $text);
    return $result;
}

function setFile($filename, $text) {
    $result = file_put_contents($filename, $text);
    return $result;    
}