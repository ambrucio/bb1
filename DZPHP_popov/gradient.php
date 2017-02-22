<?php
/*Создать генератор случайных таблиц. Есть переменные: $rows - кол-во строк в таблице,
            $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue',
            'gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу
            размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива
            $colors. В каждой ячейке должно находиться случайное число.*/
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Генератор случайных таблиц</title>
</head>
<body>

    <h1>Генератор случайных таблиц</h1>
    <h3>Make gradients from left to right on each row</h3>
    <?php

       // $rows = rand(1, 10);
       // $cols = rand(1, 10);
    //$max_color_value = pow(16, 6);

    $rows = 10;
    $cols = 10;
    $colors = array('red','yellow','blue','gray','maroon','brown','green')
    ?>

<table border="1">
    <?php for ($i = 1; $i <= $rows; $i++): ?>
        <tr>
            <?php for ($j = 1; $j <= $cols; $j++):

                $color = dechex(rand(0, $max_color_value));
                ?>
                <td style="background-color: #<?=$color?>"><?=$color ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>


</body>
</html>