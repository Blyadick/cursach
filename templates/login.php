<?php
session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if (empty($email) || empty($password)) {
            die("Заполните все поля!");
        }

        require 'db.php';
        
        try {
            $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->execute([':email' =>$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$user) {
                die('Пользователь с таким Email не найден');
            }

            if (password_verify($password, $user['password'])) {
                echo'Вы успешно вошли в систему!';
            } else {
                die('Неверный пароль!');
            }

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];

            header('Location: dashboard.php');
            exit;
        
        } catch (PDOException $e) {
            die("Ошибка базы данных: " . $e->getMessage());
        }
    } else {
        die("Неверный метод запроса");
    }
?>