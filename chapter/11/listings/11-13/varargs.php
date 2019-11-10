<?php

function echoList(...$items) 
{
    foreach ($items as $value) {
        echo "$value<br />\n";
    }
}

echoList('PHP', 'Python', 'Ruby', 'Java');