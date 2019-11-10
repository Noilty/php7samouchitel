<?php

echo counter();
echo '<br />';
echo counter();

/**
 * 
 * @return type
 */
function counter() 
{
    static $counter = 0;
    return ++$counter;
}

