<?php
// Настройки базы данных
$db_host     = "localhost";  // Адрес сервера MySQL (обычно "localhost")
$db_username = "root";       // Имя пользователя для подключения к серверу MySQL (по умолчанию "root")
$db_password = "";           // Пароль пользователя для подключения к серверу MySQL (по умолчанию пустой)
$db_name     = "childcare";  // Имя базы данных

// Создание подключения к базе данных
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Проверка подключения
if (!$conn) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
}

// Установка кодировки UTF-8
mysqli_set_charset($conn, "utf8");
