<?php
$host = "localhost";
$dbname = "attendance_system";
$username = "newuser";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES utf8");
} catch(PDOException $e) {
    echo "Error connecting to database: " . $e->getMessage();
    exit();
}
