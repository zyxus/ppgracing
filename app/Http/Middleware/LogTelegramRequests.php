<?php

namespace App\Http\Middleware;

use Closure;
use DefStudio\Telegraph\Models\TelegraphBot;
use Illuminate\Http\Request;
use DefStudio\Telegraph\Facades\Telegraph;
use Illuminate\Support\Facades\Log;

class LogTelegramRequests
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('telegraph/*')) {

            // Логируем запрос в файл
            Log::channel('telegram')->info('Telegram Webhook', [
                'body' => $request->all(),
            ]);

            // Формируем сообщение для Telegram
            $message = "📩 *Новый запрос от Telegram:*\n" .
                "```json\n" . json_encode($request->all(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "\n```";

            // Отправляем запрос в Telegram
            $bot = TelegraphBot::where('name', 'PPGRacingBot')->first();

            Telegraph::bot($bot)
                ->chat(env('TELEGRAM_ADMIN_CHAT_ID'))
                ->markdown("📩 *Новый запрос от Telegram:*\n```json\n" . json_encode($request->all(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "\n```")
                ->send();
        }

        return $next($request);
    }
}
