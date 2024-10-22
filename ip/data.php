<?php
$host = 'localhost'; // Change if your DB is hosted elsewhere
$db = 'order_management';
$user = 'your_username'; // Replace with your DB username
$pass = 'your_password'; // Replace with your DB password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
