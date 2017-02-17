<?php
/*Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
 */

/*$a = '';

for ($i = 1; $i <= 5; $i++) {

    $a = 'xx' . $a;

    echo "$a <br>";
}
*/


$a = '';
$i = 0;

    while ($i <= 5) {

    $a = 'xx' . $a;
    echo "$a <br>";
    $i++;
}


