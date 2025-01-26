<?php

namespace App\Http\Webhooks;

use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Models\TelegraphBot;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Stringable;

class PPGBotWebhookHandler extends WebhookHandler
{
    public function start(): void
    {
//        $name = 'Zyxus';

        $chatInfo = $this->chat->info();

        $name = $chatInfo['first_name'] ?? $chatInfo['username'] ?? 'пилот';

        $message = View::make('ppgracingbot.start', compact('name'))->render();

        $this->chat
            ->photo('https://ppgracing.ru/images/ppg-racing-logo.png')
            ->message($message)
            ->send();
    }

    protected function handleUnknownCommand(Stringable $text): void
    {
        $this->chat->html("Я не знаю, что значит: <b>$text</b>")->send();
    }
}
