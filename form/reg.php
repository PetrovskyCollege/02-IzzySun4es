<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="reg.php" method="POST">
<label for="email">Почта</label>
    <input type="email" id="email">
    <label for="password">Пароль</label>
    <input type="password" id="password">
    <button type="submit">Отправить</button>
</form>
</body>
</html>

<?php
if (isset($_GET["login"])) {
    echo "<h2>Привет, GET " . $_GET["login"] . "! </h2>";
}

if (isset($_POST["login"])) {
    echo "<h2>Привет POST, " . $_POST["login"] . "! </h2>";
}

