<?php

namespace App\Http\Controllers\Front\API;



use App\Models\ContactFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use NotificationChannels\Telegram\Exceptions\CouldNotSendNotification;
use TelegramBot\Api\Exception;

class Contact
{
    protected TelegramBot $telegram;
    public function __construct()
    {
        $this->telegram = new TelegramBot();
    }

    public function sendContact(Request $request): void
    {
        $name = $request['name'];
        $email = $request['email'];
        $message = $request['message'];
        $text = "Имя: ".$name."\nКонтакт: ".$email."\nСообщение: ".$message;
        \App\Models\Contact::create([
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ]);
        $this->telegram->sendMessage($text,1);
    }

    /**
     * @throws Exception
     * @throws CouldNotSendNotification
     */
    public function sendHire(Request $request){
        $name = $request['name'];
        $email = $request['email'];
        $message = $request['message'];
        $text = "Имя: ".$name."\nКонтакт: ".$email."\nСообщение: ".$message;
        $this->telegram->sendMessage($text,1);
        $contact = \App\Models\Contact::create([
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ]);
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $f) {
                $path = $f->store('uploads', 'public');
                ContactFiles::create([
                    'path' => $path,
                    'contact_id' => $contact->id,
                ]);
                $this->telegram->sendHire($path,1);
            }
        }

    }
    public function modal(Request $request){
        $name = $request['name'];
        $email = $request['email'];
        $message = $request['message'];
        $q_1 = $request['q_1'];
        $q_10 = $request['q_10'];
        $q_20 = $request['q_20'];
        $q_30 = $request['q_30'];
        $price = $request['price'];
        $message = $message . "\nВыбор в модальном окне: \n";
        if($q_1 !== null){
            $message = $message . $q_1;
        }
        if($q_10 !== null){
            $message = $message . $q_10;
        }
        if($q_20 !== null){
            $message = $message . $q_20;
        }
        if($q_30 !== null){
            $message = $message . $q_30;
        }
        if($price !== null){
            $message = $message . $price;
        }
        $message = $message . "\nПримерная цена: " . $price;
        \App\Models\Contact::create([
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ]);
        $text = "Имя: ".$name."\nКонтакт: ".$email."\nСообщение: ".$message;
        $this->telegram->sendMessage($text,1);
    }
}
