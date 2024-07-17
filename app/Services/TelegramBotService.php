<?php

declare(strict_types=1);

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Log;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\Message;

class TelegramBotService
{
    private BotApi $tgBot;

    public function __construct()
    {
        try {
            $this->tgBot = new BotApi(config('telegram.bot_token'));
        } catch (Exception $e) {
            Log::error('Failed to create bot instance.', ['error' => $e->getMessage()]);
        }
    }

    /**
     * @throws Exception
     * @throws InvalidArgumentException
     */
    public function sendMessage(string $name, string $phone): Message
    {
        $phone = str_replace(' ', '', $phone);

        return $this->tgBot->sendMessage(
            config('telegram.group_id'),
            sprintf("‼️Новий запис‼️\n\n🙍🏽‍ Імʼя: %s\n📱 Телефон: %s", $name, $phone)
        );
    }
}
