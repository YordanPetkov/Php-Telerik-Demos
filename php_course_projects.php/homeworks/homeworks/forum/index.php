<?php
session_start();

?>

<form method='POST' action=''>
    <div>
        <label for="user-name">Име</label>
        <input type="text" name="username" id="user-name">
    </div>
    <div>
        <label for="pass">Парола</label>
        <input type="password" name="password" id="pass">
    </div>
    <input type="submit" value="Вход">
</form>

<form action='registration.php'>
    <label for="registration">Нямаш акаунт ? Направи си сега.</label>
    <input type="submit" value="Регистрация">
</form>
