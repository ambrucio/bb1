<?php
/*Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной
age является отрицательным числом, или вовсе числом не является*/

$age=0;


if ($age !== (int)$age) {
    echo 'Неизвестный возраст';
}
elseif ($age >= 18 and $age <= 59){
    echo 'Вам еще работать и работать';
}
elseif ($age>59){
    echo 'Вам пора на пенсию';
}
elseif ($age > 0 and $age <= 17){
    echo 'Вам еще рано работать';
}
elseif ($age === 0){
    echo 'Вам еще рано работать';
}
elseif ($age < 0 ){
    echo 'Неизвестный возраст';
}
else {
    echo'Неизвестный возраст';
}
