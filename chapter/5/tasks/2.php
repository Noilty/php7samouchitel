<meta charset='utf-8'>
<?php
// Задание -> 2
// Создайте класс для комплексных чисел. 

class Complex {
    
    public $re;
    public $im;
    
    function add($re, $im){
        $this->re += $re;
        $this->im += $im;
    }

}

$var = new Complex();
$var->re = 16.7;
$var->im = 101;
$var->add($var->re,$var->im);

echo "({$var->re}, {$var->im})";