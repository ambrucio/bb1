<?php

/*
Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.

 */

$a = '123';
$summa = 0;
for ($i = 0; $i <= strlen($a); $i++) {

    $summa += $a[$i];

    }
echo $summa;

/* или так

$a='543';
$i=0;
$summa=0;
while($i<strlen($a)){
    $summa += $a[$i];
    $i++;
}
echo $summa;*/