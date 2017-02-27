<?php
error_reporting(E_ALL);
define('MAX', 100);
// 1,1,2,3,5,8,13,...
function getFibonacci($a, $b)
{
    $c = $a + $b;
    echo $c . '<br>';
    if ($c < MAX) {
        getFibonacci($b, $c); // 1, 2
    }
}
getFibonacci(1, 1);
// todo n! recursion