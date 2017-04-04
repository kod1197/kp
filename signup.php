<?php
require "db.php";

$data = $_POST;
if(isset($data['do_signup']))
{
    
    if(trim($data['login'])== '')
    {
        $errors[] = 'Введите логин';
    }

    if(trim($data['email'])== '')
    {
        $errors[] = 'Введите email';
    }
    
    if(trim($data['password'])== '')
    {
        $errors[] = 'Введите пароль';
    }
    
    if(trim($data['password_2']) != $data['password'])
    {
        $errors[] = 'Повторный пароль введен не верно';
    }
    
    if(R::count('users', "login = ?", array($data['login'])) > 0 )
    {
        $errors[] = 'Логин занят';
    }
    
    if(R::count('users', "email = ?", array($data['email'])) > 0 )
    {
        $errors[] = 'Такой email уже зареган';
    }
    
    if(empty($errors))
    {
        $user = R::dispense( 'users' );
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($user);
        echo '<div style="color: green;">Вы зарегистрировались</div><hr>';
    }
    else
    {
        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
}
?>


<form action="signup.php" method="post">
    <p>
        <p><strong>Ваш логин</strong>:</p>
        <input type="text" name="login" value="<?php echo @$data['login']; ?>">
    </p>
    
    <p>
        <p><strong>E-mail</strong>:</p>
        <input type="email" name="email" value="<?php echo @$data['email']; ?>">
    </p>
    
    <p>
        <p><strong>Ваш пароль</strong>:</p>
        <input type="password" name="password" value="<?php echo @$data['password']; ?>">
    </p>
    
    <p>
        <p><strong>Ваш пароль ещё раз</strong>:</p>
        <input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>">
    </p>    
    
    <input type="submit" name="do_signup" value="Зарегистрироваться">
    
</form>

<p><a href="index.php">Вернуться на index</a></p>