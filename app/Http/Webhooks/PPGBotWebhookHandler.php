<?php

namespace App\Http\Webhooks;

use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Models\TelegraphBot;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Stringable;

class PPGBotWebhookHandler extends WebhookHandler
{
    public function start(): void
    {
        Log::info('🎯 Команда /start получена');

        $this->chat->message("👋 Привет! Я бот, чем могу помочь?")
            ->send();
    }

    protected function handleUnknownCommand(Stringable $text): void
    {
        $this->chat->html("Я не знаю, что значит: <b>$text</b>")->send();
    }
}
