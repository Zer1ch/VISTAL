<?php
session_start();
require_once 'auth.php';
require_once 'subscriptions-lib.php';

if (!isAuthorized()) {
    header('Location: login.php');
    exit;
}

$items = allSubscriptions();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vistal Admin</title>
    <link rel="stylesheet" href="Style/style.css"> </head>
<body>
    <div class="container">
        <h1>Керування заявками</h1>
        <a href="logout.php" class="button">Вихід</a>
        
        <table border="1" style="width:100%; margin-top: 20px; border-collapse: collapse;">
            <tr style="background: #00486D; color: white;">
                <th>№</th>
                <th>Ім'я</th>
                <th>Телефон</th>
                <th>Email</th>
                <th>Повідомлення</th>
            </tr>
            <?php foreach ($items as $index => $item): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($item['name'] ?? '-') ?></td>
                <td><?= htmlspecialchars($item['phone'] ?? '-') ?></td>
                <td><?= htmlspecialchars($item['email'] ?? '-') ?></td>
                <td><?= htmlspecialchars($item['message'] ?? 'Підписка з футера') ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>