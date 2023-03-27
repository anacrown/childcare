<?php
session_start();
include_once 'config.php';

if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: index.php");
    exit;
}

if (isset($_GET['id'])) {
    $article_id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM articles WHERE id = ?");
    $stmt->bind_param("i", $article_id);
    $stmt->execute();
}

header("Location: parent_info.php");
exit;
?>
