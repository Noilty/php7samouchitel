<?php

$json = '{"employee":"Иван Иванов","phones":["916 153 2854","916 64 3 8420"]}';
$arr = json_decode($json, TRUE);
echo "<pre>";
print_r($arr);
