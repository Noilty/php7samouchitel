<meta charset="utf-8">
<?php
// Задание -> 2
// Создайте класс двумерной декартовой точки Point, объявите объект с координатами
// (1, 1 ), сохраните сериализованный объект в файле с именем point.txt. При
// помощи другого скрипта извлеките и восстановите объект из файла point.txt.


// serialize — Генерирует пригодное для хранения представление переменной
// unserialize — Создает PHP-значение из хранимого представления 

class Point 
{
    public $x;
    public $y;
}

$point = new Point();
$point->x = 1;
$point->y = 1;

/**
 * Сериализация
 * @param type $obj
 */
function serializeObj($obj) 
{
    //serialize()
}

/**
 * ДеСериализация
 * @param type $obj
 */
function deSerializeObj($obj) 
{
    //unserialize()
}

/**
 * Запись в файл
 * @param type $obj
 */
function getFile($obj, $name_file) 
{
    
}

/**
 * Чтение из файла
 * @param type $name_file
 */
function setFile($name_file) 
{
    
}