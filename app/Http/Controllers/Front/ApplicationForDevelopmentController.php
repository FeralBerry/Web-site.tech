<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AppFeedBack;
use Illuminate\Http\Request;


class ApplicationForDevelopmentController extends Controller
{

    public function index(Request $request)
    {
        $data = [
            'error' => false,
            'msg_ru' => 'Сообщение успешно отправлено!',
            'msg_eng' => 'Message sent successfully!'
        ];
        if(strlen($request['name']) > 100){
            $data['error'] = true;
            $data['msg_ru'] = 'Имя превышает длинну допустимого значения.';
            $data['msg_eng'] = 'The name exceeds the allowed value length.';
        }
        if(strlen($request['email']) > 100){
            $data['error'] = true;
            $data['msg_ru'] = 'Email превышает длинну допустимого значения.';
            $data['msg_eng'] = 'The Email exceeds the allowed value length.';
        }
        if(strlen($request['phone']) > 30){
            $data['error'] = true;
            $data['msg_ru'] = 'Телефон превышает длинну допустимого значения.';
            $data['msg_eng'] = 'The phone exceeds the allowed value length.';
        }
        if(strlen($request['message']) > 5000){
            $data['error'] = true;
            $data['msg_ru'] = 'Сообщение превышает длинну допустимого значения.';
            $data['msg_eng'] = 'The message exceeds the allowed value length.';
        }
        if(!$data['error']){
            AppFeedBack::created([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'message' => $request['message'],
            ]);
        }
        return $data;
    }
}
