<?php

/**
 * 
 * @param type $bytes
 * @return type
 */
function formatSize($bytes) 
{
    $kbytes = $bytes / 1024;
    $mbytes = $kbytes / 1024;
    $gbytes = $mbytes / 1024;
    
    return [$bytes, $kbytes, $mbytes, $gbytes];
}