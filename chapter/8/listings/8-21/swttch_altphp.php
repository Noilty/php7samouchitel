<meta charset='utf-8'>
<?php

$num = 2;
switch ($num):
    case '1':
        echo 'Продолжаем работу';
    case '2':
        echo 'Завершаем работу';
        break; 
    default:
        echo 'Некорректный ввод';
endswitch;

