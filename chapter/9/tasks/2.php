<meta charset='utf-8'>
<table border="1">
    <tr>
        <th>Пн</th>
        <th>Вт</th>
        <th>Ср</th>
        <th>Чт</th>
        <th>Пт</th>
        <th>Сб</th>
        <th>Вс</th>
    </tr>
<?php
// Задание -> 2
// Создайте скриm, который выводил бы календарь на текущий месяц в виде таблицы. Столбцы таблицы должны представлять дни недели от понедельника до воскресенья, а в ячейках таблицы выводиться числа месяца. 
// Не реализовано (Нужна помощь)
?>
<?php for($i = 0; $i <= 4; $i++):?>
    <tr>
        <?php for($j = 0; $j <= 6; $j++): ?>
            <td><?php echo $j; ?></td>
        <?php endfor;?>
    </tr>    
<?php endfor;?>
   
</table>

<?php
// Пример из Интернета
$date = new DateTime('first day of');
$calendar = array();  
do {
    $calendar[$date->format('W')][$date->format('N')] = $date->format('j');
    $date->modify('+1 day');
} while ($date->format('j') !== '1');
?>
<table border=1>
    <thead>
        <tr>
            <th>Пн</th>
            <th>Вт</th>
            <th>Ср</th>
            <th>Чт</th>
            <th>Пт</th>
            <th>Сб</th>
            <th>Вс</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($calendar as $week):?>
        <tr>
        <?php for($i=1; $i<=7; $i++):?>
            <td><?= $week[$i]?></td>
        <?php endfor;?>
        </tr>  
    <?php endforeach;?>
    </tbody>
</table>
<?php

deBug($date);

/**
 * MyDebug
 * @param type $param
 */
function deBug($param) {
    print '<pre>';
    var_dump($param);
    print '</pre>';
}