<meta charset='utf-8'>
<?php
require '../5-2/point.php';

$first = new Point();
$first->x = 3;
$first->y = 3;

$second = clone $first;

$second->x = 5;
$second->y = 5;


echo 'first (Main)<br />';
echo "x: {$first->x}, y: {$first->y}"; //x: 3, y: 3
echo '<br />second (Clone)<br />';
echo "x: {$second->x}, y: {$second->y}"; //x: 5, y: 5

