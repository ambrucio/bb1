<?php
/*Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5
x
xx
xxx
xxxx
xxxxx
 */

$a = '';

for ($i = 1; $i <= 20; $i++) {

    $a = 'x' . $a;

    echo "$a <br>";
}



