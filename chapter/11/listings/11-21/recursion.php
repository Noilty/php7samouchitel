<?php

//Вызываем функцию callself (} 
callSelf(4);

/**
 * 
 * @param type $counter
 * @return type
 */
function callSelf($counter) 
{
    //Если параметр $counter больше, продолжаем рекурсивный спуск 
    if ($counter > 0) {
        //Уменьшаем значение параметра $counter и выводим его значение 
        echo ($counter--).'<br />';
        //Осушествляем рекурсивный вызов функции callself() 
        callSelf($counter);
    }
    //Если значение параметра меньше или равно О, прекращаем 
    //рекурсивный спуск 
    else {
        return;
    }
}

