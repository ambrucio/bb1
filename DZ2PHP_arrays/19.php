<?php
/*Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
 */

$arr = array('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Нд');

$day = 5;

foreach ($arr as $key => $val) {
    if ($key == $day - 1)
    {
        echo "<em>$val</em><br>";
    } else {
        echo $val . '<br>';
    }
}