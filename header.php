<?php 
session_start();
require_once 'config.php';?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная - Частный детский сад</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <div class="header-content">
        <h2>Частный детский сад</h2>
        <div class="auth-links">
            <?php if (isset($_SESSION['username'])): ?>
                <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                <span>|</span>
                <a href="logout.php">Выйти</a>
            <?php else: ?>
                <a href="login.php">Вход</a>
                <span>|</span>
                <a href="register.php">Регистрация</a>
            <?php endif; ?>
        </div>
    </div>
    </header>
    <nav>
        <a href="index.php">Главная</a>
        <a href="staff.php">Сотрудники</a>
        <a href="services.php">Услуги</a>
        <a href="gallery.php">Галерея</a>
        <a href="schedule.php">Расписание</a>
        <a href="reviews.php">Отзывы</a>
        <a href="parent_info.php">Информация для родителей</a>
        <a href="news.php">Новости</a>
        <a href="contacts.php">Контакты</a>
    </nav>
    
