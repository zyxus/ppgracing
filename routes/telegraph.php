<?php

use App\Http\Controllers\TelegramBotController;
use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Models\TelegraphBot;

TelegraphBot::routes()
    ->middleware(['web']);

TelegraphBot::command('start', [TelegramBotController::class, 'start']);
