
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


    $rows = 10;
    $cols = 10;

    $color_value = range (16756000, 16766000, 100);


var_dump($color_value);


    ?>

<table border="1" cellpadding="2" cellspacing="0">

    <?php for ($i = 1; $i <= $rows; $i++): ?>
            <tr>
                 <?php for ($j = 1; $j <= $cols; $j++):

                     $color = dechex($color_value[$i*$j]);
                    ?>
                    <td style="background-color: #<?=$color?>"><?=$color ?></td>


                 <?php endfor; ?>
             </tr>
    <?php endfor; ?>

</table>


</body>
</html>