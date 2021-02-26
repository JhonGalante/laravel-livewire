<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Livewire\ShowTweets;

Route::get('/tweets', [\App\Http\Livewire\ShowTweets::class, '__invoke']);

Route::get('/', function () {
    return view('welcome');
});
