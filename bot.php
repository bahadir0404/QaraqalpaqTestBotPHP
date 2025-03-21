<?php

require 'vendor/autoload.php';

use Telegram\Bot\Api;

// Telegram Bot tokeningizni shu yerga qo‘ying (BotFather'dan olingan)
$telegram = new Api('');

// Webhook orqali yangilanishlarni olish
$update = $telegram->getWebhookUpdates();

// Foydalanuvchi xabarini olish
$chat_id = $update->getMessage()->getChat()->getId();
$message = $update->getMessage()->getText();

// /start komandasiga javob berish
if ($message == '/start') {
    $telegram->sendMessage([
        'chat_id' => $chat_id,
        'text' => 'Xush kelibsiz! Bu PHP Telegram bot.'
    ]);
}

// /help komandasiga javob berish
if ($message == '/help') {
    $telegram->sendMessage([
        'chat_id' => $chat_id,
        'text' => 'Bu bot sizga yordam beradi. Quyidagi komandalarni sinab ko‘ring: /start, /help'
    ]);
}