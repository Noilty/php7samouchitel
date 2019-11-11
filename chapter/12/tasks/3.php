<meta charset="utf-8">
<?php
// Задание -> 3
// Создайте скрипт, преобразующий число в арабской нотации (от 1 до 2000)
// в римское. Арабские числа соотносятся с римскими следующим образом: 1 - 1,
// 5 - V, 10- Х, 50- L, 100- С, 500- D, 1000- М. Например, 116- это
// CXVI, 199- это CXCIX, 14-это XIV.

echo romeNum(98);

/**
 * Преобразование в римские цифры
 * @param type $number
 * @return string
 */
function romeNum($number) 
{     
    require_once 'rome_number.php';
    
    $_I = $I[$number % 10];
    $_X = $X[($number % 100) / 10];
    $_C = $C[($number % 1000) / 100];
    $_M = $M[$number / 1000];
    
    $rome_number = $_M.$_C.$_X.$_I;
    $result = "{$number}: {$rome_number}";
    
    return $result;
}