<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $sql = "INSERT INTO tours (name, phone, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $phone, $email);

    if ($stmt->execute()) {
        header("Location: index.php?tour_success=1");
    } else {
        header("Location: index.php?tour_error=1");
    }

    $stmt->close();
}

$conn->close();
