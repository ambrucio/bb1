<?php
/*Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой')*/

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $val)
{
    $ru[] = $val;
    $en[] = $key;
}
    echo '<pre>';
    print_r($ru);
    echo '</pre>';


    echo '<pre>';
    print_r($en);
    echo '</pre>';





