
<?php
error_reporting(E_ALL);
function createEmployee($age, $weight, $name, $surname, $canSwim = true)
{
    //return compact('age', 'weight', 'name', 'surname', 'canSwim');

    // same as compact() - please remove one of the 'return's
    return array(
        'age' => $age,
        'weight' => $weight,
        'name' => $name,
        'surname' => $surname,
        'canSwim' => $canSwim
    );
}
function canSwimReadable(array $employee)
{
    return $employee['canSwim'] ? 'Yes' : 'No';
}
function statusReadable($value)
{
    return $value ? 'Yes' : 'No';
}
$employee1 = createEmployee(61, 75.35, 'Mike', 'Johnson', false);
$employee2 = createEmployee(34, 70.35, 'Steve', 'Anderson');
$employee3 = createEmployee(43, 112.35, 'Hank', 'Jobbs');
$employees = [$employee1, $employee2, $employee3, $employee1, $employee2, $employee3];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Document</title>
    <style>
        .grey td {
            background: #bbb;
        }
    </style>

</head>
<body>


<table border="1" cellspacing="0" cellpadding='5'>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Age</th>
        <th>Weight</th>
        <th>Can swim</th>
    </tr>

    <?php foreach ($employees as $key => $employee) : ?>
        <tr <?=$key % 2 ? 'class="grey"' : '' ?> >
            <td><?=$key?></td>
            <td><?=$employee['name'] ?></td>
            <td><?=$employee['surname'] ?></td>
            <td><?=$employee['age'] ?></td>
            <td><?=$employee['weight'] ?></td>
            <td><?=statusReadable($employee['canSwim']) ?></td>
        </tr>
    <?php endforeach; ?>

</table>
<h1>Form</h1>
<form method='post'>
    <input type="text" name="username"/>
    <input type="email" name="email"/>
    <input type="submit" value="Submit"/>
</form>

<?php if ($_POST) : ?>
    <h1>Form data:</h1>
    <?php var_dump($_POST) ?>
<?php endif; ?>




</body>
</html>

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