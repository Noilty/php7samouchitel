<meta charset='utf-8'>
<?php
// Задание -> 3
//Создайте программу, которая округляет число 42.43752 до второго знака после точки - 42.44. 

$num =  42.43752;
echo myRound($num);

function myRound($num){
    return round($num, 2);
}