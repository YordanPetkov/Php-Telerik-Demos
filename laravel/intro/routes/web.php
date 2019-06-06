<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
GET /user/ivan
POST /user
DELETE /user/ivan
POST /user/ivan
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-c/{name}', 'HomeController@index');

Route::get('/admin-c', 'Admin\\AdminController@index');

Route::get('/hello', function() {
    return view('public.hello', ['username' => 'dancho']);
});

Route::get('/user/{username}', function ($username, $id = null) {
    return 'Hello from ' . $username . ' with where.';
})->where('username', '[A-Za-z]+');

Route::get('/user/{username}/{id?}', function ($username, $id = null) {
    return 'Hello from ' . $username . ' - ' . $id;
});

Route::get('/greet/{username}', function ($username) {
    return view('public.greeting', ['username' => $username]);
});

Route::get('/layout-demo', 'LayoutController@index');

Route::get('/session-demo', 'SessionDemoController@index');

Route::get('/register', 'ValidationDemoController@register_form');
Route::post('/register', 'ValidationDemoController@register')->name('register_url');

Route::get('/middleware-demo', 'MiddlewareDemoController@index')->middleware('test');
Route::get('/dbdemo', 'DBdemo@index');
Route::get('/eqdbdemo', 'DBdemo@EloquentDemo');