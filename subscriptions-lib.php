<?php
const SUBSCRIPTIONS_FILE = __DIR__ . '/storage/subscriptions.ser';

function allSubscriptions() {
    return file_exists(SUBSCRIPTIONS_FILE) ? unserialize(file_get_contents(SUBSCRIPTIONS_FILE)) : [];
}

function addSubscription($params) {
    $subscriptions = allSubscriptions();
    $subscriptions[] = array_merge($params, ['date' => date('Y-m-d H:i:s')]);
    file_put_contents(SUBSCRIPTIONS_FILE, serialize($subscriptions));
}