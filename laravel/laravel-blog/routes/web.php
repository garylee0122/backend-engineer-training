<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Day 1 - Basic Route
Route::get('/hello', function () {
    return 'Hello Laravel';
});

Route::get('/hello/{name}', function ($name) {
    return "Hello " . $name;
});

// Day 1 - test 1
Route::get('/hi', function () {
    return 'Hi Laravel';
});

// Day 1 - test 2
Route::get('/user/{name}', function ($name) {
    return 'User: ' . $name;
});

// Day 1 - test 3
Route::get('/add/{a}/{b}', function ($a, $b) {
    $total = (int)$a + (int)$b;
    return $total;
})->where(['a' => '[0-9]+', 'b' => '[0-9]+']);

// Day 1 - test 4
Route::get('/multiply/{a}/{b}', function ($a, $b) {
    $total = (int)$a * (int)$b;
    return $a . '*' . $b . ' = ' . $total;
})->where(['a' => '[0-9]+', 'b' => '[0-9]+']);