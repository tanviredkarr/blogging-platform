<?php
$host = '127.0.0.1';  // use IP instead of 'localhost'
$user = 'root';
$pass = '';           // no password as seen in phpMyAdmin
$dbname = 'blogging_platform';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
