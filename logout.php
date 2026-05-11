<?php
session_start();
require_once 'auth.php'; // Підключаємо файл, де лежить функція logout()

// Викликаємо функцію знищення сесії
logout();

// Перекидаємо користувача назад на головну сторінку сайту (або на сторінку логіну)
header('Location: index.php');
exit;
?>