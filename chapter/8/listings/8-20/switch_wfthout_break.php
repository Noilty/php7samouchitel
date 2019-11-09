<meta charset='utf-8'>
<?php

$num = 2;
switch ($num) {
    case 1:
        echo '1 ';
    case 2:
        echo '3 ';
    case 3:
        echo '5 ';
    case 4:
        echo '7 ';
    case 5:
        echo '9 ';
        break; 
    default:
        echo '<br />Это либо не число, либо число больше 9 или меньше 1';
}

