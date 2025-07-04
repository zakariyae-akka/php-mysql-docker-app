<?php
$host = 'db';
$db   = 'mydb';
$user = 'user';
$pass = 'userpass';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "✅ Connection successful!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>
