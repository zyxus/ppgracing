<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DefStudio\Telegraph\Facades\Telegraph;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class TelegramBotController extends Controller
{
    public function start(Request $request)
    {
        $chatId = $request->telegraphChat()->id();
        $user = $request->telegraphChat()->user();

        $name = $user->first_name ?? $user->username ?? 'пилот';

        // Проверяем, отправляли ли уже приветственное сообщение
        if (!Cache::has("telegram_start_sent_{$chatId}")) {

            $message = View::make('ppgracingbot.start', compact('name'))->render();

            // Отправляем приветственное сообщение с фото
            Telegraph::photo('https://ppgracing.ru/images/ppg-racing-logo.png')
                ->to($chatId)
                ->content($message)
                ->send();

            // Помечаем, что сообщение уже отправлено
            Cache::put("telegram_start_sent_{$chatId}", true, now()->addDays(30));
        } else {
            // Если уже отправляли, просто пишем приветствие без картинки
//            Telegraph::message("👋 Привет! Ты уже запускал этого бота.")
//                ->to($chatId)
//                ->send();
        }
    }
}
