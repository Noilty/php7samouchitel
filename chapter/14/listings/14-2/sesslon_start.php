<?php
session_start();

$_SESSION['name'] = 'value';
$_SESSION['arr'] = ['first', 'second', 'third'];

echo "<a href='../14-3/session_get.php'>Другая страница</a>";

