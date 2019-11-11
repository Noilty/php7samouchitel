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

getFile($point, 'point.txt');

echo "<hr />";

var_dump(setFile('point.txt'));

/**
 * Сериализация
 * @param type $obj
 */
function serializeObj($obj) 
{
    return serialize($obj);
}

/**
 * ДеСериализация
 * @param type $obj
 */
function deSerializeObj($obj) 
{
    return unserialize($obj);
}

/**
 * Запись в файл
 * @param type $obj
 */
function getFile($obj, $name_file) 
{
    //Проверяем существует ли файл
    if(file_exists($name_file)){
        echo "Файл <b>{$name_file}</b> найден<br />";
        //Проверяем не пустой ли объект
        if(!empty((array) $obj)){
            echo "Объект не пустой<br />Сериализация объекта<br />Запись в файл <b>{$name_file}</b>";
            file_put_contents($name_file, serializeObj($obj));
        } else {
            echo "Объект пустой";
        }
    } else {
        echo "Файл <b>{$name_file}</b> не был найден и был создан автоматически";
        fopen($name_file, 'w');
    }
}

/**
 * Чтение из файла
 * @param type $name_file
 */
function setFile($name_file) 
{
    $file = file_get_contents($name_file);
    return deSerializeObj($file);
}