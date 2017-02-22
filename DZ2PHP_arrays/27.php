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

    <h1 align="center">Генератор случайных таблиц</h1>

    <?php

    $rows = 7;
    $cols = 7;
    $colors = ['red','yellow','blue','gray','maroon','brown','green'];
    ?>

<table align="center" border="2" cellspacing="0" cellpadding="5">
    <?php for ($i = 1; $i <= $rows; $i++): ?>
        <tr>
            <?php for ($j = 1; $j <= $cols; $j++):

                $number = rand (0, 100);
                shuffle($colors);

                foreach ($colors as $val)
                {
                    $color = $val;
                }
                ?>
                <td style="background-color: <?=$color?>"><?=$number?></td>

            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>


</body>
</html>