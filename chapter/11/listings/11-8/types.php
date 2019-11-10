<?php

echo getSum(5, 5).'<br />';
echo getSum(4.5, 5.4);

/**
 * 
 * @param int $fst
 * @param int $snd
 * @return int
 */
function getSum(int $fst, int $snd):int
{
    return $fst+$snd;
}
