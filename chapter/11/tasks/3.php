<meta charset='utf-8'>
<?php
// Задание -> 3
// Создайте функцию sum ( ) , которая принимает любое количество числовых аргументов и возвращает их сумму

$arg = [5,5,5,5];

echo sum(...$arg);

/**
 * Сумма чисел
 * @param type $param
 * @return type
 */
function sum(...$param) 
{
    foreach ($param as $value) {
        $sum += $value;
    }
    return $sum;
}