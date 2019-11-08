<meta charset='utf-8'>
<?php
require '../5-2/point.php';

$first = new Point();
$first->x = 3;
$first->y = 3;

$second = $first;

$second->x = 5;
$second->y = 5;

echo "x: {$second->x}, y: {$second->y}"; //x: 5, y: 5