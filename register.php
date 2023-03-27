<?php include 'header.php'; ?>

<main>
    <h2>Регистрация</h2>
    <form action="process_register.php" method="POST">
        <label for="username">Логин:</label>
        <input type="text" id="username" name="username" class="input-field" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="input-field" required>
        
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" class="input-field" required>

        <label for="confirm_password">Подтверждение пароля:</label>
        <input type="password" id="confirm_password" name="confirm_password" class="input-field" required>
        
        <button type="submit">Зарегистрироваться</button>
    </form>
</main>

<?php include 'footer.php'; ?>
