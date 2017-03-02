<?php
error_reporting(E_ALL);
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
function isIntegerNumber($a)
{
    $int = (int) $a;
    return $int - $a == 0;
}
function intFilter(&$value)
{
    if (!is_numeric($value)) {
        return false;
    }

    $value = (float) $value;

    if (!isIntegerNumber($value)) {
        return false;
    }

    $value = (int) $value;

    return true;
}
if (isRequestPost()) {
    $numbers = requestPost('numbers');

    if (!$numbers) {
        die('bad data');
    }

    $numbers = explode(',', $numbers);
    debug($numbers);

    $numbers = array_filter($numbers, function(&$value) {
        if (!is_numeric($value)) {
            return false;
        }

        $value = (float) $value;

        if (!isIntegerNumber($value)) {
            return false;
        }

        $value = (int) $value;

        return true;
    });


    // foreach ($numbers as $key => &$number) {

    //     if (!is_numeric($number)) {
    //         unset($numbers[$key]);
    //         continue;
    //     }

    //     $number = (float) $number;

    //     if (!isIntegerNumber($number)) {
    //         unset($numbers[$key]);
    //         continue;
    //     }

    //     $number = (int) $number;
    // }


    debug($numbers);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Int</title>
</head>
<body>

<form method='post'>
    <input type="text" name="numbers" value="<?=requestPost('numbers') ?>"/>
    <button>GO!!</button>
</form>

</body>
</html>