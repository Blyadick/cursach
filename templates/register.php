<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $confirm_password = trim($_POST['confirm_password'] ?? '');

    // Проверяем, заполнены ли все поля
    if (empty($email) || empty($password) || empty($confirm_password)) {
        die("Заполните все поля!");
    }

    // Проверяем, совпадают ли пароли
    if ($password !== $confirm_password) {
        die("Пароли не совпадают!");
    }

    // Подключение к базе данных
    require 'db.php';

    try {
        // Хешируем пароль
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // SQL-запрос для добавления пользователя
        $stmt = $db->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
        $stmt->execute([
            ':email' => $email,
            ':password' => $hashed_password,
        ]);

        echo "Регистрация успешна!";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) { // Код ошибки для уникального ограничения
            die("Пользователь с таким email уже существует.");
        } else {
            die("Ошибка базы данных: " . $e->getMessage());
        }
    }
} else {
    die("Неверный метод запроса.");
}
?>
