<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
$server = 'localhost';
$user = 'root';
$database = 'binatang';
$password = '';
try {
    $conn = new PDO("mysql:host=" . $server . ";dbname=" . $database, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
