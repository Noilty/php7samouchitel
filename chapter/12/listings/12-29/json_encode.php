<meta charset="utf-8">
<?php

$arr = [
    'employee' => 'Иван Иванов',
    'phones' => [
        '916 153 2854',
        '916 64 3 8420'
    ]
];

echo json_encode($arr,JSON_UNESCAPED_UNICODE);