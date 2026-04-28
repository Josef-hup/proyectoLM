<?php
$host = '127.0.0.1';
$dbname = 'musicca';
$user = 'webuser';
$pass = 'webuser123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    exit('Database connection error: ' . $e->getMessage());
}
?>