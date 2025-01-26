<?php

use App\Http\Webhooks\PPGBotWebhookHandler;
use DefStudio\Telegraph\Facades\Telegraph;

Telegraph::routes()
    ->webhookHandler(PPGBotWebhookHandler::class);
