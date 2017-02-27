<?php
error_reporting(E_ALL);
define('TOP_COUNT_WORDS', 3);
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
function getTopWords(array $words)
{
    $arr = [];

    foreach ($words as $word) {
        $arr[$word] = strlen($word);
    }

    arsort($arr);
    return array_keys(array_slice($arr, 0, TOP_COUNT_WORDS));
}
if (isRequestPost()) {
    $words = requestPost('words');

    if (!$words) {
        die('bad data');
    }

    $words = array_values(array_filter(explode(' ', $words)));

    $topWords = getTopWords($words);

    debug($words);
    debug($topWords);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Top 3 words</title>
</head>
<body>

<form method='post'>
    <textarea name="words"><?=requestPost('words') ?></textarea>
    <button>GO!!</button>
</form>

</body>
</html>