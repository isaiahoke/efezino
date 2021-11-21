<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return "hello Welcome";//view('welcome');
});

Route::get('/about', function() {
    return'<h4> about page </h4>';
});

Route::get('/store', function() {

    $category = request('category');
    return 'you are viewing the store' . strip_tags($category);

});
