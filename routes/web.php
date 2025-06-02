<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Bus;
use Illuminate\Bus\Batchable;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/crud/create', [CrudController::class ,'create'])->middleware('can:isAdmin');
Route::resource('crud', CrudController::class)->middleware('can:isAdmin');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/test-mail', function () {
    Mail::raw('This is a test message.', function ($message) {
        $message->to('test@example.com')->subject('Test Mail from Mailhog');
    });

    return 'Mail sent!';
});
Route::get('set/session', function () {
    session()->put('test', 'this is abdullah from session');
    session()->put('test1', 'this is abdullah from seconde session');
});
Route::get('get/session', function () { 
    echo session('test');
    echo session('test1');

    // session()->forget('test');
});
Route::get('send/demo', function () {
    // dispatch(new \App\Jobs\JobDemo);
    // dispatch(new \App\Jobs\JobDemo2);
    Bus::batch([new \App\Jobs\JobDemo, new \App\Jobs\JobDemo2])
    ->then(function (batch $batch) {
    })
    ->catch(function(batch $batch){
    })
    ->dispatch();
});
