<?php include 'header.php'; ?>

<body>
    <h1>Новости частного детского сада</h1>
    <?php
    $sql = "SELECT * FROM news ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<p>Дата: " . $row["created_at"] . "</p>";
            echo "<p>" . $row["content"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "Нет новостей";
    }
    ?>
</body>

<?php include 'footer.php'; ?>
