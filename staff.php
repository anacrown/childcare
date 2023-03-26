<?php include 'header.php'; ?>

<body>
    <h1>Сотрудники частного детского сада</h1>
    <?php
    $sql = "SELECT * FROM staff";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["name"] . "</h2>";
            echo "<p>Должность: " . $row["position"] . "</p>";
            echo "<p>Описание: " . $row["info"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "Нет информации о сотрудниках";
    }
    ?>
</body>

<?php include 'footer.php'; ?>
