<?php
// Database connection configuration
$dbHost = 'elvis.rowan.edu';
$dbUsername = 'chinno82';
$dbPassword = '1ViOLet8TIGEr!';
$dbName = 'chinno82';

// Create a new MySQLi connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
