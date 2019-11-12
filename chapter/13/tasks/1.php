<?php
// Задание -> 1
// Создайте скрипт, который через НТМL-форму принимал бы координаты двух
// точек в декартовой системе координат, а после нажатия на кнопку типа suЬmit
// выводил бы расстояние между двумя точками.

class Point 
{
    public $x;
    public $y;
}

$data = $_POST;
$errors = [];

$A = new Point();
$A->x = $data['A1'];
$A->y = $data['A2'];

$B = new Point();
$B->x = $data['B1'];
$B->y = $data['B2']; 

//Обработчик НТМL-формы
if(!empty($data)){
    //Если поля A1 или A2 не заполнены, выводим сообщение об ошибке
    if(empty($data['A1']) && empty($data['A2'])){
        $errors[] = 'Текстовое поле не заполнено (A)';
    }
    if(empty($data['B1']) && empty($data['B2'])){
        $errors[] = 'Текстовое поле не заполнено (B)';
    }
    //Если нет ошибок, начинаем обработку данных
    if(empty($errors)){
        htmlspecialchars($data['A1']);
        htmlspecialchars($data['A2']);
        htmlspecialchars($data['B1']);
        htmlspecialchars($data['B2']);

        $result = answerPoint($A, $B);
    }
}
//Выводим сообщения об ошибках, если они имеются
if(!empty($errors)){
    foreach ($errors as $err) {
        echo "<span style=\"color:red\">$err</span><br>";
    }
}
?>

<fieldset style="margin: 0 auto; width: 29%" >
    <legend>Расстояние между двумя точками</legend>
    <form method="POST">
        <fieldset>
            <legend>Точка: A</legend>
                ( <input type="text" name="A1" value="<?= htmlspecialchars($data['A1'], ENT_QUOTES); ?>" /> : <input type="text" name="A2" value="<?= htmlspecialchars($data['A2'], ENT_QUOTES); ?>" /> )
        </fieldset>
        <fieldset>
            <legend>Точка: B</legend>
                ( <input type="text" name="B1" value="<?= htmlspecialchars($data['B1'], ENT_QUOTES); ?>" /> : <input type="text" name="B2" value="<?= htmlspecialchars($data['B2'], ENT_QUOTES); ?>" /> )
        </fieldset>
        <?php if(!empty($result)): ?>
        <fieldset>
            <legend>Пара точек</legend>
            <?= 'Точка A ('.$A->x.':'.$A->y.')' ?> |
            <?= 'Точка B ('.$B->x.':'.$B->y.')' ?>
        </fieldset>
        <fieldset>
            <legend>Ответ</legend>
            <?= $result ?>
        </fieldset>
        <?php endif; ?>
        <br />
        <input type="submit" value="Отправить" style="width: 100%;" />
    </form> 
</fieldset>
<?php
/**
 * Расстояния между двумя точками
 * @param type $A_obj
 * @param type $B_obj
 * @return type
 */
function answerPoint($A_obj, $B_obj) 
{
    $A = pow(($B_obj->x - $A_obj->x), 2);
    $B = pow(($B_obj->y - $A_obj->y), 2);
    $number = sqrt($B + $A);
    $result = number_format($number, 2, '.', ' ');
    return $result;
}