<?php
/*Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.*/

$massiv=[2, 5, 9, 15, 0, 4];

foreach ($massiv as $val) {
    if ($val>3 and $val<10)

        echo "<a>$val</a><br>";

}

