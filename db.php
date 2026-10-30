<?php
// db.php

$host = 'localhost';
$dbname = 'interior_design';
$username = 'root'; // Change if needed
$password = getenv('DB_PASSWORD') ?: ''; // Change if needed

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
