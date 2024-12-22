<?php
// Путь к файлу базы данных
$databasePath = __DIR__ . '/database.sqlite';

try {
    // Проверяем, существует ли база данных
    $isNewDatabase = !file_exists($databasePath);

    // Подключаемся к базе данных
    $db = new PDO("sqlite:$databasePath");

    // Устанавливаем режим обработки ошибок
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Если база данных новая, создаём таблицы
    if ($isNewDatabase) {
        // SQL-команда для создания таблицы пользователей
        $createTableSQL = "
            CREATE TABLE users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                email TEXT NOT NULL UNIQUE,
                password TEXT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );
        ";

        // Выполняем SQL-команду
        $db->exec($createTableSQL);

        echo "База данных и таблица успешно созданы.\n";
    }
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
?>
