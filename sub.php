<?php
require_once 'subscriptions-lib.php';

$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

if ($data) {
    addSubscription($data);
    
    if (isset($data['email']) && !isset($data['name'])) {
        $log_message = "[" . date("Y-m-d H:i:s") . "] Нова підписка: Email: " . $data['email'] . PHP_EOL;
        $response_message = "Дякуємо! Ви успішно подали заявку.";
    } else {
        $name = $data['name'] ?? 'Не вказано';
        $phone = $data['phone'] ?? 'Не вказано';
        $email = $data['email'] ?? 'Не вказано';
        
        $log_message = "[" . date("Y-m-d H:i:s") . "] Заявка: {$name} | Телефон: {$phone} | Email: {$email}" . PHP_EOL;
        $response_message = "Дякуємо! Заявку надіслано.";
    }

    file_put_contents('storage/log.txt', $log_message, FILE_APPEND);
    
    echo json_encode(["status" => "success", "message" => $response_message]);

} else {
    echo json_encode(["status" => "error", "message" => "Помилка передачі даних"]);
}
?>