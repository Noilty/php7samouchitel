<meta charset='utf-8'>
<?php
// Задание -> 2
// Создайте функцию odd (), которая принимает в качестве аргумента целое число и возвращает true в случае, если число нечетное, и false - в противном случае.

odd(3);

function odd($num) 
{
    if (!($num%2) == 0) {
        echo 'False';
        return FALSE;
    } else {
        echo 'True';
        return TRUE;        
    }
}
