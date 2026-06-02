<?php
require 'conecct.php';

try {
    // Создать таблицу news
    $pdo->exec("CREATE TABLE IF NOT EXISTS news (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT,
        lorem TEXT,
        compleat_text TEXT,
        image TEXT
    )");

    // Создать таблицу users
    $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        login TEXT UNIQUE,
        password TEXT,
        nombre TEXT
    )");

    // Добавить тестового пользователя
    $salt = "sggggedfgdfgdfgdfgdfgdfgdfgdfgdfgdfg";
    $password = md5($salt . "admin");
    $pdo->exec("INSERT OR IGNORE INTO users (login, password, nombre) VALUES ('admin', '$password', 'Admin')");

    // Добавить тестовые новости
    $pdo->exec("INSERT OR IGNORE INTO news (title, lorem, compleat_text, image) VALUES 
        ('Nuevo Álbum 2026', 'Rammstein lanza su nuevo álbum con 12 canciones inéditas.', 'Rammstein lanza su nuevo álbum con 12 canciones inéditas que marcan un antes y después en su historia musical. Un trabajo revolucionario que consolida su posición como la banda más importante de rock industrial.', 'merch1.avif'),
        ('Gira Mundial 2026', 'La banda anuncia una gira mundial.', 'La banda anuncia una gira mundial que cubrirá 45 países en los próximos 12 meses. Con más de 100 conciertos programados, esta será la gira más ambiciosa en la historia de Rammstein.', 'merch2.avif'),
        ('Especial Documental', 'Netflix estrenará un documental.', 'Netflix estrenará un documental exclusivo sobre los 30 años de historia de Rammstein. Con footage inédito, entrevistas y detrás de cámaras que nunca antes fueron publicados.', 'merch3.avif')
    ");

    echo "Database initialized successfully.";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>