<?php

namespace App\Http\Controllers\Front\API;

use CURLFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use NotificationChannels\Telegram\Exceptions\CouldNotSendNotification;
use NotificationChannels\Telegram\TelegramFile;
use Telegram\Bot\Laravel\Facades\Telegram;
use TelegramBot\Api\Exception;
use TelegramBot\Api\InvalidArgumentException;

class TelegramBot
{
    private mixed $token;
    public function __construct(){
        $this->token = env('TELEGRAM_BOT_TOKEN');
    }

    public function sendMessage(String $text, int $id): void
    {
        $chat = DB::table('telegraph_chats')
            ->where('id','=',$id)
            ->first();
        $chatId = $chat->chat_id;
        $data = http_build_query([
            'text' => $text,
            'chat_id' => $chatId
        ]);
        $url = "https://api.telegram.org/bot$this->token/sendMessage?{$data}";
        file_get_contents($url);
    }
    public function sendHire(string $photo,int $id): void
    {
        $chat = DB::table('telegraph_chats')
            ->where('id','=',$id)
            ->first();
        $chatId = $chat->chat_id;
        $photo = "https://web-site.tech/storage/$photo";
        $data = http_build_query([
            'text' => $photo,
            'chat_id' => $chatId
        ]);
        DB::table('hire_form')->insert([
            'upload' => $photo,
            'session_id' => Session::id(),
        ]);
        $url = "https://api.telegram.org/bot$this->token/sendMessage?{$data}";
        file_get_contents($url);
    }
}
