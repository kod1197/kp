<?php
require "db.php";

$data = $_POST;

    if(isset($data['do_login']))
    {
        $user = R::findOne('users', 'login = ?',array($data['login']));
        if($user)
        {
            if(password_verify($data['password'], $user->password))
            {
                $_SESSION['login'] = $data['login'];
                echo '<div style="color: red;">Вы авторизованы <br><a href="index.php">на главную</a></div><hr>';
            }
            else
            {
                $errors[] = 'Неверно введен пароль';
            }
        }
        else
        {
            $errors[] = 'Пользователь с таким логином не найден';
        }
    }

    if(!empty($errors))
    {
        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
?>


<form action="login.php" method="post">
    <p>
        <p><strong>Логин</strong>:</p>
        <input type="text" name="login" value="<?php echo @$data['login']; ?>">
    </p>
    
    <p>
        <p><strong>Пароль</strong>:</p>
        <input type="password" name="password">
    </p>
    
    <input type="submit" name="do_login" value="Войти">
</form>


<p><a href="index.php">Вернуться на index</a></p>