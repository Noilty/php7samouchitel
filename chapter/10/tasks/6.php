<meta charset='utf-8'>
<?php
// Задание -> 6
// Создайте текстовый файл с названиями месяцев. В документации РНР найдите функцию file {), изучите приемы ее использования и создайте массив с названиями месяцев из содержимого текстового файла. 

// file — Читает содержимое файла и помещает его в массив

$file_month = file('month.txt');

foreach ($file_month as $value) {
    $i++;
    $mass_month[] = $value;
    echo "{$i}: {$value}<br />";
}

deBug($mass_month);

/**
 * MyDebug
 * @param type $param
 */
function deBug($param) {
    print '<pre>';
    var_dump($param);
    print '</pre>';
}