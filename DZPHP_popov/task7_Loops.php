<?php
error_reporting(E_ALL);
// 1 + x + x^2 + x^3 + ... + x^n
function requestPost($key, $default = null)
{
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}
function isRequestPost()
{
    return (bool) $_POST;
}
function debug($x)
{
    echo '<pre>';
    var_dump($x);
    echo '</pre>';
}
if (isRequestPost()) {
    $n = (int) requestPost('n');
    $x = (float) requestPost('x');

    // todo: посчитать с отрицательным показателем
    if ($n < 0) {
        die('bad data');
    }

    $sum = 1;

    for ($i = 1; $i <= $n; $i++) {
        debug(pow($x, $i));
        $sum += pow($x, $i);
    }


    debug($sum);

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loops</title>
</head>
<body>

<form method='post'>
    <input type="text" name="x" value="<?=requestPost('x') ?>" placeholder='x'>
    <input type="text" name="n" value="<?=requestPost('n') ?>" placeholder='n'>
    <button>GO!!</button>
</form>

</body>
</html>