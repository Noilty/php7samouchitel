<?php 
setcookie('counter', counter());
?>
<html>
    <head>
        <title>Подсчет количества обращений к странице</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        //Выводим значение cookie
        echo "Вы посетили эту страницу {$_COOKIE['counter']} раз";        
        ?>
    </body>
</html>

<?php

function counter() 
{
    if(isset($_COOKIE['counter'])) {
        $_COOKIE['counter']++;
    } else {
        $_COOKIE['counter'] = 1;
    }
    return $_COOKIE['counter'];
}

