<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



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

Route::get('/',[HomeController::class, 'index']);

Route::get('/about',[HomeController::class, 'about']);


Route::get('/contact',[HomeController::class, 'contact']);


Route::get('/weather',[HomeController::class, 'weather']);


Route::get('/store/{category?}/{item?}', function($category = null, $item = null) {

    if (isset($category)){

        if(isset($item)){
              return "you are viewing the store {$category} for {$item}";
        }



            return 'you are viewing the store ' . strip_tags($category);
    }

    return 'you are viewing all instruments'; 

});


/* Route::get('/store', function() {

    $category = request('category');

    if (isset($category)){
            return 'you are viewing the store' . strip_tags($category);
    }

    return 'you are viewing all instruments'; 

});
 */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
