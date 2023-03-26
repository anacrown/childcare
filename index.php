    <?php include 'header.php'; ?>

    <main>
        <h2>Общая информация о саде</h2>
        <p>Добро пожаловать на сайт частного детского сада! Здесь вы найдете информацию о нашем учреждении, основных направлениях, структуре, деятельности, местонахождении и прочей информации.</p>

        <h2>Записаться на экскурсию</h2>
        <form method="post" action="book_tour.php">
            <label for="name">Ваше имя:</label>
            <input type="text" name="name" id="name" required><br>

            <label for="phone">Телефон:</label>
            <input type="tel" name="phone" id="phone" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <button type="submit">Записаться</button>
        </form>

        <h2>Задать вопрос</h2>
        <form method="post" action="ask_question.php">
            <label for="question_name">Ваше имя:</label>
            <input type="text" name="question_name" id="question_name" required><br>

            <label for="question_email">Email:</label>
            <input type="email" name="question_email" id="question_email" required><br>

            <label for="question_text">Ваш вопрос:</label>
            <textarea name="question_text" id="question_text" required></textarea><br>

            <button type="submit">Отправить вопрос</button>
        </form>
    </main>

    <?php include 'footer.php'; ?>
