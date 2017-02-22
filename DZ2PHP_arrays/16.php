<?php
/*Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9
*/

$arr = range(1, 9);
$i = 0;

foreach ($arr as $elem)
{
    if (++$i % 3 == 0 ) {
        echo $elem.' <br>';
    }
    else
    {
        echo $elem.', ';
    }
}



/*
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$i = 1;

foreach ($arr as $elem)
{
    if ($i == 3 or $i == 6 or $i == 9) {
        echo $elem . ' <br>';

    }
    else
    {
        echo $elem . ', ';
    }
    $i++;
}*/