<?php
require_once 'subscriptions-lib.php'; // Підключаємо нашу нову бібліотеку

// Отримуємо JSON-дані від JS
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

if ($data) {
    // Використовуємо функцію з бібліотеки для збереження у файл .ser
    addSubscription($data);
    
    // Тимчасово залишимо і запис у txt для історії (за бажанням можна видалити)
    $log_message = "[" . date("Y-m-d H:i:s") . "] Заявка: " . ($data['name'] ?? '') . " | Телефон: " . ($data['phone'] ?? '') . PHP_EOL;
    file_put_contents('storage/log.txt', $log_message, FILE_APPEND);
    
    echo json_encode(["status" => "success", "message" => "Дякуємо! Заявку надіслано."]);
} else {
    echo json_encode(["status" => "error", "message" => "Помилка передачі даних"]);
}
?>