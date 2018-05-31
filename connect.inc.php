<?php
$serverName = "localhost";
$userName = "root";
$password = "123";
$db = "hospital";
$conn = new MySQLi($serverName,$userName,$password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>