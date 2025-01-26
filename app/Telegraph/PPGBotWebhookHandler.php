<?php

namespace App\Telegraph;

use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Models\TelegraphBot;
use Illuminate\Support\Facades\Log;
use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Support\Facades\Request;

class PPGBotWebhookHandler extends WebhookHandler
{
    public function handle(Request|\Illuminate\Http\Request $request, TelegraphBot $bot): void
    {
        Log::info('🚀 Входящее сообщение от Telegram', [
            'update' => $this->update(),
        ]);

        $message = $this->message()?->text();

        if ($message === "/start") {
            $this->handleStartCommand();
        }

        parent::handle(); // Вызов стандартного поведения, если команда не обработана
    }

    protected function handleStartCommand(): void
    {
        $chat = $this->chat();

        if ($chat instanceof TelegraphChat) {
            $chat->message("👋 Привет! Я твой Telegram-бот. Чем могу помочь?")
                ->send();
        }
    }
}
