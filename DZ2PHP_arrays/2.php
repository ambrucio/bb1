
<?php
/*Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива.
Запишите ее в переменную $result.*/

$massiv=[1, 20, 15, 17, 24, 35];

$result=0;
    foreach ($massiv as $val) {

        $result += $val;
    }

    echo $result;

/*Другой вариант

$massiv=[1, 20, 15, 17, 24, 35];

$result=0;
FOR ($i=0; $i<count($massiv); $i++) {

    $result += $massiv[$i];

}
echo $result; */