<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    // Проверка на совпадение повторного пароля
    if ($password === $confirmPassword) {
        $_SESSION['registration_success'] = $username;
        header('Location: index.php');
        exit;
    } else {
        echo 'Пароль и подтверждение пароля не совпадают.';
    }
}
?>