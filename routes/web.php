<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-event', function () {
    event(new App\Events\ApplicationStatusUpdated('warning'));
});
