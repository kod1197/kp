<?php
    require "db.php";
?>
<!doctype html>
<html>
    <head>
        
        
    </head>
    
    <body>
        <?php if(isset($_SESSION['login'])) : ?>
        Авторизован <br>
        Привет, <?php echo $_SESSION['login'] ?>
        <hr>
        <a href="logout.php">Выйти</a>
        <?php else : ?>
        <strong>Если вы не зарегистрированы, пожалуйста зарегистрируйтесь.<br>
        Если у вас уже есть аккаунт - пройдите авторизацию</strong><br><hr>
        <a href="login.php">Авторизация</a><br>
        <a href="signup.php">Регистрация</a>
        <?php endif; ?>
    </body>   
</html>