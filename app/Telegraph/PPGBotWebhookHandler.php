<?php

namespace App\Telegraph;

use DefStudio\Telegraph\Handlers\WebhookHandler;

class PPGBotWebhookHandler extends WebhookHandler
{
    protected function start(): void
    {
        $chat = $this->chat;

        $chat->message("👋 Привет! Я твой Telegram-бот. Чем могу помочь?")
            ->send();
    }
}
