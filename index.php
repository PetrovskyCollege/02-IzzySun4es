<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


} else {
    if (isset($_SESSION['registration_success'])) {
        echo "<p>Пользователь {$_SESSION['registration_success']} успешно зарегистрирован!</p>";
        unset($_SESSION['registration_success']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
</head>
<body>
    <h2>Форма авторизации</h2>
    <form method="POST" action="login.php">
        <label for="username">Имя пользователя:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Войти">
    </form>
    <h2>Форма регистрации</h2>
    <form method="POST" action="register.php">
        <label for="username">Никнейм:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <label for="confirm_password">Подтверждение пароля:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <label for="first_name">Имя:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>
        <label for="last_name">Фамилия:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>
        <input type="submit" value="Зарегистрироваться">
    </form>
</body>
</html>