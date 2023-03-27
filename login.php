<?php include 'header.php'; ?>

<main>
    <h2>Вход</h2>
    <form action="process_login.php" method="POST">
        <label for="username">Логин:</label>
        <input type="text" id="username" name="username" class="input-field" required>
    
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" class="input-field" required>
    
        <button type="submit">Войти</button>
    </form>
</main>

<?php include 'footer.php'; ?>
