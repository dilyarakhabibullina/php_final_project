<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="theme/style.css">
</head>
<body>
    <div id="header">
        <h2><?=$title?></h2> 
    </div>
    <div id="menu">
        <a href="index.php">Главная страница-Читать текст</a> |
        <a href="index.php?contr=edit&act=edit">Редактировать текст</a> |
        <?php
        if ($user) {?>
        <a href="index.php?contr=user&act=info">Личный кабинет</a>|<a href="index.php?contr=user&act=logout">Выход (<?=$user?>)</a>;
        <?php }

        else {?>
 <a href="index.php?contr=user&act=login">Войти</a>|<a href="index.php?contr=user&act=reg">Регистрация</a>
    <?php }
        ?>
          </div>
    <div id="content">
        <?=$content?>
    </div>
    <div id="footer">
        Все права защищены 2022
    </div>
</body>
</html>