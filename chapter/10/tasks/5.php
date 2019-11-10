<meta charset='utf-8'>
<?php
// Задание -> 5
// Создайте массив со случайным количеством элементов от 5 до 1 О, элементы которого принимают случайное значение от О до 100. Отсортируйте элементы массива в порядке от наименьших к наибольшим значениям. 

deBug(randElement());

/**
 * Функция генерирующая массив от 5 до 10 элементов со значениями от 0 до 100
 * @return type
 */
function randElement() {
    $count = mt_rand(5, 10);
    for($i = 0; $i <= $count; $i++){
        $mass[] = $mass[$i];
        for($j = 0; $j <= $count; $j++){
            $mass[$i] = mt_rand(0, 100);
        }
    }
    return $mass;
}

/**
 * MyDebug
 * @param type $param
 */
function deBug($param) {
    print '<pre>';
    var_dump($param);
    print '</pre>';
}