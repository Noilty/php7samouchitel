<meta charset='utf-8'>
<?php
// Задание -> 1
// Пусть имеется массив [ 'fst', 'snd', 'thd' , 'fth' Выведите случайный элемент массива. 

// array_rand — Выбирает одно или несколько случайных значений из массива

$var_mass = [
    'fst',
    'snd',
    'thd',
    'fth'
];

echo RandVar($var_mass);

/**
 * Случайный элемент массива
 * @param type $param
 * @return type
 */
function RandVar($param) {
    $rand_key = mt_rand(0, count($param)-1);
    $rand_value = $param[$rand_key];
    return $rand_value;
}