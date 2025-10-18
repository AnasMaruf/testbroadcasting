<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $user = User::first();
    // Auth::login($user);
    return view('welcome');
});

Route::get('send-event', function () {
    event(new App\Events\ApplicationStatusUpdated('warning'));
});
