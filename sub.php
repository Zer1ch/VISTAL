<?php
// Отримуємо JSON-дані від JS
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

if ($data) {
    // Формуємо рядок для логу
    $log_message = "[" . date("Y-m-d H:i:s") . "] Заявка: " . $data['name'] . " | Телефон: " . $data['phone'] . PHP_EOL;
    
    // Пишемо в файл
    file_put_contents('storage/log.txt', $log_message, FILE_APPEND);
    
    // Відповідь для JavaScript (щоб він показав alert)
    echo json_encode(["status" => "success", "message" => "Дякуємо! Заявку надіслано."]);
} else {
    echo json_encode(["status" => "error", "message" => "Помилка передачі даних"]);
}
?>