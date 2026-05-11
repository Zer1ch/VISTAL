<?php
session_start();
header("Content-Type: application/json");
require_once "auth.php";

$data = json_decode(file_get_contents("php://input"), true);
if (login($data['login'] ?? '', $data['password'] ?? '')) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => "Невірний пароль!"]);
}