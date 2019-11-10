<meta charset='utf-8'>
<?php
// Задание -> 2
// Пусть имеется массив ['fst' => 1, 'snd' => 2, 'thd' => з, 'fth' => 4. Получите на основании его новый массив с ключами его элементов [ 'fst', 'snd', 'thd' , 'fth' ] 

// array_keys -- Выбрать все ключи массива

$var_mass = [
    'fst' => 1,
    'snd' => 2,
    'thd' => 3,
    'fth' => 4
];

deBug(NewKeyMass(1, $var_mass));

//foreach (array_keys($var_mass) as $var_mass_key) {
//    $mass_key = $var_mass_key;
//    echo $mass_key.'<br />';
//}

/**
 * 
 * @param type $key_or_value
 * @param type $param
 * @return type
 */
function NewKeyMass($key_or_value, $param) {
    foreach ($param as $param_key => $param_value) {
        $key[] = $param_key;
        $value[] = $param_value;
    }
    if($key_or_value == 1) {
        return $key;
    } else {
        return $value;
    }
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