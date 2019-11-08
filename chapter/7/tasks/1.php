<meta charset='utf-8'>
<?php
// Задание -> 1
// Создайте скрипт, который возводил бы одно целое число в другое, не прибегая к оператору ** или встроенной функции pow (). 

echo myPow(3,2);

function myPow($num1, $num2) {
    if(is_int($num1) && is_int($num2)){
        return $num1*$num2;
    } else {
        echo 'Не целое число';
    }
    
}