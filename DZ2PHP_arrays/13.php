<?php
/*Вывести таблицу умножения*/

$TY=[1,2,3,4,5,6,7,8,9,10];


for ($a = 1; $a<=10; $a++) {

    foreach ($TY as $val) {
        $result = $a * $val;

        echo "{$a}x{$val}=$result<br>";
    }
}





/*<table border="1" align="center" cellspacing="0" cellpadding="4">
    <tr>
        <td><?="<br>"?></td>
        <td>sfsf</td>
        <td>sfsf</td>
        <td>sfsf</td>
        <td>sfsf</td>
    </tr>
    <tr>
        <td>sfsf</td>
        <td>sfsf</td>
        <td>sfsf</td>
        <td>sfsf</td>
        <td>sfsf</td>
    </tr>

</table>
*/