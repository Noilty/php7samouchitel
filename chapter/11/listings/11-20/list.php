<?php

require_once '../11-19/return_array.php';

$result = list($bytes, $kbytes, $mbytes, $gbytes) = formatSize(18642678);

foreach ($result as $value) {
    echo "$value<br />";
}