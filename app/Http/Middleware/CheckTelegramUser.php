<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckTelegramUser
{
    public function handle(Request $request, Closure $next)
    {
        if (!env('IS_REGISTERED_CHECK', true)) {
            return $next($request);
        }

        $telegramUser = $request->input('user'); // Получаем JSON-объект пользователя
        if (!$telegramUser) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $userData = json_decode($telegramUser, true);
        $telegramId = $userData['id'] ?? null;

        if (!$telegramId) {
            return response()->json(['error' => 'Invalid Telegram data'], 401);
        }

        // Ищем пользователя по Telegram ID
        $user = User::where('telegram_id', $telegramId)->first();

        if (!$user) {
            return redirect()->route('register'); // Отправляем на регистрацию
        }

        Auth::login($user);
        return $next($request);
    }
}
