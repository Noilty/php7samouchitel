<?php
// Задание -> 4
// Найдите в документации функции decЬin () и Ьindec (), осуществляющие преобразования десятичного числа в двоичное и наоборот. Переведите десятичные числа 4252 и 89080 в двоичное представление. 

// decbin — Переводит число из десятичной системы счисления в двоичную
// bindec — Двоичное в десятичное

$num = [
    4252,
    89080
];
echo myDecbin($num);

function myDecbin($num){
    foreach ($num as $value) {
        echo $value.':';
        $value = decbin($value);
        echo $value.'<br />';
    }
}