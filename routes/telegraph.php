<?php

use App\Telegraph\PPGBotWebhookHandler;
use DefStudio\Telegraph\Models\TelegraphBot;

TelegraphBot::routes()
    ->webhookHandler(PPGBotWebhookHandler::class);;
