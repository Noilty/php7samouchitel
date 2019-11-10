<meta charset='utf-8'>
<?php
// Задание -> 3
// Пусть имеется массив [ 'fst' , 'snd', 'thd' , 'fth' , 'snd', 'thd' J. Получите из него новый массив, содержащий только уникальные элементы [ 'fst' , 'snd' , 'thd', 'fth']. 

// array_unique — Убирает повторяющиеся значения из массива

$var_mass = [
    'fst',
    'snd',
    'thd',
    'fth',
    'snd',
    'thd'
];

//echo deBug(array_unique($var_mass));

deBug(deleteElement($var_mass));

function deleteElement($array) {
    $new_array = [];
    foreach ($array as $value) {
        if(!in_array($value, $new_array)){
            $new_array[] = $value;
        }
    }
    return $new_array;
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