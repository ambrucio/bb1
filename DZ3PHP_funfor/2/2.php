<?php
/*Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов
в тексте. Реализовать с помощью функции.*/

if ($_POST)
{
    $a = $_POST['words_a'];
}

function TOP3Words(&$a)
{
    $a = explode(' ', $a);

    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a)-1; $j++) {

            if ($a[$i] === $b[$j]) {
                $arr [] = $a[$i];

            }
        }
    }
    return $arr;
}

require '2.html';







?>