<?php
// Set timezone to Philippine Time
date_default_timezone_set('Asia/Manila');

$host = 'localhost';
$dbname = 'mcc_db'; // Using the existing database name found in other projects
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // If the database doesn't exist, we'll try to create it or at least log the error
    // For now, we assume it exists as it was used in sibling projects
    die("Connection failed: " . $e->getMessage());
}
?>
