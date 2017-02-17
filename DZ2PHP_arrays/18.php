
<head>
    <meta charset="utf-8">
    <style>
       .word {
            color: red;
        }
    </style>
</head>

<?php
/*Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.
 */

$arr = array('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Нд');

$week = 6;

foreach ($arr as $key => $val)
{
    if ($key == $week or $key == $week - 1)
    {
        echo "<b><span class='word'>$val</span></b><br>";
    }
    else {
        echo $val . '<br>';
    }

}