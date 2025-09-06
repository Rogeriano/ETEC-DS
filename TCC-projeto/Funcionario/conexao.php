<?php
$host = 'localhost';
$db = 'sistema_login';
$user = 'root';
$pass = ''; // senha do MySQL, se tiver

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>