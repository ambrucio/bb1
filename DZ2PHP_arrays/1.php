<?php
/*Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.*/

$massiv=['html', 'css', 'php', 'js', 'jq'];

foreach ($massiv as $value)
{
    echo "<a>$value</a><br>";
}