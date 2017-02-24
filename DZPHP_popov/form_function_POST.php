<?php
error_reporting(E_ALL);
function createEmployee($age, $weight, $name, $surname, $canSwim = true)
{
    /*return compact('age', 'weight', 'name', 'surname', 'canSwim'); можно так записать нижние строки*/

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
