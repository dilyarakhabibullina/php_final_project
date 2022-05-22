<?php
//print_r $_POST[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <!-- <h3><?php if(isset($text)){echo $text;}?></h3> -->

    <?php if(isset($text)){?><h3><?= $text ?></h3><?php } ?>
    <form method="post">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="submit" value="Зарегистрироваться">
    </form>


    
</body>
</html>