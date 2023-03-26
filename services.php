<?php include 'header.php'; ?>

<main>
    <h1>Услуги частного детского сада</h1>
    <?php
    $sql = "SELECT * FROM services";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["name"] . "</h2>";
            echo "<p>Описание: " . $row["description"] . "</p>";
            echo "<p>Стоимость: " . $row["price"] . " руб.</p>";
            echo "</div>";
        }
    } else {
        echo "Нет информации об услугах";
    }
    ?>
</main>

<?php include 'footer.php'; ?>
