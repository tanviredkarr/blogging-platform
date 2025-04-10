<?php
session_start();
include 'database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.html");
    exit();
}

$title = $_POST['title'];
$content = $_POST['content'];
$user_id = $_SESSION['user_id'];

$sql = "INSERT INTO posts (user_id, title, content) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $user_id, $title, $content);
$stmt->execute();

header("Location: ../dashboard.html");
?>
