<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'greeting' => 'Welcome to our website!',
        'name'=> 'Lakhini Voshadee',
    ]);
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});