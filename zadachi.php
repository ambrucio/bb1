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
    $age='fgh';

    if ($age>=18 && $age<=59){
        echo 'Вам еще работать и работать';
    }
    if ($age>59){
        echo 'Вам пора на пенсию';
    }
    if ($age >= 0 && $age <= 17) {
        echo 'Вам еще рано работать';}

    if ($age < 0) {
        echo 'Неизвестный возраст';}


