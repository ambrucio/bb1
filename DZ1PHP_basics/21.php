<?php
/*Приведите число 0 к типу boolean. Объясните результат*/
$a = 0;
$b = (bool)$a;
echo "Ложь - {$b} ";
var_dump ($b);

/*Все числа (даже отрицательные) это TRUE. 0 - это FALSE