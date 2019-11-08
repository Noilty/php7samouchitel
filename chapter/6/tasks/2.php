<meta charset='utf-8'>
<?php
// Задание -> 2
// Используя константы и обслуживающие их функции, добейтесь от конструкции require поведения require_once. Иными словами, при многократном включении РНР-файла, например, с классом Point, код во включаемом файле должен выполниться только ОДИН раз. 
// Не реализовано (Нужна помощь)
$array = [
    '../../5/listings/5-2/point.php',
    '../../5/listings/5-9/class_scope.php',
    '../../5/listings/5-2/point.php', // Ошибка повторного подключения
];

myRequire($array);

function myRequire($array){
    foreach ($array as $array_value) {
        //basename() — Возвращает последний компонент имени из указанного пути
        $file_name = basename($array_value);
        
        //str_replace() — Заменяет все вхождения строки поиска на строку замены
        $name = "file-".str_replace('.', '-', $file_name); // 1 итерация = file-point-php
        if(!defined($name)){
            define($name, $array_value);
            require $array_value;
            echo "$array_value: [подключен]<br />";
        }
    }
}

