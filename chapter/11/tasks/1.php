<meta charset='utf-8'>
<?php
// Задание -> 1
// В документации к языку РНР найдите и изучите приемы использования функции function_ exists (), осуществляющей проверку существования функции. 

//function_exists — Возвращает TRUE, если указанная функция определена

if (function_exists(functionName)) {
    echo "Функция определена.<br />\n";
} else {
    echo "Функция не определена.<br />\n";
}

function functionName() 
{
    echo 'Hello, World!';
}