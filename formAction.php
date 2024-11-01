<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = 'std@#786';
$database = 'StudentInfo_db';

// Create a new MySQLi connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>