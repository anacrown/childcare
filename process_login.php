<?php
session_start();
require_once 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['is_admin'] = ($row['role'] == 'admin');
        header("Location: index.php");
        exit;
    } else {
        echo "Неверный пароль.";
    }
} else {
    echo "Пользователь не найден.";
}

$stmt->close();
$conn->close();
?>
