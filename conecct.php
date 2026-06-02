<?php
<<<<<<< HEAD
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = '127.0.0.1';
$dbname = 'musica';
$user = 'root';
$pass = '';
=======
$host = '127.0.0.1';
$dbname = 'musicca';
$user = 'webuser';
$pass = 'webuser123';
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
<<<<<<< HEAD
    echo '<pre>Database connection error: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . '</pre>';
    exit;
=======
    exit('Database connection error: ' . $e->getMessage());
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc
}
?>