<?php
/*С помощью конструкции switch выведите фразу: "Это выходной день", если значение переменной day попадает в диапазон
 чисел от 6 до 7 (включительно)*/

$day=7;

switch ($day) {
    case 6:
    case 7:
        echo 'Это выходной день';
        break;
    }