<meta charset='utf-8'>
<?php
//Формируем случайное число от 1 до 10
$index = mt_rand(0, 10);

//Формируем имя константы 
$name = "VALUE{$index}";

//Определяем константу с динамическим именем
define($name, 1995);

//Получаем значение константы 
echo "$name: ".constant($name);