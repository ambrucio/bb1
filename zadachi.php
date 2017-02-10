<?php
/* задача 1*/
    $name='Max';
    $s_name='BB';
    $age=34;
    echo 'Меня зовут : '.$name ; ?> <br>
<?php
    echo "Меня зовут : $name" ; ?> <br>
<?php
    echo "Меня зовут : $name $s_name" ; ?> <br>
<?php
    echo "Мне $age года" ;?> <br>
<?php
    echo 'Мне ' .$age. ' года' ; ?> <br>

<?php
    $name='Vika';
    $bb=&$name;
    $bb="Меня зовут $bb";
    echo $bb;
    echo $name;  /*дважды выводит имя*/ ?> <br>
<?php

/* Массивы*/
$employee1=['Max', 'Vika'];
echo $employee1 [1];

$employee2=['Riki', 'Nika'];
echo $employee2 [0];

$employees=[$employee1, $employee2]; ?> <br>
<?php
echo '<pre>';
print_r($employees);
echo '</pre>';                       ?> <br>


<?php
    $age=34;

if ($age >= 18 and $age <= 59){
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

                                    ?> <br>

<?php

$day=2;

    switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
            echo 'Это рабочий день';
    break;
    }
                                    ?> <br>

<?php

$day=7;

switch ($day) {
    case 6:
    case 7:
        echo 'Это выходной день';
    break;
    }
                                    ?> <br>

<?php

$day=8;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
    case 7:
        echo 'Это выходной день';
        break;
    default : echo 'Неизвестный день';
        break;
}

                                    ?> <br>

<?php
$s=100000;//м
echo "Длина участка, который проехал автомобиль : {$s} м"; ?> <br>
<?php
$t=1; //час
echo "Время движения : {$t} час ";?> <br>
<?php
$V1=($s/$t)/1000;
echo "Скорость автомобиля : {$V1} км/ч "; ?> <br>
<?php
$V2=(($V1)*1000)/3600;
echo "Скорость автомобиля : {$V2} м/c ";

                                    ?> <br>

<?php
$foo='bar';
$bar=10;
$foo=$bar;
echo $foo;

                                     ?> <br>
<?php

$a = 10;
$b = 5;
$operator = '+';

                                    ?> <br>
<?php
$a = 1;
$b = 5;

if ($a > $b) {
    echo "Max= {$a}";
  }
  else {echo "Max= {$b}";
  }                                 ?> <br>

<?php
$a = '78';
$b = 78;

if ($a == $b) {
    echo 'Равны';
}
else {echo 'Не равны';
}                                 ?> <br>

<?php
$a = '78';
$b = 78;

if ($a === $b) {
    echo 'Равны';
}
else {echo 'Не равны';
}                                 ?> <br>
<?php

var_dump ($a === $b);                  ?> <br>

<?php

$a = 20;
$b = (bool)$a;
     echo "Истина - {$b} ";
var_dump ($b);
                                ?> <br>

<?php

$a = 0;
$b = (bool)$a;
echo "Ложь - {$b} ";
var_dump ($b);
                                ?> <br>

<?php

$a = -20;
$b = (bool)$a;
echo "Истина - {$b} ";
var_dump ($b);
                                ?> <br>



<?php echo '1) Вывожу текст функцией "Echo"'; ?><br>
<?php print '2) Вывожу текст функцией "Print"';?><br>
<?='3) Вывожу текст функцией "&lt;?= ?&gt;"' ?><br>


<?php echo '1) //Однострочный комментарий'; ?><br>
<?php echo '2) /*многостроковый комментарий*/'; ?><br>
<?php echo '3) #Однострочный комментарий'; ?><br>


<?php

echo '&lt;?php - это открывающийся тег'; ?>

<br><?='&lt;?= - это сокращенный тег с выводом на экран между тегами html'?><br>



