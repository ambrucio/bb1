<?php
/*Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной
age является отрицательным числом, или вовсе числом не является*/

$age=3;
$fraza1='Неизвестный возраст';
$fraza2='Вам еще работать и работать';
$fraza3='Вам пора на пенсию';
$fraza4='Вам еще рано работать';


    if ($age !== (int)$age) {
    echo $fraza1;
    }
        elseif ($age >= 18 and $age <= 59){
        echo $fraza2;
    }
        elseif ($age>59){
        echo $fraza3;
    }
        elseif ($age > 0 and $age <= 17){
        echo $fraza4;
    }
        elseif ($age === 0){
        echo $fraza4;
    }
        elseif ($age < 0 ){
        echo $fraza1;
    }
        else {
        echo $fraza1;
    }
