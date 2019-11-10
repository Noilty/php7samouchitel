<?php

// Отображаем строки одну под другой 
$items = ['PHP', 'Python', 'Ruby', 'Java'];
tooManyArgs(...$items);

/**
 * 
 * @param type $fst
 * @param type $snd
 * @param type $thd
 * @param type $fth
 */
function tooManyArgs($fst, $snd, $thd, $fth) 
{
    echo "1:{$fst}<br />";
    echo "2:{$snd}<br />";
    echo "3:{$thd}<br />";
    echo "4:{$fth}<br />";
}

