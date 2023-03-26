<?php
require_once 'config.php';

// Экранирование специальных символов в строках
$author = $conn->real_escape_string($_POST['author']);
$review = $conn->real_escape_string($_POST['review']);

// Вставка отзыва в таблицу
$sql = "INSERT INTO reviews (author, text) VALUES ('$author', '$review')";

if ($conn->query($sql) === TRUE) {
    header('Location: reviews.php?success=1');
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрытие соединения
$conn->close();
?>