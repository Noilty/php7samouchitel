<meta charset='utf-8'>
<?php
// Задание -> 2
// Используя константы и обслуживающие их функции, добейтесь от конструкции require поведения require_once. Иными словами, при многократном включении РНР-файла, например, с классом Point, код во включаемом файле должен выполниться только ОДИН раз. 
// Не реализовано
$array = [
    '../../5/listings/5-2/point.php',
    '../../5/listings/5-9/class_scope.php',
    '../../5/listings/5-2/point.php',
];

myRequire($array);

function myRequire($array){
    $i = 0;
    foreach ($array as $array_value) {
        $i++;
        $name = "file{$i}";
        define($name, $array_value);
        if(defined($name)){
            require constant($name);
            echo "$name: ". constant($name);
            echo " [подключен]<br />";
        }
    }
}