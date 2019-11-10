<meta charset="utf-8">
<?php
// Задание -> 1
// В документации с сайта http://php.net изучите синтаксис функций
// hightlight string () и hightlight file (), преобразующих РНР-код в НТМL-код
// с подсветкой синтаксиса. Создайте скрипт, который выводит собственный код
// с подсветкой синтаксиса РНР.

// highlight_string — Подсветка синтаксиса строки
// highlight_file — Подсветка синтаксиса файла

$text = implode('', getFile('1.php'));
highlight_string($text);

/**
 * Печатаем содержимое файла на экран
 * @param type $name_file
 */
function getFile($name_file) 
{
    foreach (fileOpen($name_file) as $value) {
        //echo highlight_string($value);
        $result[] = $value;
    }
    return $result;
}

/**
 * Открываем файл
 * @param type $name_file
 * @return type
 */
function fileOpen($name_file) 
{
    $file_mass = file($name_file);
    return $file_mass;
}