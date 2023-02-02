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
    return view('welcome');
});


// Route::get('/products', function () {
//     $names = ["ahmed","mohamed","ali"];
//     return view('products',["names"=>$names]);
// });

Route::get("/products",[App\Http\Controllers\ProductsController::class,'index']);
// Route::get("/products/{name}",[App\Http\Controllers\ProductsController::class,'show']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get("/",[App\Http\Controllers\ApiController::class,"home"]->name('home'));

