<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Day3TestController;

// Day 3 - Test 1
Route::get('Day3Test/hello/{name}', [Day3TestController::class, 'hello']);
// Day 3 - Test 2
Route::get('Day3Test/user/{id}', [Day3TestController::class, 'user']);
// Day 3 - Test 3
Route::get('Day3Test/product/{id}', [Day3TestController::class, 'product']);
// Day 3 - Test 4
Route::get('Day3Test/orders/{id}', [Day3TestController::class, 'orders']);