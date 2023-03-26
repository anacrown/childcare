<?php include 'header.php'; ?>

<main>
    <h2>Отзывы</h2>
    <p>Здесь представлены отзывы родителей о нашем детском саде.</p>
    
    <div class="reviews">
        <?php
        $sql = "SELECT author, date, text FROM reviews ORDER BY date DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Вывод отзывов
            while ($row = $result->fetch_assoc()) {
                echo "<div class=\"review\">";
                echo "<h3>" . htmlspecialchars($row['author']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['date']) . "</p>";
                echo "<p>" . htmlspecialchars($row['text']) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Нет отзывов</p>";
        }

        // Закрытие соединения
        $conn->close();
        ?>
    </div>
    
    <h2>Оставьте свой отзыв</h2>
    <form action="submit_review.php" method="post">
        <label for="author">Ваше имя:</label>
        <input type="text" id="author" name="author" required>
        
        <label for="review">Ваш отзыв:</label>
        <textarea id="review" name="review" rows="5" required></textarea>
        
        <button type="submit">Отправить</button>
    </form>
</main>

<?php include 'footer.php'; ?>
