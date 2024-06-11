<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=laravel', 'root', 'your_password');
    echo "Connected to MySQL database.";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
