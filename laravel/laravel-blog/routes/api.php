<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Day3TestController;

// Day 3 - Test 1
Route::get('day3test/hello/{name}', [Day3TestController::class, 'hello']);
// Day 3 - Test 2
Route::get('day3test/user/{id}', [Day3TestController::class, 'user']);
// Day 3 - Test 3
Route::get('day3test/product/{id}', [Day3TestController::class, 'product']);
// Day 3 - Test 4
Route::get('day3test/orders/{id}', [Day3TestController::class, 'orders']);


use App\Http\Controllers\Day4TestController;

// Day 4 - Test
Route::prefix('day4test/products')->group(function () {
    Route::get('create/{name}/{price}', [Day4TestController::class, 'create']);
    Route::get('/', [Day4TestController::class, 'showAll']);
    Route::get('{id}', [Day4TestController::class, 'show'])->whereNumber('id');
    Route::get('update/{id}/{name?}/{price?}', [Day4TestController::class, 'update'])->whereNumber('id')->whereNumber('price');
    Route::get('delete/{id}', [Day4TestController::class, 'destroy'])->whereNumber('id');
});