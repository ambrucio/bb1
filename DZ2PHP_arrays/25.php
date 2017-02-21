<?php
/*Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами
 */

for ($i=0; $i <= 5; $i++)
{
    $arr[] = rand(0, 100);
}
echo '<pre>';
print_r($arr);
echo '</pre>';

$max = max($arr);
$min = min($arr);

echo "Max = $max<br>";
echo "Min = $min";

$keyMin = array_search($min, $arr);
$keyMax = array_search($max, $arr);

$arr[$keyMin] = $max;
$arr[$keyMax] = $min;

echo '<pre>';
print_r($arr);
echo '</pre>';