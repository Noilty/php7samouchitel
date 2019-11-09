<meta charset='utf-8'>
<?php
// Задание -> 2
// Напишите скрипт, который при вызове создает в текущем каталоге файл с именем, отражающем текущие дату и время в формате "год-месяц-число-часминута-секунда", например 2017-04-16-13-10-13.txt. В файл запишите случайное число от О до максимально возможного целого числа в РНР. 

// mkdir — Создаёт директорию

$name_file = generateName();
if(!file_exists($name_file)) {
    $message = mt_rand(0, mt_getrandmax());
    $file_name = generateName();
    $flag = getFile($file_name, $message);
    if($flag){
        echo 'Файл '.$file_name.' создан<br />Сообщение: '.$message;
    } else {
        echo 'Что-то пошло не так';
    }
} else {
    echo 'Папка с именем '.$file_name.' уже существует';
}

/**
 * Функция генерации имени
 * @return type
 */
function generateName() {
    return date('Y-m-d-h-m-s');
}

/**
 * Функция записи в файл
 * @param type $file_name
 * @param type $message
 * @return type
 */
function getFile($file_name, $message) {
    $result = file_put_contents($file_name.'.txt', $message);
    return $result;    
}
