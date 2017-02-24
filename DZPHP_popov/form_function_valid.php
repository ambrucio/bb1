<?php
error_reporting(E_ALL);
// functions
function createMessage($username, $email, $message)
{
    return compact('username', 'email', 'message');
}
function redirect($to)
{
    header("Location: {$to}");
    die;
}
function requestPost($key, $default = null)
{
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}
function requestGet($key, $default = null)
{
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}
function isRequestPost()
{
    return (bool) $_POST;
}
function isFormValid()
{
    return trim(requestPost('username')) != '' && trim(requestPost('email')) != '' && trim(requestPost('message')) != '';
}
// logic
$flashMessage = requestGet('flash');
if (isRequestPost()) {
    if (isFormValid()) {
        $flashMessage = 'Your message was sent';
        // $message = createMessage(requestPost('username'), requestPost('email'), requestPost('message'));

        // something todo with $message

        redirect("/form?flash={$flashMessage}");
    }

    $flashMessage = 'Fill the fields';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>

</head>
<body>

<h1>Form</h1>
<b><?=$flashMessage ?></b>

<form method="post">
    <input type="name" name="username" value="<?=requestPost('username') ?>"><br>
    <input type="email" name="email" value="<?=requestPost('email') ?>"><br>
    <textarea name="message"><?=requestPost('message') ?></textarea><br>
    <button>GO</button>
</form>



</body>
</html>