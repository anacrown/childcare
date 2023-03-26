<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_name = $_POST['service_name'];
    $service_description = $_POST['service_description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO services (service_name, service_description, price) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $service_name, $service_description, $price);

    if ($stmt->execute()) {
        header("Location: admin_services.php");
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Добавить услугу</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Добавить услугу</h1>
    <form method="post" action="add_service.php">
        <label for="service_name">Название услуги:</label>
        <input type="text" name="service_name" id="service_name" required><br>

        <label for="service_description">Описание услуги:</label>
        <textarea name="service_description" id="service_description" required></textarea><br>

        <label for="price">Стоимость:</label>
        <input type="number" name="price" id="price" required><br>

        <button type="submit">Добавить</button>
    </form>
</body>
</html>
