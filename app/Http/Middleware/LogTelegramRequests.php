<?php

namespace App\Http\Middleware;

use Closure;
use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Http\Request;
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
            $chat = TelegraphChat::where('chat_id', '191142686')->first();

            $chat->markdown("📩 *Новый запрос от Telegram:*\n```json\n" . json_encode($request->all(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "\n```")
                ->send();
        }

        return $next($request);

    }
}
