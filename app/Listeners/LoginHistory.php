<?php

namespace App\Listeners;

use App\Events\UserLogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\UserLoggedinHistory ;
use GuzzleHttp\Psr7\Request;
use illuminate\Support\Facades ;

class LoginHistory
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserLogin $event): void
    {
        UserLoggedinHistory::create([
            'name'=>$event->user->name ,
            'email'=>$event->user->email ,
            'ip' =>\Request::ip(),
            'user_agent'=>\Request::header('User-Agent'),
        ]);
    }
}
