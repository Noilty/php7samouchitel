<?php
/**
 * 
 * @param int $var
 * @return int
 */
function getSum1($var)
{
    $var += 5;
    return $var;
}
function getSum2(&$var) //аргумент передается по ссыпке 
{
    $var += 5;
    return $var;
}

$new_var = 20;
echo getSum1($new_var); //25
echo "<br />{$new_var}"; //20
echo '<br /><br />';
echo getSum2($new_var); //25
echo "<br />{$new_var}"; //25