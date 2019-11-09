<meta charset='utf-8'>
<?php
// Задание -> 3
// Напишите скрипт, который при вызове создает два файла: со списком всех возможных расширений extensions.txt и со списком всех предопределенных констант РНР constants.txt. 



$name_file = [
    'extensions.txt',
    'constants.txt'
];

foreach ($name_file as $name_file_value) {
    if(file_exists($name_file_value)){
        echo 'Файл '.$name_file_value.' найден<br />';
    } else {
        switch ($name_file_value) {
            case 'extensions.txt': getFile($name_file_value, Ext());
                break;
            case 'constants.txt': getFile($name_file_value, Con());
                break;
            default : echo 'ERR';
                break;
        }
        echo 'Файл '.$name_file_value.' не найден и был создан автоматически<br />';
    }
}
/**
 * Функция записи в файл
 * @param type $file_name
 * @param type $message
 * @return type
 */
function getFile($file_name, $message) {
    $result = file_put_contents($file_name, $message);
    return $result;    
}

/**
 * Список установленных расширений (extensions) PHP
 * https://www.php.net/manual/ru/extensions.alphabetical.php
 * @return string
 */
function Ext() {
    foreach (get_loaded_extensions() as $value) {
        $result .= $value.PHP_EOL;
    }
    return $result;
}

/**
 * Вывод предопределённых констант в PHP
 * http://taxor.ru/blog/90/
 * @return string
 */
function Con() {
    foreach (get_defined_constants() as $value) {
        $result .= $value.PHP_EOL;
    }
    return $result;
}