<meta charset="utf-8">
<?php
// Задание -> 3
// Создайте скрипт, который читал бы содержимое текстового файла list.txt и выводил
// бы его содержимое в НТМL-форме со списком флажков перед каждой из
// строк. После выбора флажков и нажатия на кнопку submit содержимое файла
// list.txt необходимо переписать таким образом, чтобы выбранные строки были
// исключены.

// explode — Разбивает строку с помощью разделителя
// implode — Объединяет элементы массива в строку

$data = $_POST;
$name_file = 'list.txt';
$txt_mass = explode(' ', setList($name_file));

//Проверяем не пустой ли глобальный массив пост
if(!empty($data)){
    $list_str = implode(' ', deleteElement($txt_mass, $data['list_v']));
    echo '<br />'.var_dump($data['list_v']); //Массив с формы
    echo '<br />'.var_dump($txt_mass); //Массив из файла list.txt
    echo '<br />'.var_dump(deleteElement($data['list_v'], $txt_mass));
    //getContent($name_file, $list_str);
    exit();
}
?>

<html>
    <head>
        <title>Задание 3</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="POST">
            <?php foreach ($txt_mass as $v): ?>
            <label><input type="checkbox" name="list_v[]" value="<?= $v ?>" /><?= $v ?></label><br />
            <?php endforeach; ?>
            <input type="submit" value="Удалить" />
        </form>
    </body>
</html>

<?php
/**
 * Чтение из файла
 * @param type $file_name
 */
function setList($file_name) 
{
    $result = file_get_contents($file_name);
    return $result;
}

/**
 * Запись в файл
 * @param type $content
 */
function getContent($file_name, $content) 
{
    $result = file_put_contents($file_name, $content);
    return $result;
}

/**
 * Удаление элементов массива
 * @param type $mass_1
 * @param type $mass_2
 */
function deleteElement($txt_mass, $checked_mass) 
{
//    for ($i = 0; $i < count($mass_1); $i++) 
//    {
//        for ($j = 0; $j < count($mass_2); $j++) 
//        {
//            if($mass_1[$i] == $mass_2[$j]){
//                unset($mass_2[$j]);
//            }
//        }
//    }
//    return $mass_2;
    return array_diff($checked_mass, $txt_mass);
}