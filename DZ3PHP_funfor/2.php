<?php
/*Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов
в тексте. Реализовать с помощью функции.*/


function my_array_reverse($arr)
{
    for($i = count($arr); $i < 0 ; $i--)
    {
        $result[] = $array[$i];
    }
    return $result;
}
var_dump(my_array_reverse(array(1, 2, 3, 4)));



?>