<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    ShowTweets
};

Route::get('tweets', ShowTweets::class);

Route::get('/', function () {
    return view('welcome');
});
