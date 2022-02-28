<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\WelcomeSession;


class WelcomeSessionsController extends Controller
{
    public function sendTestNotification()
    {
        $user = User::first();

        $sessionData = [
            'body' => 'You are Logged in!',
            'sessionText' => 'You Have 10 Miutes',
            'url' => url('/')

        ];
        //$user->notify(new WelcomeSession($sessionData));
        Notification::send($user, new WelcomeSession($sessionData));
    }
}
