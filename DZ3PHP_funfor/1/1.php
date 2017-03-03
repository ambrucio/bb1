<?php
/*Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть
 и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с
 общими словами.
 */

$a = false;
$b = false;

if ($_POST)
{
    $a = $_POST['words_a'];
    $b = $_POST['words_b'];
}

function getCommonWords($a, $b)
{
    $a = explode(' ', $a);
    $b = explode(' ', $b);
    $arr [] = null;

    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($b); $j++) {

            if ($a[$i] === $b[$j]) {
                $arr [] = $a[$i];

            }
        }
    }
    return $arr;
}

include '1.html';

?>



