<?php
// print_r ($_POST);
// print_r ($user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
if($text) {
?>
<h1><?=$text?></h1>;

<?php
}
?><br>
</title>
</head>
<body>
    <form method="post">
    <?php
    if($text) {
?>
<h1><?=$text?></h1>;

<?php
}
?>
        <input type="text" name="login" placeholder="Логин" required>
        <input type="password" name="password" placeholder="Введите пароль" required>
        <input type="submit" name="button" value="Войти">
    </form>
</body>
</html>