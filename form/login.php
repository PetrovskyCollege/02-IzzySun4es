<?php
// Подключение к базе данных
$mysqli = new mysqli("localhost", "root", "", "cooking_bd");

// Обработка отправленной формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Проверка авторизации пользователя
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        // Пользователь авторизован, выполняйте необходимые действия
        echo "Вы успешно авторизованы!";
    } else {
        // Неправильный email или пароль
        echo "Неправильный email или пароль!";
    }
}

// Регистрация нового пользователя
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Проверка наличия пользователя с таким же email
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        // Пользователь с таким email уже существует
        echo "Пользователь с таким email уже существует!";
    } else {
        // Добавление нового пользователя в базу данных
        $query = "INSERT INTO user (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')";
        $result = $mysqli->query($query);

        if ($result) {
            // Успешная регистрация
            echo "Вы успешно зарегистрированы!";
        } else {
            // Ошибка при регистрации
            echo "Ошибка при регистрации!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Авторизация</h3>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Почта</label>
        <input type="email" id="email" name="email">

        <label for="password">Пароль</label>
        <input type="password" id="password" name="password">
        
        <button type="submit">Войти</button>
    </form>

    <h3>Регистрация</h3>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Имя</label>
        <input type="text" id="name" name="name">

        <label for="surname">Фамилия</label>
        <input type="text" id="surname" name="surname">

        <label for="email">Почта</label>
        <input type="email" id="email" name="email">

        <label for="password">Пароль</label>
        <input type="password" id="password" name="password">
        
        <button type="submit" name="register">Зарегистрироваться</button>
    </form>
</body>
</html>