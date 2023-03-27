<?php
session_start();
include_once 'config.php';

if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $type = $_POST['type'];
    $title = $_POST['title'];
    $file = $_FILES['file'];

    $upload_dir = "uploads/";
    $file_name = time() . "_" . basename($file["name"]);
    $target_file = $upload_dir . $file_name;

    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        $stmt = $conn->prepare("INSERT INTO media (type, title, file_name) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $type, $title, $file_name);

        if ($stmt->execute()) {
            header("Location: gallery.php?success");
            exit;
        } else {
            echo "Ошибка: " . $stmt->error;
        }
    } else {
        echo "Ошибка при загрузке файла.";
    }
} else {
    header("Location: gallery.php?error");
    exit;
}

