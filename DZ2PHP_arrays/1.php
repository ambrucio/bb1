<?php
/*Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.*/

$massiv=[1=>'html', 2=> 'css', 3=> 'php', 4=> 'js', 5=>'jq'];

foreach ($massiv as $value => $key) {
    echo "<a>$value $key</a><br>";
}