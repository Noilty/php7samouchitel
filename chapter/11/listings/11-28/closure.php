<meta charset='utf-8'>
<?php

$message = 'Работа не может быть nродолжена из-за ощибок:<br />';

$chek = function (array $errors)  use ($message)
{
    if (isset($errors) && count($errors) > 0) {
        echo $message;
            foreach ($errors as $error) {
                echo "{$error}<br />";
        }
    }
};

$chek([]);
// ...
$errors[] = 'Заполните имя пользователя';
$chek($errors);
// ...
$message = 'Список требований'; //Уже не изменить
$errors = ['РНР', 'PostgreSQL', 'Redis'];
$chek($errors);

