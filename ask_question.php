<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["question_name"];
    $email = $_POST["question_email"];
    $question = $_POST["question_text"];

    $sql = "INSERT INTO questions (name, email, question) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $question);

    if ($stmt->execute()) {
        header("Location: index.php?question_success=1");
    } else {
        header("Location: index.php?question_error=1");
    }

    $stmt->close();
}

$conn->close();
