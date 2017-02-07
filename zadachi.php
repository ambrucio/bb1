<?php
/* задача 1*/
    $name='Max';
    $s_name='BB';
    $age='34';
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




