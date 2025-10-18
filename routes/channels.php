<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('order.{orderId}', function ($user, $orderId) {
    // dd($user->id, $orderId);
    // return $this->orders->where('uuid', $orderId)->count() > 0;
    return $user->id == $orderId;
});
