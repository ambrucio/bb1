<?php
/*Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть
 и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с
 общими словами.
 */

/*include '1.html';*/

$a = $_POST ['words_a'];
$b = $_POST ['words_b'];

function getCommonWords($a, $b)
{

    $a = explode(' ', $a);
    $b = explode(' ', $b);

    for ($i = 0; $i <= count($a); $i++)
    {
        for ($j = 0; $j <= count($b); $j++)
        {

            if ($a[$i] === $b[$j])

                $arr [ ] = $a[$i];
        }

    }
    return $arr;
}


/*var_dump($b[$j]);
var_dump(getCommonWords($a, $b));*/

//echo implode (', ',getCommonWords($a, $b));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task 1</title>
</head>
<body>

<form method="post">
    <textarea rows="10" cols="45" name="words_a" placeholder="Ваше сообщение 1" ></textarea>
    <textarea rows="10" cols="45" name="words_b" placeholder="Ваше сообщение 2"></textarea>
    <div><button>Отправить</button></div>
    <div><h3><?=implode (', ',getCommonWords($a, $b));?></h3></div>
</form>

</body>
</html>

