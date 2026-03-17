<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Day 1 - Basic Route
Route::get('Day1/hello', function () {
    return 'Hello Laravel';
});

Route::get('Day1/hello/{name}', function ($name) {
    return "Hello " . $name;
});

// Day 1 - test 1
Route::get('Day1/hi', function () {
    return 'Hi Laravel';
});

// Day 1 - test 2
Route::get('Day1/user/{name}', function ($name) {
    return 'User: ' . $name;
});

// Day 1 - test 3
Route::get('Day1/add/{a}/{b}', function ($a, $b) {
    $total = (int)$a + (int)$b;
    return $total;
})->where(['a' => '[0-9]+', 'b' => '[0-9]+']);

// Day 1 - test 4
Route::get('Day1/multiply/{a}/{b}', function ($a, $b) {
    $total = (int)$a * (int)$b;
    return $a . '*' . $b . ' = ' . $total;
})->where(['a' => '[0-9]+', 'b' => '[0-9]+']);


// Day 2 - Route with parameter
Route::get('Day2/userid/{id}', function ($id) {
    return "User ID: " . $id;
});

// Day 2 - Route with multiple parameters
Route::get('Day2/post/{postId}/comment/{commentId}', function ($postId, $commentId) {
    return "Post: $postId, Comment: $commentId";
});

// Day 2 - Route with 可選參數
Route::get('Day2/username/{name?}', function ($name = 'Guest') {
    return "Hello " . $name;
});

// Day 2 - Route with parameter constraint
Route::get('Day2/user/{id}', function ($id) {
    return "User ID: " . $id;
})->where('id', '[0-9]+');

// Day 2 - give Route a name 
Route::get('Day2/profile', function () {
    return "User Profile";
})->name('profile');

// Day 2 - Route with parameter constraint and name
Route::get('Day2/product/{id}', function ($id) {
    return "Product ID: " . $id;
})->where('id', '[0-9]+')->name('product.show');

// Day 2 - generate URL for named route
Route::get('Day2/get_url', function () {
    $url1 = route('profile');
    $url2 = route('product.show', ['id' => 123]);
    return $url1 . '<br>' . $url2;
});

// Day 2 - Test 1
Route::get('Day2Test/hello/{name}', function ($name) {
    return 'Hello, ' . $name;
});

// Day 2 - Test 2
Route::get('Day2Test/user/{id}', function ($id) {
    return 'user id: ' . $id;
})->where('id', '[0-9]+');

// Day 2 - Test 3
Route::get('Day2Test/post/{id}', function ($id) {
    return route('post.show', ['id' => $id]);
})->where('id', '[0-9]+')->name('post.show');

// Day 2 - Test 4
Route::get('Day2Test/product/{id}/{name?}', 
 function ($id, $name=null) {
    return "Product: $id - " . ($name ?? 'No Name');
})->whereNumber('id')->name('product.show');