<?php
session_start();
include_once 'config.php';

if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: index.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT file_name FROM media WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $file_name = $row['file_name'];

        $stmt = $conn->prepare("DELETE FROM media WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            unlink("uploads/" . $file_name);
            header("Location: gallery.php?deleted");
            exit;
        } else {
            echo "Ошибка: " . $stmt->error;
        }
    } else {
        echo "Файл не найден.";
    }
} else {
    header("Location: gallery.php");
    exit;
}
