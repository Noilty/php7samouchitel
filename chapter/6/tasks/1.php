<meta charset='utf-8'>
<?php
// Задание -> 1
// Создайте скрипт, который выводил бы текущую версию РНР. 

versionPHP(1);

function versionPHP($param = 0) {
    if($param == 1){
        echo 'PHP Version: '.PHP_VERSION;
    }
}