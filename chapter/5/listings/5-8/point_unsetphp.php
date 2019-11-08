<meta charset='utf-8'>
<?php
require '../5-2/point.php';

$point = new Point();
$point->x = 3;
$point->y = 7;
// Уничтожение объекта
unset($point);

if(isset($point)){
    echo $point->x;
} else {
    echo 'Переменная_уничтожена';
}