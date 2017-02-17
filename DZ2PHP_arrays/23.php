
<h1>Form</h1>
<form method='post'>
    <input type="text" name="username"/>
    <input type="email" name="email"/>
    <input type="submit" value="Submit"/>
</form>

<?php if ($_POST) : ?>
    <h1>Form data:</h1>
    <?php var_dump($_POST) ?>
<?php endif;


/*
Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.

 */

