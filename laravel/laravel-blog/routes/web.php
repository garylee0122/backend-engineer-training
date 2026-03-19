<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//////////////// day 1 ///////////////////

// day 1 - Basic Route
Route::get('day1/hello', function () {
    return 'Hello Laravel';
});

Route::get('day1/hello/{name}', function ($name) {
    return "Hello " . $name;
});

// day 1 - test 1
Route::get('day1/hi', function () {
    return 'Hi Laravel';
});

// day 1 - test 2
Route::get('day1/user/{name}', function ($name) {
    return 'User: ' . $name;
});

// day 1 - test 3
Route::get('day1/add/{a}/{b}', function ($a, $b) {
    $total = (int)$a + (int)$b;
    return $total;
})->where(['a' => '[0-9]+', 'b' => '[0-9]+']);

// day 1 - test 4
Route::get('day1/multiply/{a}/{b}', function ($a, $b) {
    $total = (int)$a * (int)$b;
    return $a . '*' . $b . ' = ' . $total;
})->where(['a' => '[0-9]+', 'b' => '[0-9]+']);


//////////////// day 2 ///////////////////

// day 2 - Route with parameter
Route::get('day2/userid/{id}', function ($id) {
    return "User ID: " . $id;
});

// day 2 - Route with multiple parameters
Route::get('day2/post/{postId}/comment/{commentId}', function ($postId, $commentId) {
    return "Post: $postId, Comment: $commentId";
});

// day 2 - Route with 可選參數
Route::get('day2/username/{name?}', function ($name = 'Guest') {
    return "Hello " . $name;
});

// day 2 - Route with parameter constraint
Route::get('day2/user/{id}', function ($id) {
    return "User ID: " . $id;
})->where('id', '[0-9]+');

// day 2 - give Route a name 
Route::get('day2/profile', function () {
    return "User Profile";
})->name('profile');

// day 2 - Route with parameter constraint and name
Route::get('day2/product/{id}', function ($id) {
    return "Product ID: " . $id;
})->where('id', '[0-9]+')->name('product.show');

// day 2 - generate URL for named route
Route::get('day2/get_url', function () {
    $url1 = route('profile');
    $url2 = route('product.show', ['id' => 123]);
    return $url1 . '<br>' . $url2;
});

// day 2 - Test 1
Route::get('day2test/hello/{name}', function ($name) {
    return 'Hello, ' . $name;
});

// day 2 - Test 2
Route::get('day2test/user/{id}', function ($id) {
    return 'user id: ' . $id;
})->where('id', '[0-9]+');

// day 2 - Test 3
Route::get('day2test/post/{id}', function ($id) {
    return route('post.show', ['id' => $id]);
})->where('id', '[0-9]+')->name('post.show');

// day 2 - Test 4
Route::get('day2test/product/{id}/{name?}', 
 function ($id, $name=null) {
    return "Product: $id - " . ($name ?? 'No Name');
})->whereNumber('id')->name('product.show');


//////////////// day 3 ///////////////////

use App\Http\Controllers\Day3DemoController;

Route::get('day3/hello/{name}', [Day3DemoController::class, 'hello']);
Route::get('day3/user/{id}/{name?}', [Day3DemoController::class, 'user'])->whereNumber('id');

use App\Http\Controllers\Day3TestController;
// day 3 - Test 1
Route::get('day3test/hello/{name}', [Day3TestController::class, 'hello']);
// day 3 - Test 2
Route::get('day3test/user/{id}', [Day3TestController::class, 'user']);
// day 3 - Test 3
Route::get('day3test/product/{id}', [Day3TestController::class, 'product']);
// day 3 - Test 4
Route::get('day3test/orders/{id}', [Day3TestController::class, 'orders']);


//////////////// day 4 ///////////////////

use App\Http\Controllers\Day4DemoProductController;

Route::prefix('day4/products')->group(function () {
    Route::get('create', [Day4DemoProductController::class, 'store']);
    Route::get('/', [Day4DemoProductController::class, 'index']);
    Route::get('{id}', [Day4DemoProductController::class, 'show'])->whereNumber('id');
});