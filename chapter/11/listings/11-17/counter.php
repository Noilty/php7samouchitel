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
    $counter = 0;
    return ++$counter;
}

