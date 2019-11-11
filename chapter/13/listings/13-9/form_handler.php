<html>
    <head>
        <title>title</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $errors = [];
        $data = $_POST;
        //Обработчик НТМL-формы
        if(!empty($data)){
            //Если поле first не заполнено, выводим сообщение об ошибке
            if(empty($data['first'])){
                $errors[] = 'Текстовое поле не заполнено';
            }
            //Если нет ошибок, начинаем обработку данных
            if(empty($errors)){
                //Выводим содержимое текстового поля first
                echo htmlspecialchars($data['first']);
                //Останавливаем работу скрипта, чтобы после
                //перенаправления не грузилась НТМL-форма
                exit();
            }
        }
        //Выводим сообщения об ошибках, если они имеются
        if(!empty($errors)){
            foreach ($errors as $err) {
                echo "<span style=\"color:red\">$err</span><br>";
            }
        }
        //НТМL-форма
        ?>
        <form method="post">
            <input type="text" name="first" value="<?= htmlspecialchars($data['first'], ENT_QUOTES); ?>" />
            <input type="submit" value="Отправить" />
        </form>
    </body>
</html>

